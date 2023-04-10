<?php
include('./db/connect.php');
if(!empty($_FILES['picture']['name'])){

    $email = $_POST['email'];
    //File uplaod configuration
    $result = 0;
    $uploadDir = "images/profile/";
    $fileName = basename($_FILES['picture']['name']);
    $targetPath = $uploadDir. $fileName;
    
    //Upload file to server
    if(@move_uploaded_file($_FILES['picture']['tmp_name'], $targetPath)){

        //Update picture name in the database
        $update = $conn->query("UPDATE users SET profile_img = '".$fileName."' WHERE email = '$email'");
        
        //Update status
        if($update){
            $result = 1;
        }
    }
    
    //Load JavaScript function to show the upload status
    echo '<script type="text/javascript">window.top.window.completeUpload(' . $result . ',\'' . $targetPath . '\');</script>';
}