<?php
require 'connection.php';

$userID = $_GET['Id'];
$id = $_POST['identite'];
$name = $_POST['fname'];
$surname = $_POST['sname'];
$age = $_POST['age'];

$userDetails = "SELECT * FROM `Employees` where Id = $userID";
$changefname = "UPDATE Employees SET Firstname ='" .$_POST['fname']. "' where Id = $userID";
$changesname = "UPDATE Employees SET  Surname = '" .$_POST['sname']. "' where Id = $userID";
$changeAge = "UPDATE Employees SET  Age = $age where Id = $userID";

$Employees = mysqli_query($con, $userDetails);
$result = mysqli_fetch_all($Employees, MYSQLI_ASSOC);


        if (isset($_POST['validate'])) {
            
        if (!empty($_POST['fname'])){
            $chngt = mysqli_query($con, $changefname);
            $test = mysqli_fetch_all($chngt, MYSQLI_ASSOC);}

            if (!empty($_POST['sname'])) {
            $chngt = mysqli_query($con, $changesname);
            $test = mysqli_fetch_all($chngt, MYSQLI_ASSOC);
            }
            if (!empty($_POST['age'])) {
                $chngt = mysqli_query($con, $changeAge);
                $test = mysqli_fetch_all($chngt, MYSQLI_ASSOC);
            }
        }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
</head>
<body>

      
<?php foreach ($result as $Details) { ?>

<div class="square_user">

<form action="Edit_user.php?Id=<?php echo $Details['Id']; ?>" method="POST">

        <input type="text" id="id" placeholder=<?php echo $Details['Id']; ?> name="identite"> <br>
        <input type="text" id="fname" placeholder=<?php echo $Details ['Firstname']; ?> name="fname"> <br>
        <input type="text" id="sname" placeholder=<?php echo $Details ['Surname']; ?> name="sname"> <br>
        <input type="text" id="age" placeholder=<?php echo $Details ['Age']; ?> name="age"> <br>

        <input type="submit" name="validate" hidden><br>
        
    </form>

</div>




<input type="submit" value= "Supprimer <?php echo $Details['Firstname'] ?>"  name="suppression" >



<a href= "Edit_user.php?Id=<?php echo $Details['Id']; ?>">Edit </a>

<?php
    }

    ?>

    
</body>
</html>