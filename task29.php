<?php
// Get the current hour
$currentHour = date("H");

// Check the time and display appropriate greeting
if ($currentHour < 12) {
    echo "Good Morning";
} else {
    echo "Good Afternoon";
}
?>
