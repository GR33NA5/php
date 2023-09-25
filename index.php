<?php
session_start();

if(isset($_POST['login'])){
    unset($_SESSION['user']);
}

if (!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Welcome</h1>

        <form method = "post">
            <input type ="hidden" name ="logout" value ="1"/>
            <input type ="submit" value ="logout"/>
        </form>
    </body>
</html>