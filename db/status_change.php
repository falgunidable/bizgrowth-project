<?php
include('../db/connect.php');

if(!empty($_POST['person'])){
    $uid = $_POST['uid'];
    $service =  $_POST['service'];
    $status = $_POST['status'];
    $person =  $_POST['person'];

    $appointInsert = "INSERT INTO `appointed_person`(`uid`, `service`, `status`, `person`) VALUES ('$uid','$service','$status','$person')";

    if(mysqli_query($conn,$appointInsert)){
        echo "success";
    }
}else{
        echo "error";
    }

?>