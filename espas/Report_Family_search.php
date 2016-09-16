<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
add_nocache_headers();

include("include/Report_Family_variables.php");
include("classes/searchcontrol.php");
include("classes/advancedsearchcontrol.php");
include("classes/panelsearchcontrol.php");
include("classes/searchclause.php");

$sessionPrefix = $strTableName;

//Basic includes js files
$includes="";
// predefined fields num
$predefFieldNum = 0;

$chrt_array=array();
$rpt_array=array();

//	check if logged in
if( (!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && !@$chrt_array['status'] && !@$rpt_array['status'])
|| (@$rpt_array['status'] == "private" && @$rpt_array['owner'] != @$_SESSION["UserID"])
|| (@$chrt_array['status'] == "private" && @$chrt_array['owner'] != @$_SESSION["UserID"]) )
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("search2","Purific1Green1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"srchheader","block"=>"","substyle"=>2);


$layout->containers["search"][] = array("name"=>"srchconditions","block"=>"conditions_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"srchfields","block"=>"","substyle"=>1);


$layout->skins["fields"] = "fields";

$layout->containers["search"][] = array("name"=>"srchbuttons","block"=>"","substyle"=>2);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";$page_layouts["Report_Family_search"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();

// id that used to add to controls names
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;
	
// for usual page show proccess
$mode = SEARCH_SIMPLE;
$templatefile = "Report_Family_search.htm";

// for ajax query, used when page buffers new control
if(postvalue("mode")=="inlineLoadCtrl"){
	$mode = SEARCH_LOAD_CONTROL;
}	

$timepicker = false;

$params = array();
$params["id"] = $id;
$params["mode"] = $mode;
$params["timepicker"] = $timepicker;
$params['xt'] = &$xt;
$params['templatefile'] = $templatefile;
$params['shortTableName'] = 'Report_Family';
$params['origTName'] = $strOriginalTableName;
$params['sessionPrefix'] = $sessionPrefix;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['pageType'] = PAGE_SEARCH;

$pageObject = new RunnerPage($params);

// create reusable searchControl builder instance
$searchControllerId = (postvalue('searchControllerId') ? postvalue('searchControllerId') : $pageObject->id);

//	Before Process event
if($eventObj->exists("BeforeProcessSearch"))
	$eventObj->BeforeProcessSearch($conn, $pageObject);

// add constants and files for simple view
if ($mode==SEARCH_SIMPLE)
{
	$searchControlBuilder = new AdvancedSearchControl($searchControllerId, $strTableName, $pageObject->searchClauseObj, $pageObject);

	// add button events if exist
	$pageObject->addButtonHandlers();

	$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
	//$includes.="<script language=\"JavaScript\" src=\"include/customlabels.js\"></script>\r\n";
		$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";	

	// if not simple, this div already exist on page
	if (!isMobile())
		$includes.="<div id=\"search_suggest\" class=\"search_suggest\"></div>";

	// search panel radio button assign
	$searchRadio = $searchControlBuilder->getSearchRadio();
	$xt->assign_section("all_checkbox_label", $searchRadio['all_checkbox_label'][0], $searchRadio['all_checkbox_label'][1]);
	$xt->assign_section("any_checkbox_label", $searchRadio['any_checkbox_label'][0], $searchRadio['any_checkbox_label'][1]);
	$xt->assignbyref("all_checkbox",$searchRadio['all_checkbox']);
	$xt->assignbyref("any_checkbox",$searchRadio['any_checkbox']);
	
	// search fields data
	
	if($pageObject->pSet->getLookupTable("StudentID"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("StudentID")] = GetTableURL($pageObject->pSet->getLookupTable("StudentID"));
	
	$pageObject->fillFieldToolTips("StudentID");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("StudentID");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "StudentID";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("StudentID_label","<label for=\"".GetInputElementId("StudentID", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("StudentID_label", true);
	
	$xt->assign("StudentID_fieldblock", true);
	$xt->assignbyref("StudentID_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("StudentID_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("StudentID_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_StudentID", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("StudentID");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"StudentID", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"StudentID", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("darjah"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("darjah")] = GetTableURL($pageObject->pSet->getLookupTable("darjah"));
	
	$pageObject->fillFieldToolTips("darjah");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("darjah");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "darjah";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("darjah_label","<label for=\"".GetInputElementId("darjah", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("darjah_label", true);
	
	$xt->assign("darjah_fieldblock", true);
	$xt->assignbyref("darjah_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("darjah_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("darjah_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_darjah", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("darjah");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"darjah", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"darjah", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("kelas"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("kelas")] = GetTableURL($pageObject->pSet->getLookupTable("kelas"));
	
	$pageObject->fillFieldToolTips("kelas");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("kelas");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "kelas";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("kelas_label","<label for=\"".GetInputElementId("kelas", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("kelas_label", true);
	
	$xt->assign("kelas_fieldblock", true);
	$xt->assignbyref("kelas_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("kelas_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("kelas_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_kelas", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("kelas");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"kelas", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"kelas", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("sesi"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("sesi")] = GetTableURL($pageObject->pSet->getLookupTable("sesi"));
	
	$pageObject->fillFieldToolTips("sesi");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("sesi");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "sesi";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("sesi_label","<label for=\"".GetInputElementId("sesi", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("sesi_label", true);
	
	$xt->assign("sesi_fieldblock", true);
	$xt->assignbyref("sesi_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("sesi_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("sesi_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_sesi", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("sesi");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sesi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sesi", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("Status"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("Status")] = GetTableURL($pageObject->pSet->getLookupTable("Status"));
	
	$pageObject->fillFieldToolTips("Status");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("Status");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "Status";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("Status_label","<label for=\"".GetInputElementId("Status", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("Status_label", true);
	
	$xt->assign("Status_fieldblock", true);
	$xt->assignbyref("Status_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("Status_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("Status_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_Status", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("Status");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Status", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Status", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("Name1"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("Name1")] = GetTableURL($pageObject->pSet->getLookupTable("Name1"));
	
	$pageObject->fillFieldToolTips("Name1");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("Name1");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "Name1";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("Name1_label","<label for=\"".GetInputElementId("Name1", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("Name1_label", true);
	
	$xt->assign("Name1_fieldblock", true);
	$xt->assignbyref("Name1_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("Name1_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("Name1_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_Name1", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("Name1");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Name1", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Name1", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("tel1"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("tel1")] = GetTableURL($pageObject->pSet->getLookupTable("tel1"));
	
	$pageObject->fillFieldToolTips("tel1");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("tel1");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "tel1";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("tel1_label","<label for=\"".GetInputElementId("tel1", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("tel1_label", true);
	
	$xt->assign("tel1_fieldblock", true);
	$xt->assignbyref("tel1_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("tel1_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("tel1_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_tel1", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("tel1");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"tel1", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"tel1", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("Name2"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("Name2")] = GetTableURL($pageObject->pSet->getLookupTable("Name2"));
	
	$pageObject->fillFieldToolTips("Name2");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("Name2");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "Name2";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("Name2_label","<label for=\"".GetInputElementId("Name2", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("Name2_label", true);
	
	$xt->assign("Name2_fieldblock", true);
	$xt->assignbyref("Name2_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("Name2_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("Name2_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_Name2", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("Name2");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Name2", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Name2", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("tel2"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("tel2")] = GetTableURL($pageObject->pSet->getLookupTable("tel2"));
	
	$pageObject->fillFieldToolTips("tel2");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("tel2");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "tel2";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("tel2_label","<label for=\"".GetInputElementId("tel2", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("tel2_label", true);
	
	$xt->assign("tel2_fieldblock", true);
	$xt->assignbyref("tel2_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("tel2_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("tel2_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_tel2", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("tel2");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"tel2", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"tel2", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	
	//--------------------------------------------------------
	
	$pageObject->body["begin"] .= $includes;
	
	$pageObject->addCommonJs();
	
	$xt->assignbyref("body",$pageObject->body);
	
	$xt->assign("contents_block", true);
	
	$xt->assign("conditions_block",true);
	$xt->assign("search_button",true);
	$xt->assign("reset_button",true);
	$xt->assign("back_button",true);
	
	
	$xt->assign("searchbutton_attrs","id=\"searchButton".$id."\"");
	$xt->assign("resetbutton_attrs","id=\"resetButton".$id."\"");
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	

	// for crosse report 
	
	if (postvalue('axis_x')!=''){
		$xtCrosseElem = "<input type=\"hidden\" id=\"select_group_x\" value=\"".postvalue('axis_x')."\">
						<input type=\"hidden\" id=\"select_group_y\" value=\"".postvalue('axis_y')."\">
						<input type=\"hidden\" id=\"select_data\" value=\"".postvalue('field')."\">
						<input type=\"hidden\" id=\"group_func_hidden\" value=\"".postvalue('group_func')."\">
						";
		$xt->assign("CrossElem",$xtCrosseElem);
	}
	// for crosse report
	if($eventObj->exists("BeforeShowSearch"))
		$eventObj->BeforeShowSearch($xt,$templatefile, $pageObject);
	// load controls for first page loading	
	
	
	$pageObject->fillSetCntrlMaps();
	
	$pageObject->body['end'] .= '<script>';
	$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
	$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
	$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
	$pageObject->body['end'] .= '</script>';
		$pageObject->body['end'] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJs()."</script>";
	
	$xt->assignbyref("body",$pageObject->body);
	$xt->display($templatefile);
	exit();	
}
else if($mode==SEARCH_LOAD_CONTROL)
{

	$searchControlBuilder = new PanelSearchControl($searchControllerId, $strTableName, $pageObject->searchClauseObj, $pageObject);
	$ctrlField = postvalue('ctrlField');
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $ctrlField, 0, '', false, true, '', '');	
	
	// build array for encode
	$resArr = array();
	$resArr['control1'] = trim($xt->call_func($ctrlBlockArr['searchcontrol']));
	$resArr['control2'] = trim($xt->call_func($ctrlBlockArr['searchcontrol1']));
	$resArr['comboHtml'] = trim($ctrlBlockArr['searchtype']);
	$resArr['delButt'] = trim($ctrlBlockArr['delCtrlButt']);
	$resArr['delButtId'] =  trim($searchControlBuilder->getDelButtonId($ctrlField, $id));
	$resArr['divInd'] = trim($id);	
	$resArr['fLabel'] = GetFieldLabel(GoodFieldName($strTableName),GoodFieldName($ctrlField));
	$resArr['ctrlMap'] = $pageObject->controlsMap['controls'];
	
	if (postvalue('isNeedSettings') == 'true')
	{
		$pageObject->fillSettings();
		$resArr['settings'] = $pageObject->jsSettings;
	}
	
	// return JSON
	echo my_json_encode($resArr);
	exit();
}

?>
