<?php
    /* PHP type casting is an explicit process of converting a value from
    one data type to another, such as from a float to an integer. */
    
    // The PHP casting operators are:
    // 1. (string) - Casts a value to a string
    $num = 123;
    $strNum = (string) $num;
    echo ("The string value of $num is '$strNum'. \n <br>");

    // 2. (int) - Casts a value to an integer
    $floatNum = 3.14;
    $intNum = (int) $floatNum;
    echo ("The integer value of $floatNum is $intNum. \n <br>");

    // 3. (float) - Casts a value to a float
    $strFloat = "2.718";
    $floatNum2 = (float) $strFloat;
    echo ("The float value of '$strFloat' is $floatNum2. \n <br>");

    // 4. (bool) - Casts a value to a boolean
    $strBool = "Hello";
    $boolVal = (bool) $strBool;
    echo ("The boolean value of '$strBool' is " . ($boolVal ? 'true' : 'false') . ". \n <br>");

    // 5. (array) - Casts a value to an array
    $num5 = 42;
    $arrayNum = (array) $num5;
    echo ("The array value of $num5 is: ");
    print_r($arrayNum);
    echo ("<br>");

    // 6. (object) - Casts a value to an object
    $strObj = "Hello, World!";
    $objStr = (object) $strObj;
    echo ("The object value of '$strObj' is: ");
    print_r($objStr);
    echo ("<br>");

    // 7. (unset) - Casts a value to NULL

    // $num6 = 100;
    // $unsetNum = (unset) $num6;
    // echo ("The unset value of $num6 is: ");
    // var_dump($unsetNum);
    // echo ("<br>");

    // Note: (unset) statement was deprecated in PHP 7.2.0, and removed in PHP 8.0.0.

?>