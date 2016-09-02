<?php 

	if ($_POST["submit"]) {
		
		$result="Email sent!";
		
		if (!$_POST["name"]) {
			$error="<br />Please enter your name.";
		}
		
		if (!$_POST["email"]) {
			$error.="<br />Please enter your email address.";
		}
		
		if (!$_POST["comment"]) {
			$error.="<br />Please enter you a comment before submitting.";
		}
		
		if ($_POST["email"] != "" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			echo "VALID";
			$error.="<br />Please enter a valid email address.";
		}
		
		if ($error) {
			$result='<div class = "alert alert-danger" id = "alert_message">There were errors submitting your form: '.$error.'</div>';
		} else {
			if (mail("trevormcgrath88@gmail.com", "Comment from trevormcgrath.com!", "Name: ".$_POST['name']." Email: ".$_POST['email']." Comment: ".$_POST['comment'])) {
				$result='<div class = "alert alert-success" id = "alert_message">Thank you! I will be in touch!</div>';
			} else {
				$result="Sorry there was an error sending your message, please try again.";
			}
		}
	}

 ?>