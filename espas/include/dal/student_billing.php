<?php
$dalTablestudent_billing = array();
$dalTablestudent_billing["sid"] = array("type"=>3,"varname"=>"sid");
$dalTablestudent_billing["bid"] = array("type"=>3,"varname"=>"bid");
$dalTablestudent_billing["studentID"] = array("type"=>3,"varname"=>"studentID");
$dalTablestudent_billing["itemid"] = array("type"=>200,"varname"=>"itemid");
$dalTablestudent_billing["amount"] = array("type"=>14,"varname"=>"amount");
$dalTablestudent_billing["balance"] = array("type"=>14,"varname"=>"balance");
$dalTablestudent_billing["bill_date"] = array("type"=>7,"varname"=>"bill_date");
$dalTablestudent_billing["bill_no"] = array("type"=>200,"varname"=>"bill_no");
$dalTablestudent_billing["sstatus"] = array("type"=>200,"varname"=>"sstatus");
$dalTablestudent_billing["remarks"] = array("type"=>200,"varname"=>"remarks");
	$dalTablestudent_billing["sid"]["key"]=true;
$dal_info["student_billing"]=&$dalTablestudent_billing;

?>