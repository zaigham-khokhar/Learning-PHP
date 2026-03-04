<?php
session_start();

class Todo {

    public function __construct() {
        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }
    }

    // Add a task
    public function addTask($task) {
        $task = trim($task);
        if (!empty($task) && strlen($task) <= 500) {
            $_SESSION['tasks'][] = $task;
        }
    }

    // Get all tasks
    public function getTasks() {
        return $_SESSION['tasks'];
    }

    // Edit a task
    public function editTask($index, $task) {
        if (isset($_SESSION['tasks'][$index])) {
            $task = trim($task);
            if (!empty($task) && strlen($task) <= 500) {
                $_SESSION['tasks'][$index] = $task;
            }
        }
    }

    // Delete a task
    public function deleteTask($index) {
        if (isset($_SESSION['tasks'][$index])) {
            unset($_SESSION['tasks'][$index]);
            $_SESSION['tasks'] = array_values($_SESSION['tasks']); 
        }
    }
}
?>