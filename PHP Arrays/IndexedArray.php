<?php
    // Indexed Array
    // In Indexed Array, The index starts From 0 and goes on incrementing by 1 for each value.
    // Creating an Indexed Array
    $fruits = array("Apple", "Banana", "Mango", "Orange");
    // Accessing Values from an Indexed Array
    echo $fruits[0];
    echo $fruits[1];
    echo $fruits[2];
    echo $fruits[3];

    // Adding Values to an Indexed Array
    $fruits[] = "Grapes";
    // Looping through an Indexed Array
    for($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i] . "<br>";
    }
    // Using foreach loop to iterate through an Indexed Array
    foreach($fruits as $fruit) {
        echo $fruit . "<br>";
    }
?>