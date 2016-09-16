<!DOCTYPE html>
<html lang="en">
<?php include_once('head.php') ?>
<body role="document">
<?php 
$msg="";
$name=$_POST['name'];
$subject=$_POST['subject'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$mesej=$_POST['mesej'];

$from_add = $email;

$to_add = $school['email']; //<-- put your yahoo/gmail email address here

$subject2 = $subject;
$mesej2 ="<html><body>";
$mesej2 .="<p>  Mesej dari ".$name ."</p> ";
$mesej2 .="<p>  Subject :  ".$subject ." </p> ";
$mesej2 .="<p>  Tel : ". $tel ."</p> ";
$mesej2 .="<p>  Email : ". $email ."</p> ";
$mesej2 .="<p>  mesej : <br> ".$mesej  ."</p> ";
$mesej2 .= "</body></html>";
	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	$headers .= "Content-type: text/html; charset=utf-8 \r\n";
	
	
	if(mail($to_add,$subject2,$mesej2,$headers)) 
	{
		 $msg = "Pertanyaan anda berjaya dihantar";
	} 
	else 
	{
 	   $msg = "Borang Pertanyaan gagal!";
	};

?>
<section id="newsArea">
<div class="container"> 
            <div class="row">
                <div class="col-md-12 text-center">
                <h2><?php echo $msg;?></h2>
                 
                </div>
            </div>
            </div>
</section>
</body>
</html>