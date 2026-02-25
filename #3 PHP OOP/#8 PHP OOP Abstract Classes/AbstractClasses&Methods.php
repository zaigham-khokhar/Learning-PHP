<?php
    # PHP - Abstract Classes and Methods
    /* An abstract class is a class that contains at least one abstract method.
    An abstract method is a method that is declared, but not implemented in the abstract class.
    The implementation must be done in the child class(es).
    The purpose of an abstract class is to enforce all derived classes (child classes)
    to implement the abstract method(s) declared in the parent class.
    An abstract class or method is defined with the abstract keyword. */

    # Code Example:
    // Abstract Base Class
    abstract class Car {
        public $name;

    // Non-abstract method
        public function __construct($name) {
            $this->name = $name;
        }

    // Abstract method - forces child classes to implement it
        abstract public function intro();
    }

    // Child class that extends the abstract class
    class Audi extends Car {
        public function intro() {
            return "German quality! I'm an $this->name!";
        }
    }

    // Child class that extends the abstract class
    class Citroen extends Car {
        public function intro() {
            return "French extravagance! I'm a $this->name!";
        }
    }

    // Create objects of the child classes
    $audi = new audi("Audi");
        echo $audi->intro();
        echo "<br>";

    $citroen = new citroen("Citroen");
        echo $citroen->intro();

    /* Example Explained
    The Audi and Citroen classes are inherited from the abstract Car class.
    This means that the Audi and Citroen classes can use the public $name property
    as well as the public __construct() method from   the Car class because of inheritance.

    In addition, intro() is an abstract method that must be implemented in all the child classes.

    Notes on Abstract Classes
    When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

    So, when a child class is inherited from an abstract class, we have the following rules:
    The child class method must be defined with the same name and it redeclares the parent
    abstract method.
    The child class method must be defined with the same or a less restricted access modifier
    The number of required arguments must be the same. However, the child class may have
    optional arguments in addition
 */
?>