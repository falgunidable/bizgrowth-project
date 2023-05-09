<?php
include_once('../db/defineUrl.php');
include './connect.php';
require_once(ROOT_FOLDER.'email/email.php');
session_start();

if(isset($_POST['signupSubmit'])){

    if(!empty($_POST['susername']) && !empty($_POST['semail']) && !empty($_POST['spassword'])){
        $username=$_POST['susername'];
        $email = $_POST['semail'];
        $password=$_POST['spassword'];

        $checkgoogle = "SELECT * FROM googleusers WHERE email='$email'";
	    $resgoogle = mysqli_query($conn, $checkgoogle);

        $checksign = "SELECT * FROM `users` WHERE `email`='$email' OR `username`='$username'";
        $resuser = mysqli_query($conn, $checksign);

        if (mysqli_num_rows($resuser) == 1 || mysqli_num_rows($resgoogle) == 1) {
            $user = mysqli_fetch_assoc($resuser);
            $usergoogle = mysqli_fetch_assoc($resgoogle);

            if (!empty($user) && $username == $user['username']) {
                echo 'usernameexist';
            }else if (!empty($user) && $email == $user['email'] || !empty($usergoogle) && $email == $usergoogle['email']) {
                echo 'emailexist';
            }

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
        
        $login="SELECT * FROM `users` WHERE `username`='$username' and `password`='$password' and `email_verified_at` != 'NULL'";
        $result = mysqli_query($conn, $login);

        $admin="SELECT * FROM `admin` WHERE `email`='$username' and `password`='$password'";
        $aresult = mysqli_query($conn, $admin);

        $consultant = "SELECT u.* from consultant as c, users as u where c.uid = u.uid and `username`='$username' and `password`='$password'";
        $cresult = mysqli_query($conn, $consultant);

        $loginupdate = "UPDATE users SET last_login = NOW() WHERE username='".$username."'";

        if(mysqli_num_rows($cresult) == 1){
            while($row = mysqli_fetch_assoc($cresult)){
                $uid = $row['uid'];
                $_SESSION['cusername'] = $username;
                $_SESSION['email'] = $username;
                $_SESSION['uid'] = $uid;
                $_SESSION['notification'] = 'Welcome '.$username.' !';
                $_SESSION['notification_type'] = 'success';
                echo 'consultant';
            }
        }else if(mysqli_num_rows($aresult) == 1){
            while($row = mysqli_fetch_assoc($aresult)){
                $uid = $row['id'];
                $_SESSION['email'] = $username;
                $_SESSION['uid'] = $uid;
                $_SESSION['notification'] = 'Welcome '.$username.' !';
                $_SESSION['notification_type'] = 'success';
                echo 'admin';
            }
        }else if (mysqli_num_rows($result) == 1) {
            if(mysqli_query($conn, $loginupdate)){
                while($row = mysqli_fetch_assoc($result)){
                    $uid = $row['uid'];
                    $email = $row['email'];
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    $_SESSION['uid'] = $uid;
                    $_SESSION['notification'] = 'Welcome '.$username.' !';
                    $_SESSION['notification_type'] = 'success';
                    echo 'success';
                }
            }
        }else{
            echo 'wrong';
        }
    }else{
        echo 'error';
    }
}
?>