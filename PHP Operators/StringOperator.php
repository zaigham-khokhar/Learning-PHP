<?php
    // String Operators
    // The String operators are used to concatenate strings.
    // There are two string operators in PHP:
    // 1. Concatenation operator (.)
    // 2. Concatenation assignment operator (.=)

    // Code Example
    $str1 = "Hello";
    $str2 = "World";
    // Using concatenation operator
    $result = $str1 . " " . $str2 . "<br>";
    echo $result; 

    // Using concatenation assignment operator
    $str1 .= " " . $str2;
    echo $str1;
?>