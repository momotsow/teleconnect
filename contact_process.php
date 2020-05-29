<?php

header('Access-Control-Allow-Origin: *');

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])    ||
   empty($_POST['phone'])     ||
   empty($_POST['province'])  ||
   count($_POST['services[]']) < 0  ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$province = $_POST['province'];
$selectedServices = implode(' | ', $_POST['services']);

   
// Create the email and send the message
<<<<<<< HEAD
$to = 'enquiries@TeleConnect.co.za'; 
$email_subject = "Website's Expression of Interest Form:  $name";
$email_body = "You have received a new message from your Website's Expression of Interest Form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nProvince: $province\n\n\n\nSelected Services: $selectedServices\n\n";

$headers = "From: enquiries@TeleConnect.co.za\n";
=======
$to = 'enquires@teleconnect.co.za'; 
$email_subject = "Website's Expression of Interest Form:  $name";
$email_body = "You have received a new message from your Website's Expression of Interest Form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nProvince: $province\n\n\n\nSelected Services: $selectedServices\n\n";

$headers = "From: enquires@teleconnect.co.za\n";
>>>>>>> 5fc9745c095ac439e7a9802909fda021f57a2854
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>