<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["role"] = "Admin";

echo "Session variables are set.";
?>
