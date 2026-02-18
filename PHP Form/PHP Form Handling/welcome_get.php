<html>
<body>

Welcome <?php echo isset($_GET["name"]) ? htmlspecialchars($_GET["name"]) : "Guest"; ?><br>
Your email address is: <?php echo isset($_GET["email"]) ? htmlspecialchars($_GET["email"]) : "Not provided"; ?>

</body>
</html>