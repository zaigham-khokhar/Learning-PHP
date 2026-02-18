<html>
<body>

<a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>

<?php
$subject = htmlspecialchars($_GET['subject']);
$web = htmlspecialchars($_GET['web']);
echo "Study $subject at $web.";
?>

</body>
</html>