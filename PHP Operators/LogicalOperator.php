<?php
    // Logical Operators
    /* The Logical Operators are used to combine conditional statements:
    Always returns a boolean value (true or false) */

    // There are six logical operators in PHP:
    // 1. and (&&)
    // 2. or (||)
    // 3. xor
    // 4. ! (not)
    // 5. && (and)
    // 6. || (or)

    // Example of Logical Operators
    // 1 and (&&)
    $a = true;
    $b = true;
    if ($a and $b) {
        echo "Both a and b are true" . "<br>";
    } else {
        echo "Either a or b is false" . "<br>";
    }

    // 2 or (||)
    $a = true;
    $b = false;
    if ($a or $b) {
        echo "Either a or b is true" . "<br>";
    } else {
        echo "Both a and b are false" . "<br>";
    }

    // 3 xor
    $a = true;
    $b = false;
    if ($a xor $b) {
        echo "Either a or b is true, but not both" . "<br>";
    } else {
        echo "Both a and b are either true or false" . "<br>";
    }

    // 4 ! (not)
    $a = true;
    if (!$a) {
        echo "a is false" . "<br>";
    } else {
        echo "a is true" . "<br>";
    }

    // 5 && (and)
    $a = true;
    $b = true;
    if ($a && $b) {
        echo "Both a and b are true" . "<br>";
    } else {
        echo "Either a or b is false" . "<br>";
    }

    // 6 || (or)
    $a = true;
    $b = false;
    if ($a || $b) {
        echo "Either a or b is true" . "<br>";
    } else {
        echo "Both a and b are false" . "<br>";
    }

?>