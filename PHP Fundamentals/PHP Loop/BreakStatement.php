<?php
    // Break Statement in PHP
    /*   The break statement is used to exit a loop or switch statement prematurely.
    It can be used in various types of loops, including for, while, and do-while loops.
    When the break statement is encountered, the loop will immediately terminate, and
    the program will continue with the next statement after the loop. */

    // Example of using break in a for loop
    for ($i = 1; $i <= 10; $i++) {  
        if ($i == 5) {
            break; // Exit the loop when $i is equal to 5
        }
        echo $i . " "; // Output the current value of $i
    }
?>