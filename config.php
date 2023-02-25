<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('883761251280-14ubngkuer21t2h70dsfkvgkv7s0j6rs.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/bizgrowth/testlogin.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>