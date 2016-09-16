<?php
$dalTablestudent_discipline = array();
$dalTablestudent_discipline["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestudent_discipline["StudentID"] = array("type"=>3,"varname"=>"StudentID");
$dalTablestudent_discipline["Activity"] = array("type"=>200,"varname"=>"Activity");
$dalTablestudent_discipline["Level"] = array("type"=>200,"varname"=>"Level");
$dalTablestudent_discipline["Date_Committed"] = array("type"=>135,"varname"=>"Date_Committed");
$dalTablestudent_discipline["Action_Taken"] = array("type"=>200,"varname"=>"Action_Taken");
$dalTablestudent_discipline["Comment"] = array("type"=>201,"varname"=>"Comment");
	$dalTablestudent_discipline["ID"]["key"]=true;
$dal_info["student_discipline"]=&$dalTablestudent_discipline;

?>