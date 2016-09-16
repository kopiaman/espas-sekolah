<?php
$dalTablecourse = array();
$dalTablecourse["CourseID"] = array("type"=>3,"varname"=>"CourseID");
$dalTablecourse["Name"] = array("type"=>200,"varname"=>"Name");
$dalTablecourse["Code"] = array("type"=>200,"varname"=>"Code");
$dalTablecourse["Credit"] = array("type"=>3,"varname"=>"Credit");
$dalTablecourse["Unit_grade"] = array("type"=>200,"varname"=>"Unit_grade");
	$dalTablecourse["CourseID"]["key"]=true;
$dal_info["course"]=&$dalTablecourse;

?>