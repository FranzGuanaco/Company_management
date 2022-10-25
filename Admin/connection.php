<?php

$host= "localhost";
$user = "root";
$password = "root";
$db = "dbClient";


$con = mysqli_connect($host, $user, $password, $db);

if (!$con) {

    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";




?>