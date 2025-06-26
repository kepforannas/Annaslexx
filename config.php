<?php
$clientID = 'YOUR_GOOGLE_CLIENT_ID';
$clientSecret = 'YOUR_GOOGLE_CLIENT_SECRET';
$redirectUri = 'http://localhost:8080/callback.php';

require_once 'vendor/autoload.php';
$gClient = new Google_Client();
$gClient->setClientId($clientID);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUri);
$gClient->addScope("email");
$gClient->addScope("profile");

$conn = mysqli_connect("localhost", "root", "", "loginai");
?>