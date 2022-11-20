<?php

$host ='localhost';
$user = "root";
$password = "root";
$db = "Corporate_management";

try {
    $con = new PDO("mysql: host=$host; dbname=$db", $user, $password);
    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = htmlspecialchars($_POST['Name']);
    $password = $_POST['Password'];


    $userDetails = "SELECT * FROM `Employees` where Id = $userID";
    $check = $con -> prepare ('SELECT * FROM `Login` WHERE Name = ? and Password = ?');
    $check -> execute(array($name, $password));


        if (isset($_POST['validate'])) {

        if ($check->rowCount() > 0) {

            header("Location:Admin_homepage.php");
        }

        else {
            echo 'raté';
        }}
    
}

catch(PDOException $e) {
    echo "connection failed" . $e ->getMessage();
}


/* require 'connection.php';

$name = $_POST['Name'];
$password = $_POST['Password'];

$allNames = "SELECT Name FROM `Login`";
$allPassword = "SELECT Password FROM `Login`";

$userDetails = "SELECT * FROM `Employees` where Id = $userID";
$check = "SELECT * FROM `Login` WHERE Name = ? and Password = ?";


        if (isset($_POST['validate'])) {

        if (($name == htmlspecialchars_decode ('Pierre')) && ($password == 1)) {

            header("Location:Admin_homepage.php");
        }

        else {
            header("Location:Login.php");
        }}  */

        
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
    <input type="text" placeholder="Name" name="Name"> <br> <br>
    <input type="text" placeholder="password" name="Password">

<input type="submit" name="validate" ><br>

</form>
</div>



</body>