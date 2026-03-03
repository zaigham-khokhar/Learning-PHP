<?php
require "Todo.php";

$todo = new Todo();

// Add Task
if (isset($_POST["task"]) && !isset($_POST["edit_index"])) {
    $todo->addTask($_POST["task"]);
}

// Update Task
if (isset($_POST["edit_index"])) {
    $todo->editTask($_POST["edit_index"], $_POST["task"]);
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Todo-Project-Developed-By-Zaigham</title>
</head>
<body>
    <h2>Todo List</h2>
    <form method="POST">
        <input type="text" name="task" id="Task-Input" placeholder="Enter Task" required value="<?php echo $editTask; ?>">
        <?php if($editIndex !== null){ ?>
            <input type="hidden" name="edit_index" value="<?php echo $editIndex; ?>">
            <button>Update</button>
        <?php } else { ?>
            <button>Add</button>
        <?php } ?>
    </form>
    <ul>
        <?php foreach($tasks as $index => $task){ ?>
            <li>
                <?php echo $task; ?>
                <!-- ✅ Fix: Added = sign -->
                <a href="?edit=<?php echo $index; ?>">Edit</a>
                <a href="?delete=<?php echo $index; ?>">Delete</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>