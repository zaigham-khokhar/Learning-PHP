<?php
    // Continue Statement
    /*   The continue statement is used to skip the current iteration of a loop
    and move to the next iteration. It is typically used within loops 
    (such as for, while, or foreach) to bypass certain code when a specific condition is met.*/

    // Example Using continue in a for loop
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            continue; // Skip the rest of the loop for even numbers
        }
        echo $i . " "; // This will only print odd numbers
    }
?>