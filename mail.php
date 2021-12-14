<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

if(isset( $_POST['mobile']))
$mobile = $_POST['mobile'];

date_default_timezone_set("Asia/Calcutta");
$datetime=date("Y/M/d H:i:s");

$from="info@natureblunt.com";
$recipient = "amtrack01@gmail.com";
$content=" Subject: $subject \n From: $name \n Email: $email \n Mobile: $mobile  \n Message: $message";
$mailheader = "From: $from \r\n";
mail($recipient, $subject."  ".$datetime, $content, $mailheader) or die("Error!");
header("Location:Thank-you.php?message=send");
?>