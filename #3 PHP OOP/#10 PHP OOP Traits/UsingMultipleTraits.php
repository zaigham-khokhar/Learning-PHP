<?php
    # PHP - Using Multiple Traits
    /* In the following example, we define two traits: message1 and message2.
    Then, we create two classes: Welcome and Welcome2. The first class (Welcome)
    uses the message1 trait, and the second class (Welcome2) uses both message1 and message2
    traits (multiple traits are separated by comma): */

    // Here is Code Example:
    trait message1 {
        public function msg1() {
            echo "PHP OOP is fun! ";
        }
    }

    trait message2 {
        public function msg2() {
            echo "Traits reduce code duplication!";
        }
    }

    class Welcome {
        use message1;
    }

    class Welcome2 {
        use message1, message2;
    }

    $obj = new Welcome();
    $obj->msg1();
    echo "<br>";

    $obj2 = new Welcome2();
    $obj2->msg1();
    $obj2->msg2();
?>  