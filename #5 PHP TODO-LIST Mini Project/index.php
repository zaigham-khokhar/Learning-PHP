<?php
require "Todo.php";

$todo = new Todo();

// Add Task
if (isset($_POST["task"]) && !isset($_POST["edit_index"])) {
    $todo->addTask($_POST["task"]);
    header("Location: " . str_replace("?" . $_SERVER['QUERY_STRING'], '', $_SERVER['REQUEST_URI']));
    exit;
}

// Update Task
if (isset($_POST["edit_index"])) {
    $todo->editTask($_POST["edit_index"], $_POST["task"]);
    header("Location: " . str_replace("?" . $_SERVER['QUERY_STRING'], '', $_SERVER['REQUEST_URI']));
    exit;
}

// Delete Task
if (isset($_GET["delete"])) {
    $todo->deleteTask($_GET["delete"]);
}

// Get all tasks
$tasks = $todo->getTasks();

// Edit Task info
$editTask = "";
$editIndex = null;
if (isset($_GET["edit"])) {
    $editIndex = $_GET["edit"];
    if (isset($tasks[$editIndex])) {
        $editTask = $tasks[$editIndex];
    }
}

$taskCount = count($tasks);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List - Zaigham</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Todo List</h2>
        </div>
        
        <div class="form-container">
            <form method="POST">
                <div class="input-wrapper">
                    <input type="text" name="task" id="Task-Input" placeholder="Enter your task here..." required value="<?php echo htmlspecialchars($editTask, ENT_QUOTES, 'UTF-8'); ?>">
                </div>
                <?php if($editIndex !== null){ ?>
                    <input type="hidden" name="edit_index" value="<?php echo $editIndex; ?>">
                    <button type="submit">Update</button>
                <?php } else { ?>
                    <button type="submit">Add Task</button>
                <?php } ?>
            </form>
        </div>
        
        <div class="task-container">
            <?php if($taskCount > 0){ ?>
                <div class="task-count">
                    You have <?php echo $taskCount; ?> task<?php echo $taskCount != 1 ? 's' : ''; ?> to complete
                </div>
            <?php } ?>
            
            <ul>
                <?php if(empty($tasks)){ ?>
                    <li class="empty-state">
                        <div class="empty-state-icon">📝</div>
                        <p>No tasks yet. Add your first task above!</p>
                    </li>
                <?php } else { ?>
                    <?php foreach($tasks as $index => $task){ ?>
                        <li>
                            <span class="task-text">
                                <span class="task-badge"><?php echo $index + 1; ?></span>
                                <?php echo htmlspecialchars($task); ?>
                            </span>
                            <div class="action-buttons">
                                <a href="?edit=<?php echo urlencode($index); ?>" class="action-btn edit-btn">Edit</a>
                                <a href="?delete=<?php echo urlencode($index); ?>" class="action-btn delete-btn">Delete</a>
                            </div>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </div>
</body>
</html>
