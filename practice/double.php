<?php
// Define the function to double each value in the array
function doubleValue($array) {
    // Create a new array to store doubled values
    $doubledArray = [];
    
    // Iterate through the input array and double each value
    foreach ($array as $value) {
        $doubledArray[] = $value * 2;
    }
    
    // Display the modified array
    echo "Modified Array Inside Function: ";
    print_r($doubledArray);
    echo "<br>";
}

// Define the original array
$originalArray = [1, 2, 3, 4, 5];

// Call the function
doubleValue($originalArray);

// Display the original array after the function call
echo "Original Array After Function Call: ";
print_r($originalArray);
?>
