<?php

$employees = array(
    array('name' => 'John', 'shift' => 'morning', 'hours' => 8),
    array('name' => 'Jane', 'shift' => 'evening', 'hours' => 6),
    array('name' => 'Bob', 'shift' => 'night', 'hours' => 10),
);

$workingDays = 5;

foreach ($employees as $employee) {
    $weeklyHours = $employee['hours'] * $workingDays;
    echo "Total hours worked by {$employee['name']} (Shift: {$employee['shift']}): $weeklyHours hours\n";
}
?>
