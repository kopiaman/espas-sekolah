<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/student_info_variables.php");
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

$layout = new TLayout("edit23","Purific1Green1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->containers["edit"] = array();

$layout->containers["edit"][] = array("name"=>"editheader","block"=>"","substyle"=>2);


$layout->containers["edit"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["edit"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"editfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"editbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["edit"] = "1";
$layout->blocks["top"][] = "edit";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["student_info_edit"] = $layout;


$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_info_edit_Personal1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_info_edit_Campus_Info1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_info_edit_Next_Of_Kin1"] = $layout;



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

$templatefile = ($inlineedit == EDIT_INLINE) ? "student_info_inline_edit.htm" : "student_info_edit.htm";

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
$keys["StudentID"] = urldecode(postvalue("editid1"));
$savedKeys["StudentID"] = urldecode(postvalue("editid1"));
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
	

//	processing Name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Name = $pageObject->getControl("Name", $id);
		$control_Name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Name - end
//	processing ICNO - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_ICNO = $pageObject->getControl("ICNO", $id);
		$control_ICNO->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ICNO - end
//	processing DOB - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_DOB = $pageObject->getControl("DOB", $id);
		$control_DOB->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing DOB - end
//	processing MatricNo - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_MatricNo = $pageObject->getControl("MatricNo", $id);
		$control_MatricNo->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing MatricNo - end
//	processing DateJoin - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_DateJoin = $pageObject->getControl("DateJoin", $id);
		$control_DateJoin->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing DateJoin - end
//	processing Gender - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Gender = $pageObject->getControl("Gender", $id);
		$control_Gender->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Gender - end
//	processing Address1 - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Address1 = $pageObject->getControl("Address1", $id);
		$control_Address1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Address1 - end
//	processing HomeTelephone - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_HomeTelephone = $pageObject->getControl("HomeTelephone", $id);
		$control_HomeTelephone->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing HomeTelephone - end
//	processing Status - begin
	$condition = 1;

	if($condition)
	{
		$control_Status = $pageObject->getControl("Status", $id);
		$control_Status->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Status - end
//	processing Class - begin
	$condition = 1;

	if($condition)
	{
		$control_Class = $pageObject->getControl("Class", $id);
		$control_Class->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Class - end
//	processing photo - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_photo = $pageObject->getControl("photo", $id);
		$control_photo->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing photo - end
//	processing f1_name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f1_name = $pageObject->getControl("f1_name", $id);
		$control_f1_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f1_name - end
//	processing f1_tel - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f1_tel = $pageObject->getControl("f1_tel", $id);
		$control_f1_tel->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f1_tel - end
//	processing f2_name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f2_name = $pageObject->getControl("f2_name", $id);
		$control_f2_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f2_name - end
//	processing f2_tel - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f2_tel = $pageObject->getControl("f2_tel", $id);
		$control_f2_tel->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f2_tel - end
//	processing sesi - begin
	$condition = 1;

	if($condition)
	{
		$control_sesi = $pageObject->getControl("sesi", $id);
		$control_sesi->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing sesi - end
//	processing tahun - begin
	$condition = 1;

	if($condition)
	{
		$control_tahun = $pageObject->getControl("tahun", $id);
		$control_tahun->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing tahun - end
//	processing Dateout - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Dateout = $pageObject->getControl("Dateout", $id);
		$control_Dateout->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Dateout - end
//	processing f2_job - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f2_job = $pageObject->getControl("f2_job", $id);
		$control_f2_job->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f2_job - end
//	processing f1_job - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f1_job = $pageObject->getControl("f1_job", $id);
		$control_f1_job->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f1_job - end

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
			//	processing Name - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Name->afterSuccessfulSave();
				}
	//	processing Name - end
			//	processing ICNO - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_ICNO->afterSuccessfulSave();
				}
	//	processing ICNO - end
			//	processing DOB - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_DOB->afterSuccessfulSave();
				}
	//	processing DOB - end
			//	processing MatricNo - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_MatricNo->afterSuccessfulSave();
				}
	//	processing MatricNo - end
			//	processing DateJoin - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_DateJoin->afterSuccessfulSave();
				}
	//	processing DateJoin - end
			//	processing Gender - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Gender->afterSuccessfulSave();
				}
	//	processing Gender - end
			//	processing Address1 - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Address1->afterSuccessfulSave();
				}
	//	processing Address1 - end
			//	processing HomeTelephone - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_HomeTelephone->afterSuccessfulSave();
				}
	//	processing HomeTelephone - end
			//	processing Status - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Status->afterSuccessfulSave();
				}
	//	processing Status - end
			//	processing Class - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Class->afterSuccessfulSave();
				}
	//	processing Class - end
			//	processing photo - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_photo->afterSuccessfulSave();
				}
	//	processing photo - end
			//	processing f1_name - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f1_name->afterSuccessfulSave();
				}
	//	processing f1_name - end
			//	processing f1_tel - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f1_tel->afterSuccessfulSave();
				}
	//	processing f1_tel - end
			//	processing f2_name - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f2_name->afterSuccessfulSave();
				}
	//	processing f2_name - end
			//	processing f2_tel - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f2_tel->afterSuccessfulSave();
				}
	//	processing f2_tel - end
			//	processing sesi - begin
							$condition = 1;
			
				if($condition)
				{
					$control_sesi->afterSuccessfulSave();
				}
	//	processing sesi - end
			//	processing tahun - begin
							$condition = 1;
			
				if($condition)
				{
					$control_tahun->afterSuccessfulSave();
				}
	//	processing tahun - end
			//	processing Dateout - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Dateout->afterSuccessfulSave();
				}
	//	processing Dateout - end
			//	processing f2_job - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f2_job->afterSuccessfulSave();
				}
	//	processing f2_job - end
			//	processing f1_job - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f1_job->afterSuccessfulSave();
				}
	//	processing f1_job - end
				
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
		$keyGetQ.="editid1=".rawurldecode($keys["StudentID"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: student_info_".$pageObject->getPageType().".php?".$keyGetQ);
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
		header("Location: student_info_list.php?a=return");
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
	$data["Name"] = $evalues["Name"];
	$data["ICNO"] = $evalues["ICNO"];
	$data["DOB"] = $evalues["DOB"];
	$data["MatricNo"] = $evalues["MatricNo"];
	$data["DateJoin"] = $evalues["DateJoin"];
	$data["Gender"] = $evalues["Gender"];
	$data["Address1"] = $evalues["Address1"];
	$data["HomeTelephone"] = $evalues["HomeTelephone"];
	$data["Status"] = $evalues["Status"];
	$data["Class"] = $evalues["Class"];
	$data["photo"] = $evalues["photo"];
	$data["f1_name"] = $evalues["f1_name"];
	$data["f1_tel"] = $evalues["f1_tel"];
	$data["f2_name"] = $evalues["f2_name"];
	$data["f2_tel"] = $evalues["f2_tel"];
	$data["sesi"] = $evalues["sesi"];
	$data["tahun"] = $evalues["tahun"];
	$data["Dateout"] = $evalues["Dateout"];
	$data["f2_job"] = $evalues["f2_job"];
	$data["f1_job"] = $evalues["f1_job"];
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

	if(!$pageObject->isAppearOnTabs("Name"))
		$xt->assign("Name_fieldblock",true);
	else
		$xt->assign("Name_tabfieldblock",true);
	$xt->assign("Name_label",true);
	if(isEnableSection508())
		$xt->assign_section("Name_label","<label for=\"".GetInputElementId("Name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ICNO"))
		$xt->assign("ICNO_fieldblock",true);
	else
		$xt->assign("ICNO_tabfieldblock",true);
	$xt->assign("ICNO_label",true);
	if(isEnableSection508())
		$xt->assign_section("ICNO_label","<label for=\"".GetInputElementId("ICNO", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("DOB"))
		$xt->assign("DOB_fieldblock",true);
	else
		$xt->assign("DOB_tabfieldblock",true);
	$xt->assign("DOB_label",true);
	if(isEnableSection508())
		$xt->assign_section("DOB_label","<label for=\"".GetInputElementId("DOB", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("MatricNo"))
		$xt->assign("MatricNo_fieldblock",true);
	else
		$xt->assign("MatricNo_tabfieldblock",true);
	$xt->assign("MatricNo_label",true);
	if(isEnableSection508())
		$xt->assign_section("MatricNo_label","<label for=\"".GetInputElementId("MatricNo", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("DateJoin"))
		$xt->assign("DateJoin_fieldblock",true);
	else
		$xt->assign("DateJoin_tabfieldblock",true);
	$xt->assign("DateJoin_label",true);
	if(isEnableSection508())
		$xt->assign_section("DateJoin_label","<label for=\"".GetInputElementId("DateJoin", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Gender"))
		$xt->assign("Gender_fieldblock",true);
	else
		$xt->assign("Gender_tabfieldblock",true);
	$xt->assign("Gender_label",true);
	if(isEnableSection508())
		$xt->assign_section("Gender_label","<label for=\"".GetInputElementId("Gender", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Address1"))
		$xt->assign("Address1_fieldblock",true);
	else
		$xt->assign("Address1_tabfieldblock",true);
	$xt->assign("Address1_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address1_label","<label for=\"".GetInputElementId("Address1", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("HomeTelephone"))
		$xt->assign("HomeTelephone_fieldblock",true);
	else
		$xt->assign("HomeTelephone_tabfieldblock",true);
	$xt->assign("HomeTelephone_label",true);
	if(isEnableSection508())
		$xt->assign_section("HomeTelephone_label","<label for=\"".GetInputElementId("HomeTelephone", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Status"))
		$xt->assign("Status_fieldblock",true);
	else
		$xt->assign("Status_tabfieldblock",true);
	$xt->assign("Status_label",true);
	if(isEnableSection508())
		$xt->assign_section("Status_label","<label for=\"".GetInputElementId("Status", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Class"))
		$xt->assign("Class_fieldblock",true);
	else
		$xt->assign("Class_tabfieldblock",true);
	$xt->assign("Class_label",true);
	if(isEnableSection508())
		$xt->assign_section("Class_label","<label for=\"".GetInputElementId("Class", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("photo"))
		$xt->assign("photo_fieldblock",true);
	else
		$xt->assign("photo_tabfieldblock",true);
	$xt->assign("photo_label",true);
	if(isEnableSection508())
		$xt->assign_section("photo_label","<label for=\"".GetInputElementId("photo", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f1_name"))
		$xt->assign("f1_name_fieldblock",true);
	else
		$xt->assign("f1_name_tabfieldblock",true);
	$xt->assign("f1_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_name_label","<label for=\"".GetInputElementId("f1_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f1_tel"))
		$xt->assign("f1_tel_fieldblock",true);
	else
		$xt->assign("f1_tel_tabfieldblock",true);
	$xt->assign("f1_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_tel_label","<label for=\"".GetInputElementId("f1_tel", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f2_name"))
		$xt->assign("f2_name_fieldblock",true);
	else
		$xt->assign("f2_name_tabfieldblock",true);
	$xt->assign("f2_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_name_label","<label for=\"".GetInputElementId("f2_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f2_tel"))
		$xt->assign("f2_tel_fieldblock",true);
	else
		$xt->assign("f2_tel_tabfieldblock",true);
	$xt->assign("f2_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_tel_label","<label for=\"".GetInputElementId("f2_tel", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("sesi"))
		$xt->assign("sesi_fieldblock",true);
	else
		$xt->assign("sesi_tabfieldblock",true);
	$xt->assign("sesi_label",true);
	if(isEnableSection508())
		$xt->assign_section("sesi_label","<label for=\"".GetInputElementId("sesi", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("tahun"))
		$xt->assign("tahun_fieldblock",true);
	else
		$xt->assign("tahun_tabfieldblock",true);
	$xt->assign("tahun_label",true);
	if(isEnableSection508())
		$xt->assign_section("tahun_label","<label for=\"".GetInputElementId("tahun", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Dateout"))
		$xt->assign("Dateout_fieldblock",true);
	else
		$xt->assign("Dateout_tabfieldblock",true);
	$xt->assign("Dateout_label",true);
	if(isEnableSection508())
		$xt->assign_section("Dateout_label","<label for=\"".GetInputElementId("Dateout", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f2_job"))
		$xt->assign("f2_job_fieldblock",true);
	else
		$xt->assign("f2_job_tabfieldblock",true);
	$xt->assign("f2_job_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_job_label","<label for=\"".GetInputElementId("f2_job", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f1_job"))
		$xt->assign("f1_job_fieldblock",true);
	else
		$xt->assign("f1_job_tabfieldblock",true);
	$xt->assign("f1_job_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_job_label","<label for=\"".GetInputElementId("f1_job", $id, PAGE_EDIT)."\">","</label>");
		

	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("StudentID", $data)));
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
	$keylink.= "&key1=".htmlspecialchars(rawurlencode(@$data["StudentID"]));


//	StudentID - 
	$value = $pageObject->showDBValue("StudentID", $data, $keylink);
	$showValues["StudentID"] = $value;
	$showFields[] = "StudentID";
		$showRawValues["StudentID"] = substr($data["StudentID"],0,100);

//	Name - 
	$value = $pageObject->showDBValue("Name", $data, $keylink);
	$showValues["Name"] = $value;
	$showFields[] = "Name";
		$showRawValues["Name"] = substr($data["Name"],0,100);

//	ICNO - 
	$value = $pageObject->showDBValue("ICNO", $data, $keylink);
	$showValues["ICNO"] = $value;
	$showFields[] = "ICNO";
		$showRawValues["ICNO"] = substr($data["ICNO"],0,100);

//	DOB - 
	$value = $pageObject->showDBValue("DOB", $data, $keylink);
	$showValues["DOB"] = $value;
	$showFields[] = "DOB";
		$showRawValues["DOB"] = substr($data["DOB"],0,100);

//	MatricNo - 
	$value = $pageObject->showDBValue("MatricNo", $data, $keylink);
	$showValues["MatricNo"] = $value;
	$showFields[] = "MatricNo";
		$showRawValues["MatricNo"] = substr($data["MatricNo"],0,100);

//	DateJoin - 
	$value = $pageObject->showDBValue("DateJoin", $data, $keylink);
	$showValues["DateJoin"] = $value;
	$showFields[] = "DateJoin";
		$showRawValues["DateJoin"] = substr($data["DateJoin"],0,100);

//	Gender - 
	$value = $pageObject->showDBValue("Gender", $data, $keylink);
	$showValues["Gender"] = $value;
	$showFields[] = "Gender";
		$showRawValues["Gender"] = substr($data["Gender"],0,100);

//	Address1 - 
	$value = $pageObject->showDBValue("Address1", $data, $keylink);
	$showValues["Address1"] = $value;
	$showFields[] = "Address1";
		$showRawValues["Address1"] = substr($data["Address1"],0,100);

//	HomeTelephone - 
	$value = $pageObject->showDBValue("HomeTelephone", $data, $keylink);
	$showValues["HomeTelephone"] = $value;
	$showFields[] = "HomeTelephone";
		$showRawValues["HomeTelephone"] = substr($data["HomeTelephone"],0,100);

//	Status - 
	$value = $pageObject->showDBValue("Status", $data, $keylink);
	$showValues["Status"] = $value;
	$showFields[] = "Status";
		$showRawValues["Status"] = substr($data["Status"],0,100);

//	Class - 
	$value = $pageObject->showDBValue("Class", $data, $keylink);
	$showValues["Class"] = $value;
	$showFields[] = "Class";
		$showRawValues["Class"] = substr($data["Class"],0,100);

//	photo - Document Download
	$value = $pageObject->showDBValue("photo", $data, $keylink);
	$showValues["photo"] = $value;
	$showFields[] = "photo";
		$showRawValues["photo"] = substr($data["photo"],0,100);

//	f1_name - 
	$value = $pageObject->showDBValue("f1_name", $data, $keylink);
	$showValues["f1_name"] = $value;
	$showFields[] = "f1_name";
		$showRawValues["f1_name"] = substr($data["f1_name"],0,100);

//	f1_tel - 
	$value = $pageObject->showDBValue("f1_tel", $data, $keylink);
	$showValues["f1_tel"] = $value;
	$showFields[] = "f1_tel";
		$showRawValues["f1_tel"] = substr($data["f1_tel"],0,100);

//	f2_name - 
	$value = $pageObject->showDBValue("f2_name", $data, $keylink);
	$showValues["f2_name"] = $value;
	$showFields[] = "f2_name";
		$showRawValues["f2_name"] = substr($data["f2_name"],0,100);

//	f2_tel - 
	$value = $pageObject->showDBValue("f2_tel", $data, $keylink);
	$showValues["f2_tel"] = $value;
	$showFields[] = "f2_tel";
		$showRawValues["f2_tel"] = substr($data["f2_tel"],0,100);

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

//	Dateout - 
	$value = $pageObject->showDBValue("Dateout", $data, $keylink);
	$showValues["Dateout"] = $value;
	$showFields[] = "Dateout";
		$showRawValues["Dateout"] = substr($data["Dateout"],0,100);

//	Option - Custom
	$value = $pageObject->showDBValue("Option", $data, $keylink);
	$showValues["Option"] = $value;
	$showFields[] = "Option";
		$showRawValues["Option"] = substr($data["Option"],0,100);

//	f2_job - 
	$value = $pageObject->showDBValue("f2_job", $data, $keylink);
	$showValues["f2_job"] = $value;
	$showFields[] = "f2_job";
		$showRawValues["f2_job"] = substr($data["f2_job"],0,100);

//	f1_job - 
	$value = $pageObject->showDBValue("f1_job", $data, $keylink);
	$showValues["f1_job"] = $value;
	$showFields[] = "f1_job";
		$showRawValues["f1_job"] = substr($data["f1_job"],0,100);
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
																	if($pageObject->pSet->isUseRTE("sesi") && $fName == "sesi")
	{
		$_SESSION[$strTableName."_"."sesi"."_rte"] = "Pagi";
		$control[$gfName]["params"]["mode"] = "add";
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
		$options['masterTable'] = "student_info";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "student_info";
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
	$strTableName = "student_info";
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

$pageObject->xt->assign("legend", true);

$viewlink = "";
$viewkeys = array();
	$viewkeys["editid1"] = postvalue("editid1");
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='student_info_view.php?".$viewlink."'\"");
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
