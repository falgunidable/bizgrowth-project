<?php
require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function regmail($email,$name,$link){

    $mail = new PHPMailer();

    $mail->IsSMTP(); 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAutoTLS = false;                                      // set mailer to use SMTP
    $mail->SMTPAuth = true;     // turn on SMTP authentication
    // $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";  // specify main and backup server
    $mail->Port = 465;
    $mail->Username = "falgunidable@gmail.com";  // SMTP username
    $mail->Password = "umihjozqzgptiquv"; // SMTP password

    $mail->From = "falgunidable@gmail.com";
    $mail->FromName = "Bizgrowth (Erfinden Technologies)";
    $mail->AddAddress($email, $name);
    // $mail->AddReplyTo("falgunidable@gmail.com", "Bizgrowth (Erfinden Technologies)");
    $mail->WordWrap = 50;                                 // set word wrap to 50 characters
    $mail->IsHTML(true);                                  // set email format to HTML

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->Subject  =  'Registered Successfully';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Verify Email '.$link.'';
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