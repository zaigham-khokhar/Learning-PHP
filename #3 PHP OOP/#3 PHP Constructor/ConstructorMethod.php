<?php
    // Let's Learn About Constructor 
    /* The PHP __construct() function is a special method within a class that is automatically
    called each time a new object is created from a class (with the new keyword).
    The __construct() function accept arguments, which are passed upon object creation
    (e.g., $apple = new Fruit("Apple", "Red");). This allows for dynamic initialization
    (reduces code).
    Notice that the __construct() function starts with two underscores (__)! */

    // Code Example
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        function get_details() {
            echo "Name: " . $this->name . "Color: " . $this->color . ". <br>";
        }
    }
    
        $apple = new Fruit('Apple', 'Red');
        $apple->get_details();

        $banana = new Fruit('Banana', 'Yellow');
        $banana->get_details();
?>