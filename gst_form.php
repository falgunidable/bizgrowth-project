<?php
include('db/connect.php');

$name =  $_POST['fullname'];
$nameYourself = $_POST['nameYourself'];
$panName =  $_POST['panName'];
$sector = $_POST['sector'];
$state = $_POST['state'];
$city = $_POST['city'];
$panNo = $_POST['panNo'];
$pincode = $_POST['pincode'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
    
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO gst_service(`name`, `position`, `pan_name`, `sector`, `state`, `city`, `pan_no`, `pincode`, `email`, `phone`) VALUES ('$name','$nameYourself','$panName','$sector','$state','$city','$panNo','$pincode','$email','$mobile')";
    
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    // echo nl2br("\n$first_name\n $last_name\n ". "$gender\n $address\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
    
// Close connection
mysqli_close($conn);
        
?>
