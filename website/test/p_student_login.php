<?php include_once('inc_head.php') ?>
  <script type="text/javascript">
$(function() {
	$('#regis').realperson();
});
</script> 
  <script src="js/validation.js"></script> 
  <script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    };
	
//validation for reset password
function validateForm()
{ var x=document.forms["reset_password"]["username3"].value;
if (x==null || x=="")
  {
  alert("This username cannot be blank!");
  return false;
  }
    
};
//-->
</script>
  <style>
#error {color:red;font-size:10px;display:none;}
.needsfilled {background:red;color:white;}
</style>
  <?php
//declare username & password
 
  $StudentID=$_POST['reg_matric'];
  $ProgramID=$_POST['reg_program'];
  $BatchID=sprintf("%02s",$_POST['reg_batch']);
  $Email=$_POST['reg_email'];

//do login

 $log_id = mysql_real_escape_string($_POST['log_id'],$conn);
 $logpassword=md5($_POST['log_pass']);
 $log_pass = mysql_real_escape_string($logpassword,$conn); 

if (isset($_POST['MM_login'])&&($_POST['MM_login']=='form_login')) {
$LoginRS__query="SELECT StudentID,Passw FROM student_info WHERE StudentID='$log_id' AND Passw='$log_pass' AND Access='Yes'";
$LoginRS = mysql_query($LoginRS__query, $conn) or die(mysql_error());
$row_login=mysql_fetch_assoc($LoginRS );
$loginFoundUser = mysql_num_rows($LoginRS);
  
  if ($loginFoundUser) {
	 
	$_SESSION['MM_Userid'] = $row_login['StudentID'];	
	//header("Location: p_student_login.php");
	echo $alert_mod_login='<h4>Succesful login</h4>'; 
	
  						}
  else if(!$loginFoundUser){ echo $alert_mod_login='<h4>You have to register <br> / Wrong password/ username </h4>';  }
}else{};

//do change password
if (isset($_POST['MM_change'])&&($_POST['MM_change']=='form_change')) {
	$newpass=md5($_POST['pass_new']);
	$newpass2=md5($_POST['pass_new2']);
	if($newpass==$newpass2){
    $sql_update_pass="UPDATE student_info SET Passw='$newpass' WHERE StudentID='$_SESSION[MM_Userid]' ";
	mysql_query($sql_update_pass,$conn);
	 echo $alert_mod_login='<h4>Your password have been changed!</h4>'; 
	}else{ echo $alert_mod_login='<h4>New Password is not matching!</h4>'; };
}else{};

?>
  <?php
		//config of website for registeration
		$sql_config = "SELECT
		acronyim,campus_name,address,city,postcode,state,faxNo AS fax,telephone AS tel ,email,url
		FROM campus_setting WHERE id =1";
		$q_config = mysql_query($sql_config,$conn);
		$config=mysql_fetch_array($q_config);

?>
<?php
//register action	

$sql_program= "SELECT ID,shortcut_name FROM program ";
$query_program=mysql_query($sql_program,$conn);
$row_program=mysql_fetch_assoc($query_program);

// if ((isset($_POST["MM_register"])) && ($_POST["MM_register"]=="form_register")) {
if (rpHash($_POST['regis']) == $_POST['regisHash']) {		   
	
		$sql_mem = "SELECT StudentID,DipID FROM student_info WHERE StudentID='$StudentID' AND DipID='$ProgramID' AND BatchID='$BatchID' AND Access='No'";
		$q_mem = mysql_query($sql_mem,$conn);
		$row_qmem=mysql_fetch_array($q_mem);
		$Access=$row_qmem['Access'];
		$num_rows_mem = mysql_num_rows($q_mem);

		//check if same username exist or not
		if ($num_rows_mem==1){  
		$_SESSION['MM_StudentID'] = $StudentID; 
		
		$StudentID_code=sprintf("%04s",$StudentID);$ProgramID_code=sprintf("%02s",$ProgramID); 
		
		$temp_password=md5($ProgramID_code.$StudentID_code.$BatchID);
		$sql_up= "UPDATE student_info SET Passw ='$temp_password' , Access='Yes' , Email='$Email' WHERE StudentID='$StudentID' ";
		$query_up=mysql_query($sql_up,$conn);

		//send email of registeration
		$websitename=$config['url'];	
		$header = 'From:'.$config['acronyim'].'<no-reply@mataaviation.my>';
		$subject = 'Succesful Registeration at '.$config['url'];
		$to3 =$email;
        $message='

        Thank you for your registeration at '.$websitename.'

        Temporary Password : '.$ProgramID_code.$StudentID_code.$BatchID.'

   		 ';  
  		// mail($to3, $subject, $message, $header);
	     $alert_mod_login='<h3>Succesful Registeration</h3>';
		// header("Location: p_student_login.php");
		} else {
		 $alert_mod_login='<h3>Error: 1) You already registered or <br> 2) Matric ID , Program and Batch not match. <br>Please try login again or contact administrator.</h3>'; 
		};

}else if($_POST['regis']==''){$alert_mod_login="";		 
}else if(rpHash($_POST['regis'])!= $_POST['regisHash']) {$alert_mod_login="<p class='rejected'>Wrong security code</p>";
};
?>
<?php
//email reset
$res_id = mysql_real_escape_string($_POST['res_id'],$conn);	
$res_batchs = mysql_real_escape_string($_POST['res_batch'],$conn);
$res_batch=sprintf("%02s",$res_batchs);
$res_program = mysql_real_escape_string($_POST['res_program'],$conn);	
			
$sql_program2= "SELECT ID,shortcut_name FROM program ";
$query_program2=mysql_query($sql_program2,$conn);
$row_program2=mysql_fetch_assoc($query_program2);			
			
if ((isset($_POST["res_id"])) && ($_POST["res_id"] !="")) 
{
	
	$sql_mem = "SELECT StudentID,DipID,Email FROM student_info WHERE StudentID='$res_id' AND DipID='$res_program' 
	AND BatchID='$res_batch' AND Access='Yes'";
	$q_mem = mysql_query($sql_mem,$conn);
	$row_qmem=mysql_fetch_array($q_mem);
	$num_rows_mem = mysql_num_rows($q_mem);
	
	//check if the username exist or not
	if ($num_rows_mem==1)
	{  
		$StudentID_code=sprintf("%04s",$res_id);$ProgramID_code=sprintf("%02s",$res_program);
		$BatchID_code=sprintf("%02s",$res_batch);
		$temp_password=md5($ProgramID_code.$StudentID_code.$BatchID_code);
		
		//reset default password to abc123 using md5
		$sql_reset="UPDATE student_info SET Passw='$temp_password' WHERE StudentID ='$res_id'";
		mysql_query($sql_reset,$conn); 
		
        $header = 'From:'.$config['email'];
		$subject = 'Temporary password at '.$config['url'];
		$to =$row_qmem['Email'];

	
		$message = '
			
			Your password have been reset.
            
            TEMPORARY PASSWORD : '.$ProgramID_code.$StudentID_code.$BatchID_code.'
          
		    You can change password by LOGIN using temporary password then click at PASSWORD menu

			-----------------------------
			'.$config['acronyim'].'

         ';  

        //mail($to, $subject, $message, $header);
	   $alert_mod_login='Your password have been reset. Please check your email .Please check in INBOX/SPAM folder'; 
	  } else {
		 $alert_mod_login='ERROR: Cannot reset password. Please make sure the matricID & batch and program is correct.'; 
	   };

}
else { };
?>
  <div class="sixteen columns"> <!-- sixteen colum for user main menu -->
    <?php  echo '<h4>'.$alert_mod_login.'</h4>';?>
    <!--login panel-->
    <div class="four columns alpha">
      <?php 
if (!isset($_SESSION['MM_Userid'])) { ?>
      <h4><a href="#" onclick="toggle_visibility('login_content')"><img src="images/ico_pass.png" width="16" height="16" border="0" /> Log In</a> </h4>
      <?php }; ?>
      <div id="login_content" style="display:none"><!--login content toogle div open-->
        <form id="form_login" method="post">
          <label for="log_id"></label>
          <input name="log_id" type="text" id="log_id" maxlength="6"  placeholder="Matric ID (last 4 digit) " />
          <input name="log_pass" type="password" id="log_pass" maxlength="100"  placeholder=" password " />
          <input name="MM_login" type="hidden" id="MM_login" value="form_login" />
          <input name="submit1" type="submit" id="submit1"  value="Login" />
        </form>
      </div>
      <!--login content toogle div end--> 
      <!--change password div open-->
      <?php 
if (isset($_SESSION['MM_Userid'])) { ?>
      <h4><a href="#"  onclick="toggle_visibility('cp_content')"><img src="images/ico_login.png" width="16" height="16" border="0" /> Change Password</a></h4>
      <?php }; ?>
      <div id="cp_content" style="display:none"> <!--change password div open-->
        <form id="form_change" method="post">
          <input name="pass_new" type="text" id="pass_new"  placeholder="New password " />
           <input name="pass_new2" type="text" id="pass_new2"  placeholder="Confirm New Password" />
          <input name="submit2" type="submit" id="submit2"  value="Change Password" />
          <input name="MM_change" type="hidden" id="MM_change" value="form_change" />
        </form>
      </div>
      <!--change password div end--> 
      
    </div>
    <!--login panel end-->
    
    <div class="four columns"> <!--registeration panel open-->
      
      <h4> <a href="#" onclick="toggle_visibility('reg_content')"><img src="images/ico_users.gif" width="17" height="14" border="0" /> Register</a></h4>
      <div id="reg_content" style="display:none">
        <form id="form_register" method="post" >
         
          <input name="reg_matric" type="text" id="reg_matric" maxlength="6"  placeholder="Matric ID (last 4 digit)"/>
          <input name="reg_batch" type="text" id="reg_batch" maxlength="3"  placeholder="Batch No" />
<label for="reg_batch"></label>
          <select name="reg_program" id="reg_program">
            <option value="">Please Select Your Program</option>
            <?php do{ ?>
            <option value="<?php echo $row_program2['ID'] ?>"><?php echo $row_program2['shortcut_name'] ?></option>
            <?php }while($row_program2=mysql_fetch_assoc($query_program2)); ?>
          </select>
          <label for="reg_email"></label>
          <input name="reg_email" type="text" id="reg_email" maxlength="150"  placeholder="*Email" />
          <label for="tel"></label>
          <input type="text" id="regis" name="regis" placeholder="Please enter security code above">
          <input name="submit" type="submit" id="submit"  value="Register" />
          </p>
          <input name="MM_register" type="hidden" id="MM_register" value="form_register" />
        </form>
      </div>
    </div>
    <!--registeration panel end-->
    
    <div class="four columns"> <!--forgot password panel open-->
      <?php
     if (!isset($_SESSION['MM_Userid'])) { ?>
      <h4> <a href="#" onclick="toggle_visibility('div_resetpassword')"> <img src="images/ico_reset.png" width="16" height="16" border="0" /> Forgot Password</a></h4>
      <?php }; ?>
      <div id="div_resetpassword" style="display:none">
        <form id="reset_password" method="post" onsubmit="validateForm()">
        
          <input name="res_id" type="text" id="res_id"  placeholder="Matric ID (last 4 digit)" />
          <input name="res_batch" type="text" id="res_batch"  placeholder="Batch" />
         
            <select name="res_program" id="res_program">
            <option value="">Please Select Your Program</option>
            <?php do{ ?>
            <option value="<?php echo $row_program['ID'] ?>"><?php echo $row_program['shortcut_name'] ?></option>
            <?php }while($row_program=mysql_fetch_assoc($query_program)); ?>
          </select>
          <input name="submit3" type="submit" id="submit3"  value="Reset Password" />
          <input name="MM_reset" type="hidden" id="MM_reset" value="form_reset" />
        </form>
      </div>
    </div>
    <!--forgot password panel end--> 
    
    <br class="clear" />
  </div>
  <!-- sixteen colum for user main end -->
  
  <?php include_once('inc_footer.php') ?>
</div>
<!-- container -->
</body>
</html>