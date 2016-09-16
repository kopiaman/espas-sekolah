<?php
$strTableName="exam_grade_result";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_info";

$gstrOrderBy="ORDER BY student_course.scid DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("exam_grade_result");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["exam_grade_result"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>