<?php
    // PHP OOP - Traits
    #  PHP - What are Traits?
    /* Traits are used to declare methods that can be used in multiple classes.
    Traits can have methods and abstract methods that can be used in multiple classes,
    and the methods can have any access modifier (public, private, or protected). 
    Traits allow you to reuse several methods freely in different classes,
    and are a mechanism for code reuse.*/

    #  Traits Syntax
    // A trait is defined with the trait keyword, followed by a name for the trait:
    trait TraitName {

    }

    # How to Use Traits In other Class 
    class MyClass {
        use TraitName;
    }

    /* In the following example, we define a trait: message1. Then, we create a class:
    Welcome. This class uses the trait, and all the methods in the trait will be available
    in the class: */
    # Code Example:
    trait message1 {
        public function sayHello() {
            echo "Hello I am Zaigahm";
        }    
    }
    // Use the trait in a class
    class Wellcome {
        use message1;
    }

    $obj = new Wellcome();
    $obj->sayHello();

?>