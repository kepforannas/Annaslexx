<?php
require 'config.php';
$gClient = new Google_Client();
$gClient->setClientId($clientID);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUri);
$gClient->addScope("email");
$gClient->addScope("profile");

$authUrl = $gClient->createAuthUrl();
header("Location: $authUrl");
exit;
?>