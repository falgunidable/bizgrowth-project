<?php
session_start();
// if(isset($_POST['gstserviceForm'])){
    $fname =  $_POST['fname'];
    $email= $_POST['email'];
    $data= $_POST['data'];

    // Performing insert query execution
    if(!empty($fname) && !empty($email)){
            
            // Store the form data in a session variable
            $_SESSION['form_data'] = array(
                'fname' => $fname,
                'email' => $email,
                'data' => $data
            );
            echo 'success';
            // header('location:../payment/');
    }else{
        echo 'error';
    }
// }
?>