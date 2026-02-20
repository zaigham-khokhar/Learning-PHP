<?php
    // Let's Learn About Objects
    /* Classes are nothing without objects! We can create multiple objects (instances) from a class.
    Each object inherits all the properties and methods defined in the class,
    but each object will have their own property values.
    Objects of a class are created with the new keyword.*/

    // Code Example:
    class Fruit {
        public $name;
        public $color;

        function set_details ($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        function get_details () {
            echo "Name: " . $this->name . ". Color: " . $this->color . ". <br>";
        }
    }

    // Create An Object named $apple from the Fruit Class
    $apple = new Fruit();
    $apple->set_details ("Apple","Red"); // Set Property Values
    $apple->get_details (); // Get Output

    // Create An Object named $banana from the Fruit Class
    $banana = new Fruit();
    $banana->set_details ("Banana", "Yellow");
    $banana->get_details ();

    // PHP - instanceof
    /* You can use the instanceof keyword to check if an object belongs to a specific class: */

    // Code Example:
    $apple = new Fruit();
    var_dump($apple instanceof Fruit);
?>