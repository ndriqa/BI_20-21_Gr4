<?php 

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];
$content="From: $name $lastname \n Message: $message";
$recipient = "sadikuurata@gmail.com";
$subject = "New message from Freshness";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Thank You!";
?>