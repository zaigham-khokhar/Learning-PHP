<?php
    // strtoupper() is a Function - Converts a string to uppercase
    $string = "Hello World";
    echo strtoupper($string) . "\n <br>";

    // strtolower() is a Function - Converts a string to lowercase
    echo strtolower($string) . "\n <br>";

    /* str_replace() is a Function - Replaces all occurrences of a search
    string with a replacement string */
    $search = "World";
    $replace = "PHP";
    echo str_replace($search, $replace, $string) . "\n <br>";

    // strrev() is a Function - Reverses a string
    echo strrev($string) . "\n <br>";

    /* trim() is a Function - Removes whitespace from the beginning and end
    of a string */
    $stringWithWhitespace = "   Hello World   ";
    echo trim($stringWithWhitespace) . "\n <br>";

    // explode() is a Function - Splits a string into an array based on a specified. delimiter
    $stringToSplit = "Hello,World,PHP";
    $delimiter = ",";
    $array = explode($delimiter, $stringToSplit);   
    print_r($array);
?>