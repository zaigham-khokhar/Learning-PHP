<?php
    // Array Operators
    // The array operators are used to compare arrays.
    // There are six types of array operators:
    // 1. Union (+)
    // 2. Equality (==)
    // 3. Identity (===)
    // 4. Inequality (!=)
    // 5. Inequality (<>)
    // 6. Non-identity (!==)

    //  Code Example

    $array1 = ["Heloo1", "Hello2", "Hello3"];
    $array2 = ["Hello1", "Hello2", "Hello3"];
    $array3 = ["Hello1", "Hello2", "Hello3"];

    // 1. Union
    $union = $array1 + $array2;
    print_r($union);

    // 2. Equality
    if ($array1 == $array2) {
        echo "The arrays are equal.";
    } else {
        echo "The arrays are not equal.";
    }

    // 3. Identity
    if ($array1 === $array3) {
        echo "The arrays are identical.";
    } else {
        echo "The arrays are not identical.";
    }
     
    // 4. Inequality
    if ($array1 != $array2) {
        echo "The arrays are not equal.";
    } else {
        echo "The arrays are equal.";
    }

    // 5. Inequality
    if ($array1 <> $array2) {
        echo "The arrays are not equal.";
    } else {
        echo "The arrays are equal.";
    }

    // 6. Non-identity
    if ($array1 !== $array3) {
        echo "The arrays are not identical.";
    } else {
        echo "The arrays are identical.";
    }

?>