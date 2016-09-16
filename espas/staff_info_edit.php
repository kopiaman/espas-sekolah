<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/staff_info_variables.php");
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

$layout = new TLayout("edit2","Purific1Green1","MobileGreen1");
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
$layout->containers["details"] = array();

$layout->containers["details"][] = array("name"=>"editdetails","block"=>"detail_tables","substyle"=>1);


$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["staff_info_edit"] = $layout;


$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_edit_Personal1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_edit_Next_of_Kin1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_edit_Job_Info1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_edit_Mata_Pelajaran1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_edit_Account_Info1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_edit_Health_Info1"] = $layout;


$layout = new TLayout("list6","Purific1Green1","MobileGreen1");
$layout->blocks["center"] = array();
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);



$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_import","block"=>"import_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_export","block"=>"export_link","substyle"=>1);




$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"search","block"=>"searchform_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"search_buttons","block"=>"searchformbuttons_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";
$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";
$layout->blocks["top"][] = "recordcontrols";$page_layouts["staff_valuation_list"] = $layout;

$layout = new TLayout("list6","Purific1Green1","MobileGreen1");
$layout->blocks["center"] = array();
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);



$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_import","block"=>"import_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_export","block"=>"export_link","substyle"=>1);




$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"search","block"=>"searchform_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"search_buttons","block"=>"searchformbuttons_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";
$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";
$layout->blocks["top"][] = "recordcontrols";$page_layouts["staff_qualification_list"] = $layout;


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

$templatefile = "staff_info_edit.htm";

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
$keys["ID"] = urldecode(postvalue("editid1"));
$savedKeys["ID"] = urldecode(postvalue("editid1"));
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
			$dpPermis = $pageObject->getPermissions("staff_valuation");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["staff_valuation"] = $pageObject->pSet->getMasterKeysByDetailTable("staff_valuation");
			$dpParams['strTableNames'][] = "staff_valuation";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("staff_qualification");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["staff_qualification"] = $pageObject->pSet->getMasterKeysByDetailTable("staff_qualification");
			$dpParams['strTableNames'][] = "staff_qualification";
			$dpParams['ids'][] = ++$ids;
		}
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
		//	select only owned records
	$strWhereClause = whereAdd($strWhereClause,SecuritySQL("Edit"));
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
//	processing StaffNo - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_StaffNo = $pageObject->getControl("StaffNo", $id);
		$control_StaffNo->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing StaffNo - end
//	processing IC Number - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_IC_Number = $pageObject->getControl("IC Number", $id);
		$control_IC_Number->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing IC Number - end
//	processing Email - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Email = $pageObject->getControl("Email", $id);
		$control_Email->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Email - end
//	processing Gender - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Gender = $pageObject->getControl("Gender", $id);
		$control_Gender->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Gender - end
//	processing Mobile_Tel - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Mobile_Tel = $pageObject->getControl("Mobile_Tel", $id);
		$control_Mobile_Tel->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Mobile_Tel - end
//	processing Disability - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Disability = $pageObject->getControl("Disability", $id);
		$control_Disability->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Disability - end
//	processing Medical_condition - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Medical_condition = $pageObject->getControl("Medical_condition", $id);
		$control_Medical_condition->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Medical_condition - end
//	processing Join_Date - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Join_Date = $pageObject->getControl("Join_Date", $id);
		$control_Join_Date->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Join_Date - end
//	processing End_Date - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_End_Date = $pageObject->getControl("End_Date", $id);
		$control_End_Date->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing End_Date - end
//	processing Job_Type - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Job_Type = $pageObject->getControl("Job_Type", $id);
		$control_Job_Type->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Job_Type - end
//	processing Job_Title - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Job_Title = $pageObject->getControl("Job_Title", $id);
		$control_Job_Title->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Job_Title - end
//	processing married - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_married = $pageObject->getControl("married", $id);
		$control_married->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing married - end
//	processing blood - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_blood = $pageObject->getControl("blood", $id);
		$control_blood->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing blood - end
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
//	processing f1_relation - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f1_relation = $pageObject->getControl("f1_relation", $id);
		$control_f1_relation->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f1_relation - end
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
//	processing f2_relation - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f2_relation = $pageObject->getControl("f2_relation", $id);
		$control_f2_relation->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f2_relation - end
//	processing f2_tel - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f2_tel = $pageObject->getControl("f2_tel", $id);
		$control_f2_tel->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f2_tel - end
//	processing bank1 - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_bank1 = $pageObject->getControl("bank1", $id);
		$control_bank1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing bank1 - end
//	processing epf - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_epf = $pageObject->getControl("epf", $id);
		$control_epf->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing epf - end
//	processing Grade - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Grade = $pageObject->getControl("Grade", $id);
		$control_Grade->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Grade - end
//	processing kelulusan - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_kelulusan = $pageObject->getControl("kelulusan", $id);
		$control_kelulusan->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing kelulusan - end
//	processing Elaun - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Elaun = $pageObject->getControl("Elaun", $id);
		$control_Elaun->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Elaun - end
//	processing Job_Sesi - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Job_Sesi = $pageObject->getControl("Job_Sesi", $id);
		$control_Job_Sesi->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Job_Sesi - end
//	processing course_opsyen - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_course_opsyen = $pageObject->getControl("course_opsyen", $id);
		$control_course_opsyen->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing course_opsyen - end
//	processing course_main - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_course_main = $pageObject->getControl("course_main", $id);
		$control_course_main->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing course_main - end
//	processing Gerak_Date - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Gerak_Date = $pageObject->getControl("Gerak_Date", $id);
		$control_Gerak_Date->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Gerak_Date - end
//	processing sstatus - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_sstatus = $pageObject->getControl("sstatus", $id);
		$control_sstatus->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing sstatus - end
//	processing Address - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Address = $pageObject->getControl("Address", $id);
		$control_Address->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Address - end
//	processing Race - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Race = $pageObject->getControl("Race", $id);
		$control_Race->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Race - end

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
			//	processing StaffNo - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_StaffNo->afterSuccessfulSave();
				}
	//	processing StaffNo - end
			//	processing IC Number - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_IC_Number->afterSuccessfulSave();
				}
	//	processing IC Number - end
			//	processing Email - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Email->afterSuccessfulSave();
				}
	//	processing Email - end
			//	processing Gender - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Gender->afterSuccessfulSave();
				}
	//	processing Gender - end
			//	processing Mobile_Tel - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Mobile_Tel->afterSuccessfulSave();
				}
	//	processing Mobile_Tel - end
			//	processing Disability - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Disability->afterSuccessfulSave();
				}
	//	processing Disability - end
			//	processing Medical_condition - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Medical_condition->afterSuccessfulSave();
				}
	//	processing Medical_condition - end
			//	processing Join_Date - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Join_Date->afterSuccessfulSave();
				}
	//	processing Join_Date - end
			//	processing End_Date - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_End_Date->afterSuccessfulSave();
				}
	//	processing End_Date - end
			//	processing Job_Type - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Job_Type->afterSuccessfulSave();
				}
	//	processing Job_Type - end
			//	processing Job_Title - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Job_Title->afterSuccessfulSave();
				}
	//	processing Job_Title - end
			//	processing married - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_married->afterSuccessfulSave();
				}
	//	processing married - end
			//	processing blood - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_blood->afterSuccessfulSave();
				}
	//	processing blood - end
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
			//	processing f1_relation - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f1_relation->afterSuccessfulSave();
				}
	//	processing f1_relation - end
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
			//	processing f2_relation - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f2_relation->afterSuccessfulSave();
				}
	//	processing f2_relation - end
			//	processing f2_tel - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f2_tel->afterSuccessfulSave();
				}
	//	processing f2_tel - end
			//	processing bank1 - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_bank1->afterSuccessfulSave();
				}
	//	processing bank1 - end
			//	processing epf - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_epf->afterSuccessfulSave();
				}
	//	processing epf - end
			//	processing Grade - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Grade->afterSuccessfulSave();
				}
	//	processing Grade - end
			//	processing kelulusan - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_kelulusan->afterSuccessfulSave();
				}
	//	processing kelulusan - end
			//	processing Elaun - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Elaun->afterSuccessfulSave();
				}
	//	processing Elaun - end
			//	processing Job_Sesi - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Job_Sesi->afterSuccessfulSave();
				}
	//	processing Job_Sesi - end
			//	processing course_opsyen - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_course_opsyen->afterSuccessfulSave();
				}
	//	processing course_opsyen - end
			//	processing course_main - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_course_main->afterSuccessfulSave();
				}
	//	processing course_main - end
			//	processing Gerak_Date - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Gerak_Date->afterSuccessfulSave();
				}
	//	processing Gerak_Date - end
			//	processing sstatus - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_sstatus->afterSuccessfulSave();
				}
	//	processing sstatus - end
			//	processing Address - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Address->afterSuccessfulSave();
				}
	//	processing Address - end
			//	processing Race - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Race->afterSuccessfulSave();
				}
	//	processing Race - end
				
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
		$keyGetQ.="editid1=".rawurldecode($keys["ID"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: staff_info_".$pageObject->getPageType().".php?".$keyGetQ);
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
		header("Location: staff_info_list.php?a=return");
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
	$data["StaffNo"] = $evalues["StaffNo"];
	$data["IC Number"] = $evalues["IC Number"];
	$data["Email"] = $evalues["Email"];
	$data["Gender"] = $evalues["Gender"];
	$data["Mobile_Tel"] = $evalues["Mobile_Tel"];
	$data["Disability"] = $evalues["Disability"];
	$data["Medical_condition"] = $evalues["Medical_condition"];
	$data["Join_Date"] = $evalues["Join_Date"];
	$data["End_Date"] = $evalues["End_Date"];
	$data["Job_Type"] = $evalues["Job_Type"];
	$data["Job_Title"] = $evalues["Job_Title"];
	$data["married"] = $evalues["married"];
	$data["blood"] = $evalues["blood"];
	$data["photo"] = $evalues["photo"];
	$data["f1_name"] = $evalues["f1_name"];
	$data["f1_relation"] = $evalues["f1_relation"];
	$data["f1_tel"] = $evalues["f1_tel"];
	$data["f2_name"] = $evalues["f2_name"];
	$data["f2_relation"] = $evalues["f2_relation"];
	$data["f2_tel"] = $evalues["f2_tel"];
	$data["bank1"] = $evalues["bank1"];
	$data["epf"] = $evalues["epf"];
	$data["Grade"] = $evalues["Grade"];
	$data["kelulusan"] = $evalues["kelulusan"];
	$data["Elaun"] = $evalues["Elaun"];
	$data["Job_Sesi"] = $evalues["Job_Sesi"];
	$data["course_opsyen"] = $evalues["course_opsyen"];
	$data["course_main"] = $evalues["course_main"];
	$data["Gerak_Date"] = $evalues["Gerak_Date"];
	$data["sstatus"] = $evalues["sstatus"];
	$data["Address"] = $evalues["Address"];
	$data["Race"] = $evalues["Race"];
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
		
	if(!$pageObject->isAppearOnTabs("StaffNo"))
		$xt->assign("StaffNo_fieldblock",true);
	else
		$xt->assign("StaffNo_tabfieldblock",true);
	$xt->assign("StaffNo_label",true);
	if(isEnableSection508())
		$xt->assign_section("StaffNo_label","<label for=\"".GetInputElementId("StaffNo", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("IC Number"))
		$xt->assign("IC_Number_fieldblock",true);
	else
		$xt->assign("IC_Number_tabfieldblock",true);
	$xt->assign("IC_Number_label",true);
	if(isEnableSection508())
		$xt->assign_section("IC_Number_label","<label for=\"".GetInputElementId("IC Number", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Email"))
		$xt->assign("Email_fieldblock",true);
	else
		$xt->assign("Email_tabfieldblock",true);
	$xt->assign("Email_label",true);
	if(isEnableSection508())
		$xt->assign_section("Email_label","<label for=\"".GetInputElementId("Email", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Gender"))
		$xt->assign("Gender_fieldblock",true);
	else
		$xt->assign("Gender_tabfieldblock",true);
	$xt->assign("Gender_label",true);
	if(isEnableSection508())
		$xt->assign_section("Gender_label","<label for=\"".GetInputElementId("Gender", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Mobile_Tel"))
		$xt->assign("Mobile_Tel_fieldblock",true);
	else
		$xt->assign("Mobile_Tel_tabfieldblock",true);
	$xt->assign("Mobile_Tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("Mobile_Tel_label","<label for=\"".GetInputElementId("Mobile_Tel", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Disability"))
		$xt->assign("Disability_fieldblock",true);
	else
		$xt->assign("Disability_tabfieldblock",true);
	$xt->assign("Disability_label",true);
	if(isEnableSection508())
		$xt->assign_section("Disability_label","<label for=\"".GetInputElementId("Disability", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Medical_condition"))
		$xt->assign("Medical_condition_fieldblock",true);
	else
		$xt->assign("Medical_condition_tabfieldblock",true);
	$xt->assign("Medical_condition_label",true);
	if(isEnableSection508())
		$xt->assign_section("Medical_condition_label","<label for=\"".GetInputElementId("Medical_condition", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Join_Date"))
		$xt->assign("Join_Date_fieldblock",true);
	else
		$xt->assign("Join_Date_tabfieldblock",true);
	$xt->assign("Join_Date_label",true);
	if(isEnableSection508())
		$xt->assign_section("Join_Date_label","<label for=\"".GetInputElementId("Join_Date", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("End_Date"))
		$xt->assign("End_Date_fieldblock",true);
	else
		$xt->assign("End_Date_tabfieldblock",true);
	$xt->assign("End_Date_label",true);
	if(isEnableSection508())
		$xt->assign_section("End_Date_label","<label for=\"".GetInputElementId("End_Date", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Job_Type"))
		$xt->assign("Job_Type_fieldblock",true);
	else
		$xt->assign("Job_Type_tabfieldblock",true);
	$xt->assign("Job_Type_label",true);
	if(isEnableSection508())
		$xt->assign_section("Job_Type_label","<label for=\"".GetInputElementId("Job_Type", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Job_Title"))
		$xt->assign("Job_Title_fieldblock",true);
	else
		$xt->assign("Job_Title_tabfieldblock",true);
	$xt->assign("Job_Title_label",true);
	if(isEnableSection508())
		$xt->assign_section("Job_Title_label","<label for=\"".GetInputElementId("Job_Title", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("married"))
		$xt->assign("married_fieldblock",true);
	else
		$xt->assign("married_tabfieldblock",true);
	$xt->assign("married_label",true);
	if(isEnableSection508())
		$xt->assign_section("married_label","<label for=\"".GetInputElementId("married", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("blood"))
		$xt->assign("blood_fieldblock",true);
	else
		$xt->assign("blood_tabfieldblock",true);
	$xt->assign("blood_label",true);
	if(isEnableSection508())
		$xt->assign_section("blood_label","<label for=\"".GetInputElementId("blood", $id, PAGE_EDIT)."\">","</label>");
		
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
		
	if(!$pageObject->isAppearOnTabs("f1_relation"))
		$xt->assign("f1_relation_fieldblock",true);
	else
		$xt->assign("f1_relation_tabfieldblock",true);
	$xt->assign("f1_relation_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_relation_label","<label for=\"".GetInputElementId("f1_relation", $id, PAGE_EDIT)."\">","</label>");
		
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
		
	if(!$pageObject->isAppearOnTabs("f2_relation"))
		$xt->assign("f2_relation_fieldblock",true);
	else
		$xt->assign("f2_relation_tabfieldblock",true);
	$xt->assign("f2_relation_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_relation_label","<label for=\"".GetInputElementId("f2_relation", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f2_tel"))
		$xt->assign("f2_tel_fieldblock",true);
	else
		$xt->assign("f2_tel_tabfieldblock",true);
	$xt->assign("f2_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_tel_label","<label for=\"".GetInputElementId("f2_tel", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("bank1"))
		$xt->assign("bank1_fieldblock",true);
	else
		$xt->assign("bank1_tabfieldblock",true);
	$xt->assign("bank1_label",true);
	if(isEnableSection508())
		$xt->assign_section("bank1_label","<label for=\"".GetInputElementId("bank1", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("epf"))
		$xt->assign("epf_fieldblock",true);
	else
		$xt->assign("epf_tabfieldblock",true);
	$xt->assign("epf_label",true);
	if(isEnableSection508())
		$xt->assign_section("epf_label","<label for=\"".GetInputElementId("epf", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Grade"))
		$xt->assign("Grade_fieldblock",true);
	else
		$xt->assign("Grade_tabfieldblock",true);
	$xt->assign("Grade_label",true);
	if(isEnableSection508())
		$xt->assign_section("Grade_label","<label for=\"".GetInputElementId("Grade", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("kelulusan"))
		$xt->assign("kelulusan_fieldblock",true);
	else
		$xt->assign("kelulusan_tabfieldblock",true);
	$xt->assign("kelulusan_label",true);
	if(isEnableSection508())
		$xt->assign_section("kelulusan_label","<label for=\"".GetInputElementId("kelulusan", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Elaun"))
		$xt->assign("Elaun_fieldblock",true);
	else
		$xt->assign("Elaun_tabfieldblock",true);
	$xt->assign("Elaun_label",true);
	if(isEnableSection508())
		$xt->assign_section("Elaun_label","<label for=\"".GetInputElementId("Elaun", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Job_Sesi"))
		$xt->assign("Job_Sesi_fieldblock",true);
	else
		$xt->assign("Job_Sesi_tabfieldblock",true);
	$xt->assign("Job_Sesi_label",true);
	if(isEnableSection508())
		$xt->assign_section("Job_Sesi_label","<label for=\"".GetInputElementId("Job_Sesi", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("course_opsyen"))
		$xt->assign("course_opsyen_fieldblock",true);
	else
		$xt->assign("course_opsyen_tabfieldblock",true);
	$xt->assign("course_opsyen_label",true);
	if(isEnableSection508())
		$xt->assign_section("course_opsyen_label","<label for=\"".GetInputElementId("course_opsyen", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("course_main"))
		$xt->assign("course_main_fieldblock",true);
	else
		$xt->assign("course_main_tabfieldblock",true);
	$xt->assign("course_main_label",true);
	if(isEnableSection508())
		$xt->assign_section("course_main_label","<label for=\"".GetInputElementId("course_main", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Gerak_Date"))
		$xt->assign("Gerak_Date_fieldblock",true);
	else
		$xt->assign("Gerak_Date_tabfieldblock",true);
	$xt->assign("Gerak_Date_label",true);
	if(isEnableSection508())
		$xt->assign_section("Gerak_Date_label","<label for=\"".GetInputElementId("Gerak_Date", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("sstatus"))
		$xt->assign("sstatus_fieldblock",true);
	else
		$xt->assign("sstatus_tabfieldblock",true);
	$xt->assign("sstatus_label",true);
	if(isEnableSection508())
		$xt->assign_section("sstatus_label","<label for=\"".GetInputElementId("sstatus", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Address"))
		$xt->assign("Address_fieldblock",true);
	else
		$xt->assign("Address_tabfieldblock",true);
	$xt->assign("Address_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address_label","<label for=\"".GetInputElementId("Address", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Race"))
		$xt->assign("Race_fieldblock",true);
	else
		$xt->assign("Race_tabfieldblock",true);
	$xt->assign("Race_label",true);
	if(isEnableSection508())
		$xt->assign_section("Race_label","<label for=\"".GetInputElementId("Race", $id, PAGE_EDIT)."\">","</label>");
		

	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("ID", $data)));
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
		$options['masterTable'] = "staff_info";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "staff_info";
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
	$strTableName = "staff_info";
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
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='staff_info_view.php?".$viewlink."'\"");
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
