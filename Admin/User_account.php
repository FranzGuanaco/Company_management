<?php
require 'connection.php';


$userTest = "SELECT * FROM `Employees` where Id = $test ";

$userProfile = $_POST['lo'];

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

        <?php foreach ($page as $EmployeeDat) { ?>

        <div class="square_user">

        <p> <?php echo $EmployeeDat['Id']; ?></p>
        <p> <?php echo $EmployeeDat['Firstname']; ?></p>
        <p> <?php echo $EmployeeDat['Surname']; ?></p>
        <p> <?php echo $EmployeeDat['Age']; ?></p>


        <?php $test = $EmployeeData['Id'] ?>

        <form action="User_account.php" method="POST">
        <input type="submit" value="Go to <?php echo $EmployeeDat['Firstname']; ?> profile" name="lo" />
        </form>

        </div>

        <?php
            }

            ?>


</body>
</html>