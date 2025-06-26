<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body class="wave-bg">
  <div class="login-box">
    <h2>Halo, <?php echo $email; ?></h2>
    <a href="logout.php"><button>Logout</button></a>
    <form method="POST" action="chat.php">
      <input type="text" name="msg" placeholder="Tulis pertanyaan...">
      <button type="submit">Kirim</button>
    </form>
  </div>
</body>
</html>