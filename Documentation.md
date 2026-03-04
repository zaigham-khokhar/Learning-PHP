# PHP Learning Project Documentation

## Table of Contents

1. [Project Overview](#project-overview)
2. [Project Goals](#project-goals)
3. [Functionality](#functionality)
4. [Project Structure](#project-structure)
5. [Installation and Setup](#installation-and-setup)
6. [Features and Capabilities](#features-and-capabilities)
7. [Detailed Folder Documentation](#detailed-folder-documentation)
8. [PHP Function Reference](#php-function-reference)
9. [Troubleshooting](#troubleshooting)
10. [Contributing Guidelines](#contributing-guidelines)
11. [Summary](#summary)

---

## Project Overview

This is a comprehensive PHP learning project designed to help beginners master PHP fundamentals. The project is structured to mirror the W3Schools PHP tutorial curriculum, providing hands-on examples and exercises for each PHP concept. Each topic is covered in a dedicated folder with well-documented example files that demonstrate real-world usage.

**Project Name:** PHP Learning Project  
**Project Type:** Educational/Tutorial Code Repository  
**Primary Language:** PHP  
**Current Version:** 8.5.0  
**Last Updated:** March 2026

---

## Project Goals

The primary goals of this project are:

1. **Beginner-Friendly Learning Path**: Provide a structured way for new developers to learn PHP from scratch
2. **Hands-On Practice**: Offer practical code examples that users can run and experiment with
3. **Comprehensive Coverage**: Cover all fundamental PHP topics as found in professional PHP development
4. **Reference Material**: Serve as a quick reference for PHP functions and syntax
5. **W3Schools Alignment**: Follow the same topic organization as W3Schools PHP tutorials for easy correlation with online resources

---

## Functionality

This project provides:

- **Interactive Learning**: Each file contains executable PHP code that demonstrates specific concepts
- **Modular Structure**: Topics are separated into distinct folders for easy navigation
- **Code Examples**: Real-world examples showing proper PHP syntax and usage
- **Function References**: Built-in PHP functions documented with practical examples
- **Best Practices**: Demonstrates PHP coding standards and conventions

---

## Project Structure

```
Learning php/
├── Documentation.md              # Main documentation file (this file)
├── README.md                     # Project readme
│
├── #1 PHP Fundamentals/         # PHP basics and fundamentals
│   ├── #1 PHP Comments And Variables/
│   │   ├── Comments.php
│   │   └── Variables.php
│   ├── #2 PHP Echo And Print/
│   │   └── Echo & print.php
│   ├── #3 PHP Data Types/
│   │   ├── DataTypes.php
│   │   └── file.txt
│   ├── #4 PHP String/
│   │   ├── StringDetails.php
│   │   ├── ConcatenationString.php
│   │   ├── EscapeCharacters.php
│   │   ├── SlicingStrings.php
│   │   ├── ModifyStringBulit-in-Methods.php
│   │   └── StringFunctions.php
│   ├── #5 PHP Numbers/
│   │   ├── NumbersDetails.php
│   │   └── NumbersFunction.php
│   ├── #6 PHP Type Casting/
│   │   └── PHPCastingDetails.php
│   ├── #7 PHP Math/
│   │   └── MathFunctions&Details.php
│   ├── #8 PHP Constants/
│   │   └── ConstantsDetails&Functions.php
│   ├── #9 PHP Magic Constant/
│   │   └── MagicConstantDetails.php
│   ├── #10 PHP Operators/
│   │   ├── ArithmethicOperator.php
│   │   ├── ArrayOperator.php
│   │   ├── AssignmentOperator.php
│   │   ├── ComparisonOperator.php
│   │   ├── ConditionalOperator.php
│   │   ├── Increment&DecrementOperators.php
│   │   ├── LogicalOperator.php
│   │   └── StringOperator.php
│   ├── #11 PHP If...Else...Elseif/
│   │   ├── IfSyntax.php
│   │   ├── Examples.php
│   │   ├── Nestedif.php
│   │   └── ShortHandif.php
│   ├── #12 PHP Switch/
│   │   └── SwitchStatementDetails&Syntax.php
│   ├── #13 PHP Match/
│   │   └── MatchDetalis&Syntax.php
│   ├── #14 PHP Loop/
│   │   ├── ForLoop.php
│   │   ├── WhileLoop.php
│   │   ├── DoWhileLoop.php
│   │   ├── ForEachLoop.php
│   │   ├── BreakStatement.php
│   │   └── ContinueStatement.php
│   ├── #15 PHP Functions/
│   │   └── FunctionsDetails&Syntax.php
│   ├── #16 PHP Arrays/
│   │   ├── ArrayDetails.php
│   │   ├── IndexedArray.php
│   │   ├── AssociativeArrays.php
│   │   ├── MultidimensionalArray.php
│   │   ├── AccessArrayItems.php
│   │   ├── UpdateArrayItems.php
│   │   ├── AddArrayItems&ArrayMethods.php
│   │   ├── RemoveArrayItems&ArrayMethods.php
│   │   ├── SortingArray.php
│   │   └── ArrayFunctions.php
│   ├── #17 PHP Super Globals/
│   │   ├── SuperGlobalsDetails.php
│   │   ├── $GLOBALS.php
│   │   ├── $_SERVER.php
│   │   ├── $_GET.php
│   │   ├── $_POST.php
│   │   ├── $_REQUEST.php
│   │   ├── Get.php
│   │   ├── Post.php
│   │   └── Request.php
│   └── #18 RegEx & RegEx Functions/
│       └── RegExDeatils&Syntax.php
│
├── #2 PHP Form/                  # Form handling
│   ├── #1 PHP Form Handling/
│   │   ├── FormHandling.php
│   │   ├── welcome_get.php
│   │   └── welcome.php
│   ├── #2 PHP Form Validation/
│   │   └── FormValidation.php
│   ├── #3 PHP Form Required/
│   │   └── FormRequired.php
│   ├── #4 PHP Form URL & E-mail/
│   │   └── FormURL&E-mail.php
│   └── #5 PHP Form Complete/
│       └── FormComplete.php
│
├── #3 PHP OOP/                  # Object-oriented programming
│   ├── #1 PHP OOP What is OOP/
│   │   └── WhatisOOP.php
│   ├── #2 PHP OOP Classes & Objects/
│   │   ├── Classes.php
│   │   └── Objects.php
│   ├── #3 PHP OOP Constructor/
│   │   └── ConstructorMethod.php
│   ├── #4 PHP OOP Destructor/
│   │   └── DestructorMethod.php
│   ├── #5 PHP OOP Access Modifiers/
│   │   └── AccessModifiers.php
│   ├── #6 PHP OOP Inheritence/
│   │   └── InheritenceRules.php
│   ├── #7 PHP OOP Constants/
│   │   └── ClassConstants.php
│   ├── #8 PHP OOP Abstract Classes/
│   │   ├── AbstractClasses&Methods.php
│   │   └── AbstractMethodwithArgument.php
│   ├── #9 PHP OOP InterFaces/
│   │   ├── InterFaces.php
│   │   └── InterFacesVsAbstractClasse.php
│   ├── #10 PHP OOP Traits/
│   │   ├── OOPTraits.php
│   │   ├── TwoClassesInOneTrait.php
│   │   └── UsingMultipleTraits.php
│   ├── #11 PHP OOP Static Methods/
│   │   ├── StaticMethods.php
│   │   └── MoreOnStaticMethods.php
│   ├── #12 PHP OOP Static Properties/
│   │   ├── StaticProperties.php
│   │   └── MoreOnStaticProperties.php
│   ├── #13 PHP OOP NameSpaces/
│   │   └── NameSpaces.php
│   └── #14 PHP OOP Iterables/
│       ├── Iterables.php
│       └── CreatingIterables.php
│
├── #4 Mini Student Project/     # Mini project
│   ├── index.php
│   └── student.php
│
└── #5 PHP TODO-LIST Mini Project/  # TODO List Mini Project
    ├── index.php
    ├── Todo.php
    └── style.css
```

---

## Installation and Setup

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

## Features and Capabilities

### 1. Comments and Variables

| Feature | Description |
|---------|-------------|
| Single-line comments | Using `//` or `#` |
| Multi-line comments | Using `/* */` |
| Local variables | Variables within function scope |
| Global variables | Variables accessible throughout script |
| Static variables | Variables retaining value between calls |

### 2. Data Types

Covers all 8 PHP data types:
- **String**: Text data
- **Integer**: Whole numbers
- **Float**: Decimal numbers
- **Boolean**: True/False
- **Array**: Multiple values
- **Object**: Class instances
- **Resource**: External references
- **NULL**: Empty value

### 3. Operators

| Category | Operators |
|----------|-----------|
| Arithmetic | `+`, `-`, `*`, `/`, `%`, `**` |
| Assignment | `=`, `+=`, `-=`, `*=`, `/=`, `.=` |
| Comparison | `==`, `===`, `!=`, `<>`, `!==`, `>`, `<`, `>=`, `<=`, `<=>` |
| Increment/Decrement | `++`, `--` |
| Logical | `and`, `or`, `xor`, `!`, `&&`, `||` |
| String | `.`, `.=` |
| Array | `+`, `==`, `===`, `!=`, `<>`, `!==` |
| Conditional | `?:`, `??` |

### 4. Control Structures

- **Conditional**: If, Else, Elseif, Switch, Match
- **Loops**: While, Do-While, For, Foreach
- **Jump**: Break, Continue

### 5. Functions

- User-defined functions
- Function parameters and return values
- Default parameter values
- Variable scope in functions

### 6. Arrays

- Indexed arrays
- Associative arrays
- Multidimensional arrays
- Array functions (sorting, filtering, manipulation)

### 7. Super Globals

- `$GLOBALS`
- `$_SERVER`
- `$_GET`
- `$_POST`
- `$_REQUEST`
- `$_SESSION` (planned)
- `$_COOKIE` (planned)

### 8. Regular Expressions

- Pattern matching
- Search and replace
- Pattern validation
- Metacharacters and quantifiers

### 9. Form Handling

- GET and POST methods
- Form validation
- Required field validation
- URL and email validation
- Complete form examples

### 10. Object-Oriented Programming

- Classes and Objects
- Constructors
- Destructors
- Access Modifiers
- Inheritance
- Class Constants
- Abstract Classes
- Interfaces
- Traits
- Static Methods
- Static Properties
- Namespaces
- Iterables

---

## Detailed Folder Documentation

### #1 PHP Fundamentals

This is the main folder containing 18 subfolders covering PHP basics:

| Subfolder | Files | Description |
|-----------|-------|-------------|
| PHP Comments And Variables | 2 | Comments and variable scopes |
| PHP Echo And Print | 1 | Output statements |
| PHP Constants | 1 | Constant definition |
| PHP Data Types | 2 | PHP data types |
| PHP Magic Constant | 1 | Magic constants |
| PHP Math | 1 | Math functions |
| PHP Numbers | 2 | Number types and functions |
| PHP Operators | 8 | All PHP operators |
| PHP String | 6 | String manipulation |
| PHP Type Casting | 1 | Type conversion |
| PHP If...Else...Elseif | 4 | Conditional statements |
| PHP Switch | 1 | Switch statement |
| PHP Match | 1 | Match expression (PHP 8+) |
| PHP Loop | 6 | Loop constructs |
| PHP Functions | 1 | User-defined functions |
| PHP Arrays | 10 | Array handling |
| PHP Super Globals | 9 | Global variables |

#### Key Files:

- **Comments.php**: Demonstrates single-line (`//`, `#`) and multi-line (`/* */`) comments
- **Variables.php**: Covers local, global, and static variable scopes
- **DataTypes.php**: Shows all 8 PHP data types with examples
- **Echo & print.php**: Demonstrates output using echo and print statements
- **StringFunctions.php**: Comprehensive string manipulation functions
- **ArrayFunctions.php**: All array functions with practical examples

---

### #2 PHP Form

This folder contains 5 subfolders with 8 files total covering form handling:

| Subfolder | Files | Description |
|-----------|-------|-------------|
| PHP Form Handling | 3 | Basic form processing |
| PHP Form Validation | 1 | Server-side validation |
| PHP Form Required | 1 | Required field validation |
| PHP Form URL & E-mail | 1 | URL and email validation |
| PHP Form Complete | 1 | Complete form example |

#### Key Files:

- **FormHandling.php**: Basic GET and POST form handling
- **welcome.php**: Processes form submissions and displays welcome message
- **welcome_get.php**: Demonstrates GET method form handling
- **FormValidation.php**: Server-side form validation techniques
- **FormRequired.php**: Handling required form fields
- **FormURL&E-mail.php**: URL and email validation in forms
- **FormComplete.php**: Complete form example with validation

---

### #3 PHP OOP

This folder contains 14 subfolders covering object-oriented programming:

| Subfolder | Files | Description |
|-----------|-------|-------------|
| PHP OOP What is OOP | 1 | Introduction to OOP concepts |
| PHP OOP Classes & Objects | 2 | Classes and object creation |
| PHP OOP Constructor | 1 | Constructor methods |
| PHP OOP Destructor | 1 | Destructor methods |
| PHP OOP Access Modifiers | 1 | Public, private, protected |
| PHP OOP Inheritence | 1 | Inheritance |
| PHP OOP Constants | 1 | Class constants |
| PHP OOP Abstract Classes | 2 | Abstract classes and methods |
| PHP OOP InterFaces | 2 | Interfaces and vs abstract classes |
| PHP OOP Traits | 3 | Traits and multiple trait usage |
| PHP OOP Static Methods | 2 | Static methods |
| PHP OOP Static Properties | 2 | Static properties |
| PHP OOP NameSpaces | 1 | Namespaces |
| PHP OOP Iterables | 2 | Iterables and creating iterables |

#### Key Concepts Covered:

- **WhatisOOP.php**: Object-oriented programming introduction and benefits
- **Classes.php**: Class definition and structure
- **Objects.php**: Creating and using objects
- **ConstructorMethod.php**: Constructor definition and usage
- **DestructorMethod.php**: Destructor definition and usage
- **AccessModifiers.php**: Public, private, protected access levels
- **ClassConstants.php**: Class constants
- **AbstractClasses&Methods.php**: Abstract classes and methods
- **AbstractMethodwithArgument.php**: Abstract methods with arguments
- **InterFaces.php**: Interface definitions
- **InterFacesVsAbstractClasse.php**: Interfaces vs Abstract Classes
- **OOPTraits.php**: Using traits in PHP
- **TwoClassesInOneTrait.php**: Using two classes in one trait
- **UsingMultipleTraits.php**: Using multiple traits
- **StaticMethods.php**: Static method definitions
- **MoreOnStaticMethods.php**: More on static methods
- **StaticProperties.php**: Static property definitions
- **MoreOnStaticProperties.php**: More on static properties
- **NameSpaces.php**: Namespace usage in PHP
- **Iterables.php**: Iterable type
- **CreatingIterables.php**: Creating iterables

---

### #4 Mini Student Project

A practical mini project demonstrating CRUD operations with students:

| File | Description |
|------|-------------|
| index.php | Main project file - Student management interface |
| student.php | Student class/model - Student entity definition |

This mini project demonstrates:
- Object-oriented programming in practice
- Form handling for data entry
- Basic CRUD operations
- PHP class design

---

### #5 PHP TODO-LIST Mini Project

A practical mini project for managing TODO tasks:

| File | Description |
|------|-------------|
| index.php | Main TODO list interface |
| Todo.php | TODO class/model |
| style.css | Styling for the TODO list interface |

This mini project demonstrates:
- File handling for data persistence
- Basic CRUD operations on tasks
- Simple task management

---

### RegEx & RegEx Functions

| File | Description |
|------|-------------|
| RegExDeatils&Syntax.php | Regular expressions syntax and examples |

Covers:
- Pattern matching
- Search and replace
- Pattern validation
- Metacharacters and quantifiers
- preg_match(), preg_replace(), preg_split()

---

## PHP Function Reference

### String Functions

| Function | Description | Example |
|----------|-------------|---------|
| `strlen()` | Get string length | `strlen("Hello")` returns 5 |
| `strtoupper()` | Convert to uppercase | `strtoupper("hello")` returns "HELLO" |
| `strtolower()` | Convert to lowercase | `strtolower("HELLO")` returns "hello" |
| `str_replace()` | Replace text | `str_replace("world", "PHP", "Hello world")` |
| `trim()` | Remove whitespace | `trim("  hello  ")` returns "hello" |
| `explode()` | Split string to array | `explode(",", "a,b,c")` returns ["a","b","c"] |
| `implode()` | Join array to string | `implode(",", ["a","b","c"])` returns "a,b,c" |
| `substr()` | Extract substring | `substr("Hello", 0, 2)` returns "He" |
| `strpos()` | Find position | `strpos("Hello", "e")` returns 1 |
| `htmlspecialchars()` | Escape HTML | Prevents XSS attacks |

### Array Functions

| Function | Description |
|----------|-------------|
| `count()` | Count array elements |
| `sort()` | Sort array ascending |
| `rsort()` | Sort array descending |
| `asort()` | Sort associative array (values) |
| `ksort()` | Sort associative array (keys) |
| `array_push()` | Add elements to end |
| `array_pop()` | Remove last element |
| `array_merge()` | Merge arrays |
| `in_array()` | Check if value exists |
| `array_key_exists()` | Check if key exists |

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

### Date/Time Functions

| Function | Description |
|----------|-------------|
| `date()` | Format date/time |
| `time()` | Current timestamp |
| `mktime()` | Create timestamp |
| `strtotime()` | Parse date string |
| `checkdate()` | Validate date |

### Regular Expression Functions

| Function | Description |
|----------|-------------|
| `preg_match()` | Match pattern once |
| `preg_match_all()` | Match pattern all occurrences |
| `preg_replace()` | Search and replace |
| `preg_split()` | Split by pattern |
| `preg_quote()` | Escape regex characters |

---

## Troubleshooting

### Common Issues and Solutions

#### 1. "Parse error: syntax error"

**Cause**: PHP syntax error, often from mismatched brackets or semicolons

**Solution**:
- Check for missing semicolons `;` at line end
- Verify all curly braces `{ }` are matched
- Ensure strings are properly quoted

#### 2. "Fatal error: Call to undefined function"

**Cause**: Function doesn't exist or typo in function name

**Solution**:
- Verify PHP version supports the function
- Check for typos in function name
- Ensure extension containing function is loaded

#### 3. "Warning: undefined variable"

**Cause**: Variable used before being defined

**Solution**:
- Initialize variables before use
- Check for correct variable name spelling
- Use null coalescing operator `??` for optional variables

#### 4. "Headers already sent" error

**Cause**: Output sent before header() function

**Solution**:
- Ensure `header()` is called before any output
- Use output buffering `ob_start()` at script start
- Check for BOM characters in included files

#### 5. File not found errors

**Cause**: Incorrect file paths

**Solution**:
- Use absolute paths or correct relative paths
- Check case sensitivity (Linux servers)
- Verify file permissions

#### 6. MySQL connection failures

**Cause**: Wrong database credentials or MySQL not running

**Solution**:
- Verify MySQL service is running
- Check hostname, username, password
- Ensure database exists

#### 7. "Maximum execution time exceeded"

**Cause**: Script taking too long to execute

**Solution**:
- Increase `max_execution_time` in php.ini
- Optimize database queries
- Add caching for expensive operations

### Debugging Tips

1. **Enable Error Display**:
   ```php
   error_reporting(E_ALL);
   ini_set('display_errors', 1);
   ```

2. **Use var_dump()**:
   ```php
   var_dump($variable);  // Shows type and value
   ```

3. **Use print_r()**:
   ```php
   print_r($array);  // Readable array output
   ```

4. **Check PHP Version**:
   ```php
   echo phpversion();
   ```

---

## Contributing Guidelines

We welcome contributions to improve this learning project!

### How to Contribute

1. **Fork the Repository**: Create your own copy of the project
2. **Create a Branch**: Work on a specific feature or fix
   ```bash
   git checkout -b feature/new-topic
   ```
3. **Make Changes**: Add your improvements
4. **Test Your Code**: Ensure all examples work correctly
5. **Submit Pull Request**: Describe your changes

### Contribution Guidelines

- Follow existing code formatting and naming conventions
- Add comments explaining each code example
- Test all examples on multiple PHP versions
- Update documentation to reflect new additions
- Keep files organized in appropriate folders

### Adding New Topics

When adding a new topic:

1. Create a new folder if topic doesn't exist
2. Add `TopicName.php` with explanations and examples
3. Add `TopicName_Details.php` for detailed syntax
4. Update Documentation.md with new topic
5. Add examples that demonstrate real-world usage

### Code Style

- Use meaningful variable names
- Add comments for complex logic
- Keep lines under 80 characters when possible
- Use consistent indentation (4 spaces)
- Follow PSR coding standards where applicable

### Reporting Issues

If you find bugs or have suggestions:

1. Check if issue already exists
2. Create detailed issue with:
   - Problem description
   - Expected behavior
   - Actual behavior
   - Steps to reproduce
   - PHP version used

---

## Summary

This PHP Learning Project provides a comprehensive educational resource for mastering PHP fundamentals.

### Topics Covered

- **Basics**: Comments, Variables, Echo/Print
- **Data Types**: All 8 PHP data types
- **Constants**: Define and use constants
- **Operators**: All PHP operators with examples
- **Conditionals**: If-Else, Switch, Match
- **Loops**: While, Do-While, For, Foreach
- **Functions**: User-defined functions
- **Arrays**: Indexed, Associative, Multidimensional
- **Super Globals**: Form handling, server variables
- **Regular Expressions**: Pattern matching and validation
- **Forms**: Form handling (GET/POST)
- **OOP**: Object-oriented programming (Classes, Objects, Constructors, Destructors, Access Modifiers, Inheritance, Constants, Abstract Classes, Interfaces, Traits, Static Methods, Static Properties, Namespaces, Iterables)
- **Mini Projects**: Student management project, TODO-List project

### Key Features

✅ Comprehensive code examples  
✅ W3Schools-aligned organization  
✅ Hands-on learning approach  
✅ Regular expression coverage  
✅ Form handling basics  
✅ Object-oriented programming  
✅ Mini project for practical learning  
✅ Best practices demonstrations  
✅ Complete folder structure for all PHP topics  

### Current Status

- **Total Folders**: 5 main sections (PHP Fundamentals with 18 topics, PHP Form with 5 topics, PHP OOP with 14 topics, Mini Projects)
- **Completed Folders**: 5 (PHP Fundamentals, PHP Form, PHP OOP, Mini Student Project, TODO-List Mini Project)
- **Total Files**: 130+ files with comprehensive examples
- **PHP Fundamentals**: 18 topics covering all basic PHP concepts
- **PHP Form**: 5 topics covering form handling
- **PHP OOP**: 14 topics covering object-oriented programming

### Getting Started

1. Install XAMPP or configure local PHP environment
2. Copy project to web server root
3. Navigate through folders sequentially
4. Run each PHP file in browser
5. Modify examples to practice
6. Complete the Mini Student Project for hands-on experience

---

**Happy Learning PHP!** 🚀

For questions or support, please refer to the troubleshooting section or create an issue in the project repository.
