<?php
    # PHP - Two Classes and One Trait
    /* In the following example, we define one trait: message1. This trait contain three
    public methods. Then, we create two classes: Welcome and Welcome2.
    The Welcome and Welcome2 classes use the trait, and all the methods in the trait will be
    available in both classes.
    However, the Welcome class only uses one of the methods in the trait,
    while Welcome2 uses all three methods in the trait: */
    // Here is Code Example
    trait message1 {
        public function msg1() {
            echo "PHP OOP is Fun";
        }
        public function msg2() {
            echo "Traits reduce code duplication!";
        }
        public function msg3() {
            echo "Hello World!";
        }
    } 

    class Welcome {
        use message1;
    }

    class Welcome2 {
        use message1;
    }

    $obj = new Welcome();
    $obj->msg1();
    echo "<br>";

    $obj2 = new Welcome2();
    $obj2->msg3();
    echo "<br>";
?>