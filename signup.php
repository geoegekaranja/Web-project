<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create an account</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
<?php
require_once("Database/db_connect.php");

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password === $confirm_password) {
        $sql = "INSERT INTO `users`(`username`, `password`, `confirm_password`) VALUES ('$username','$password','$confirm_password')";

        if ($conn->query($sql) === TRUE) {
           // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Passwords do not match.";
    }
}

$conn->close();
?>
   <div class="wrapper">
    <form action="" method="post">
        <h1>create an account</h1>
        <div class="input-box">
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="input-box">
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        </div>
        <div class="input-box">
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
   </div>
</body>
</html>
