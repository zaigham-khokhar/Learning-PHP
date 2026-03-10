<?php
// Start a session to store tasks across page reloads
session_start();

class Todo {

    // Constructor runs when an object of Todo is created
    public function __construct(){
        // Initialize the 'tasks' session array if it doesn't exist yet
        if(!isset($_SESSION['tasks'])){
            $_SESSION['tasks'] = [];
        }
    }

    // Add a new task
    public function addTask($task){
        $task = trim($task); // Remove extra spaces
        if(!empty($task)){ // Only add if task is not empty
            $_SESSION['tasks'][] = $task;
        }
    }

    // Retrieve all tasks
    public function getTasks(){
        return $_SESSION['tasks'];
    }

    // Edit an existing task by index
    public function editTask($index, $task){
        // Check if the task exists before updating
        if(isset($_SESSION['tasks'][$index])){
            $_SESSION['tasks'][$index] = trim($task);
        }
    }

    // Delete a task by index
    public function deleteTask($index){
        // Check if the task exists before deleting
        if(isset($_SESSION['tasks'][$index])){
            unset($_SESSION['tasks'][$index]);
            // Re-index the array to maintain numeric indexes
            $_SESSION['tasks'] = array_values($_SESSION['tasks']);
        }
    }
}

// Create an instance of Todo
$todo = new Todo();

// Handle form submission to add a new task
if(isset($_POST['task']) && !isset($_POST['edit_index'])){
    $todo->addTask($_POST['task']); // Add task to session
    header("Location: index.php?msg=added"); // Redirect with success message
    exit;
}

// Handle form submission to edit an existing task
if(isset($_POST['edit_index'])){
    $todo->editTask($_POST['edit_index'], $_POST['task']); // Update task
    header("Location: index.php?msg=updated"); // Redirect with update message
    exit;
}

// Handle task deletion via GET request
if(isset($_GET['delete'])){
    $todo->deleteTask($_GET['delete']); // Remove task
    header("Location: index.php?msg=deleted"); // Redirect with delete message
    exit;
}

// Get the current list of tasks to display in index.php
$tasks = $todo->getTasks();