# PHP Learning Project Documentation

## Table of Contents

1. [Project Overview](#project-overview)
2. [Project Goals](#project-goals)
3. [Functionality](#functionality)
4. [Project Structure](#project-structure)
5. [Installation and Setup](#installation-and-setup)
6. [Features and Capabilities](#features-and-capabilities)
7. [Usage Examples](#usage-examples)
8. [Configuration](#configuration)
9. [PHP Function Reference](#php-function-reference)
10. [Troubleshooting](#troubleshooting)
11. [Contributing Guidelines](#contributing-guidelines)
12. [Summary](#summary)

---

## Project Overview

This is a comprehensive PHP learning project designed to help beginners master PHP fundamentals. The project is structured to mirror the W3Schools PHP tutorial curriculum, providing hands-on examples and exercises for each PHP concept. Each topic is covered in a dedicated folder with well-documented example files that demonstrate real-world usage.

**Project Name:** PHP Learning Project  
**Project Type:** Educational/ Tutorial Code Repository  
**Primary Language:** PHP  
**Current Version:** 1.0.0  
**Last Updated:** February 2026

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

The project follows a hierarchical folder structure that mirrors the W3Schools PHP tutorial organization. Below is the complete project structure with all folders and their contents documented.

### Current Folder Contents

| Folder | Description | Files Count |
|--------|-------------|-------------|
| [PHP Comments And Variables/](PHP%20Comments%20And%20Variables/) | Comments and variable scopes | 2 files |
| [PHP Echo And Print/](PHP%20Echo%20And%20Print/) | Output statements | 1 file |
| [PHP Constants/](PHP%20Constants/) | Constant definition | 1 file |
| [PHP Data Types/](PHP%20Data%20Types/) | PHP data types | 2 files |
| [PHP Magic Constant/](PHP%20Magic%20Constant/) | Magic constants | 1 file |
| [PHP Math/](PHP%20Math/) | Math functions | 1 file |
| [PHP Numbers/](PHP%20Numbers/) | Number types and functions | 2 files |
| [PHP Operators/](PHP%20Operators/) | All PHP operators | 8 files |
| [PHP String/](PHP%20String/) | String manipulation | 6 files |
| [PHP Type Casting/](PHP%20Type%20Casting/) | Type conversion | 1 file |
| [PHP If...Else...Elseif/](PHP%20If...Else...Elseif/) | Conditional statements | 4 files |
| [PHP Switch/](PHP%20Switch/) | Switch statement | 1 file |
| [PHP Match/](PHP%20Match/) | Match expression (PHP 8+) | 1 file |
| [PHP Loop/](PHP%20Loop/) | Loop constructs | 6 files |
| [PHP Functions/](PHP%20Functions/) | User-defined functions | 1 file |
| [PHP Arrays/](PHP%20Arrays/) | Array handling | 10 files |
| [PHP Super Globals/](PHP%20Super%20Globals/) | Global variables | 9 files |
| [PHP Forms/](PHP%20Forms/) | Form handling | ⏳ Planned |
| [PHP Date and Time/](PHP%20Date%20and%20Time/) | Date/time functions | ⏳ Planned |
| [PHP Include/](PHP%20Include/) | File inclusion | ⏳ Planned |
| [PHP File Handling/](PHP%20File%20Handling/) | File operations | ⏳ Planned |
| [PHP Cookies/](PHP%20Cookies/) | Cookie handling | ⏳ Planned |
| [PHP Sessions/](PHP%20Sessions/) | Session management | ⏳ Planned |
| [PHP Filters/](PHP%20Filters/) | Input filtering | ⏳ Planned |
| [PHP Callback Functions/](PHP%20Callback%20Functions/) | Callback functions | ⏳ Planned |
| [PHP JSON/](PHP%20JSON/) | JSON handling | ⏳ Planned |
| [RegEx & RegEx Functions/](RegEx%20&%20RegEx%20Functions/) | Regular expressions | 1 file |
| [PHP MySQL Database/](PHP%20MySQL%20Database/) | Database connectivity | ⏳ Planned |
| [PHP XML/](PHP%20XML/) | XML parsing | ⏳ Planned |
| [PHP OOP/](PHP%20OOP/) | Object-oriented programming | ⏳ Planned |
| [PHP AJAX/](PHP%20AJAX/) | Asynchronous JavaScript | ⏳ Planned |

---

### Detailed Folder Structure

```
Learning php/
├── Documentation.md              # Main documentation file (this file)
├── README.md                     # Project readme
│
├── PHP Comments And Variables/   # Comments and variable scopes
│   ├── Comments.php              # Single-line, multi-line comments
│   └── Variables.php             # Local, global, static scopes
│
├── PHP Echo And Print/           # Output statements
│   └── Echo & print.php          # echo and print statements
│
├── PHP Constants/                # Constant definition
│   └── ConstantsDetails&Functions.php
│
├── PHP Data Types/               # PHP data types
│   ├── DataTypes.php             # All 8 PHP data types
│   └── file.txt
│
├── PHP Magic Constant/           # Magic constants
│   └── MagicConstantDetails.php
│
├── PHP Math/                     # Math functions
│   └── MathFunctions&Details.php
│
├── PHP Numbers/                  # Number types and functions
│   ├── NumbersDetails.php        # Number types
│   └── NumbersFunction.php       # Number checking functions
│
├── PHP Operators/                # All PHP operators
│   ├── ArithmethicOperator.php
│   ├── ArrayOperator.php
│   ├── AssignmentOperator.php
│   ├── ComparisonOperator.php
│   ├── ConditionalOperator.php
│   ├── Increment&DecrementOperators.php
│   ├── LogicalOperator.php
│   └── StringOperator.php
│
├── PHP String/                   # String manipulation
│   ├── StringDetails.php         # String basics
│   ├── ConcatenationString.php
│   ├── EscapeCharacters.php
│   ├── SlicingStrings.php
│   ├── ModifyStringBulit-in-Methods.php
│   └── StringFunctions.php
│
├── PHP Type Casting/              # Type conversion
│   └── PHPCastingDetails.php
│
├── PHP If...Else...Elseif/       # Conditional statements
│   ├── IfSyntax.php
│   ├── Examples.php
│   ├── Nestedif.php
│   └── ShortHandif.php
│
├── PHP Switch/                   # Switch statement
│   └── SwitchStatementDetails&Syntax.php
│
├── PHP Match/                    # Match expression (PHP 8+)
│   └── MatchDetalis&Syntax.php
│
├── PHP Loop/                     # Loop constructs
│   ├── ForLoop.php
│   ├── WhileLoop.php
│   ├── DoWhileLoop.php
│   ├── ForEachLoop.php
│   ├── BreakStatement.php
│   └── ContinueStatement.php
│
├── PHP Functions/                # Functions
│   └── FunctionsDetails&Syntax.php
│
├── PHP Arrays/                   # Array handling
│   ├── ArrayDetails.php
│   ├── IndexedArray.php
│   ├── AssociativeArrays.php
│   ├── MultidimensionalArray.php
│   ├── AccessArrayItems.php
│   ├── UpdateArrayItems.php
│   ├── AddArrayItems&ArrayMethods.php
│   ├── RemoveArrayItems&ArrayMethods.php
│   ├── SortingArray.php
│   └── ArrayFunctions.php
│
├── PHP Super Globals/            # Global variables
│   ├── SuperGlobalsDetails.php
│   ├── $GLOBALS.php
│   ├── $_SERVER.php
│   ├── $_GET.php
│   ├── $_POST.php
│   ├── $_REQUEST.php
│   ├── Get.php
│   ├── Post.php
│   └── Request.php
│
├── PHP Forms/                    # Form handling (GET/POST)
│   ├── FormBasics.php            # HTML forms in PHP
│   ├── FormValidation.php        # Server-side validation
│   ├── FormRequired.php          # Required fields
│   ├── FormComplete.php          # Complete form example
│   └── FormSanitization.php      # Input sanitization
│
├── PHP Date and Time/            # Date/time functions
│   ├── DateTimeDetails.php       # Date/Time basics
│   ├── DateTimeFormat.php        # Formatting dates
│   ├── DateTimeCreate.php        # Creating dates
│   ├── DateTimeModify.php        # Modifying dates
│   ├── DateTimeCompare.php       # Comparing dates
│   └── DateTimeFunctions.php     # Date/Time functions reference
│
├── PHP Include/                  # File inclusion
│   ├── IncludeDetails.php        # Include basics
│   ├── IncludeVsRequire.php      # include vs require
│   ├── IncludeOnce.php           # include_once
│   └── RequireOnce.php           # require_once
│
├── PHP File Handling/            # File operations
│   ├── FileHandlingDetails.php   # File handling basics
│   ├── ReadFile.php              # Reading files
│   ├── CreateWriteFile.php      # Creating/writing files
│   ├── FileOpenReadClose.php    # Open, read, close files
│   ├── FileDelete.php           # Deleting files
│   └── FileUpload.php           # File upload handling
│
├── PHP Cookies/                  # Cookie handling
│   ├── CookieDetails.php        # Cookie basics
│   ├── CreateCookie.php         # Creating cookies
│   ├── ReadCookie.php           # Reading cookies
│   └── DeleteCookie.php         # Deleting cookies
│
├── PHP Sessions/                 # Session management
│   ├── SessionDetails.php       # Session basics
│   ├── StartSession.php         # Starting sessions
│   ├── SessionVariables.php     # Session variables
│   └── DestroySession.php       # Destroying sessions
│
├── PHP Filters/                  # Input filtering
│   ├── FilterDetails.php        # Filter basics
│   ├── FilterValidate.php       # Validating filters
│   ├── FilterSanitize.php       # Sanitizing filters
│   └── FilterFunctions.php      # Filter functions
│
├── PHP Callback Functions/       # Callback functions
│   ├── CallbackDetails.php      # Callback basics
│   └── CallbackExamples.php     # Callback examples
│
├── PHP JSON/                     # JSON handling
│   ├── JSONDetails.php          # JSON basics
│   ├── JSONEncode.php           # json_encode
│   ├── JSONDecode.php           # json_decode
│   └── JSONFunctions.php        # JSON functions
│
├── RegEx & RegEx Functions/     # Regular expressions
│   └── RegExDeatils&Syntax.php  # RegEx syntax and examples
│
├── PHP MySQL Database/           # Database connectivity
│   ├── DatabaseDetails.php      # Database basics
│   ├── ConnectMySQL.php          # MySQL connection
│   ├── CreateDB.php              # Creating database
│   ├── CreateTable.php           # Creating tables
│   ├── InsertData.php            # Inserting data
│   ├── SelectData.php            # Selecting data
│   ├── WhereClause.php           # WHERE clause
│   ├── OrderBy.php               # ORDER BY
│   ├── UpdateData.php            # Updating data
│   └── DeleteData.php            # Deleting data
│
├── PHP XML/                      # XML parsing
│   ├── XMLDetails.php            # XML basics
│   ├── XMLParser.php             # XML Parser
│   ├── SimpleXML.php            # SimpleXML
│   └── XMLDisplay.php            # Displaying XML
│
├── PHP OOP/                      # Object-oriented programming
│   ├── OOPDetails.php            # OOP basics
│   ├── ClassesObjects.php       # Classes and objects
│   ├── Constructor.php          # Constructors
│   ├── Destructor.php            # Destructors
│   ├── AccessModifiers.php       # Access modifiers
│   ├── Inheritance.php          # Inheritance
│   ├── Constants.php             # Class constants
│   ├── AbstractClasses.php       # Abstract classes
│   ├── Interfaces.php            # Interfaces
│   ├── Traits.php                # Traits
│   ├── StaticMethods.php         # Static methods
│   └── Namespaces.php            # Namespaces
│
└── PHP AJAX/                     # Asynchronous JavaScript
    ├── AJAXDetails.php           # AJAX basics
    ├── AJAXPHP.php               # AJAX with PHP
    ├── AJAXDatabase.php          # AJAX database example
    └── AJAXXML.php               # AJAX XML example
```

---

### Folder Descriptions (Complete List)

| Folder | Description | Status |
|--------|-------------|--------|
| [PHP Comments And Variables/](PHP%20Comments%20And%20Variables/) | Covers PHP comments (single-line, multi-line) and variable scopes (local, global, static) | ✅ Complete |
| [PHP Echo And Print/](PHP%20Echo%20And%20Print/) | Output statements for displaying content to the browser | ✅ Complete |
| [PHP Constants/](PHP%20Constants/) | Defining and using constants with define() and const | ✅ Complete |
| [PHP Data Types/](PHP%20Data%20Types/) | All 8 PHP data types with practical examples | ✅ Complete |
| [PHP Magic Constant/](PHP%20Magic%20Constant/) | Predefined magic constants like __LINE__, __FILE__, __DIR__ | ✅ Complete |
| [PHP Math/](PHP%20Math/) | Mathematical functions (abs, round, rand, sqrt, etc.) | ✅ Complete |
| [PHP Numbers/](PHP%20Numbers/) | Number types and number-checking functions | ✅ Complete |
| [PHP Operators/](PHP%20Operators/) | All PHP operators (arithmetic, assignment, comparison, logical, etc.) | ✅ Complete |
| [PHP String/](PHP%20String/) | String manipulation functions and operations | ✅ Complete |
| [PHP Type Casting/](PHP%20Type%20Casting/) | Type conversion between different data types | ✅ Complete |
| [PHP If...Else...Elseif/](PHP%20If...Else...Elseif/) | Conditional statements and branching logic | ✅ Complete |
| [PHP Switch/](PHP%20Switch/) | Switch statement for multiple conditions | ✅ Complete |
| [PHP Match/](PHP%20Match/) | Match expression introduced in PHP 8.0 | ✅ Complete |
| [PHP Loop/](PHP%20Loop/) | Loop constructs (for, while, do-while, foreach) | ✅ Complete |
| [PHP Functions/](PHP%20Functions/) | User-defined functions with parameters and return values | ✅ Complete |
| [PHP Arrays/](PHP%20Arrays/) | Array types (indexed, associative, multidimensional) and functions | ✅ Complete |
| [PHP Super Globals/](PHP%20Super%20Globals/) | Superglobal variables ($_GET, $_POST, $_SERVER, $GLOBALS, etc.) | ✅ Complete |
| [PHP Forms/](PHP%20Forms/) | Form handling with GET and POST methods | ⏳ Planned |
| [PHP Date and Time/](PHP%20Date%20and%20Time/) | Date and time functions (date, time, mktime) | ⏳ Planned |
| [PHP Include/](PHP%20Include/) | File inclusion (include, require, include_once, require_once) | ⏳ Planned |
| [PHP File Handling/](PHP%20File%20Handling/) | Reading, writing, and manipulating files | ⏳ Planned |
| [PHP Cookies/](PHP%20Cookies/) | Cookie creation and management | ⏳ Planned |
| [PHP Sessions/](PHP%20Sessions/) | Session management in PHP | ⏳ Planned |
| [PHP Filters/](PHP%20Filters/) | Input filtering and validation | ⏳ Planned |
| [PHP Callback Functions/](PHP%20Callback%20Functions/) | Callback functions and anonymous functions | ⏳ Planned |
| [PHP JSON/](PHP%20JSON/) | JSON encoding and decoding | ⏳ Planned |
| [RegEx & RegEx Functions/](RegEx%20&%20RegEx%20Functions/) | Regular expressions and pattern matching | ✅ Complete |
| [PHP MySQL Database/](PHP%20MySQL%20Database/) | MySQL database connectivity and CRUD operations | ⏳ Planned |
| [PHP XML/](PHP%20XML/) | XML parsing and handling | ⏳ Planned |
| [PHP OOP/](PHP%20OOP/) | Object-oriented programming concepts (classes, inheritance, traits) | ⏳ Planned |
| [PHP AJAX/](PHP%20AJAX/) | Asynchronous JavaScript and XML (AJAX) with PHP | ⏳ Planned |

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

### Configuration

#### PHP Configuration (php.ini)

Key settings to verify:

```ini
; Display errors for debugging
display_errors = On
error_reporting = E_ALL

; File upload settings
file_uploads = On
upload_max_filesize = 2M
post_max_size = 8M

; Memory limit
memory_limit = 128M
```

#### Web Server Configuration

Ensure your web server:
- Has PHP module enabled
- Has proper MIME types configured
- Has URL rewriting enabled (for advanced routing)

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

---

## Usage Examples

### Example 1: Basic Output

```php
<?php
    echo "Hello, World!<br>";
    print "Welcome to PHP!";
?>
```

### Example 2: Variable Scope

```php
<?php
    $globalVar = "I'm global";

    function testScope() {
        $localVar = "I'm local";
        global $globalVar;
        echo $globalVar;  // Access global variable
        echo $localVar;   // Access local variable
    }

    testScope();
?>
```

### Example 3: Array Manipulation

```php
<?php
    $fruits = ["apple", "banana", "orange"];
    
    // Add item
    $fruits[] = "mango";
    
    // Sort array
    sort($fruits);
    
    // Loop through array
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
?>
```

### Example 4: Form Handling with GET

```php
<?php
    // Process GET request
    if (isset($_GET['name'])) {
        $name = htmlspecialchars($_GET['name']);
        echo "Hello, " . $name;
    }
?>
```

```html
<!-- HTML Form -->
<form method="GET" action="">
    <input type="text" name="name" placeholder="Enter your name">
    <button type="submit">Submit</button>
</form>
```

### Example 5: Regular Expression Validation

```php
<?php
    $email = "user@example.com";
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    
    if (preg_match($pattern, $email)) {
        echo "Valid email address";
    } else {
        echo "Invalid email address";
    }
?>
```

---

## Configuration

### Environment Variables

| Variable | Description | Default |
|----------|-------------|---------|
| `PHP_VERSION` | PHP version being used | System default |
| `DISPLAY_ERRORS` | Show PHP errors | On (development) |
| `LOG_ERRORS` | Log errors to file | On |

### PHP Settings for Learning

For development purposes, configure `php.ini`:

```ini
; Error Reporting
error_reporting = E_ALL
display_errors = On
display_startup_errors = On

; File Handling
file_uploads = On
upload_max_filesize = 2M

; Performance
max_execution_time = 60
memory_limit = 128M
```

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

This PHP Learning Project provides a comprehensive educational resource for mastering PHP fundamentals. The project covers:

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
- **Forms**: Form handling (planned)
- **Date and Time**: Date functions (planned)
- **File Handling**: File operations (planned)
- **Database**: MySQL connectivity (planned)
- **OOP**: Object-oriented programming (planned)
- **AJAX**: Asynchronous operations (planned)

### Key Features

✅ Comprehensive code examples  
✅ W3Schools-aligned organization  
✅ Hands-on learning approach  
✅ Regular expression coverage  
✅ Form handling basics  
✅ Best practices demonstrations  
✅ Complete folder structure for all PHP topics  

### Current Status

- **Total Folders**: 32
- **Completed Folders**: 16
- **Planned Folders**: 16
- **Total Files**: 50+ files with comprehensive examples

### Getting Started

1. Install XAMPP or configure local PHP environment
2. Copy project to web server root
3. Navigate through folders sequentially
4. Run each PHP file in browser
5. Modify examples to practice

---

**Happy Learning PHP!** 🚀

For questions or support, please refer to the troubleshooting section or create an issue in the project repository.
