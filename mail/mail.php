<?php
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Message: ".$message."

";

mail ("romy00120@gmail.com" , "New Message", $email_message);
header("location: ../email.html ");
?>
