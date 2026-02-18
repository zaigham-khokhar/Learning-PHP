<?php
    // PHP Remove Array Items
    // In PHP, you can remove/delete array items with several different functions:
    // 1. array_splice() - removes a portion of the array and replaces it with something else
    // 2. unset() - destroys the specified variables
    // 3. array_pop() - removes the last element of the array
    // 4. array_shift() - removes the first element of the array
    // 5. array_diff() - compares arrays and returns the differences

    // 1. array_splice() - removes a portion of the array and replaces it with something else
    $fruits = array("Banana", "Orange", "Apple", "Mango" . "<br>");
    array_splice($fruits, 2, 1); // Removes "Apple" 
    print_r($fruits); 

    // 2. unset() - destroys the specified variables
    $fruits = array("Banana", "Orange", "Apple", "Mango" . "<br>");
    unset($fruits[2]); // Removes "Apple"
    print_r($fruits);

    // 3. array_pop() - removes the last element of the array
    $fruits = array("Banana", "Orange", "Apple", "Mango" . "<br>");
    array_pop($fruits); // Removes "Mango"
    print_r($fruits);

    // 4. array_shift() - removes the first element of the array
    $fruits = array("Banana", "Orange", "Apple", "Mango" . "<br>");
    array_shift($fruits); // Removes "Banana"
    print_r($fruits);

    // 5. array_diff() - compares arrays and returns the differences
    $array1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow" . "<br>");
    $array2 = array("a" => "red", "b" => "green", "c" => "blue" . "<br>");
    $result = array_diff($array1, $array2); // Returns the differences between $array1 and $array2
    print_r($result);

?>