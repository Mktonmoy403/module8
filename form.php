<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	// Send the email
	$to = 'email@example.com';
	$headers = "From: $name <$email>";
	$body = "Subject: $subject\n\n$message";
	
	if(mail($to, $subject, $body, $headers)) {
		echo "Thank you for contacting us. We will get back to you soon!";
	} else {
		echo "Sorry, there was a problem sending your message. Please try again later.";
	}
}
?>
