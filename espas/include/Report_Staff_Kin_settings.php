<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Staff_Kin = array();
	$tdataReport_Staff_Kin[".NumberOfChars"] = 80; 
	$tdataReport_Staff_Kin[".ShortName"] = "Report_Staff_Kin";
	$tdataReport_Staff_Kin[".OwnerID"] = "IC_No";
	$tdataReport_Staff_Kin[".OriginalTable"] = "staff_info";

//	field labels
$fieldLabelsReport_Staff_Kin = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsReport_Staff_Kin["Malay"] = array();
	$fieldToolTipsReport_Staff_Kin["Malay"] = array();
	$fieldLabelsReport_Staff_Kin["Malay"]["ID"] = "ID";
	$fieldToolTipsReport_Staff_Kin["Malay"]["ID"] = "";
	$fieldLabelsReport_Staff_Kin["Malay"]["Name"] = "Nama";
	$fieldToolTipsReport_Staff_Kin["Malay"]["Name"] = "";
	$fieldLabelsReport_Staff_Kin["Malay"]["StaffNo"] = "Staff No";
	$fieldToolTipsReport_Staff_Kin["Malay"]["StaffNo"] = "";
	$fieldLabelsReport_Staff_Kin["Malay"]["f1_name"] = "F1 Name";
	$fieldToolTipsReport_Staff_Kin["Malay"]["f1_name"] = "";
	$fieldLabelsReport_Staff_Kin["Malay"]["f1_relation"] = "Hubungan";
	$fieldToolTipsReport_Staff_Kin["Malay"]["f1_relation"] = "";
	$fieldLabelsReport_Staff_Kin["Malay"]["f1_tel"] = "F1 Tel";
	$fieldToolTipsReport_Staff_Kin["Malay"]["f1_tel"] = "";
	$fieldLabelsReport_Staff_Kin["Malay"]["f2_name"] = "F2 Name";
	$fieldToolTipsReport_Staff_Kin["Malay"]["f2_name"] = "";
	$fieldLabelsReport_Staff_Kin["Malay"]["f2_relation"] = "F2 Relation";
	$fieldToolTipsReport_Staff_Kin["Malay"]["f2_relation"] = "";
	$fieldLabelsReport_Staff_Kin["Malay"]["f2_tel"] = "F2 Tel";
	$fieldToolTipsReport_Staff_Kin["Malay"]["f2_tel"] = "";
	$fieldLabelsReport_Staff_Kin["Malay"]["department"] = "Jabatan";
	$fieldToolTipsReport_Staff_Kin["Malay"]["department"] = "";
	if (count($fieldToolTipsReport_Staff_Kin["Malay"]))
		$tdataReport_Staff_Kin[".isUseToolTips"] = true;
}
	
	
	$tdataReport_Staff_Kin[".NCSearch"] = true;



$tdataReport_Staff_Kin[".shortTableName"] = "Report_Staff_Kin";
$tdataReport_Staff_Kin[".nSecOptions"] = 2;
$tdataReport_Staff_Kin[".recsPerRowList"] = 1;
$tdataReport_Staff_Kin[".mainTableOwnerID"] = "IC_No";
$tdataReport_Staff_Kin[".moveNext"] = 1;
$tdataReport_Staff_Kin[".nType"] = 1;

$tdataReport_Staff_Kin[".strOriginalTableName"] = "staff_info";




$tdataReport_Staff_Kin[".showAddInPopup"] = false;

$tdataReport_Staff_Kin[".showEditInPopup"] = false;

$tdataReport_Staff_Kin[".showViewInPopup"] = true;

$tdataReport_Staff_Kin[".fieldsForRegister"] = array();
	
$tdataReport_Staff_Kin[".listAjax"] = false;

	$tdataReport_Staff_Kin[".audit"] = false;

	$tdataReport_Staff_Kin[".locking"] = false;

$tdataReport_Staff_Kin[".listIcons"] = true;
$tdataReport_Staff_Kin[".inlineEdit"] = true;

$tdataReport_Staff_Kin[".exportTo"] = true;



$tdataReport_Staff_Kin[".showSimpleSearchOptions"] = false;

$tdataReport_Staff_Kin[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Staff_Kin[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Staff_Kin[".isUseAjaxSuggest"] = true;

$tdataReport_Staff_Kin[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Staff_Kin[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Staff_Kin[".isUseTimeForSearch"] = false;




$tdataReport_Staff_Kin[".allSearchFields"] = array();

$tdataReport_Staff_Kin[".allSearchFields"][] = "Name";
$tdataReport_Staff_Kin[".allSearchFields"][] = "department";
$tdataReport_Staff_Kin[".allSearchFields"][] = "StaffNo";
$tdataReport_Staff_Kin[".allSearchFields"][] = "f1_name";
$tdataReport_Staff_Kin[".allSearchFields"][] = "f2_name";

$tdataReport_Staff_Kin[".googleLikeFields"][] = "Name";
$tdataReport_Staff_Kin[".googleLikeFields"][] = "StaffNo";
$tdataReport_Staff_Kin[".googleLikeFields"][] = "department";

$tdataReport_Staff_Kin[".panelSearchFields"][] = "Name";
$tdataReport_Staff_Kin[".panelSearchFields"][] = "StaffNo";

$tdataReport_Staff_Kin[".advSearchFields"][] = "Name";
$tdataReport_Staff_Kin[".advSearchFields"][] = "department";
$tdataReport_Staff_Kin[".advSearchFields"][] = "StaffNo";
$tdataReport_Staff_Kin[".advSearchFields"][] = "f1_name";
$tdataReport_Staff_Kin[".advSearchFields"][] = "f2_name";

$tdataReport_Staff_Kin[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Staff_Kin[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Staff_Kin[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Staff_Kin[".orderindexes"] = array();
$tdataReport_Staff_Kin[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "ID");

$tdataReport_Staff_Kin[".sqlHead"] = "SELECT ID,  Name,  StaffNo,  f1_name,  f1_relation,  f1_tel,  f2_name,  f2_relation,  f2_tel,  department";
$tdataReport_Staff_Kin[".sqlFrom"] = "FROM staff_info";
$tdataReport_Staff_Kin[".sqlWhereExpr"] = "";
$tdataReport_Staff_Kin[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>11,
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
					   'tabName'=>"Next of Kin",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "StaffNo";
$arrEditTabs[] = array('tabId'=>'Job_Info1',
					   'tabName'=>"Job Info",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Account_Info1',
					   'tabName'=>"Account Info",
					   'nType'=>'0',
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Health_Info1',
					   'tabName'=>"Health Info",
					   'nType'=>'0',
					   'nOrder'=>43,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Staff_Kin[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Personal",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Contact1',
					  'tabName'=>"Contact",
					  'nType'=>'0',
					  'nOrder'=>11,
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
					  'tabName'=>"Next of Kin",
					  'nType'=>'0',
					  'nOrder'=>19,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "StaffNo";
$arrAddTabs[] = array('tabId'=>'Job_Info1',
					  'tabName'=>"Job Info",
					  'nType'=>'0',
					  'nOrder'=>26,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Account_Info1',
					  'tabName'=>"Account Info",
					  'nType'=>'0',
					  'nOrder'=>36,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Health_Info1',
					  'tabName'=>"Health Info",
					  'nType'=>'0',
					  'nOrder'=>43,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataReport_Staff_Kin[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>11,
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
					   'tabName'=>"Next of Kin",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "StaffNo";
$arrViewTabs[] = array('tabId'=>'Job_Info1',
					   'tabName'=>"Job Info",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Account_Info1',
					   'tabName'=>"Account Info",
					   'nType'=>'0',
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Health_Info1',
					   'tabName'=>"Health Info",
					   'nType'=>'0',
					   'nOrder'=>43,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Staff_Kin[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Staff_Kin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Staff_Kin[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Staff_Kin = array();
$tableKeysReport_Staff_Kin[] = "ID";
$tdataReport_Staff_Kin[".Keys"] = $tableKeysReport_Staff_Kin;

$tdataReport_Staff_Kin[".listFields"] = array();
$tdataReport_Staff_Kin[".listFields"][] = "Name";
$tdataReport_Staff_Kin[".listFields"][] = "department";
$tdataReport_Staff_Kin[".listFields"][] = "f1_name";
$tdataReport_Staff_Kin[".listFields"][] = "f1_relation";
$tdataReport_Staff_Kin[".listFields"][] = "f1_tel";
$tdataReport_Staff_Kin[".listFields"][] = "f2_name";
$tdataReport_Staff_Kin[".listFields"][] = "f2_relation";
$tdataReport_Staff_Kin[".listFields"][] = "f2_tel";

$tdataReport_Staff_Kin[".viewFields"] = array();

$tdataReport_Staff_Kin[".addFields"] = array();

$tdataReport_Staff_Kin[".inlineAddFields"] = array();

$tdataReport_Staff_Kin[".editFields"] = array();

$tdataReport_Staff_Kin[".inlineEditFields"] = array();
$tdataReport_Staff_Kin[".inlineEditFields"][] = "f1_name";
$tdataReport_Staff_Kin[".inlineEditFields"][] = "f1_relation";
$tdataReport_Staff_Kin[".inlineEditFields"][] = "f1_tel";
$tdataReport_Staff_Kin[".inlineEditFields"][] = "f2_name";
$tdataReport_Staff_Kin[".inlineEditFields"][] = "f2_relation";
$tdataReport_Staff_Kin[".inlineEditFields"][] = "f2_tel";

$tdataReport_Staff_Kin[".exportFields"] = array();
$tdataReport_Staff_Kin[".exportFields"][] = "Name";
$tdataReport_Staff_Kin[".exportFields"][] = "StaffNo";
$tdataReport_Staff_Kin[".exportFields"][] = "department";
$tdataReport_Staff_Kin[".exportFields"][] = "f1_name";
$tdataReport_Staff_Kin[".exportFields"][] = "f1_relation";
$tdataReport_Staff_Kin[".exportFields"][] = "f1_tel";
$tdataReport_Staff_Kin[".exportFields"][] = "f2_name";
$tdataReport_Staff_Kin[".exportFields"][] = "f2_relation";
$tdataReport_Staff_Kin[".exportFields"][] = "f2_tel";

$tdataReport_Staff_Kin[".printFields"] = array();

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
	
		
		
	$tdataReport_Staff_Kin["ID"] = $fdata;
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:250px;";
	$edata["controlWidth"] = 250;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Staff_Kin["Name"] = $fdata;
//	StaffNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StaffNo";
	$fdata["GoodName"] = "StaffNo";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Staff No"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
		
		
	$tdataReport_Staff_Kin["StaffNo"] = $fdata;
//	f1_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "f1_name";
	$fdata["GoodName"] = "f1_name";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "F1 Name"; 
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
			
		$edata["inputStyle"] = " width:80px;";
	$edata["controlWidth"] = 80;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Staff_Kin["f1_name"] = $fdata;
//	f1_relation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "f1_relation";
	$fdata["GoodName"] = "f1_relation";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Hubungan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
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
				if(strpos(GetUserPermissions("Report_Staff_Kin"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class='9'";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Staff_Kin["f1_relation"] = $fdata;
//	f1_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "f1_tel";
	$fdata["GoodName"] = "f1_tel";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "F1 Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
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
			
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Staff_Kin["f1_tel"] = $fdata;
//	f2_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "f2_name";
	$fdata["GoodName"] = "f2_name";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "F2 Name"; 
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
			
		$edata["inputStyle"] = " width:80px;";
	$edata["controlWidth"] = 80;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Staff_Kin["f2_name"] = $fdata;
//	f2_relation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "f2_relation";
	$fdata["GoodName"] = "f2_relation";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "F2 Relation"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
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
				if(strpos(GetUserPermissions("Report_Staff_Kin"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class='9'";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Staff_Kin["f2_relation"] = $fdata;
//	f2_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "f2_tel";
	$fdata["GoodName"] = "f2_tel";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "F2 Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
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
			
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Staff_Kin["f2_tel"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Jabatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "department"; 
		$fdata["FullName"] = "department";
	
		
		
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
	
		
		
	$tdataReport_Staff_Kin["department"] = $fdata;

	
$tables_data["Report_Staff_Kin"]=&$tdataReport_Staff_Kin;
$field_labels["Report_Staff_Kin"] = &$fieldLabelsReport_Staff_Kin;
$fieldToolTips["Report_Staff_Kin"] = &$fieldToolTipsReport_Staff_Kin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Staff_Kin"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Staff_Kin"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Staff_Kin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Name,  StaffNo,  f1_name,  f1_relation,  f1_tel,  f2_name,  f2_relation,  f2_tel,  department";
$proto0["m_strFrom"] = "FROM staff_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ID DESC";
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
	"m_strName" => "f1_name",
	"m_strTable" => "staff_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_relation",
	"m_strTable" => "staff_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_tel",
	"m_strTable" => "staff_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_name",
	"m_strTable" => "staff_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_relation",
	"m_strTable" => "staff_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_tel",
	"m_strTable" => "staff_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "staff_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "staff_info";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "ID";
$proto26["m_columns"][] = "Name";
$proto26["m_columns"][] = "StaffNo";
$proto26["m_columns"][] = "IC_No";
$proto26["m_columns"][] = "Email";
$proto26["m_columns"][] = "Gender";
$proto26["m_columns"][] = "Race";
$proto26["m_columns"][] = "DOB";
$proto26["m_columns"][] = "Address";
$proto26["m_columns"][] = "City";
$proto26["m_columns"][] = "State";
$proto26["m_columns"][] = "Nationality";
$proto26["m_columns"][] = "Home_Tel";
$proto26["m_columns"][] = "Mobile_Tel";
$proto26["m_columns"][] = "Disability";
$proto26["m_columns"][] = "Medical_condition";
$proto26["m_columns"][] = "Join_Date";
$proto26["m_columns"][] = "End_Date";
$proto26["m_columns"][] = "Gerak_Date";
$proto26["m_columns"][] = "Job_Type";
$proto26["m_columns"][] = "Employee_Type";
$proto26["m_columns"][] = "Job_Title";
$proto26["m_columns"][] = "Job_Sesi";
$proto26["m_columns"][] = "Grade";
$proto26["m_columns"][] = "Elaun";
$proto26["m_columns"][] = "department";
$proto26["m_columns"][] = "passport";
$proto26["m_columns"][] = "married";
$proto26["m_columns"][] = "blood";
$proto26["m_columns"][] = "photo";
$proto26["m_columns"][] = "f1_name";
$proto26["m_columns"][] = "f1_relation";
$proto26["m_columns"][] = "f1_tel";
$proto26["m_columns"][] = "f2_name";
$proto26["m_columns"][] = "f2_relation";
$proto26["m_columns"][] = "f2_tel";
$proto26["m_columns"][] = "bank1";
$proto26["m_columns"][] = "bank2";
$proto26["m_columns"][] = "epf";
$proto26["m_columns"][] = "socso";
$proto26["m_columns"][] = "lhdn";
$proto26["m_columns"][] = "confirmation_date";
$proto26["m_columns"][] = "kelulusan";
$proto26["m_columns"][] = "course_opsyen";
$proto26["m_columns"][] = "course_main";
$proto26["m_columns"][] = "sstatus";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "staff_info"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 0;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Staff_Kin = createSqlQuery_Report_Staff_Kin();
										$tdataReport_Staff_Kin[".sqlquery"] = $queryData_Report_Staff_Kin;

$tableEvents["Report_Staff_Kin"] = new eventsBase;
$tdataReport_Staff_Kin[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_Staff_Kin");

?>