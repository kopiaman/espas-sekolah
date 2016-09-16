<?php
$dalTablestaff_qualification = array();
$dalTablestaff_qualification["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestaff_qualification["StaffID"] = array("type"=>3,"varname"=>"StaffID");
$dalTablestaff_qualification["Institution"] = array("type"=>200,"varname"=>"Institution");
$dalTablestaff_qualification["YearGrad"] = array("type"=>200,"varname"=>"YearGrad");
$dalTablestaff_qualification["EducationType"] = array("type"=>200,"varname"=>"EducationType");
$dalTablestaff_qualification["Major"] = array("type"=>200,"varname"=>"Major");
$dalTablestaff_qualification["Grade_CGPA"] = array("type"=>200,"varname"=>"Grade_CGPA");
	$dalTablestaff_qualification["ID"]["key"]=true;
$dal_info["staff_qualification"]=&$dalTablestaff_qualification;

?>