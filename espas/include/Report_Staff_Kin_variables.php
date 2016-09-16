<?php
$strTableName="Report_Staff_Kin";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="staff_info";

$gstrOrderBy="ORDER BY ID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Report_Staff_Kin");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Report_Staff_Kin"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>