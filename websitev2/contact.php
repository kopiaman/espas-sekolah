<?php
//if(!$_POST) exit;

$email = $_POST['email'];

	$values = array ('name','email','tel','message');
	$required = array ('name','email','tel','message');
	 
	//$your_email = $school['email'];
	$your_email ='kopiah2@gmail.com';
	$email_subject = "New Message: ".$_POST['subject'];
	$email_content = "new message:\n";
	

	if(@mail($your_email,$email_subject,$email_content)) {
		echo 'Mesej Dihantar!'; 
		
	} else {
		echo 'Mesej tidak dihantar.!';
	};
?>