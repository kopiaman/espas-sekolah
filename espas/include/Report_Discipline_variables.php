<?php
$strTableName="Report_Discipline";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_discipline";

$gstrOrderBy="ORDER BY student_discipline.ID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Report_Discipline");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Report_Discipline"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>