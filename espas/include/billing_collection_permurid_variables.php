<?php
$strTableName="billing_collection_permurid";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_billing";

$gstrOrderBy="ORDER BY student_info.Name ASC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("billing_collection_permurid");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["billing_collection_permurid"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>