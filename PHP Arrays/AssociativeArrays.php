<?php
    // Associative Arrays
    /* Associative arrays use named keys, instead of numeric indices. */
    // Creating an Associative Array
    $person = array(
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    );

    // Accessing Values from an Associative Array
    echo $person["name"];
    echo $person["age"];
    echo $person["city"];

    // Adding Values to an Associative Array
    $person["country"] = "USA";

    // Looping through an Associative Array
    foreach($person as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
?>