<html>
<body>
<?php  
/*
include_once('../include/dbcommon.php');
$conn= mysql_connect($host, $user, $pwd) or trigger_error(mysql_error); 
mysql_select_db($sys_dbname) or die(mysql_error()); 
*/
?>
<?php
//do login  
$log_id=$_POST['log_id'];
echo $log_id;
/*
$sql_at= "SELECT StudentID,MatricNo,Name FROM student_info WHERE MatricNo='$log_id'";
$query_at=mysql_query($sql_at,$conn);
$row_at=mysql_fetch_array($query_at);


$loginFoundUser = mysql_num_rows($query_at);


  echo $loginFoundUser;
  
  if ($loginFoundUser) {
	 
	//header("Location: p_student_login.php");
	echo  $alert_mod_login='<h4>Anda Berjaya Log Masuk</h4>'; 
  						}
  else if(!$loginFoundUser){ 
   echo $alert_mod_login='<h3>Anda memasuki no MyKad yang salah <br> / Tiada rekod murid  </h3>';  }


*/
?>
</body>
</html>