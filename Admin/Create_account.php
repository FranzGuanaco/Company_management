<?php
$host= "localhost";
$user = "root";
$password = "root";
$db = "Corporate_management";


$con = mysqli_connect($host, $user, $password, $db);

$all = "SELECT * FROM `Employees`";

$newEmployee = $_POST['new_employee'];
$newInsert = "INSERT INTO Employees (Firstname, Surname, Age, Fees, Staffing) values ('jj', 'oo', 1, 0, 1)";

$allEmployees = mysqli_query($con, $all);
$total = mysqli_fetch_all($allEmployees, MYSQLI_ASSOC);

if (isset($newEmployee)){
    $resultat = mysqli_query($con, $newInsert);
    $total = mysqli_fetch_all($resultat, MYSQLI_ASSOC);

}
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

    
<form action="Create_account.php" method="POST">
  <label for="gsearch">New:</label>
  <input type="search" id="gsearch" name="new_employee">
  <input type="submit">
</form>

</body>
</html>