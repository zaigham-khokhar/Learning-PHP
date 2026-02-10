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

    // 

?>