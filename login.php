<?php
session_start();

if(!isset($_SESSION['user_email']) && isset($_COOKIE['logged_user'])){
    $_SESSION['user_email'] = $_COOKIE['logged_user'];
    header('Locaion:dashboard.php');
    exit();
}
if($_SERVER["REQUEST_METHOD"]=== "POST"){
    $user_email = $_POST['user_email'];
    $user_pass= $_POST['user_pass'];

    if($user_email === 'ZoyaAli1234@gmail.com' && $user_pass === '1234'){
            // session_regenerate_id(true);
            $_SESSION['user_email'] = $user_email;
            // $_SESSION['role'] = 1;

        setcookie('logged_user' ,$user_email, time() + 34800);

        header('Location:dashboard.php');
    }

    else{
        echo 'invalid';
    }
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
    <form action="" method="post">
    <input type="email" name="user_email" id="">
    <input type="password" name="user_pass" id="">
    <input type="submit" value="Login">
    </form>
</body>
</html>