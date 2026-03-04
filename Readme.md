# PHP Learning Project

Welcome to the **PHP Learning Project** - A comprehensive, hands-on tutorial designed to help you master PHP programming from scratch. This project follows the W3Schools PHP curriculum and provides practical examples for every PHP concept.

---

## Table of Contents

1. [Introduction](#introduction)
2. [Project Overview](#project-overview)
3. [Project Structure](#project-structure)
4. [Features & Capabilities](#features--capabilities)
5. [Getting Started](#getting-started)
6. [Learning Paths](#learning-paths)
7. [Quick Examples](#quick-examples)
8. [PHP Function Reference](#php-function-reference)
9. [Requirements](#requirements)
10. [Installation](#installation)
11. [Contributing](#contributing)
12. [Resources](#resources)
13. [License](#license)

---

## Introduction

PHP (Hypertext Preprocessor) is a popular general-purpose scripting language that is especially suited for web development. It was originally created by Rasmus Lerdorf in 1994 and has since become one of the most widely used server-side programming languages.

This project provides a structured learning approach with:
- **Hands-on examples** for every concept
- **Well-documented code** with comments
- **Progressive learning** from basics to advanced topics
- **Practical projects** to apply your knowledge

---

## Project Overview

| Attribute | Details |
|-----------|---------|
| **Project Name** | PHP Learning Project |
| **Project Type** | Educational/Tutorial Code Repository |
| **Primary Language** | PHP |
| **Current Version** | 8.5.0 |
| **Last Updated** | March 2026 |
| **Target Audience** | Beginners to Intermediate PHP Developers |

### Project Goals

1. **Beginner-Friendly Learning Path** - Structured way for new developers to learn PHP from scratch
2. **Hands-On Practice** - Practical code examples that users can run and experiment with
3. **Comprehensive Coverage** - All fundamental PHP topics as found in professional PHP development
4. **Reference Material** - Quick reference for PHP functions and syntax
5. **W3Schools Alignment** - Follow the same topic organization as W3Schools PHP tutorials

---

## Project Structure

```
Learning php/
│
├── #1 PHP Fundamentals/                    # PHP basics and fundamentals (18 sections)
│   ├── #1 PHP Comments And Variables/
│   │   ├── Comments.php                    # Single-line and multi-line comments
│   │   └── Variables.php                  # Variable types and scopes
│   ├── #2 PHP Echo And Print/
│   │   └── Echo & print.php                # Output statements
│   ├── #3 PHP Data Types/
│   │   ├── DataTypes.php                   # All 8 PHP data types
│   │   └── file.txt                        # Sample data file
│   ├── #4 PHP String/
│   │   ├── StringDetails.php               # String fundamentals
│   │   ├── ConcatenationString.php         # String concatenation
│   │   ├── EscapeCharacters.php            # Escape sequences
│   │   ├── SlicingStrings.php              # String slicing/substrings
│   │   ├── ModifyStringBulit-in-Methods.php # String modification methods
│   │   └── StringFunctions.php             # Built-in string functions
│   ├── #5 PHP Numbers/
│   │   ├── NumbersDetails.php              # Number types
│   │   └── NumbersFunction.php             # Number functions
│   ├── #6 PHP Type Casting/
│   │   └── PHPCastingDetails.php           # Type conversion
│   ├── #7 PHP Math/
│   │   └── MathFunctions&Details.php       # Math functions
│   ├── #8 PHP Constants/
│   │   └── ConstantsDetails&Functions.php  # Constants
│   ├── #9 PHP Magic Constant/
│   │   └── MagicConstantDetails.php        # Magic constants
│   ├── #10 PHP Operators/
│   │   ├── ArithmethicOperator.php         # +, -, *, /, %, **
│   │   ├── ArrayOperator.php               # Array operators
│   │   ├── AssignmentOperator.php          # =, +=, -=, *=, /=, .=, %=
│   │   ├── ComparisonOperator.php           # ==, ===, !=, <>, !==
│   │   ├── ConditionalOperator.php          # ?:, ??
│   │   ├── Increment&DecrementOperators.php # ++, --
│   │   ├── LogicalOperator.php              # and, or, xor, !, &&, ||
│   │   └── StringOperator.php               # ., .=
│   ├── #11 PHP If...Else...Elseif/
│   │   ├── IfSyntax.php                     # If statement syntax
│   │   ├── Examples.php                     # If-else examples
│   │   ├── Nestedif.php                     # Nested if statements
│   │   └── ShortHandif.php                  # Ternary operator
│   ├── #12 PHP Switch/
│   │   └── SwitchStatementDetails&Syntax.php # Switch statement
│   ├── #13 PHP Match/
│   │   └── MatchDetalis&Syntax.php          # Match expression (PHP 8+)
│   ├── #14 PHP Loop/
│   │   ├── ForLoop.php                      # For loop
│   │   ├── WhileLoop.php                    # While loop
│   │   ├── DoWhileLoop.php                  # Do-while loop
│   │   ├── ForEachLoop.php                  # Foreach loop
│   │   ├── BreakStatement.php               # Break statement
│   │   └── ContinueStatement.php            # Continue statement
│   ├── #15 PHP Functions/
│   │   └── FunctionsDetails&Syntax.php      # User-defined functions
│   ├── #16 PHP Arrays/
│   │   ├── ArrayDetails.php                 # Array fundamentals
│   │   ├── IndexedArray.php                 # Indexed arrays
│   │   ├── AssociativeArrays.php            # Associative arrays
│   │   ├── MultidimensionalArray.php         # Multi-dimensional arrays
│   │   ├── AccessArrayItems.php             # Accessing array elements
│   │   ├── UpdateArrayItems.php             # Updating array elements
│   │   ├── AddArrayItems&ArrayMethods.php   # Adding array items
│   │   ├── RemoveArrayItems&ArrayMethods.php # Removing array items
│   │   ├── SortingArray.php                 # Sorting arrays
│   │   └── ArrayFunctions.php               # Array functions
│   ├── #17 PHP Super Globals/
│   │   ├── SuperGlobalsDetails.php          # Super globals overview
│   │   ├── $GLOBALS.php                     # Global variable access
│   │   ├── $_SERVER.php                     # Server information
│   │   ├── $_GET.php                        # GET parameters
│   │   ├── $_POST.php                       # POST parameters
│   │   ├── $_REQUEST.php                    # Request variables
│   │   ├── Get.php                          # GET method example
│   │   ├── Post.php                         # POST method example
│   │   └── Request.php                      # Request example
│   └── #18 RegEx & RegEx Functions/
│       └── RegExDeatils&Syntax.php          # Regular expressions
│
├── #2 PHP Form/                             # Form handling (5 sections)
│   ├── #1 PHP Form Handling/
│   │   ├── FormHandling.php                 # Basic form handling
│   │   ├── welcome_get.php                  # GET form example
│   │   └── welcome.php                      # Form welcome page
│   ├── #2 PHP Form Validation/
│   │   └── FormValidation.php                # Server-side validation
│   ├── #3 PHP Form Required/
│   │   └── FormRequired.php                 # Required field validation
│   ├── #4 PHP Form URL & E-mail/
│   │   └── FormURL&E-mail.php               # URL and email validation
│   └── #5 PHP Form Complete/
│       └── FormComplete.php                 # Complete form example
│
├── #3 PHP OOP/                              # Object-oriented programming (14 sections)
│   ├── #1 PHP OOP What is OOP/
│   │   └── WhatisOOP.php                    # Introduction to OOP
│   ├── #2 PHP OOP Classes & Objects/
│   │   ├── Classes.php                      # Class definitions
│   │   └── Objects.php                     # Object creation and usage
│   ├── #3 PHP OOP Constructor/
│   │   └── ConstructorMethod.php            # Constructor
│   ├── #4 PHP OOP Destructor/
│   │   └── DestructorMethod.php              # Destructor
│   ├── #5 PHP OOP Access Modifiers/
│   │   └── AccessModifiers.php              # Public, Private, Protected
│   ├── #6 PHP OOP Inheritence/
│   │   └── InheritenceRules.php             # Inheritance
│   ├── #7 PHP OOP Constants/
│   │   └── ClassConstants.php               # Class constants
│   ├── #8 PHP OOP Abstract Classes/
│   │   ├── AbstractClasses&Methods.php      # Abstract classes
│   │   └── AbstractMethodwithArgument.php   # Abstract methods with arguments
│   ├── #9 PHP OOP InterFaces/
│   │   ├── InterFaces.php                   # Interfaces
│   │   └── InterFacesVsAbstractClasse.php   # Interfaces vs Abstract Classes
│   ├── #10 PHP OOP Traits/
│   │   ├── OOPTraits.php                    # Traits
│   │   ├── TwoClassesInOneTrait.php         # Two classes in one trait
│   │   └── UsingMultipleTraits.php          # Using multiple traits
│   ├── #11 PHP OOP Static Methods/
│   │   ├── StaticMethods.php                # Static methods
│   │   └── MoreOnStaticMethods.php         # More on static methods
│   ├── #12 PHP OOP Static Properties/
│   │   ├── StaticProperties.php             # Static properties
│   │   └── MoreOnStaticProperties.php       # More on static properties
│   ├── #13 PHP OOP NameSpaces/
│   │   └── NameSpaces.php                   # Namespaces
│   └── #14 PHP OOP Iterables/
│       ├── Iterables.php                    # Iterables
│       └── CreatingIterables.php            # Creating iterables
│
├── #4 Mini Student Project/                 # Mini project
│   ├── index.php                            # Main student management page
│   └── student.php                           # Student class
│
├── #5 PHP TODO-LIST Mini Project/           # TODO List Mini Project
│   ├── index.php                            # Main TODO list interface
│   ├── Todo.php                             # TODO class
│   └── style.css                            # Styling for TODO list
│
├── Documentation.md                         # Detailed documentation
└── Readme.md                                # This file
```

---

## Features & Capabilities

### 1. Comments and Variables

| Feature | Description |
|---------|-------------|
| Single-line comments | Using `//` or `#` |
| Multi-line comments | Using `/* */` |
| Local variables | Variables within function scope |
| Global variables | Variables accessible throughout script |
| Static variables | Variables retaining value between calls |
| Variable variables | Dynamic variable names |

### 2. Data Types

PHP supports 8 data types:

- **String** - Text data enclosed in quotes
- **Integer** - Whole numbers (positive or negative)
- **Float** - Decimal numbers
- **Boolean** - True or False values
- **Array** - Multiple values in a single variable
- **Object** - Instances of classes
- **Resource** - References to external resources
- **NULL** - Empty or uninitialized value |

### 3. Operators

| Category | Operators |
|----------|-----------|
| Arithmetic | `+`, `-`, `*`, `/`, `%`, `**` |
| Assignment | `=`, `+=`, `-=`, `*=`, `/=`, `.=` |
| Comparison | `==`, `===`, `!=`, `<>`, `!==`, `>`, `<`, `>=`, `<=`, `<=>` |
| Increment/Decrement | `++`, `--` |
| Logical | `and`, `or`, `xor`, `!`, `&&`, `\|\|` |
| String | `.`, `.=` |
| Array | `+`, `==`, `===`, `!=`, `<>`, `!==` |
| Conditional | `?:`, `??` |

### 4. Control Structures

- **Conditional Statements**: If, Else, Elseif, Switch, Match (PHP 8+)
- **Loops**: While, Do-While, For, Foreach
- **Jump Statements**: Break, Continue

### 5. Functions

- User-defined functions
- Function parameters and return values
- Default parameter values
- Variable scope in functions
- Anonymous functions (Closures)
- Variable functions

### 6. Arrays

- Indexed arrays
- Associative arrays
- Multidimensional arrays
- Array functions (sorting, filtering, manipulation)
- Array iteration

### 7. Super Globals

- `$GLOBALS` - Access global variables
- `$_SERVER` - Server and execution environment information
- `$_GET` - HTTP GET variables
- `$_POST` - HTTP POST variables
- `$_REQUEST` - HTTP Request variables
- `$_SESSION` - Session variables
- `$_COOKIE` - Cookie variables
- `$_FILES` - File upload information
- `$_ENV` - Environment variables

### 8. Regular Expressions

- Pattern matching
- Search and replace
- Pattern validation
- Metacharacters and quantifiers
- Common regex patterns

### 9. Form Handling

- GET and POST methods
- Form validation (server-side)
- Required field validation
- URL and email validation
- Complete form examples with security

### 10. Object-Oriented Programming

- Classes and Objects
- Constructors and Destructors
- Access Modifiers (Public, Private, Protected)
- Inheritance
- Class Constants
- Abstract Classes
- Interfaces
- Traits
- Static methods and properties
- Namespaces
- Iterables

---

## Getting Started

### Prerequisites

Before running this project, ensure you have:

1. **Web Server**: Apache, Nginx, or any web server with PHP support
2. **PHP Version**: PHP 7.4 or higher (PHP 8.0+ recommended for match expressions)
3. **Database** (Optional): MySQL if you plan to use database examples

### Installation Methods

#### Method 1: XAMPP (Recommended for Windows)

1. Download and install XAMPP from [apachefriends.org](https://www.apachefriends.org/)
2. Navigate to the XAMPP installation directory (typically `C:\xampp\`)
3. Locate the `htdocs` folder
4. Copy this project folder into `htdocs`
5. Start Apache from XAMPP Control Panel
6. Open browser and navigate to `http://localhost/Learning%20php/`

#### Method 2: WAMP (Windows)

1. Download and install WAMP from [wampserver.com](https://www.wampserver.com/)
2. Navigate to the `www` folder (typically `C:\wamp64\www\`)
3. Copy this project folder into `www`
4. Start WAMP services
5. Access via `http://localhost/Learning%20php/`

#### Method 3: LAMP (Linux)

1. Install Apache and PHP:
   ```bash
   sudo apt update
   sudo apt install apache2 php libapache2-mod-php
   ```
2. Copy project to `/var/www/html/`:
   ```bash
   sudo cp -r "Learning php" /var/www/html/
   ```
3. Set permissions:
   ```bash
   sudo chmod -R 755 /var/www/html/"Learning php"
   ```
4. Access via `http://localhost/Learning%20php/`

#### Method 4: Built-in PHP Server

For quick testing without a web server:

1. Open terminal in the project directory
2. Run:
   ```bash
   php -S localhost:8000
   ```
3. Open browser to `http://localhost:8000`

---

## Learning Paths

### Path 1: PHP Fundamentals (Recommended for Beginners)

Start here if you're new to PHP:

1. Comments and Variables
2. Echo and Print
3. Data Types
4. Strings
5. Numbers
6. Operators
7. If...Else...Elseif
8. Switch Statement
9. Loops
10. Functions
11. Arrays

### Path 2: Form Handling

Learn how to handle web forms:

1. PHP Form Handling
2. PHP Form Validation
3. PHP Form Required
4. PHP Form URL & E-mail
5. PHP Form Complete

### Path 3: Object-Oriented Programming

Master OOP concepts in PHP:

1. What is OOP
2. Classes and Objects
3. Constructor
4. Destructor
5. Access Modifiers
6. Inheritance
7. Class Constants
8. Abstract Classes
9. Interfaces
10. Traits
11. Static Methods
12. Static Properties
13. Namespaces
14. Iterables

### Path 4: Practical Application

Apply your knowledge with the Mini Projects:

1. Student Management System with CRUD operations
2. TODO-List Application with file handling

---

## Quick Examples

### Hello World

```php
<?php
// Simple Hello World
echo "Hello, World!";
print "Hello, World!";

// With HTML
echo "<h1>Hello, World!</h1>";
?>
```

### Variables

```php
<?php
// Different variable types
$name = "John";           // String
$age = 25;                // Integer
$height = 5.9;            // Float
$isStudent = true;       // Boolean

// Arrays
$colors = ["red", "green", "blue"];
$person = [
    "name" => "John",
    "age" => 25,
    "city" => "New York"
];

echo "Name: $name";
echo "Age: $age";
?>
```

### Operators

```php
<?php
// Arithmetic
$a = 10;
$b = 3;
echo $a + $b;  // 13
echo $a - $b;  // 7
echo $a * $b;  // 30
echo $a / $b;  // 3.33...
echo $a % $b;  // 1
echo $a ** $b; // 1000

// Comparison
echo $a == $b;   // false
echo $a === $b;  // false
echo $a != $b;   // true
echo $a > $b;    // true
?>
```

### Control Structures

```php
<?php
// If-Else
$hour = date("H");

if ($hour < 12) {
    echo "Good morning!";
} elseif ($hour < 18) {
    echo "Good afternoon!";
} else {
    echo "Good evening!";
}

// Switch
$day = date("N");
switch ($day) {
    case 1: echo "Monday"; break;
    case 2: echo "Tuesday"; break;
    case 3: echo "Wednesday"; break;
    case 4: echo "Thursday"; break;
    case 5: echo "Friday"; break;
    case 6: echo "Saturday"; break;
    case 7: echo "Sunday"; break;
}

// Match (PHP 8+)
$result = match($day) {
    1, 2, 3, 4, 5 => "Weekday",
    6, 7 => "Weekend",
};
echo $result;
?>
```

### Loops

```php
<?php
// For Loop
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}

// While Loop
$i = 1;
while ($i <= 5) {
    echo "Number: $i<br>";
    $i++;
}

// Foreach Loop
$colors = ["red", "green", "blue"];
foreach ($colors as $color) {
    echo "$color<br>";
}

// Foreach with key-value
$person = ["name" => "John", "age" => 25];
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
?>
```

### Functions

```php
<?php
// Simple function
function greet($name) {
    return "Hello, $name!";
}

echo greet("John");

// Function with default parameter
function greetWithDefault($name = "Guest") {
    return "Hello, $name!";
}

echo greetWithDefault(); // Hello, Guest!
echo greetWithDefault("John"); // Hello, John!

// Function with type hints
function sum(int $a, int $b): int {
    return $a + $b;
}

echo sum(5, 3); // 8

// Variable function
function add($a, $b) {
    return $a + $b;
}

$func = "add";
echo $func(5, 3); // 8

// Anonymous function
$multiply = function($a, $b) {
    return $a * $b;
};

echo $multiply(5, 3); // 15
?>
```

### Arrays

```php
<?php
// Indexed array
$colors = ["red", "green", "blue"];
echo $colors[0]; // red

// Associative array
$person = [
    "name" => "John",
    "age" => 25,
    "city" => "New York"
];
echo $person["name"]; // John

// Multidimensional array
$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2]
];
echo $cars[0][0]; // Volvo

// Array functions
$array = [3, 1, 2];
sort($array);           // Sort ascending
rsort($array);          // Sort descending
$length = count($array); // Count elements
array_push($array, 4);  // Add element
$last = array_pop($array); // Remove last element

// Check if value exists
if (in_array("red", $colors)) {
    echo "Found!";
}
?>
```

### Classes and Objects

```php
<?php
class Car {
    // Properties
    public $brand;
    public $color;
    private $price;
    
    // Constructor
    public function __construct($brand, $color, $price) {
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
    }
    
    // Method
    public function getInfo() {
        return "Brand: $this->brand, Color: $this->color";
    }
    
    // Getter
    public function getPrice() {
        return $this->price;
    }
}

// Create object
$car = new Car("BMW", "Red", 50000);
echo $car->getInfo();
echo $car->brand;
?>
```

---

## PHP Function Reference

### String Functions

| Function | Description | Example |
|----------|-------------|---------|
| `strlen()` | Get string length | `strlen("Hello")` → 5 |
| `strtoupper()` | Convert to uppercase | `strtoupper("hello")` → "HELLO" |
| `strtolower()` | Convert to lowercase | `strtolower("HELLO")` → "hello" |
| `str_replace()` | Replace text | `str_replace("world", "PHP", "Hello world")` → "Hello PHP" |
| `trim()` | Remove whitespace | `trim("  hello  ")` → "hello" |
| `explode()` | Split string to array | `explode(",", "a,b,c")` → ["a","b","c"] |
| `implode()` | Join array to string | `implode(",", ["a","b","c"])` → "a,b,c" |
| `substr()` | Extract substring | `substr("Hello", 0, 2)` → "He" |
| `strpos()` | Find position | `strpos("Hello", "e")` → 1 |
| `htmlspecialchars()` | Escape HTML | Prevents XSS attacks |
| `str_repeat()` | Repeat string | `str_repeat("Hi", 3)` → "HiHiHi" |
| `strrev()` | Reverse string | `strrev("Hello")` → "olleH" |
| `ucwords()` | Capitalize words | `ucwords("hello world")` → "Hello World" |
| `lcfirst()` | Lowercase first | `lcfirst("Hello")` → "hello" |

### Array Functions

| Function | Description |
|----------|-------------|
| `count()` | Count array elements |
| `sort()` | Sort array ascending |
| `rsort()` | Sort array descending |
| `asort()` | Sort associative array by values |
| `ksort()` | Sort associative array by keys |
| `arsort()` | Sort associative array by values (reverse) |
| `krsort()` | Sort associative array by keys (reverse) |
| `array_push()` | Add elements to end |
| `array_pop()` | Remove last element |
| `array_shift()` | Remove first element |
| `array_unshift()` | Add elements to beginning |
| `array_merge()` | Merge arrays |
| `array_slice()` | Extract portion of array |
| `array_splice()` | Remove and replace elements |
| `in_array()` | Check if value exists |
| `array_key_exists()` | Check if key exists |
| `array_keys()` | Get all keys |
| `array_values()` | Get all values |
| `array_flip()` | Flip keys and values |
| `array_reverse()` | Reverse array |
| `array_unique()` | Remove duplicate values |
| `array_sum()` | Calculate sum |
| `array_product()` | Calculate product |

### Math Functions

| Function | Description |
|----------|-------------|
| `abs()` | Absolute value |
| `ceil()` | Round up |
| `floor()` | Round down |
| `round()` | Round number |
| `sqrt()` | Square root |
| `pow()` | Power calculation |
| `max()` | Maximum value |
| `min()` | Minimum value |
| `rand()` | Random number |
| `pi()` | Value of PI |
| `mt_rand()` | Better random number |
| `decbin()` | Decimal to binary |
| `bindec()` | Binary to decimal |
| `dechex()` | Decimal to hexadecimal |
| `hexdec()` | Hexadecimal to decimal |
| `octdec()` | Octal to decimal |
| `deg2rad()` | Degrees to radians |
| `rad2deg()` | Radians to degrees |

### Date/Time Functions

| Function | Description |
|----------|-------------|
| `date()` | Format date/time |
| `time()` | Current timestamp |
| `mktime()` | Create timestamp |
| `strtotime()` | Parse date string |
| `checkdate()` | Validate date |
| `date_default_timezone_set()` | Set timezone |
| `date_format()` | Format date |

### File Handling Functions

| Function | Description |
|----------|-------------|
| `fopen()` | Open file |
| `fclose()` | Close file |
| `fread()` | Read file |
| `fwrite()` | Write to file |
| `file_exists()` | Check if file exists |
| `filesize()` | Get file size |
| `file_get_contents()` | Read entire file |
| `file_put_contents()` | Write to file |
| `copy()` | Copy file |
| `rename()` | Rename file |
| `unlink()` | Delete file |
| `mkdir()` | Create directory |
| `rmdir()` | Remove directory |

### Variable Functions

| Function | Description |
|----------|-------------|
| `isset()` | Check if variable is set |
| `empty()` | Check if variable is empty |
| `unset()` | Unset variable |
| `is_null()` | Check if null |
| `is_numeric()` | Check if numeric |
| `is_string()` | Check if string |
| `is_array()` | Check if array |
| `is_bool()` | Check if boolean |
| `is_int()` | Check if integer |
| `is_float()` | Check if float |
| `gettype()` | Get variable type |
| `settype()` | Set variable type |
| `var_dump()` | Dump variable info |
| `print_r()` | Print variable in readable format |

---

## Requirements

- **PHP Version**: 7.4 or higher (PHP 8.0+ recommended)
- **Web Server**: Apache, Nginx, or built-in PHP server
- **Operating System**: Windows, Linux, or macOS
- **Memory**: Minimum 512MB RAM
- **Disk Space**: Approximately 1MB

---

## Contributing

Contributions are welcome! If you'd like to improve this project:

1. Fork the repository
2. Create a new branch (`git checkout -b feature-branch`)
3. Make your changes
4. Commit your changes (`git commit -am 'Add new feature'`)
5. Push to the branch (`git push origin feature-branch`)
6. Create a Pull Request

---

## Resources

- [PHP Official Documentation](https://www.php.net/docs.php)
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/)
- [PHP: The Right Way](https://phptherightway.com/)
- [PHP Manual](https://www.php.net/manual/en/)
- [Composer (PHP Package Manager)](https://getcomposer.org/)

---

## License

This is an educational project for learning PHP programming. Feel free to use it for learning purposes.

---

## Acknowledgments

- Inspired by W3Schools PHP Tutorial
- Community contributions and feedback

---

**Author**: PHP Learning Project  
**Version**: 8.5.0  
**Last Updated**: February 2026  
**Website**: https://www.php.net/

---

Happy Learning! 🚀
