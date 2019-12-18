Thanks for your message!

<?php

	$userName 		= $_POST['name'];
	$userEmail	 	= $_POST['email'];
	$userMessage 		= $_POST['message'];

	$to 			= "kellylim.06@gmail.com";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;

	mail($to, $subject, $body);
?>