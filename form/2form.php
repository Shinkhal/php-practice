<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Page</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <?php
    // Define variables and set to empty values
    $name = $email = $gender = $comment = $website = '';

    // Function to sanitize input data
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $website = test_input($_POST['website']);
        $comment = test_input($_POST['comment']);
        $gender = test_input($_POST['gender']);
    }
    ?>

    <h2 style="text-align: center; color: #333;">Your Input</h2>
    <div style="max-width: 500px; margin: auto; background-color: white; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Website:</strong> <?php echo $website; ?></p>
        <p><strong>Comment:</strong> <?php echo $comment; ?></p>
        <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    </div>
</body>
</html>
