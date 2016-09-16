<?php
//$to2 ='kopiaman@yahoo.com';

$name2='ABU';
//$email2='inadso@yahoo.com';
$tel2='012323';
$subject2='cuba eta';
$comment2 ='mesej';
/*


$subject ="Pertanyaan/Maklum Balas mengenai ". $subject2. "\r\n";
$headers2 = "From: " . $email2 . "\r\n";
$headers2 .= "Content-type: text/html" ."\r\n";
*/

$msg="";
$from_add = "name@your-web-site.com"; 

$to_add = "kopiaman@yahoo.com"; //<-- put your yahoo/gmail email address here

$subject = "Test Subject";
$message2 ="<html><body>";
$message2 .="<p>  Mesej dari $name2  </p> ";
$message2 .="<p>  Subject :  $subject2  </p> ";
$message2 .="<p>  Tel :  $tel2  </p> ";
$message2 .="<p>  Email :  $email2  </p> ";
$message2 .="<p>  Message : <br> $comment2  </p> ";
$message2 .= "</body></html>";
	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	$headers .= "Content-type: text/html" ."\r\n";
	
	
	if(mail($to_add,$subject,$message2,$headers)) 
	{
		 $msg = "Mail sent OK";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	};
echo $msg;
?>