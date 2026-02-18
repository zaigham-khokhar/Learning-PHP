<?php
    /* PHP Magic Constants has Nine Constants that are predefined by PHP and they 
    change depending on where they are used. Also called the "Magic Constant" */

    // __CLASS__ - If used inside a class, the class name is returned.
    // Code Example:
    class MyClass {
        public function getClassName() {
            return __CLASS__;
        }
    }
    $obj = new MyClass();
    echo "Class Name: " . $obj->getClassName() . "\n <br>";

    // __DIR__ - The directory of the file.
    // Code Example:
    echo "Directory: " . __DIR__ . "\n <br>";

    // __FILE__ - The file name including the full path.
    // Code Example:
    echo "File: " . __FILE__ . "\n <br>";

    // __FUNCTION__ - The function name.
    // Code Example:
    function myFunction() {
        return __FUNCTION__;
    }
    echo "Function Name: " . myFunction() . "\n <br>";

    // __LINE__ - The current line number of the file.
    // Code Example:
    echo "Current Line: " . __LINE__ . "\n <br>";

    // __METHOD__ - The class method name.
    // Code Example:
    class AnotherClass {
        public function myMethod() {
            return __METHOD__;
        }
    }
    $anotherObj = new AnotherClass();
    echo "Method Name: " . $anotherObj->myMethod() . "\n <br>";

    // __TRAIT__ - The trait name.
    // Code Example:
    trait MyTrait {
        public function getTraitName() {
            return __TRAIT__;
        }
    }
    class TraitClass {
        use MyTrait;
    }
    $traitObj = new TraitClass();
    echo "Trait Name: " . $traitObj->getTraitName() . "\n <br>";

    // __NAMESPACE__ - The name of the current namespace.
    // Code Example:
    // namespace App\Controller;
    // use App\Model\User; // Importing the class
    // use App\Utils\Database as DB; // Using an alias
    // $user = new User();
    // $db = new DB();

    /* Note: __NAMESPACE__ are remaning code is commented out because it requires a
       namespace declaration which may cause issues in a single file context. */

?>