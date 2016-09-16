<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
add_nocache_headers();

include("include/exam_grade_result_variables.php");
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
$layout->blocks["top"][] = "search";$page_layouts["exam_grade_result_search"] = $layout;


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
$templatefile = "exam_grade_result_search.htm";

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
$params['shortTableName'] = 'exam_grade_result';
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
	
	if($pageObject->pSet->getLookupTable("murid"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("murid")] = GetTableURL($pageObject->pSet->getLookupTable("murid"));
	
	$pageObject->fillFieldToolTips("murid");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("murid");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "murid";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("murid_label","<label for=\"".GetInputElementId("murid", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("murid_label", true);
	
	$xt->assign("murid_fieldblock", true);
	$xt->assignbyref("murid_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("murid_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("murid_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_murid", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("murid");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"murid", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"murid", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("tahun"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("tahun")] = GetTableURL($pageObject->pSet->getLookupTable("tahun"));
	
	$pageObject->fillFieldToolTips("tahun");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("tahun");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "tahun";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("tahun_label","<label for=\"".GetInputElementId("tahun", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("tahun_label", true);
	
	$xt->assign("tahun_fieldblock", true);
	$xt->assignbyref("tahun_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("tahun_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("tahun_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_tahun", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("tahun");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"tahun", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"tahun", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("Class"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("Class")] = GetTableURL($pageObject->pSet->getLookupTable("Class"));
	
	$pageObject->fillFieldToolTips("Class");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("Class");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "Class";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("Class_label","<label for=\"".GetInputElementId("Class", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("Class_label", true);
	
	$xt->assign("Class_fieldblock", true);
	$xt->assignbyref("Class_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("Class_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("Class_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_Class", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("Class");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Class", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Class", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("etype"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("etype")] = GetTableURL($pageObject->pSet->getLookupTable("etype"));
	
	$pageObject->fillFieldToolTips("etype");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("etype");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "etype";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("etype_label","<label for=\"".GetInputElementId("etype", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("etype_label", true);
	
	$xt->assign("etype_fieldblock", true);
	$xt->assignbyref("etype_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("etype_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("etype_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_etype", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("etype");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"etype", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"etype", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("s1"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("s1")] = GetTableURL($pageObject->pSet->getLookupTable("s1"));
	
	$pageObject->fillFieldToolTips("s1");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("s1");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "s1";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("s1_label","<label for=\"".GetInputElementId("s1", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("s1_label", true);
	
	$xt->assign("s1_fieldblock", true);
	$xt->assignbyref("s1_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("s1_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("s1_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_s1", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("s1");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s1", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s1", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("grade1"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("grade1")] = GetTableURL($pageObject->pSet->getLookupTable("grade1"));
	
	$pageObject->fillFieldToolTips("grade1");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("grade1");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "grade1";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("grade1_label","<label for=\"".GetInputElementId("grade1", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("grade1_label", true);
	
	$xt->assign("grade1_fieldblock", true);
	$xt->assignbyref("grade1_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("grade1_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("grade1_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_grade1", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("grade1");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade1", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade1", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("s2"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("s2")] = GetTableURL($pageObject->pSet->getLookupTable("s2"));
	
	$pageObject->fillFieldToolTips("s2");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("s2");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "s2";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("s2_label","<label for=\"".GetInputElementId("s2", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("s2_label", true);
	
	$xt->assign("s2_fieldblock", true);
	$xt->assignbyref("s2_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("s2_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("s2_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_s2", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("s2");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s2", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s2", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("grade2"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("grade2")] = GetTableURL($pageObject->pSet->getLookupTable("grade2"));
	
	$pageObject->fillFieldToolTips("grade2");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("grade2");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "grade2";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("grade2_label","<label for=\"".GetInputElementId("grade2", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("grade2_label", true);
	
	$xt->assign("grade2_fieldblock", true);
	$xt->assignbyref("grade2_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("grade2_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("grade2_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_grade2", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("grade2");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade2", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade2", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("s3"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("s3")] = GetTableURL($pageObject->pSet->getLookupTable("s3"));
	
	$pageObject->fillFieldToolTips("s3");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("s3");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "s3";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("s3_label","<label for=\"".GetInputElementId("s3", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("s3_label", true);
	
	$xt->assign("s3_fieldblock", true);
	$xt->assignbyref("s3_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("s3_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("s3_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_s3", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("s3");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s3", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s3", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("grade3"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("grade3")] = GetTableURL($pageObject->pSet->getLookupTable("grade3"));
	
	$pageObject->fillFieldToolTips("grade3");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("grade3");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "grade3";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("grade3_label","<label for=\"".GetInputElementId("grade3", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("grade3_label", true);
	
	$xt->assign("grade3_fieldblock", true);
	$xt->assignbyref("grade3_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("grade3_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("grade3_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_grade3", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("grade3");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade3", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade3", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("s4"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("s4")] = GetTableURL($pageObject->pSet->getLookupTable("s4"));
	
	$pageObject->fillFieldToolTips("s4");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("s4");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "s4";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("s4_label","<label for=\"".GetInputElementId("s4", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("s4_label", true);
	
	$xt->assign("s4_fieldblock", true);
	$xt->assignbyref("s4_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("s4_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("s4_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_s4", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("s4");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s4", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s4", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("grade4"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("grade4")] = GetTableURL($pageObject->pSet->getLookupTable("grade4"));
	
	$pageObject->fillFieldToolTips("grade4");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("grade4");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "grade4";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("grade4_label","<label for=\"".GetInputElementId("grade4", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("grade4_label", true);
	
	$xt->assign("grade4_fieldblock", true);
	$xt->assignbyref("grade4_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("grade4_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("grade4_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_grade4", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("grade4");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade4", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade4", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("s5"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("s5")] = GetTableURL($pageObject->pSet->getLookupTable("s5"));
	
	$pageObject->fillFieldToolTips("s5");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("s5");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "s5";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("s5_label","<label for=\"".GetInputElementId("s5", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("s5_label", true);
	
	$xt->assign("s5_fieldblock", true);
	$xt->assignbyref("s5_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("s5_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("s5_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_s5", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("s5");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s5", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s5", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("grade5"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("grade5")] = GetTableURL($pageObject->pSet->getLookupTable("grade5"));
	
	$pageObject->fillFieldToolTips("grade5");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("grade5");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "grade5";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("grade5_label","<label for=\"".GetInputElementId("grade5", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("grade5_label", true);
	
	$xt->assign("grade5_fieldblock", true);
	$xt->assignbyref("grade5_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("grade5_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("grade5_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_grade5", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("grade5");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade5", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade5", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("s8"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("s8")] = GetTableURL($pageObject->pSet->getLookupTable("s8"));
	
	$pageObject->fillFieldToolTips("s8");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("s8");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "s8";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("s8_label","<label for=\"".GetInputElementId("s8", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("s8_label", true);
	
	$xt->assign("s8_fieldblock", true);
	$xt->assignbyref("s8_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("s8_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("s8_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_s8", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("s8");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s8", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s8", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("grade8"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("grade8")] = GetTableURL($pageObject->pSet->getLookupTable("grade8"));
	
	$pageObject->fillFieldToolTips("grade8");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("grade8");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "grade8";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("grade8_label","<label for=\"".GetInputElementId("grade8", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("grade8_label", true);
	
	$xt->assign("grade8_fieldblock", true);
	$xt->assignbyref("grade8_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("grade8_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("grade8_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_grade8", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("grade8");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade8", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade8", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("s9"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("s9")] = GetTableURL($pageObject->pSet->getLookupTable("s9"));
	
	$pageObject->fillFieldToolTips("s9");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("s9");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "s9";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("s9_label","<label for=\"".GetInputElementId("s9", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("s9_label", true);
	
	$xt->assign("s9_fieldblock", true);
	$xt->assignbyref("s9_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("s9_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("s9_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_s9", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("s9");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s9", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s9", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("grade9"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("grade9")] = GetTableURL($pageObject->pSet->getLookupTable("grade9"));
	
	$pageObject->fillFieldToolTips("grade9");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("grade9");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "grade9";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("grade9_label","<label for=\"".GetInputElementId("grade9", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("grade9_label", true);
	
	$xt->assign("grade9_fieldblock", true);
	$xt->assignbyref("grade9_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("grade9_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("grade9_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_grade9", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("grade9");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade9", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade9", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("s6"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("s6")] = GetTableURL($pageObject->pSet->getLookupTable("s6"));
	
	$pageObject->fillFieldToolTips("s6");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("s6");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "s6";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("s6_label","<label for=\"".GetInputElementId("s6", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("s6_label", true);
	
	$xt->assign("s6_fieldblock", true);
	$xt->assignbyref("s6_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("s6_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("s6_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_s6", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("s6");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s6", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s6", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("grade6"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("grade6")] = GetTableURL($pageObject->pSet->getLookupTable("grade6"));
	
	$pageObject->fillFieldToolTips("grade6");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("grade6");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "grade6";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("grade6_label","<label for=\"".GetInputElementId("grade6", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("grade6_label", true);
	
	$xt->assign("grade6_fieldblock", true);
	$xt->assignbyref("grade6_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("grade6_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("grade6_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_grade6", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("grade6");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade6", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade6", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("s7"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("s7")] = GetTableURL($pageObject->pSet->getLookupTable("s7"));
	
	$pageObject->fillFieldToolTips("s7");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("s7");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "s7";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("s7_label","<label for=\"".GetInputElementId("s7", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("s7_label", true);
	
	$xt->assign("s7_fieldblock", true);
	$xt->assignbyref("s7_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("s7_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("s7_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_s7", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("s7");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s7", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"s7", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("grade7"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("grade7")] = GetTableURL($pageObject->pSet->getLookupTable("grade7"));
	
	$pageObject->fillFieldToolTips("grade7");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("grade7");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "grade7";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("grade7_label","<label for=\"".GetInputElementId("grade7", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("grade7_label", true);
	
	$xt->assign("grade7_fieldblock", true);
	$xt->assignbyref("grade7_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("grade7_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("grade7_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_grade7", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("grade7");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade7", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"grade7", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("sum"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("sum")] = GetTableURL($pageObject->pSet->getLookupTable("sum"));
	
	$pageObject->fillFieldToolTips("sum");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("sum");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "sum";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = '';
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("sum_label","<label for=\"".GetInputElementId("sum", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("sum_label", true);
	
	$xt->assign("sum_fieldblock", true);
	$xt->assignbyref("sum_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("sum_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("sum_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_sum", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("sum");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sum", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"sum", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
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
