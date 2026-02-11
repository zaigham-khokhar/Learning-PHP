<?php
    // Functions in PHP
    /* A Function is a block of code that can be reused multiple times.
    It can take input, process it, and return an output.
    Functions Help in breaking down complex problems into smaller, manageable pieces. */

    // Syntax of a Function in PHP
    /* function functionName($parameter1, $parameter2, ...) {
        // Code to be executed
        return $result; // Optional
    } */

    // Code Example:
    function myFirstFunction($name) {
        return "Hello, " . $name . "! <br>";
    }
    // Calling the function
    echo myFirstFunction("Buddy");
    
    // Example of a function without parameters
    function greet() {
        return "Welcome to PHP Functions!";
    }
    echo greet();
?>