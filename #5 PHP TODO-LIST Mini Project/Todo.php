<?php
    class Todo {
        public function __construct() {
            if(isset($_SESSION["tasks"])) {
                $_SESSION["tasks"] = [];
            }
        }

        // Add Task Function

        // Get All Tasks Function

        // Delete Task Function

        // Edit Task Function
    }
?>