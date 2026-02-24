<?php
    // Let's Learn About Destructor.
    /* PHP - The __destruct() Function
    The PHP __destruct() function is a special method within a class that is automatically
    called when an object is destroyed or when the script finishes execution.
    The PHP __destruct() function is the opposite of the PHP __construct() function.
    If you create a __destruct() function, PHP will automatically call this function at the end of the script.
    Notice that the __destruct() function starts with two underscores (__)! */

    // Code Example:
    class Fruit {
        public $name;
        public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct() {
        echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
    }
}

    $apple = new Fruit('Apple', 'Red');
    $banana = new Fruit('Banana', 'Yellow');

    # Tip: As constructors and destructors helps reducing the amount of code, they are very useful!
?>