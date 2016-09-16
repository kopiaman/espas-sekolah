<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

include("include/Alumni_List_variables.php");

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
$layout->blocks["top"][] = "export";$page_layouts["Alumni_List_export"] = $layout;


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
			$keys["StudentID"] = refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
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
			$keys["StudentID"] = urldecode($arr[0]);
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

$xt->display("Alumni_List_export.htm");

function ExportToExcel_old($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=Alumni_List.xls");

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
	header("Content-Disposition: attachment;Filename=Alumni_List.doc");

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
	header("Content-Disposition: attachment;Filename=Alumni_List.xml");
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
			$values["DOB"] = $pageObject->showDBValue("DOB", $row);
			$values["ICNO"] = $pageObject->showDBValue("ICNO", $row);
			$values["Gender"] = $pageObject->showDBValue("Gender", $row);
			$values["race"] = $pageObject->showDBValue("race", $row);
			$values["Class"] = $pageObject->showDBValue("Class", $row);
			$values["DateJoin"] = $pageObject->showDBValue("DateJoin", $row);
			$values["MatricNo"] = $pageObject->showDBValue("MatricNo", $row);
			$values["Status"] = $pageObject->showDBValue("Status", $row);
			$values["Address1"] = $pageObject->showDBValue("Address1", $row);
			$values["Postcode"] = $pageObject->showDBValue("Postcode", $row);
			$values["City"] = $pageObject->showDBValue("City", $row);
			$values["StateID"] = $pageObject->showDBValue("StateID", $row);
			$values["Email"] = $pageObject->showDBValue("Email", $row);
			$values["HomeTelephone"] = $pageObject->showDBValue("HomeTelephone", $row);
			$values["Disability"] = $pageObject->showDBValue("Disability", $row);
			$values["MedicalCondition"] = $pageObject->showDBValue("MedicalCondition", $row);
			$values["f1_name"] = $pageObject->showDBValue("f1_name", $row);
			$values["f1_relation"] = $pageObject->showDBValue("f1_relation", $row);
			$values["f1_tel"] = $pageObject->showDBValue("f1_tel", $row);
			$values["f2_name"] = $pageObject->showDBValue("f2_name", $row);
			$values["f2_relation"] = $pageObject->showDBValue("f2_relation", $row);
			$values["f2_tel"] = $pageObject->showDBValue("f2_tel", $row);
		
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
	header("Content-Disposition: attachment;Filename=Alumni_List.csv");
	
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
	$outstr.= "\"DOB\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ICNO\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Gender\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"race\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Class\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"DateJoin\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"MatricNo\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Status\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Address1\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Postcode\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"City\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"StateID\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Email\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"HomeTelephone\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Disability\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"MedicalCondition\"";
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
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["Name"] = $pageObject->getViewControl("Name")->showDBValue($row, "");
			$values["DOB"] = $pageObject->getViewControl("DOB")->showDBValue($row, "");
			$values["ICNO"] = $pageObject->getViewControl("ICNO")->showDBValue($row, "");
			$values["Gender"] = $pageObject->getViewControl("Gender")->showDBValue($row, "");
			$values["race"] = $pageObject->getViewControl("race")->showDBValue($row, "");
			$values["Class"] = $pageObject->getViewControl("Class")->showDBValue($row, "");
			$values["DateJoin"] = $pageObject->getViewControl("DateJoin")->showDBValue($row, "");
			$values["MatricNo"] = $pageObject->getViewControl("MatricNo")->showDBValue($row, "");
			$values["Status"] = $pageObject->getViewControl("Status")->showDBValue($row, "");
			$values["Address1"] = $pageObject->getViewControl("Address1")->showDBValue($row, "");
			$values["Postcode"] = $pageObject->getViewControl("Postcode")->showDBValue($row, "");
			$values["City"] = $pageObject->getViewControl("City")->showDBValue($row, "");
			$values["StateID"] = $pageObject->getViewControl("StateID")->showDBValue($row, "");
			$values["Email"] = $pageObject->getViewControl("Email")->showDBValue($row, "");
			$values["HomeTelephone"] = $pageObject->getViewControl("HomeTelephone")->showDBValue($row, "");
			$values["Disability"] = $pageObject->getViewControl("Disability")->showDBValue($row, "");
			$values["MedicalCondition"] = $pageObject->getViewControl("MedicalCondition")->showDBValue($row, "");
			$values["f1_name"] = $pageObject->getViewControl("f1_name")->showDBValue($row, "");
			$values["f1_relation"] = $pageObject->getViewControl("f1_relation")->showDBValue($row, "");
			$values["f1_tel"] = $pageObject->getViewControl("f1_tel")->showDBValue($row, "");
			$values["f2_name"] = $pageObject->getViewControl("f2_name")->showDBValue($row, "");
			$values["f2_relation"] = $pageObject->getViewControl("f2_relation")->showDBValue($row, "");
			$values["f2_tel"] = $pageObject->getViewControl("f2_tel")->showDBValue($row, "");

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
			$outstr.='"'.str_replace('"', '""', $values["DOB"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ICNO"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Gender"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["race"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Class"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["DateJoin"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["MatricNo"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Status"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Address1"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Postcode"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["City"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["StateID"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Email"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["HomeTelephone"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Disability"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["MedicalCondition"]).'"';
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
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tarikh Lahir").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("IC").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Jantina").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Bangsa").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Kelas").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tarikh Masuk").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("No Dikenali").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Status").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Alamat").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Poskod").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Bandar").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Negeri").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Email").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tel Rumah").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Kecacatan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Keadan Kesihatan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("#1 Nama").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Hubungan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tel").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("#2 Nama").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Hubungan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tel").'</td>';	
	}
	else
	{
		echo "<td>"."Nama"."</td>";
		echo "<td>"."Tarikh Lahir"."</td>";
		echo "<td>"."IC"."</td>";
		echo "<td>"."Jantina"."</td>";
		echo "<td>"."Bangsa"."</td>";
		echo "<td>"."Kelas"."</td>";
		echo "<td>"."Tarikh Masuk"."</td>";
		echo "<td>"."No Dikenali"."</td>";
		echo "<td>"."Status"."</td>";
		echo "<td>"."Alamat"."</td>";
		echo "<td>"."Poskod"."</td>";
		echo "<td>"."Bandar"."</td>";
		echo "<td>"."Negeri"."</td>";
		echo "<td>"."Email"."</td>";
		echo "<td>"."Tel Rumah"."</td>";
		echo "<td>"."Kecacatan"."</td>";
		echo "<td>"."Keadan Kesihatan"."</td>";
		echo "<td>"."#1 Nama"."</td>";
		echo "<td>"."Hubungan"."</td>";
		echo "<td>"."Tel"."</td>";
		echo "<td>"."#2 Nama"."</td>";
		echo "<td>"."Hubungan"."</td>";
		echo "<td>"."Tel"."</td>";
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
					$values["DOB"] = $pageObject->getViewControl("DOB")->showDBValue($row, "");
					$values["ICNO"] = $pageObject->getViewControl("ICNO")->showDBValue($row, "");
					$values["Gender"] = $pageObject->getViewControl("Gender")->showDBValue($row, "");
					$values["race"] = $pageObject->getViewControl("race")->showDBValue($row, "");
					$values["Class"] = $pageObject->getViewControl("Class")->showDBValue($row, "");
					$values["DateJoin"] = $pageObject->getViewControl("DateJoin")->showDBValue($row, "");
					$values["MatricNo"] = $pageObject->getViewControl("MatricNo")->showDBValue($row, "");
					$values["Status"] = $pageObject->getViewControl("Status")->showDBValue($row, "");
					$values["Address1"] = $pageObject->getViewControl("Address1")->showDBValue($row, "");
					$values["Postcode"] = $pageObject->getViewControl("Postcode")->showDBValue($row, "");
					$values["City"] = $pageObject->getViewControl("City")->showDBValue($row, "");
					$values["StateID"] = $pageObject->getViewControl("StateID")->showDBValue($row, "");
					$values["Email"] = $pageObject->getViewControl("Email")->showDBValue($row, "");
					$values["HomeTelephone"] = $pageObject->getViewControl("HomeTelephone")->showDBValue($row, "");
					$values["Disability"] = $pageObject->getViewControl("Disability")->showDBValue($row, "");
					$values["MedicalCondition"] = $pageObject->getViewControl("MedicalCondition")->showDBValue($row, "");
					$values["f1_name"] = $pageObject->getViewControl("f1_name")->showDBValue($row, "");
					$values["f1_relation"] = $pageObject->getViewControl("f1_relation")->showDBValue($row, "");
					$values["f1_tel"] = $pageObject->getViewControl("f1_tel")->showDBValue($row, "");
					$values["f2_name"] = $pageObject->getViewControl("f2_name")->showDBValue($row, "");
					$values["f2_relation"] = $pageObject->getViewControl("f2_relation")->showDBValue($row, "");
					$values["f2_tel"] = $pageObject->getViewControl("f2_tel")->showDBValue($row, "");
		
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
						echo PrepareForExcel($values["DOB"]);
					else
						echo $values["DOB"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ICNO"]);
					else
						echo $values["ICNO"];
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
					echo PrepareForExcel($values["race"]);
				else
					echo $values["race"];//echo htmlspecialchars($values["race"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Class"]);
				else
					echo $values["Class"];//echo htmlspecialchars($values["Class"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["DateJoin"]);
					else
						echo $values["DateJoin"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["MatricNo"]);
					else
						echo $values["MatricNo"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Status"]);
				else
					echo $values["Status"];//echo htmlspecialchars($values["Status"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Address1"]);
					else
						echo $values["Address1"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Postcode"]);
					else
						echo $values["Postcode"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["City"]);
					else
						echo $values["City"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["StateID"]);
				else
					echo $values["StateID"];//echo htmlspecialchars($values["StateID"]); commented for bug #6823
					
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
						echo PrepareForExcel($values["HomeTelephone"]);
					else
						echo $values["HomeTelephone"];
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
						echo PrepareForExcel($values["MedicalCondition"]);
					else
						echo $values["MedicalCondition"];
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
						echo $values["f1_relation"];
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
						echo $values["f2_relation"];
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
