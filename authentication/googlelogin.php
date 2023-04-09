<?php
include('config.php');
include(ROOT_FOLDER.'db/connect.php');
include_once __DIR__ . '/../email/email.php';
$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  //saving google authentication in database
  $email = mysqli_real_escape_string($conn, @$data['email']);
  $sql = "SELECT * FROM users WHERE email='$email'";
  $resultuser = mysqli_query($conn, $sql);

  // If email is found in the users table, update the last login time
  if (mysqli_num_rows($resultuser) == 1) {
    $sql2 = "UPDATE users SET last_login = NOW() WHERE email='". $email."'";
    if(mysqli_query($conn,$sql2)){
      while($row = mysqli_fetch_assoc($resultuser)){
        $username = $row['username'];
        $email = $row['email'];
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['notification'] = 'Welcome '.$username.' !';
        $_SESSION['notification_type'] = 'success';
    }
      header('location:'.BASEURL.'userdash.php');
    }
  }else {
    // Check if email exists in the googleusers table
    $sqlgoogle = "SELECT * FROM googleusers WHERE email='" . @$data['email'] . "'";
    $resultgoogle = mysqli_query($conn, $sqlgoogle);

    // If email is found in the googleusers table, update the last login time
    if ($row = mysqli_fetch_assoc($resultgoogle)) {
        $sql2 = "UPDATE googleusers SET last_login = NOW() WHERE email='" . @$data['email'] . "'";
    } else {
        // Otherwise, insert the new user's data into the googleusers table
        $subject = "Registered Successfully";
        $body = "Welcome to Bizgrowth " . @$data['given_name'] . "!";
        if (regmailsocial(@$data['email'], @$data['given_name'], $subject, $body)) {
            $sql2 = "INSERT INTO `googleusers`(`google_id`, `name`, `email`, `image`) VALUES ('" . @$data['id'] . "', '" . @$data['given_name'] . " " . @$data['family_name'] . "','" . @$data['email'] . "','" . @$data['picture'] . "')";
        }
    }
    if(mysqli_query($conn, $sql2)){
        $_SESSION['notification'] = 'Welcome '. @$data['given_name'] . " " . @$data['family_name'];
        $_SESSION['notification_type'] = 'success';
        // header('location:'.BASEURL.'userdash.php');
    } else{
        $_SESSION['notification'] = 'Not Saved';
        $_SESSION['notification_type'] = 'error';
        // header('location:'.BASEURL);
    }
      //Below you can find Get profile data and store into $_SESSION variable
  if(!empty($data['given_name'])){
    $_SESSION['username'] = $data['given_name'];
   }
 
   if(!empty($data['family_name'])){
    $_SESSION['user_last_name'] = $data['family_name'];
   }
 
   if(!empty($data['email'])){
    $_SESSION['email'] = $data['email'];
   }
 
   if(!empty($data['gender'])){
    $_SESSION['user_gender'] = $data['gender'];
   }
 
   if(!empty($data['picture'])){
    $_SESSION['user_image'] = $data['picture'];
   }
  }

 }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 $login_button = '<a href="'.$google_client->createAuthUrl().'" class="google socialbtn"><i class="fa fa-google fa-fw"></i> Login with Google+</a>';
}

?>