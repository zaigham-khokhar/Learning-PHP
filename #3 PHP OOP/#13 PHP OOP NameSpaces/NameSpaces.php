<?php
    # PHP NameSpaces
    /* PHP namespaces are used to prevent naming conflicts between classes, interfaces,
    functions, and constants.
    Namespaces are used to group related code together under a name - to avoid naming
    conflicts when your code grows, or when you use code from multiple sources. */

    # Why Use Namespaces?
    /* # To avoid name conflicts, especially in larger projects
       # To organize code into logical groups
       # To separate your code from code in libraries
       # To allow the same name to be used for more than one class, without conflict

    Assume you have a set of classes which describe an HTML table: Table, Row and Cell.
    In addition you have another set of classes which describe furnitures:
    Table, Chair and Bed. Here, namespaces can be used to organize these classes into
    two different groups, which prevents the two Table classes from being mixed up.*/

    # Declaring a NameSpace
    /* Namespaces must be declared at the beginning of a PHP file, using the namespace keyword,
    followed by a name for the namespace.

    Here, we declare a namespace called Html: */
    namespace Html;
?>  