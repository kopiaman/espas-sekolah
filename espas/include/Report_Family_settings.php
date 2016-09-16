<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Family = array();
	$tdataReport_Family[".NumberOfChars"] = 80; 
	$tdataReport_Family[".ShortName"] = "Report_Family";
	$tdataReport_Family[".OwnerID"] = "";
	$tdataReport_Family[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Family = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsReport_Family["Malay"] = array();
	$fieldToolTipsReport_Family["Malay"] = array();
	$fieldLabelsReport_Family["Malay"]["StudentID"] = "Nama Pelajar";
	$fieldToolTipsReport_Family["Malay"]["StudentID"] = "";
	$fieldLabelsReport_Family["Malay"]["MatricNo"] = "No Dikenali";
	$fieldToolTipsReport_Family["Malay"]["MatricNo"] = "";
	$fieldLabelsReport_Family["Malay"]["Name1"] = "Nama Bapa";
	$fieldToolTipsReport_Family["Malay"]["Name1"] = "";
	$fieldLabelsReport_Family["Malay"]["tel1"] = "No Tel Bapa";
	$fieldToolTipsReport_Family["Malay"]["tel1"] = "";
	$fieldLabelsReport_Family["Malay"]["relation1"] = "Perhubungan 1";
	$fieldToolTipsReport_Family["Malay"]["relation1"] = "";
	$fieldLabelsReport_Family["Malay"]["Name2"] = "Nama Ibu";
	$fieldToolTipsReport_Family["Malay"]["Name2"] = "";
	$fieldLabelsReport_Family["Malay"]["tel2"] = "No Tel Ibu";
	$fieldToolTipsReport_Family["Malay"]["tel2"] = "";
	$fieldLabelsReport_Family["Malay"]["relation2"] = "Perhubungan 2";
	$fieldToolTipsReport_Family["Malay"]["relation2"] = "";
	$fieldLabelsReport_Family["Malay"]["Status"] = "Status";
	$fieldToolTipsReport_Family["Malay"]["Status"] = "";
	$fieldLabelsReport_Family["Malay"]["kelas"] = "Kelas";
	$fieldToolTipsReport_Family["Malay"]["kelas"] = "";
	$fieldLabelsReport_Family["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsReport_Family["Malay"]["sesi"] = "";
	$fieldLabelsReport_Family["Malay"]["darjah"] = "Darjah";
	$fieldToolTipsReport_Family["Malay"]["darjah"] = "";
	if (count($fieldToolTipsReport_Family["Malay"]))
		$tdataReport_Family[".isUseToolTips"] = true;
}
	
	
	$tdataReport_Family[".NCSearch"] = true;



$tdataReport_Family[".shortTableName"] = "Report_Family";
$tdataReport_Family[".nSecOptions"] = 0;
$tdataReport_Family[".recsPerRowList"] = 1;
$tdataReport_Family[".mainTableOwnerID"] = "";
$tdataReport_Family[".moveNext"] = 1;
$tdataReport_Family[".nType"] = 1;

$tdataReport_Family[".strOriginalTableName"] = "student_info";




$tdataReport_Family[".showAddInPopup"] = false;

$tdataReport_Family[".showEditInPopup"] = false;

$tdataReport_Family[".showViewInPopup"] = true;

$tdataReport_Family[".fieldsForRegister"] = array();
	
$tdataReport_Family[".listAjax"] = false;

	$tdataReport_Family[".audit"] = false;

	$tdataReport_Family[".locking"] = false;

$tdataReport_Family[".listIcons"] = true;
$tdataReport_Family[".inlineEdit"] = true;

$tdataReport_Family[".exportTo"] = true;



$tdataReport_Family[".showSimpleSearchOptions"] = false;

$tdataReport_Family[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Family[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Family[".isUseAjaxSuggest"] = true;

$tdataReport_Family[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Family[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Family[".isUseTimeForSearch"] = false;




$tdataReport_Family[".allSearchFields"] = array();

$tdataReport_Family[".allSearchFields"][] = "StudentID";
$tdataReport_Family[".allSearchFields"][] = "darjah";
$tdataReport_Family[".allSearchFields"][] = "kelas";
$tdataReport_Family[".allSearchFields"][] = "sesi";
$tdataReport_Family[".allSearchFields"][] = "Status";
$tdataReport_Family[".allSearchFields"][] = "Name1";
$tdataReport_Family[".allSearchFields"][] = "tel1";
$tdataReport_Family[".allSearchFields"][] = "Name2";
$tdataReport_Family[".allSearchFields"][] = "tel2";

$tdataReport_Family[".googleLikeFields"][] = "StudentID";

$tdataReport_Family[".panelSearchFields"][] = "StudentID";
$tdataReport_Family[".panelSearchFields"][] = "darjah";
$tdataReport_Family[".panelSearchFields"][] = "kelas";
$tdataReport_Family[".panelSearchFields"][] = "sesi";
$tdataReport_Family[".panelSearchFields"][] = "Status";
$tdataReport_Family[".panelSearchFields"][] = "Name1";
$tdataReport_Family[".panelSearchFields"][] = "Name2";

$tdataReport_Family[".advSearchFields"][] = "StudentID";
$tdataReport_Family[".advSearchFields"][] = "darjah";
$tdataReport_Family[".advSearchFields"][] = "kelas";
$tdataReport_Family[".advSearchFields"][] = "sesi";
$tdataReport_Family[".advSearchFields"][] = "Status";
$tdataReport_Family[".advSearchFields"][] = "Name1";
$tdataReport_Family[".advSearchFields"][] = "tel1";
$tdataReport_Family[".advSearchFields"][] = "Name2";
$tdataReport_Family[".advSearchFields"][] = "tel2";

$tdataReport_Family[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Family[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Family[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Family[".orderindexes"] = array();
$tdataReport_Family[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "StudentID");

$tdataReport_Family[".sqlHead"] = "SELECT StudentID,  MatricNo,  f1_name AS Name1,  f1_tel AS tel1,  f1_relation AS relation1,  f2_name AS Name2,  f2_tel AS tel2,  f2_relation AS relation2,  `Class` AS kelas,  Status,  sesi,  tahun AS darjah";
$tdataReport_Family[".sqlFrom"] = "FROM student_info";
$tdataReport_Family[".sqlWhereExpr"] = "";
$tdataReport_Family[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Name1";
	$tabFields[] = "MatricNo";
$arrEditTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>22,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>37,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Family[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Personal",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Campus_Info1',
					  'tabName'=>"Campus Info",
					  'nType'=>'0',
					  'nOrder'=>11,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Contact1',
					  'tabName'=>"Contact",
					  'nType'=>'0',
					  'nOrder'=>22,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Next_Of_Kin1',
					  'tabName'=>"Next Of Kin",
					  'nType'=>'0',
					  'nOrder'=>30,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Medical1',
					  'tabName'=>"Medical",
					  'nType'=>'0',
					  'nOrder'=>37,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataReport_Family[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "MatricNo";
$arrViewTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>22,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>34,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Family[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Family[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Family[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Family = array();
$tableKeysReport_Family[] = "StudentID";
$tdataReport_Family[".Keys"] = $tableKeysReport_Family;

$tdataReport_Family[".listFields"] = array();
$tdataReport_Family[".listFields"][] = "StudentID";
$tdataReport_Family[".listFields"][] = "darjah";
$tdataReport_Family[".listFields"][] = "Name1";
$tdataReport_Family[".listFields"][] = "tel1";
$tdataReport_Family[".listFields"][] = "Name2";
$tdataReport_Family[".listFields"][] = "tel2";

$tdataReport_Family[".viewFields"] = array();

$tdataReport_Family[".addFields"] = array();

$tdataReport_Family[".inlineAddFields"] = array();

$tdataReport_Family[".editFields"] = array();

$tdataReport_Family[".inlineEditFields"] = array();
$tdataReport_Family[".inlineEditFields"][] = "darjah";
$tdataReport_Family[".inlineEditFields"][] = "Name1";
$tdataReport_Family[".inlineEditFields"][] = "tel1";
$tdataReport_Family[".inlineEditFields"][] = "Name2";
$tdataReport_Family[".inlineEditFields"][] = "tel2";

$tdataReport_Family[".exportFields"] = array();
$tdataReport_Family[".exportFields"][] = "darjah";
$tdataReport_Family[".exportFields"][] = "kelas";
$tdataReport_Family[".exportFields"][] = "sesi";
$tdataReport_Family[".exportFields"][] = "Status";
$tdataReport_Family[".exportFields"][] = "Name1";
$tdataReport_Family[".exportFields"][] = "tel1";
$tdataReport_Family[".exportFields"][] = "Name2";
$tdataReport_Family[".exportFields"][] = "tel2";

$tdataReport_Family[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Nama Pelajar"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
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
	
		
		
	$tdataReport_Family["StudentID"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "No Dikenali"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "MatricNo";
	
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=12";
	
		$edata["inputStyle"] = " width:222px;";
	$edata["controlWidth"] = 222;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Family["MatricNo"] = $fdata;
//	Name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Name1";
	$fdata["GoodName"] = "Name1";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Nama Bapa"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
	
		
		
	$tdataReport_Family["Name1"] = $fdata;
//	tel1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tel1";
	$fdata["GoodName"] = "tel1";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "No Tel Bapa"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
		
		
	$tdataReport_Family["tel1"] = $fdata;
//	relation1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "relation1";
	$fdata["GoodName"] = "relation1";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Perhubungan 1"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "f1_relation"; 
		$fdata["FullName"] = "f1_relation";
	
		
		
				
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
	
		
		$edata["LookupWhere"] = "Class=9";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Family["relation1"] = $fdata;
//	Name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Name2";
	$fdata["GoodName"] = "Name2";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Nama Ibu"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
	
		
		
	$tdataReport_Family["Name2"] = $fdata;
//	tel2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tel2";
	$fdata["GoodName"] = "tel2";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "No Tel Ibu"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
		
		
	$tdataReport_Family["tel2"] = $fdata;
//	relation2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "relation2";
	$fdata["GoodName"] = "relation2";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Perhubungan 2"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "f2_relation"; 
		$fdata["FullName"] = "f2_relation";
	
		
		
				
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
	
		
		$edata["LookupWhere"] = "Class=9";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Family["relation2"] = $fdata;
//	kelas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "kelas";
	$fdata["GoodName"] = "kelas";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "`Class`";
	
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Family["kelas"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "Status";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=5";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Family["Status"] = $fdata;
//	sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sesi";
	$fdata["GoodName"] = "sesi";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Sesi"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
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
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Sesi";
	$edata["LookupValues"][] = "Petang";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Family["sesi"] = $fdata;
//	darjah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "darjah";
	$fdata["GoodName"] = "darjah";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Darjah"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
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
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Family["darjah"] = $fdata;

	
$tables_data["Report_Family"]=&$tdataReport_Family;
$field_labels["Report_Family"] = &$fieldLabelsReport_Family;
$fieldToolTips["Report_Family"] = &$fieldToolTipsReport_Family;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Family"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Family"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Family()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StudentID,  MatricNo,  f1_name AS Name1,  f1_tel AS tel1,  f1_relation AS relation1,  f2_name AS Name2,  f2_tel AS tel2,  f2_relation AS relation2,  `Class` AS kelas,  Status,  sesi,  tahun AS darjah";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY StudentID DESC";
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
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_name",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Name1";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_tel",
	"m_strTable" => "student_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "tel1";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_relation",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "relation1";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_name",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Name2";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_tel",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "tel2";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_relation",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "relation2";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "kelas";
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
	"m_strName" => "sesi",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "darjah";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "student_info";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "StudentID";
$proto30["m_columns"][] = "Name";
$proto30["m_columns"][] = "ICNO";
$proto30["m_columns"][] = "DOB";
$proto30["m_columns"][] = "MatricNo";
$proto30["m_columns"][] = "Email";
$proto30["m_columns"][] = "Access";
$proto30["m_columns"][] = "DateJoin";
$proto30["m_columns"][] = "Dateout";
$proto30["m_columns"][] = "Gender";
$proto30["m_columns"][] = "Address1";
$proto30["m_columns"][] = "City";
$proto30["m_columns"][] = "Postcode";
$proto30["m_columns"][] = "StateID";
$proto30["m_columns"][] = "HomeTelephone";
$proto30["m_columns"][] = "Nationality";
$proto30["m_columns"][] = "Status";
$proto30["m_columns"][] = "Disability";
$proto30["m_columns"][] = "MedicalCondition";
$proto30["m_columns"][] = "race";
$proto30["m_columns"][] = "Class";
$proto30["m_columns"][] = "sesi";
$proto30["m_columns"][] = "tahun";
$proto30["m_columns"][] = "f1_name";
$proto30["m_columns"][] = "f1_tel";
$proto30["m_columns"][] = "f1_relation";
$proto30["m_columns"][] = "f1_job";
$proto30["m_columns"][] = "f2_name";
$proto30["m_columns"][] = "f2_tel";
$proto30["m_columns"][] = "f2_relation";
$proto30["m_columns"][] = "f2_job";
$proto30["m_columns"][] = "blood";
$proto30["m_columns"][] = "hostel_in";
$proto30["m_columns"][] = "photo";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 0;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Family = createSqlQuery_Report_Family();
												$tdataReport_Family[".sqlquery"] = $queryData_Report_Family;

include_once(getabspath("include/Report_Family_events.php"));
$tableEvents["Report_Family"] = new eventclass_Report_Family;
$tdataReport_Family[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Family");

?>