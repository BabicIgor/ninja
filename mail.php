<?php
	if($_POST){		
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
		//send email
		// mail("princess_cheng@outlook.com", "This is an email from:" .$email, $message);
		mail("info@netninjas.io", "This is an email from:" .$email, $message);		
	}
?>