<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$motive = $_POST['motive'];
	$message = $_POST['details'];
	$formcontent="From: $name \n Reason: $motive \n Message: $message";
	$recipient = "contacto@cibic.app";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "Thank You!";
?>