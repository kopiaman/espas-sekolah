<?php
$dalTablestaff_valuation = array();
$dalTablestaff_valuation["svid"] = array("type"=>3,"varname"=>"svid");
$dalTablestaff_valuation["StaffID"] = array("type"=>3,"varname"=>"StaffID");
$dalTablestaff_valuation["rate"] = array("type"=>200,"varname"=>"rate");
$dalTablestaff_valuation["sdate"] = array("type"=>7,"varname"=>"sdate");
$dalTablestaff_valuation["remark"] = array("type"=>200,"varname"=>"remark");
	$dalTablestaff_valuation["svid"]["key"]=true;
$dal_info["staff_valuation"]=&$dalTablestaff_valuation;

?>