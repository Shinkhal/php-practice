<?php
    // Database connection details
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'school_management';

    // Connect to the database
    $con = mysqli_connect($host, $user, $pass, $db);

    // Check the connection
    if ($con) {
        echo "Connected to database<br>";
    } else {
        die("Unable to connect to the database: " . mysqli_connect_error());
    }

    // Query to fetch all records from the students table
    $query = "SELECT * FROM students";
    $result = mysqli_query($con, $query);

    // Check if there are rows in the result
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' cellspacing='0' cellpadding='5'>";
        echo "<tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Gender</th>
              </tr>";

        // Fetch and display each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['first_name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['gender']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    // Close the database connection
    mysqli_close($con);
?>
