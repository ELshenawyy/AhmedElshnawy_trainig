<?php
// Function to check if a number is even or odd
function isEvenOrOdd($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

$number = 7;
$result = isEvenOrOdd($number);
echo "$number is $result";





//  Compute Circle Area and Circumference
$radius = 5;

$area = M_PI * pow($radius, 2);

$circumference = 2 * M_PI * $radius;

// Display the results
echo "Radius: $radius\n";
echo "Area: $area\n";
echo "Circumference: $circumference\n";





//  check two given numbers and return true if one of the number is 50 or if their sum is 50. 
function checkFor50($num1, $num2) {
    return $num1 === 50 || $num2 === 50 || ($num1 + $num2) === 50;
}

// Example usage
$num1 = 30; 
$num2 = 20;

if (checkFor50($num1, $num2)) {
    echo "True: One of the numbers is 50 or their sum is 50.";
} else {
    echo "False: Neither number is 50, and their sum is not 50.";
}


  

//   check from two given integers, whether one is positive and another one is negative. 
function checkPositiveAndNegative($int1, $int2) {
    return ($int1 > 0 && $int2 < 0) || ($int1 < 0 && $int2 > 0);
}

// Example usage
$int1 = 5;  
$int2 = -3;

if (checkPositiveAndNegative($int1, $int2)) {
    echo "True: One integer is positive, and the other is negative.";
} else {
    echo "False: Both integers have the same sign.";
}




//   find the largest of three given integers
function findLargest($int1, $int2, $int3) {
    if ($int1 >= $int2 && $int1 >= $int3) {
        return $int1;
    } elseif ($int2 >= $int1 && $int2 >= $int3) {
        return $int2;
    } else {
        return $int3;
    }
}




//   Compute The sum of the numbers from 1 to 10 
$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

echo "The sum of numbers from 1 to 10 is: $sum";




//   check whether a given number is positive or negative. 
$number = 7;

if ($number > 0) {
    echo "$number is positive.";
} elseif ($number < 0) {
    echo "$number is negative.";
} else {
    echo "$number is zero.";
}




//   print the sum of two numbers 
$number1 = 5;
$number2 = 7; 

$sum = $number1 + $number2;

echo "The sum of $number1 and $number2 is $sum";







?>




