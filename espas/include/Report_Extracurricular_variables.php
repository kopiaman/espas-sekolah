<?php
$strTableName="Report_Extracurricular";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_extracurricular";

$gstrOrderBy="ORDER BY student_extracurricular.ID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Report_Extracurricular");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Report_Extracurricular"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>