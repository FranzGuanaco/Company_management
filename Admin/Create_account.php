<?php

require 'connection.php';

$con = mysqli_connect($host, $user, $password, $db);

$all = "SELECT * FROM `Employees`";

$Firstname = $_POST['Firstname'];
$Surname = $_POST['Surname'];
$Age = $_POST['Age'];
$Fees = $_POST['Fees'];
$Staffing = $_POST['Staffing'];
$newInsert = "INSERT INTO Employees (Firstname, Surname, Age, Fees, Staffing) values ('$Firstname', '$Surname', '$Age', '$Fees', '$Staffing')";

$allEmployees = mysqli_query($con, $all);
$total = mysqli_fetch_all($allEmployees, MYSQLI_ASSOC);

if (isset($Firstname)){
    $resultat = mysqli_query($con, $newInsert);
    $total = mysqli_fetch_all($resultat, MYSQLI_ASSOC);

}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>New user</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
</head>
<body>

    
    <form action="Create_account.php" method="POST">
    <label for="gsearch">Firstname:</label>
    <input type="search" id="gsearch" name="Firstname">
    <input type="submit">
   


    <label for="gsearch">Surname:</label>
    <input type="search" id="gsearch" name="Surname">
   

    <label for="gsearch">Age:</label>
    <input type="search" id="gsearch" name="Age">
  

    <label for="gsearch">Fees:</label>
    <input type="search" id="gsearch" name="Fees">


    <label for="gsearch">Staffing:</label>
    <input type="search" id="gsearch" name="Staffing">
    </form>

</body>
</html>