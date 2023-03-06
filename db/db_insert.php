<?php
include './connect.php';
// session_start();

$username=$_POST['susername'];
$email = $_POST['semail'];
$password=$_POST['spassword'];

if(!empty($username) && !empty($email) && !empty($password)){
    $sql="INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";

    if(mysqli_query($conn, $sql)){
        // $_SESSION['notification'] = 'Registered Successfully.';
        // $_SESSION['notification_type'] = 'success';
        // header('location:../');
    
        echo 'success';
    } else{
        echo "ERROR: $sql. "
            . mysqli_error($conn);
    }
}else{
    // $_SESSION['notification'] = 'Please Enter the Credentials';
    // $_SESSION['notification_type'] = 'error';
    // header('location:../');
    echo 'error';
}
?>