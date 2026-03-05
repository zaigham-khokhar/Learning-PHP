<?php
// Start session to store tasks
session_start();

class Todo {

    // Constructor - runs when class is created
    public function __construct() {
        // Create tasks array if not exists
        if (!isset($_SESSION['tasks'])) { 
            $_SESSION['tasks'] = [];
        }
    }

    // Add a new task
    public function addTask($task) {
        // Remove extra spaces
        $task = trim($task);
        
        // Check if task is not empty and not too long
        if (!empty($task) && strlen($task) <= 500) {
            // Add to session
            $_SESSION['tasks'][] = $task;
        }
    }

    // Get all tasks
    public function getTasks() {
        return $_SESSION['tasks'];
    }

    // Edit a task
    public function editTask($index, $task) {
        // Check if task exists
        if (isset($_SESSION['tasks'][$index])) {
            // Remove extra spaces
            $task = trim($task);
            
            // Check if task is not empty and not too long
            if (!empty($task) && strlen($task) <= 500) {
                // Update the task
                $_SESSION['tasks'][$index] = $task;
            }
        }
    }

    // Delete a task
    public function deleteTask($index) {
        // Check if task exists
        if (isset($_SESSION['tasks'][$index])) {
            // Remove the task
            unset($_SESSION['tasks'][$index]);
            // Re-index array
            $_SESSION['tasks'] = array_values($_SESSION['tasks']); 
        }
    }
}
?>
