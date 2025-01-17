<?php
// Function to count the number of digits
function calculate_num($num) {
    $counter = 0;
    while ($num > 0) {
        $num = intdiv($num, 10); // Integer division
        $counter++;
    }
    return $counter;
}

// Function to sum up all digits of the number
function sum($n) {
    if ($n == 0) { // Base case: no digits left
        return 0;
    } else {
        $last_digit = $n % 10; // Extract the last digit
        return $last_digit + sum(intdiv($n, 10)); // Recursive call
    }
}

// Example usage
echo "Sum of digits: " . sum(54321); // Output: 15
?>
