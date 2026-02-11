<?php
    // Conditional Operator
    /* The Conditional Operator are used to set valued depending on Condition.
    (Shorthand for if...else statement) */
    // There are Two Types of Conditional Operators:
    // 1. Ternary Operator (?:)
    // 2. Null Coalescing Operator (??)

    // Code Example
    // 1. Ternary Operator
    $age = 20;
    $status = ($age >= 18) ? "Adult" : "Minor";
    echo "Status:" . $status . "<br>";

    // 2. Null Coalescing Operator
    $username = null;
    $displayName = $username ?? "Guest";
    echo "Display Name:" . `$displayName` . "<br>";
?>