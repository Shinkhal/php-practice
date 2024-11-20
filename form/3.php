<?php
// 3.php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $skills = array();

  // Check which skills are checked
  if (isset($_POST["Java"])) {
    $skills[] = "Java";
  }
  if (isset($_POST["php"])) {
    $skills[] = "PHP";
  }
  if (isset($_POST["python"])) {
    $skills[] = "Python";
  }
  if (isset($_POST["Javascript"])) {
    $skills[] = "Javascript";
  }

  // Process the form data
  // For example, you can store the data in a database or send an email
  echo "Form submitted successfully!<br>";
  echo "Name: $name<br>";
  echo "Email: $email<br>";
  echo "Mobile: $mobile<br>";
  echo "Skills: " . implode(", ", $skills) . "<br>";
} else {
  echo "Form not submitted";
}
?>