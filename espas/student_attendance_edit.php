<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/student_attendance_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

global $globalEvents;

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'E') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired");
	return;
}

$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;




if ((sizeof($_POST)==0) && (postvalue('ferror')) && (!postvalue("editid1"))){
	$returnJSON['success'] = false;
	$returnJSON['message'] = "Error occurred";
	$returnJSON['fatalError'] = true;
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}
else if ((sizeof($_POST)==0) && (postvalue('ferror')) && (postvalue("editid1"))){
	if (postvalue('fly')){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
	}
}
/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

$flyId = $id+1;
$xt = new Xtempl();

// assign an id
$xt->assign("id",$id);

$templatefile = ($inlineedit == EDIT_INLINE) ? "student_attendance_inline_edit.htm" : "student_attendance_edit.htm";

//array of params for classes
$params = array("pageType" => PAGE_EDIT,"id" => $id);


$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['templatefile'] = $templatefile;
$params['pageEditLikeInline'] = ($inlineedit == EDIT_INLINE);
//Get array of tabs for edit page
$params['useTabsOnEdit'] = $gSettings->useTabsOnEdit();
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = $gSettings->getEditTabs();

$pageObject = new EditPage($params);

//	For ajax request 
if($_REQUEST["action"]!="")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",refine($_REQUEST["keys"]));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			if(!$pageObject->lockingObj->ConfirmLock($strTableName,$arrkeys,$message));
				echo $message;
			exit();	
		}
	}
	else
		exit();
}

$filename = $status = $message = $mesClass = $usermessage = $strWhereClause = $bodyonload = "";
$showValues = $showRawValues = $showFields = $showDetailKeys = $key = $next = $prev = array();
$HaveData = $enableCtrlsForEditing = true;
$error_happened = $readevalues = $IsSaved = false;

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;


if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

$url_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn, $pageObject);

$keys = array();
$skeys = "";
$savedKeys = array();
$keys["sid"] = urldecode(postvalue("editid1"));
$savedKeys["sid"] = urldecode(postvalue("editid1"));
$skeys.= rawurlencode(postvalue("editid1"))."&";

$pageObject->setKeys($keys);

if($skeys!="")
	$skeys = substr($skeys,0,-1);

//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();

if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$oldValuesRead = false;	
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj || isTableGeoUpdatable($pageObject->cipherer->pSet)
		|| $globalEvents->exists("IsRecordEditable", $strTableName))
	{
		//	read old values
		$rsold = db_query($gQuery->gSQLWhere($strWhereClause), $conn);
		$dataold = $pageObject->cipherer->DecryptFetchedArray($rsold);
		$oldValuesRead = true;
	}
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($dataold, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
	$evalues = $efilename_values = $blobfields = array();
	

//	processing 1 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_1 = $pageObject->getControl("1", $id);
		$control_1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 1 - end
//	processing 2 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_2 = $pageObject->getControl("2", $id);
		$control_2->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 2 - end
//	processing 3 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_3 = $pageObject->getControl("3", $id);
		$control_3->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 3 - end
//	processing 4 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_4 = $pageObject->getControl("4", $id);
		$control_4->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 4 - end
//	processing 5 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_5 = $pageObject->getControl("5", $id);
		$control_5->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 5 - end
//	processing 6 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_6 = $pageObject->getControl("6", $id);
		$control_6->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 6 - end
//	processing 7 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_7 = $pageObject->getControl("7", $id);
		$control_7->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 7 - end
//	processing 8 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_8 = $pageObject->getControl("8", $id);
		$control_8->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 8 - end
//	processing 9 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_9 = $pageObject->getControl("9", $id);
		$control_9->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 9 - end
//	processing 10 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_10 = $pageObject->getControl("10", $id);
		$control_10->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 10 - end
//	processing 11 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_11 = $pageObject->getControl("11", $id);
		$control_11->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 11 - end
//	processing 12 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_12 = $pageObject->getControl("12", $id);
		$control_12->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 12 - end
//	processing 13 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_13 = $pageObject->getControl("13", $id);
		$control_13->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 13 - end
//	processing 14 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_14 = $pageObject->getControl("14", $id);
		$control_14->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 14 - end
//	processing 15 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_15 = $pageObject->getControl("15", $id);
		$control_15->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 15 - end
//	processing 16 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_16 = $pageObject->getControl("16", $id);
		$control_16->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 16 - end
//	processing 17 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_17 = $pageObject->getControl("17", $id);
		$control_17->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 17 - end
//	processing 18 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_18 = $pageObject->getControl("18", $id);
		$control_18->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 18 - end
//	processing 19 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_19 = $pageObject->getControl("19", $id);
		$control_19->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 19 - end
//	processing 20 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_20 = $pageObject->getControl("20", $id);
		$control_20->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 20 - end
//	processing 21 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_21 = $pageObject->getControl("21", $id);
		$control_21->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 21 - end
//	processing 22 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_22 = $pageObject->getControl("22", $id);
		$control_22->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 22 - end
//	processing 23 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_23 = $pageObject->getControl("23", $id);
		$control_23->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 23 - end
//	processing 24 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_24 = $pageObject->getControl("24", $id);
		$control_24->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 24 - end
//	processing 25 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_25 = $pageObject->getControl("25", $id);
		$control_25->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 25 - end
//	processing 26 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_26 = $pageObject->getControl("26", $id);
		$control_26->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 26 - end
//	processing 27 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_27 = $pageObject->getControl("27", $id);
		$control_27->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 27 - end
//	processing 28 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_28 = $pageObject->getControl("28", $id);
		$control_28->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 28 - end
//	processing 29 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_29 = $pageObject->getControl("29", $id);
		$control_29->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 29 - end
//	processing 30 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_30 = $pageObject->getControl("30", $id);
		$control_30->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 30 - end
//	processing 31 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_31 = $pageObject->getControl("31", $id);
		$control_31->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing 31 - end

	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;
		
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if(!$pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage))
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit, $pageObject);
	
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
			//set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked	
            if(isTableGeoUpdatable($pageObject->cipherer->pSet)) {			
				setUpdatedLatLng($evalues, $pageObject->cipherer->pSet, $dataold);
			}	
			
			if(DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject, $pageObject->cipherer))
			{
				$IsSaved = true;

			// Give possibility to all edit controls to clean their data				
			//	processing 1 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_1->afterSuccessfulSave();
				}
	//	processing 1 - end
			//	processing 2 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_2->afterSuccessfulSave();
				}
	//	processing 2 - end
			//	processing 3 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_3->afterSuccessfulSave();
				}
	//	processing 3 - end
			//	processing 4 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_4->afterSuccessfulSave();
				}
	//	processing 4 - end
			//	processing 5 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_5->afterSuccessfulSave();
				}
	//	processing 5 - end
			//	processing 6 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_6->afterSuccessfulSave();
				}
	//	processing 6 - end
			//	processing 7 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_7->afterSuccessfulSave();
				}
	//	processing 7 - end
			//	processing 8 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_8->afterSuccessfulSave();
				}
	//	processing 8 - end
			//	processing 9 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_9->afterSuccessfulSave();
				}
	//	processing 9 - end
			//	processing 10 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_10->afterSuccessfulSave();
				}
	//	processing 10 - end
			//	processing 11 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_11->afterSuccessfulSave();
				}
	//	processing 11 - end
			//	processing 12 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_12->afterSuccessfulSave();
				}
	//	processing 12 - end
			//	processing 13 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_13->afterSuccessfulSave();
				}
	//	processing 13 - end
			//	processing 14 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_14->afterSuccessfulSave();
				}
	//	processing 14 - end
			//	processing 15 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_15->afterSuccessfulSave();
				}
	//	processing 15 - end
			//	processing 16 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_16->afterSuccessfulSave();
				}
	//	processing 16 - end
			//	processing 17 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_17->afterSuccessfulSave();
				}
	//	processing 17 - end
			//	processing 18 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_18->afterSuccessfulSave();
				}
	//	processing 18 - end
			//	processing 19 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_19->afterSuccessfulSave();
				}
	//	processing 19 - end
			//	processing 20 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_20->afterSuccessfulSave();
				}
	//	processing 20 - end
			//	processing 21 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_21->afterSuccessfulSave();
				}
	//	processing 21 - end
			//	processing 22 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_22->afterSuccessfulSave();
				}
	//	processing 22 - end
			//	processing 23 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_23->afterSuccessfulSave();
				}
	//	processing 23 - end
			//	processing 24 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_24->afterSuccessfulSave();
				}
	//	processing 24 - end
			//	processing 25 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_25->afterSuccessfulSave();
				}
	//	processing 25 - end
			//	processing 26 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_26->afterSuccessfulSave();
				}
	//	processing 26 - end
			//	processing 27 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_27->afterSuccessfulSave();
				}
	//	processing 27 - end
			//	processing 28 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_28->afterSuccessfulSave();
				}
	//	processing 28 - end
			//	processing 29 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_29->afterSuccessfulSave();
				}
	//	processing 29 - end
			//	processing 30 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_30->afterSuccessfulSave();
				}
	//	processing 30 - end
			//	processing 31 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_31->afterSuccessfulSave();
				}
	//	processing 31 - end
				
				//	after edit event
				if($pageObject->lockingObj && $inlineedit == EDIT_INLINE)
					$pageObject->lockingObj->UnlockRecord($strTableName,$savedKeys,"");
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit, $pageObject);
							
				$mesClass = "mes_ok";
			}
			elseif($inlineedit!=EDIT_INLINE)
				$mesClass = "mes_not";	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
	if($readevalues)
		$keys = $savedKeys;
}
//else
{
	/////////////////////////
	//Locking recors
	/////////////////////////

	if($pageObject->lockingObj)
	{
		$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName,$keys);
		if(!$enableCtrlsForEditing)
		{
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
				else
					$lockmessage = $pageObject->lockingObj->LockUser;
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo my_json_encode($returnJSON);
				exit();
			}
			
			$system_attrs = "style='display:block;'";
			$system_message = $pageObject->lockingObj->LockUser;
			
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
			{
				$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
				if($rb!="")
					$system_message = $rb;
			}
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="runner-locking" '.$system_attrs.'>'.$system_message.'</div>';

if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
		$keyGetQ.="editid1=".rawurldecode($keys["sid"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: student_attendance_".$pageObject->getPageType().".php?".$keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}


$pageObject->setKeys($keys);
$pageObject->readEditValues = $readevalues;
if($readevalues)
	$pageObject->editValues = $evalues;

//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		header("Location: student_attendance_list.php?a=return");
		exit();
	}
	else
		$data = array();
}

if($globalEvents->exists("IsRecordEditable", $strTableName))
{
	if(!$globalEvents->IsRecordEditable($data, true, $strTableName) && $inlineedit != EDIT_INLINE)
	{
		return SecurityRedirect($inlineedit);
	}
}


//global variable use in BuildEditControl function
//	show readonly fields

if($readevalues)
{
	$data["1"] = $evalues["1"];
	$data["2"] = $evalues["2"];
	$data["3"] = $evalues["3"];
	$data["4"] = $evalues["4"];
	$data["5"] = $evalues["5"];
	$data["6"] = $evalues["6"];
	$data["7"] = $evalues["7"];
	$data["8"] = $evalues["8"];
	$data["9"] = $evalues["9"];
	$data["10"] = $evalues["10"];
	$data["11"] = $evalues["11"];
	$data["12"] = $evalues["12"];
	$data["13"] = $evalues["13"];
	$data["14"] = $evalues["14"];
	$data["15"] = $evalues["15"];
	$data["16"] = $evalues["16"];
	$data["17"] = $evalues["17"];
	$data["18"] = $evalues["18"];
	$data["19"] = $evalues["19"];
	$data["20"] = $evalues["20"];
	$data["21"] = $evalues["21"];
	$data["22"] = $evalues["22"];
	$data["23"] = $evalues["23"];
	$data["24"] = $evalues["24"];
	$data["25"] = $evalues["25"];
	$data["26"] = $evalues["26"];
	$data["27"] = $evalues["27"];
	$data["28"] = $evalues["28"];
	$data["29"] = $evalues["29"];
	$data["30"] = $evalues["30"];
	$data["31"] = $evalues["31"];
}

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		
		if (!isMobile())
			$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
			
		$pageObject->body["begin"].= $includes;
	}	


	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("sid", $data)));
	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit == EDIT_SIMPLE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button",true);
				$nextlink.= "editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
				$prevlink.= "editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("prev_button",false);
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	//$onmouseover = "this.focus();";
	//$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ");
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"");
		
	$xt->assign("reset_button",true);

}

$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	return new data to the List page or report an error
/////////////////////////////////////////////////////////////
if (postvalue("a")=="edited" && ($inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP))
{
	if(!$data)
	{
		$data = $evalues;
		$HaveData = false;
	}
	//Preparation   view values

//	detail tables

	$keylink = "";
	$keylink.= "&key1=".htmlspecialchars(rawurlencode(@$data["sid"]));


//	sid - 
	$value = $pageObject->showDBValue("sid", $data, $keylink);
	$showValues["sid"] = $value;
	$showFields[] = "sid";
		$showRawValues["sid"] = substr($data["sid"],0,100);

//	StudentID - 
	$value = $pageObject->showDBValue("StudentID", $data, $keylink);
	$showValues["StudentID"] = $value;
	$showFields[] = "StudentID";
		$showRawValues["StudentID"] = substr($data["StudentID"],0,100);

//	amonth - 
	$value = $pageObject->showDBValue("amonth", $data, $keylink);
	$showValues["amonth"] = $value;
	$showFields[] = "amonth";
		$showRawValues["amonth"] = substr($data["amonth"],0,100);

//	ayear - 
	$value = $pageObject->showDBValue("ayear", $data, $keylink);
	$showValues["ayear"] = $value;
	$showFields[] = "ayear";
		$showRawValues["ayear"] = substr($data["ayear"],0,100);

//	1 - Checkbox
	$value = $pageObject->showDBValue("1", $data, $keylink);
	$showValues["1"] = $value;
	$showFields[] = "1";
		$showRawValues["1"] = substr($data["1"],0,100);

//	2 - Checkbox
	$value = $pageObject->showDBValue("2", $data, $keylink);
	$showValues["2"] = $value;
	$showFields[] = "2";
		$showRawValues["2"] = substr($data["2"],0,100);

//	3 - Checkbox
	$value = $pageObject->showDBValue("3", $data, $keylink);
	$showValues["3"] = $value;
	$showFields[] = "3";
		$showRawValues["3"] = substr($data["3"],0,100);

//	4 - Checkbox
	$value = $pageObject->showDBValue("4", $data, $keylink);
	$showValues["4"] = $value;
	$showFields[] = "4";
		$showRawValues["4"] = substr($data["4"],0,100);

//	5 - Checkbox
	$value = $pageObject->showDBValue("5", $data, $keylink);
	$showValues["5"] = $value;
	$showFields[] = "5";
		$showRawValues["5"] = substr($data["5"],0,100);

//	6 - Checkbox
	$value = $pageObject->showDBValue("6", $data, $keylink);
	$showValues["6"] = $value;
	$showFields[] = "6";
		$showRawValues["6"] = substr($data["6"],0,100);

//	7 - Checkbox
	$value = $pageObject->showDBValue("7", $data, $keylink);
	$showValues["7"] = $value;
	$showFields[] = "7";
		$showRawValues["7"] = substr($data["7"],0,100);

//	8 - Checkbox
	$value = $pageObject->showDBValue("8", $data, $keylink);
	$showValues["8"] = $value;
	$showFields[] = "8";
		$showRawValues["8"] = substr($data["8"],0,100);

//	9 - Checkbox
	$value = $pageObject->showDBValue("9", $data, $keylink);
	$showValues["9"] = $value;
	$showFields[] = "9";
		$showRawValues["9"] = substr($data["9"],0,100);

//	10 - Checkbox
	$value = $pageObject->showDBValue("10", $data, $keylink);
	$showValues["10"] = $value;
	$showFields[] = "10";
		$showRawValues["10"] = substr($data["10"],0,100);

//	11 - Checkbox
	$value = $pageObject->showDBValue("11", $data, $keylink);
	$showValues["11"] = $value;
	$showFields[] = "11";
		$showRawValues["11"] = substr($data["11"],0,100);

//	12 - Checkbox
	$value = $pageObject->showDBValue("12", $data, $keylink);
	$showValues["12"] = $value;
	$showFields[] = "12";
		$showRawValues["12"] = substr($data["12"],0,100);

//	13 - Checkbox
	$value = $pageObject->showDBValue("13", $data, $keylink);
	$showValues["13"] = $value;
	$showFields[] = "13";
		$showRawValues["13"] = substr($data["13"],0,100);

//	14 - Checkbox
	$value = $pageObject->showDBValue("14", $data, $keylink);
	$showValues["14"] = $value;
	$showFields[] = "14";
		$showRawValues["14"] = substr($data["14"],0,100);

//	15 - Checkbox
	$value = $pageObject->showDBValue("15", $data, $keylink);
	$showValues["15"] = $value;
	$showFields[] = "15";
		$showRawValues["15"] = substr($data["15"],0,100);

//	16 - Checkbox
	$value = $pageObject->showDBValue("16", $data, $keylink);
	$showValues["16"] = $value;
	$showFields[] = "16";
		$showRawValues["16"] = substr($data["16"],0,100);

//	17 - Checkbox
	$value = $pageObject->showDBValue("17", $data, $keylink);
	$showValues["17"] = $value;
	$showFields[] = "17";
		$showRawValues["17"] = substr($data["17"],0,100);

//	18 - Checkbox
	$value = $pageObject->showDBValue("18", $data, $keylink);
	$showValues["18"] = $value;
	$showFields[] = "18";
		$showRawValues["18"] = substr($data["18"],0,100);

//	19 - Checkbox
	$value = $pageObject->showDBValue("19", $data, $keylink);
	$showValues["19"] = $value;
	$showFields[] = "19";
		$showRawValues["19"] = substr($data["19"],0,100);

//	20 - Checkbox
	$value = $pageObject->showDBValue("20", $data, $keylink);
	$showValues["20"] = $value;
	$showFields[] = "20";
		$showRawValues["20"] = substr($data["20"],0,100);

//	21 - Checkbox
	$value = $pageObject->showDBValue("21", $data, $keylink);
	$showValues["21"] = $value;
	$showFields[] = "21";
		$showRawValues["21"] = substr($data["21"],0,100);

//	22 - Checkbox
	$value = $pageObject->showDBValue("22", $data, $keylink);
	$showValues["22"] = $value;
	$showFields[] = "22";
		$showRawValues["22"] = substr($data["22"],0,100);

//	23 - Checkbox
	$value = $pageObject->showDBValue("23", $data, $keylink);
	$showValues["23"] = $value;
	$showFields[] = "23";
		$showRawValues["23"] = substr($data["23"],0,100);

//	24 - Checkbox
	$value = $pageObject->showDBValue("24", $data, $keylink);
	$showValues["24"] = $value;
	$showFields[] = "24";
		$showRawValues["24"] = substr($data["24"],0,100);

//	25 - Checkbox
	$value = $pageObject->showDBValue("25", $data, $keylink);
	$showValues["25"] = $value;
	$showFields[] = "25";
		$showRawValues["25"] = substr($data["25"],0,100);

//	26 - Checkbox
	$value = $pageObject->showDBValue("26", $data, $keylink);
	$showValues["26"] = $value;
	$showFields[] = "26";
		$showRawValues["26"] = substr($data["26"],0,100);

//	27 - Checkbox
	$value = $pageObject->showDBValue("27", $data, $keylink);
	$showValues["27"] = $value;
	$showFields[] = "27";
		$showRawValues["27"] = substr($data["27"],0,100);

//	28 - Checkbox
	$value = $pageObject->showDBValue("28", $data, $keylink);
	$showValues["28"] = $value;
	$showFields[] = "28";
		$showRawValues["28"] = substr($data["28"],0,100);

//	29 - Checkbox
	$value = $pageObject->showDBValue("29", $data, $keylink);
	$showValues["29"] = $value;
	$showFields[] = "29";
		$showRawValues["29"] = substr($data["29"],0,100);

//	30 - Checkbox
	$value = $pageObject->showDBValue("30", $data, $keylink);
	$showValues["30"] = $value;
	$showFields[] = "30";
		$showRawValues["30"] = substr($data["30"],0,100);

//	31 - Checkbox
	$value = $pageObject->showDBValue("31", $data, $keylink);
	$showValues["31"] = $value;
	$showFields[] = "31";
		$showRawValues["31"] = substr($data["31"],0,100);

//	MatricNo - 
	$value = $pageObject->showDBValue("MatricNo", $data, $keylink);
	$showValues["MatricNo"] = $value;
	$showFields[] = "MatricNo";
		$showRawValues["MatricNo"] = substr($data["MatricNo"],0,100);

//	sesi - 
	$value = $pageObject->showDBValue("sesi", $data, $keylink);
	$showValues["sesi"] = $value;
	$showFields[] = "sesi";
		$showRawValues["sesi"] = substr($data["sesi"],0,100);

//	tahun - 
	$value = $pageObject->showDBValue("tahun", $data, $keylink);
	$showValues["tahun"] = $value;
	$showFields[] = "tahun";
		$showRawValues["tahun"] = substr($data["tahun"],0,100);

//	Class - 
	$value = $pageObject->showDBValue("Class", $data, $keylink);
	$showValues["Class"] = $value;
	$showFields[] = "Class";
		$showRawValues["Class"] = substr($data["Class"],0,100);

//	Name - 
	$value = $pageObject->showDBValue("Name", $data, $keylink);
	$showValues["Name"] = $value;
	$showFields[] = "Name";
		$showRawValues["Name"] = substr($data["Name"],0,100);
/////////////////////////////////////////////////////////////
//	start inline output
/////////////////////////////////////////////////////////////
	
	if($IsSaved)
	{
		if($pageObject->lockingObj)
			$pageObject->lockingObj->UnlockRecord($strTableName,$keys,"");
		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $pageObject->jsKeys;
		$returnJSON['keyFields'] = $pageObject->keyFields;
		$returnJSON['vals'] = $showValues;
		$returnJSON['fields'] = $showFields;
		$returnJSON['rawVals'] = $showRawValues;
		$returnJSON['detKeys'] = $showDetailKeys;
		$returnJSON['userMess'] = $usermessage;
		$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
		
		if($inlineedit==EDIT_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$returnJSON['hideCaptcha'] = true;
			
		if($globalEvents->exists("IsRecordEditable", $strTableName))
		{
			if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
				$returnJSON['nonEditable'] = true;
		}
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
		
		if($pageObject->lockingObj)
			$returnJSON['lockMessage'] = $system_message;
		
		if($inlineedit == EDIT_POPUP && !$pageObject->isCaptchaOk)
			$returnJSON['captcha'] = false;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
} 
/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$regex = '';
$regexmessage = '';
$regextype = '';
$control = array();

foreach($pageObject->editFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_EDIT;
		$control[$gfName]["params"]["field"] = $fName;
		if(!IsNumberType($pageObject->pSet->getFieldType($fName)) || is_null(@$data[$fName]))
			$control[$gfName]["params"]["value"] = @$data[$fName];
		else
		{
			$control[$gfName]["params"]["value"] = str_replace(".",$locale_info["LOCALE_SDECIMAL"],@$data[$fName]);
		}
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$control[$gfName]["params"]["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$control[$gfName]["params"]["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
																																
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$data[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $pageObject->editFields))
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	else
		$vals = array($fName => @$data[$fName]);
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if($pageObject->pSet->getViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		$value = $pageObject->showDBValue($fName, $data);
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = $skeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
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
		$options["masterPageType"] = PAGE_EDIT;
		$options["mainMasterPageType"] = PAGE_EDIT;
		$options['masterTable'] = "student_attendance";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "student_attendance";
			continue;
		}
		
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
		$masterKeys = array();
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk){
			$options['masterKeysReq'][$mkr] = $data[$mk];
			$masterKeys['masterKey'.$mkr] = $data[$mk];
			$mkr++;
		}
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->isDispGrid())
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			
			foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
				$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
			}
			
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
			
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
			
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
		$flyId = $listPageObject->recId+1;
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "student_attendance";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->flyId = $flyId;
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineedit == EDIT_POPUP){
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
}

$xt->assign("style_block",true);


$viewlink = "";
$viewkeys = array();
	$viewkeys["editid1"] = postvalue("editid1");
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='student_attendance_view.php?".$viewlink."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit == EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data, $pageObject);

if($inlineedit != EDIT_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}
	
if($inlineedit == EDIT_POPUP || $inlineedit == EDIT_INLINE)
{
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($data, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
}
if($inlineedit == EDIT_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $flyId + 1;
	echo (my_json_encode($returnJSON)); 
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($pageObject->editFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);
	
function SecurityRedirect($inlineedit)
{
	if($inlineedit == EDIT_INLINE)
	{
		echo my_json_encode(array("success" => false, "message" => "The record is not editable"));
		return;
	}
	
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: menu.php?message=expired");	
}
?>
