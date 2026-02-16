<?php
    // There are three Main Types of Numbers in PHP:
    // 1. Integers
    // 2. Floats (also called Doubles)
    // 3. Numeric Strings

    // 1. Integers
    $int1 = 42; // Decimal
    $int2 = 0b101010; // Binary
    $int3 = 0x2A; // Hexadecimal
    echo "Integer 1: $int1\n <br>"; 
    echo "Integer 2: $int2\n <br>"; 
    echo "Integer 3: $int3\n <br>"; 

    // 2. Floats (Doubles)
    $float1 = 3.14; // Standard float
    $float2 = 1.5e3; // Scientific notation (1500)
    echo "Float 1: $float1\n <br>"; 
    echo "Float 2: $float2\n <br>"; 

    // 3. Numeric Strings
    $numStr1 = "123"; // Numeric string
    $numStr2 = "3.14"; // Numeric string representing a float
    echo "Numeric String 1: $numStr1\n <br>"; 
    echo "Numeric String 2: $numStr2\n <br>"; 

    // In Additional, PHP has Two more Data Types used for Numbers:
    // 4. Infinite (Not a Number)
    $inf = INF; // Represents infinity
    echo "Infinity: $inf\n <br>";

    // 5. NaN (Not a Number)
    $nan = NAN; // Represents Not a Number
    echo "NaN: $nan\n <br>";


?>