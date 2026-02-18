<?php
    /* PHP has a set of predefined constants that you can use in your scripts.
    A constant is an identifier (name) for a simple value. The value cannot be
    changed during the script. By convention, constant identifiers are always
    uppercase. */

    // define() Function defines a constant at run time.
    define("GREETING", "Welcome to PHP Development!");
    echo(GREETING . "<br>");

    // Example 
    /* This example declares a constant inside a function, and output
    it from outside the function. */
    function myTest() {
        define("TESTDEFINE", "Hello I am Define Function Constant!");
    }
    myTest();
    echo(TESTDEFINE . "<br>");

    // Example
    // Create a Constant Array
    // Using Define() function to create a constant array.
    define("CARSARRAY", ["Audi", "Toyota", "BMW"]);
    echo(CARSARRAY[0] . "<br>"); 

    // Example
    // Create a Constant Array
    // Using const keyword to create a constant array.
    const CarsArray = ["Audi", "Toyota", "BMW"];
    echo(CarsArray[1] . "<br>");
?>