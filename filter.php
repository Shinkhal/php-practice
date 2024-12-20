<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filter List</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Filter Name</th>
            <th>Filter Id</th>
        </tr>
        <?php
            foreach (filter_list() as $id => $filter) {
                echo "<tr>";
                echo "<td>" . $filter . "</td>";
                echo "<td>" . filter_id($filter) . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
