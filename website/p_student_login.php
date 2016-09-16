<?php include_once('inc_head.php') ?>
<?php
//do login
  
 $log_id = mysql_real_escape_string($_POST['log_id'],$conn);


if (isset($_POST['MM_login'])&&($_POST['MM_login']=='form_login')) {
$LoginRS__query="SELECT StudentID,MatricNo,Name FROM student_info WHERE MatricNo=$log_id";
$LoginRS = mysql_query($LoginRS__query, $conn) or die(mysql_error());
$row_login=mysql_fetch_assoc($LoginRS );
$loginFoundUser = mysql_num_rows($LoginRS);
  
  if ($loginFoundUser) {
	 
	$Name=trim_text($row_login['Name'] ,20);
	$_SESSION['MM_Name'] = $Name;
	$_SESSION['MM_Userid'] = $row_login['StudentID'];	
	header("Location: p_student_login.php");
	// $alert_mod_login='<h4>Anda Berjaya Log Masuk</h4>'; 
  						}
  else if(!$loginFoundUser){  $alert_mod_login='<h3>Anda memasuki no MyKad yang salah <br> / Tiada rekod murid  </h3>';  }
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

  <div class="sixteen columns"> <!-- sixteen colum for user main menu -->
    <?php  echo '<h4>'.$alert_mod_login.'</h4>';?>
    <!--login panel-->
    <div class="four columns alpha">

      <?php  if (!$_SESSION['MM_Userid']){ ?>
      <h4> Log In </h4>
      <div id="login_content"><!--login content toogle div open-->
        <form id="form_login" method="post">
          <label for="log_id"></label>
          <input name="log_id" type="text" id="log_id" maxlength="12"  placeholder="MyKad Pelajar"/>
          <input name="MM_login" type="hidden" id="MM_login" value="form_login" />
          <input name="submit1" type="submit" id="submit1"  value="Login" />
        </form>
      </div>
   <?php }else{ 
   echo '<h3>Anda Berjaya Log Masuk</h3>'; ; };?>
      
    </div>
    <!--login panel end-->
    
    <div class="four columns">  </div>
  <div class="four columns"> </div>
  <br class="clear" />
  </div>
  <!-- sixteen colum for user main end -->
  
  <?php include_once('inc_footer.php') ?>
</div>
<!-- container -->
</body>
</html>