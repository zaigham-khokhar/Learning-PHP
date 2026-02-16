<?php
    /* There are eight data types in PHP: string, integer, float, boolean,
    array, object, resource, and NULL. Each data type has its own characteristics
    and is used to store different types of data. */

    // Examples of All Types of Data Types in PHP

    // String data type
    $name = "John Doe";
    echo "My name is " . $name . "<br>";

    // Integer data type
    $age = 30;
    echo "I am " . $age . " years old. <br>";

    // Float data type
    $height = 5.9;
    echo "My Height is " . $height . "feet. <br>";

    // Boolean data type
    $isStudent = true;
    echo "Am I a student?" . ($isStudent ? "Yes" : "No") . "<br>";

    // Array data type 
    $arr = [13, 25, 33, 43, 57];
    echo "The first element of the array is:" . $arr[0] ."<br>";

    // object data type
    class Person {
        public $name;
        public $age;
        public function __construct($name, $age ) {
            $this->name = $name;
            $this->age = $age;
        }}
    
    // Null data type
    $address = null;
    echo "My Address is " . $address . "<br>"; 

    // Resource data type 
    $files = fopen ("file.txt", "r") or die ("Unable to open file!");
    echo ($files ? "File opened successfully." : "Failed to open file.") . "<br>";
?>