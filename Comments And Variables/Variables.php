<?php
    // There are three types of variables in PHP: local, global, and static Scope.

    // 1:
    /* Local Scope: A variable declared within a function is called a local variable. 
    Its scope is limited to the function in which it is declared. It cannot be accessed
    outside of that function. */

    // Example of Local Scope Variable
    function localScopeExample() {
        $localVariable = "I am a local variable.";
        echo $localVariable; // This will work
    } 
    localScopeExample(); // This will call the function and output the local variable
    /* echo $localVariable; // This will cause an error because $localVariable is not
       accessible outside of the function */

    // 2:
    /* Global Scope: A variable declared outside of any function is called a global 
    variable. Its scope is global, meaning it can be accessed from anywhere in the
    script, including inside functions (with the use of the global keyword). */

    // Example of Global Scope Variable 
    $globalScopeExample = "I am a global variable.";
    echo $globalScopeExample; // This will work

    // 3:
    /* Static Scope: A variable declared as static within a function retains its value
    between function calls. It is initialized only once and retains its value even
    after the function has finished executing. Static variables are local to the 
    function but maintain their value across multiple calls to that function. */

    // Example of Static Scope Variable 
    function staticScopeExample() {
        static $staticVariable = 0;  // This variable will retain its value between function calls 
        $staticVariable++;
        echo $staticVariable; // This will output the incremented value each time the function is called
    }
    staticScopeExample(); // This will output 1 
    staticScopeExample(); // This will output 2
?>