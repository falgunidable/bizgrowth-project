<?php
include('../db/connect.php');
session_start();

if(isset($_POST['gstserviceForm'])){
    $gstservice = $_POST['gstserviceForm'];
    $name =  $_POST['fullname'];
    $nameYourself = $_POST['nameYourself'];
    $panName =  $_POST['panName'];
    $sector = $_POST['sector'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $panNo = $_POST['panNo'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gstprice = $_POST['gstprice'];

    // Performing insert query execution
    if(!empty($name) && !empty($nameYourself) && !empty($panName) && !empty($sector) && !empty($state) && 
    !empty($city) && !empty($panNo) && !empty($pincode) && !empty($email) && !empty($mobile)){
        if(isset($_POST['agree'])){
                
            $_SESSION['notification'] = 'GST Form Details Saved Successfully.';
            $_SESSION['notification_type'] = 'success';

            // Store the form data in a session variable
            $_SESSION['gst_form'] = array(
                'name' => $name,
                'nameYourself' => $nameYourself,
                'panName' => $panName,
                'sector' => $sector,
                'state' => $state,
                'city' => $city,
                'panNo' => $panNo,
                'pincode' => $pincode,
                'email' => $email,
                'mobile' => $mobile,
                'gstprice' => $gstprice,
                'gstservice' => $gstservice
            );
            
            echo 'success';
            
        }else{
            echo 'notagree';
        }
    }else{
        echo 'error';
    }
}

if(isset($_POST['udyamserviceForm'])){
    $udyamservice = $_POST['udyamserviceForm'];
    $name =  $_POST['fullname'];
    $aadhar = $_POST['aadhar'];
    $businessName =  $_POST['businessName'];
    $panNo = $_POST['panNo'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $gender = $_POST['gstgender'];
    $gst = $_POST['gstradio'];
    $sc = $_POST['sc'];
    $startDate = $_POST['startDate'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $udyamprice = $_POST['udyamprice'];
        
    // Performing insert query execution
    if(!empty($name) && !empty($aadhar) && !empty($businessName) && !empty($address) && !empty($state) && !empty($city) && 
    !empty($panNo) && !empty($pincode) && !empty($sc) && !empty($email) && !empty($mobile)){
        if(isset($_POST['agreecond'])){
            // $sql = "INSERT INTO `udyam_service`(`name`, `aadhar`, `businessname`, `panNo`, `address`, `state`, `city`, `gender`, `gst`, `sc`, `startDate`, `pincode`, `email`, `mobile`) VALUES 
            // ('$name','$aadhar','$businessName','$panNo','$address','$state','$city','$gender','$gst','$sc','$startDate','$pincode','$email','$mobile')";
            
            // if(mysqli_query($conn, $sql)){
                
                $_SESSION['notify'] = 'Udyam Form Details Saved Successfully.';
                $_SESSION['notify_type'] = 'success';

                $_SESSION['udyam_form'] = array(
                    'name' => $name,
                    'aadhar' => $aadhar,
                    'businessName' => $businessName,
                    'address' => $address,
                    'state' => $state,
                    'city' => $city,
                    'gender' => $gender,
                    'gst' => $gst,
                    'panNo' => $panNo,
                    'startDate' => $startDate,
                    'sc' => $sc,
                    'pincode' => $pincode,
                    'email' => $email,
                    'mobile' => $mobile,
                    'udyamprice' => $udyamprice,
                    'udyamservice' => $udyamservice
                );

                echo 'success';
            // } else{
            //     echo "ERROR: Hush! Sorry $sql. "
            //         . mysqli_error($conn);
            // }
        }else{
            echo 'notagree';
        }
    }else{
        echo 'error';
    }
}

if(isset($_POST['socialform'])){
    $socialservice = $_POST['socialform'];
    $serviceplan = $_POST['servicecharge'];
    $name = $_SESSION['username'];
    $email = $_SESSION['email'];

    if($serviceplan === '1 month'){$socialprice = 5310;}
    if($serviceplan === '3 month'){$socialprice = 10310;}

    $_SESSION['social_form'] = array(
        'socialprice' => $socialprice,
        'serviceplan' => $serviceplan,
        'socialservice' => $socialservice,
        'name' => $name,
        'email' => $email
    );

    echo 'success';
}
// Close connection
mysqli_close($conn);

?>
