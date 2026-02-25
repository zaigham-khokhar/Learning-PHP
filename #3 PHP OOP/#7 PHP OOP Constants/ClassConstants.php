<?php
    # PHP - Class Constants
    /* Class constants are useful if you need to define some constant data within a class.
    A class constant has a fixed value, and cannot be changed once it is declared.
    A class constant is declared inside a class with the const keyword.
    The default visibility of class constants is public.
    Class constants are case-sensitive. However, it is recommended to name the constants
    in all uppercase letters. */

    # PHP - Access Class Constants
    // A Class Constant Accessed in 2 Ways:

    /* 1. A constant can be accessed fom outside the class by using the class name followed
    by the scope resolution operator (::) followed by the constant name: */
    # Code Example:

    class Goodbey {
        const MESSAGE = "Thank you for Your Help!";
    }
    echo Goodbey::MESSAGE; // Access Constant.

    /* 2. A constant can be accessed fom inside the class by using the self keyword followed
    by the scope resolution operator (::) followed by the constant name: */
    # Code Example:

    class Thanks {
        const THANKS = "I am Very ThankFull To you!";
        public function ThanksPrint() {
            echo self::THANKS; // Access Constant
        }
    }
    $thankyou = new Thanks();
    $thankyou->ThanksPrint();
?>