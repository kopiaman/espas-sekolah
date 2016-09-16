<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

include("include/staff_info_variables.php");

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(CheckPermissionsEvent($strTableName, 'P') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Export"))
{
	echo "<p>"."Anda tidak mempunyai kebenaran untuk akses jadual ini"."<a href=\"login.php\">"."Kembali ke halaman log-masuk"."</a></p>";
	return;
}

$layout = new TLayout("export","Purific1Green1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->containers["export"] = array();

$layout->containers["export"][] = array("name"=>"exportheader","block"=>"","substyle"=>2);


$layout->containers["export"][] = array("name"=>"exprange_header","block"=>"rangeheader_block","substyle"=>3);


$layout->containers["export"][] = array("name"=>"exprange","block"=>"range_block","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expoutput_header","block"=>"","substyle"=>3);


$layout->containers["export"][] = array("name"=>"expoutput","block"=>"","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expbuttons","block"=>"","substyle"=>2);


$layout->skins["export"] = "fields";
$layout->blocks["top"][] = "export";$page_layouts["staff_info_export"] = $layout;


// Modify query: remove blob fields from fieldlist.
// Blob fields on an export page are shown using imager.php (for example).
// They don't need to be selected from DB in export.php itself.
//$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

$cipherer = new RunnerCipherer($strTableName);

$strWhereClause = "";
$strHavingClause = "";
$strSearchCriteria = "and";
$selected_recs = array();
$options = "1";

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;

$phpVersion = (int)substr(phpversion(), 0, 1); 
if($phpVersion > 4)
{
	include("include/export_functions.php");
	$xt->assign("groupExcel", true);
}
else
	$xt->assign("excel", true);

//array of params for classes
$params = array("pageType" => PAGE_EXPORT, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
if(!$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery"))
	$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

//	Before Process event
if($eventObj->exists("BeforeProcessExport"))
	$eventObj->BeforeProcessExport($conn, $pageObject);

if (@$_REQUEST["a"]!="")
{
	$options = "";
	$sWhere = "1=0";	

//	process selection
	$selected_recs = array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["ID"] = refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys = array();
			$keys["ID"] = urldecode($arr[0]);
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}


	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause = @$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause = @$_SESSION[$strTableName."_where"];
	$strHavingClause = @$_SESSION[$strTableName."_having"];
	$strSearchCriteria = @$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}

$mypage = 1;
if(@$_REQUEST["type"])
{
//	order by
	$strOrderBy = $_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy = $gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if($eventObj->exists("BeforeQueryExport"))
		$eventObj->BeforeQueryExport($strSQL,$strWhereClause,$strOrderBy, $pageObject);
//	Rebuild SQL if needed
	if($strSQL!=$strSQLbak)
	{
//	changed $strSQL - old style	
		$numrows=GetRowCount($strSQL);
	}
	else
	{
		$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
		$strSQL.=" ".trim($strOrderBy);
		$rowcount=false;
		if($eventObj->exists("ListGetRowCount"))
		{
			$masterKeysReq=array();
			for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
				$masterKeysReq[] = $_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount = $eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
		}
		if($rowcount !== false)
			$numrows = $rowcount;
		else
			$numrows = $gQuery->gSQLRowCount($strWhereClause,$strHavingClause,$strSearchCriteria);
	}
	LogInfo($strSQL);

//	 Pagination:

	$nPageSize = 0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if(!$nPageSize)
			$nPageSize = $gSettings->getInitialPageSize();
				
		if($nPageSize<0)
			$nPageSize = 0;
			
		if($nPageSize>0)
		{
			if($numrows<=($mypage-1)*$nPageSize)
				$mypage = ceil($numrows/$nPageSize);
		
			if(!$mypage)
				$mypage = 1;
			
					$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
		}
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
	{
		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		require_once getabspath('classes/orderclause.php');
		$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
		for($i = 0; $i < count($fieldList); $i++)
		{
			$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
			$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
		}
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $pageObject);
	}
	if($listarray!==false)
		$rs = $listarray;
	elseif($nPageSize>0)
	{
					$rs = db_query($strSQL,$conn);
	}
	else
		$rs = db_query($strSQL,$conn);

	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	if(substr(@$_REQUEST["type"],0,5)=="excel")
	{
//	remove grouping
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SMONGROUPING"]="0";
				if($phpVersion > 4)
			ExportToExcel($cipherer, $pageObject);
		else
			ExportToExcel_old($cipherer);
	}
	else if(@$_REQUEST["type"]=="word")
	{
		ExportToWord($cipherer);
	}
	else if(@$_REQUEST["type"]=="xml")
	{
		ExportToXML($cipherer);
	}
	else if(@$_REQUEST["type"]=="csv")
	{
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SDECIMAL"]=".";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		$locale_info["LOCALE_SMONDECIMALSEP"]=".";
		ExportToCSV($cipherer);
	}
	db_close($conn);
	return;
}

// add button events if exist
$pageObject->addButtonHandlers();

if($options)
{
	$xt->assign("rangeheader_block",true);
	$xt->assign("range_block",true);
}

$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
$pageObject->addCommonJs();

$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->display("staff_info_export.htm");

function ExportToExcel_old($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=staff_info.xls");

	echo "<html>";
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToWord($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=staff_info.doc");

	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToXML($cipherer)
{
	global $nPageSize,$rs,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: text/xml");
	header("Content-Disposition: attachment;Filename=staff_info.xml");
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);	
	//if(!$row)
	//	return;
		
	global $cCharset;
	
	echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
	echo "<table>\r\n";
	$i = 0;
	$pageObject->viewControls->forExport = "xml";
	while((!$nPageSize || $i<$nPageSize) && $row)
	{
		$values = array();
			$values["Name"] = $pageObject->showDBValue("Name", $row);
			$values["IC Number"] = $pageObject->showDBValue("IC Number", $row);
			$values["Gender"] = $pageObject->showDBValue("Gender", $row);
			$values["Race"] = $pageObject->showDBValue("Race", $row);
			$values["married"] = $pageObject->showDBValue("married", $row);
			$values["kelulusan"] = $pageObject->showDBValue("kelulusan", $row);
			$values["Mobile_Tel"] = $pageObject->showDBValue("Mobile_Tel", $row);
			$values["Email"] = $pageObject->showDBValue("Email", $row);
			$values["Address"] = $pageObject->showDBValue("Address", $row);
			$values["f1_name"] = $pageObject->showDBValue("f1_name", $row);
			$values["f1_relation"] = $pageObject->showDBValue("f1_relation", $row);
			$values["f1_tel"] = $pageObject->showDBValue("f1_tel", $row);
			$values["f2_name"] = $pageObject->showDBValue("f2_name", $row);
			$values["f2_relation"] = $pageObject->showDBValue("f2_relation", $row);
			$values["f2_tel"] = $pageObject->showDBValue("f2_tel", $row);
			$values["sstatus"] = $pageObject->showDBValue("sstatus", $row);
			$values["StaffNo"] = $pageObject->showDBValue("StaffNo", $row);
			$values["Job_Sesi"] = $pageObject->showDBValue("Job_Sesi", $row);
			$values["Job_Type"] = $pageObject->showDBValue("Job_Type", $row);
			$values["Job_Title"] = $pageObject->showDBValue("Job_Title", $row);
			$values["Grade"] = $pageObject->showDBValue("Grade", $row);
			$values["Elaun"] = $pageObject->showDBValue("Elaun", $row);
			$values["Join_Date"] = $pageObject->showDBValue("Join_Date", $row);
			$values["End_Date"] = $pageObject->showDBValue("End_Date", $row);
			$values["Gerak_Date"] = $pageObject->showDBValue("Gerak_Date", $row);
			$values["course_main"] = $pageObject->showDBValue("course_main", $row);
			$values["course_opsyen"] = $pageObject->showDBValue("course_opsyen", $row);
			$values["bank1"] = $pageObject->showDBValue("bank1", $row);
			$values["epf"] = $pageObject->showDBValue("epf", $row);
			$values["Disability"] = $pageObject->showDBValue("Disability", $row);
			$values["Medical_condition"] = $pageObject->showDBValue("Medical_condition", $row);
			$values["blood"] = $pageObject->showDBValue("blood", $row);
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		
		if ($eventRes)
		{
			$i++;
			echo "<row>\r\n";
			foreach ($values as $fName => $val)
			{
				$field = htmlspecialchars(XMLNameEncode($fName));
				echo "<".$field.">";
				echo $values[$fName];
				echo "</".$field.">\r\n";
			}
			echo "</row>\r\n";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	echo "</table>\r\n";
}

function ExportToCSV($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=staff_info.csv");
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);

// write header
	$outstr = "";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"IC Number\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Gender\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Race\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"married\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"kelulusan\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Mobile_Tel\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Email\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Address\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"f1_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"f1_relation\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"f1_tel\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"f2_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"f2_relation\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"f2_tel\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"sstatus\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"StaffNo\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Job_Sesi\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Job_Type\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Job_Title\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Grade\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Elaun\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Join_Date\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"End_Date\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Gerak_Date\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"course_main\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"course_opsyen\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"bank1\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"epf\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Disability\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Medical_condition\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"blood\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["Name"] = $pageObject->getViewControl("Name")->showDBValue($row, "");
			$values["IC Number"] = $pageObject->getViewControl("IC Number")->showDBValue($row, "");
			$values["Gender"] = $pageObject->getViewControl("Gender")->showDBValue($row, "");
			$values["Race"] = $pageObject->getViewControl("Race")->showDBValue($row, "");
			$values["married"] = $pageObject->getViewControl("married")->showDBValue($row, "");
			$values["kelulusan"] = $pageObject->getViewControl("kelulusan")->showDBValue($row, "");
			$values["Mobile_Tel"] = $pageObject->getViewControl("Mobile_Tel")->showDBValue($row, "");
			$values["Email"] = $pageObject->getViewControl("Email")->showDBValue($row, "");
			$values["Address"] = $pageObject->getViewControl("Address")->showDBValue($row, "");
			$values["f1_name"] = $pageObject->getViewControl("f1_name")->showDBValue($row, "");
			$values["f1_relation"] = $pageObject->getViewControl("f1_relation")->showDBValue($row, "");
			$values["f1_tel"] = $pageObject->getViewControl("f1_tel")->showDBValue($row, "");
			$values["f2_name"] = $pageObject->getViewControl("f2_name")->showDBValue($row, "");
			$values["f2_relation"] = $pageObject->getViewControl("f2_relation")->showDBValue($row, "");
			$values["f2_tel"] = $pageObject->getViewControl("f2_tel")->showDBValue($row, "");
			$values["sstatus"] = $pageObject->getViewControl("sstatus")->showDBValue($row, "");
			$values["StaffNo"] = $pageObject->getViewControl("StaffNo")->showDBValue($row, "");
			$values["Job_Sesi"] = $pageObject->getViewControl("Job_Sesi")->showDBValue($row, "");
			$values["Job_Type"] = $pageObject->getViewControl("Job_Type")->showDBValue($row, "");
			$values["Job_Title"] = $pageObject->getViewControl("Job_Title")->showDBValue($row, "");
			$values["Grade"] = $pageObject->getViewControl("Grade")->showDBValue($row, "");
			$values["Elaun"] = $pageObject->getViewControl("Elaun")->showDBValue($row, "");
			$values["Join_Date"] = $pageObject->getViewControl("Join_Date")->showDBValue($row, "");
			$values["End_Date"] = $pageObject->getViewControl("End_Date")->showDBValue($row, "");
			$values["Gerak_Date"] = $pageObject->getViewControl("Gerak_Date")->showDBValue($row, "");
			$values["course_main"] = $pageObject->getViewControl("course_main")->showDBValue($row, "");
			$values["course_opsyen"] = $pageObject->getViewControl("course_opsyen")->showDBValue($row, "");
			$values["bank1"] = $pageObject->getViewControl("bank1")->showDBValue($row, "");
			$values["epf"] = $pageObject->getViewControl("epf")->showDBValue($row, "");
			$values["Disability"] = $pageObject->getViewControl("Disability")->showDBValue($row, "");
			$values["Medical_condition"] = $pageObject->getViewControl("Medical_condition")->showDBValue($row, "");
			$values["blood"] = $pageObject->getViewControl("blood")->showDBValue($row, "");

		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row,$values, $pageObject);
		}
		if ($eventRes)
		{
			$outstr="";
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["IC Number"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Gender"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Race"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["married"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["kelulusan"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Mobile_Tel"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Email"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Address"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["f1_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["f1_relation"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["f1_tel"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["f2_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["f2_relation"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["f2_tel"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["sstatus"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["StaffNo"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Job_Sesi"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Job_Type"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Job_Title"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Grade"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Elaun"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Join_Date"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["End_Date"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Gerak_Date"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["course_main"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["course_opsyen"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["bank1"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["epf"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Disability"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Medical_condition"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["blood"]).'"';
			echo $outstr;
		}
		
		$iNumberOfRows++;
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
			
		if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
			echo "\r\n";
	}
}

function WriteTableData($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);
//	if(!$row)
//		return;
// write header
	echo "<tr>";
	if($_REQUEST["type"]=="excel")
	{
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Nama").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("K/P Baru").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Jantina").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Bangsa").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Status Perkahwinan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Kelulusan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tel HP").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Email").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Alamat").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Nama Waris 1").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Hubungan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tel").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Nama Waris 2").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Hubungan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tel").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Status").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("No Staf").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Sesi").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Jenis Pekerjaan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Nama Pekerjaan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gred Pekerjaan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Elaun ( Untuk Gred KAFA & RAKYAT)").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tarikh Lantikan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tarikh Berhenti/Bersara").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tarikh Pergerakan Gaji").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Mata Pelajaran Utama").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Mata Pelajaran Opsyen").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Nama Bank 1 & No Akaun").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("KWSP").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Kecacatan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Keadan Kesihatan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Jenis Darah").'</td>';	
	}
	else
	{
		echo "<td>"."Nama"."</td>";
		echo "<td>"."K/P Baru"."</td>";
		echo "<td>"."Jantina"."</td>";
		echo "<td>"."Bangsa"."</td>";
		echo "<td>"."Status Perkahwinan"."</td>";
		echo "<td>"."Kelulusan"."</td>";
		echo "<td>"."Tel HP"."</td>";
		echo "<td>"."Email"."</td>";
		echo "<td>"."Alamat"."</td>";
		echo "<td>"."Nama Waris 1"."</td>";
		echo "<td>"."Hubungan"."</td>";
		echo "<td>"."Tel"."</td>";
		echo "<td>"."Nama Waris 2"."</td>";
		echo "<td>"."Hubungan"."</td>";
		echo "<td>"."Tel"."</td>";
		echo "<td>"."Status"."</td>";
		echo "<td>"."No Staf"."</td>";
		echo "<td>"."Sesi"."</td>";
		echo "<td>"."Jenis Pekerjaan"."</td>";
		echo "<td>"."Nama Pekerjaan"."</td>";
		echo "<td>"."Gred Pekerjaan"."</td>";
		echo "<td>"."Elaun ( Untuk Gred KAFA & RAKYAT)"."</td>";
		echo "<td>"."Tarikh Lantikan"."</td>";
		echo "<td>"."Tarikh Berhenti/Bersara"."</td>";
		echo "<td>"."Tarikh Pergerakan Gaji"."</td>";
		echo "<td>"."Mata Pelajaran Utama"."</td>";
		echo "<td>"."Mata Pelajaran Opsyen"."</td>";
		echo "<td>"."Nama Bank 1 & No Akaun"."</td>";
		echo "<td>"."KWSP"."</td>";
		echo "<td>"."Kecacatan"."</td>";
		echo "<td>"."Keadan Kesihatan"."</td>";
		echo "<td>"."Jenis Darah"."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["Name"] = $pageObject->getViewControl("Name")->showDBValue($row, "");
					$values["IC Number"] = $pageObject->getViewControl("IC Number")->showDBValue($row, "");
					$values["Gender"] = $pageObject->getViewControl("Gender")->showDBValue($row, "");
					$values["Race"] = $pageObject->getViewControl("Race")->showDBValue($row, "");
					$values["married"] = $pageObject->getViewControl("married")->showDBValue($row, "");
					$values["kelulusan"] = $pageObject->getViewControl("kelulusan")->showDBValue($row, "");
					$values["Mobile_Tel"] = $pageObject->getViewControl("Mobile_Tel")->showDBValue($row, "");
					$values["Email"] = $pageObject->getViewControl("Email")->showDBValue($row, "");
					$values["Address"] = $pageObject->getViewControl("Address")->showDBValue($row, "");
					$values["f1_name"] = $pageObject->getViewControl("f1_name")->showDBValue($row, "");
					$values["f1_relation"] = $pageObject->getViewControl("f1_relation")->showDBValue($row, "");
					$values["f1_tel"] = $pageObject->getViewControl("f1_tel")->showDBValue($row, "");
					$values["f2_name"] = $pageObject->getViewControl("f2_name")->showDBValue($row, "");
					$values["f2_relation"] = $pageObject->getViewControl("f2_relation")->showDBValue($row, "");
					$values["f2_tel"] = $pageObject->getViewControl("f2_tel")->showDBValue($row, "");
					$values["sstatus"] = $pageObject->getViewControl("sstatus")->showDBValue($row, "");
					$values["StaffNo"] = $pageObject->getViewControl("StaffNo")->showDBValue($row, "");
					$values["Job_Sesi"] = $pageObject->getViewControl("Job_Sesi")->showDBValue($row, "");
					$values["Job_Type"] = $pageObject->getViewControl("Job_Type")->showDBValue($row, "");
					$values["Job_Title"] = $pageObject->getViewControl("Job_Title")->showDBValue($row, "");
					$values["Grade"] = $pageObject->getViewControl("Grade")->showDBValue($row, "");
					$values["Elaun"] = $pageObject->getViewControl("Elaun")->showDBValue($row, "");
					$values["Join_Date"] = $pageObject->getViewControl("Join_Date")->showDBValue($row, "");
					$values["End_Date"] = $pageObject->getViewControl("End_Date")->showDBValue($row, "");
					$values["Gerak_Date"] = $pageObject->getViewControl("Gerak_Date")->showDBValue($row, "");
					$values["course_main"] = $pageObject->getViewControl("course_main")->showDBValue($row, "");
					$values["course_opsyen"] = $pageObject->getViewControl("course_opsyen")->showDBValue($row, "");
					$values["bank1"] = $pageObject->getViewControl("bank1")->showDBValue($row, "");
					$values["epf"] = $pageObject->getViewControl("epf")->showDBValue($row, "");
					$values["Disability"] = $pageObject->getViewControl("Disability")->showDBValue($row, "");
					$values["Medical_condition"] = $pageObject->getViewControl("Medical_condition")->showDBValue($row, "");
					$values["blood"] = $pageObject->getViewControl("blood")->showDBValue($row, "");
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";
		
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Name"]);
					else
						echo $values["Name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["IC Number"]);
					else
						echo $values["IC Number"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Gender"]);
					else
						echo $values["Gender"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Race"]);
				else
					echo $values["Race"];//echo htmlspecialchars($values["Race"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["married"]);
					else
						echo $values["married"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["kelulusan"]);
					else
						echo $values["kelulusan"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Mobile_Tel"]);
					else
						echo $values["Mobile_Tel"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Email"]);
					else
						echo $values["Email"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Address"]);
					else
						echo $values["Address"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["f1_name"]);
					else
						echo $values["f1_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["f1_relation"]);
				else
					echo $values["f1_relation"];//echo htmlspecialchars($values["f1_relation"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["f1_tel"]);
					else
						echo $values["f1_tel"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["f2_name"]);
					else
						echo $values["f2_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["f2_relation"]);
				else
					echo $values["f2_relation"];//echo htmlspecialchars($values["f2_relation"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["f2_tel"]);
					else
						echo $values["f2_tel"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["sstatus"]);
					else
						echo $values["sstatus"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["StaffNo"]);
					else
						echo $values["StaffNo"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Job_Sesi"]);
					else
						echo $values["Job_Sesi"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Job_Type"]);
					else
						echo $values["Job_Type"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Job_Title"]);
				else
					echo $values["Job_Title"];//echo htmlspecialchars($values["Job_Title"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Grade"]);
				else
					echo $values["Grade"];//echo htmlspecialchars($values["Grade"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Elaun"]);
				else
					echo $values["Elaun"];//echo htmlspecialchars($values["Elaun"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Join_Date"]);
					else
						echo $values["Join_Date"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["End_Date"]);
					else
						echo $values["End_Date"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Gerak_Date"]);
					else
						echo $values["Gerak_Date"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["course_main"]);
				else
					echo $values["course_main"];//echo htmlspecialchars($values["course_main"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["course_opsyen"]);
				else
					echo $values["course_opsyen"];//echo htmlspecialchars($values["course_opsyen"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["bank1"]);
					else
						echo $values["bank1"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["epf"]);
					else
						echo $values["epf"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Disability"]);
					else
						echo $values["Disability"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Medical_condition"]);
					else
						echo $values["Medical_condition"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["blood"]);
					else
						echo $values["blood"];
			echo '</td>';
			echo "</tr>";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	
}

function XMLNameEncode($strValue)
{
	$search = array(" ","#","'","/","\\","(",")",",","[");
	$ret = str_replace($search,"",$strValue);
	$search = array("]","+","\"","-","_","|","}","{","=");
	$ret = str_replace($search,"",$ret);
	return $ret;
}

function PrepareForExcel($ret)
{
	//$ret = htmlspecialchars($str); commented for bug #6823
	if (substr($ret,0,1)== "=") 
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals, $totalsFields, $data)
{
	for($i = 0; $i < count($totalsFields); $i ++) 
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT') 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time") 
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']]["value"] += $time[2]+$time[1]*60 + $time[0]*3600;
		} 
		else 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]+ 0);
		
		if($totalsFields[$i]['totalsType'] == 'AVERAGE')
		{
			if(!is_null($data[$totalsFields[$i]['fName']]) && $data[$totalsFields[$i]['fName']]!=="")
				$totals[$totalsFields[$i]['fName']]['numRows']++;
		}
	}
}
?>
