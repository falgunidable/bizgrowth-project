<?php 
include_once __DIR__ . '/../db/defineUrl.php';
// Include the configuration file  
require_once './config.php'; 
 
// Include the database connection file  
require_once '../db/connect.php'; 
 
$payment_ref_id = $statusMsg = ''; 
$status = 'error'; 
 
// Check whether the payment ID is not empty 
if(!empty($_GET['pid'])){ 
    $payment_txn_id  = base64_decode($_GET['pid']); 
     
    // Fetch transaction data from the database 
    $sqlQ = "SELECT id,txn_id,paid_amount,item_name,item_price,paid_amount_currency,payment_status,customer_name,customer_email FROM transactions WHERE txn_id = ?"; 
    $stmt = $conn->prepare($sqlQ);  
    $stmt->bind_param("s", $payment_txn_id); 
    $stmt->execute(); 
    $stmt->store_result(); 
 
    if($stmt->num_rows > 0){ 
        // Get transaction details 
        $stmt->bind_result($payment_ref_id, $txn_id, $paid_amount, $itemName,$itemPrice,$paid_amount_currency, $payment_status, $customer_name, $customer_email); 
        $stmt->fetch(); 
         
        $status = 'Success'; 
        $statusMsg = 'Payment Successful!'; 
    }else{ 
        $statusMsg = "Transaction has been failed!"; 
    } 
}else{ 
    header("Location: ./"); 
    exit; 
} 
?>
<link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    *{
        font-family:  'Montserrat', Fallback, sans-serif;
    }
</style>
<?php 
if(!empty($payment_ref_id)){ ?>

    <!-- <h1 class="<?php echo $status; ?>"><?php echo $statusMsg; ?></h1>
    <h4>Payment Information</h4>
    <p><b>Reference Number:</b> <?php echo $payment_ref_id; ?></p>
    <p><b>Transaction ID:</b> <?php echo $txn_id; ?></p>
    <p><b>Paid Amount:</b> <?php echo $paid_amount.' '.$paid_amount_currency; ?></p>
    <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
    
    <h4>Customer Information</h4>
    <p><b>Name:</b> <?php echo $customer_name; ?></p>
    <p><b>Email:</b> <?php echo $customer_email; ?></p>
    
    <h4>Product Information</h4>
    <p><b>Name:</b> <?php echo $itemName; ?></p>
    <p><b>Price:</b> <?php echo $itemPrice.' '.$currency; ?></p> -->

    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow border-0 p-5">
            <img class="mx-auto d-block" src="<?php echo BASEURL ?>images/success.gif" width="25%"/>
            <h2 class="text-center" style="color:lightgreen"><b><?php echo $statusMsg; ?></b></h2><br/>
            <div style="line-height:1.5">
                <p><b>Customer Name: </b><?php echo $customer_name; ?></p>
                <p><b>Service Availed: </b><?php echo $itemName; ?></p>
                <p><b>Amount Paid: </b><?php echo $itemPrice.' '.$currency; ?></p>
            </div><br/>
            <a class="btn btn-outline-success" href="<?php echo BASEURL ?>"><b>Home</b></a>
        </div>
    </div>

<?php
 }else{ ?>
    <h1 class="error">Your Payment been failed!</h1>
    <p class="error"><?php echo $statusMsg; ?></p>
<?php 
} ?>