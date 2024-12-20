<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f9;
    }
    h1 {
        text-align: center;
        color: #333;
    }
    form {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }
    input[type="file"] {
        display: block;
        margin-bottom: 15px;
    }
    button {
        display: inline-block;
        padding: 10px 15px;
        font-size: 16px;
        color: #fff;
        background: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background: #0056b3;
    }
</style>

</head>
<body>
    <h1>File Upload Form</h1>
    <form action="recive.php" method="post" enctype="multipart/form-data">
        <label for="myfile">Choose a file:</label>
        <input type="file" name="myfile" id="myfile" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
