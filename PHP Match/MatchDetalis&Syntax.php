<?php
    // PHP Match Details & Syntax
    // Tip: The match expression is new in PHP 8.0.
    // Match is new in PHP 8.0 and is similar to switch statement

    // Code Example:
    $status = "pending";
    $result = match ($status) {
    "pending" => "Your order is pending. <br>",
    "shipped" => "Your order has been shipped. <br>",
    "delivered" => "Your order has been delivered. <br>",
    default => "Unknown order status. <br>",
};
    echo $result;

    // Match Multiple Values
    // You can also match multiple values to the same result using an array:
    // Code Example:
    $statuss = "pending";
    $results = match ($statuss) {
        "pending", "processing" => "Your order is pending or processing. <br>",
        "shipped", "in transit" => "Your order is on its way. <br>",
        "delivered", "completed" => "Your order has been delivered. <br>",
        default => "Unknown order status. <br>",
    };
    echo $results;

    // This will throw an UnhandledMatchError exception.
    $favColor = "yellow";
    try {
        $colorMessage = match ($favColor) {
            "red" => "Your Favorite color is red. <br>",
            "blue" => "Your Favorite color is blue. <br>",
            "yellow" => "Your Favorite color is yellow. <br>",
        }; echo $colorMessage;
    } catch (UnhandledMatchError ) {
        echo "Error: " . e-> getMessage() . "<br>";
    }
        

?> 