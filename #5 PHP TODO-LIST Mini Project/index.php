<?php
    // Include the main todo logic file
    require "todo.php";

    // Initialize variables for editing a task
    $editTask = "";
    $editIndex = null;

    // Check if the user clicked the "Edit" button
    if(isset($_GET['edit'])){
        $editIndex = $_GET['edit'];
        // Ensure the task exists in the tasks array before using it
        if(isset($tasks[$editIndex])){
            $editTask = $tasks[$editIndex];
        }
    }

    // Check for a message from actions like add, update, delete
    $msg = isset($_GET['msg']) ? $_GET['msg'] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Todo List</h2>
        
        <!-- Form for adding/updating tasks -->
        <form method="POST" action="todo.php" class="d-flex gap-2 mb-3">
            <!-- Input field for task -->
            <input type="text"
                name="task"
                class="form-control"
                placeholder="Enter task..."
                value="<?php echo htmlspecialchars($editTask); ?>"  <!-- Preserve task text during edit -->
                required>
            
            <?php if($editIndex !== null){ ?>
                <!-- Hidden field to store index of task being edited -->
                <input type="hidden" name="edit_index" value="<?php echo $editIndex; ?>">
                <button class="btn btn-warning">Update</button>
            <?php } else { ?>
                <button class="btn btn-primary">Add</button>
            <?php } ?>
        </form>

        <!-- Display list of tasks -->
        <ul class="list-group">
            <?php if(empty($tasks)){ ?>
                <li class="list-group-item text-center">
                    No Tasks Yet
                </li>
            <?php } ?>
            
            <?php foreach($tasks as $index=>$task){ ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span><?php echo htmlspecialchars($task); ?></span> <!-- Show task text safely -->
                    <div>
                        <!-- Edit button passes index via GET -->
                        <a href="?edit=<?php echo $index; ?>" class="btn btn-sm btn-success">Edit</a>
                        <!-- Delete button passes index via GET to todo.php -->
                        <a href="todo.php?delete=<?php echo $index; ?>" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>

    <!-- Toast notifications for add/update/delete actions -->
    <?php if($msg){ ?>
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <?php if($msg=="added"){ ?>
                <div class="toast show text-bg-success">
                    <div class="toast-body">Task Added</div>
                </div>
            <?php } ?>

            <?php if($msg=="updated"){ ?>
                <div class="toast show text-bg-warning">
                    <div class="toast-body">Task Updated</div>
                </div>
            <?php } ?>

            <?php if($msg=="deleted"){ ?>
                <div class="toast show text-bg-danger">
                    <div class="toast-body">Task Deleted</div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

    <!-- Bootstrap JS for toast functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Automatically hide toasts after 3 seconds
        setTimeout(()=>{
            document.querySelectorAll('.toast').forEach(t=>{
                new bootstrap.Toast(t).hide();
            });
        },3000);
    </script>
</body>
</html>