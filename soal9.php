<?php
function calculateSalary($salaryAmount, $lateFeePerDay) {
    $totalLateFee = 0;
    
    for ($day = 1; $day <= 1; $day++) {
        $totalLateFee += $lateFeePerDay;
    }
    
    $finalSalary = $salaryAmount - $totalLateFee;
    
    echo "Total Salary Amount: $salaryAmount <br>";
    echo "Late Fee per Day: $lateFeePerDay <br>";
    echo "Total Late Fee for 1 days: $totalLateFee <br>";
    echo "Final Salary after deducting late fees: $finalSalary <br>";
}

// Input values
$salaryAmount = 450000;
$lateFeePerDay = 15000;

// Calculate and display the salary
calculateSalary($salaryAmount, $lateFeePerDay);
?>