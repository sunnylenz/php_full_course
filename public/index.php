<?php 
require("../private/functions.php");



if (is_post_request()) {
    
    $name = $_POST['name'] ?? " ";
    $email = $_POST['email'] ?? " ";
    $password = $_POST['password'] ?? "";

    echo "$name <br> $email <br> $password ";
}

if (is_get_request()) {
    $name = $_GET['name'] ?? " ";
    $email = $_GET['email'] ?? " ";
    $pass = $_GET['password'] ?? " ";
    echo "$name <br> $email <br> $pass <br> shows a get statement ";
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
    <h1>please fill the following form</h1>


    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Enter name" required>
        <input type="email"  name="email" placeholder="Enter email" required>
        <input type="password" name="password" placeholder="Enter password" required>
        <input type="submit" >

    </form>
</body>
</html>