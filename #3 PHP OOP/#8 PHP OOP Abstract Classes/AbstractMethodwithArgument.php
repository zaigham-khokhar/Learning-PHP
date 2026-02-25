<?php
    # Abstract Method with Argument
    // Let's look at another example where the abstract method has an argument:

    abstract class ParentClass {
        // Abstract method with an argument
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass {
        public function prefixName($name) {
        if ($name == "John Doe") {
            $prefix = "Mr.";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }
            return "$prefix $name";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe");
    echo "<br>";
    echo $class->prefixName("Jane Doe");
    echo "<br>";
    echo $class->prefixName("Baby Doe");

    /* In the following example, the child class has two optional arguments that are not
    defined in the parent's abstract method: */

    abstract class ParentClass {
        // Abstract method with an argument
    abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass {
        // The child class may define optional arguments that are not in the parent's abstract method
        public function prefixName($name, $separator = ".", $greet = "Dear") {
        if ($name == "John Doe") {
            $prefix = "Mr";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "$greet $prefix$separator $name";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe");
    echo "<br>";
    echo $class->prefixName("Jane Doe");
?>