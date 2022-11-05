<?php


require 'connection.php';

$all = "SELECT * FROM `Employees`";


$allEmployees = mysqli_query($con, $all);
$total = mysqli_fetch_all($allEmployees, MYSQLI_ASSOC);


if (isset($_POST['lo'])&& isset($_POST['detail'])) {

    $employeeID = 1;
    $userTest = "SELECT * FROM `Employees` where Id = $employeeID ";
    $profile = mysqli_query($con, $userTest);
    $page = mysqli_fetch_all($profile, MYSQLI_ASSOC);

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



<?php foreach ($total as $EmployeeData) { 

    $employeeID = $EmployeeData['Id'] ?>

    <div class="square_user">

    <p> <?php echo $EmployeeData['Id']; ?></p>
    <p> <?php echo $EmployeeData['Firstname']; ?></p>
    <p> <?php echo $EmployeeData['Surname']; ?></p>
    <p> <?php echo $EmployeeData['Age']; ?></p>

   <?php $test = $EmployeeData['Id'] ?>
   
   <a href= "User_account.php?Id=<?php echo $EmployeeData['Id']; ?>">jnjnkjn </a>

    <form action="User_account.php" method="POST">
    <input type='hidden' name='detail' value='".$employeeID."'>
    <input type="submit" value= "voici <?php echo $EmployeeData['Firstname'] ?>"  name="lo" ></input>
    
</form>
   
    </div>

  <?php
        }

        ?>
</body>
</html>