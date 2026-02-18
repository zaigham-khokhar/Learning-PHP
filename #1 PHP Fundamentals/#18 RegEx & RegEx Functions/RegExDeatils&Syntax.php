<?php
    // PHP Regular Expressions (RegEx)
    // ================================
    
    // Regular Expressions are patterns used to match character combinations in strings.
    // PHP provides several functions to work with regular expressions, primarily using the PCRE (Perl Compatible Regular Expressions) library.
    
    // ========================================
    // PHP RegEx Functions
    // ========================================
    
    // 1. preg_match() - Searches for a pattern in a string and returns true/false
    // Syntax: preg_match(pattern, subject, matches, flags, offset)
    // Returns: 1 if pattern matches, 0 if not, false on error
    
    $pattern = "/hello/i";  // Pattern to search (case-insensitive)
    $subject = "Hello World";
    $result = preg_match($pattern, $subject, $matches);
    // $result = 1, $matches[0] = "Hello"
    
    
    // 2. preg_match_all() - Searches for all matches of a pattern
    // Syntax: preg_match_all(pattern, subject, matches, flags, offset)
    // Returns: number of matches found or false on error
    
    $pattern = "/\d+/";  // Match all numbers
    $subject = "There are 5 apples and 10 oranges";
    preg_match_all($pattern, $subject, $matches);
    // $matches[0] = ["5", "10"]
    
    
    // 3. preg_replace() - Searches and replaces a pattern
    // Syntax: preg_replace(pattern, replacement, subject, limit, count)
    // Returns: modified string or array
    
    $pattern = "/\s+/";  // Match one or more whitespace
    $replacement = "-";
    $subject = "Hello   World    PHP";
    $result = preg_replace($pattern, $replacement, $subject);
    // $result = "Hello-World-PHP"
    
    
    // 4. preg_split() - Splits string by a pattern
    // Syntax: preg_split(pattern, subject, limit, flags)
    // Returns: array of strings
    
    $pattern = "/\s+/";  // Split by whitespace
    $subject = "Hello World PHP";
    $result = preg_split($pattern, $subject);
    // $result = ["Hello", "World", "PHP"]
    
    
    // 5. preg_grep() - Returns array elements matching a pattern
    // Syntax: preg_grep(pattern, input, flags)
    // Returns: array
    
    $pattern = "/^test/";  // Start with "test"
    $input = ["test1", "test2", "other", "test3"];
    $result = preg_grep($pattern, $input);
    // $result = ["test1", "test2", "test3"]
    
    
    // 6. preg_quote() - Escapes special regex characters
    // Syntax: preg_quote(str, delimiter)
    // Returns: escaped string
    
    $str = "Price: $100 (USD)";
    $result = preg_quote($str, "/");
    // Escapes: $ ( ) . + * ? [ ^ ] { } | \
    
    
    // ========================================
    // RegEx Syntax - Metacharacters
    // ========================================
    
    // . (dot)      - Matches any single character except newline
    $pattern = "/c.t/";  // Matches "cat", "cut", "cot", etc.
    
    // ^ (caret)    - Matches start of string/line
    $pattern = "/^Hello/";  // Matches strings starting with "Hello"
    
    // $ (dollar)   - Matches end of string/line
    $pattern = "/World$/";  // Matches strings ending with "World"
    
    // \d           - Matches any digit (0-9)
    $pattern = "/\d{3}/";  // Matches exactly 3 digits
    
    // \D           - Matches any non-digit
    $pattern = "/\D+/";  // Matches non-digit characters
    
    // \w           - Matches word character (a-z, A-Z, 0-9, _)
    $pattern = "/\w+/";  // Matches word characters
    
    // \W           - Matches non-word character
    $pattern = "/\W/";  // Matches special characters
    
    // \s           - Matches whitespace (space, tab, newline)
    $pattern = "/\s+/";  // Matches one or more whitespace
    
    // \S           - Matches non-whitespace
    $pattern = "/\S+/";  // Matches non-whitespace characters
    
    // \b           - Word boundary
    $pattern = "/\bword\b/";  // Matches whole word "word" only
    
    // \B           - Non-word boundary
    $pattern = "/\Bword/";  // Matches "word" inside another word
    
    // ========================================
    // RegEx Syntax - Quantifiers
    // ========================================
    
    // *             - Zero or more times
    $pattern = "/go*/";  // Matches "g", "go", "goo", "gooo", etc.
    
    // +             - One or more times
    $pattern = "/go+/";  // Matches "go", "goo", "gooo", etc. (not "g")
    
    // ?             - Zero or one time (optional)
    $pattern = "/colou?r/";  // Matches "color" or "colour"
    
    // {n}           - Exactly n times
    $pattern = "/\d{4}/";  // Matches exactly 4 digits
    
    // {n,}          - n or more times
    $pattern = "/\d{2,}/";  // Matches 2 or more digits
    
    // {n,m}         - Between n and m times
    $pattern = "/\d{2,4}/";  // Matches 2 to 4 digits
    
    // *?, +?, ??    - Lazy/ungreedy versions
    $pattern = "/<.*?>/";  // Non-greedy match
    
    
    // ========================================
    // RegEx Syntax - Character Classes
    // ========================================
    
    // [abc]         - Matches any character in the set
    $pattern = "/[aeiou]/";  // Matches any vowel
    
    // [^abc]        - Matches any character NOT in the set
    $pattern = "/[^aeiou]/";  // Matches any consonant
    
    // [a-z]         - Matches any character in range
    $pattern = "/[a-z]/";  // Matches any lowercase letter
    
    // [A-Z]         - Matches any uppercase letter
    $pattern = "/[A-Z]/";  // Matches any uppercase letter
    
    // [0-9]         - Matches any digit
    $pattern = "/[0-9]/";  // Matches any digit
    
    // [a-zA-Z]      - Matches any letter
    $pattern = "/[a-zA-Z]/";  // Matches any letter
    
    // [a-zA-Z0-9]   - Matches any alphanumeric character
    
    
    // ========================================
    // RegEx Syntax - Groups and Alternation
    // ========================================
    
    // (abc)         - Capturing group
    $pattern = "/(foo)(bar)/";  // Captures "foo" and "bar"
    
    // (?:abc)       - Non-capturing group
    $pattern = "/(?:foo)(bar)/";  // Only captures "bar"
    
    // (?<name>abc)  - Named capturing group
    $pattern = "/(?<first>foo)(?<second>bar)/";
    
    // a|b           - Alternation (OR)
    $pattern = "/(cat|dog)/";  // Matches "cat" or "dog"
    
    // \1, \2        - Backreference
    $pattern = "/(\w+)\s+\1/";  // Matches repeated words
    
    
    // ========================================
    // Pattern Modifiers (Flags)
    // ========================================
    
    // i             - Case-insensitive matching
    $pattern = "/hello/i";  // Matches "hello", "Hello", "HELLO"
    
    // m             - Multiline mode (^ and $ match line starts/ends)
    $pattern = "/^line/m";  // Matches "^line" at start of each line
    
    // s             - Dotall mode (. matches newlines too)
    $pattern = "/hello.world/s";  // . matches newline
    
    // x             - Extended mode (ignores whitespace, allows comments)
    $pattern = "/hello 
                  world/x";  // Whitespace ignored in pattern
    
    // U             - Ungreedy/lazy mode
    $pattern = "/<.*>/U";  // Non-greedy matching
    
    // D             - Dollar matches only at end
    $pattern = "/world$/D";  // Doesn't match "world\n"
    
    
    // ========================================
    // Lookahead and Lookbehind
    // ========================================
    
    // (?=abc)       - Positive lookahead
    $pattern = "/foo(?=bar)/";  // Matches "foo" only if followed by "bar"
    
    // (?!abc)       - Negative lookahead
    $pattern = "/foo(?!bar)/";  // Matches "foo" only if NOT followed by "bar"
    
    // (?<=abc)      - Positive lookbehind
    $pattern = "/(?<=foo)bar/";  // Matches "bar" only if preceded by "foo"
    
    // (?<!abc)      - Negative lookbehind
    $pattern = "/(?<!foo)bar/";  // Matches "bar" only if NOT preceded by "foo"
    
    
    // ========================================
    // Common Examples
    // ========================================
    
    // Email validation
    $email = "example@test.com";
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    preg_match($pattern, $email);  // Valid email
    
    // Phone number validation (US format)
    $phone = "123-456-7890";
    $pattern = "/^\d{3}-\d{3}-\d{4}$/";
    preg_match($pattern, $phone);  // Valid US phone
    
    // URL validation
    $url = "https://www.example.com";
    $pattern = "/^https?:\/\/[\w\-]+(\.[\w\-]+)+[/#?]?.*$/";
    preg_match($pattern, $url);  // Valid URL
    
    // Date validation (YYYY-MM-DD)
    $date = "2024-01-15";
    $pattern = "/^\d{4}-\d{2}-\d{2}$/";
    preg_match($pattern, $date);  // Valid date
    
    // IP Address validation
    $ip = "192.168.1.1";
    $pattern = "/^(\d{1,3}\.){3}\d{1,3}$/";
    preg_match($pattern, $ip);  // Valid IP
    
    // Extract all links from HTML
    $html = '<a href="http://example.com">Link</a>';
    $pattern = '/<a href="([^"]+)">([^<]+)<\/a>/i';
    preg_match_all($pattern, $html, $matches);
    // $matches[1] = URLs, $matches[2] = Link texts
    
    // Replace multiple spaces with single space
    $text = "Hello    World   PHP";
    $pattern = "/\s+/";
    $result = preg_replace($pattern, " ", $text);
    // $result = "Hello World PHP"
    
    // Remove HTML tags
    $html = "<p>Hello <strong>World</strong></p>";
    $result = preg_replace("/<[^>]*>/", "", $html);
    // $result = "Hello World"
    
    // Extract numbers from string
    $str = "Price: $99.99 USD";
    preg_match_all("/\d+\.?\d*/", $str, $matches);
    // $matches[0] = ["99", "99"]
    
    // Validate username (alphanumeric, 3-15 chars)
    $username = "user123";
    $pattern = "/^[a-zA-Z0-9]{3,15}$/";
    preg_match($pattern, $username);
    
    // Strong password validation
    // At least 8 chars, 1 uppercase, 1 lowercase, 1 digit, 1 special char
    $password = "Pass@word1";
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    preg_match($pattern, $password);
    
    // ========================================
    // Performance Tips
    // ========================================
    
    // 1. Use anchors (^ and $) when possible to improve performance
    // 2. Use specific character classes instead of . when possible
    // 3. Avoid excessive backtracking (nested quantifiers)
    // 4. Use non-capturing groups (?:) when you don't need the capture
    // 5. Be careful with greedy quantifiers - use lazy versions when needed
    // 6. Escape special characters with preg_quote() when matching literally
    
    
    // ========================================
    // Important Notes
    // ========================================
    
    // - Always escape special regex characters when matching literally: preg_quote()
    // - Always validate user input with regex for security
    // - Use proper anchors to ensure complete string match
    // - Test your patterns thoroughly with various inputs
    // - Remember that preg functions return false on error, not just 0/1
    
?>
