<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/staff_info_variables.php");
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

$layout = new TLayout("add2","Purific1Green1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->containers["add"] = array();

$layout->containers["add"][] = array("name"=>"addheader","block"=>"","substyle"=>2);


$layout->containers["add"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["add"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["add"] = "1";
$layout->blocks["top"][] = "add";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["staff_info_add"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_add_Personal1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_add_Next_of_Kin1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_add_Job_Info1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_add_Mata_Pelajaran1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_add_Account_Info1"] = $layout;

$layout = new TLayout("tab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_add_Health_Info1"] = $layout;



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
	$templatefile = "staff_info_inline_add.htm";
else
	$templatefile = "staff_info_add.htm";

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
		header('Location: staff_info_add.php');
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
//	processing photo - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_photo = $pageObject->getControl("photo", $id);
		$control_photo->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing photo - end
//	processing Name - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Name = $pageObject->getControl("Name", $id);
		$control_Name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Name - end
//	processing IC Number - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_IC_Number = $pageObject->getControl("IC Number", $id);
		$control_IC_Number->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing IC Number - end
//	processing Gender - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Gender = $pageObject->getControl("Gender", $id);
		$control_Gender->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Gender - end
//	processing Race - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Race = $pageObject->getControl("Race", $id);
		$control_Race->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Race - end
//	processing married - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_married = $pageObject->getControl("married", $id);
		$control_married->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing married - end
//	processing kelulusan - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_kelulusan = $pageObject->getControl("kelulusan", $id);
		$control_kelulusan->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing kelulusan - end
//	processing Mobile_Tel - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Mobile_Tel = $pageObject->getControl("Mobile_Tel", $id);
		$control_Mobile_Tel->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Mobile_Tel - end
//	processing Email - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Email = $pageObject->getControl("Email", $id);
		$control_Email->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Email - end
//	processing Address - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Address = $pageObject->getControl("Address", $id);
		$control_Address->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Address - end
//	processing f1_name - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f1_name = $pageObject->getControl("f1_name", $id);
		$control_f1_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f1_name - end
//	processing f1_relation - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f1_relation = $pageObject->getControl("f1_relation", $id);
		$control_f1_relation->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f1_relation - end
//	processing f1_tel - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f1_tel = $pageObject->getControl("f1_tel", $id);
		$control_f1_tel->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f1_tel - end
//	processing f2_name - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f2_name = $pageObject->getControl("f2_name", $id);
		$control_f2_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f2_name - end
//	processing f2_relation - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f2_relation = $pageObject->getControl("f2_relation", $id);
		$control_f2_relation->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f2_relation - end
//	processing f2_tel - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f2_tel = $pageObject->getControl("f2_tel", $id);
		$control_f2_tel->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f2_tel - end
//	processing sstatus - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_sstatus = $pageObject->getControl("sstatus", $id);
		$control_sstatus->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing sstatus - end
//	processing StaffNo - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_StaffNo = $pageObject->getControl("StaffNo", $id);
		$control_StaffNo->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing StaffNo - end
//	processing Job_Sesi - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Job_Sesi = $pageObject->getControl("Job_Sesi", $id);
		$control_Job_Sesi->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Job_Sesi - end
//	processing Job_Type - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Job_Type = $pageObject->getControl("Job_Type", $id);
		$control_Job_Type->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Job_Type - end
//	processing Job_Title - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Job_Title = $pageObject->getControl("Job_Title", $id);
		$control_Job_Title->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Job_Title - end
//	processing Grade - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Grade = $pageObject->getControl("Grade", $id);
		$control_Grade->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Grade - end
//	processing Elaun - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Elaun = $pageObject->getControl("Elaun", $id);
		$control_Elaun->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Elaun - end
//	processing Join_Date - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Join_Date = $pageObject->getControl("Join_Date", $id);
		$control_Join_Date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Join_Date - end
//	processing End_Date - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_End_Date = $pageObject->getControl("End_Date", $id);
		$control_End_Date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing End_Date - end
//	processing Gerak_Date - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Gerak_Date = $pageObject->getControl("Gerak_Date", $id);
		$control_Gerak_Date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Gerak_Date - end
//	processing course_main - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_course_main = $pageObject->getControl("course_main", $id);
		$control_course_main->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing course_main - end
//	processing course_opsyen - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_course_opsyen = $pageObject->getControl("course_opsyen", $id);
		$control_course_opsyen->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing course_opsyen - end
//	processing bank1 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_bank1 = $pageObject->getControl("bank1", $id);
		$control_bank1->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing bank1 - end
//	processing epf - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_epf = $pageObject->getControl("epf", $id);
		$control_epf->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing epf - end
//	processing Disability - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Disability = $pageObject->getControl("Disability", $id);
		$control_Disability->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Disability - end
//	processing Medical_condition - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Medical_condition = $pageObject->getControl("Medical_condition", $id);
		$control_Medical_condition->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Medical_condition - end
//	processing blood - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_blood = $pageObject->getControl("blood", $id);
		$control_blood->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing blood - end

//	insert ownerid value if exists
	if($strOriginalTableName == $pageObject->pSet->getOwnerTable("IC_No"))
		$avalues["IC_No"] = prepare_for_db("IC_No",$_SESSION["_".$strTableName."_OwnerID"]);



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
//	processing photo - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_photo->afterSuccessfulSave();
			}
//	processing photo - end
//	processing Name - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Name->afterSuccessfulSave();
			}
//	processing Name - end
//	processing IC Number - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_IC_Number->afterSuccessfulSave();
			}
//	processing IC Number - end
//	processing Gender - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Gender->afterSuccessfulSave();
			}
//	processing Gender - end
//	processing Race - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Race->afterSuccessfulSave();
			}
//	processing Race - end
//	processing married - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_married->afterSuccessfulSave();
			}
//	processing married - end
//	processing kelulusan - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_kelulusan->afterSuccessfulSave();
			}
//	processing kelulusan - end
//	processing Mobile_Tel - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Mobile_Tel->afterSuccessfulSave();
			}
//	processing Mobile_Tel - end
//	processing Email - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Email->afterSuccessfulSave();
			}
//	processing Email - end
//	processing Address - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Address->afterSuccessfulSave();
			}
//	processing Address - end
//	processing f1_name - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f1_name->afterSuccessfulSave();
			}
//	processing f1_name - end
//	processing f1_relation - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f1_relation->afterSuccessfulSave();
			}
//	processing f1_relation - end
//	processing f1_tel - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f1_tel->afterSuccessfulSave();
			}
//	processing f1_tel - end
//	processing f2_name - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f2_name->afterSuccessfulSave();
			}
//	processing f2_name - end
//	processing f2_relation - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f2_relation->afterSuccessfulSave();
			}
//	processing f2_relation - end
//	processing f2_tel - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f2_tel->afterSuccessfulSave();
			}
//	processing f2_tel - end
//	processing sstatus - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_sstatus->afterSuccessfulSave();
			}
//	processing sstatus - end
//	processing StaffNo - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_StaffNo->afterSuccessfulSave();
			}
//	processing StaffNo - end
//	processing Job_Sesi - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Job_Sesi->afterSuccessfulSave();
			}
//	processing Job_Sesi - end
//	processing Job_Type - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Job_Type->afterSuccessfulSave();
			}
//	processing Job_Type - end
//	processing Job_Title - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Job_Title->afterSuccessfulSave();
			}
//	processing Job_Title - end
//	processing Grade - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Grade->afterSuccessfulSave();
			}
//	processing Grade - end
//	processing Elaun - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Elaun->afterSuccessfulSave();
			}
//	processing Elaun - end
//	processing Join_Date - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Join_Date->afterSuccessfulSave();
			}
//	processing Join_Date - end
//	processing End_Date - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_End_Date->afterSuccessfulSave();
			}
//	processing End_Date - end
//	processing Gerak_Date - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Gerak_Date->afterSuccessfulSave();
			}
//	processing Gerak_Date - end
//	processing course_main - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_course_main->afterSuccessfulSave();
			}
//	processing course_main - end
//	processing course_opsyen - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_course_opsyen->afterSuccessfulSave();
			}
//	processing course_opsyen - end
//	processing bank1 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_bank1->afterSuccessfulSave();
			}
//	processing bank1 - end
//	processing epf - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_epf->afterSuccessfulSave();
			}
//	processing epf - end
//	processing Disability - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Disability->afterSuccessfulSave();
			}
//	processing Disability - end
//	processing Medical_condition - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Medical_condition->afterSuccessfulSave();
			}
//	processing Medical_condition - end
//	processing blood - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_blood->afterSuccessfulSave();
			}
//	processing blood - end

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
						$message .='&nbsp;<a href=\'staff_info_edit.php?'.$keylink.'\'>'."Sunting".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'staff_info_view.php?'.$keylink.'\'>'."Lihat".'</a>&nbsp;';
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
	header("Location: staff_info_".$pageObject->getPageType().".php");
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
		$copykeys["ID"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["ID"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strWhere=whereAdd($strWhere,SecuritySQL("Search"));
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["ID"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
	$defvalues["sstatus"] = "Aktif";
}

//	insert default ownerid value if exists
	if($strOriginalTableName == $pageObject->pSet->getOwnerTable("IC_No"))
		$defvalues["IC_No"] = prepare_for_db("IC_No",$_SESSION["_".$strTableName."_OwnerID"]);


if($readavalues)
{
	$defvalues["Name"]=@$avalues["Name"];
	$defvalues["StaffNo"]=@$avalues["StaffNo"];
	$defvalues["IC Number"]=@$avalues["IC Number"];
	$defvalues["Email"]=@$avalues["Email"];
	$defvalues["Gender"]=@$avalues["Gender"];
	$defvalues["Mobile_Tel"]=@$avalues["Mobile_Tel"];
	$defvalues["Disability"]=@$avalues["Disability"];
	$defvalues["Medical_condition"]=@$avalues["Medical_condition"];
	$defvalues["Join_Date"]=@$avalues["Join_Date"];
	$defvalues["End_Date"]=@$avalues["End_Date"];
	$defvalues["Job_Type"]=@$avalues["Job_Type"];
	$defvalues["Job_Title"]=@$avalues["Job_Title"];
	$defvalues["married"]=@$avalues["married"];
	$defvalues["blood"]=@$avalues["blood"];
	$defvalues["f1_name"]=@$avalues["f1_name"];
	$defvalues["f1_relation"]=@$avalues["f1_relation"];
	$defvalues["f1_tel"]=@$avalues["f1_tel"];
	$defvalues["f2_name"]=@$avalues["f2_name"];
	$defvalues["f2_relation"]=@$avalues["f2_relation"];
	$defvalues["f2_tel"]=@$avalues["f2_tel"];
	$defvalues["bank1"]=@$avalues["bank1"];
	$defvalues["epf"]=@$avalues["epf"];
	$defvalues["Grade"]=@$avalues["Grade"];
	$defvalues["kelulusan"]=@$avalues["kelulusan"];
	$defvalues["Elaun"]=@$avalues["Elaun"];
	$defvalues["Job_Sesi"]=@$avalues["Job_Sesi"];
	$defvalues["course_opsyen"]=@$avalues["course_opsyen"];
	$defvalues["course_main"]=@$avalues["course_main"];
	$defvalues["Gerak_Date"]=@$avalues["Gerak_Date"];
	$defvalues["sstatus"]=@$avalues["sstatus"];
	$defvalues["Address"]=@$avalues["Address"];
	$defvalues["Race"]=@$avalues["Race"];
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
	
	if(!$pageObject->isAppearOnTabs("Name"))
		$xt->assign("Name_fieldblock",true);
	else
		$xt->assign("Name_tabfieldblock",true);
	$xt->assign("Name_label",true);
	if(isEnableSection508())
		$xt->assign_section("Name_label","<label for=\"".GetInputElementId("Name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("StaffNo"))
		$xt->assign("StaffNo_fieldblock",true);
	else
		$xt->assign("StaffNo_tabfieldblock",true);
	$xt->assign("StaffNo_label",true);
	if(isEnableSection508())
		$xt->assign_section("StaffNo_label","<label for=\"".GetInputElementId("StaffNo", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("IC Number"))
		$xt->assign("IC_Number_fieldblock",true);
	else
		$xt->assign("IC_Number_tabfieldblock",true);
	$xt->assign("IC_Number_label",true);
	if(isEnableSection508())
		$xt->assign_section("IC_Number_label","<label for=\"".GetInputElementId("IC Number", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Email"))
		$xt->assign("Email_fieldblock",true);
	else
		$xt->assign("Email_tabfieldblock",true);
	$xt->assign("Email_label",true);
	if(isEnableSection508())
		$xt->assign_section("Email_label","<label for=\"".GetInputElementId("Email", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Gender"))
		$xt->assign("Gender_fieldblock",true);
	else
		$xt->assign("Gender_tabfieldblock",true);
	$xt->assign("Gender_label",true);
	if(isEnableSection508())
		$xt->assign_section("Gender_label","<label for=\"".GetInputElementId("Gender", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Mobile_Tel"))
		$xt->assign("Mobile_Tel_fieldblock",true);
	else
		$xt->assign("Mobile_Tel_tabfieldblock",true);
	$xt->assign("Mobile_Tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("Mobile_Tel_label","<label for=\"".GetInputElementId("Mobile_Tel", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Disability"))
		$xt->assign("Disability_fieldblock",true);
	else
		$xt->assign("Disability_tabfieldblock",true);
	$xt->assign("Disability_label",true);
	if(isEnableSection508())
		$xt->assign_section("Disability_label","<label for=\"".GetInputElementId("Disability", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Medical_condition"))
		$xt->assign("Medical_condition_fieldblock",true);
	else
		$xt->assign("Medical_condition_tabfieldblock",true);
	$xt->assign("Medical_condition_label",true);
	if(isEnableSection508())
		$xt->assign_section("Medical_condition_label","<label for=\"".GetInputElementId("Medical_condition", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Join_Date"))
		$xt->assign("Join_Date_fieldblock",true);
	else
		$xt->assign("Join_Date_tabfieldblock",true);
	$xt->assign("Join_Date_label",true);
	if(isEnableSection508())
		$xt->assign_section("Join_Date_label","<label for=\"".GetInputElementId("Join_Date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("End_Date"))
		$xt->assign("End_Date_fieldblock",true);
	else
		$xt->assign("End_Date_tabfieldblock",true);
	$xt->assign("End_Date_label",true);
	if(isEnableSection508())
		$xt->assign_section("End_Date_label","<label for=\"".GetInputElementId("End_Date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Job_Type"))
		$xt->assign("Job_Type_fieldblock",true);
	else
		$xt->assign("Job_Type_tabfieldblock",true);
	$xt->assign("Job_Type_label",true);
	if(isEnableSection508())
		$xt->assign_section("Job_Type_label","<label for=\"".GetInputElementId("Job_Type", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Job_Title"))
		$xt->assign("Job_Title_fieldblock",true);
	else
		$xt->assign("Job_Title_tabfieldblock",true);
	$xt->assign("Job_Title_label",true);
	if(isEnableSection508())
		$xt->assign_section("Job_Title_label","<label for=\"".GetInputElementId("Job_Title", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("married"))
		$xt->assign("married_fieldblock",true);
	else
		$xt->assign("married_tabfieldblock",true);
	$xt->assign("married_label",true);
	if(isEnableSection508())
		$xt->assign_section("married_label","<label for=\"".GetInputElementId("married", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("blood"))
		$xt->assign("blood_fieldblock",true);
	else
		$xt->assign("blood_tabfieldblock",true);
	$xt->assign("blood_label",true);
	if(isEnableSection508())
		$xt->assign_section("blood_label","<label for=\"".GetInputElementId("blood", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("photo"))
		$xt->assign("photo_fieldblock",true);
	else
		$xt->assign("photo_tabfieldblock",true);
	$xt->assign("photo_label",true);
	if(isEnableSection508())
		$xt->assign_section("photo_label","<label for=\"".GetInputElementId("photo", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f1_name"))
		$xt->assign("f1_name_fieldblock",true);
	else
		$xt->assign("f1_name_tabfieldblock",true);
	$xt->assign("f1_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_name_label","<label for=\"".GetInputElementId("f1_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f1_relation"))
		$xt->assign("f1_relation_fieldblock",true);
	else
		$xt->assign("f1_relation_tabfieldblock",true);
	$xt->assign("f1_relation_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_relation_label","<label for=\"".GetInputElementId("f1_relation", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f1_tel"))
		$xt->assign("f1_tel_fieldblock",true);
	else
		$xt->assign("f1_tel_tabfieldblock",true);
	$xt->assign("f1_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_tel_label","<label for=\"".GetInputElementId("f1_tel", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f2_name"))
		$xt->assign("f2_name_fieldblock",true);
	else
		$xt->assign("f2_name_tabfieldblock",true);
	$xt->assign("f2_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_name_label","<label for=\"".GetInputElementId("f2_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f2_relation"))
		$xt->assign("f2_relation_fieldblock",true);
	else
		$xt->assign("f2_relation_tabfieldblock",true);
	$xt->assign("f2_relation_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_relation_label","<label for=\"".GetInputElementId("f2_relation", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f2_tel"))
		$xt->assign("f2_tel_fieldblock",true);
	else
		$xt->assign("f2_tel_tabfieldblock",true);
	$xt->assign("f2_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_tel_label","<label for=\"".GetInputElementId("f2_tel", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("bank1"))
		$xt->assign("bank1_fieldblock",true);
	else
		$xt->assign("bank1_tabfieldblock",true);
	$xt->assign("bank1_label",true);
	if(isEnableSection508())
		$xt->assign_section("bank1_label","<label for=\"".GetInputElementId("bank1", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("epf"))
		$xt->assign("epf_fieldblock",true);
	else
		$xt->assign("epf_tabfieldblock",true);
	$xt->assign("epf_label",true);
	if(isEnableSection508())
		$xt->assign_section("epf_label","<label for=\"".GetInputElementId("epf", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Grade"))
		$xt->assign("Grade_fieldblock",true);
	else
		$xt->assign("Grade_tabfieldblock",true);
	$xt->assign("Grade_label",true);
	if(isEnableSection508())
		$xt->assign_section("Grade_label","<label for=\"".GetInputElementId("Grade", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("kelulusan"))
		$xt->assign("kelulusan_fieldblock",true);
	else
		$xt->assign("kelulusan_tabfieldblock",true);
	$xt->assign("kelulusan_label",true);
	if(isEnableSection508())
		$xt->assign_section("kelulusan_label","<label for=\"".GetInputElementId("kelulusan", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Elaun"))
		$xt->assign("Elaun_fieldblock",true);
	else
		$xt->assign("Elaun_tabfieldblock",true);
	$xt->assign("Elaun_label",true);
	if(isEnableSection508())
		$xt->assign_section("Elaun_label","<label for=\"".GetInputElementId("Elaun", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Job_Sesi"))
		$xt->assign("Job_Sesi_fieldblock",true);
	else
		$xt->assign("Job_Sesi_tabfieldblock",true);
	$xt->assign("Job_Sesi_label",true);
	if(isEnableSection508())
		$xt->assign_section("Job_Sesi_label","<label for=\"".GetInputElementId("Job_Sesi", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("course_opsyen"))
		$xt->assign("course_opsyen_fieldblock",true);
	else
		$xt->assign("course_opsyen_tabfieldblock",true);
	$xt->assign("course_opsyen_label",true);
	if(isEnableSection508())
		$xt->assign_section("course_opsyen_label","<label for=\"".GetInputElementId("course_opsyen", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("course_main"))
		$xt->assign("course_main_fieldblock",true);
	else
		$xt->assign("course_main_tabfieldblock",true);
	$xt->assign("course_main_label",true);
	if(isEnableSection508())
		$xt->assign_section("course_main_label","<label for=\"".GetInputElementId("course_main", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Gerak_Date"))
		$xt->assign("Gerak_Date_fieldblock",true);
	else
		$xt->assign("Gerak_Date_tabfieldblock",true);
	$xt->assign("Gerak_Date_label",true);
	if(isEnableSection508())
		$xt->assign_section("Gerak_Date_label","<label for=\"".GetInputElementId("Gerak_Date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("sstatus"))
		$xt->assign("sstatus_fieldblock",true);
	else
		$xt->assign("sstatus_tabfieldblock",true);
	$xt->assign("sstatus_label",true);
	if(isEnableSection508())
		$xt->assign_section("sstatus_label","<label for=\"".GetInputElementId("sstatus", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Address"))
		$xt->assign("Address_fieldblock",true);
	else
		$xt->assign("Address_tabfieldblock",true);
	$xt->assign("Address_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address_label","<label for=\"".GetInputElementId("Address", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Race"))
		$xt->assign("Race_fieldblock",true);
	else
		$xt->assign("Race_tabfieldblock",true);
	$xt->assign("Race_label",true);
	if(isEnableSection508())
		$xt->assign_section("Race_label","<label for=\"".GetInputElementId("Race", $id, PAGE_ADD)."\">","</label>");
	
	
	
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
		//	select only owned records
		$where=whereAdd($where,SecuritySQL("Search"));
		
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
	$showDetailKeys["staff_valuation"]["masterkey1"] = $data["ID"];	
	$showDetailKeys["staff_qualification"]["masterkey1"] = $data["ID"];	

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ID"]));
	
////////////////////////////////////////////
//	Name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Name", $data, $keylink);
		$showValues["Name"] = $value;
		$showFields[] = "Name";
	}	
//	StaffNo
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("StaffNo", $data, $keylink);
		$showValues["StaffNo"] = $value;
		$showFields[] = "StaffNo";
	}	
//	IC Number
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("IC Number", $data, $keylink);
		$showValues["IC Number"] = $value;
		$showFields[] = "IC Number";
	}	
//	Email
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Email", $data, $keylink);
		$showValues["Email"] = $value;
		$showFields[] = "Email";
	}	
//	Gender
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Gender", $data, $keylink);
		$showValues["Gender"] = $value;
		$showFields[] = "Gender";
	}	
//	Mobile_Tel
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Mobile_Tel", $data, $keylink);
		$showValues["Mobile_Tel"] = $value;
		$showFields[] = "Mobile_Tel";
	}	
//	Disability
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Disability", $data, $keylink);
		$showValues["Disability"] = $value;
		$showFields[] = "Disability";
	}	
//	Medical_condition
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Medical_condition", $data, $keylink);
		$showValues["Medical_condition"] = $value;
		$showFields[] = "Medical_condition";
	}	
//	Join_Date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Join_Date", $data, $keylink);
		$showValues["Join_Date"] = $value;
		$showFields[] = "Join_Date";
	}	
//	End_Date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("End_Date", $data, $keylink);
		$showValues["End_Date"] = $value;
		$showFields[] = "End_Date";
	}	
//	Job_Type
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Job_Type", $data, $keylink);
		$showValues["Job_Type"] = $value;
		$showFields[] = "Job_Type";
	}	
//	Job_Title
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Job_Title", $data, $keylink);
		$showValues["Job_Title"] = $value;
		$showFields[] = "Job_Title";
	}	
//	married
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("married", $data, $keylink);
		$showValues["married"] = $value;
		$showFields[] = "married";
	}	
//	blood
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("blood", $data, $keylink);
		$showValues["blood"] = $value;
		$showFields[] = "blood";
	}	
//	photo
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("photo", $data, $keylink);
		$showValues["photo"] = $value;
		$showFields[] = "photo";
	}	
//	f1_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f1_name", $data, $keylink);
		$showValues["f1_name"] = $value;
		$showFields[] = "f1_name";
	}	
//	f1_relation
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f1_relation", $data, $keylink);
		$showValues["f1_relation"] = $value;
		$showFields[] = "f1_relation";
	}	
//	f1_tel
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f1_tel", $data, $keylink);
		$showValues["f1_tel"] = $value;
		$showFields[] = "f1_tel";
	}	
//	f2_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f2_name", $data, $keylink);
		$showValues["f2_name"] = $value;
		$showFields[] = "f2_name";
	}	
//	f2_relation
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f2_relation", $data, $keylink);
		$showValues["f2_relation"] = $value;
		$showFields[] = "f2_relation";
	}	
//	f2_tel
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f2_tel", $data, $keylink);
		$showValues["f2_tel"] = $value;
		$showFields[] = "f2_tel";
	}	
//	bank1
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("bank1", $data, $keylink);
		$showValues["bank1"] = $value;
		$showFields[] = "bank1";
	}	
//	epf
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("epf", $data, $keylink);
		$showValues["epf"] = $value;
		$showFields[] = "epf";
	}	
//	Grade
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Grade", $data, $keylink);
		$showValues["Grade"] = $value;
		$showFields[] = "Grade";
	}	
//	kelulusan
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("kelulusan", $data, $keylink);
		$showValues["kelulusan"] = $value;
		$showFields[] = "kelulusan";
	}	
//	Elaun
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Elaun", $data, $keylink);
		$showValues["Elaun"] = $value;
		$showFields[] = "Elaun";
	}	
//	Job_Sesi
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Job_Sesi", $data, $keylink);
		$showValues["Job_Sesi"] = $value;
		$showFields[] = "Job_Sesi";
	}	
//	course_opsyen
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("course_opsyen", $data, $keylink);
		$showValues["course_opsyen"] = $value;
		$showFields[] = "course_opsyen";
	}	
//	course_main
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("course_main", $data, $keylink);
		$showValues["course_main"] = $value;
		$showFields[] = "course_main";
	}	
//	Gerak_Date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Gerak_Date", $data, $keylink);
		$showValues["Gerak_Date"] = $value;
		$showFields[] = "Gerak_Date";
	}	
//	sstatus
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("sstatus", $data, $keylink);
		$showValues["sstatus"] = $value;
		$showFields[] = "sstatus";
	}	
//	Address
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Address", $data, $keylink);
		$showValues["Address"] = $value;
		$showFields[] = "Address";
	}	
//	Race
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Race", $data, $keylink);
		$showValues["Race"] = $value;
		$showFields[] = "Race";
	}	
		$showRawValues["ID"] = substr($data["ID"],0,100);
		$showRawValues["Name"] = substr($data["Name"],0,100);
		$showRawValues["StaffNo"] = substr($data["StaffNo"],0,100);
		$showRawValues["IC Number"] = substr($data["IC Number"],0,100);
		$showRawValues["Email"] = substr($data["Email"],0,100);
		$showRawValues["Gender"] = substr($data["Gender"],0,100);
		$showRawValues["Mobile_Tel"] = substr($data["Mobile_Tel"],0,100);
		$showRawValues["Disability"] = substr($data["Disability"],0,100);
		$showRawValues["Medical_condition"] = substr($data["Medical_condition"],0,100);
		$showRawValues["Join_Date"] = substr($data["Join_Date"],0,100);
		$showRawValues["End_Date"] = substr($data["End_Date"],0,100);
		$showRawValues["Job_Type"] = substr($data["Job_Type"],0,100);
		$showRawValues["Job_Title"] = substr($data["Job_Title"],0,100);
		$showRawValues["married"] = substr($data["married"],0,100);
		$showRawValues["blood"] = substr($data["blood"],0,100);
		$showRawValues["photo"] = substr($data["photo"],0,100);
		$showRawValues["f1_name"] = substr($data["f1_name"],0,100);
		$showRawValues["f1_relation"] = substr($data["f1_relation"],0,100);
		$showRawValues["f1_tel"] = substr($data["f1_tel"],0,100);
		$showRawValues["f2_name"] = substr($data["f2_name"],0,100);
		$showRawValues["f2_relation"] = substr($data["f2_relation"],0,100);
		$showRawValues["f2_tel"] = substr($data["f2_tel"],0,100);
		$showRawValues["bank1"] = substr($data["bank1"],0,100);
		$showRawValues["epf"] = substr($data["epf"],0,100);
		$showRawValues["Grade"] = substr($data["Grade"],0,100);
		$showRawValues["kelulusan"] = substr($data["kelulusan"],0,100);
		$showRawValues["Elaun"] = substr($data["Elaun"],0,100);
		$showRawValues["Job_Sesi"] = substr($data["Job_Sesi"],0,100);
		$showRawValues["course_opsyen"] = substr($data["course_opsyen"],0,100);
		$showRawValues["course_main"] = substr($data["course_main"],0,100);
		$showRawValues["Gerak_Date"] = substr($data["Gerak_Date"],0,100);
		$showRawValues["sstatus"] = substr($data["sstatus"],0,100);
		$showRawValues["Address"] = substr($data["Address"],0,100);
		$showRawValues["Race"] = substr($data["Race"],0,100);
	
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
							//	select only owned records
				$where=whereAdd($where,SecuritySQL("Search"));
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
		$options['masterTable'] = "staff_info";
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
	$strTableName = "staff_info";
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
$pageObject->xt->assign("legend", true);

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
