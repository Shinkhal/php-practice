<?php 
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "INSERT INTO arag (id, name, phone, address) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("isss", $id, $name, $phone, $address);

        if ($stmt->execute()) {
            echo "Registration successfull!";
        } else {
            echo "Error inserting record: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }
    $con->close();
}
?>
