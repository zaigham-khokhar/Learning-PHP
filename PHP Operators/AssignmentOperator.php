<?php
    // Assignment Operator
    /*  The assignment operator (=) is used to assign a value to a variable.
    It takes the value on the right-hand side and assigns it to the variable
    on the left-hand side. */

    // Example 1: Basic Assignment
    $x = 10; // Assigns the value 10 to the variable $x
    echo $x; // Output: 10

    // Example 2: Assignment with Expressions
    $y = 5 + 3; // Assigns the result of the expression (5 + 3) to $y
    echo $y; 

    // Example 3: Assignment with Variables
    $a = 15; // Assigns the value 15 to $a
    $b = $a; 
    echo $b; 

    // Example 4: Assignment with String Concatenation
    $firstName = "John"; // Assigns the string "John" to $firstName
    $lastName = "Doe"; // Assigns the string "Doe" to $lastName
    $fullName = $firstName . " " . $lastName; /* Concatenates $firstName and $lastName
                                              with a space in between and assigns it to
                                              $fullName */
    echo $fullName; // Output: John Doe

    // Example 5: Assignment with Arrays
    $numbers = [1, 2, 3]; // Assigns an array of
    // numbers to the variable $numbers
    print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
?>