<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/student_attendance_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

global $globalEvents;

//	check if logged in
if(@$_SESSION["UserID"] && IsAdmin() && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{
	echo "<p>"."Anda tidak mempunyai kebenaran untuk akses jadual ini"."<br>Proceed to <a href=\"admin.php\">Admin Area</a> to set up user permissions</p>";
	return;
}
if(!isLogged() || CheckPermissionsEvent($strTableName, 'A') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	
	header("Location: login.php?message=expired"); 
	return;
}

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;



$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "student_attendance_inline_add.htm";
else
	$templatefile = "student_attendance_add.htm";

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);


$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['locale_info'] = $locale_info;
$params['includes_css'] = $includes_css;
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['includes_jsreq'] = $includes_jsreq;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);

if(isset($_REQUEST['afteradd'])){
		header('Location: student_attendance_add.php');
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit;
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE || $inlineadd == ADD_ONTHEFLY)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
		$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn, $pageObject);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing StudentID - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_StudentID = $pageObject->getControl("StudentID", $id);
		$control_StudentID->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing StudentID - end
//	processing amonth - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_amonth = $pageObject->getControl("amonth", $id);
		$control_amonth->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing amonth - end
//	processing ayear - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_ayear = $pageObject->getControl("ayear", $id);
		$control_ayear->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ayear - end
//	processing 1 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_1 = $pageObject->getControl("1", $id);
		$control_1->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 1 - end
//	processing 2 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_2 = $pageObject->getControl("2", $id);
		$control_2->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 2 - end
//	processing 3 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_3 = $pageObject->getControl("3", $id);
		$control_3->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 3 - end
//	processing 4 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_4 = $pageObject->getControl("4", $id);
		$control_4->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 4 - end
//	processing 5 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_5 = $pageObject->getControl("5", $id);
		$control_5->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 5 - end
//	processing 6 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_6 = $pageObject->getControl("6", $id);
		$control_6->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 6 - end
//	processing 7 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_7 = $pageObject->getControl("7", $id);
		$control_7->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 7 - end
//	processing 8 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_8 = $pageObject->getControl("8", $id);
		$control_8->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 8 - end
//	processing 9 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_9 = $pageObject->getControl("9", $id);
		$control_9->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 9 - end
//	processing 10 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_10 = $pageObject->getControl("10", $id);
		$control_10->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 10 - end
//	processing 11 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_11 = $pageObject->getControl("11", $id);
		$control_11->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 11 - end
//	processing 12 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_12 = $pageObject->getControl("12", $id);
		$control_12->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 12 - end
//	processing 13 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_13 = $pageObject->getControl("13", $id);
		$control_13->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 13 - end
//	processing 14 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_14 = $pageObject->getControl("14", $id);
		$control_14->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 14 - end
//	processing 15 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_15 = $pageObject->getControl("15", $id);
		$control_15->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 15 - end
//	processing 16 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_16 = $pageObject->getControl("16", $id);
		$control_16->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 16 - end
//	processing 17 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_17 = $pageObject->getControl("17", $id);
		$control_17->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 17 - end
//	processing 18 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_18 = $pageObject->getControl("18", $id);
		$control_18->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 18 - end
//	processing 19 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_19 = $pageObject->getControl("19", $id);
		$control_19->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 19 - end
//	processing 20 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_20 = $pageObject->getControl("20", $id);
		$control_20->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 20 - end
//	processing 21 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_21 = $pageObject->getControl("21", $id);
		$control_21->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 21 - end
//	processing 22 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_22 = $pageObject->getControl("22", $id);
		$control_22->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 22 - end
//	processing 23 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_23 = $pageObject->getControl("23", $id);
		$control_23->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 23 - end
//	processing 24 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_24 = $pageObject->getControl("24", $id);
		$control_24->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 24 - end
//	processing 25 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_25 = $pageObject->getControl("25", $id);
		$control_25->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 25 - end
//	processing 26 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_26 = $pageObject->getControl("26", $id);
		$control_26->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 26 - end
//	processing 27 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_27 = $pageObject->getControl("27", $id);
		$control_27->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 27 - end
//	processing 28 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_28 = $pageObject->getControl("28", $id);
		$control_28->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 28 - end
//	processing 29 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_29 = $pageObject->getControl("29", $id);
		$control_29->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 29 - end
//	processing 30 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_30 = $pageObject->getControl("30", $id);
		$control_30->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 30 - end
//	processing 31 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_31 = $pageObject->getControl("31", $id);
		$control_31->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing 31 - end




	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		setUpdatedLatLng($avalues, $pageObject->cipherer->pSet);
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing StudentID - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_StudentID->afterSuccessfulSave();
			}
//	processing StudentID - end
//	processing amonth - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_amonth->afterSuccessfulSave();
			}
//	processing amonth - end
//	processing ayear - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_ayear->afterSuccessfulSave();
			}
//	processing ayear - end
//	processing 1 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_1->afterSuccessfulSave();
			}
//	processing 1 - end
//	processing 2 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_2->afterSuccessfulSave();
			}
//	processing 2 - end
//	processing 3 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_3->afterSuccessfulSave();
			}
//	processing 3 - end
//	processing 4 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_4->afterSuccessfulSave();
			}
//	processing 4 - end
//	processing 5 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_5->afterSuccessfulSave();
			}
//	processing 5 - end
//	processing 6 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_6->afterSuccessfulSave();
			}
//	processing 6 - end
//	processing 7 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_7->afterSuccessfulSave();
			}
//	processing 7 - end
//	processing 8 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_8->afterSuccessfulSave();
			}
//	processing 8 - end
//	processing 9 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_9->afterSuccessfulSave();
			}
//	processing 9 - end
//	processing 10 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_10->afterSuccessfulSave();
			}
//	processing 10 - end
//	processing 11 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_11->afterSuccessfulSave();
			}
//	processing 11 - end
//	processing 12 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_12->afterSuccessfulSave();
			}
//	processing 12 - end
//	processing 13 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_13->afterSuccessfulSave();
			}
//	processing 13 - end
//	processing 14 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_14->afterSuccessfulSave();
			}
//	processing 14 - end
//	processing 15 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_15->afterSuccessfulSave();
			}
//	processing 15 - end
//	processing 16 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_16->afterSuccessfulSave();
			}
//	processing 16 - end
//	processing 17 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_17->afterSuccessfulSave();
			}
//	processing 17 - end
//	processing 18 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_18->afterSuccessfulSave();
			}
//	processing 18 - end
//	processing 19 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_19->afterSuccessfulSave();
			}
//	processing 19 - end
//	processing 20 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_20->afterSuccessfulSave();
			}
//	processing 20 - end
//	processing 21 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_21->afterSuccessfulSave();
			}
//	processing 21 - end
//	processing 22 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_22->afterSuccessfulSave();
			}
//	processing 22 - end
//	processing 23 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_23->afterSuccessfulSave();
			}
//	processing 23 - end
//	processing 24 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_24->afterSuccessfulSave();
			}
//	processing 24 - end
//	processing 25 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_25->afterSuccessfulSave();
			}
//	processing 25 - end
//	processing 26 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_26->afterSuccessfulSave();
			}
//	processing 26 - end
//	processing 27 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_27->afterSuccessfulSave();
			}
//	processing 27 - end
//	processing 28 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_28->afterSuccessfulSave();
			}
//	processing 28 - end
//	processing 29 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_29->afterSuccessfulSave();
			}
//	processing 29 - end
//	processing 30 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_30->afterSuccessfulSave();
			}
//	processing 30 - end
//	processing 31 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_31->afterSuccessfulSave();
			}
//	processing 31 - end

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				if($onFly)
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				else{
					$afterAdd_id = generatePassword(20);	
				
					$_SESSION['after_add_data'][$afterAdd_id] = array(
						'avalues'=>$avalues,
						'keys'=>$keys,
						'inlineadd'=>(bool)$inlineadd,
						'time' => time()
					);	
				}
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if($pageObject->pSet->hasEditPage() && $permis['edit'])
						$message .='&nbsp;<a href=\'student_attendance_edit.php?'.$keylink.'\'>'."Sunting".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'student_attendance_view.php?'.$keylink.'\'>'."Lihat".'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: student_attendance_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["sid"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["sid"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["sid"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
}



if($readavalues)
{
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = GetAddedDataLookupQuery($pageObject, $keys, false);
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = GetAddedDataLookupQuery($pageObject, $keys, true);
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["sid"]));
	
////////////////////////////////////////////
//	StudentID
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("StudentID", $data, $keylink);
		$showValues["StudentID"] = $value;
		$showFields[] = "StudentID";
	}	
//	amonth
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("amonth", $data, $keylink);
		$showValues["amonth"] = $value;
		$showFields[] = "amonth";
	}	
//	ayear
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ayear", $data, $keylink);
		$showValues["ayear"] = $value;
		$showFields[] = "ayear";
	}	
//	1
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("1", $data, $keylink);
		$showValues["1"] = $value;
		$showFields[] = "1";
	}	
//	2
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("2", $data, $keylink);
		$showValues["2"] = $value;
		$showFields[] = "2";
	}	
//	3
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("3", $data, $keylink);
		$showValues["3"] = $value;
		$showFields[] = "3";
	}	
//	4
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("4", $data, $keylink);
		$showValues["4"] = $value;
		$showFields[] = "4";
	}	
//	5
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("5", $data, $keylink);
		$showValues["5"] = $value;
		$showFields[] = "5";
	}	
//	6
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("6", $data, $keylink);
		$showValues["6"] = $value;
		$showFields[] = "6";
	}	
//	7
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("7", $data, $keylink);
		$showValues["7"] = $value;
		$showFields[] = "7";
	}	
//	8
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("8", $data, $keylink);
		$showValues["8"] = $value;
		$showFields[] = "8";
	}	
//	9
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("9", $data, $keylink);
		$showValues["9"] = $value;
		$showFields[] = "9";
	}	
//	10
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("10", $data, $keylink);
		$showValues["10"] = $value;
		$showFields[] = "10";
	}	
//	11
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("11", $data, $keylink);
		$showValues["11"] = $value;
		$showFields[] = "11";
	}	
//	12
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("12", $data, $keylink);
		$showValues["12"] = $value;
		$showFields[] = "12";
	}	
//	13
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("13", $data, $keylink);
		$showValues["13"] = $value;
		$showFields[] = "13";
	}	
//	14
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("14", $data, $keylink);
		$showValues["14"] = $value;
		$showFields[] = "14";
	}	
//	15
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("15", $data, $keylink);
		$showValues["15"] = $value;
		$showFields[] = "15";
	}	
//	16
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("16", $data, $keylink);
		$showValues["16"] = $value;
		$showFields[] = "16";
	}	
//	17
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("17", $data, $keylink);
		$showValues["17"] = $value;
		$showFields[] = "17";
	}	
//	18
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("18", $data, $keylink);
		$showValues["18"] = $value;
		$showFields[] = "18";
	}	
//	19
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("19", $data, $keylink);
		$showValues["19"] = $value;
		$showFields[] = "19";
	}	
//	20
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("20", $data, $keylink);
		$showValues["20"] = $value;
		$showFields[] = "20";
	}	
//	21
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("21", $data, $keylink);
		$showValues["21"] = $value;
		$showFields[] = "21";
	}	
//	22
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("22", $data, $keylink);
		$showValues["22"] = $value;
		$showFields[] = "22";
	}	
//	23
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("23", $data, $keylink);
		$showValues["23"] = $value;
		$showFields[] = "23";
	}	
//	24
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("24", $data, $keylink);
		$showValues["24"] = $value;
		$showFields[] = "24";
	}	
//	25
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("25", $data, $keylink);
		$showValues["25"] = $value;
		$showFields[] = "25";
	}	
//	26
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("26", $data, $keylink);
		$showValues["26"] = $value;
		$showFields[] = "26";
	}	
//	27
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("27", $data, $keylink);
		$showValues["27"] = $value;
		$showFields[] = "27";
	}	
//	28
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("28", $data, $keylink);
		$showValues["28"] = $value;
		$showFields[] = "28";
	}	
//	29
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("29", $data, $keylink);
		$showValues["29"] = $value;
		$showFields[] = "29";
	}	
//	30
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("30", $data, $keylink);
		$showValues["30"] = $value;
		$showFields[] = "30";
	}	
//	31
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("31", $data, $keylink);
		$showValues["31"] = $value;
		$showFields[] = "31";
	}	
//	sesi
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("sesi", $data, $keylink);
		$showValues["sesi"] = $value;
		$showFields[] = "sesi";
	}	
//	tahun
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("tahun", $data, $keylink);
		$showValues["tahun"] = $value;
		$showFields[] = "tahun";
	}	
		$showRawValues["sid"] = substr($data["sid"],0,100);
		$showRawValues["StudentID"] = substr($data["StudentID"],0,100);
		$showRawValues["amonth"] = substr($data["amonth"],0,100);
		$showRawValues["ayear"] = substr($data["ayear"],0,100);
		$showRawValues["1"] = substr($data["1"],0,100);
		$showRawValues["2"] = substr($data["2"],0,100);
		$showRawValues["3"] = substr($data["3"],0,100);
		$showRawValues["4"] = substr($data["4"],0,100);
		$showRawValues["5"] = substr($data["5"],0,100);
		$showRawValues["6"] = substr($data["6"],0,100);
		$showRawValues["7"] = substr($data["7"],0,100);
		$showRawValues["8"] = substr($data["8"],0,100);
		$showRawValues["9"] = substr($data["9"],0,100);
		$showRawValues["10"] = substr($data["10"],0,100);
		$showRawValues["11"] = substr($data["11"],0,100);
		$showRawValues["12"] = substr($data["12"],0,100);
		$showRawValues["13"] = substr($data["13"],0,100);
		$showRawValues["14"] = substr($data["14"],0,100);
		$showRawValues["15"] = substr($data["15"],0,100);
		$showRawValues["16"] = substr($data["16"],0,100);
		$showRawValues["17"] = substr($data["17"],0,100);
		$showRawValues["18"] = substr($data["18"],0,100);
		$showRawValues["19"] = substr($data["19"],0,100);
		$showRawValues["20"] = substr($data["20"],0,100);
		$showRawValues["21"] = substr($data["21"],0,100);
		$showRawValues["22"] = substr($data["22"],0,100);
		$showRawValues["23"] = substr($data["23"],0,100);
		$showRawValues["24"] = substr($data["24"],0,100);
		$showRawValues["25"] = substr($data["25"],0,100);
		$showRawValues["26"] = substr($data["26"],0,100);
		$showRawValues["27"] = substr($data["27"],0,100);
		$showRawValues["28"] = substr($data["28"],0,100);
		$showRawValues["29"] = substr($data["29"],0,100);
		$showRawValues["30"] = substr($data["30"],0,100);
		$showRawValues["31"] = substr($data["31"],0,100);
		$showRawValues["MatricNo"] = substr($data["MatricNo"],0,100);
		$showRawValues["sesi"] = substr($data["sesi"],0,100);
		$showRawValues["tahun"] = substr($data["tahun"],0,100);
		$showRawValues["Class"] = substr($data["Class"],0,100);
		$showRawValues["Name"] = substr($data["Name"],0,100);
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"] = "xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_ADD;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$defvalues[$fName];
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
	
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
		
	$flyId = $ids+1;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "student_attendance";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}	
			
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->addControlsJSAndCSS();
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
		}
		
		//Add detail's js files to master's files
		$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
		
		//Add detail's css files to master's files
		$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
		$xtParams = array("method"=>'showPage', "params"=> false);
		$xtParams['object'] = $listPageObject;
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap;
	$strTableName = "student_attendance";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

function GetAddedDataLookupQuery($pageObject, $keys, $forLookup)
{
	global $conn, $strTableName, $strOriginalTableName;
	
	$LookupSQL = "";
	$linkfield = "";
	$dispfield = "";
	$noBlobReplace = false;
	$lookupFieldName = "";
	
	if($LookupSQL && $nLookupType != LT_QUERY)
		$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);
		
	$data = 0;
	$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
	if(count($keys))
	{
		$where = KeyWhere($keys);
		if($nLookupType == LT_QUERY){
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where));
		}else 
			$LookupSQL.=" where ".$where;
		$lookupIndexes = GetLookupFieldsIndexes($lookupPSet, $lookupFieldName);
		LogInfo($LookupSQL);
		if($forLookup){
			$rs=db_query($LookupSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}else if($LookupSQL)
		{
			$rs = db_query($LookupSQL,$conn);
			$data = db_fetch_numarray($rs);
			$data[$lookupIndexes["linkFieldIndex"]] = $pageObject->cipherer->DecryptField($linkFieldName, $data[$lookupIndexes["linkFieldIndex"]]);
			if($nLookupType == LT_QUERY)
				$data[$lookupIndexes["displayFieldIndex"]] = $pageObject->cipherer->DecryptField($dispfield, $data[$lookupIndexes["displayFieldIndex"]]);		
		}
	}

	return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
		, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
}	
	
?>
