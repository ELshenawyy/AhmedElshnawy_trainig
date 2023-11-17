<?php
function isLeapYear($year) {
    // Check if the year is divisible by 4
    if ($year % 4 == 0) {
        // Check if the year is not divisible by 100, except if it is divisible by 400
        if ($year % 100 != 0 || ($year % 100 == 0 && $year % 400 == 0)) {
            return true; // It's a leap year
        } else {
            return false; // It's not a leap year
        }
    } else {
        return false; // It's not a leap year
    }
}

// Example usage
$yearToCheck = 2024;

if (isLeapYear($yearToCheck)) {
    echo "$yearToCheck is a leap year.";
} else {
    echo "$yearToCheck is not a leap year.";
}
?>
