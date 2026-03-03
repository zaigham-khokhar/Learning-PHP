<?php
// Make a Class Named Todo
class Todo {
    public function __construct() {
        // Start the session inside the constructor
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Initialize tasks array if not already set
        if (!isset($_SESSION["tasks"])) {
            $_SESSION["tasks"] = [];
        }
    }

    // Add Task Function
    public function addTask($task) {
        $_SESSION["tasks"][] = $task;
    }

    // Get All Tasks Function
    public function getTask() {
        return $_SESSION["tasks"];
    }

    // Delete Task Function
    public function deleteTask($index) {
        unset($_SESSION["tasks"][$index]);
        // Reindex the array to avoid gaps
        $_SESSION["tasks"] = array_values($_SESSION["tasks"]);
    }

    // Edit Task Function
    public function editTask($index, $newTask) {
        $_SESSION["tasks"][$index] = $newTask;
    }
}
?>