<?php
$name = $_POST["InputName"];
$email = $_POST["InputEmail"];
$number = $_POST["InputNumber"];
$message = $_POST["InputMessage"];
$to = 'anankitpatil@gmail.com';
$subject = 'cobcheshire.com Registration Form';
$message = 'From: ' . $name . "\r\n" .
	'Email: ' . $email . "\r\n" .
	'Phone number: ' . $number . "\r\n" .
	'Message: ' . $message;
$headers = 'From: contact@cobcheshire.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
if(mail($to, $subject, $message, $headers)){
	echo 'We have received your contact details. We will get in touch soon!';	
} else{
	echo 'Something went wrong. Please refresh the page and try again.';	
};
?> 