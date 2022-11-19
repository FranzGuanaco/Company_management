<?php

require 'connection.php';

$name = $_POST['name'];
$password = $_POST['password'];

$allNames = "SELECT Name FROM `Login`";
$allPassword = "SELECT Password FROM `Login`";

$userDetails = "SELECT * FROM `Employees` where Id = $userID";

        if (isset($_POST['validate'])) {

        if (($name == 'Pierre') && ($password == 1)){

            header("Location:Admin_homepage.php");
        }

        else {
            header("Location:Login.php");

        }}

        
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
</head>
<body>


<div class="square_user">

<form method="POST">
    <input type="text" placeholder="name" name="name"> <br> <br>
    <input type="text" placeholder="password" name="password">

<input type="submit" name="validate" ><br>

</form>
</div>



</body>