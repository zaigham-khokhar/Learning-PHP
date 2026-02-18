<?php
    // Array Sorting Functions
    /* The items in Array can be sorted in alphabetical or numerical order, descending or ascending.
    Here are the main PHP array sorting functions:
        1.  sort() - sorts an indexed array in ascending order
        2.  rsort() - sorts an indexed array in descending order
        3.  asort() - sorts an associative array in ascending order, according to the value
        4.  ksort() - sorts an associative array in ascending order, according to the key
        5.  arsort() - sorts an associative array in descending order, according to the value
        6.  krsort() - sorts an associative array in descending order, according to the key */

    // 1. sort()
    // Code Example
    $arr = ["Bike", "Car", "Plane" . "<br>"];
    sort($arr);
    print_r($arr);

    // 2. rsort()
    $cars = array("Volvo", "BMW", "Toyota" . "<br>");
    rsort($cars);
    print_r($cars);

    // 3. asort()
    $age = ["Zaigham" =>"17", "Smile" => "23", "Azan" => "20" . "<br>"];
    asort($age);
    print_r($age);

    // 4. ksort()
    $ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43" . "<br>");
    ksort($ages);
    print_r($ages);

    // 5. arsort
    $sort = ["Zaigham", "Azan", "Harry" . "<br>"];
    asort($sort);
    print_r($sort);

    // 6. krsort
    $sorts = ["Harry", "Buddy", "Zaigham" . "<br>"];
    krsort($sorts);
    print_r($sorts);    
?>
