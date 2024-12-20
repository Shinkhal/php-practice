<?php
include "conn.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['Contact'];
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $class = $_POST['class'];
    $passenger = $_POST['passenger'];
    $payment = $_POST['payment'];

    $sql = "INSERT INTO reservation (name, email, contact, departure, destination, date, class, passenger, payment)
            VALUES ('$name', '$email', '$contact', '$departure', '$destination', '$date', '$class', '$passenger', '$payment')";

    if ($con->query($sql) === TRUE) {
        echo "Ticket successfully booked!";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
