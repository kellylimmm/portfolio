<?php
// Check for empty fields
if(empty($_POST['demo-name'])      ||
   empty($_POST['demo-email'])     ||
   // empty($_POST['phone'])     ||
   empty($_POST['demo-message'])   ||
   !filter_var($_POST['demo-email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['demo-name']));
$email_address = strip_tags(htmlspecialchars($_POST['demo-email']));
// $phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['demo-message']));

// Create the email and send the message
$to = 'kellylim.06@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html?mailsend");
return true;
?>