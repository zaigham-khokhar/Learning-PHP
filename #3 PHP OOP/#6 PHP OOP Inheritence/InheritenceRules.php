<?php
    // PHP Inheritance
    /* Inheritance in PHP OOP allows a child class to inherit all the public and protected
    properties and methods from a parent class. In addition, the child class can have
    its own properties and methods.
    Note: Private methods of a parent class are not accessible to a child class.
    An inherited class is defined with the extends keyword. */

    // Code Example:
    // Parent class
    class Fruit {
     public $name;
     public $color;

     public function __construct($name, $color) {
       $this->name = $name;
       $this->color = $color;
     }

        public function intro() {
            echo "The fruit is $this->name and the color is $this->color.<br>";
        }
    }

    // Strawberry is inherited from Fruit
    class Strawberry extends Fruit {
      public function message() {
        echo "Am I a fruit or a berry? ";
      }
    }

    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->intro();
    $strawberry->message();

    // PHP - Inheritance and the Protected Access Modifier
    /* In the previous chapter we learned that protected properties or methods can be accessed within the class
    and by classes derived from that class. What does that mean? */

    // Let's look at an example:
    class Fruit {
        public $name;
        public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro() {
        echo "The fruit is $this->name and the color is $this->color.";
        }
    }

    class Strawberry extends Fruit {
        public function message() {
        echo "Am I a fruit or a berry? ";
        }
    }

    // Try to call all three methods from outside class
    $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
    $strawberry->message(); // OK. message() is public
    $strawberry->intro(); // ERROR. intro() is protected

    /* In the example above we see that if we try to call a protected method (intro()) from outside
    the class, we will receive an error.
    The public method will work fine! */

    // Let's look at another example: 

    class Fruit {
        public $name;
        public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
  }

  protected function intro() {
    echo "The fruit is $this->name and the color is $this->color.";
  }
}

    class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? ";
    // Call protected method from within derived class - OK
        $this -> intro();
  }
}

    $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
    $strawberry->message(); // OK. message() is public and calls intro() (which is protected) from within the derived class

    /* PHP - Overriding Inherited Methods
    Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
    Look at the example below. The __construct() and intro() methods in the child class (Strawberry) will
    override the __construct() and intro() methods in the parent class (Fruit): */

    // Code Example:
    class Fruit {
        public $name;
        public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() {
        echo "The fruit is $this->name and the color is $this->color.";
    }
    }

    class Strawberry extends Fruit {
        public $weight;

    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
  }

  public function intro() {
    echo "A $this->name is $this->color, and the weight is $this->weight gram.";
  }
}

    $strawberry = new Strawberry("Strawberry", "red", 50);
    $strawberry->intro();

    /* PHP - The final Keyword
    The final keyword can be used to prevent class inheritance or to prevent method overriding.
    The following example shows how to prevent class inheritance: */

    // Code Example:
    final class Fruit {
    // some code
    }

    // will result in error
    class Strawberry extends Fruit {
    // some code
    }

    // The following example shows how to prevent method overriding:
    class Fruit {
        final public function intro() {
        // some code
    }
    }

    class Strawberry extends Fruit {
        // will result in error
    public function intro() {
    // some code
  }
}
 
?>