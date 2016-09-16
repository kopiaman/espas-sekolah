<?php include_once('inc_head.php') ?>
<?php 
$sellid=$_GET['sellid'];  $date_now = date('Y-m-d H:i:s');

$sql_config = "SELECT website_name,tel,email,alamat,fax,hp,url FROM ecom_setting WHERE id =1";
$q_config = mysql_query($sql_config,$conn);
$config=mysql_fetch_array($q_config); 
$websitename=$config['website_name'];
$email=$config['email'];

	
?>
	
	<!-- Work page begins ======================================================================= -->

<div class="sixteen columns">
    
    <?php if($_GET['page']=='postad') {?>
    <h3>Your ad successfully submmitted. Pending approval in 1~2 days for normal ad,  1~4 hour for urgent ad and promo ad. </h3>
    <?php }else{} ;?>
    
<?php if($_GET['adapprove']=='true') {
$sql_kamera= "SELECT sellid,userid,title,model,brandid,price,`type`,
	`condition`,deal,warranty,description,date_submit,date_approve,
	photo,adcompany,adlevel,status,sstate,offer FROM to_sell WHERE sellid=$sellid ";
	$query_kamera=mysql_query($sql_kamera,$conn);
	$row_kamera=mysql_fetch_assoc($query_kamera);
	
	$userid=$row_kamera['userid'];$sellid2=$row_kamera['sellid'];
	$title=$row_kamera['title'];$model=$row_kamera['model'];$brand=$row_kamera['brandid'];
	$price=$row_kamera['price'];$type=$row_kamera['type'];$condition=$row_kamera['condition'];$deal=$row_kamera['deal'];
	$warranty=$row_kamera['warranty'];$desc=$row_kamera['description'];$state=$row_kamera['sstate'];$offer=$row_kamera['offer'];
	$date_submit=$row_kamera['date_submit'];
	
	$sql_user= "SELECT username,userid,email FROM user WHERE userid=$userid ";
	$query_user=mysql_query($sql_user,$conn);
	$row_user=mysql_fetch_assoc($query_user);
	$username=$row_user['username']; $usermail=$row_user['email'];	
	
 $sql_up= "UPDATE to_sell SET status ='OK', date_approve='$date_now' WHERE sellid=$sellid";
$query_up=mysql_query($sql_up,$conn);   if (!$query_up)  { die(mysql_error());}

$link="<a href='http://www.jualbelikamera.my/website/p_market_detail.php?sellid=$sellid' target='_blank'>CLICK HERE</a>";
$creditlink="<a href='http://www.jualbelikamera.my/website/p_buycredit.php' target='_blank'>HERE</a>";
$linkedit="<a href='http://www.jualbelikamera.my/website/p_postad_edit.php?sellid=$sellid' target='_blank'>CLICK HERE</a>";

//send notification to user 
$message2 ="
<html><body>
<p>  Hi $username, Your ad succesfully approved. Your ad will be available for 2 month. <br>
$link to open the detail in website.  If you want edit your ad, $linkedit ( Note: You have to login first). </p> 
<p> <b> Username :</b>  $username <br>
    <b> Date Submit :</b> $date_submit <br> 
	<b> Date Approved :</b> $date_now <br> </p>
<p> <b> Title :</b>  $title <br>
    <b>  Model :</b> $model <br>
	<b>Brand :</b> $brand <br>
	<b>	Price :</b> RM $price <br>
	<b>  Type :</b>$type <br>
	<b>	Condition :</b>$condition<br>
	<b>	Deal :</b> $deal <br>
	<b>	Warranty :</b>$warranty <br>
	<b>	State :</b>$state <br>
	<b>	Offer :</b>$offer<br> </p>
		

<p style='border:solid 1px; padding:5px;'> ATTENTION: To increase attention to your ad, You can upgrade the ad to URGENT status for just 10 credit. <br>
To make your ad appear at the first row of ad list, you can upgrade the ad to PROMO status for about 20 credit only.<br>
Click $creditlink to purchase. 
</p>
</body></html>";
$to_user =$usermail;
$subject = " $username, Your Ad in $websitename Succesfully Approved  - Ad No ".$sellid ."\r\n";
$headers2 = "From: $websitename <$email> \r\n";
$headers2 .= "Content-type: text/html \r\n";		
$mailto=mail($to_user, $subject, $message2, $headers2);

echo "  <h3>This ad approved </h3>";
};?>
	
<?php //credit purchase approval 
if($_GET['credit_approve']=='true') {
$billno=$_GET['billno'];

//bill info
$sql_bill= "SELECT userid,credit,date_buy,billno,pay_proof,pay_status FROM user_credit WHERE billno=$billno ";
$query_bill=mysql_query($sql_bill,$conn);
$row_bill=mysql_fetch_assoc($query_bill);
$userid=$row_bill['userid'];$creditbuy=$row_bill['credit']; $date_buy=$row_bill['date_buy'];

//update user credit to paid status
$sql_up2= "UPDATE user_credit SET pay_status='Paid' WHERE billno=$billno";
$query_up2=mysql_query($sql_up2,$conn);  

//current credit now
$sql_creditnow= "SELECT credit FROM user WHERE userid=$userid ";
$query_creditnow=mysql_query($sql_creditnow,$conn);
$row_creditnow=mysql_fetch_assoc($query_creditnow); $creditnow=$row_creditnow['credit'];

//latest credit 
$latestcredit=$creditnow+$creditbuy;

//update user credit in user table
$sql_up2= "UPDATE user SET credit=$latestcredit WHERE userid=$userid";
$query_up2=mysql_query($sql_up2,$conn);  

//select user info
$sql_user= "SELECT username,userid,email FROM user WHERE userid=$userid ";
$query_user=mysql_query($sql_user,$conn);
$row_user=mysql_fetch_assoc($query_user);
$username=$row_user['username']; $usermail=$row_user['email'];	
	
//send notification to user 
$message2 ="
<html><body>
<p>  Hi $username, Your credit purchase for bill no $billno is successful.  </p> 
<p> <b> Credit :</b>  $creditbuy <br>
    <b> Purchase Date  :</b> $date_buy <br> </p>
</body></html>";
$to_user =$usermail;
$subject = "Succesful -Credit Purchase Request in $websitename - Bill No $billno \r\n";
$headers2 = "From: $websitename <no-reply@jualbelikamera.my> \r\n";
$headers2 .= "Content-type: text/html \r\n";		
$mailto=mail($to_user, $subject, $message2, $headers2);

echo "  <h3>This credit purchase is paid. </h3>";
} ;
?>    
    
    
</div>
		
<?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>