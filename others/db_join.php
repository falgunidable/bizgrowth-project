<?php
include_once('../db/defineUrl.php');
include ROOT_FOLDER.'db/connect.php';
require_once(ROOT_FOLDER.'email/email.php');

if(isset($_POST['joinus'])){
    
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$experience = $_POST['exp'];
$company = $_POST['company'];

// $token = md5($email).rand(10,9999);
$sql="INSERT INTO `joinus`(`name`, `email`, `contact`, `age`, `gender`, `exp`, `company`) VALUES ('$name','$email','$contact','$age','$gender','$experience','$company')";

// if(regmail($email,$username,$token)){
    if(mysqli_query($conn, $sql)){
        echo 'success';
    } else{
        echo 'error';
    }
// }else{   
//     echo 'notsend';
// }
}
?>