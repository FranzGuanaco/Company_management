<?php
$host= "localhost";
$user = "root";
$password = "root";
$db = "Corporate_management";


$con = mysqli_connect($host, $user, $password, $db);

$all = "SELECT * FROM `Employees`";

$allEmployees = mysqli_query($con, $all);
$total = mysqli_fetch_all($allEmployees, MYSQLI_ASSOC);

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



<?php foreach ($total as $EmployeeData) { ?>

    <div class="square_user">

    <p> <?php echo $EmployeeData['Id']; ?></p>
    <p> <?php echo $EmployeeData['Firstname']; ?></p>
    <p> <?php echo $EmployeeData['Surname']; ?></p>
    <p> <?php echo $EmployeeData['Age']; ?></p>
    
   
    </div>

  <?php
        }

        ?>
</body>
</html>