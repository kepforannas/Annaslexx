<?php
session_start();
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
if (mysqli_num_rows($result) == 1) {
    $_SESSION['email'] = $email;
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
    mysqli_query($conn, "INSERT INTO log_history (user_id, action) VALUES ('$user_id', 'Manual Login')");
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Email atau Password salah!'); location.href='index.php';</script>";
}
?>