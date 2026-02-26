<?php
    # PHP - Interfaces VS Abstract Classes
    /* Interface are similar to abstract classes. The difference between interfaces and
    abstract classes are: 
    # Interfaces cannot have properties, while abstract classes can.
    # All interface methods must be public, while abstract methods can be public or protected.
    # Classes can implement an interface while inheriting from another class at the same time.
    # All methods in an interface are abstract, so they cannot be implemented in code and the
    abstract keyword is not necessary.*/

    # PHP - Using Interfaces
    /* The following example defines an interface named Animal, with two public methods
    (fromFamily() and makeSound()). The Cat and Dog class implement the Animal interface,
    and they must include both the fromFamily() and the makeSound() methods: */
    # Code Example:

    interface Animal {
        public function fromFamily();
        public function makeSound();
    }
    class Cat implements Animal {
        public function fromFamily() {
        echo "From family: Felidae (Relatives: lions, tigers, jaguars, lynx, cougars, and cheetahs).<br>";
    }
        public function makeSound() {
        echo "Sound: Meow.";
      }
    }
    class Dog implements Animal {
        public function fromFamily() {
        echo "From family: Canidae (Relatives: wolves, foxes, coyotes, jackals, and domestic dogs).<br>";
    }
        public function makeSound() {
        echo "Sound: Woff.";
      }
    }

    echo "<h3>Cats</h3>";
    $cat = new Cat();
    $cat->fromFamily();
    $cat->makeSound();

    echo "<h3>Dogs</h3>";
    $dog = new Dog();
    $dog->fromFamily();
    $dog->makeSound();
?>