<?php 
 
// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemPrice = 25;  
$currency = "INR";  
 
/* Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51MkLWLSCD16p1NTwqGjJcMFYVlflvP4NFDqEGuQPddoyFFBKupfq4rjg2Kkw0Qd9mRhTcssjdz1mwiUmhrA8JTql00qXmbk4F4'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51MkLWLSCD16p1NTwXXKX7DEL5SRebrlOxKEr1sQM9yT8lxiWXRcLgkWzioJWXQVTEN430p7r7CJ5LhN0t61KuBbg00W5DYsWhX'); 
  
// Database configuration  
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'bizgrowth'); 
 
?>