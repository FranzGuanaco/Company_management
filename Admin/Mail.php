<?php

require 'connection.php';


$to = 'chevin.pierre.tomas@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'Content-type: text/plain; charset=utf-8\r\n';
$headers = 'From:chevin.pierre.tomas@gmail.com\r\n';

if  (mail($to, $subject, $message, $headers)){

    echo 'mail envoyé';
}

else {
  echo "Your Mail is not sent. Try Again.";
}

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

    <img src="email.jpg"></image>

    <div class="square_user">

        <form action="Mail.php" method="POST">
        <input type="submit" value="send email" name="mail">
        </form>

    </div>

</body>