<?php
    // PHP - More on Static Methods
    /* A class can have both static and non-static methods. A static method can be accessed
    from a method in the same class using the self keyword and double colon (::): */
    # Here Is Code:
    class greeting {
    // static method
        public static function welcome() {
            echo "Hello World!";
        }
  // non-static method
        public function __construct() {
            self::welcome();
        }
    }

    new greeting();

    /* Static methods can also be called from methods in other classes.
    To do this, the static method should be public: */
    class A {
        public static function welcome() {
            echo "Hello World!";
        }
    }

    class B {
        public function message() {
            A::welcome();
        }
    }
    $obj = new B();
    echo $obj -> message();

    /* To call a static method from a child class, use the parent keyword inside the child class.
    Here, the static method can be public or protected. */
    class domain {
        protected static function getWebsiteName() {
            return "W3Schools.com";
        }
    }

    class domainW3 extends domain {
        public $websiteName;
        public function __construct() {
            $this->websiteName = parent::getWebsiteName();
        }
    }

    $domainW3 = new domainW3;
    echo $domainW3 -> websiteName;

?>