<?php
require 'connection.php';

$name = $_POST['fname'];
$submit = $_POST['submit'];


$userDetails = "SELECT * FROM `Employees` where Firstname = '$name'";

if (isset($_POST['submit'])){
$Employees = mysqli_query($con, $userDetails);
$result = mysqli_fetch_all($Employees, MYSQLI_ASSOC);
}
?>


<!DOCTYPE html>
<html>
<body>


<form action="Admin_research.php" method="POST" >
 
  <input type="text" id="fname" name="fname"><br><br>
  <button type="submit" name="submit">Submit using POST</button>
</form>

<?php foreach ($result as $research) { ?>

  <p><?php echo $research['Firstname']; ?><p>
  <p><?php echo $research['Surname']; ?><p>

  <?php
    }

    ?>

</body>
</html>