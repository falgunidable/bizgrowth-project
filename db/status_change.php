<?php
include_once('../db/defineUrl.php');
include('../db/connect.php');
require_once(ROOT_FOLDER.'email/email.php');

if(isset($_POST['assignLead'])){
    if(!empty($_POST['person'])){
        $uid = $_POST['uid'];
        $service =  $_POST['service'];
        $status = $_POST['status'];
        $person =  $_POST['person'];

        $udetails = "SELECT * from users where uid = '$uid'";
        $uresult = mysqli_query($conn,$udetails);

        $gdetails = "SELECT * from googleusers where uid = '$uid'";
        $gresult = mysqli_query($conn,$gdetails);
        
        if(mysqli_num_rows($gresult) > 0){
            $row = mysqli_fetch_assoc($gresult);
            $email = $row['email'];
            $username = $row['name'];
        }else{
            $rowg = mysqli_fetch_assoc($uresult);
            $email = $rowg['email'];
            $username = $rowg['username'];
        }

        $subject = "Application Update";
        $body = "The Application for your <b>".$service." Service</b> has been reviewed.<Br/><br/><b>".$person."</b> has been appointed for you and will contact you soon.<br/><br/><b>Thank You !</b>";
    
        $appointInsert = "INSERT INTO `appointed_person`(`uid`, `service`, `status`, `person`) VALUES ('$uid','$service','$status','$person')";
        
        if(regmailsocial($email,$username,$subject,$body)){
            if(mysqli_query($conn,$appointInsert)){
                echo "success";
            }
        }else{
            echo 'notsend';
        }
    }else{
            echo "error";
    }
}
if(isset($_POST['value']) && $_POST['value'] == 'Accepted'){
    $uid = $_POST['eid'];
    $value = $_POST['value'];

    $sql = "UPDATE joinus set status = '$value' where id = '$uid'";
    $details = "SELECT * from joinus where id= '$uid'";
    $res = mysqli_query($conn,$details);
    $fetch = mysqli_fetch_assoc($res);
    $email = $fetch['email'];
    $username = $fetch['name'];
    $subject = "Application Status Update";
    $body = "Hello ".$username.",<br/><br/>We have <b>accepted</b> your application and will be having you soon on board !<br/>Thank You for Joining Us!<br/>We will conatact you shortly for the further process.<br/><br/>Best Regards,<br/><b>Bizgrowh Team</b>";
    
    if(regmailsocial($email,$username,$subject,$body)){
        if(mysqli_query($conn,$sql)){
            $_SESSION['notification'] = 'Employee Status Changed'; 
            $_SESSION['notification_type'] = 'success';
            echo 'accepted';
        }else{
            echo 'error';
        }
    }
}

if(isset($_POST['value']) && $_POST['value'] == 'Rejected'){
    $uid = $_POST['eid'];
    $value = $_POST['value'];

    $sql = "UPDATE joinus set status = '$value' where id = '$uid'";
    $details = "SELECT * from joinus where id= '$uid'";
    $res = mysqli_query($conn,$details);
    $fetch = mysqli_fetch_assoc($res);
    $email = $fetch['email'];
    $username = $fetch['name'];
    $subject = "Application Status Update";
    $body = "Hello ".$username.",<br/><br/>Thank you for contacting us but we regret you in informing that we <b>won't</b> be going forward with your application.<br/>If needed will let yo know.<br/><br/>Best Regards,<br/><b>Bizgrowh Team</b>";

    if(regmailsocial($email,$username,$subject,$body)){
        if(mysqli_query($conn,$sql)){
            $_SESSION['notification'] = 'Employee Status Changed'; 
            $_SESSION['notification_type'] = 'success';
            echo 'rejected';
        }else{
            echo 'error';
        }
    }
}
?>