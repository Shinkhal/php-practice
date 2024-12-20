<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = [];

    // Validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }
    if (empty($password) || strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }
      
    if (empty($errors)) {
      echo "<h1>Form Submitted Sucessfully</h1>";
      echo "Name : $name <br>";
      echo "Email : $email <br>";
      echo "Password : $password <br>";
    } else {
        echo "<p>Form not submitted due to the following errors:</p>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
