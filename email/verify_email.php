<?php
 include "../db/connect.php";
 include_once('../db/defineUrl.php');

if(isset($_GET['key']) && isset($_GET['token'])){
    $email = $_GET['key'];
    $token = $_GET['token'];

    $checksign = "SELECT * FROM `users` WHERE `email_verification_link`='".$token."' and `email`='".$email."' ";
    $res = mysqli_query($conn, $checksign);

    $d = date('Y-m-d H:i:s');
    if (mysqli_num_rows($res) > 0) {
        $row= mysqli_fetch_array($res);
        if($row['email_verified_at'] == NULL){
        mysqli_query($conn,"UPDATE users set email_verified_at ='$d' WHERE email='$email'");
        $msg = "<h5 style='line-height:1.7'>Thank You for registering with the<b> Bizgrowth Organization</b>.
        <br/>We look forward to help you with your business.<br/><br/><b>Thank you !</b><br/></h5>";
        $type="bg-success";
        }else{
            $msg = "<h5 class='text-center'><B>You have already verified your account with us</B></h5><br/>";
            $type="bg-success";
        }
    } else {
    $msg = "<h5 class='text-center'><b>This email has been not registered with us</b></h5><Br/>";
    $type="bg-warning";
    }
}else{
    $msg = "<h5 class='text-center'><b>Danger ! Something is wrong.</b></h5><br/>";
    $type="bg-danger";
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
             @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
                *{
                    font-family:  'Montserrat', Fallback, sans-serif;
                }
            body {
                background-image: url('<?php echo BASEURL ?>images/handshake.gif');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="col-md-10">
                <div class="card shadow border-0">
                    <div class="card-header text-center <?php echo $type; ?>">
                        <h4 class="text-white"><b>Account Status</b></h4>
                    </div>
                    <div class="card-body">
                        <?php echo $msg; ?>
                        <div class="text-center"><a href="<?php echo BASEURL ?>" class="btn btn-primary"><b>Login</b></a></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>