<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50; /* Green background */
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Zebra striping */
        }
        tr:hover {
            background-color: #ddd; /* Highlight on hover */
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>title</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Institution</th>
        <th>Email</th>
        <th>Organizer</th>
    </tr>
    <?php 
    // Use the correct connection variable (assuming it's $conn)
    $query = "SELECT * FROM student";
    $data = mysqli_query($con, $query);  // Changed $con to $conn for consistency

    // Check if the query execution was successful
    if (!$data) {
        die("Error executing query: " . mysqli_error($conn));  // Show query error
    }

    $result = mysqli_num_rows($data);  

    if ($result > 0) {
        while ($row = mysqli_fetch_array($data)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['title']) . "</td>";
            echo "<td>" . htmlspecialchars($row['first']) . "</td>"; // First Name
            echo "<td>" . htmlspecialchars($row['last']) . "</td>"; // Last Name
            echo "<td>" . htmlspecialchars($row['institution']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['organizer']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No records found</td></tr>";  // Corrected colspan to 4
    }
    ?>
</table>

</body>
</html>
