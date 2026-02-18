<?php
    // PHP $_SERVER
    /* The $_SERVER superglobal holds information about the web server including headers,
    paths, and script locations.
    PHP superglobals are built-in variables that are always accessible in all scopes!
    Note: The entries in $_SERVER are created by the web server, so there is no guarantee
    that every entry is available across different servers or environments.
    The example below shows how to use some of the elements in $_SERVER: */ 

    // Code Example:
    echo $_SERVER['PHP_SELF' ];
    echo $_SERVER['SERVER_NAME'];
    echo $_SERVER['HTTP_HOST'];
    echo $_SERVER['HTTP_REFERER'];
    echo $_SERVER['HTTP_USER_AGENT'];
    echo $_SERVER['SCRIPT_NAME'];
?>