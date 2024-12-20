<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db='employee';

    $connection = mysqli_connect($host,$user,$pass,$db);

    if($connection){
        echo "Connected to database <br>";
    }
    else{
        echo "Not connected to database <br>";
    }

    $query = "
    SELECT department, COUNT(*) AS total_employees, salary 
    FROM staff 
    WHERE department = 'Sales' AND salary > 4000 
    GROUP BY department 
    ORDER BY salary ASC;
";

$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>Department</th>
            <th>Total Employees</th>
            <th>Salary</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['department']) . "</td>";
        echo "<td>" . htmlspecialchars($row['total_employees']) . "</td>";
        echo "<td>" . htmlspecialchars($row['salary']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Close the database connection
mysqli_close($connection);
?>