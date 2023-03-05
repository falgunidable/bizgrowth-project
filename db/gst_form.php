<?php
include('db/connect.php');
session_start();

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
    
// Performing insert query execution
if(!empty($name) && !empty($nameYourself) && !empty($panName) && !empty($sector) && !empty($state) && 
!empty($city) && !empty($panNo) && !empty($pincode) && !empty($email) && !empty($mobile)){
    if(isset($_POST['agree'])){
        $sql = "INSERT INTO gst_service(`name`, `position`, `pan_name`, `sector`, `state`, `city`, `pan_no`, `pincode`, `email`, `phone`) VALUES ('$name','$nameYourself','$panName','$sector','$state','$city','$panNo','$pincode','$email','$mobile')";
        
        if(mysqli_query($conn, $sql)){
            
            $_SESSION['notification'] = 'Form submitted successfully.';
            $_SESSION['notification_type'] = 'success';
            header('location:../gst/gst_register');
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
    }else{
        $_SESSION['notification'] = 'Except Terms & conditions for Form Submit';
        $_SESSION['notification_type'] = 'error';
        header('location:../gst/gst_register');
    }
}else{
    $_SESSION['notification'] = 'Please fill in all fields.';
    $_SESSION['notification_type'] = 'error';
    header('location:../gst/gst_register');
}
    
// Close connection
mysqli_close($conn);

?>
