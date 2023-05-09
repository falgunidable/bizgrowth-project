<?php
include_once('../db/defineUrl.php');
include ROOT_FOLDER.'db/connect.php';

$id = $_GET['id'];
$service = $_GET['service'];

// Retrieve the data for the particular row from the database
$sql = "SELECT * FROM $service WHERE uid = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$usersql = "SELECT * FROM users WHERE uid = '$id'";
$resusers = mysqli_query($conn, $usersql);

$googlesql = "SELECT * FROM googleusers WHERE uid = '$id'";
$resgoogle = mysqli_query($conn, $googlesql);

// Generate the CSV file
$filename = 'data.csv';
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');

if($service == 'gst_service'){
    // Output the headers
    $header_row = array('Regsitered Name','Email','Position', 'Given Name', 'Sector', 'Pan Number', 'State', 'City', 'Pincode','Contact Number');
    fputcsv(fopen('php://output', 'w'), $header_row);

    // Output the data rows
    $data_row = array();
    if(mysqli_num_rows($resusers) > 0){
        $ruser = mysqli_fetch_assoc($resusers);
        $data_row = array($ruser['username'],$ruser['email'],$row['position'], $row['pan_name'], $row['sector'], $row['pan_no'], $row['state'], $row['city'], $row['pincode'],$row['phone']);
        fputcsv(fopen('php://output', 'w'), $data_row);
    }else{
        $ruser = mysqli_fetch_assoc($resgoogle);
        $data_row = array($ruser['name'],$ruser['email'],$row['position'], $row['pan_name'], $row['sector'], $row['pan_no'], $row['state'], $row['city'], $row['pincode'],$row['phone']);
        fputcsv(fopen('php://output', 'w'), $data_row);
    }
}else if($service == 'udyam_service'){
    // Output the headers
    $header_row = array('Regsitered Name','Email', 'Given Name', 'Business Name', 'Start Date', 'Aadhar Number', 'GST Registered', 'Pan Number', 'State', 'City', 'Pincode', 'Address','Contact Number','Gender', 'Social Category');
    fputcsv(fopen('php://output', 'w'), $header_row);

    // Output the data rows
    $data_row = array();
    if(mysqli_num_rows($resusers) > 0){
        $ruser = mysqli_fetch_assoc($resusers);
        $data_row = array($ruser['username'],$ruser['email'], $row['name'], $row['businessname'], $row['startDate'], $row['aadhar'],$row['gst'], $row['panNo'], $row['state'], $row['city'], $row['pincode'],$row['address'],$row['mobile'],$row['gender'],$row['sc']);
        fputcsv(fopen('php://output', 'w'), $data_row);
    }else{
        $ruser = mysqli_fetch_assoc($resgoogle);
        $data_row = array($ruser['name'],$ruser['email'],$row['name'], $row['businessname'], $row['startDate'], $row['aadhar'], $row['gst'], $row['panNo'], $row['state'], $row['city'], $row['pincode'], $row['address'], $row['mobile'],$row['gender'],$row['sc']);
        fputcsv(fopen('php://output', 'w'), $data_row);
    }
}else if($service == 'social_service'){
    // Output the headers
    $header_row = array('Regsitered Name','Email', 'Service Plan', 'Service Charge');
    fputcsv(fopen('php://output', 'w'), $header_row);

    // Output the data rows
    $data_row = array();
    if(mysqli_num_rows($resusers) > 0){
        $ruser = mysqli_fetch_assoc($resusers);
        $data_row = array($ruser['username'],$ruser['email'], $row['service_plan'], $row['service_charge']);
        fputcsv(fopen('php://output', 'w'), $data_row);
    }else{
        $ruser = mysqli_fetch_assoc($resgoogle);
        $data_row = array($ruser['name'],$ruser['email'], $row['service_plan'], $row['service_charge']);
        fputcsv(fopen('php://output', 'w'), $data_row);
    }
}
?>