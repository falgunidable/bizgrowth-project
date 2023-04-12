<?php 
 session_start();
// Include the configuration file 
require_once './config.php'; 
 
// Include the database dbection file 
include_once 'dbConnect.php'; 

$authemail = $_SESSION['email'];
 
//email file
include_once __DIR__ . '/../email/email.php';

// Include the Stripe PHP library 
require_once '../vendor/autoload.php';
 
// Set API key 
\Stripe\Stripe::setApiKey(STRIPE_API_KEY); 
 
// Retrieve JSON from POST body 
$jsonStr = file_get_contents('php://input'); 
$jsonObj = json_decode($jsonStr); 
 
if($jsonObj->request_type == 'create_payment_intent'){ 
     
    // Define item price and convert to cents 
    $itemPriceCents = round($itemPrice*100); 
     
    // Set content type to JSON 
    header('Content-Type: application/json'); 
     
    try { 
        // Create PaymentIntent with amount and currency 
        $paymentIntent = \Stripe\PaymentIntent::create([ 
            'amount' => $itemPriceCents, 
            'currency' => $currency, 
            'description' => $itemName, 
            'payment_method_types' => [ 
                'card' 
            ] 
        ]); 
     
        $output = [ 
            'id' => $paymentIntent->id, 
            'clientSecret' => $paymentIntent->client_secret 
        ]; 
     
        echo json_encode($output); 
    } catch (Error $e) { 
        http_response_code(500); 
        echo json_encode(['error' => $e->getMessage()]); 
    } 
}elseif($jsonObj->request_type == 'create_customer'){ 
    $payment_intent_id = !empty($jsonObj->payment_intent_id)?$jsonObj->payment_intent_id:''; 
    $name = !empty($jsonObj->name)?$jsonObj->name:''; 
    $email = !empty($jsonObj->email)?$jsonObj->email:''; 
    $contact = !empty($jsonObj->contact)?$jsonObj->contact:''; 
    $address = !empty($jsonObj->address)?$jsonObj->address:'';
    $state = !empty($jsonObj->state)?$jsonObj->state:''; 
    $city = !empty($jsonObj->city)?$jsonObj->city:''; 
    $pincode = !empty($jsonObj->pincode)?$jsonObj->pincode:''; 
     
    // Add customer to stripe 
    try {   
        $customer = \Stripe\Customer::create(array(  
            'name' => $name,  
            'email' => $email,
            'contact' => $contact,
            'address' => $address,
            'state' => $state,
            'city' => $city,
            'pincode' => $pincode,
        ));  
    }catch(Exception $e) {   
        $api_error = $e->getMessage();   
    } 
     
    if(empty($api_error) && $customer){ 
        try { 
            // Update PaymentIntent with the customer ID 
            $paymentIntent = \Stripe\PaymentIntent::update($payment_intent_id, [ 
                'customer' => $customer->id 
            ]); 
        } catch (Exception $e) {  
            // log or do what you want 
        } 
         
        $output = [ 
            'id' => $payment_intent_id, 
            'customer_id' => $customer->id 
        ]; 
        echo json_encode($output); 
    }else{ 
        http_response_code(500); 
        echo json_encode(['error' => $api_error]); 
    } 
}elseif($jsonObj->request_type == 'payment_insert'){ 
    $payment_intent = !empty($jsonObj->payment_intent)?$jsonObj->payment_intent:''; 
    $customer_id = !empty($jsonObj->customer_id)?$jsonObj->customer_id:''; 
     
    // Retrieve customer info 
    try {   
        $customer = \Stripe\Customer::retrieve($customer_id);  
    }catch(Exception $e) {   
        $api_error = $e->getMessage();   
    } 
     
    // Check whether the charge was successful 
    if(!empty($payment_intent) && $payment_intent->status == 'succeeded'){ 
        // Transaction details  
        $transaction_id = $payment_intent->id; 
        $paid_amount = $payment_intent->amount; 
        $paid_amount = ($paid_amount/100); 
        $paid_currency = $payment_intent->currency; 
        $payment_status = $payment_intent->status; 
         
        $customer_name = $customer_email = $contact = $address = $state = $city = $pincode = ''; 
        if(!empty($customer)){ 
            $customer_name = !empty($customer->name)?$customer->name:''; 
            $customer_email = !empty($customer->email)?$customer->email:'';
            $contact = !empty($customer->contact)?$customer->contact:''; 
            $address = !empty($customer->address)?$customer->address:'';
            $state = !empty($customer->state)?$customer->state:''; 
            $city = !empty($customer->city)?$customer->city:''; 
            $pincode = !empty($customer->pincode)?$customer->pincode:'';  
        } 
         
        // Check if any transaction data is exists already with the same TXN ID 
        $sqlQ = "SELECT id FROM transactions WHERE txn_id = ?"; 
        $stmt = $db->prepare($sqlQ);  
        $stmt->bind_param("s", $transaction_id); 
        $stmt->execute(); 
        $stmt->bind_result($row_id); 
        $stmt->fetch(); 
         
        $payment_id = 0; 
        if(!empty($row_id)){ 
            $payment_id = $row_id; 
        }else{ 

            $auth = "SELECT `auth_method` from `authentication_method` where `email` = '$authemail'";
            $resauth = mysqli_query($db,$auth);
            $rowauth = mysqli_fetch_assoc($resauth);
            $authtype = $rowauth['auth_method'];

            if($authtype == 'email-auth'){
                $emailsql = "SELECT `uid` from `users` where `email` = '$authemail'";
                $resid = mysqli_query($db,$emailsql);
                $rowid = mysqli_fetch_assoc($resid);
                $uid = $rowid['uid'];
            }else{
                $emailsql = "SELECT `id` from `googleusers` where `email` = '$authemail'";
                $resid = mysqli_query($db,$emailsql);
                $rowid = mysqli_fetch_assoc($resid);
                $uid = $rowid['id'];
            }

            if(isset($_SESSION['gst_form'])){
                $nameYourself = $_SESSION['gst_form']['nameYourself'];
                $panName = $_SESSION['gst_form']['panName'];
                $sector = $_SESSION['gst_form']['sector'];
                $state = $_SESSION['gst_form']['state'];
                $city = $_SESSION['gst_form']['city'];
                $panNo = $_SESSION['gst_form']['panNo'];
                $pincode = $_SESSION['gst_form']['pincode'];
                $mobile = $_SESSION['gst_form']['mobile'];

                //Insert user details of service
                $sql = "INSERT INTO gst_service(`position`, `pan_name`, `sector`, `state`, `city`, `pan_no`, `pincode`, `phone`,`uid`) VALUES ('$nameYourself','$panName','$sector','$state','$city','$panNo','$pincode','$mobile','$uid')";
            }

            if(isset($_SESSION['udyam_form'])){
                $sc = $_SESSION['udyam_form']['sc'];
                $aadhar = $_SESSION['udyam_form']['aadhar'];
                $businessName = $_SESSION['udyam_form']['businessName'];
                $address= $_SESSION['udyam_form']['address'];
                $gender = $_SESSION['udyam_form']['gender'];
                $gst = $_SESSION['udyam_form']['gst'];
                $state = $_SESSION['udyam_form']['state'];
                $city = $_SESSION['udyam_form']['city'];
                $startDate = $_SESSION['udyam_form']['startDate'];
                $panNo = $_SESSION['udyam_form']['panNo'];
                $pincode = $_SESSION['udyam_form']['pincode'];
                $mobile = $_SESSION['udyam_form']['mobile'];

                //Insert user details of service
                $sql = "INSERT INTO `udyam_service`(`name`, `aadhar`, `businessname`, `panNo`, `address`, `state`, `city`, `gender`, `gst`, `sc`, `startDate`, `pincode`, `mobile`,`uid`) VALUES 
                ('$customer_name','$aadhar','$businessName','$panNo','$address','$state','$city','$gender','$gst','$sc','$startDate','$pincode','$mobile','$uid')";
            }

            if(isset($_SESSION['social_form'])){
                $serviceplan = $_SESSION['social_form']['serviceplan'];

                $sql = "INSERT INTO `social_service`(`service_plan`, `service_charge`, `uid`) VALUES 
                ('$serviceplan','$itemPrice','$uid')";
            }
  
            $checkprofile = "SELECT * from `profile_info` where `uid` = '$id'";
            $resprofile = mysqli_query($db,$checkprofile);

            if(mysqli_num_rows($resprofile) == 0){
                $sql = "INSERT INTO `profile_info` (`contact`, `address`, `state`,`city`,`pincode`,`uid`) VALUES ('$contact','$address','$state','$city','$pincode',138)";
            }else{
                $sql = "UPDATE `profile_info` SET `contact`='$contact',`address`='$address',`state`='$state',`city`='$city',`pincode`='$pincode',`uid`=138";
            }

            // Insert transaction data into the database 
            $sqlQ = "INSERT INTO transactions (customer_name,customer_email,item_name,item_price,item_price_currency,paid_amount,paid_amount_currency,txn_id,payment_status,created,modified) VALUES (?,?,?,?,?,?,?,?,?,NOW(),NOW())"; 
            $stmt = $db->prepare($sqlQ); 
            $stmt->bind_param("sssdsdsss", $customer_name, $customer_email, $itemName, $itemPrice, $currency, $paid_amount, $paid_currency, $transaction_id, $payment_status); 
            $insert = $stmt->execute(); 

             
            if($insert){ 
                $subject = "Payment Status and Service Avail";
                $body = "<h4><b>Payment Successful !</b></h4><br/>
                <img src='../images/service.png' width='60%' /><br/><br/>
                <b>Transaction Id:</b> ".$transaction_id."<br/>
                <b>Service:</b> ".$itemName."<br/>
                <b>Amount Paid:</b> ".$paid_amount." ".$currency."<br/><br/>
                Your request has been received and will be looked into <b>within 2 days</b> and you will be contacted soon.<br/><br/>
                Thank You.";
                if(regmailsocial($customer_email,$customer_name,$subject,$body)){
                    if(mysqli_query($db, $sql)){
                        if(mysqli_query($db, $profile)){
                            $payment_id = $stmt->insert_id; 
                        }
                    }
                }
            } else{
                echo 'payment error';
            }
        } 
         
        $output = [ 
            'payment_txn_id' => base64_encode($transaction_id) 
        ]; 
        echo json_encode($output); 
    }else{ 
        http_response_code(500); 
        echo json_encode(['error' => 'Transaction has been failed!']); 
    } 
} 
 
?>