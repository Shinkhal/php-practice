<?php 
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $title = $_POST["title"];
    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $institution = $_POST["institution"];
    $organizer = $_POST["organizer"];

    // Prepare the SQL query
    $sql = "INSERT INTO student (title, first, last, email, institution, organizer) 
            VALUES (?, ?, ?, ?, ?, ?)";
    
    // Prepare the statement to avoid SQL injection
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssss", $title, $first, $last, $email, $institution, $organizer);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Form submitted and data saved successfully!<br>";

        // Add a button to view the table
        echo '<a href="view.php"><button style="padding:10px 20px; background-color:#007BFF; color:white; border:none; border-radius:5px; cursor:pointer;">View Records</button></a>';
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
} else {
    echo "Form not submitted!";
}
?>
