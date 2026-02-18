<?php
    // Numbers Function in PHP
    // 1. is_int() - Checks if a variable is an integer
    $num1 = 42;
    if (is_int($num1)) {
        echo ("$num1 is an integer. \n <br>");
    } else {
        echo ("$num1 is not an integer. \n <br>");
    };

    // 2. is_float() - Checks if a variable is a float
    $num2 = 3.14;
    if (is_float($num2)) {
        echo ("$num2 is a float. \n <br>");
    } else {
        echo ("$num2 is not a float. \n <br>");
    };

    // is_finite() - Checks if a variable is infinite
    $inf = INF;
    if (is_finite($inf)) {
        echo ("$inf is finite. \n <br>");
    } else {
        echo ("$inf is infinite. \n <br>");
    };

    // 4. is_infinite() - Checks if a variable is infinite
    $x = 1.9e411;
    if (is_infinite($x)) {
        echo ("$x is infinite. \n <br>");
    } else {
        echo ("$x is not infinite. \n <br>");
    };

    // 5. is_nan() - Checks if a variable is NaN (Not a Number)
    $nan = NAN;
    if (is_nan($nan)) {
        echo ("$nan is NaN. \n <br>");
    } else {
        echo ("$nan is not NaN. \n <br>");
    };

    // 6. is_numeric() - Checks if a variable is a number or a numeric string
    $num3 = "123";
    if (is_numeric($num3)) {
        echo ("$num3 is numeric. \n <br>");
    } else {
        echo ("$num3 is not numeric. \n <br>");
    };

    // 7. intval() - Converts a variable to an integer
    $num4 = "456";
    $intNum4 = intval($num4);
    echo ("The integer value of $num4 is $intNum4. \n <br>");

?>