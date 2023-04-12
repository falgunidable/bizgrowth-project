<?php  
// Connect with the database  
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);  
  
// Display error if failed to connect  
if ($conn->connect_errno) {  
    printf("Connect failed: %s\n", $db->connect_error);  
    exit();  
}