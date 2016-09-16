<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/admin_rights_variables.php");


$gsqlHead="select `username` ";
$gsqlFrom="from `user`";
$gsqlWhereExpr="";
$gsqlTail="";
// $gstrSQL = "SELECT TableName,   GroupID,   AccessMask  FROM user_ugrights ";
$gstrSQL = $gQuery->gSQLWhere("");


if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(!IsAdmin())
{
	echo "<p>"."Anda tidak mempunyai kebenaran untuk akses jadual ini"." <a href=\"login.php\">"."Kembali ke halaman log-masuk"."</a></p>";
	return;
}



$layout = new TLayout("ug_rights2","Purific1Green1","MobileGreen1");
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();

$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons","block"=>"savebuttons_block","substyle"=>1);


$layout->skins["ugcontrols"] = "1";
$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "1";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"ugrightsblock","block"=>"rights_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();


$layout->containers["left"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();

$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup","block"=>"","substyle"=>1);


$layout->skins["uggroup"] = "1";
$layout->blocks["left"][] = "uggroup";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "2";
$layout->blocks["top"][] = "search";$page_layouts["admin_rights_list"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');
include('classes/listpage.php');
include('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;
$nonAdminTablesRightsArr=array();
$nonAdminTablesArr=array();
$pageRights=array();
$nonAdminTablesArr[] = array("student_info","Maklumat Pelajar");
$nonAdminTablesRightsArr["student_info"]=array();
$pageRights["student_info"]["add"]=true;
$pageRights["student_info"]["edit"]=true;
$pageRights["student_info"]["delete"]=true;
$pageRights["student_info"]["list"]=true;
$pageRights["student_info"]["export"]=true;
$pageRights["student_info"]["import"]=true;

$nonAdminTablesArr[] = array("course","Subjek");
$nonAdminTablesRightsArr["course"]=array();
$pageRights["course"]["add"]=true;
$pageRights["course"]["edit"]=true;
$pageRights["course"]["delete"]=true;
$pageRights["course"]["list"]=true;
$pageRights["course"]["export"]=false;
$pageRights["course"]["import"]=false;

$nonAdminTablesArr[] = array("staff_info","Staff Info");
$nonAdminTablesRightsArr["staff_info"]=array();
$pageRights["staff_info"]["add"]=true;
$pageRights["staff_info"]["edit"]=true;
$pageRights["staff_info"]["delete"]=true;
$pageRights["staff_info"]["list"]=true;
$pageRights["staff_info"]["export"]=true;
$pageRights["staff_info"]["import"]=true;

$nonAdminTablesArr[] = array("setting","Setting");
$nonAdminTablesRightsArr["setting"]=array();
$pageRights["setting"]["add"]=true;
$pageRights["setting"]["edit"]=true;
$pageRights["setting"]["delete"]=true;
$pageRights["setting"]["list"]=true;
$pageRights["setting"]["export"]=false;
$pageRights["setting"]["import"]=false;

$nonAdminTablesArr[] = array("group","Group");
$nonAdminTablesRightsArr["group"]=array();
$pageRights["group"]["add"]=true;
$pageRights["group"]["edit"]=true;
$pageRights["group"]["delete"]=true;
$pageRights["group"]["list"]=true;
$pageRights["group"]["export"]=false;
$pageRights["group"]["import"]=false;

$nonAdminTablesArr[] = array("campus_setting","Set Organisasi");
$nonAdminTablesRightsArr["campus_setting"]=array();
$pageRights["campus_setting"]["add"]=false;
$pageRights["campus_setting"]["edit"]=true;
$pageRights["campus_setting"]["delete"]=false;
$pageRights["campus_setting"]["list"]=true;
$pageRights["campus_setting"]["export"]=false;
$pageRights["campus_setting"]["import"]=false;

$nonAdminTablesArr[] = array("user","User");
$nonAdminTablesRightsArr["user"]=array();
$pageRights["user"]["add"]=false;
$pageRights["user"]["edit"]=true;
$pageRights["user"]["delete"]=false;
$pageRights["user"]["list"]=true;
$pageRights["user"]["export"]=false;
$pageRights["user"]["import"]=false;

$nonAdminTablesArr[] = array("bill_record","Rekod Bil");
$nonAdminTablesRightsArr["bill_record"]=array();
$pageRights["bill_record"]["add"]=true;
$pageRights["bill_record"]["edit"]=false;
$pageRights["bill_record"]["delete"]=true;
$pageRights["bill_record"]["list"]=true;
$pageRights["bill_record"]["export"]=false;
$pageRights["bill_record"]["import"]=false;

$nonAdminTablesArr[] = array("bill_item","Item Bil");
$nonAdminTablesRightsArr["bill_item"]=array();
$pageRights["bill_item"]["add"]=true;
$pageRights["bill_item"]["edit"]=true;
$pageRights["bill_item"]["delete"]=true;
$pageRights["bill_item"]["list"]=true;
$pageRights["bill_item"]["export"]=false;
$pageRights["bill_item"]["import"]=false;

$nonAdminTablesArr[] = array("job","Pekerjaan");
$nonAdminTablesRightsArr["job"]=array();
$pageRights["job"]["add"]=true;
$pageRights["job"]["edit"]=true;
$pageRights["job"]["delete"]=true;
$pageRights["job"]["list"]=true;
$pageRights["job"]["export"]=false;
$pageRights["job"]["import"]=false;

$nonAdminTablesArr[] = array("Alumni List","Senarai Alumni");
$nonAdminTablesRightsArr["Alumni List"]=array();
$pageRights["Alumni List"]["add"]=false;
$pageRights["Alumni List"]["edit"]=true;
$pageRights["Alumni List"]["delete"]=true;
$pageRights["Alumni List"]["list"]=true;
$pageRights["Alumni List"]["export"]=true;
$pageRights["Alumni List"]["import"]=false;

$nonAdminTablesArr[] = array("set_setting_category","Set Setting Category");
$nonAdminTablesRightsArr["set_setting_category"]=array();
$pageRights["set_setting_category"]["add"]=true;
$pageRights["set_setting_category"]["edit"]=true;
$pageRights["set_setting_category"]["delete"]=true;
$pageRights["set_setting_category"]["list"]=true;
$pageRights["set_setting_category"]["export"]=false;
$pageRights["set_setting_category"]["import"]=false;

$nonAdminTablesArr[] = array("Report-Billing Pending","Report-Billing Pending");
$nonAdminTablesRightsArr["Report-Billing Pending"]=array();
$pageRights["Report-Billing Pending"]["add"]=false;
$pageRights["Report-Billing Pending"]["edit"]=false;
$pageRights["Report-Billing Pending"]["delete"]=false;
$pageRights["Report-Billing Pending"]["list"]=true;
$pageRights["Report-Billing Pending"]["export"]=false;
$pageRights["Report-Billing Pending"]["import"]=false;

$nonAdminTablesArr[] = array("Report-Billing Paid","Report-Billing Paid");
$nonAdminTablesRightsArr["Report-Billing Paid"]=array();
$pageRights["Report-Billing Paid"]["add"]=false;
$pageRights["Report-Billing Paid"]["edit"]=false;
$pageRights["Report-Billing Paid"]["delete"]=false;
$pageRights["Report-Billing Paid"]["list"]=true;
$pageRights["Report-Billing Paid"]["export"]=false;
$pageRights["Report-Billing Paid"]["import"]=false;

$nonAdminTablesArr[] = array("student_payment","Pembayaran ");
$nonAdminTablesRightsArr["student_payment"]=array();
$pageRights["student_payment"]["add"]=true;
$pageRights["student_payment"]["edit"]=true;
$pageRights["student_payment"]["delete"]=true;
$pageRights["student_payment"]["list"]=true;
$pageRights["student_payment"]["export"]=false;
$pageRights["student_payment"]["import"]=false;

$nonAdminTablesArr[] = array("student_billing","Bil Murid");
$nonAdminTablesRightsArr["student_billing"]=array();
$pageRights["student_billing"]["add"]=true;
$pageRights["student_billing"]["edit"]=false;
$pageRights["student_billing"]["delete"]=true;
$pageRights["student_billing"]["list"]=true;
$pageRights["student_billing"]["export"]=true;
$pageRights["student_billing"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Family","Keluarga/Waris");
$nonAdminTablesRightsArr["Report_Family"]=array();
$pageRights["Report_Family"]["add"]=false;
$pageRights["Report_Family"]["edit"]=true;
$pageRights["Report_Family"]["delete"]=false;
$pageRights["Report_Family"]["list"]=true;
$pageRights["Report_Family"]["export"]=true;
$pageRights["Report_Family"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Discipline","Displin");
$nonAdminTablesRightsArr["Report_Discipline"]=array();
$pageRights["Report_Discipline"]["add"]=true;
$pageRights["Report_Discipline"]["edit"]=true;
$pageRights["Report_Discipline"]["delete"]=true;
$pageRights["Report_Discipline"]["list"]=true;
$pageRights["Report_Discipline"]["export"]=true;
$pageRights["Report_Discipline"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Extracurricular","Kokorikulum");
$nonAdminTablesRightsArr["Report_Extracurricular"]=array();
$pageRights["Report_Extracurricular"]["add"]=true;
$pageRights["Report_Extracurricular"]["edit"]=true;
$pageRights["Report_Extracurricular"]["delete"]=true;
$pageRights["Report_Extracurricular"]["list"]=true;
$pageRights["Report_Extracurricular"]["export"]=true;
$pageRights["Report_Extracurricular"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Staff_Kin","Waris Staf");
$nonAdminTablesRightsArr["Report_Staff_Kin"]=array();
$pageRights["Report_Staff_Kin"]["add"]=false;
$pageRights["Report_Staff_Kin"]["edit"]=true;
$pageRights["Report_Staff_Kin"]["delete"]=false;
$pageRights["Report_Staff_Kin"]["list"]=true;
$pageRights["Report_Staff_Kin"]["export"]=true;
$pageRights["Report_Staff_Kin"]["import"]=false;

$nonAdminTablesArr[] = array("Chart_no_student","Carta");
$nonAdminTablesRightsArr["Chart_no_student"]=array();
$pageRights["Chart_no_student"]["add"]=false;
$pageRights["Chart_no_student"]["edit"]=false;
$pageRights["Chart_no_student"]["delete"]=false;
$pageRights["Chart_no_student"]["list"]=true;
$pageRights["Chart_no_student"]["export"]=false;
$pageRights["Chart_no_student"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Exam_Slip_Indiv","Laporan Peperiksaan Individu");
$nonAdminTablesRightsArr["Report_Exam_Slip_Indiv"]=array();
$pageRights["Report_Exam_Slip_Indiv"]["add"]=false;
$pageRights["Report_Exam_Slip_Indiv"]["edit"]=false;
$pageRights["Report_Exam_Slip_Indiv"]["delete"]=false;
$pageRights["Report_Exam_Slip_Indiv"]["list"]=true;
$pageRights["Report_Exam_Slip_Indiv"]["export"]=false;
$pageRights["Report_Exam_Slip_Indiv"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Exam_Result_Indiv","Report Exam Result Indiv");
$nonAdminTablesRightsArr["Report_Exam_Result_Indiv"]=array();
$pageRights["Report_Exam_Result_Indiv"]["add"]=false;
$pageRights["Report_Exam_Result_Indiv"]["edit"]=false;
$pageRights["Report_Exam_Result_Indiv"]["delete"]=false;
$pageRights["Report_Exam_Result_Indiv"]["list"]=true;
$pageRights["Report_Exam_Result_Indiv"]["export"]=false;
$pageRights["Report_Exam_Result_Indiv"]["import"]=false;

$nonAdminTablesArr[] = array("all","All");
$nonAdminTablesRightsArr["all"]=array();
$pageRights["all"]["add"]=false;
$pageRights["all"]["edit"]=false;
$pageRights["all"]["delete"]=false;
$pageRights["all"]["list"]=true;
$pageRights["all"]["export"]=false;
$pageRights["all"]["import"]=false;

$nonAdminTablesArr[] = array("setting_no_room","Set No Bilik");
$nonAdminTablesRightsArr["setting_no_room"]=array();
$pageRights["setting_no_room"]["add"]=false;
$pageRights["setting_no_room"]["edit"]=true;
$pageRights["setting_no_room"]["delete"]=false;
$pageRights["setting_no_room"]["list"]=true;
$pageRights["setting_no_room"]["export"]=false;
$pageRights["setting_no_room"]["import"]=false;

$nonAdminTablesArr[] = array("create_pbsra","Jana RITEN");
$nonAdminTablesRightsArr["create_pbsra"]=array();
$pageRights["create_pbsra"]["add"]=true;
$pageRights["create_pbsra"]["edit"]=false;
$pageRights["create_pbsra"]["delete"]=true;
$pageRights["create_pbsra"]["list"]=true;
$pageRights["create_pbsra"]["export"]=false;
$pageRights["create_pbsra"]["import"]=false;

$nonAdminTablesArr[] = array("staff_move","Pergerakan Staf");
$nonAdminTablesRightsArr["staff_move"]=array();
$pageRights["staff_move"]["add"]=true;
$pageRights["staff_move"]["edit"]=true;
$pageRights["staff_move"]["delete"]=true;
$pageRights["staff_move"]["list"]=true;
$pageRights["staff_move"]["export"]=false;
$pageRights["staff_move"]["import"]=false;

$nonAdminTablesArr[] = array("student_attendance","Kedatangan Murid");
$nonAdminTablesRightsArr["student_attendance"]=array();
$pageRights["student_attendance"]["add"]=true;
$pageRights["student_attendance"]["edit"]=true;
$pageRights["student_attendance"]["delete"]=true;
$pageRights["student_attendance"]["list"]=true;
$pageRights["student_attendance"]["export"]=false;
$pageRights["student_attendance"]["import"]=false;

$nonAdminTablesArr[] = array("attend_creator","Jana Kedatatangan");
$nonAdminTablesRightsArr["attend_creator"]=array();
$pageRights["attend_creator"]["add"]=true;
$pageRights["attend_creator"]["edit"]=false;
$pageRights["attend_creator"]["delete"]=true;
$pageRights["attend_creator"]["list"]=true;
$pageRights["attend_creator"]["export"]=false;
$pageRights["attend_creator"]["import"]=false;

$nonAdminTablesArr[] = array("student_course","Kursus Murid");
$nonAdminTablesRightsArr["student_course"]=array();
$pageRights["student_course"]["add"]=true;
$pageRights["student_course"]["edit"]=true;
$pageRights["student_course"]["delete"]=true;
$pageRights["student_course"]["list"]=true;
$pageRights["student_course"]["export"]=false;
$pageRights["student_course"]["import"]=false;

$nonAdminTablesArr[] = array("aset","Aset");
$nonAdminTablesRightsArr["aset"]=array();
$pageRights["aset"]["add"]=true;
$pageRights["aset"]["edit"]=true;
$pageRights["aset"]["delete"]=true;
$pageRights["aset"]["list"]=true;
$pageRights["aset"]["export"]=false;
$pageRights["aset"]["import"]=false;

$nonAdminTablesArr[] = array("staff_valuation","Penilaian Staf");
$nonAdminTablesRightsArr["staff_valuation"]=array();
$pageRights["staff_valuation"]["add"]=true;
$pageRights["staff_valuation"]["edit"]=true;
$pageRights["staff_valuation"]["delete"]=true;
$pageRights["staff_valuation"]["list"]=true;
$pageRights["staff_valuation"]["export"]=false;
$pageRights["staff_valuation"]["import"]=false;

$nonAdminTablesArr[] = array("staff_qualification","Kelayakan Staf");
$nonAdminTablesRightsArr["staff_qualification"]=array();
$pageRights["staff_qualification"]["add"]=true;
$pageRights["staff_qualification"]["edit"]=true;
$pageRights["staff_qualification"]["delete"]=true;
$pageRights["staff_qualification"]["list"]=true;
$pageRights["staff_qualification"]["export"]=false;
$pageRights["staff_qualification"]["import"]=false;

$nonAdminTablesArr[] = array("staff_absent_late","Kelewatan/Tidak Hadir Staf");
$nonAdminTablesRightsArr["staff_absent_late"]=array();
$pageRights["staff_absent_late"]["add"]=true;
$pageRights["staff_absent_late"]["edit"]=true;
$pageRights["staff_absent_late"]["delete"]=true;
$pageRights["staff_absent_late"]["list"]=true;
$pageRights["staff_absent_late"]["export"]=false;
$pageRights["staff_absent_late"]["import"]=false;

$nonAdminTablesArr[] = array("staff_late","Staf Lewat");
$nonAdminTablesRightsArr["staff_late"]=array();
$pageRights["staff_late"]["add"]=true;
$pageRights["staff_late"]["edit"]=true;
$pageRights["staff_late"]["delete"]=true;
$pageRights["staff_late"]["list"]=true;
$pageRights["staff_late"]["export"]=false;
$pageRights["staff_late"]["import"]=false;

$nonAdminTablesArr[] = array("attend_creator_staff","Jana Kedatangan");
$nonAdminTablesRightsArr["attend_creator_staff"]=array();
$pageRights["attend_creator_staff"]["add"]=true;
$pageRights["attend_creator_staff"]["edit"]=true;
$pageRights["attend_creator_staff"]["delete"]=true;
$pageRights["attend_creator_staff"]["list"]=true;
$pageRights["attend_creator_staff"]["export"]=false;
$pageRights["attend_creator_staff"]["import"]=false;

$nonAdminTablesArr[] = array("Student_Darjah","Darjah Murid");
$nonAdminTablesRightsArr["Student_Darjah"]=array();
$pageRights["Student_Darjah"]["add"]=false;
$pageRights["Student_Darjah"]["edit"]=false;
$pageRights["Student_Darjah"]["delete"]=false;
$pageRights["Student_Darjah"]["list"]=true;
$pageRights["Student_Darjah"]["export"]=false;
$pageRights["Student_Darjah"]["import"]=false;

$nonAdminTablesArr[] = array("exam_rank_kelas","Exam Rank Kelas");
$nonAdminTablesRightsArr["exam_rank_kelas"]=array();
$pageRights["exam_rank_kelas"]["add"]=false;
$pageRights["exam_rank_kelas"]["edit"]=false;
$pageRights["exam_rank_kelas"]["delete"]=false;
$pageRights["exam_rank_kelas"]["list"]=true;
$pageRights["exam_rank_kelas"]["export"]=false;
$pageRights["exam_rank_kelas"]["import"]=false;

$nonAdminTablesArr[] = array("w_news","Berita");
$nonAdminTablesRightsArr["w_news"]=array();
$pageRights["w_news"]["add"]=true;
$pageRights["w_news"]["edit"]=true;
$pageRights["w_news"]["delete"]=true;
$pageRights["w_news"]["list"]=true;
$pageRights["w_news"]["export"]=false;
$pageRights["w_news"]["import"]=false;

$nonAdminTablesArr[] = array("enroll","Enroll");
$nonAdminTablesRightsArr["enroll"]=array();
$pageRights["enroll"]["add"]=true;
$pageRights["enroll"]["edit"]=true;
$pageRights["enroll"]["delete"]=true;
$pageRights["enroll"]["list"]=true;
$pageRights["enroll"]["export"]=false;
$pageRights["enroll"]["import"]=false;

$nonAdminTablesArr[] = array("enroll_apply","Enroll Apply");
$nonAdminTablesRightsArr["enroll_apply"]=array();
$pageRights["enroll_apply"]["add"]=true;
$pageRights["enroll_apply"]["edit"]=false;
$pageRights["enroll_apply"]["delete"]=false;
$pageRights["enroll_apply"]["list"]=false;
$pageRights["enroll_apply"]["export"]=false;
$pageRights["enroll_apply"]["import"]=false;

$nonAdminTablesArr[] = array("w_gallery","Galeri");
$nonAdminTablesRightsArr["w_gallery"]=array();
$pageRights["w_gallery"]["add"]=true;
$pageRights["w_gallery"]["edit"]=true;
$pageRights["w_gallery"]["delete"]=true;
$pageRights["w_gallery"]["list"]=true;
$pageRights["w_gallery"]["export"]=false;
$pageRights["w_gallery"]["import"]=false;

$nonAdminTablesArr[] = array("w_gallery_sub","Sub Album");
$nonAdminTablesRightsArr["w_gallery_sub"]=array();
$pageRights["w_gallery_sub"]["add"]=true;
$pageRights["w_gallery_sub"]["edit"]=true;
$pageRights["w_gallery_sub"]["delete"]=true;
$pageRights["w_gallery_sub"]["list"]=true;
$pageRights["w_gallery_sub"]["export"]=false;
$pageRights["w_gallery_sub"]["import"]=false;

$nonAdminTablesArr[] = array("exam_rank_darjah","Exam Rank Darjah");
$nonAdminTablesRightsArr["exam_rank_darjah"]=array();
$pageRights["exam_rank_darjah"]["add"]=false;
$pageRights["exam_rank_darjah"]["edit"]=false;
$pageRights["exam_rank_darjah"]["delete"]=false;
$pageRights["exam_rank_darjah"]["list"]=true;
$pageRights["exam_rank_darjah"]["export"]=false;
$pageRights["exam_rank_darjah"]["import"]=false;

$nonAdminTablesArr[] = array("exam_grade_result","Exam Grade Result");
$nonAdminTablesRightsArr["exam_grade_result"]=array();
$pageRights["exam_grade_result"]["add"]=false;
$pageRights["exam_grade_result"]["edit"]=false;
$pageRights["exam_grade_result"]["delete"]=false;
$pageRights["exam_grade_result"]["list"]=true;
$pageRights["exam_grade_result"]["export"]=true;
$pageRights["exam_grade_result"]["import"]=false;

$nonAdminTablesArr[] = array("w_slider","Slider");
$nonAdminTablesRightsArr["w_slider"]=array();
$pageRights["w_slider"]["add"]=true;
$pageRights["w_slider"]["edit"]=true;
$pageRights["w_slider"]["delete"]=true;
$pageRights["w_slider"]["list"]=true;
$pageRights["w_slider"]["export"]=false;
$pageRights["w_slider"]["import"]=false;

$nonAdminTablesArr[] = array("w_about","Info Sekolah");
$nonAdminTablesRightsArr["w_about"]=array();
$pageRights["w_about"]["add"]=true;
$pageRights["w_about"]["edit"]=true;
$pageRights["w_about"]["delete"]=true;
$pageRights["w_about"]["list"]=true;
$pageRights["w_about"]["export"]=false;
$pageRights["w_about"]["import"]=false;

$nonAdminTablesArr[] = array("student_upsra","Student Upsra");
$nonAdminTablesRightsArr["student_upsra"]=array();
$pageRights["student_upsra"]["add"]=true;
$pageRights["student_upsra"]["edit"]=false;
$pageRights["student_upsra"]["delete"]=true;
$pageRights["student_upsra"]["list"]=true;
$pageRights["student_upsra"]["export"]=false;
$pageRights["student_upsra"]["import"]=false;

$nonAdminTablesArr[] = array("exam_slip_darjah","Exam Slip Darjah");
$nonAdminTablesRightsArr["exam_slip_darjah"]=array();
$pageRights["exam_slip_darjah"]["add"]=false;
$pageRights["exam_slip_darjah"]["edit"]=false;
$pageRights["exam_slip_darjah"]["delete"]=false;
$pageRights["exam_slip_darjah"]["list"]=true;
$pageRights["exam_slip_darjah"]["export"]=false;
$pageRights["exam_slip_darjah"]["import"]=false;

$nonAdminTablesArr[] = array("billing_collection_permurid","Billing Collection Permurid");
$nonAdminTablesRightsArr["billing_collection_permurid"]=array();
$pageRights["billing_collection_permurid"]["add"]=false;
$pageRights["billing_collection_permurid"]["edit"]=false;
$pageRights["billing_collection_permurid"]["delete"]=false;
$pageRights["billing_collection_permurid"]["list"]=true;
$pageRights["billing_collection_permurid"]["export"]=true;
$pageRights["billing_collection_permurid"]["import"]=false;

$nonAdminTablesArr[] = array("w_pic","Gambar");
$nonAdminTablesRightsArr["w_pic"]=array();
$pageRights["w_pic"]["add"]=true;
$pageRights["w_pic"]["edit"]=true;
$pageRights["w_pic"]["delete"]=true;
$pageRights["w_pic"]["list"]=true;
$pageRights["w_pic"]["export"]=false;
$pageRights["w_pic"]["import"]=false;


$options["nonAdminTablesArr"] = $nonAdminTablesArr;
$options["nonAdminTablesRightsArr"] = $nonAdminTablesRightsArr;


$pageObject = ListPage::createListPage($strTableName, $options);
 // add button events if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	//$xt->assign_loopsection("grid_row",$rowinfo);
	


?>
