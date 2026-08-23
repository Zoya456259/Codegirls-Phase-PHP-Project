<?php
session_start(); 
 if(!isset($_SESSION['user_email'])){
        header('Location:login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Wellcome To Dashboard <?php echo $_SESSION['user_email'] ?></h1>
    <a href="logout.php">Log out</a>
</body>
</html>