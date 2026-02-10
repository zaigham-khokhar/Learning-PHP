<?php
    // String Data Type Details in PHP
    /* A string is a sequence of characters enclosed in quotes. In PHP,
    you can use single quotes (' ') or double quotes (" ") to define a string. */

    // Code Example 
    echo ('I am a string in PHP using single quotes. <br>'); // Using single quotes
    echo ("I am a string in PHP using double quotes. <br>"); // Using double quotes

    /* The main difference between single and double quotes is that double quotes 
    allow for variable interpolation and escape sequences, while single quotes 
    do not. */

    // Code Example
    $name = "John";
    echo ("Hello, $name! <br>"); // Variable interpolation works with double quotes
    echo ('Hello, $name! <br>'); // Variable interpolation does not work with single quotes
    
    
?>