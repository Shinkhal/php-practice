<?php
include "header.php";
require "db_connect.php";

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chath Puja Registration</title>
    <style>
        form {
            margin: 0 auto;
            max-width: 500px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: black;
        }
        input[type="text"], input[type="tel"], input[type="number"] {
            padding: 10px;
            width: calc(100% - 22px);
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 4px;
            box-sizing: border-box;
            background: rgba(255, 255, 255, 0.2);
            color: black;
        }
        input[type="submit"] {
            background-color: orange;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }
        input::placeholder {
            color: grey;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="chath.php" method="post">
        <h1>Chath Puja Registration</h1>
        
        <label for="id">ID</label>
        <input type="number" name="id" id="id" placeholder="Enter your ID" required>

        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>

        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" required>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter your address" required>

        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>

<?php include "footer.php"; ?>
