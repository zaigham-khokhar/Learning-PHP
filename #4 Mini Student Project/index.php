<?php
    include "student.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-web-app</title>
</head>
<body>
    <div class="container">
        <h1>Student Management</h1>
        <form method="post">
            <label>Name:</label>
            <input type="text" name="name" placeholder="Enter your name" required> 
            <label>Email:</label>
            <input type="text" name="email" placeholder="Enter your email" required>
            <label>Marks:</label>
            <input type="text" name="marks" placeholder="Enter your marks" required>
            <input type="submit" value="Submit" name="submit" >
        </form>

        <?php
            if(isset($_POST['submit'])) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $marks = $_POST["marks"];

                $student = new Student($name, $email, $marks);
                $result = $student->checkMarks();
                $resultClass = ($result === "Pass") ? "pass" : "fail";
                ?>
                <div class="student-details">
                    <h2>Student Details</h2>
                    <p><span>Name:</span> <span><?php echo $student->name; ?></span></p>
                    <p><span>Email:</span> <span><?php echo $student->email; ?></span></p>
                    <p><span>Marks:</span> <span><?php echo $student->marks; ?></span></p>
                    <p class="result"><span>Result:</span> <span class="<?php echo $resultClass; ?>"><?php echo $result; ?></span></p>
                </div>
                <?php
            }
        ?>
    </div>
</body>
</html>