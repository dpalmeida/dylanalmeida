<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'dylan@dylanalmeida.com'; 
		$to = 'dylan.p.almeida@gmail.com'; 
		$subject = 'Message from '.$name.'!';
		
		$email_message .= "Name: ".$name."\n";
		$email_message .= "Email: ".$email."\n";
		$email_message .= "Comments: ".$message."\n";
		
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
			echo $errName;
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
			echo $errEmail;
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
			echo $errMessage;
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $email_message, $from)) {
		$result='<div class="alert alert-success email-alert">Thank You! I will be in touch</div>';
		echo $result;
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
		echo $result;
	}
}
	}
?>