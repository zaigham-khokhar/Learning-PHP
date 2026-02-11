<?php
    // Do While Loop in PHP
    /* Do While loop is a control structure that allows you to execute a block of code
    at least once, and then repeatedly as long as a specified condition is true. 
    The syntax for a do while loop is as follows:
        do {
            // code to be executed
        } while (condition);
    */
    // Example of a do while loop that prints the numbers from 1 to 50
    $i = 1;
    do{
        echo $i . "\n <br>";
        $i++;
    } while ($i <= 50);
?>