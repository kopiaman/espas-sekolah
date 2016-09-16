<?php
$strTableName="student_billing";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_billing";

$gstrOrderBy="ORDER BY student_info.Name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("student_billing");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["student_billing"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>