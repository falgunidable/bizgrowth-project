<?php
 include "../db/connect.php";
 include_once('../db/defineUrl.php');

if(isset($_GET['key']) && isset($_GET['token'])){
    $email = $_GET['key'];
    $token = $_GET['token'];
    // $check = "SELECT * FROM `users` WHERE `email_verification_link`='".$token."' and `email`='$email';";
    // $res = mysqli_query($conn, $check);

    $checksign = "SELECT * FROM `users` WHERE `email_verification_link`='".$token."' and `email`='".$email."' ";
    $res = mysqli_query($conn, $checksign);

    $d = date('Y-m-d H:i:s');
    if (mysqli_num_rows($res) > 0) {
        $row= mysqli_fetch_array($res);
        if($row['email_verified_at'] == NULL){
        mysqli_query($conn,"UPDATE users set email_verified_at ='$d' WHERE email='$email'");
        $msg = "Thank You for registering with the Bizgrowth Organization.<br/><br/><br/>We look forward to help you with your business.<br/><br/><br/><b>Thank you</b>.";
        }else{
            $msg = "You have already verified your account with us";
        }
    } else {
    $msg = "This email has been not registered with us";
    }
}else{
    $msg = "Danger! Something is wrong.";
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>User Account Activation by Email Verification using PHP</title>
        <!-- CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header text-center">
                    User Account Activation by Email Verification using PHP
                </div>
                <div class="card-body">
                    <p><?php echo $msg; ?></p><br>
                    <a href="<?php echo BASEURL ?>" class="btn btn-default"><b>Login</b></a>
                </div>
            </div>
        </div>
    </body>
</html>