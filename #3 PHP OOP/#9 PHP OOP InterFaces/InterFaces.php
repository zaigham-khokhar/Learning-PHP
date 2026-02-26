<?php
    # PHP OOP - Interfaces
    /*PHP Interfaces
    An Interface lets you define which public methods a class MUST implement, without defining
    how they should be implemented.
    Interfaces are declared with the interface keyword, and the methods declared in an interface
    must be public: */
    # Syntax:
    interface InterfaceName {
        public function method1() {
            // Code is Here
        }
        public function method2() {
            // Code is Here
        }
    }

    /* The following example defines an interface named Animal, with one public method
    (makeSound()). The Cat and Dog class implement the Animal interface, and they both
    must include the makeSound() method: */

    // Code Example:
    // Define the interface
    interface Animal {
        public function makeSound();
    }

    // Implement the interface in a class
    class Cat implements Animal {
        public function makeSound() {
        echo "Meow";
      }
    }

    // Implement the interface in another class
    class Dog implements Animal {
        public function makeSound() {
        echo "Woff";
      }
    }

    $cat = new Cat();
    $cat->makeSound();

    $dog = new Dog();
    $dog->makeSound();
?>