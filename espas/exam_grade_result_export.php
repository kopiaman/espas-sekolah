<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

include("include/exam_grade_result_variables.php");

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
$layout->blocks["top"][] = "export";$page_layouts["exam_grade_result_export"] = $layout;


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
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<0)
				continue;
			$keys = array();
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

$xt->display("exam_grade_result_export.htm");

function ExportToExcel_old($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=exam_grade_result.xls");

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
	header("Content-Disposition: attachment;Filename=exam_grade_result.doc");

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
	header("Content-Disposition: attachment;Filename=exam_grade_result.xml");
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
			$values["murid"] = $pageObject->showDBValue("murid", $row);
			$values["tahun"] = $pageObject->showDBValue("tahun", $row);
			$values["Class"] = $pageObject->showDBValue("Class", $row);
			$values["etype"] = $pageObject->showDBValue("etype", $row);
			$values["s1"] = $pageObject->showDBValue("s1", $row);
			$values["grade1"] = $pageObject->showDBValue("grade1", $row);
			$values["s2"] = $pageObject->showDBValue("s2", $row);
			$values["grade2"] = $pageObject->showDBValue("grade2", $row);
			$values["s3"] = $pageObject->showDBValue("s3", $row);
			$values["grade3"] = $pageObject->showDBValue("grade3", $row);
			$values["s4"] = $pageObject->showDBValue("s4", $row);
			$values["grade4"] = $pageObject->showDBValue("grade4", $row);
			$values["s5"] = $pageObject->showDBValue("s5", $row);
			$values["grade5"] = $pageObject->showDBValue("grade5", $row);
			$values["s8"] = $pageObject->showDBValue("s8", $row);
			$values["grade8"] = $pageObject->showDBValue("grade8", $row);
			$values["s9"] = $pageObject->showDBValue("s9", $row);
			$values["grade9"] = $pageObject->showDBValue("grade9", $row);
			$values["s6"] = $pageObject->showDBValue("s6", $row);
			$values["grade6"] = $pageObject->showDBValue("grade6", $row);
			$values["s7"] = $pageObject->showDBValue("s7", $row);
			$values["grade7"] = $pageObject->showDBValue("grade7", $row);
			$values["sum"] = $pageObject->showDBValue("sum", $row);
		
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
	header("Content-Disposition: attachment;Filename=exam_grade_result.csv");
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);

// write header
	$outstr = "";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"murid\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"tahun\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Class\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"etype\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"s1\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"grade1\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"s2\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"grade2\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"s3\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"grade3\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"s4\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"grade4\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"s5\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"grade5\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"s8\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"grade8\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"s9\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"grade9\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"s6\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"grade6\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"s7\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"grade7\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"sum\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["murid"] = $pageObject->getViewControl("murid")->showDBValue($row, "");
			$values["tahun"] = $pageObject->getViewControl("tahun")->showDBValue($row, "");
			$values["Class"] = $pageObject->getViewControl("Class")->showDBValue($row, "");
			$values["etype"] = $pageObject->getViewControl("etype")->showDBValue($row, "");
			$values["s1"] = $pageObject->getViewControl("s1")->showDBValue($row, "");
			$values["grade1"] = $pageObject->getViewControl("grade1")->showDBValue($row, "");
			$values["s2"] = $pageObject->getViewControl("s2")->showDBValue($row, "");
			$values["grade2"] = $pageObject->getViewControl("grade2")->showDBValue($row, "");
			$values["s3"] = $pageObject->getViewControl("s3")->showDBValue($row, "");
			$values["grade3"] = $pageObject->getViewControl("grade3")->showDBValue($row, "");
			$values["s4"] = $pageObject->getViewControl("s4")->showDBValue($row, "");
			$values["grade4"] = $pageObject->getViewControl("grade4")->showDBValue($row, "");
			$values["s5"] = $pageObject->getViewControl("s5")->showDBValue($row, "");
			$values["grade5"] = $pageObject->getViewControl("grade5")->showDBValue($row, "");
			$values["s8"] = $pageObject->getViewControl("s8")->showDBValue($row, "");
			$values["grade8"] = $pageObject->getViewControl("grade8")->showDBValue($row, "");
			$values["s9"] = $pageObject->getViewControl("s9")->showDBValue($row, "");
			$values["grade9"] = $pageObject->getViewControl("grade9")->showDBValue($row, "");
			$values["s6"] = $pageObject->getViewControl("s6")->showDBValue($row, "");
			$values["grade6"] = $pageObject->getViewControl("grade6")->showDBValue($row, "");
			$values["s7"] = $pageObject->getViewControl("s7")->showDBValue($row, "");
			$values["grade7"] = $pageObject->getViewControl("grade7")->showDBValue($row, "");
			$values["sum"] = $row["sum"];

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
			$outstr.='"'.str_replace('"', '""', $values["murid"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["tahun"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Class"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["etype"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["s1"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["grade1"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["s2"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["grade2"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["s3"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["grade3"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["s4"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["grade4"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["s5"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["grade5"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["s8"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["grade8"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["s9"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["grade9"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["s6"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["grade6"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["s7"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["grade7"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["sum"]).'"';
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
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Murid").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Darjah").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Kelas").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Peperiksaan").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("AL QURAN").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gred").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("AKHLAK").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gred").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("FEKAH").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gred").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("TAUHID").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gred").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("SIRAH").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gred").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("JAWI").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gred").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("KHAT").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gred").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("BH ARAB").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gred").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("TAJWID").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gred").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Sum").'</td>';	
	}
	else
	{
		echo "<td>"."Murid"."</td>";
		echo "<td>"."Darjah"."</td>";
		echo "<td>"."Kelas"."</td>";
		echo "<td>"."Peperiksaan"."</td>";
		echo "<td>"."AL QURAN"."</td>";
		echo "<td>"."Gred"."</td>";
		echo "<td>"."AKHLAK"."</td>";
		echo "<td>"."Gred"."</td>";
		echo "<td>"."FEKAH"."</td>";
		echo "<td>"."Gred"."</td>";
		echo "<td>"."TAUHID"."</td>";
		echo "<td>"."Gred"."</td>";
		echo "<td>"."SIRAH"."</td>";
		echo "<td>"."Gred"."</td>";
		echo "<td>"."JAWI"."</td>";
		echo "<td>"."Gred"."</td>";
		echo "<td>"."KHAT"."</td>";
		echo "<td>"."Gred"."</td>";
		echo "<td>"."BH ARAB"."</td>";
		echo "<td>"."Gred"."</td>";
		echo "<td>"."TAJWID"."</td>";
		echo "<td>"."Gred"."</td>";
		echo "<td>"."Sum"."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["murid"] = $pageObject->getViewControl("murid")->showDBValue($row, "");
					$values["tahun"] = $pageObject->getViewControl("tahun")->showDBValue($row, "");
					$values["Class"] = $pageObject->getViewControl("Class")->showDBValue($row, "");
					$values["etype"] = $pageObject->getViewControl("etype")->showDBValue($row, "");
					$values["s1"] = $pageObject->getViewControl("s1")->showDBValue($row, "");
					$values["grade1"] = $pageObject->getViewControl("grade1")->showDBValue($row, "");
					$values["s2"] = $pageObject->getViewControl("s2")->showDBValue($row, "");
					$values["grade2"] = $pageObject->getViewControl("grade2")->showDBValue($row, "");
					$values["s3"] = $pageObject->getViewControl("s3")->showDBValue($row, "");
					$values["grade3"] = $pageObject->getViewControl("grade3")->showDBValue($row, "");
					$values["s4"] = $pageObject->getViewControl("s4")->showDBValue($row, "");
					$values["grade4"] = $pageObject->getViewControl("grade4")->showDBValue($row, "");
					$values["s5"] = $pageObject->getViewControl("s5")->showDBValue($row, "");
					$values["grade5"] = $pageObject->getViewControl("grade5")->showDBValue($row, "");
					$values["s8"] = $pageObject->getViewControl("s8")->showDBValue($row, "");
					$values["grade8"] = $pageObject->getViewControl("grade8")->showDBValue($row, "");
					$values["s9"] = $pageObject->getViewControl("s9")->showDBValue($row, "");
					$values["grade9"] = $pageObject->getViewControl("grade9")->showDBValue($row, "");
					$values["s6"] = $pageObject->getViewControl("s6")->showDBValue($row, "");
					$values["grade6"] = $pageObject->getViewControl("grade6")->showDBValue($row, "");
					$values["s7"] = $pageObject->getViewControl("s7")->showDBValue($row, "");
					$values["grade7"] = $pageObject->getViewControl("grade7")->showDBValue($row, "");
					$values["sum"] = $pageObject->getViewControl("sum")->showDBValue($row, "");
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";
		
							echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["murid"]);
				else
					echo $values["murid"];//echo htmlspecialchars($values["murid"]); commented for bug #6823
					
			echo '</td>';
							echo '<td>';
			
									echo $values["tahun"];
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
					echo PrepareForExcel($values["etype"]);
				else
					echo $values["etype"];//echo htmlspecialchars($values["etype"]); commented for bug #6823
					
			echo '</td>';
							echo '<td>';
			
									echo $values["s1"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["grade1"]);
					else
						echo $values["grade1"];
			echo '</td>';
							echo '<td>';
			
									echo $values["s2"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["grade2"]);
					else
						echo $values["grade2"];
			echo '</td>';
							echo '<td>';
			
									echo $values["s3"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["grade3"]);
					else
						echo $values["grade3"];
			echo '</td>';
							echo '<td>';
			
									echo $values["s4"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["grade4"]);
					else
						echo $values["grade4"];
			echo '</td>';
							echo '<td>';
			
									echo $values["s5"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["grade5"]);
					else
						echo $values["grade5"];
			echo '</td>';
							echo '<td>';
			
									echo $values["s8"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["grade8"]);
					else
						echo $values["grade8"];
			echo '</td>';
							echo '<td>';
			
									echo $values["s9"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["grade9"]);
					else
						echo $values["grade9"];
			echo '</td>';
							echo '<td>';
			
									echo $values["s6"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["grade6"]);
					else
						echo $values["grade6"];
			echo '</td>';
							echo '<td>';
			
									echo $values["s7"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["grade7"]);
					else
						echo $values["grade7"];
			echo '</td>';
							echo '<td>';
			
									echo $values["sum"];
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
