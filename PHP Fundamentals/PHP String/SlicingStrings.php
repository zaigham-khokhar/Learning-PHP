<?php
    /* Slicing Strings is the process of extracting a portion of a string
    based on specified start and end positions. In PHP, you can slice strings
    using the substr() Function */
    $string = "Hello, World!";
    $start = 0; // Starting position (0-based index)
    $length = 5; // Length of the substring to extract
    $slicedString = substr($string, $start, $length); // Extracting the substring
    echo ($slicedString . "\n <br>");

    // Get the 3 characters, starting from the "o" in world (index -5):
    $start = -5; // Starting position from the end of the string
    $length = 3; // Length of the substring to extract
    $slicedString = substr($string, $start, $length); // Extracting
    echo ($slicedString . "\n <br>");
?>