<?php

// include_once('../db/defineUrl.php');
include_once __DIR__ . '/../db/defineUrl.php';

require ROOT_FOLDER.'vendor/autoload.php';
// require ROOT_FOLDER.'vendor/phpmailer/phpmailer/src/Exception.php';
// require ROOT_FOLDER.'vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require ROOT_FOLDER.'vendor/phpmailer/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function regmail($email,$username,$token){
    $link = "<a href=".BASEURL."email/verify_email.php?key=".$email."&token=".$token.">Click and Verify Email</a>";
    $mail = new PHPMailer();

    $mail->IsSMTP(); 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAutoTLS = false;                                      // set mailer to use SMTP
    $mail->SMTPAuth = true;     // turn on SMTP authentication
    // $mail->SMTPSecure = "tls";
    // $mail->Host = "smtp.gmail.com";  // specify main and backup server
    $mail->Host = 'mail.bizgrowthh.com';
    $mail->Port = 465;
    $mail->Username = "info@bizgrowthh.com";  // SMTP username
    $mail->Password = "Kuber@2498#"; // SMTP password

    $mail->From = "info@bizgrowthh.com";
    $mail->FromName = "Bizgrowth (Erfinden Technologies)";
    $mail->AddAddress($email, $username);
    // $mail->AddReplyTo("falgunidable@gmail.com", "Bizgrowth (Erfinden Technologies)");
    $mail->WordWrap = 50;                                 // set word wrap to 50 characters
    $mail->IsHTML(true);                                  // set email format to HTML

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->Subject  =  'Registered Successfully';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Verify Email '.$link.'';
    // echo 'success';

    if($mail->Send())
    {
        return true;
    }
    else
    {
        return false;
    }
}
function regmailsocial($email,$username,$subject,$body){
    $mail = new PHPMailer();

    $mail->IsSMTP(); 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAutoTLS = false;                                      // set mailer to use SMTP
    $mail->SMTPAuth = true;     // turn on SMTP authentication
    // $mail->SMTPSecure = "tls";
    // $mail->Host = "smtp.gmail.com";  // specify main and backup server
    $mail->Host = 'mail.bizgrowthh.com';
    $mail->Port = 465;
    $mail->Username = "info@bizgrowthh.com";  // SMTP username
    $mail->Password = "Kuber@2498#"; // SMTP password

    $mail->From = "info@bizgrowthh.com";
    $mail->FromName = "Bizgrowth (Erfinden Technologies)";
    $mail->AddAddress($email, $username);
    // $mail->AddReplyTo("falgunidable@gmail.com", "Bizgrowth (Erfinden Technologies)");
    $mail->WordWrap = 50;                                 // set word wrap to 50 characters
    $mail->IsHTML(true);                                  // set email format to HTML

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->Subject  =  $subject;
    $mail->IsHTML(true);
    $mail->Body    = $body;
    // echo 'success';

    if($mail->Send())
    {
        return true;
    }
    else
    {
        return false;
    }

}
?>