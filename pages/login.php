<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['logged_in'] = true;
    $_SESSION['last_login'] = date("Y-m-d H:i:s");
    $_SESSION['expire_time'] = time() + 600; // 10 minutes
    header("Location: dashboard.php");
    exit;
}
?>
<form method="POST" action="">
    <label>Email:</label>
    <input type="email" name="email" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
