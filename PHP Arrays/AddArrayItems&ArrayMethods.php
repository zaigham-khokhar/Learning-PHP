<?php
    // PHP Add Array Items
    /* In PHP, you can add array items with several different methods:
        1 . [] - adds a single item to the end of an array
        2 . array_push() - adds one or more items to the end of an array
        3 . array_unshift() - adds one or more items to the beginning of an
        4 . array_splice() - adds one or more items to an array at a specified index
        5 . array_merge() - merges one or more arrays into a single array
    */

    // 1 . [] - adds a single item to the end of an array
    $fruits = ["apple", "banana"];
    $fruits[] = "orange"; // Adds "orange" to the end of the array
    print_r($fruits);

    // 2 . array_push() - adds one or more items to the end of an array
    $fruits = ["apple", "banana"];
    array_push($fruits, "orange", "grape"); // Adds "orange" and "grape" to the end of the array
    print_r($fruits); 

    // 3 . array_unshift() - adds one or more items to the beginning of an array
    $fruits = ["apple", "banana"];
    array_unshift($fruits, "orange", "grape"); // Adds "orange" and "grape" to the beginning of the array
    print_r($fruits); 

    // 4 . array_splice() - adds one or more items to an array at a specified index
    $fruits = ["apple", "banana"];
    array_splice($fruits, 1, 0, "orange"); // Adds "orange" at index 1
    print_r($fruits); // Output: Array ( [0] => apple [1] => orange [2] => banana )
    
    // 5 . array_merge() - merges one or more arrays into a single array
    $fruits1 = ["apple", "banana"];
    $fruits2 = ["orange", "grape"];
    $mergedFruits = array_merge($fruits1, $fruits2); // Merges $fruits1 and $fruits2 into a single array
    print_r($mergedFruits); 

?>