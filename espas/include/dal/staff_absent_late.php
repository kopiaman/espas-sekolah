<?php
$dalTablestaff_absent_late = array();
$dalTablestaff_absent_late["abid"] = array("type"=>3,"varname"=>"abid");
$dalTablestaff_absent_late["StaffID"] = array("type"=>3,"varname"=>"StaffID");
$dalTablestaff_absent_late["abdate"] = array("type"=>7,"varname"=>"abdate");
$dalTablestaff_absent_late["reason"] = array("type"=>200,"varname"=>"reason");
$dalTablestaff_absent_late["note"] = array("type"=>200,"varname"=>"note");
$dalTablestaff_absent_late["late"] = array("type"=>200,"varname"=>"late");
	$dalTablestaff_absent_late["abid"]["key"]=true;
$dal_info["staff_absent_late"]=&$dalTablestaff_absent_late;

?>