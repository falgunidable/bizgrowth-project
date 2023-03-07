<?php
include './connect.php';
session_start();

if(isset($_POST['signupSubmit']))
{
    // if(!empty($_POST['susername']) && !empty($_POST['semail']) && !empty($_POST['spassword'])){
        $username=$_POST['susername'];
        $email = $_POST['semail'];
        $password=$_POST['spassword'];

        $checksign = "SELECT * FROM `users` WHERE  `username`='$username' and `password`='$password'";
        $res = mysqli_query($conn, $checksign);

        if (mysqli_num_rows($res) == 1) {
            echo 'exist';
        }else{
            $sql="INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
            if(mysqli_query($conn, $sql)){
                echo 'success';
            } else{
                echo 'error';
            }
        }
    // }else{   
    //         echo 'error';
    //     }
}

if(isset($_POST['submitLogin'])){

    $username = $_POST['lusername'];
    $password = $_POST['lpassword'];

    // if(!empty($username) && !empty($password)){
        $login="SELECT * FROM `users` WHERE  `username`='$username' and `password`='$password'";
        $result = mysqli_query($conn, $login);

        if (mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)){
                $uid = $row['uid'];
                $email = $row['email'];;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['uid'] = $uid;
                echo 'success';
            }
        }else{
            echo 'wrong';
        }
    // }else{
    //     // $_SESSION['notification'] = 'Please Enter the Credentials';
    //     // $_SESSION['notification_type'] = 'error';
    //     // header('location:../');
    //     echo 'error';
    // }
}
?>