<?php
    # PHP Iterables
    /* In PHP, an iterable is a value that can be looped through with a foreach() loop.
    The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a
    data type for function arguments and function return values.
    An iterable can be an array or an object that implements the Iterator interface.
    # PHP - Using Iterables
    The iterable keyword can be used as a data type of a function parameter or as
    the return type of a function: */
    # Here is Code Example:
    function printIterable(iterable $x) {
        foreach($x as $item) {
            echo $item;
        }
    }

    // Called with an array:
    printIterable(["a", "b", "c"]);

    // Called with an object:
    $iterator = new ArrayIterator(["d", "e", "f"]);
    printIterable($iterator);

    /* Example
    An iterable return type: */
    function getIterable():iterable {
        return ["a", "b", "c"];
    }

    foreach(getIterable() as $item) {
        echo $item;
    }
?>