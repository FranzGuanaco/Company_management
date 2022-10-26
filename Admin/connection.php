<?php

$host= "localhost";
$user = "root";
$password = "root";
$db = "Corporate_management";


$con = mysqli_connect($host, $user, $password, $db);
$total = "SELECT * FROM 'Employees'";

if (!$con) {

    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";




?>