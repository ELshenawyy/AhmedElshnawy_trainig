<?php
function generateUniqueRandomNumbers($min, $max, $count) {
    $uniqueNumbers = array();

    while (count($uniqueNumbers) < $count) {
        $randomNumber = rand($min, $max);

        if (!in_array($randomNumber, $uniqueNumbers)) {
            $uniqueNumbers[] = $randomNumber;
        }
    }

    return $uniqueNumbers;
}

// Example usage: Generate 5 unique random numbers between 1 and 50
$minRange = 1;
$maxRange = 50;
$numberOfUniqueNumbers = 5;

$randomNumbers = generateUniqueRandomNumbers($minRange, $maxRange, $numberOfUniqueNumbers);

// Print the generated unique random numbers
echo "Unique Random Numbers: " . implode(", ", $randomNumbers);
?>
