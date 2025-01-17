<?php
function calculate($name, $marks) {
    // Ensure exactly three grades are provided
    if (count($marks) !== 3) {
        echo "Error: Three grades are required.<br/>";
        return; // Exit the function
    }

    // Calculate total and percentage
    $sum = array_sum($marks);
    $percentage = round(($sum * 100) / 300, 2); // Round percentage to 2 decimal places

    // Determine grade based on percentage
    if ($percentage >= 90) {
        $grade = "A";
    } elseif ($percentage >= 80) {
        $grade = "B";
    } elseif ($percentage >= 70) {
        $grade = "C";
    } elseif ($percentage >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    // Output results
    echo "Student Name: {$name}<br/>";
    echo "Total Marks: {$sum}/300<br/>";
    echo "Percentage: {$percentage}%<br/>";
    echo "Grade: {$grade}<br/>";
}

// Test the function
calculate("Manzi", [85, 90, 78]); // Example input
?>
