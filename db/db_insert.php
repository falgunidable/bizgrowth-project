<?php
include './connect.php';
require_once('../email.php');
session_start();

if(isset($_POST['signupSubmit']))
{
    if(!empty($_POST['susername']) && !empty($_POST['semail']) && !empty($_POST['spassword'])){
        $username=$_POST['susername'];
        $email = $_POST['semail'];
        $password=$_POST['spassword'];

        $checksign = "SELECT * FROM `users` WHERE `email`='$email'";
        $res = mysqli_query($conn, $checksign);

        if (mysqli_num_rows($res) == 1) {
            echo 'exist';
        }else{
            $token = md5($email).rand(10,9999);
            $sql="INSERT INTO `users`(`username`, `email`, `password`,`email_verification_link`,`email_verified_at`) VALUES ('$username','$email','$password','$token',null)";
            
            if(regmail($email,$username,$token)){
                if(mysqli_query($conn, $sql)){
                    $_SESSION['notification'] = 'Registered Successfully, Check Your Mail for Verification';
                    $_SESSION['notification_type'] = 'success';
                    echo 'success';
                } else{
                    echo 'error';
                }
            }else{   
                echo 'notsend';
            }
        }
    }else{   
            echo 'error';
        }
}

if(isset($_POST['submitLogin'])){

    $username = $_POST['lusername'];
    $password = $_POST['lpassword'];

    if(!empty($username) && !empty($password)){
        $login="SELECT * FROM `users` WHERE  `username`='$username' and `password`='$password' and `email_verified_at` != 'NULL'";
        $result = mysqli_query($conn, $login);

        // $check="SELECT * FROM `users` WHERE  `email_verified_at` != 'NULL'";
        // $resultc = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)){
                $uid = $row['uid'];
                $email = $row['email'];;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['uid'] = $uid;
                $_SESSION['notification'] = 'Login Successfull !';
                $_SESSION['notification_type'] = 'success';
                echo 'success';
            }
        }else{
            echo 'wrong';
        }
    }else{
        echo 'error';
    }
}
?>