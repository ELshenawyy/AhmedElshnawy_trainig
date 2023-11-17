<?php
echo "Multiplication Table up to 5x5:\n";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        // Calculate the product of $i and $j
        $result = $i * $j;

        // Print the result with formatting
        echo "{$i} x {$j} = {$result}\t";
    }
    echo "\n"; // Move to the next line for the next row
}
?>
