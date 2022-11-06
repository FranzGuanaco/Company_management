<?php
require 'connection.php';

$userID = $_GET['Id'];

$userDetails = "SELECT * FROM `Employees` where id = $userID";

$Employees = mysqli_query($con, $userDetails);
$result = mysqli_fetch_all($Employees, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>User details</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
</head>
<body>


<?php foreach ($result as $Details) { ?>

    <div class="square_user">

    <p> <?php echo $_GET['Id']; ?></p>
    <p> <?php echo $Details ['Firstname']; ?></p>
    <p> <?php echo $Details ['Surname']; ?></p>
    <p> <?php echo $Details ['Age']; ?></p>
   
    </div>

    <?php
        }

        ?>

</body>
</html>