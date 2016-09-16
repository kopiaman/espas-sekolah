<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff_info = array();
	$tdatastaff_info[".NumberOfChars"] = 80; 
	$tdatastaff_info[".ShortName"] = "staff_info";
	$tdatastaff_info[".OwnerID"] = "IC_No";
	$tdatastaff_info[".OriginalTable"] = "staff_info";

//	field labels
$fieldLabelsstaff_info = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstaff_info["Malay"] = array();
	$fieldToolTipsstaff_info["Malay"] = array();
	$fieldLabelsstaff_info["Malay"]["ID"] = "ID";
	$fieldToolTipsstaff_info["Malay"]["ID"] = "";
	$fieldLabelsstaff_info["Malay"]["Name"] = "Nama";
	$fieldToolTipsstaff_info["Malay"]["Name"] = "";
	$fieldLabelsstaff_info["Malay"]["StaffNo"] = "No Staf";
	$fieldToolTipsstaff_info["Malay"]["StaffNo"] = "";
	$fieldLabelsstaff_info["Malay"]["IC_Number"] = "K/P Baru";
	$fieldToolTipsstaff_info["Malay"]["IC Number"] = "";
	$fieldLabelsstaff_info["Malay"]["Email"] = "Email";
	$fieldToolTipsstaff_info["Malay"]["Email"] = "";
	$fieldLabelsstaff_info["Malay"]["Gender"] = "Jantina";
	$fieldToolTipsstaff_info["Malay"]["Gender"] = "";
	$fieldLabelsstaff_info["Malay"]["Mobile_Tel"] = "Tel HP";
	$fieldToolTipsstaff_info["Malay"]["Mobile_Tel"] = "";
	$fieldLabelsstaff_info["Malay"]["Disability"] = "Kecacatan";
	$fieldToolTipsstaff_info["Malay"]["Disability"] = "";
	$fieldLabelsstaff_info["Malay"]["Medical_condition"] = "Keadan Kesihatan";
	$fieldToolTipsstaff_info["Malay"]["Medical_condition"] = "";
	$fieldLabelsstaff_info["Malay"]["Join_Date"] = "Tarikh Lantikan";
	$fieldToolTipsstaff_info["Malay"]["Join_Date"] = "";
	$fieldLabelsstaff_info["Malay"]["End_Date"] = "Tarikh Berhenti/Bersara";
	$fieldToolTipsstaff_info["Malay"]["End_Date"] = "";
	$fieldLabelsstaff_info["Malay"]["Job_Type"] = "Jenis Pekerjaan";
	$fieldToolTipsstaff_info["Malay"]["Job_Type"] = "";
	$fieldLabelsstaff_info["Malay"]["Job_Title"] = "Nama Pekerjaan";
	$fieldToolTipsstaff_info["Malay"]["Job_Title"] = "";
	$fieldLabelsstaff_info["Malay"]["married"] = "Status Perkahwinan";
	$fieldToolTipsstaff_info["Malay"]["married"] = "";
	$fieldLabelsstaff_info["Malay"]["blood"] = "Jenis Darah";
	$fieldToolTipsstaff_info["Malay"]["blood"] = "";
	$fieldLabelsstaff_info["Malay"]["photo"] = "Gambar";
	$fieldToolTipsstaff_info["Malay"]["photo"] = "";
	$fieldLabelsstaff_info["Malay"]["f1_name"] = "Nama Waris 1";
	$fieldToolTipsstaff_info["Malay"]["f1_name"] = "";
	$fieldLabelsstaff_info["Malay"]["f1_relation"] = "Hubungan";
	$fieldToolTipsstaff_info["Malay"]["f1_relation"] = "";
	$fieldLabelsstaff_info["Malay"]["f1_tel"] = "Tel";
	$fieldToolTipsstaff_info["Malay"]["f1_tel"] = "";
	$fieldLabelsstaff_info["Malay"]["f2_name"] = "Nama Waris 2";
	$fieldToolTipsstaff_info["Malay"]["f2_name"] = "";
	$fieldLabelsstaff_info["Malay"]["f2_relation"] = "Hubungan";
	$fieldToolTipsstaff_info["Malay"]["f2_relation"] = "";
	$fieldLabelsstaff_info["Malay"]["f2_tel"] = "Tel";
	$fieldToolTipsstaff_info["Malay"]["f2_tel"] = "";
	$fieldLabelsstaff_info["Malay"]["bank1"] = "Nama Bank 1 & No Akaun";
	$fieldToolTipsstaff_info["Malay"]["bank1"] = "";
	$fieldLabelsstaff_info["Malay"]["epf"] = "KWSP";
	$fieldToolTipsstaff_info["Malay"]["epf"] = "";
	$fieldLabelsstaff_info["Malay"]["Grade"] = "Gred Pekerjaan";
	$fieldToolTipsstaff_info["Malay"]["Grade"] = "";
	$fieldLabelsstaff_info["Malay"]["kelulusan"] = "Kelulusan";
	$fieldToolTipsstaff_info["Malay"]["kelulusan"] = "";
	$fieldLabelsstaff_info["Malay"]["Elaun"] = "Elaun ( Untuk Gred KAFA & RAKYAT)";
	$fieldToolTipsstaff_info["Malay"]["Elaun"] = "";
	$fieldLabelsstaff_info["Malay"]["Job_Sesi"] = "Sesi";
	$fieldToolTipsstaff_info["Malay"]["Job_Sesi"] = "";
	$fieldLabelsstaff_info["Malay"]["course_opsyen"] = "Mata Pelajaran Opsyen";
	$fieldToolTipsstaff_info["Malay"]["course_opsyen"] = "";
	$fieldLabelsstaff_info["Malay"]["course_main"] = "Mata Pelajaran Utama";
	$fieldToolTipsstaff_info["Malay"]["course_main"] = "";
	$fieldLabelsstaff_info["Malay"]["Gerak_Date"] = "Tarikh Pergerakan Gaji";
	$fieldToolTipsstaff_info["Malay"]["Gerak_Date"] = "";
	$fieldLabelsstaff_info["Malay"]["sstatus"] = "Status";
	$fieldToolTipsstaff_info["Malay"]["sstatus"] = "";
	$fieldLabelsstaff_info["Malay"]["StaffID"] = "Staff ID";
	$fieldToolTipsstaff_info["Malay"]["StaffID"] = "";
	$fieldLabelsstaff_info["Malay"]["Address"] = "Alamat";
	$fieldToolTipsstaff_info["Malay"]["Address"] = "";
	$fieldLabelsstaff_info["Malay"]["Race"] = "Bangsa";
	$fieldToolTipsstaff_info["Malay"]["Race"] = "";
	if (count($fieldToolTipsstaff_info["Malay"]))
		$tdatastaff_info[".isUseToolTips"] = true;
}
	
	
	$tdatastaff_info[".NCSearch"] = true;



$tdatastaff_info[".shortTableName"] = "staff_info";
$tdatastaff_info[".nSecOptions"] = 2;
$tdatastaff_info[".recsPerRowList"] = 1;
$tdatastaff_info[".mainTableOwnerID"] = "IC_No";
$tdatastaff_info[".moveNext"] = 1;
$tdatastaff_info[".nType"] = 0;

$tdatastaff_info[".strOriginalTableName"] = "staff_info";




$tdatastaff_info[".showAddInPopup"] = false;

$tdatastaff_info[".showEditInPopup"] = false;

$tdatastaff_info[".showViewInPopup"] = true;

$tdatastaff_info[".fieldsForRegister"] = array();
	
$tdatastaff_info[".listAjax"] = false;

	$tdatastaff_info[".audit"] = false;

	$tdatastaff_info[".locking"] = false;

$tdatastaff_info[".listIcons"] = true;
$tdatastaff_info[".edit"] = true;
$tdatastaff_info[".view"] = true;

$tdatastaff_info[".exportTo"] = true;


$tdatastaff_info[".delete"] = true;

$tdatastaff_info[".showSimpleSearchOptions"] = false;

$tdatastaff_info[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff_info[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff_info[".isUseAjaxSuggest"] = true;

$tdatastaff_info[".rowHighlite"] = true;

// button handlers file names

$tdatastaff_info[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff_info[".isUseTimeForSearch"] = false;




$tdatastaff_info[".allSearchFields"] = array();

$tdatastaff_info[".allSearchFields"][] = "Name";
$tdatastaff_info[".allSearchFields"][] = "IC Number";
$tdatastaff_info[".allSearchFields"][] = "Gender";
$tdatastaff_info[".allSearchFields"][] = "Address";
$tdatastaff_info[".allSearchFields"][] = "sstatus";
$tdatastaff_info[".allSearchFields"][] = "Job_Sesi";
$tdatastaff_info[".allSearchFields"][] = "Job_Type";
$tdatastaff_info[".allSearchFields"][] = "Job_Title";
$tdatastaff_info[".allSearchFields"][] = "Elaun";

$tdatastaff_info[".googleLikeFields"][] = "Name";
$tdatastaff_info[".googleLikeFields"][] = "Job_Sesi";
$tdatastaff_info[".googleLikeFields"][] = "sstatus";
$tdatastaff_info[".googleLikeFields"][] = "Address";

$tdatastaff_info[".panelSearchFields"][] = "Name";
$tdatastaff_info[".panelSearchFields"][] = "IC Number";
$tdatastaff_info[".panelSearchFields"][] = "Gender";
$tdatastaff_info[".panelSearchFields"][] = "Job_Sesi";
$tdatastaff_info[".panelSearchFields"][] = "Job_Type";
$tdatastaff_info[".panelSearchFields"][] = "Job_Title";
$tdatastaff_info[".panelSearchFields"][] = "Grade";

$tdatastaff_info[".advSearchFields"][] = "Name";
$tdatastaff_info[".advSearchFields"][] = "IC Number";
$tdatastaff_info[".advSearchFields"][] = "Gender";
$tdatastaff_info[".advSearchFields"][] = "Address";
$tdatastaff_info[".advSearchFields"][] = "sstatus";
$tdatastaff_info[".advSearchFields"][] = "Job_Sesi";
$tdatastaff_info[".advSearchFields"][] = "Job_Type";
$tdatastaff_info[".advSearchFields"][] = "Job_Title";
$tdatastaff_info[".advSearchFields"][] = "Elaun";

$tdatastaff_info[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
		


$tdatastaff_info[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff_info[".strOrderBy"] = $tstrOrderBy;

$tdatastaff_info[".orderindexes"] = array();

$tdatastaff_info[".sqlHead"] = "SELECT ID,  Name,  StaffNo,  IC_No AS `IC Number`,  Email,  Gender,  Mobile_Tel,  Disability,  Medical_condition,  Join_Date,  End_Date,  Job_Type,  Job_Title,  married,  blood,  photo,  f1_name,  f1_relation,  f1_tel,  f2_name,  f2_relation,  f2_tel,  bank1,  epf,  Grade,  kelulusan,  Elaun,  Job_Sesi,  course_opsyen,  course_main,  Gerak_Date,  sstatus,  Address,  Race";
$tdatastaff_info[".sqlFrom"] = "FROM staff_info";
$tdatastaff_info[".sqlWhereExpr"] = "";
$tdatastaff_info[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "photo";
	$tabFields[] = "Name";
	$tabFields[] = "IC Number";
	$tabFields[] = "Gender";
	$tabFields[] = "Race";
	$tabFields[] = "married";
	$tabFields[] = "kelulusan";
	$tabFields[] = "Mobile_Tel";
	$tabFields[] = "Email";
	$tabFields[] = "Address";
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Peribadi",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_relation";
	$tabFields[] = "f2_tel";
$arrEditTabs[] = array('tabId'=>'Next_of_Kin1',
					   'tabName'=>"Untuk Dihubungi",
					   'nType'=>'0',
					   'nOrder'=>12,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "sstatus";
	$tabFields[] = "StaffNo";
	$tabFields[] = "Job_Sesi";
	$tabFields[] = "Job_Type";
	$tabFields[] = "Job_Title";
	$tabFields[] = "Grade";
	$tabFields[] = "Elaun";
	$tabFields[] = "Join_Date";
	$tabFields[] = "End_Date";
	$tabFields[] = "Gerak_Date";
$arrEditTabs[] = array('tabId'=>'Job_Info1',
					   'tabName'=>"Pekerjaan",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "course_main";
	$tabFields[] = "course_opsyen";
$arrEditTabs[] = array('tabId'=>'Mata_Pelajaran1',
					   'tabName'=>"Mata Pelajaran",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "bank1";
	$tabFields[] = "epf";
$arrEditTabs[] = array('tabId'=>'Account_Info1',
					   'tabName'=>"Akaun",
					   'nType'=>'0',
					   'nOrder'=>33,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Disability";
	$tabFields[] = "Medical_condition";
	$tabFields[] = "blood";
$arrEditTabs[] = array('tabId'=>'Health_Info1',
					   'tabName'=>"Kesihatan",
					   'nType'=>'0',
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatastaff_info[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "photo";
	$tabFields[] = "Name";
	$tabFields[] = "IC Number";
	$tabFields[] = "Gender";
	$tabFields[] = "Race";
	$tabFields[] = "married";
	$tabFields[] = "kelulusan";
	$tabFields[] = "Mobile_Tel";
	$tabFields[] = "Email";
	$tabFields[] = "Address";
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Peribadi",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_relation";
	$tabFields[] = "f2_tel";
$arrAddTabs[] = array('tabId'=>'Next_of_Kin1',
					  'tabName'=>"Untuk Dihubungi",
					  'nType'=>'0',
					  'nOrder'=>12,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "sstatus";
	$tabFields[] = "StaffNo";
	$tabFields[] = "Job_Sesi";
	$tabFields[] = "Job_Type";
	$tabFields[] = "Job_Title";
	$tabFields[] = "Grade";
	$tabFields[] = "Elaun";
	$tabFields[] = "Join_Date";
	$tabFields[] = "End_Date";
	$tabFields[] = "Gerak_Date";
$arrAddTabs[] = array('tabId'=>'Job_Info1',
					  'tabName'=>"Pekerjaan",
					  'nType'=>'0',
					  'nOrder'=>19,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "course_main";
	$tabFields[] = "course_opsyen";
$arrAddTabs[] = array('tabId'=>'Mata_Pelajaran1',
					  'tabName'=>"Mata Pelajaran",
					  'nType'=>'0',
					  'nOrder'=>30,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "bank1";
	$tabFields[] = "epf";
$arrAddTabs[] = array('tabId'=>'Account_Info1',
					  'tabName'=>"Akaun",
					  'nType'=>'0',
					  'nOrder'=>33,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Disability";
	$tabFields[] = "Medical_condition";
	$tabFields[] = "blood";
$arrAddTabs[] = array('tabId'=>'Health_Info1',
					  'tabName'=>"Kesihatan",
					  'nType'=>'0',
					  'nOrder'=>36,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatastaff_info[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "photo";
	$tabFields[] = "Name";
	$tabFields[] = "IC Number";
	$tabFields[] = "Gender";
	$tabFields[] = "Race";
	$tabFields[] = "married";
	$tabFields[] = "kelulusan";
	$tabFields[] = "Mobile_Tel";
	$tabFields[] = "Email";
	$tabFields[] = "Address";
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Peribadi",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_relation";
	$tabFields[] = "f2_tel";
$arrViewTabs[] = array('tabId'=>'Next_of_Kin1',
					   'tabName'=>"Untuk Dihubungi",
					   'nType'=>'0',
					   'nOrder'=>12,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "sstatus";
	$tabFields[] = "StaffNo";
	$tabFields[] = "Job_Sesi";
	$tabFields[] = "Job_Type";
	$tabFields[] = "Job_Title";
	$tabFields[] = "Grade";
	$tabFields[] = "Elaun";
	$tabFields[] = "Join_Date";
	$tabFields[] = "End_Date";
	$tabFields[] = "Gerak_Date";
$arrViewTabs[] = array('tabId'=>'Job_Info1',
					   'tabName'=>"Pekerjaan",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "course_main";
	$tabFields[] = "course_opsyen";
$arrViewTabs[] = array('tabId'=>'Mata_Pelajaran1',
					   'tabName'=>"Mata Pelajaran",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "bank1";
	$tabFields[] = "epf";
$arrViewTabs[] = array('tabId'=>'Account_Info1',
					   'tabName'=>"Akaun",
					   'nType'=>'0',
					   'nOrder'=>33,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Disability";
	$tabFields[] = "Medical_condition";
	$tabFields[] = "blood";
$arrViewTabs[] = array('tabId'=>'Health_Info1',
					   'tabName'=>"Kesihatan",
					   'nType'=>'0',
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatastaff_info[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff_info[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff_info[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff_info = array();
$tableKeysstaff_info[] = "ID";
$tdatastaff_info[".Keys"] = $tableKeysstaff_info;

$tdatastaff_info[".listFields"] = array();
$tdatastaff_info[".listFields"][] = "Name";
$tdatastaff_info[".listFields"][] = "Mobile_Tel";
$tdatastaff_info[".listFields"][] = "Job_Sesi";
$tdatastaff_info[".listFields"][] = "Job_Title";
$tdatastaff_info[".listFields"][] = "Grade";
$tdatastaff_info[".listFields"][] = "sstatus";

$tdatastaff_info[".viewFields"] = array();
$tdatastaff_info[".viewFields"][] = "photo";
$tdatastaff_info[".viewFields"][] = "Name";
$tdatastaff_info[".viewFields"][] = "IC Number";
$tdatastaff_info[".viewFields"][] = "Gender";
$tdatastaff_info[".viewFields"][] = "Race";
$tdatastaff_info[".viewFields"][] = "married";
$tdatastaff_info[".viewFields"][] = "kelulusan";
$tdatastaff_info[".viewFields"][] = "Mobile_Tel";
$tdatastaff_info[".viewFields"][] = "Email";
$tdatastaff_info[".viewFields"][] = "Address";
$tdatastaff_info[".viewFields"][] = "f1_name";
$tdatastaff_info[".viewFields"][] = "f1_relation";
$tdatastaff_info[".viewFields"][] = "f1_tel";
$tdatastaff_info[".viewFields"][] = "f2_name";
$tdatastaff_info[".viewFields"][] = "f2_relation";
$tdatastaff_info[".viewFields"][] = "f2_tel";
$tdatastaff_info[".viewFields"][] = "sstatus";
$tdatastaff_info[".viewFields"][] = "StaffNo";
$tdatastaff_info[".viewFields"][] = "Job_Sesi";
$tdatastaff_info[".viewFields"][] = "Job_Type";
$tdatastaff_info[".viewFields"][] = "Job_Title";
$tdatastaff_info[".viewFields"][] = "Grade";
$tdatastaff_info[".viewFields"][] = "Elaun";
$tdatastaff_info[".viewFields"][] = "Join_Date";
$tdatastaff_info[".viewFields"][] = "End_Date";
$tdatastaff_info[".viewFields"][] = "Gerak_Date";
$tdatastaff_info[".viewFields"][] = "course_main";
$tdatastaff_info[".viewFields"][] = "course_opsyen";
$tdatastaff_info[".viewFields"][] = "bank1";
$tdatastaff_info[".viewFields"][] = "epf";
$tdatastaff_info[".viewFields"][] = "Disability";
$tdatastaff_info[".viewFields"][] = "Medical_condition";
$tdatastaff_info[".viewFields"][] = "blood";

$tdatastaff_info[".addFields"] = array();
$tdatastaff_info[".addFields"][] = "photo";
$tdatastaff_info[".addFields"][] = "Name";
$tdatastaff_info[".addFields"][] = "IC Number";
$tdatastaff_info[".addFields"][] = "Gender";
$tdatastaff_info[".addFields"][] = "Race";
$tdatastaff_info[".addFields"][] = "married";
$tdatastaff_info[".addFields"][] = "kelulusan";
$tdatastaff_info[".addFields"][] = "Mobile_Tel";
$tdatastaff_info[".addFields"][] = "Email";
$tdatastaff_info[".addFields"][] = "Address";
$tdatastaff_info[".addFields"][] = "f1_name";
$tdatastaff_info[".addFields"][] = "f1_relation";
$tdatastaff_info[".addFields"][] = "f1_tel";
$tdatastaff_info[".addFields"][] = "f2_name";
$tdatastaff_info[".addFields"][] = "f2_relation";
$tdatastaff_info[".addFields"][] = "f2_tel";
$tdatastaff_info[".addFields"][] = "sstatus";
$tdatastaff_info[".addFields"][] = "StaffNo";
$tdatastaff_info[".addFields"][] = "Job_Sesi";
$tdatastaff_info[".addFields"][] = "Job_Type";
$tdatastaff_info[".addFields"][] = "Job_Title";
$tdatastaff_info[".addFields"][] = "Grade";
$tdatastaff_info[".addFields"][] = "Elaun";
$tdatastaff_info[".addFields"][] = "Join_Date";
$tdatastaff_info[".addFields"][] = "End_Date";
$tdatastaff_info[".addFields"][] = "Gerak_Date";
$tdatastaff_info[".addFields"][] = "course_main";
$tdatastaff_info[".addFields"][] = "course_opsyen";
$tdatastaff_info[".addFields"][] = "bank1";
$tdatastaff_info[".addFields"][] = "epf";
$tdatastaff_info[".addFields"][] = "Disability";
$tdatastaff_info[".addFields"][] = "Medical_condition";
$tdatastaff_info[".addFields"][] = "blood";

$tdatastaff_info[".inlineAddFields"] = array();

$tdatastaff_info[".editFields"] = array();
$tdatastaff_info[".editFields"][] = "photo";
$tdatastaff_info[".editFields"][] = "Name";
$tdatastaff_info[".editFields"][] = "IC Number";
$tdatastaff_info[".editFields"][] = "Gender";
$tdatastaff_info[".editFields"][] = "Race";
$tdatastaff_info[".editFields"][] = "married";
$tdatastaff_info[".editFields"][] = "kelulusan";
$tdatastaff_info[".editFields"][] = "Mobile_Tel";
$tdatastaff_info[".editFields"][] = "Email";
$tdatastaff_info[".editFields"][] = "Address";
$tdatastaff_info[".editFields"][] = "f1_name";
$tdatastaff_info[".editFields"][] = "f1_relation";
$tdatastaff_info[".editFields"][] = "f1_tel";
$tdatastaff_info[".editFields"][] = "f2_name";
$tdatastaff_info[".editFields"][] = "f2_relation";
$tdatastaff_info[".editFields"][] = "f2_tel";
$tdatastaff_info[".editFields"][] = "sstatus";
$tdatastaff_info[".editFields"][] = "StaffNo";
$tdatastaff_info[".editFields"][] = "Job_Sesi";
$tdatastaff_info[".editFields"][] = "Job_Type";
$tdatastaff_info[".editFields"][] = "Job_Title";
$tdatastaff_info[".editFields"][] = "Grade";
$tdatastaff_info[".editFields"][] = "Elaun";
$tdatastaff_info[".editFields"][] = "Join_Date";
$tdatastaff_info[".editFields"][] = "End_Date";
$tdatastaff_info[".editFields"][] = "Gerak_Date";
$tdatastaff_info[".editFields"][] = "course_main";
$tdatastaff_info[".editFields"][] = "course_opsyen";
$tdatastaff_info[".editFields"][] = "bank1";
$tdatastaff_info[".editFields"][] = "epf";
$tdatastaff_info[".editFields"][] = "Disability";
$tdatastaff_info[".editFields"][] = "Medical_condition";
$tdatastaff_info[".editFields"][] = "blood";

$tdatastaff_info[".inlineEditFields"] = array();

$tdatastaff_info[".exportFields"] = array();
$tdatastaff_info[".exportFields"][] = "Name";
$tdatastaff_info[".exportFields"][] = "IC Number";
$tdatastaff_info[".exportFields"][] = "Gender";
$tdatastaff_info[".exportFields"][] = "Race";
$tdatastaff_info[".exportFields"][] = "married";
$tdatastaff_info[".exportFields"][] = "kelulusan";
$tdatastaff_info[".exportFields"][] = "Mobile_Tel";
$tdatastaff_info[".exportFields"][] = "Email";
$tdatastaff_info[".exportFields"][] = "Address";
$tdatastaff_info[".exportFields"][] = "f1_name";
$tdatastaff_info[".exportFields"][] = "f1_relation";
$tdatastaff_info[".exportFields"][] = "f1_tel";
$tdatastaff_info[".exportFields"][] = "f2_name";
$tdatastaff_info[".exportFields"][] = "f2_relation";
$tdatastaff_info[".exportFields"][] = "f2_tel";
$tdatastaff_info[".exportFields"][] = "sstatus";
$tdatastaff_info[".exportFields"][] = "StaffNo";
$tdatastaff_info[".exportFields"][] = "Job_Sesi";
$tdatastaff_info[".exportFields"][] = "Job_Type";
$tdatastaff_info[".exportFields"][] = "Job_Title";
$tdatastaff_info[".exportFields"][] = "Grade";
$tdatastaff_info[".exportFields"][] = "Elaun";
$tdatastaff_info[".exportFields"][] = "Join_Date";
$tdatastaff_info[".exportFields"][] = "End_Date";
$tdatastaff_info[".exportFields"][] = "Gerak_Date";
$tdatastaff_info[".exportFields"][] = "course_main";
$tdatastaff_info[".exportFields"][] = "course_opsyen";
$tdatastaff_info[".exportFields"][] = "bank1";
$tdatastaff_info[".exportFields"][] = "epf";
$tdatastaff_info[".exportFields"][] = "Disability";
$tdatastaff_info[".exportFields"][] = "Medical_condition";
$tdatastaff_info[".exportFields"][] = "blood";

$tdatastaff_info[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["ID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:250px;";
	$edata["controlWidth"] = 250;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Name"] = $fdata;
//	StaffNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StaffNo";
	$fdata["GoodName"] = "StaffNo";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "No Staf"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StaffNo"; 
		$fdata["FullName"] = "StaffNo";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["StaffNo"] = $fdata;
//	IC Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IC Number";
	$fdata["GoodName"] = "IC_Number";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "K/P Baru"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "IC_No"; 
		$fdata["FullName"] = "IC_No";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=14";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["IC Number"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Email"; 
		$fdata["FullName"] = "Email";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
		$edata["inputStyle"] = " width:200px;";
	$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Email"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Jantina"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Gender"; 
		$fdata["FullName"] = "Gender";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "L";
	$edata["LookupValues"][] = "P";

	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Gender"] = $fdata;
//	Mobile_Tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Mobile_Tel";
	$fdata["GoodName"] = "Mobile_Tel";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Tel HP"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Mobile_Tel"; 
		$fdata["FullName"] = "Mobile_Tel";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Mobile_Tel"] = $fdata;
//	Disability
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Disability";
	$fdata["GoodName"] = "Disability";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Kecacatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Disability"; 
		$fdata["FullName"] = "Disability";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Disability"] = $fdata;
//	Medical_condition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Medical_condition";
	$fdata["GoodName"] = "Medical_condition";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Keadan Kesihatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Medical_condition"; 
		$fdata["FullName"] = "Medical_condition";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Medical_condition"] = $fdata;
//	Join_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Join_Date";
	$fdata["GoodName"] = "Join_Date";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Tarikh Lantikan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Join_Date"; 
		$fdata["FullName"] = "Join_Date";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Join_Date"] = $fdata;
//	End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "End_Date";
	$fdata["GoodName"] = "End_Date";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Tarikh Berhenti/Bersara"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "End_Date"; 
		$fdata["FullName"] = "End_Date";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["End_Date"] = $fdata;
//	Job_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Job_Type";
	$fdata["GoodName"] = "Job_Type";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Jenis Pekerjaan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Job_Type"; 
		$fdata["FullName"] = "Job_Type";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Guru";
	$edata["LookupValues"][] = "Pekerja";

	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Job_Type"] = $fdata;
//	Job_Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Job_Title";
	$fdata["GoodName"] = "Job_Title";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Nama Pekerjaan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Job_Title"; 
		$fdata["FullName"] = "Job_Title";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "job_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "job_name";
	
		
	$edata["LookupTable"] = "job";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "Job_Type"; 
	$edata["CategoryFilter"] = "job_category"; 
	
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Job_Title"] = $fdata;
//	married
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "married";
	$fdata["GoodName"] = "married";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Status Perkahwinan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "married"; 
		$fdata["FullName"] = "married";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Bujang";
	$edata["LookupValues"][] = "Berkahwin";

	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["married"] = $fdata;
//	blood
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "blood";
	$fdata["GoodName"] = "blood";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Jenis Darah"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "blood"; 
		$fdata["FullName"] = "blood";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "A";
	$edata["LookupValues"][] = "B";
	$edata["LookupValues"][] = "AB";
	$edata["LookupValues"][] = "O";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["blood"] = $fdata;
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Gambar"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "photo"; 
		$fdata["FullName"] = "photo";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
					$vdata["ShowIcon"] = true; 
			$vdata["ShowCustomExpr"] = true; 
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 2000;
	
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["photo"] = $fdata;
//	f1_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "f1_name";
	$fdata["GoodName"] = "f1_name";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Nama Waris 1"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f1_name"; 
		$fdata["FullName"] = "f1_name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:200px;";
	$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f1_name"] = $fdata;
//	f1_relation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "f1_relation";
	$fdata["GoodName"] = "f1_relation";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Hubungan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f1_relation"; 
		$fdata["FullName"] = "f1_relation";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class='9'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f1_relation"] = $fdata;
//	f1_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "f1_tel";
	$fdata["GoodName"] = "f1_tel";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f1_tel"; 
		$fdata["FullName"] = "f1_tel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f1_tel"] = $fdata;
//	f2_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "f2_name";
	$fdata["GoodName"] = "f2_name";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Nama Waris 2"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f2_name"; 
		$fdata["FullName"] = "f2_name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:200px;";
	$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f2_name"] = $fdata;
//	f2_relation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "f2_relation";
	$fdata["GoodName"] = "f2_relation";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Hubungan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f2_relation"; 
		$fdata["FullName"] = "f2_relation";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class='9'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f2_relation"] = $fdata;
//	f2_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "f2_tel";
	$fdata["GoodName"] = "f2_tel";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f2_tel"; 
		$fdata["FullName"] = "f2_tel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f2_tel"] = $fdata;
//	bank1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "bank1";
	$fdata["GoodName"] = "bank1";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Nama Bank 1 & No Akaun"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "bank1"; 
		$fdata["FullName"] = "bank1";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["bank1"] = $fdata;
//	epf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "epf";
	$fdata["GoodName"] = "epf";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "KWSP"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "epf"; 
		$fdata["FullName"] = "epf";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["epf"] = $fdata;
//	Grade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Grade";
	$fdata["GoodName"] = "Grade";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Gred Pekerjaan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Grade"; 
		$fdata["FullName"] = "Grade";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "job_grade";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "job_grade";
	
		
	$edata["LookupTable"] = "job";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "Job_Type"; 
	$edata["CategoryFilter"] = "job_category"; 
	
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "job_grade";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "job_grade";
	
		
	$edata["LookupTable"] = "job";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "Job_Type"; 
	$edata["CategoryFilter"] = "job_category"; 
	
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "job_grade";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "job_grade";
	
		
	$edata["LookupTable"] = "job";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastaff_info["Grade"] = $fdata;
//	kelulusan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "kelulusan";
	$fdata["GoodName"] = "kelulusan";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Kelulusan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "kelulusan"; 
		$fdata["FullName"] = "kelulusan";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:254px;";
	$edata["controlWidth"] = 254;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["kelulusan"] = $fdata;
//	Elaun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Elaun";
	$fdata["GoodName"] = "Elaun";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Elaun ( Untuk Gred KAFA & RAKYAT)"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Elaun"; 
		$fdata["FullName"] = "Elaun";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=47";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Elaun"] = $fdata;
//	Job_Sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Job_Sesi";
	$fdata["GoodName"] = "Job_Sesi";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Sesi"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Job_Sesi"; 
		$fdata["FullName"] = "Job_Sesi";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Pagi";
	$edata["LookupValues"][] = "Petang";
	$edata["LookupValues"][] = "Pagi/Petang";

	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Job_Sesi"] = $fdata;
//	course_opsyen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "course_opsyen";
	$fdata["GoodName"] = "course_opsyen";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Mata Pelajaran Opsyen"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "course_opsyen"; 
		$fdata["FullName"] = "course_opsyen";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "Code";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "course";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["course_opsyen"] = $fdata;
//	course_main
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "course_main";
	$fdata["GoodName"] = "course_main";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Mata Pelajaran Utama"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "course_main"; 
		$fdata["FullName"] = "course_main";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "Code";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "course";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["course_main"] = $fdata;
//	Gerak_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Gerak_Date";
	$fdata["GoodName"] = "Gerak_Date";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Tarikh Pergerakan Gaji"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Gerak_Date"; 
		$fdata["FullName"] = "Gerak_Date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Gerak_Date"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sstatus"; 
		$fdata["FullName"] = "sstatus";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Aktif";
	$edata["LookupValues"][] = "Berhenti";
	$edata["LookupValues"][] = "Berpindah";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["sstatus"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Alamat"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Address"; 
		$fdata["FullName"] = "Address";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 271;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Address"] = $fdata;
//	Race
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Race";
	$fdata["GoodName"] = "Race";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Bangsa"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Race"; 
		$fdata["FullName"] = "Race";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=3";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Race"] = $fdata;

	
$tables_data["staff_info"]=&$tdatastaff_info;
$field_labels["staff_info"] = &$fieldLabelsstaff_info;
$fieldToolTips["staff_info"] = &$fieldToolTipsstaff_info;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff_info"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="staff_valuation";
	$detailsParam["dDataSourceTable"]="staff_valuation";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="staff_valuation";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 2;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["staff_info"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["staff_info"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["staff_info"][$dIndex]["detailKeys"][]="StaffID";

$dIndex = 2-1;
			$strOriginalDetailsTable="staff_qualification";
	$detailsParam["dDataSourceTable"]="staff_qualification";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="staff_qualification";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 2;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 1;
		
	$detailsTablesData["staff_info"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["staff_info"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["staff_info"][$dIndex]["detailKeys"][]="StaffID";

	
// tables which are master tables for current table (detail)
$masterTablesData["staff_info"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff_info()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Name,  StaffNo,  IC_No AS `IC Number`,  Email,  Gender,  Mobile_Tel,  Disability,  Medical_condition,  Join_Date,  End_Date,  Job_Type,  Job_Title,  married,  blood,  photo,  f1_name,  f1_relation,  f1_tel,  f2_name,  f2_relation,  f2_tel,  bank1,  epf,  Grade,  kelulusan,  Elaun,  Job_Sesi,  course_opsyen,  course_main,  Gerak_Date,  sstatus,  Address,  Race";
$proto0["m_strFrom"] = "FROM staff_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "staff_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "staff_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffNo",
	"m_strTable" => "staff_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "IC_No",
	"m_strTable" => "staff_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "IC Number";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "staff_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "staff_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile_Tel",
	"m_strTable" => "staff_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability",
	"m_strTable" => "staff_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Medical_condition",
	"m_strTable" => "staff_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Join_Date",
	"m_strTable" => "staff_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "End_Date",
	"m_strTable" => "staff_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Type",
	"m_strTable" => "staff_info"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Title",
	"m_strTable" => "staff_info"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "married",
	"m_strTable" => "staff_info"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "blood",
	"m_strTable" => "staff_info"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "staff_info"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_name",
	"m_strTable" => "staff_info"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_relation",
	"m_strTable" => "staff_info"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_tel",
	"m_strTable" => "staff_info"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_name",
	"m_strTable" => "staff_info"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_relation",
	"m_strTable" => "staff_info"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_tel",
	"m_strTable" => "staff_info"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "bank1",
	"m_strTable" => "staff_info"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "epf",
	"m_strTable" => "staff_info"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "Grade",
	"m_strTable" => "staff_info"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "kelulusan",
	"m_strTable" => "staff_info"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "Elaun",
	"m_strTable" => "staff_info"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Sesi",
	"m_strTable" => "staff_info"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "course_opsyen",
	"m_strTable" => "staff_info"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "course_main",
	"m_strTable" => "staff_info"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "Gerak_Date",
	"m_strTable" => "staff_info"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "staff_info"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "staff_info"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "Race",
	"m_strTable" => "staff_info"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto73=array();
$proto73["m_link"] = "SQLL_MAIN";
			$proto74=array();
$proto74["m_strName"] = "staff_info";
$proto74["m_columns"] = array();
$proto74["m_columns"][] = "ID";
$proto74["m_columns"][] = "Name";
$proto74["m_columns"][] = "StaffNo";
$proto74["m_columns"][] = "IC_No";
$proto74["m_columns"][] = "Email";
$proto74["m_columns"][] = "Gender";
$proto74["m_columns"][] = "Race";
$proto74["m_columns"][] = "DOB";
$proto74["m_columns"][] = "Address";
$proto74["m_columns"][] = "City";
$proto74["m_columns"][] = "State";
$proto74["m_columns"][] = "Nationality";
$proto74["m_columns"][] = "Home_Tel";
$proto74["m_columns"][] = "Mobile_Tel";
$proto74["m_columns"][] = "Disability";
$proto74["m_columns"][] = "Medical_condition";
$proto74["m_columns"][] = "Join_Date";
$proto74["m_columns"][] = "End_Date";
$proto74["m_columns"][] = "Gerak_Date";
$proto74["m_columns"][] = "Job_Type";
$proto74["m_columns"][] = "Employee_Type";
$proto74["m_columns"][] = "Job_Title";
$proto74["m_columns"][] = "Job_Sesi";
$proto74["m_columns"][] = "Grade";
$proto74["m_columns"][] = "Elaun";
$proto74["m_columns"][] = "department";
$proto74["m_columns"][] = "passport";
$proto74["m_columns"][] = "married";
$proto74["m_columns"][] = "blood";
$proto74["m_columns"][] = "photo";
$proto74["m_columns"][] = "f1_name";
$proto74["m_columns"][] = "f1_relation";
$proto74["m_columns"][] = "f1_tel";
$proto74["m_columns"][] = "f2_name";
$proto74["m_columns"][] = "f2_relation";
$proto74["m_columns"][] = "f2_tel";
$proto74["m_columns"][] = "bank1";
$proto74["m_columns"][] = "bank2";
$proto74["m_columns"][] = "epf";
$proto74["m_columns"][] = "socso";
$proto74["m_columns"][] = "lhdn";
$proto74["m_columns"][] = "confirmation_date";
$proto74["m_columns"][] = "kelulusan";
$proto74["m_columns"][] = "course_opsyen";
$proto74["m_columns"][] = "course_main";
$proto74["m_columns"][] = "sstatus";
$obj = new SQLTable($proto74);

$proto73["m_table"] = $obj;
$proto73["m_alias"] = "";
$proto75=array();
$proto75["m_sql"] = "";
$proto75["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto75["m_column"]=$obj;
$proto75["m_contained"] = array();
$proto75["m_strCase"] = "";
$proto75["m_havingmode"] = "0";
$proto75["m_inBrackets"] = "0";
$proto75["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto75);

$proto73["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto73);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_staff_info = createSqlQuery_staff_info();
																																		$tdatastaff_info[".sqlquery"] = $queryData_staff_info;

include_once(getabspath("include/staff_info_events.php"));
$tableEvents["staff_info"] = new eventclass_staff_info;
$tdatastaff_info[".hasEvents"] = true;

$cipherer = new RunnerCipherer("staff_info");

?>