<?php
    // Multidimensional Array
    // A multidimensional array is an array containing one or more arrays.
    /* PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However,
       arrays more than three levels deep are hard to manage for most people. */

    // Code Example:
    $cars = array (
        array("Volvo", 32, 67),
        array("BMW", 34, 76),
        array("Saab", 54, 76),
        array("Land", 45, 87),
    );
    print_r($cars);

    // Another Example
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

    /* Tip:  The dimension of an array indicates the number of indices you need to select an element.
    For a two-dimensional array you need two indices to select an element
    For a three-dimensional array you need three indices to select an element */

?>  