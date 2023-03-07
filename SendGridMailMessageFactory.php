<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require_once 'vendor/autoload.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
	{
       
		require_once("config.php"); 
        require_once("Code/functions.php");
		CheckSession();
        require_once("Code/ComposeReport.php");
	
		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);
		
		try{
			//Server settings
			$mail->SMTPDebug = 3;
			$mail->isSMTP();                                            
			$mail->Host       = 'my exchange server ip address';                   
			$mail->SMTPAuth   = true;                                   
			$mail->Username   = 'falgunidable@gmail.com';                     
			$mail->Password   = 'Falguni$2001';                               
			//$mail->SMTPSecure = 'tls';        
			$mail->Port       =  587;  
			
			//Recipients
			$mail->addAddress('falguni.dable@avantika.edu.in');            

			// Content
			$mail->isHTML(true);     
			// Set email format to HTML
			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			if ($mail->Send()) {
				$result = 1;
			} else {
				$result = "Error: " . $mail->ErrorInfo;
			}
		} catch (phpmailerException $e) {
			$result = $e->errorMessage();
		} catch (Exception $e) {
			$result = $e->getMessage();
		}
		
		$today = date("Y-m-d H:i:s"); 
		$myfile = fopen("output.txt", "a+") or die("Unable to open file!");
		
		$output = "[" . $today . "] " . $result ."\n";
		
		fwrite($myfile, $output);
		fclose($myfile);			
     }
?>