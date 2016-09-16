<?php
$dalTablestudent_payment = array();
$dalTablestudent_payment["pay_id"] = array("type"=>3,"varname"=>"pay_id");
$dalTablestudent_payment["sid"] = array("type"=>3,"varname"=>"sid");
$dalTablestudent_payment["amount"] = array("type"=>14,"varname"=>"amount");
$dalTablestudent_payment["pay_date"] = array("type"=>200,"varname"=>"pay_date");
$dalTablestudent_payment["terms"] = array("type"=>200,"varname"=>"terms");
$dalTablestudent_payment["ref_no"] = array("type"=>200,"varname"=>"ref_no");
	$dalTablestudent_payment["pay_id"]["key"]=true;
$dal_info["student_payment"]=&$dalTablestudent_payment;

?>