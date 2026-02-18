<!DOCTYPE html>
<html>
<body>

<form method="post">
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
if(isset($_POST["name"]) && isset($_POST["email"])) {
    echo "Welcome " . $_POST["name"] . "<br>";
    echo "Your Email Address is: " . $_POST["email"];
}
?>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br> 
Email: <input type="text" name="email"><br>
<input type="submit">
</form>
</body>
</html>
