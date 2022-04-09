<?php

$name = $_POST['Users name'];
$email = $_POST['Users email'];

$usersIssue = $_POST['Users issue'];
$comments = $_POST['Users Comments'];
$formcontent = " From: $name \n email :$email \n usersissue :$usersIssue \n  comments :$comments";
$recipient = "youremail@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
