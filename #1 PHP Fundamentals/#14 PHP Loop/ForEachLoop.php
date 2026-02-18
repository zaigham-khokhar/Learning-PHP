<?php
    // For Each Loop in PHP
    /* For Each loop is a control structure that allows you to iterate over arrays
    or objects.
    The syntax for a for each loop is as follows:
        foreach ($array as $value) {
            // code to be executed}
     */

    // Example of a for each loop that prints the elements of an array
    $fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];
    foreach ($fruits as $fruit) {
        echo $fruit . "\n <br>";
    }
?>