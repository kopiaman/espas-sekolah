<?php
$strTableName="student_info";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_info";

$gstrOrderBy="ORDER BY tahun DESC, Name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("student_info");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["student_info"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>