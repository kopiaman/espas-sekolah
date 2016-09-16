<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_info = array();
	$tdatastudent_info[".NumberOfChars"] = 80; 
	$tdatastudent_info[".ShortName"] = "student_info";
	$tdatastudent_info[".OwnerID"] = "";
	$tdatastudent_info[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsstudent_info = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstudent_info["Malay"] = array();
	$fieldToolTipsstudent_info["Malay"] = array();
	$fieldLabelsstudent_info["Malay"]["StudentID"] = "StudentID";
	$fieldToolTipsstudent_info["Malay"]["StudentID"] = "";
	$fieldLabelsstudent_info["Malay"]["Name"] = "Nama Murid";
	$fieldToolTipsstudent_info["Malay"]["Name"] = "";
	$fieldLabelsstudent_info["Malay"]["ICNO"] = "MyKid";
	$fieldToolTipsstudent_info["Malay"]["ICNO"] = "";
	$fieldLabelsstudent_info["Malay"]["DOB"] = "Tarikh Lahir";
	$fieldToolTipsstudent_info["Malay"]["DOB"] = "";
	$fieldLabelsstudent_info["Malay"]["MatricNo"] = "No Dikenali";
	$fieldToolTipsstudent_info["Malay"]["MatricNo"] = "";
	$fieldLabelsstudent_info["Malay"]["DateJoin"] = "Tarikh Daftar";
	$fieldToolTipsstudent_info["Malay"]["DateJoin"] = "";
	$fieldLabelsstudent_info["Malay"]["Gender"] = "Jantina";
	$fieldToolTipsstudent_info["Malay"]["Gender"] = "";
	$fieldLabelsstudent_info["Malay"]["Address1"] = "Alamat";
	$fieldToolTipsstudent_info["Malay"]["Address1"] = "";
	$fieldLabelsstudent_info["Malay"]["HomeTelephone"] = "Tel Rumah";
	$fieldToolTipsstudent_info["Malay"]["HomeTelephone"] = "";
	$fieldLabelsstudent_info["Malay"]["Status"] = "Status";
	$fieldToolTipsstudent_info["Malay"]["Status"] = "";
	$fieldLabelsstudent_info["Malay"]["Class"] = "Kelas";
	$fieldToolTipsstudent_info["Malay"]["Class"] = "";
	$fieldLabelsstudent_info["Malay"]["photo"] = "Gambar";
	$fieldToolTipsstudent_info["Malay"]["photo"] = "";
	$fieldLabelsstudent_info["Malay"]["f1_name"] = "Nama Bapa";
	$fieldToolTipsstudent_info["Malay"]["f1_name"] = "";
	$fieldLabelsstudent_info["Malay"]["f1_tel"] = "Tel Bapa";
	$fieldToolTipsstudent_info["Malay"]["f1_tel"] = "";
	$fieldLabelsstudent_info["Malay"]["f2_name"] = "Nama Ibu";
	$fieldToolTipsstudent_info["Malay"]["f2_name"] = "";
	$fieldLabelsstudent_info["Malay"]["f2_tel"] = "Tel Ibu";
	$fieldToolTipsstudent_info["Malay"]["f2_tel"] = "";
	$fieldLabelsstudent_info["Malay"]["Option"] = "Option";
	$fieldToolTipsstudent_info["Malay"]["Option"] = "";
	$fieldLabelsstudent_info["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsstudent_info["Malay"]["sesi"] = "";
	$fieldLabelsstudent_info["Malay"]["tahun"] = "Darjah";
	$fieldToolTipsstudent_info["Malay"]["tahun"] = "";
	$fieldLabelsstudent_info["Malay"]["Dateout"] = "Tarikh Keluar Sekolah";
	$fieldToolTipsstudent_info["Malay"]["Dateout"] = "";
	$fieldLabelsstudent_info["Malay"]["murid"] = "Murid";
	$fieldToolTipsstudent_info["Malay"]["murid"] = "";
	$fieldLabelsstudent_info["Malay"]["f2_job"] = "Pekerjaan Ibu";
	$fieldToolTipsstudent_info["Malay"]["f2_job"] = "";
	$fieldLabelsstudent_info["Malay"]["f1_job"] = "Pekerjaan Bapa";
	$fieldToolTipsstudent_info["Malay"]["f1_job"] = "";
	if (count($fieldToolTipsstudent_info["Malay"]))
		$tdatastudent_info[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_info[".NCSearch"] = true;



$tdatastudent_info[".shortTableName"] = "student_info";
$tdatastudent_info[".nSecOptions"] = 0;
$tdatastudent_info[".recsPerRowList"] = 1;
$tdatastudent_info[".mainTableOwnerID"] = "";
$tdatastudent_info[".moveNext"] = 1;
$tdatastudent_info[".nType"] = 0;

$tdatastudent_info[".strOriginalTableName"] = "student_info";




$tdatastudent_info[".showAddInPopup"] = false;

$tdatastudent_info[".showEditInPopup"] = false;

$tdatastudent_info[".showViewInPopup"] = true;

$tdatastudent_info[".fieldsForRegister"] = array();
	
$tdatastudent_info[".listAjax"] = false;

	$tdatastudent_info[".audit"] = false;

	$tdatastudent_info[".locking"] = false;

$tdatastudent_info[".listIcons"] = true;
$tdatastudent_info[".edit"] = true;
$tdatastudent_info[".inlineEdit"] = true;

$tdatastudent_info[".exportTo"] = true;


$tdatastudent_info[".delete"] = true;

$tdatastudent_info[".showSimpleSearchOptions"] = false;

$tdatastudent_info[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_info[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_info[".isUseAjaxSuggest"] = true;

$tdatastudent_info[".rowHighlite"] = true;

// button handlers file names
$tdatastudent_info[".isUsebuttonHandlers"] = true;

$tdatastudent_info[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_info[".isUseTimeForSearch"] = false;




$tdatastudent_info[".allSearchFields"] = array();

$tdatastudent_info[".allSearchFields"][] = "Name";
$tdatastudent_info[".allSearchFields"][] = "ICNO";
$tdatastudent_info[".allSearchFields"][] = "Gender";
$tdatastudent_info[".allSearchFields"][] = "Address1";
$tdatastudent_info[".allSearchFields"][] = "MatricNo";
$tdatastudent_info[".allSearchFields"][] = "tahun";
$tdatastudent_info[".allSearchFields"][] = "Class";
$tdatastudent_info[".allSearchFields"][] = "sesi";
$tdatastudent_info[".allSearchFields"][] = "Status";
$tdatastudent_info[".allSearchFields"][] = "HomeTelephone";
$tdatastudent_info[".allSearchFields"][] = "f1_name";
$tdatastudent_info[".allSearchFields"][] = "f2_name";

$tdatastudent_info[".googleLikeFields"][] = "Name";

$tdatastudent_info[".panelSearchFields"][] = "Name";
$tdatastudent_info[".panelSearchFields"][] = "ICNO";
$tdatastudent_info[".panelSearchFields"][] = "MatricNo";
$tdatastudent_info[".panelSearchFields"][] = "tahun";
$tdatastudent_info[".panelSearchFields"][] = "Class";
$tdatastudent_info[".panelSearchFields"][] = "sesi";

$tdatastudent_info[".advSearchFields"][] = "Name";
$tdatastudent_info[".advSearchFields"][] = "ICNO";
$tdatastudent_info[".advSearchFields"][] = "Gender";
$tdatastudent_info[".advSearchFields"][] = "Address1";
$tdatastudent_info[".advSearchFields"][] = "MatricNo";
$tdatastudent_info[".advSearchFields"][] = "tahun";
$tdatastudent_info[".advSearchFields"][] = "Class";
$tdatastudent_info[".advSearchFields"][] = "sesi";
$tdatastudent_info[".advSearchFields"][] = "Status";
$tdatastudent_info[".advSearchFields"][] = "HomeTelephone";
$tdatastudent_info[".advSearchFields"][] = "f1_name";
$tdatastudent_info[".advSearchFields"][] = "f2_name";

$tdatastudent_info[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_info[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY tahun DESC, Name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_info[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_info[".orderindexes"] = array();
$tdatastudent_info[".orderindexes"][] = array(18, (0 ? "ASC" : "DESC"), "tahun");
$tdatastudent_info[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Name");

$tdatastudent_info[".sqlHead"] = "SELECT StudentID,  Name,  ICNO,  DOB,  MatricNo,  DateJoin,  Gender,  Address1,  HomeTelephone,  Status,  `Class`,  photo,  f1_name,  f1_tel,  f2_name,  f2_tel,  sesi,  tahun,  Dateout,  StudentID AS `Option`,  f2_job,  f1_job";
$tdatastudent_info[".sqlFrom"] = "FROM student_info";
$tdatastudent_info[".sqlWhereExpr"] = "";
$tdatastudent_info[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "photo";
	$tabFields[] = "Name";
	$tabFields[] = "DOB";
	$tabFields[] = "ICNO";
	$tabFields[] = "Gender";
	$tabFields[] = "Address1";
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Peribadi",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "MatricNo";
	$tabFields[] = "tahun";
	$tabFields[] = "Class";
	$tabFields[] = "sesi";
	$tabFields[] = "DateJoin";
	$tabFields[] = "Dateout";
	$tabFields[] = "Status";
$arrEditTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Persekolahan",
					   'nType'=>'0',
					   'nOrder'=>8,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "HomeTelephone";
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f1_job";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_tel";
	$tabFields[] = "f2_job";
$arrEditTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Waris",
					   'nType'=>'0',
					   'nOrder'=>16,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatastudent_info[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "photo";
	$tabFields[] = "Name";
	$tabFields[] = "DOB";
	$tabFields[] = "ICNO";
	$tabFields[] = "Gender";
	$tabFields[] = "Address1";
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Peribadi",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "MatricNo";
	$tabFields[] = "tahun";
	$tabFields[] = "Class";
	$tabFields[] = "sesi";
	$tabFields[] = "DateJoin";
	$tabFields[] = "Dateout";
	$tabFields[] = "Status";
$arrAddTabs[] = array('tabId'=>'Campus_Info1',
					  'tabName'=>"Persekolahan",
					  'nType'=>'0',
					  'nOrder'=>8,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "HomeTelephone";
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f1_job";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_tel";
	$tabFields[] = "f2_job";
$arrAddTabs[] = array('tabId'=>'Next_Of_Kin1',
					  'tabName'=>"Waris",
					  'nType'=>'0',
					  'nOrder'=>16,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatastudent_info[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "photo";
	$tabFields[] = "Name";
	$tabFields[] = "DOB";
	$tabFields[] = "ICNO";
	$tabFields[] = "Gender";
	$tabFields[] = "Address1";
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Peribadi",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "MatricNo";
	$tabFields[] = "tahun";
	$tabFields[] = "Class";
	$tabFields[] = "sesi";
	$tabFields[] = "DateJoin";
	$tabFields[] = "Dateout";
	$tabFields[] = "Status";
$arrViewTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Persekolahan",
					   'nType'=>'0',
					   'nOrder'=>8,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "HomeTelephone";
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f1_job";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_tel";
	$tabFields[] = "f2_job";
$arrViewTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Waris",
					   'nType'=>'0',
					   'nOrder'=>16,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Kesihatan",
					   'nType'=>'0',
					   'nOrder'=>24,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatastudent_info[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_info[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_info[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_info = array();
$tableKeysstudent_info[] = "StudentID";
$tdatastudent_info[".Keys"] = $tableKeysstudent_info;

$tdatastudent_info[".listFields"] = array();
$tdatastudent_info[".listFields"][] = "Name";
$tdatastudent_info[".listFields"][] = "MatricNo";
$tdatastudent_info[".listFields"][] = "tahun";
$tdatastudent_info[".listFields"][] = "Class";
$tdatastudent_info[".listFields"][] = "sesi";
$tdatastudent_info[".listFields"][] = "Status";
$tdatastudent_info[".listFields"][] = "Option";

$tdatastudent_info[".viewFields"] = array();

$tdatastudent_info[".addFields"] = array();
$tdatastudent_info[".addFields"][] = "photo";
$tdatastudent_info[".addFields"][] = "Name";
$tdatastudent_info[".addFields"][] = "DOB";
$tdatastudent_info[".addFields"][] = "ICNO";
$tdatastudent_info[".addFields"][] = "Gender";
$tdatastudent_info[".addFields"][] = "Address1";
$tdatastudent_info[".addFields"][] = "MatricNo";
$tdatastudent_info[".addFields"][] = "tahun";
$tdatastudent_info[".addFields"][] = "Class";
$tdatastudent_info[".addFields"][] = "sesi";
$tdatastudent_info[".addFields"][] = "DateJoin";
$tdatastudent_info[".addFields"][] = "Dateout";
$tdatastudent_info[".addFields"][] = "Status";
$tdatastudent_info[".addFields"][] = "HomeTelephone";
$tdatastudent_info[".addFields"][] = "f1_name";
$tdatastudent_info[".addFields"][] = "f1_tel";
$tdatastudent_info[".addFields"][] = "f1_job";
$tdatastudent_info[".addFields"][] = "f2_name";
$tdatastudent_info[".addFields"][] = "f2_tel";
$tdatastudent_info[".addFields"][] = "f2_job";

$tdatastudent_info[".inlineAddFields"] = array();

$tdatastudent_info[".editFields"] = array();
$tdatastudent_info[".editFields"][] = "photo";
$tdatastudent_info[".editFields"][] = "Name";
$tdatastudent_info[".editFields"][] = "DOB";
$tdatastudent_info[".editFields"][] = "ICNO";
$tdatastudent_info[".editFields"][] = "Gender";
$tdatastudent_info[".editFields"][] = "Address1";
$tdatastudent_info[".editFields"][] = "MatricNo";
$tdatastudent_info[".editFields"][] = "tahun";
$tdatastudent_info[".editFields"][] = "Class";
$tdatastudent_info[".editFields"][] = "sesi";
$tdatastudent_info[".editFields"][] = "DateJoin";
$tdatastudent_info[".editFields"][] = "Dateout";
$tdatastudent_info[".editFields"][] = "Status";
$tdatastudent_info[".editFields"][] = "HomeTelephone";
$tdatastudent_info[".editFields"][] = "f1_name";
$tdatastudent_info[".editFields"][] = "f1_tel";
$tdatastudent_info[".editFields"][] = "f1_job";
$tdatastudent_info[".editFields"][] = "f2_name";
$tdatastudent_info[".editFields"][] = "f2_tel";
$tdatastudent_info[".editFields"][] = "f2_job";

$tdatastudent_info[".inlineEditFields"] = array();
$tdatastudent_info[".inlineEditFields"][] = "tahun";
$tdatastudent_info[".inlineEditFields"][] = "Class";
$tdatastudent_info[".inlineEditFields"][] = "sesi";
$tdatastudent_info[".inlineEditFields"][] = "Status";

$tdatastudent_info[".exportFields"] = array();
$tdatastudent_info[".exportFields"][] = "Name";
$tdatastudent_info[".exportFields"][] = "DOB";
$tdatastudent_info[".exportFields"][] = "ICNO";
$tdatastudent_info[".exportFields"][] = "Gender";
$tdatastudent_info[".exportFields"][] = "MatricNo";
$tdatastudent_info[".exportFields"][] = "tahun";
$tdatastudent_info[".exportFields"][] = "Class";
$tdatastudent_info[".exportFields"][] = "sesi";
$tdatastudent_info[".exportFields"][] = "Status";
$tdatastudent_info[".exportFields"][] = "Address1";
$tdatastudent_info[".exportFields"][] = "HomeTelephone";
$tdatastudent_info[".exportFields"][] = "f1_name";
$tdatastudent_info[".exportFields"][] = "f1_tel";
$tdatastudent_info[".exportFields"][] = "f1_job";
$tdatastudent_info[".exportFields"][] = "f2_name";
$tdatastudent_info[".exportFields"][] = "f2_tel";
$tdatastudent_info[".exportFields"][] = "f2_job";

$tdatastudent_info[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "StudentID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["StudentID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Nama Murid"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
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
			$edata["EditParams"].= " maxlength=150";
	
		$edata["inputStyle"] = " width:266px;";
	$edata["controlWidth"] = 266;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["Name"] = $fdata;
//	ICNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ICNO";
	$fdata["GoodName"] = "ICNO";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "MyKid"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ICNO"; 
		$fdata["FullName"] = "ICNO";
	
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
			
		$edata["inputStyle"] = " width:217px;";
	$edata["controlWidth"] = 217;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["ICNO"] = $fdata;
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Tarikh Lahir"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DOB"; 
		$fdata["FullName"] = "DOB";
	
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
	
		
		
	$tdatastudent_info["DOB"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "No Dikenali"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "MatricNo";
	
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
			$edata["EditParams"].= " maxlength=12";
	
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["MatricNo"] = $fdata;
//	DateJoin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DateJoin";
	$fdata["GoodName"] = "DateJoin";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Tarikh Daftar"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "DateJoin"; 
		$fdata["FullName"] = "DateJoin";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
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
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 4; 
	$edata["LastYearFactor"] = 0; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 4; 
	$edata["LastYearFactor"] = 1; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 4; 
	$edata["LastYearFactor"] = 0; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_info["DateJoin"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Jantina"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
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
	
		
		
	$tdatastudent_info["Gender"] = $fdata;
//	Address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Address1";
	$fdata["GoodName"] = "Address1";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Alamat"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Address1"; 
		$fdata["FullName"] = "Address1";
	
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
	
		
		
		
				$edata["nRows"] = 30;
			$edata["nCols"] = 300;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["Address1"] = $fdata;
//	HomeTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "HomeTelephone";
	$fdata["GoodName"] = "HomeTelephone";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Tel Rumah"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "HomeTelephone"; 
		$fdata["FullName"] = "HomeTelephone";
	
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
			$edata["EditParams"].= " maxlength=12";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["HomeTelephone"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "Status";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=5";
	
		
		
		
				
	
	
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=5";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
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
	
		
		$edata["LookupWhere"] = "Class=5";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_info["Status"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "`Class`";
	
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
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "group";
	
		
	$edata["LookupTable"] = "group";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
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
	
		
		
	$tdatastudent_info["Class"] = $fdata;
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Gambar"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "photo"; 
		$fdata["FullName"] = "photo";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
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
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 400;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["photo"] = $fdata;
//	f1_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "f1_name";
	$fdata["GoodName"] = "f1_name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Nama Bapa"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["f1_name"] = $fdata;
//	f1_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "f1_tel";
	$fdata["GoodName"] = "f1_tel";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Tel Bapa"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
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
	
		
		
	$tdatastudent_info["f1_tel"] = $fdata;
//	f2_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "f2_name";
	$fdata["GoodName"] = "f2_name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Nama Ibu"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["f2_name"] = $fdata;
//	f2_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "f2_tel";
	$fdata["GoodName"] = "f2_tel";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Tel Ibu"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
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
	
		
		
	$tdatastudent_info["f2_tel"] = $fdata;
//	sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sesi";
	$fdata["GoodName"] = "sesi";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Sesi"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sesi"; 
		$fdata["FullName"] = "sesi";
	
		
		
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
	
		
		$edata["AutoUpdate"] = true; 
	
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Pagi";
	$edata["LookupValues"][] = "Petang";

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
	
		
		
	$tdatastudent_info["sesi"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Darjah"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tahun"; 
		$fdata["FullName"] = "tahun";
	
		
		
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
				
		
			
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Value";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=45";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["tahun"] = $fdata;
//	Dateout
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Dateout";
	$fdata["GoodName"] = "Dateout";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Tarikh Keluar Sekolah"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "Dateout"; 
		$fdata["FullName"] = "Dateout";
	
		
		
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
	$edata["InitialYearFactor"] = 4; 
	$edata["LastYearFactor"] = 1; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["Dateout"] = $fdata;
//	Option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Option";
	$fdata["GoodName"] = "Option";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Option"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_info["Option"] = $fdata;
//	f2_job
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "f2_job";
	$fdata["GoodName"] = "f2_job";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Pekerjaan Ibu"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f2_job"; 
		$fdata["FullName"] = "f2_job";
	
		
		
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
	
		
		
	$tdatastudent_info["f2_job"] = $fdata;
//	f1_job
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "f1_job";
	$fdata["GoodName"] = "f1_job";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Pekerjaan Bapa"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f1_job"; 
		$fdata["FullName"] = "f1_job";
	
		
		
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
	
		
		
	$tdatastudent_info["f1_job"] = $fdata;

	
$tables_data["student_info"]=&$tdatastudent_info;
$field_labels["student_info"] = &$fieldLabelsstudent_info;
$fieldToolTips["student_info"] = &$fieldToolTipsstudent_info;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_info"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_info"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_info()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StudentID,  Name,  ICNO,  DOB,  MatricNo,  DateJoin,  Gender,  Address1,  HomeTelephone,  Status,  `Class`,  photo,  f1_name,  f1_tel,  f2_name,  f2_tel,  sesi,  tahun,  Dateout,  StudentID AS `Option`,  f2_job,  f1_job";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tahun DESC, Name";
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
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ICNO",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "student_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "DateJoin",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Address1",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "HomeTelephone",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "student_info"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_name",
	"m_strTable" => "student_info"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_tel",
	"m_strTable" => "student_info"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_name",
	"m_strTable" => "student_info"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_tel",
	"m_strTable" => "student_info"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "sesi",
	"m_strTable" => "student_info"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Dateout",
	"m_strTable" => "student_info"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "Option";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_job",
	"m_strTable" => "student_info"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_job",
	"m_strTable" => "student_info"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto49=array();
$proto49["m_link"] = "SQLL_MAIN";
			$proto50=array();
$proto50["m_strName"] = "student_info";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "StudentID";
$proto50["m_columns"][] = "Name";
$proto50["m_columns"][] = "ICNO";
$proto50["m_columns"][] = "DOB";
$proto50["m_columns"][] = "MatricNo";
$proto50["m_columns"][] = "Email";
$proto50["m_columns"][] = "Access";
$proto50["m_columns"][] = "DateJoin";
$proto50["m_columns"][] = "Dateout";
$proto50["m_columns"][] = "Gender";
$proto50["m_columns"][] = "Address1";
$proto50["m_columns"][] = "City";
$proto50["m_columns"][] = "Postcode";
$proto50["m_columns"][] = "StateID";
$proto50["m_columns"][] = "HomeTelephone";
$proto50["m_columns"][] = "Nationality";
$proto50["m_columns"][] = "Status";
$proto50["m_columns"][] = "Disability";
$proto50["m_columns"][] = "MedicalCondition";
$proto50["m_columns"][] = "race";
$proto50["m_columns"][] = "Class";
$proto50["m_columns"][] = "sesi";
$proto50["m_columns"][] = "tahun";
$proto50["m_columns"][] = "f1_name";
$proto50["m_columns"][] = "f1_tel";
$proto50["m_columns"][] = "f1_relation";
$proto50["m_columns"][] = "f1_job";
$proto50["m_columns"][] = "f2_name";
$proto50["m_columns"][] = "f2_tel";
$proto50["m_columns"][] = "f2_relation";
$proto50["m_columns"][] = "f2_job";
$proto50["m_columns"][] = "blood";
$proto50["m_columns"][] = "hostel_in";
$proto50["m_columns"][] = "photo";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_alias"] = "";
$proto51=array();
$proto51["m_sql"] = "";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "";
$proto51["m_havingmode"] = "0";
$proto51["m_inBrackets"] = "0";
$proto51["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto53["m_column"]=$obj;
$proto53["m_bAsc"] = 0;
$proto53["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto53);

$proto0["m_orderby"][]=$obj;					
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 1;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_info = createSqlQuery_student_info();
																						$tdatastudent_info[".sqlquery"] = $queryData_student_info;

include_once(getabspath("include/student_info_events.php"));
$tableEvents["student_info"] = new eventclass_student_info;
$tdatastudent_info[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_info");

?>