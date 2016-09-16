<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


include("include/dbcommon.php");

if(!isLogged())
{
	header("Location: login.php");
	return;
}

if(isLoggedAsGuest()){
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
}


$layout = new TLayout("menu","Purific1Green1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();

$layout->containers["menu"][] = array("name"=>"menulogas","block"=>"loggedas_block","substyle"=>1);


$layout->containers["menu"][] = array("name"=>"menulogout","block"=>"logout_link","substyle"=>1);


$layout->containers["menu"][] = array("name"=>"menuchangepwd","block"=>"changepwd_link","substyle"=>1);


$layout->containers["menu"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["menu"] = "menu";
$layout->blocks["top"][] = "menu";$page_layouts["menu"] = $layout;


include('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));
include('classes/runnerpage.php');

include_once(getabspath("include/student_info_events.php"));
$tableEvents["student_info"] = new eventclass_student_info;
include_once(getabspath("include/course_events.php"));
$tableEvents["course"] = new eventclass_course;
include_once(getabspath("include/staff_info_events.php"));
$tableEvents["staff_info"] = new eventclass_staff_info;
include_once(getabspath("include/bill_record_events.php"));
$tableEvents["bill_record"] = new eventclass_bill_record;
include_once(getabspath("include/Alumni_List_events.php"));
$tableEvents["Alumni List"] = new eventclass_Alumni_List;
include_once(getabspath("include/set_setting_category_events.php"));
$tableEvents["set_setting_category"] = new eventclass_set_setting_category;
include_once(getabspath("include/Report_Billing_Pending_events.php"));
$tableEvents["Report-Billing Pending"] = new eventclass_Report_Billing_Pending;
include_once(getabspath("include/Report_Billing_Paid_events.php"));
$tableEvents["Report-Billing Paid"] = new eventclass_Report_Billing_Paid;
include_once(getabspath("include/student_payment_events.php"));
$tableEvents["student_payment"] = new eventclass_student_payment;
include_once(getabspath("include/student_billing_events.php"));
$tableEvents["student_billing"] = new eventclass_student_billing;
include_once(getabspath("include/Report_Family_events.php"));
$tableEvents["Report_Family"] = new eventclass_Report_Family;
include_once(getabspath("include/Report_Exam_Slip_Indiv_events.php"));
$tableEvents["Report_Exam_Slip_Indiv"] = new eventclass_Report_Exam_Slip_Indiv;
include_once(getabspath("include/Report_Exam_Result_Indiv_events.php"));
$tableEvents["Report_Exam_Result_Indiv"] = new eventclass_Report_Exam_Result_Indiv;
include_once(getabspath("include/create_pbsra_events.php"));
$tableEvents["create_pbsra"] = new eventclass_create_pbsra;
include_once(getabspath("include/attend_creator_events.php"));
$tableEvents["attend_creator"] = new eventclass_attend_creator;
include_once(getabspath("include/student_course_events.php"));
$tableEvents["student_course"] = new eventclass_student_course;
include_once(getabspath("include/aset_events.php"));
$tableEvents["aset"] = new eventclass_aset;
include_once(getabspath("include/staff_late_events.php"));
$tableEvents["staff_late"] = new eventclass_staff_late;
include_once(getabspath("include/Student_Darjah_events.php"));
$tableEvents["Student_Darjah"] = new eventclass_Student_Darjah;
include_once(getabspath("include/exam_rank_kelas_events.php"));
$tableEvents["exam_rank_kelas"] = new eventclass_exam_rank_kelas;
include_once(getabspath("include/enroll_apply_events.php"));
$tableEvents["enroll_apply"] = new eventclass_enroll_apply;
include_once(getabspath("include/exam_rank_darjah_events.php"));
$tableEvents["exam_rank_darjah"] = new eventclass_exam_rank_darjah;
include_once(getabspath("include/student_upsra_events.php"));
$tableEvents["student_upsra"] = new eventclass_student_upsra;
include_once(getabspath("include/exam_slip_darjah_events.php"));
$tableEvents["exam_slip_darjah"] = new eventclass_exam_slip_darjah;
include_once(getabspath("include/admin_users_events.php"));
$tableEvents["admin_users"] = new eventclass_admin_users;

$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

//array of params for classes
$params["id"] = $id; 
$params["xt"] = &$xt;
$params["tName"] = "global";
$params["pageType"] = PAGE_MENU;
$params["templatefile"] = "menu.htm";
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu($conn, $pageObject);

$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";				

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"include/runnerJS/RunnerAll.js\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->assign("username",$_SESSION["UserName"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='changepwd.php';return false;\"");

$xt->assign("logoutlink_attrs","onclick=\"window.location.href='login.php?a=logout';return false;\"");

$xt->assign("guestloginlink_attrs","onclick=\"window.location.href='login.php';return false;\"");

$xt->assign("loggedas_block", !isLoggedAsGuest());
$xt->assign("logout_link", true);
$xt->assign("guestloginbutton", isLoggedAsGuest());
$xt->assign("logoutbutton", isSingleSign() && !isLoggedAsGuest());

// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $pageObject->templatefile, $pageObject);

$xt->display($pageObject->templatefile);
?>