<?php
    // String strlen() is a Function - Returns the length of a string
    $string = "Hello, World!";
    echo "The length of the string is: " . strlen($string)  . "\n <br>";

    // String str_word_count() is a Function - Returns the number of words in a string
    echo ("The number of words in the string is:" . str_word_count($string) . "\n <br>");

    // String str_contains() is a Function - Checks if a string contains a specific substring
    $substring = "World";
    if (str_contains($string, $substring)) {
        echo ("The string contains the substring ". $substring . "\n <br>");
    } else {
        echo ("The string does not contain the substring ". $substring . "\n <br>");
    };

    /* String strpos() is a Function - Finds the position of the first occurrence
    of a substring in a string */
    $position = strpos($string, $substring);
    if ($position !== false) {
        echo ("The substring " . $substring . " is found at position: " . $position . "/n <br>");
    } else {
        echo ("The substring " . $substring . " is not found in the string. \n <br>");
    }

    /* String str_starts_with() is a Function - Checks if a string starts with a
    specific substring */
    $stringWorld = "World";
    $stratSubString = "Hello";
    if (str_starts_with($stringWorld, $stratSubString)) {
        echo ("The string starts with the substring " . $stratSubString . "\n <br>");
    } else {
        echo ("The string does not start with the substring " . $stratSubString . "\n <br>");
    }

    /* String str_ends_with() is a Function - Check if a string ends with a specific 
    substring */
    $endSubString = "!";
    if (str_ends_with($string, $endSubString)) {
        echo ("The string ends with the substring " . $endSubString . "\n <br>");
    } else {
        echo ("The string does not end with the substring " . $endSubString . "\n <br>");
    }


?>