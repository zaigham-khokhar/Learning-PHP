<?php
    # PHP - Static Properties
    /* The static keyword is used to create static properties.
    Static properties can be accessed directly - without creating an instance of a class first. */

    # Declare a Static Property
    // To declare a static property in a class, use the static keyword:
    # Here is Code Example:
    class ClassName {
        public static $statProp = "Hey I am Zaigham";
    }

    # Access a Static Property
    /* To access a static property, specify the class name, followed by a
    double colon (::) and the method name: */
    ClassName::$statProp;

    /* In the following example, we declare a static property: $value.
    Then, we echo the value of the static property directly by using the class name,
    double colon (::), and the property name (without creating a class first): */
    class pi {
        // static property
        public static $value = 3.12893;
    }
    // Get static property directly
    echo pi::$value;
?>