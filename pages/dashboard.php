<?php
session_start();
if (!isset($_SESSION['logged_in']) || time() > $_SESSION['expire_time']) {
    session_destroy();
    header("Location: login.php");
    exit;
}

echo "Welcome! Last login time: " . $_SESSION['last_login'];
?>
<a href="logout.php">Logout</a>
