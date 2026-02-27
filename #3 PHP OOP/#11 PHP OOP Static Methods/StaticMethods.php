<?php
    // PHP - Static Methods
    /* The static keyword is used to create static methods and properties.
    Static methods can be accessed directly - without creating an instance of the class first. */

    # Declare a Static Method
    class ClassName {
        public static function staticFunction() {
            echo "Hello World";
        }
    }

    # Access a Static Method
    ClassName::staticFunction();

    /* In the following example, we declare a static method: welcome().
    Then, we access the static method directly by using the class name,
    a double colon (::), and the method name (without creating an instance
    of the class first): */

    // Here is Code:
    class greeting {
        // static Method
        public static function Welcome() {
            echo "Hello World!";
        }
    }
    # Call Static Method Directly
    greeting::Welcome();

    # Another Example:
    /*In the following example, we declare a static method: sum().
    Then, we access the static method directly by using the class name, a double colon (::),
    and the method name: */
    class calu {
        public static function sum($x, $y) {
            return $x + $y;
        }
    }
    $res = calu::sum(6,4);
    echo $res;
?>