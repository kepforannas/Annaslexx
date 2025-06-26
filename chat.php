<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $msg = strtolower($_POST['msg']);
    $response = "Saya belum mengerti maksud Anda.";
    if (strpos($msg, 'halo') !== false) $response = "Halo juga!";
    elseif (strpos($msg, 'siapa kamu') !== false) $response = "Saya AI buatan Annas.";
    echo "<script>alert('AI: $response');history.back();</script>";
}
?>