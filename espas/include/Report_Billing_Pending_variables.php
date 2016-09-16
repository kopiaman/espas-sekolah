<?php
$strTableName="Report-Billing Pending";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_info";

$gstrOrderBy="ORDER BY student_info.StudentID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Report-Billing Pending");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Report-Billing Pending"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>