<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Annas Keren</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="assets/style.css">
</head>
<body class="wave-bg">
  <div class="login-box">
    <h2>Login Email</h2>
    <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="Masukkan Email" required>
      <input type="password" name="password" placeholder="Masukkan Password" required>
      <button type="submit">Login</button>
    </form>
    <br>
    <a href="google-login.php"><button style="background:#fff;color:#333;">Login with Google</button></a>
    <p><a href="verify.html" style="color: cyan;">Kirim kode ke email</a></p>
  </div>
</body>
</html>