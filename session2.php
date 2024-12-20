<?php
// Start the session
session_start();

// Check if session variables are set
if (isset($_SESSION["username"]) && isset($_SESSION["role"])) {
    echo "Welcome, " . $_SESSION["username"] . ". Your role is " . $_SESSION["role"] . ".";
} else {
    echo "No session variables are set.";
}
?>
