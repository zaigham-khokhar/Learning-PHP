<?php
    /* PHP has a set of math functions that allows you to perform mathematical
    tasks on numbers. */

    // PHP pi() Function 
    // The pi() function returns the value of pi (3.1415926535898).
    echo(pi() . "<br>");

    // PHP min() and max() Functions
    /* The min() function returns the lowest value from a list of arguments,
    and the max() function returns the highest value from a list of arguments. */
    echo(min(0, 150, 30, 20, -8, -200) . "<br>"); 
    echo(max(0, 150, 30, 20, -8, -200) . "<br>"); 
    
    // PHP abs() Function
    /* The abs() function returns the absolute (positive) value of a number. */
    echo(abs(-6.7) . "<br>");

    // PHP sqrt() Function
    /* The sqrt() function returns the square root of a number. */
    echo(sqrt(64) . "<br>");

    // PHP round() Function
    /* The round() function rounds a floating-point number to its nearest integer. */
    echo(round(0.60) . "<br>");
    echo(round(0.49) . "<br>");

    // PHP rand() Function
    /* The rand() function generates a random integer. */
    echo(rand() . "<br>"); // Generate a random integer
    echo(rand(10, 100) . "<br>"); // Generate a random integer between 10 and

?>