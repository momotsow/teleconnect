<?php

header('Access-Control-Allow-Origin: *');

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])    ||
   empty($_POST['phone'])     ||
   empty($_POST['province'])  ||
   empty($_POST['services'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$province = strip_tags(htmlspecialchars($_POST['province']));
$message = strip_tags(htmlspecialchars($_POST['services']));
   
// Create the email and send the message
$to = 'enquires@teleconnect.co.za'; 
$email_subject = "Website Quote Form:  $name";
$email_body = "You have received a new message from your website Quote form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\n\n\nServices: $servicesPhone: $phone\n\nMessage:\n$message";
$headers = "From: enquires@teleconnect.co.za\n";
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>