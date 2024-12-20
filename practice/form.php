<?php
session_start();

if (!isset($_SESSION['grocery_list'])) {
    $_SESSION['grocery_list'] = ['Milk', 'Eggs', 'Bread', 'Butter'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_item = trim($_POST['new_item']); // Get the new item from the form
    if (!empty($new_item)) {
        $_SESSION['grocery_list'][] = $new_item; // Add it to the list
    }
}

$search_results = [];
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['search_item'])) {
    $search_item = trim($_GET['search_item']); // Get the search term
    if (!empty($search_item)) {
        foreach ($_SESSION['grocery_list'] as $item) {
            if (stripos($item, $search_item) !== false) {
                $search_results[] = $item;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery List Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 5px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 5px 10px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Grocery List Manager</h1>

    <!-- Form to Search for an Item -->
    <form method="get" action="">
        <h2>Search for an Item</h2>
        <input type="text" name="search_item" placeholder="Enter item">
        <input type="submit" value="Search">
    </form>

    <!-- Form to Add a New Item -->
    <form method="post" action="">
        <h2>Add a New Item</h2>
        <input type="text" name="new_item" placeholder="Enter new item">
        <input type="submit" value="Add">
    </form>

    <!-- Display Search Results -->
    <h3>Search Results:</h3>
    <?php if (!empty($search_results)): ?>
        <ul>
            <?php foreach ($search_results as $result): ?>
                <li><?= htmlspecialchars($result) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif (isset($_GET['search_item'])): ?>
        <p>No items found.</p>
    <?php else: ?>
        <p>Search for an item above.</p>
    <?php endif; ?>

    <!-- Display Full Grocery List -->
    <h3>Current Grocery List:</h3>
    <ul>
        <?php foreach ($_SESSION['grocery_list'] as $item): ?>
            <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
