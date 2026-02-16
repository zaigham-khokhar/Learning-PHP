<?php
    // Access Array Items
    /* To access an array item, you can refer to the index number or the key name
    inside square brackets. */
    // Accessing Values from an Indexed Array
    $fruits = array("Apple", "Banana", "Mango", "Orange");
    echo $fruits[0];
    echo $fruits[1];
    echo $fruits[2];
    echo $fruits[3];

    // Accessing Values from an Associative Array
    $person = array(
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    );

    echo $person["name"];
    echo $person["age"];
    echo $person["city"];
?>