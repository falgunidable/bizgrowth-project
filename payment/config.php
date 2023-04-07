<?php 

// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemPrice = 25;  
$currency = "INR";  

if(isset($_SESSION['gst_form'])){
    $name = $_SESSION['gst_form']['name'];
    $email = $_SESSION['gst_form']['email'];
    $itemPrice = $_SESSION['gst_form']['gstprice'];
    $itemName = $_SESSION['gst_form']['gstservice'];
}

if(isset($_SESSION['udyam_form'])){
    $name = $_SESSION['udyam_form']['name'];
    $email = $_SESSION['udyam_form']['email'];
    $itemPrice = $_SESSION['udyam_form']['udyamprice'];
    $itemName = $_SESSION['udyam_form']['udyamservice'];
}

if(isset($_SESSION['social_form'])){
    $name = $_SESSION['social_form']['name'];
    $email = $_SESSION['social_form']['email'];
    $itemPrice = $_SESSION['social_form']['socialprice'];
    $itemName = $_SESSION['social_form']['socialservice'];
}
 
/* Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51MkLWLSCD16p1NTwqGjJcMFYVlflvP4NFDqEGuQPddoyFFBKupfq4rjg2Kkw0Qd9mRhTcssjdz1mwiUmhrA8JTql00qXmbk4F4'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51MkLWLSCD16p1NTwXXKX7DEL5SRebrlOxKEr1sQM9yT8lxiWXRcLgkWzioJWXQVTEN430p7r7CJ5LhN0t61KuBbg00W5DYsWhX'); 
  
// // Database configuration  
// define('DB_HOST', 'localhost');  
// define('DB_USERNAME', 'root');  
// define('DB_PASSWORD', '');  
// define('DB_NAME', 'bizgrowth'); 
 
?>