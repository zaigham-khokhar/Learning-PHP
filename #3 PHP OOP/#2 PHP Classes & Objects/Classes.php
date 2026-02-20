<?php
    // Let's Learn About Classes & Objects
    /* A class is a template for objects, and it defines the structure (properties)
    and behavior (methods) of an object. */
    
    // Code Example:
    class Fruit {
        // Properties
        public $name;
        public $color;

        // Methods to set the properties
        function set_details($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        // Methods to display the properties
        function get_details() {
            echo "Name: " . $this->name . "Color: " . $this->color .".<br>";
        }
    }

    /* Note: Properties are variables within in a class and methods are functions within a class.
       Note: The this keyword is used within a method to refer to the current object's properties
       and methods. */


?>