<?php
    
// Project: Personal Budget Tracker
// Objective:
// Create a simple personal budget tracker that allows users to input income and expenses, calculates the total balance, and displays a summary of their budget.

$income = array(100, 200, 300, 400, 500);
$expenses = array(100, 250, 200, 350, 100);

function calculateTotalIncome($income) {
   
    foreach ($income as $amount) {
        if (!is_numeric($amount) || $amount < 0) {
            return 0; // Or handle the error as needed
        }
    }
    return array_sum($income);
}

function calculateTotalExpenses($expenses) {

    foreach ($expenses as $amount) {
        if (!is_numeric($amount) || $amount < 0) {
            return 0; 
        }
    }
    return array_sum($expenses);
}

$incomeTotal = calculateTotalIncome($income);
$expensesTotal = calculateTotalExpenses($expenses);

function totalBalance($incomeTotal, $expensesTotal) {
    return $incomeTotal - $expensesTotal;
}

$totalBalanceOutput = totalBalance($incomeTotal, $expensesTotal);

function formatCurrency($amount) {
    return '$' . number_format($amount, 2);
}

function summary($incomeTotal, $expensesTotal, $totalBalanceOutput) {
    echo "The total income is " . formatCurrency($incomeTotal) . "<br>";
    echo "Your total expenses are " . formatCurrency($expensesTotal) . "<br>";
    echo "Your current balance is " . formatCurrency($totalBalanceOutput);
}

summary($incomeTotal, $expensesTotal, $totalBalanceOutput);

?>