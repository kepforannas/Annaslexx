<?php
require 'config.php';

if (isset($_GET['code'])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    if (!isset($token["error"])) {
        $gClient->setAccessToken($token['access_token']);
        $oauth = new Google_Service_Oauth2($gClient);
        $user = $oauth->userinfo->get();

        $email = $user->email;
        $name = $user->name;

        $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        if (mysqli_num_rows($check) == 0) {
            mysqli_query($conn, "INSERT INTO users (email, name, oauth_provider) VALUES ('$email', '$name', 'google')");
        }
        $user_row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE email='$email'"));
        $user_id = $user_row['id'];
        mysqli_query($conn, "INSERT INTO log_history (user_id, action) VALUES ('$user_id', 'Google Login')");

        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        exit();
    }
}
?>