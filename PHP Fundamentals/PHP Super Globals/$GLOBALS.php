<?php
    // Global Variables
    /*Global variables are variables that can be accessed from any scope.
    Variables of the outer most scope are automatically global variables, and can be used by any scope.
    However, to use a global variable inside a function you have to either define them as global with the
    global keyword, or refer to them by using the $GLOBALS syntax. */

    // Code Example
    $x = 75;
    function GlobalFunction(){
        echo $GLOBALS['x'];
    }

    GlobalFunction();
?>