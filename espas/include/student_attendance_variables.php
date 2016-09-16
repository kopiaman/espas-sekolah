<?php
$strTableName="student_attendance";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_attendance";

$gstrOrderBy="ORDER BY tahun DESC, Name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("student_attendance");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["student_attendance"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>