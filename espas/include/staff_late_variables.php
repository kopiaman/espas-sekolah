<?php
$strTableName="staff_late";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="staff_absent_late";

$gstrOrderBy="ORDER BY abdate DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("staff_late");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["staff_late"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>