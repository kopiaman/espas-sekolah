<!DOCTYPE html>
<html lang="en">
<?php include_once('head.php') ?>
<body role="document">
<?php 
$msg="";

	$from_add = "info@aqwa.my"; 

	$to_add = "kopiaman@yahoo.com"; //<-- put your yahoo/gmail email address here

	$subject = "Test Subject";
	$message = "Test Message";
	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	
	
	if(mail($to_add,$subject,$message,$headers)) 
	{
		$msg = "Mail sent OK";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	};

?>
<section id="newsArea">
<div class="container"> 
            <div class="row">
                <div class="col-md-12 text-center">
                <h2><?php echo $msg ?></h2>
                </div>
            </div>
            </div>
</section>
</body>
</html>