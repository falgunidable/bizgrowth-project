<?php
include_once('../db/defineUrl.php');
include './connect.php';

$email = $_POST['email'];
$username = $_POST['username'];

$checkgoogle = "SELECT * FROM googleusers WHERE email='$email'";
$resgoogle = mysqli_query($conn, $checkgoogle);

$checksign = "SELECT * FROM `users` WHERE `email`='$email' OR `username`='$username'";
$resuser = mysqli_query($conn, $checksign);

if (mysqli_num_rows($resuser) == 1 || mysqli_num_rows($resgoogle) == 1) {
    $user = mysqli_fetch_assoc($resuser);
    $usergoogle = mysqli_fetch_assoc($resgoogle);

    if (!empty($user) && $username == $user['username']) {
        echo 'username';
    }else if (!empty($user) && $email == $user['email'] || !empty($usergoogle) && $email == $usergoogle['email']) {
        echo 'email';
    }
}else{
    echo 'success';
}

?>