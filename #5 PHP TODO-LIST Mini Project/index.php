<?php
session_start();

class Todo {
    public function __construct() {
        if (!isset($_SESSION['tasks'])) { 
            $_SESSION['tasks'] = [];
        }
    }

    public function addTask($task) {
        $task = trim($task);
        if (!empty($task)) {
            $_SESSION['tasks'][] = $task;
        }
    }

    public function getTasks() {
        return $_SESSION['tasks'];
    }

    public function editTask($index, $task) {
        if (isset($_SESSION['tasks'][$index])) {
            $task = trim($task);
            if (!empty($task)) {
                $_SESSION['tasks'][$index] = $task;
            }
        }
    }

    public function deleteTask($index) {
        if (isset($_SESSION['tasks'][$index])) {
            unset($_SESSION['tasks'][$index]);
            $_SESSION['tasks'] = array_values($_SESSION['tasks']); 
        }
    }
}

$todo = new Todo();
$page = strtok($_SERVER["REQUEST_URI"], '?');

if (isset($_POST["task"]) && !isset($_POST["edit_index"])) {
    $todo->addTask($_POST["task"]);
    header("Location: " . $page . "?action=added");
    exit;
}

if (isset($_POST["edit_index"])) {
    $todo->editTask($_POST["edit_index"], $_POST["task"]);
    header("Location: " . $page . "?action=edited");
    exit;
}

if (isset($_GET["delete"])) {
    $todo->deleteTask($_GET["delete"]);
    header("Location: " . $page . "?action=deleted");
    exit;
}

$tasks = $todo->getTasks();
$editTask = "";
$editIndex = null;

if (isset($_GET["edit"])) {
    $editIndex = $_GET["edit"];
    if (isset($tasks[$editIndex])) {
        $editTask = $tasks[$editIndex];
    }
}

$action = isset($_GET["action"]) ? $_GET["action"] : "";
$taskCount = count($tasks);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List - Zaigham</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center mb-0">Todo List</h2>
            </div>
            
            <div class="card-body">
                <form method="POST" class="d-flex gap-2 mb-3">
                    <div class="flex-grow-1">
                        <input type="text" name="task" class="form-control" placeholder="Enter your task here..." required value="<?php echo htmlspecialchars($editTask); ?>">
                    </div>
                    <?php if($editIndex !== null){ ?>
                        <input type="hidden" name="edit_index" value="<?php echo $editIndex; ?>">
                        <button type="submit" class="btn btn-warning">Update</button>
                    <?php } else { ?>
                        <button type="submit" class="btn btn-primary">Add Task</button>
                    <?php } ?>
                </form>
                
                <?php if($taskCount > 0){ ?>
                    <p class="text-center text-muted mb-3">
                        You have <?php echo $taskCount; ?> task<?php echo $taskCount != 1 ? 's' : ''; ?> to complete
                    </p>
                <?php } ?>
                
                <ul class="list-group">
                    <?php if(empty($tasks)){ ?>
                        <li class="list-group-item text-center text-muted py-4">
                            <div class="fs-1 mb-2">📝</div>
                            <p>No tasks yet. Add your first task!</p>
                        </li>
                    <?php } else { ?>
                        <?php foreach($tasks as $index => $task){ ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>
                                    <span class="badge bg-primary me-2"><?php echo $index + 1; ?></span>
                                    <?php echo htmlspecialchars($task); ?>
                                </span>
                                <div>
                                    <a href="?edit=<?php echo $index; ?>" class="btn btn-sm btn-success">Edit</a>
                                    <a href="?delete=<?php echo $index; ?>" class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap Toast Messages using PHP -->
    <?php if($action === 'added'){ ?>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast show align-items-center text-white bg-success border-0" role="alert">
            <div class="d-flex">
                <div class="toast-body">Task added successfully!</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>
    <?php } ?>
    
    <?php if($action === 'edited'){ ?>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast show align-items-center text-white bg-warning border-0" role="alert">
            <div class="d-flex">
                <div class="toast-body">Task updated successfully!</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>
    <?php } ?>
    
    <?php if($action === 'deleted'){ ?>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast show align-items-center text-white bg-danger border-0" role="alert">
            <div class="d-flex">
                <div class="toast-body">Task deleted!</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>
    <?php } ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto hide toast after 3 seconds
        setTimeout(function() {
            var toasts = document.querySelectorAll('.toast');
            toasts.forEach(function(toast) {
                var bsToast = new bootstrap.Toast(toast);
                bsToast.hide();
            });
        }, 3000);
    </script>
</body>
</html>
