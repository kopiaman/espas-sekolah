<?php include_once('inc_head.php') ?>
<script type="text/javascript">
$(function() {
	$('#coder').realperson();
});
</script>
<script>
function validateForm2()
{
var x=document.forms["contactform"]["name2"].value;
if (x==null || x=="")
  {
  alert("Name must not be blank");
  return false;
  }
  
var x=document.forms["contactform"]["email2"].value;
if (x==null || x=="")
  {
  alert("Email must not be blank");
  return false;
  }  
  
var x=document.forms["contactform"]["tel2"].value;
if (x==null || x=="")
  {
  alert("Tel must not be blank");
  return false;
  }   
  
var x=document.forms["contactform"]["subject2"].value;
if (x==null || x=="")
  {
  alert("Subject must not be blank");
  return false;
  }     
  
var x=document.forms["contactform"]["message2"].value;
if (x==null || x=="")
  {
  alert("Message must not be blank");
  return false;
  }       
    
};
</script>
<style>
#error {
	color:red;
	font-size:10px;
	display:none;
}
.needsfilled {
	background:red;
	color:white;
}
</style>
<?php
//select email config
$sql_config ="SELECT * FROM campus_setting WHERE id='1'";
$q_config = mysql_query($sql_config,$conn);
$config=mysql_fetch_array($q_config);
$to2 =$config['email'];
//$to2 ='kopiaman@yahoo.com';
$websitename=$config['acronyim'];

$name2=mysql_real_escape_string($_POST['name2'],$conn);
$email2=mysql_real_escape_string($_POST['email2'],$conn);
$tel2=mysql_real_escape_string($_POST['tel2'],$conn);
$subject2=mysql_real_escape_string($_POST['subject2'],$conn);
$comment2 = mysql_real_escape_string($_POST['message2'],$conn);

$message2 ="<html><body>";
$message2 .="<p>  Message from $name2  </p> ";
$message2 .="<p>  Subject :  $subject2  </p> ";
$message2 .="<p>  Tel :  $tel2  </p> ";
$message2 .="<p>  Email :  $email2  </p> ";
$message2 .="<p>  Message : <br> $comment2  </p> ";
$message2 .= "</body></html>";
	

$subject ="". $subject2.' for '  . $websitename . "\r\n";
$headers2 = "From: " . $email2 . "\r\n";
$headers2 .= "Content-type: text/html" ."\r\n";

if (rpHash($_POST['coder']) == $_POST['coderHash']) {		
   $mailto=mail($to2, $subject, $message2, $headers2);
   if($mailto){
	$note='Mesej Berjaya Dihantar';

   } else if(!$mailto){
	$note='Mesej Tidak Berjaya Dihantar';

   };
}else if($_POST['coder']==''){$note="";		 
}else if(rpHash($_POST['coder'])!= $_POST['coderHash']) {$note="<p class='rejected'>Wrong security code</p>";
};
?> 
	<!-- Work page begins ======================================================================= -->

<div class="sixteen columns">
<h2>HUBUNGI KAMI</h2>
	<h4><?php echo $note ?></h4>
	<h3>Sebarang maklum balas/idea/komen membina amat dihargai.</h3> <p></p>
    <form id="contactform" method="post" onSubmit="validateForm2()">
    <div class="five columns alpha">
    
     <label>Nama</label><input name="name2" type="text" value="<?php echo $_POST['name2'] ?>" maxlength="25" />
     <label>Email</label><input name="email2" type="text" maxlength="50"  value="<?php echo $_POST['email2'] ?>"  />
	  <label>Tel</label><input name="tel2" type="text" maxlength="15" value="<?php echo $_POST['tel2'] ?>"  />   
    </div>
    <div class="five columns">
    
      
     <label>Subjek</label>
     <select name="subject2" id="subject2">
       <option value="Komen">Komen</option>
       <option value="Idea/Pembaikian">Idea/Pembaikian</option>
       <option value="Pujian">Pujian</option>
       <option value="Lain-Lain">Lain-Lain</option>
     </select>
     
      <label>Mesej</label><textarea name="message2" value="<?php echo $_POST['message2'] ?>" ></textarea> 
      <input type="text" id="coder" name="coder" placeholder="Please enter security code above"> 
      <input type="submit" name="c_submit" id="c_submit" value="Hantar" />
    
     </div>  
    <div class="six columns omega">
    
    <p>
    <strong><?php echo $row_set['campus_name'] ?></strong><br>
    <?php echo $row_set['address'] ?>
  <?php echo $row_set['city'] ?> ,  <?php echo $row_set['postcode'] ?><br>
 <?php echo $row_set['state'] ?>,Malaysia<br>

<strong>Tel</strong> : <?php echo $row_set['telephone'] ?> <br>
<strong>Fax</strong> : <?php echo $row_set['faxNo'] ?> <br>
<strong>Email</strong> : <?php echo $row_set['email'] ?> <br></p>

</div>
 </form>
<br class="clear" />
</div>


<!-- MAP -->
<div class="sixteen columns">
<h3>&nbsp;</h3>
<br class="clear" />
 </div>
	
  <?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>