<?php
    // Let's Learn About Access Modifiers
    // PHP - Access Modifiers
    /* Properties and methods can have access modifiers (or visibility keywords) which
    control where they can be accessed.
    In PHP, there are three access modifiers:

    1. public - the property or method can be accessed from everywhere. This is default
    2. protected - the property or method can be accessed within the class and by classes
                derived from that class
    3. private - the property or method can ONLY be accessed within the same class where
              they are defined
    Note: If no acces modifier is specified, it will be set to public. */

    // 1.Public Access Modifiers
    // The public access modifier allows class properties or methods to be accessed from everywhere.
    /* In the following example, the $name property and the get_details() method are accessible from
    outside the class. */

    // Code Example:
    class Fruit {
        public $name;
        public function get_details() {
            echo "Name: " . $this->name . ".";
        }
    }
    $apple = new Fruit();
    $apple->name = "Apple";
    $apple->get_details();

    // 2. Protected Access Modifier
    /* The Protected access modifier allows class properties or methods to be accessed within
    the class and by classes derived from that class (child classes).
    In the following example, the $name property is protected and cannot be accessed directcly.*/
    // Code Example:
    class Fruit {
        private $name;

        public function get_details() {
          echo "Name: " . $this->name . ".";
        }
    }
        $apple = new Fruit();
        $apple->name = "Apple"; // Error: Cannot access protected property
        $apple->get_details();

    /* In the following example, the $name property is protected and cannot be accessed directcly
    from outside the class, but it will be accessible within the Apple subclass (child class). */ 
    
    class Fruit {
        protected $name;

        public function setType($name) {
        $this->name = $name;
    }
}

    class Apple extends Fruit {
        public function getType() {
        echo "Name: " . $this->name . ".";
  }
}

    $apple = new Apple();
    $apple->setType("Apple");
    //echo $apple->name; // Error: Cannot access protected property
    echo $apple->getType(); // Output: Name: Apple.

    // 3. Private Access Modifiers
    /* The private access modifier allows class properties or methods ONLY to be accessed within
    the same class where they are defined.
    In the following example, the $name property is private and cannot be accessed directcly.*/

    // Code Example:
    class Fruit {
        private $name;

        public function get_details() {
        echo "Name: " . $this->name . ".";
    }
}

    $apple = new Fruit();
    $apple->name = "Apple"; // Error: Cannot access private property
    $apple->get_details();

?>