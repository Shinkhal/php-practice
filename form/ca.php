<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $first_name = filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone_number = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $experience = filter_input(INPUT_POST, 'experience', FILTER_SANITIZE_STRING);

    $errors = []; 
    if (empty($first_name) || empty($last_name)) {
        $errors[] = "Please enter both first and last name.";
    }

    if (empty($email)) {
        $errors[] = "Please enter an email address.";
    } 
    if (empty($phone_number)) {
        $errors[] = "Please enter a phone number.";
    } 
    if (empty($experience)) {
        $errors[] = "Please select your yoga experience level.";
    }

    if (empty($errors)) {
        echo "<h2>Form submitted successfully!</h2>";
        echo "<p><strong>First Name:</strong> " . htmlspecialchars($first_name) . "</p>";
        echo "<p><strong>Last Name:</strong> " . htmlspecialchars($last_name) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($phone_number) . "</p>";
        echo "<p><strong>Experience Level:</strong> " . htmlspecialchars($experience) . "</p>";
    } else {
       
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
