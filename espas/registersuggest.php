<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("include/user_variables.php");
require_once(getabspath("classes/cipherer.php"));
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

$result = array(); 
$cipherer = new RunnerCipherer("user");
$t_captcha="";
$email="";
$password="";
$userName="";
$field = postvalue('field');
$val = postvalue('val');
if($field == "username")
	$userName = $val;
else if($field == "pass")
	$password = $val;
else if($field == "")
	$email = $val;
else if($field == 'captcha')
	$t_captcha = $val;


if($cipherer->isFieldEncrypted("username"))
	$sUsername = $cipherer->MakeDBValue("username",$userName);	
else 
	$sUsername = add_db_quotes("username",$userName);

if($cipherer->isFieldEncrypted(""))
	$sEmail = $cipherer->MakeDBValue("",$email);	
else 
	$sEmail = add_db_quotes("",$email);	
	

//	check if entered username already exists
if(strlen($userName))
{
	$strSQL="select count(*) from `user` where ".GetFullFieldName("`username`",$strTableName,false)."=".$sUsername;
   	$rs=db_query($strSQL,$conn);
	$data=db_fetch_numarray($rs);
	if($data[0]>0)
		$result[] = "Nama Pengguna "." <i>".$userName."</i> "."sudah wujud. Pilih nama lain.";
}



echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => count($result) > 0 ? false : true
	, 'errors' => implode('. ', $result))))."</textarea>";
?>