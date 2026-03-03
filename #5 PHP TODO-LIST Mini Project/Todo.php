<?php
    // Make a Class Names Todo
    class Todo {
        public function __construct() {
            if(isset($_SESSION["tasks"])) {
                $_SESSION["tasks"] = [];
            }
        }

        // Add Task Function
        public function addTask($task){
            $_SESSION["tasks"][] = $task;
        }

        // Get All Tasks Function
        public function getTask(){
            return $_SESSION["tasks"];
        }

        // Delete Task Function
        public function deleteTask($index){
            unset($_SESSION["tasks"][$index]);
        }

        // Edit Task Function
        public function editTask($index, $newTask){
            $_SESSION["tasks"][$index] = $newTask;
        }
    }
?>