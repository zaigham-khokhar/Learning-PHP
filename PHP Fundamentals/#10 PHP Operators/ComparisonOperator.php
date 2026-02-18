<?php
    // Comparison Operators
    /* The comparison operators are used to compare two values.
    They return a boolean value (true or false) based on the comparison. */

    /* There are Ten comparison operators in PHP:
    1. Equal (==)
    2. Identical (===)
    3. Not Equal (!=)
    4. Not Identical (!==)
    5. Greater Than (>)
    6. Less Than (<)
    7. Greater Than or Equal To (>=)
    8. Less Than or Equal To (<=)
    9. Spaceship (<=>)
    10. Null Coalescing (??) */

    // Equal (==)
    $a = 5;
    $b = '5';
    var_dump($a == $b);

    // Identical (===)
    var_dump($a === $b);

    // Not Equal (!=)
    var_dump($a != $b);

    // Not Identical (!==)
    var_dump($a !== $b);

    // Greater Than (>)
    var_dump($a > 3);

    // Less Than (<)
    var_dump($a < 10);

    // Greater Than or Equal To (>=)
    var_dump($a >= 5);

    // Less Than or Equal To (<=)
    var_dump($a <= 4);

    // Spaceship (<=>)
    $x = 5;
    $y = 10;
    var_dump($x <=> $y); // returns -1 because $x is less than $y
    var_dump($y <=> $x); // returns 1 because $y is greater than $x
    var_dump($x <=> $x); // returns 0 because $x is equal to $x

    // Null Coalescing (??)
    $username = null;
    $defaultUsername = 'Guest';
    $finalUsername = $username ?? $defaultUsername;
    echo $finalUsername;
?>