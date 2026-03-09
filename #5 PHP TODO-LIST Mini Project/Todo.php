<?php
session_start();

class Todo {

    public function __construct(){
        if(!isset($_SESSION['tasks'])){
            $_SESSION['tasks'] = [];
        }
    }

    public function addTask($task){
        $task = trim($task);
        if(!empty($task)){
            $_SESSION['tasks'][] = $task;
        }
    }

    public function getTasks(){
        return $_SESSION['tasks'];
    }

    public function editTask($index,$task){
        if(isset($_SESSION['tasks'][$index])){
            $_SESSION['tasks'][$index] = trim($task);
        }
    }

    public function deleteTask($index){
        if(isset($_SESSION['tasks'][$index])){
            unset($_SESSION['tasks'][$index]);
            $_SESSION['tasks'] = array_values($_SESSION['tasks']);
        }
    }
}

$todo = new Todo();

/* ---------- Logic ---------- */

if(isset($_POST['task']) && !isset($_POST['edit_index'])){
    $todo->addTask($_POST['task']);
    header("Location: index.php?msg=added");
    exit;
}

if(isset($_POST['edit_index'])){
    $todo->editTask($_POST['edit_index'],$_POST['task']);
    header("Location: index.php?msg=updated");
    exit;
}

if(isset($_GET['delete'])){
    $todo->deleteTask($_GET['delete']);
    header("Location: index.php?msg=deleted");
    exit;
}

$tasks = $todo->getTasks();