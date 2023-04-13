<?php
include './connect.php';

$id = $_POST['id'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];

$info = "SELECT * from `profile_info` where `uid` = '$id'";
$res = mysqli_query($conn,$info);

if(mysqli_num_rows($res) == 0){
    $sql = "INSERT INTO profile_info VALUES ('$phone','$address','$state','$city','$pincode','$id')";
}else{
    $sql = "UPDATE `profile_info` SET `contact`='$phone',`address`='$address',`state`='$state',`city`='$city',`pincode`='$pincode' WHERE `uid`='$id'";
}

if (mysqli_query($conn, $sql)) {
    echo 'success';
  } else {
    echo "error";
  }
?>