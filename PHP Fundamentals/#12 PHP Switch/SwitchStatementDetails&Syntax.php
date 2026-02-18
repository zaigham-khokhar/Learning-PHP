<?php
    // The PHP Switch Statement
    /* The switch statement is used to perform different actions based on
    different conditions. */

    // Syntax For Switch Statement
    $days = "Monday";
    switch ($days) {
        case "Monday":
            echo "Today is MonDay";
            break;
        case "Tuesday":
            echo "Today is TuesDay";
            break;
        case "Wednesday":
            echo "Today is WednesDay";
            break;
        case "Thursday":
            echo "Today is ThursDay";
            break;
        case "Friday":
            echo "Today is FriDay";
            break;
        case "Saturday":
            echo "Today is Weekend";
            break;
        case "Sunday":
            echo "Today is Weekend";
            break;
        default:
            echo "Invalid Day";                
    }

    // The PHP break Keyword
    // When PHP reaches a break keyword, it breaks out of the switch block.
?>