<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/staff_info_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","Purific1Green1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->containers["details"] = array();

$layout->containers["details"][] = array("name"=>"viewdetails","block"=>"detail_tables","substyle"=>1);


$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["staff_info_view"] = $layout;


$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_view_Personal1"] = $layout;

$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_view_Next_of_Kin1"] = $layout;

$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_view_Job_Info1"] = $layout;

$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_view_Mata_Pelajaran1"] = $layout;

$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_view_Account_Info1"] = $layout;

$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["staff_info_view_Health_Info1"] = $layout;


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


//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$dpPermis = $pageObject->getPermissions("staff_qualification");
	if ($dpPermis['search']){
		$mKeys["staff_qualification"] = $pageObject->pSet->getMasterKeysByDetailTable("staff_qualification");
		$dpParams['strTableNames'][] = "staff_qualification";
		$dpParams['ids'][] = ++$ids;
	}
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: staff_info_list.php?a=return");
	exit();
}

$out = "";
$first = true;
$fieldsArr = array();
$arr = array();
$arr['fName'] = "photo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("photo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "IC Number";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("IC Number");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Gender";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Gender");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Race";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Race");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "married";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("married");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "kelulusan";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("kelulusan");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Mobile_Tel";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Mobile_Tel");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Email";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Email");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Address";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Address");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "f1_name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("f1_name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "f1_relation";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("f1_relation");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "f1_tel";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("f1_tel");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "f2_name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("f2_name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "f2_relation";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("f2_relation");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "f2_tel";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("f2_tel");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "sstatus";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("sstatus");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "StaffNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("StaffNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Job_Sesi";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Job_Sesi");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Job_Type";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Job_Type");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Job_Title";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Job_Title");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Grade";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Grade");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Elaun";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Elaun");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Join_Date";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Join_Date");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "End_Date";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("End_Date");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Gerak_Date";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Gerak_Date");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "course_main";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("course_main");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "course_opsyen";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("course_opsyen");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "bank1";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("bank1");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "epf";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("epf");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Disability";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Disability");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Medical_condition";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Medical_condition");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "blood";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("blood");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("ID", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ID"]));

////////////////////////////////////////////
//photo - Document Download
	
	$value = $pageObject->showDBValue("photo", $data, $keylink);
	if($mainTableOwnerID=="photo")
		$ownerIdValue=$value;
	$xt->assign("photo_value",$value);
	if(!$pageObject->isAppearOnTabs("photo"))
		$xt->assign("photo_fieldblock",true);
	else
		$xt->assign("photo_tabfieldblock",true);
////////////////////////////////////////////
//Name - 
	
	$value = $pageObject->showDBValue("Name", $data, $keylink);
	if($mainTableOwnerID=="Name")
		$ownerIdValue=$value;
	$xt->assign("Name_value",$value);
	if(!$pageObject->isAppearOnTabs("Name"))
		$xt->assign("Name_fieldblock",true);
	else
		$xt->assign("Name_tabfieldblock",true);
////////////////////////////////////////////
//IC Number - 
	
	$value = $pageObject->showDBValue("IC Number", $data, $keylink);
	if($mainTableOwnerID=="IC Number")
		$ownerIdValue=$value;
	$xt->assign("IC_Number_value",$value);
	if(!$pageObject->isAppearOnTabs("IC Number"))
		$xt->assign("IC_Number_fieldblock",true);
	else
		$xt->assign("IC_Number_tabfieldblock",true);
////////////////////////////////////////////
//Gender - 
	
	$value = $pageObject->showDBValue("Gender", $data, $keylink);
	if($mainTableOwnerID=="Gender")
		$ownerIdValue=$value;
	$xt->assign("Gender_value",$value);
	if(!$pageObject->isAppearOnTabs("Gender"))
		$xt->assign("Gender_fieldblock",true);
	else
		$xt->assign("Gender_tabfieldblock",true);
////////////////////////////////////////////
//Race - 
	
	$value = $pageObject->showDBValue("Race", $data, $keylink);
	if($mainTableOwnerID=="Race")
		$ownerIdValue=$value;
	$xt->assign("Race_value",$value);
	if(!$pageObject->isAppearOnTabs("Race"))
		$xt->assign("Race_fieldblock",true);
	else
		$xt->assign("Race_tabfieldblock",true);
////////////////////////////////////////////
//married - 
	
	$value = $pageObject->showDBValue("married", $data, $keylink);
	if($mainTableOwnerID=="married")
		$ownerIdValue=$value;
	$xt->assign("married_value",$value);
	if(!$pageObject->isAppearOnTabs("married"))
		$xt->assign("married_fieldblock",true);
	else
		$xt->assign("married_tabfieldblock",true);
////////////////////////////////////////////
//kelulusan - 
	
	$value = $pageObject->showDBValue("kelulusan", $data, $keylink);
	if($mainTableOwnerID=="kelulusan")
		$ownerIdValue=$value;
	$xt->assign("kelulusan_value",$value);
	if(!$pageObject->isAppearOnTabs("kelulusan"))
		$xt->assign("kelulusan_fieldblock",true);
	else
		$xt->assign("kelulusan_tabfieldblock",true);
////////////////////////////////////////////
//Mobile_Tel - 
	
	$value = $pageObject->showDBValue("Mobile_Tel", $data, $keylink);
	if($mainTableOwnerID=="Mobile_Tel")
		$ownerIdValue=$value;
	$xt->assign("Mobile_Tel_value",$value);
	if(!$pageObject->isAppearOnTabs("Mobile_Tel"))
		$xt->assign("Mobile_Tel_fieldblock",true);
	else
		$xt->assign("Mobile_Tel_tabfieldblock",true);
////////////////////////////////////////////
//Email - 
	
	$value = $pageObject->showDBValue("Email", $data, $keylink);
	if($mainTableOwnerID=="Email")
		$ownerIdValue=$value;
	$xt->assign("Email_value",$value);
	if(!$pageObject->isAppearOnTabs("Email"))
		$xt->assign("Email_fieldblock",true);
	else
		$xt->assign("Email_tabfieldblock",true);
////////////////////////////////////////////
//Address - 
	
	$value = $pageObject->showDBValue("Address", $data, $keylink);
	if($mainTableOwnerID=="Address")
		$ownerIdValue=$value;
	$xt->assign("Address_value",$value);
	if(!$pageObject->isAppearOnTabs("Address"))
		$xt->assign("Address_fieldblock",true);
	else
		$xt->assign("Address_tabfieldblock",true);
////////////////////////////////////////////
//f1_name - 
	
	$value = $pageObject->showDBValue("f1_name", $data, $keylink);
	if($mainTableOwnerID=="f1_name")
		$ownerIdValue=$value;
	$xt->assign("f1_name_value",$value);
	if(!$pageObject->isAppearOnTabs("f1_name"))
		$xt->assign("f1_name_fieldblock",true);
	else
		$xt->assign("f1_name_tabfieldblock",true);
////////////////////////////////////////////
//f1_relation - 
	
	$value = $pageObject->showDBValue("f1_relation", $data, $keylink);
	if($mainTableOwnerID=="f1_relation")
		$ownerIdValue=$value;
	$xt->assign("f1_relation_value",$value);
	if(!$pageObject->isAppearOnTabs("f1_relation"))
		$xt->assign("f1_relation_fieldblock",true);
	else
		$xt->assign("f1_relation_tabfieldblock",true);
////////////////////////////////////////////
//f1_tel - 
	
	$value = $pageObject->showDBValue("f1_tel", $data, $keylink);
	if($mainTableOwnerID=="f1_tel")
		$ownerIdValue=$value;
	$xt->assign("f1_tel_value",$value);
	if(!$pageObject->isAppearOnTabs("f1_tel"))
		$xt->assign("f1_tel_fieldblock",true);
	else
		$xt->assign("f1_tel_tabfieldblock",true);
////////////////////////////////////////////
//f2_name - 
	
	$value = $pageObject->showDBValue("f2_name", $data, $keylink);
	if($mainTableOwnerID=="f2_name")
		$ownerIdValue=$value;
	$xt->assign("f2_name_value",$value);
	if(!$pageObject->isAppearOnTabs("f2_name"))
		$xt->assign("f2_name_fieldblock",true);
	else
		$xt->assign("f2_name_tabfieldblock",true);
////////////////////////////////////////////
//f2_relation - 
	
	$value = $pageObject->showDBValue("f2_relation", $data, $keylink);
	if($mainTableOwnerID=="f2_relation")
		$ownerIdValue=$value;
	$xt->assign("f2_relation_value",$value);
	if(!$pageObject->isAppearOnTabs("f2_relation"))
		$xt->assign("f2_relation_fieldblock",true);
	else
		$xt->assign("f2_relation_tabfieldblock",true);
////////////////////////////////////////////
//f2_tel - 
	
	$value = $pageObject->showDBValue("f2_tel", $data, $keylink);
	if($mainTableOwnerID=="f2_tel")
		$ownerIdValue=$value;
	$xt->assign("f2_tel_value",$value);
	if(!$pageObject->isAppearOnTabs("f2_tel"))
		$xt->assign("f2_tel_fieldblock",true);
	else
		$xt->assign("f2_tel_tabfieldblock",true);
////////////////////////////////////////////
//sstatus - 
	
	$value = $pageObject->showDBValue("sstatus", $data, $keylink);
	if($mainTableOwnerID=="sstatus")
		$ownerIdValue=$value;
	$xt->assign("sstatus_value",$value);
	if(!$pageObject->isAppearOnTabs("sstatus"))
		$xt->assign("sstatus_fieldblock",true);
	else
		$xt->assign("sstatus_tabfieldblock",true);
////////////////////////////////////////////
//StaffNo - 
	
	$value = $pageObject->showDBValue("StaffNo", $data, $keylink);
	if($mainTableOwnerID=="StaffNo")
		$ownerIdValue=$value;
	$xt->assign("StaffNo_value",$value);
	if(!$pageObject->isAppearOnTabs("StaffNo"))
		$xt->assign("StaffNo_fieldblock",true);
	else
		$xt->assign("StaffNo_tabfieldblock",true);
////////////////////////////////////////////
//Job_Sesi - 
	
	$value = $pageObject->showDBValue("Job_Sesi", $data, $keylink);
	if($mainTableOwnerID=="Job_Sesi")
		$ownerIdValue=$value;
	$xt->assign("Job_Sesi_value",$value);
	if(!$pageObject->isAppearOnTabs("Job_Sesi"))
		$xt->assign("Job_Sesi_fieldblock",true);
	else
		$xt->assign("Job_Sesi_tabfieldblock",true);
////////////////////////////////////////////
//Job_Type - 
	
	$value = $pageObject->showDBValue("Job_Type", $data, $keylink);
	if($mainTableOwnerID=="Job_Type")
		$ownerIdValue=$value;
	$xt->assign("Job_Type_value",$value);
	if(!$pageObject->isAppearOnTabs("Job_Type"))
		$xt->assign("Job_Type_fieldblock",true);
	else
		$xt->assign("Job_Type_tabfieldblock",true);
////////////////////////////////////////////
//Job_Title - 
	
	$value = $pageObject->showDBValue("Job_Title", $data, $keylink);
	if($mainTableOwnerID=="Job_Title")
		$ownerIdValue=$value;
	$xt->assign("Job_Title_value",$value);
	if(!$pageObject->isAppearOnTabs("Job_Title"))
		$xt->assign("Job_Title_fieldblock",true);
	else
		$xt->assign("Job_Title_tabfieldblock",true);
////////////////////////////////////////////
//Grade - 
	
	$value = $pageObject->showDBValue("Grade", $data, $keylink);
	if($mainTableOwnerID=="Grade")
		$ownerIdValue=$value;
	$xt->assign("Grade_value",$value);
	if(!$pageObject->isAppearOnTabs("Grade"))
		$xt->assign("Grade_fieldblock",true);
	else
		$xt->assign("Grade_tabfieldblock",true);
////////////////////////////////////////////
//Elaun - 
	
	$value = $pageObject->showDBValue("Elaun", $data, $keylink);
	if($mainTableOwnerID=="Elaun")
		$ownerIdValue=$value;
	$xt->assign("Elaun_value",$value);
	if(!$pageObject->isAppearOnTabs("Elaun"))
		$xt->assign("Elaun_fieldblock",true);
	else
		$xt->assign("Elaun_tabfieldblock",true);
////////////////////////////////////////////
//Join_Date - 
	
	$value = $pageObject->showDBValue("Join_Date", $data, $keylink);
	if($mainTableOwnerID=="Join_Date")
		$ownerIdValue=$value;
	$xt->assign("Join_Date_value",$value);
	if(!$pageObject->isAppearOnTabs("Join_Date"))
		$xt->assign("Join_Date_fieldblock",true);
	else
		$xt->assign("Join_Date_tabfieldblock",true);
////////////////////////////////////////////
//End_Date - 
	
	$value = $pageObject->showDBValue("End_Date", $data, $keylink);
	if($mainTableOwnerID=="End_Date")
		$ownerIdValue=$value;
	$xt->assign("End_Date_value",$value);
	if(!$pageObject->isAppearOnTabs("End_Date"))
		$xt->assign("End_Date_fieldblock",true);
	else
		$xt->assign("End_Date_tabfieldblock",true);
////////////////////////////////////////////
//Gerak_Date - 
	
	$value = $pageObject->showDBValue("Gerak_Date", $data, $keylink);
	if($mainTableOwnerID=="Gerak_Date")
		$ownerIdValue=$value;
	$xt->assign("Gerak_Date_value",$value);
	if(!$pageObject->isAppearOnTabs("Gerak_Date"))
		$xt->assign("Gerak_Date_fieldblock",true);
	else
		$xt->assign("Gerak_Date_tabfieldblock",true);
////////////////////////////////////////////
//course_main - 
	
	$value = $pageObject->showDBValue("course_main", $data, $keylink);
	if($mainTableOwnerID=="course_main")
		$ownerIdValue=$value;
	$xt->assign("course_main_value",$value);
	if(!$pageObject->isAppearOnTabs("course_main"))
		$xt->assign("course_main_fieldblock",true);
	else
		$xt->assign("course_main_tabfieldblock",true);
////////////////////////////////////////////
//course_opsyen - 
	
	$value = $pageObject->showDBValue("course_opsyen", $data, $keylink);
	if($mainTableOwnerID=="course_opsyen")
		$ownerIdValue=$value;
	$xt->assign("course_opsyen_value",$value);
	if(!$pageObject->isAppearOnTabs("course_opsyen"))
		$xt->assign("course_opsyen_fieldblock",true);
	else
		$xt->assign("course_opsyen_tabfieldblock",true);
////////////////////////////////////////////
//bank1 - 
	
	$value = $pageObject->showDBValue("bank1", $data, $keylink);
	if($mainTableOwnerID=="bank1")
		$ownerIdValue=$value;
	$xt->assign("bank1_value",$value);
	if(!$pageObject->isAppearOnTabs("bank1"))
		$xt->assign("bank1_fieldblock",true);
	else
		$xt->assign("bank1_tabfieldblock",true);
////////////////////////////////////////////
//epf - 
	
	$value = $pageObject->showDBValue("epf", $data, $keylink);
	if($mainTableOwnerID=="epf")
		$ownerIdValue=$value;
	$xt->assign("epf_value",$value);
	if(!$pageObject->isAppearOnTabs("epf"))
		$xt->assign("epf_fieldblock",true);
	else
		$xt->assign("epf_tabfieldblock",true);
////////////////////////////////////////////
//Disability - 
	
	$value = $pageObject->showDBValue("Disability", $data, $keylink);
	if($mainTableOwnerID=="Disability")
		$ownerIdValue=$value;
	$xt->assign("Disability_value",$value);
	if(!$pageObject->isAppearOnTabs("Disability"))
		$xt->assign("Disability_fieldblock",true);
	else
		$xt->assign("Disability_tabfieldblock",true);
////////////////////////////////////////////
//Medical_condition - 
	
	$value = $pageObject->showDBValue("Medical_condition", $data, $keylink);
	if($mainTableOwnerID=="Medical_condition")
		$ownerIdValue=$value;
	$xt->assign("Medical_condition_value",$value);
	if(!$pageObject->isAppearOnTabs("Medical_condition"))
		$xt->assign("Medical_condition_fieldblock",true);
	else
		$xt->assign("Medical_condition_tabfieldblock",true);
////////////////////////////////////////////
//blood - 
	
	$value = $pageObject->showDBValue("blood", $data, $keylink);
	if($mainTableOwnerID=="blood")
		$ownerIdValue=$value;
	$xt->assign("blood_value",$value);
	if(!$pageObject->isAppearOnTabs("blood"))
		$xt->assign("blood_fieldblock",true);
	else
		$xt->assign("blood_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "staff_info";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "staff_info";
			continue;
		}
		
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
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
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
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "staff_info";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='staff_info_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
