<?php
require "todo.php";

$editTask = "";
$editIndex = null;

if(isset($_GET['edit'])){
    $editIndex = $_GET['edit'];
    if(isset($tasks[$editIndex])){
        $editTask = $tasks[$editIndex];
    }
}

$msg = isset($_GET['msg']) ? $_GET['msg'] : "";
?>

<!DOCTYPE html>
<html>
<head>
<title>Todo List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="text-center mb-4">Todo List</h2>

<form method="POST" action="todo.php" class="d-flex gap-2 mb-3">

<input type="text"
name="task"
class="form-control"
placeholder="Enter task..."
value="<?php echo htmlspecialchars($editTask); ?>"
required>

<?php if($editIndex !== null){ ?>

<input type="hidden" name="edit_index" value="<?php echo $editIndex; ?>">
<button class="btn btn-warning">Update</button>

<?php } else { ?>

<button class="btn btn-primary">Add</button>

<?php } ?>

</form>

<ul class="list-group">

<?php if(empty($tasks)){ ?>

<li class="list-group-item text-center">
No Tasks Yet
</li>

<?php } ?>

<?php foreach($tasks as $index=>$task){ ?>

<li class="list-group-item d-flex justify-content-between">

<span><?php echo htmlspecialchars($task); ?></span>

<div>

<a href="?edit=<?php echo $index; ?>" class="btn btn-sm btn-success">Edit</a>

<a href="todo.php?delete=<?php echo $index; ?>" class="btn btn-sm btn-danger">Delete</a>

</div>

</li>

<?php } ?>

</ul>

</div>


<!-- Toast -->

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
setTimeout(()=>{
document.querySelectorAll('.toast').forEach(t=>{
new bootstrap.Toast(t).hide();
});
},3000);
</script>

</body>
</html>