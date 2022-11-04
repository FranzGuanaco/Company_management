<?php


require 'connection.php';

$all = "SELECT * FROM `Employees`";

$userTest = "SELECT * FROM `Employees` where Id = $test ";

$userProfile = $_POST['lo'];

$allEmployees = mysqli_query($con, $all);
$total = mysqli_fetch_all($allEmployees, MYSQLI_ASSOC);


if (isset($userProfile)){
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



<?php foreach ($total as $EmployeeData) { ?>

    <div class="square_user">

    <p> <?php echo $EmployeeData['Id']; ?></p>
    <p> <?php echo $EmployeeData['Firstname']; ?></p>
    <p> <?php echo $EmployeeData['Surname']; ?></p>
    <p> <?php echo $EmployeeData['Age']; ?></p>

   <?php $test = $EmployeeData['Id'] ?>
    
    <form action="User_account.php" method="POST">
    <input type="submit" value="Go to <?php echo $EmployeeData['Firstname']; ?> profile" name="lo" />
</form>
   
    </div>

  <?php
        }

        ?>
</body>
</html>