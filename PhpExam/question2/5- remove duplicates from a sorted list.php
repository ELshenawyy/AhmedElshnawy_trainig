<?php
function removeDuplicates($sortedList) {
    $uniqueList = array();

    $length = count($sortedList);
    if ($length == 0) {
        return $uniqueList;
    }

    // The first element is always unique
    $uniqueList[] = $sortedList[0];

    // Iterate through the sorted list to find and add unique elements
    for ($i = 1; $i < $length; $i++) {
        // Compare the current element with the previous one
        if ($sortedList[$i] != $sortedList[$i - 1]) {
            // Add the element to the unique list if it's different from the previous one
            $uniqueList[] = $sortedList[$i];
        }
    }

    return $uniqueList;
}

// Example usage:
$sortedList = array(1, 2, 2, 3, 4, 4, 4, 5, 5, 6);

$uniqueList = removeDuplicates($sortedList);

// Print the unique list
echo "Original Sorted List: " . implode(", ", $sortedList) . "\n";
echo "List with Duplicates Removed: " . implode(", ", $uniqueList) . "\n";
?>
