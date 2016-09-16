<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/Alumni_List_variables.php");
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
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["Alumni_List_view"] = $layout;


$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["Alumni_List_view_Personal1"] = $layout;

$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["Alumni_List_view_Campus_Info1"] = $layout;

$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["Alumni_List_view_Contact1"] = $layout;

$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["Alumni_List_view_Medical1"] = $layout;

$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["Alumni_List_view_Next_Of_Kin1"] = $layout;

$layout = new TLayout("viewtab","Purific1Green1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["Alumni_List_view_Development1"] = $layout;



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
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: Alumni_List_list.php?a=return");
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
$arr['fName'] = "DOB";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DOB");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ICNO";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ICNO");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Gender";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Gender");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "race";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("race");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Class";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Class");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DateJoin";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DateJoin");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "MatricNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("MatricNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Status";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Status");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Address1";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Address1");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Postcode";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Postcode");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "City";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("City");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "StateID";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("StateID");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Email";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Email");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "HomeTelephone";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("HomeTelephone");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Disability";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Disability");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "MedicalCondition";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("MedicalCondition");
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

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("StudentID", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["StudentID"]));

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
//DOB - 
	
	$value = $pageObject->showDBValue("DOB", $data, $keylink);
	if($mainTableOwnerID=="DOB")
		$ownerIdValue=$value;
	$xt->assign("DOB_value",$value);
	if(!$pageObject->isAppearOnTabs("DOB"))
		$xt->assign("DOB_fieldblock",true);
	else
		$xt->assign("DOB_tabfieldblock",true);
////////////////////////////////////////////
//ICNO - 
	
	$value = $pageObject->showDBValue("ICNO", $data, $keylink);
	if($mainTableOwnerID=="ICNO")
		$ownerIdValue=$value;
	$xt->assign("ICNO_value",$value);
	if(!$pageObject->isAppearOnTabs("ICNO"))
		$xt->assign("ICNO_fieldblock",true);
	else
		$xt->assign("ICNO_tabfieldblock",true);
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
//race - 
	
	$value = $pageObject->showDBValue("race", $data, $keylink);
	if($mainTableOwnerID=="race")
		$ownerIdValue=$value;
	$xt->assign("race_value",$value);
	if(!$pageObject->isAppearOnTabs("race"))
		$xt->assign("race_fieldblock",true);
	else
		$xt->assign("race_tabfieldblock",true);
////////////////////////////////////////////
//Class - 
	
	$value = $pageObject->showDBValue("Class", $data, $keylink);
	if($mainTableOwnerID=="Class")
		$ownerIdValue=$value;
	$xt->assign("Class_value",$value);
	if(!$pageObject->isAppearOnTabs("Class"))
		$xt->assign("Class_fieldblock",true);
	else
		$xt->assign("Class_tabfieldblock",true);
////////////////////////////////////////////
//DateJoin - 
	
	$value = $pageObject->showDBValue("DateJoin", $data, $keylink);
	if($mainTableOwnerID=="DateJoin")
		$ownerIdValue=$value;
	$xt->assign("DateJoin_value",$value);
	if(!$pageObject->isAppearOnTabs("DateJoin"))
		$xt->assign("DateJoin_fieldblock",true);
	else
		$xt->assign("DateJoin_tabfieldblock",true);
////////////////////////////////////////////
//MatricNo - 
	
	$value = $pageObject->showDBValue("MatricNo", $data, $keylink);
	if($mainTableOwnerID=="MatricNo")
		$ownerIdValue=$value;
	$xt->assign("MatricNo_value",$value);
	if(!$pageObject->isAppearOnTabs("MatricNo"))
		$xt->assign("MatricNo_fieldblock",true);
	else
		$xt->assign("MatricNo_tabfieldblock",true);
////////////////////////////////////////////
//Status - 
	
	$value = $pageObject->showDBValue("Status", $data, $keylink);
	if($mainTableOwnerID=="Status")
		$ownerIdValue=$value;
	$xt->assign("Status_value",$value);
	if(!$pageObject->isAppearOnTabs("Status"))
		$xt->assign("Status_fieldblock",true);
	else
		$xt->assign("Status_tabfieldblock",true);
////////////////////////////////////////////
//Address1 - 
	
	$value = $pageObject->showDBValue("Address1", $data, $keylink);
	if($mainTableOwnerID=="Address1")
		$ownerIdValue=$value;
	$xt->assign("Address1_value",$value);
	if(!$pageObject->isAppearOnTabs("Address1"))
		$xt->assign("Address1_fieldblock",true);
	else
		$xt->assign("Address1_tabfieldblock",true);
////////////////////////////////////////////
//Postcode - 
	
	$value = $pageObject->showDBValue("Postcode", $data, $keylink);
	if($mainTableOwnerID=="Postcode")
		$ownerIdValue=$value;
	$xt->assign("Postcode_value",$value);
	if(!$pageObject->isAppearOnTabs("Postcode"))
		$xt->assign("Postcode_fieldblock",true);
	else
		$xt->assign("Postcode_tabfieldblock",true);
////////////////////////////////////////////
//City - 
	
	$value = $pageObject->showDBValue("City", $data, $keylink);
	if($mainTableOwnerID=="City")
		$ownerIdValue=$value;
	$xt->assign("City_value",$value);
	if(!$pageObject->isAppearOnTabs("City"))
		$xt->assign("City_fieldblock",true);
	else
		$xt->assign("City_tabfieldblock",true);
////////////////////////////////////////////
//StateID - 
	
	$value = $pageObject->showDBValue("StateID", $data, $keylink);
	if($mainTableOwnerID=="StateID")
		$ownerIdValue=$value;
	$xt->assign("StateID_value",$value);
	if(!$pageObject->isAppearOnTabs("StateID"))
		$xt->assign("StateID_fieldblock",true);
	else
		$xt->assign("StateID_tabfieldblock",true);
////////////////////////////////////////////
//Email - Email Hyperlink
	
	$value = $pageObject->showDBValue("Email", $data, $keylink);
	if($mainTableOwnerID=="Email")
		$ownerIdValue=$value;
	$xt->assign("Email_value",$value);
	if(!$pageObject->isAppearOnTabs("Email"))
		$xt->assign("Email_fieldblock",true);
	else
		$xt->assign("Email_tabfieldblock",true);
////////////////////////////////////////////
//HomeTelephone - 
	
	$value = $pageObject->showDBValue("HomeTelephone", $data, $keylink);
	if($mainTableOwnerID=="HomeTelephone")
		$ownerIdValue=$value;
	$xt->assign("HomeTelephone_value",$value);
	if(!$pageObject->isAppearOnTabs("HomeTelephone"))
		$xt->assign("HomeTelephone_fieldblock",true);
	else
		$xt->assign("HomeTelephone_tabfieldblock",true);
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
//MedicalCondition - 
	
	$value = $pageObject->showDBValue("MedicalCondition", $data, $keylink);
	if($mainTableOwnerID=="MedicalCondition")
		$ownerIdValue=$value;
	$xt->assign("MedicalCondition_value",$value);
	if(!$pageObject->isAppearOnTabs("MedicalCondition"))
		$xt->assign("MedicalCondition_fieldblock",true);
	else
		$xt->assign("MedicalCondition_tabfieldblock",true);
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
		$options['masterTable'] = "Alumni List";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "Alumni List";
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
	$strTableName = "Alumni List";
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
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='Alumni_List_edit.php?".$editlink."'\"");

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
