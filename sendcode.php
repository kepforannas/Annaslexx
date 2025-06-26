<?php
$email = $_POST['email'];
$code = rand(100000, 999999);
$subject = "Kode Verifikasi Kamu";
$message = "Kode kamu adalah: $code";
$headers = "From: noreply@yourdomain.com";

if (mail($email, $subject, $message, $headers)) {
    echo "<script>alert('Kode dikirim ke $email');location.href='index.php';</script>";
} else {
    echo "<script>alert('Gagal kirim email!');history.back();</script>";
}
?>