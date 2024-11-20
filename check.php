<?php
// Check to make sure display_errors is enabled
if (ini_get('display_errors') == 1) {
    echo "display_errors = 1 <br>It is all good...";
} else {
    echo "display_errors is not set correctly";
}
?>
