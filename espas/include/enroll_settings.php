<?php
require_once(getabspath("classes/cipherer.php"));
$tdataenroll = array();
	$tdataenroll[".NumberOfChars"] = 80; 
	$tdataenroll[".ShortName"] = "enroll";
	$tdataenroll[".OwnerID"] = "";
	$tdataenroll[".OriginalTable"] = "enroll";

//	field labels
$fieldLabelsenroll = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsenroll["Malay"] = array();
	$fieldToolTipsenroll["Malay"] = array();
	$fieldLabelsenroll["Malay"]["enrolID"] = "Enrol ID";
	$fieldToolTipsenroll["Malay"]["enrolID"] = "";
	$fieldLabelsenroll["Malay"]["Name"] = "Nama";
	$fieldToolTipsenroll["Malay"]["Name"] = "";
	$fieldLabelsenroll["Malay"]["ICNO"] = "IC/Mykad";
	$fieldToolTipsenroll["Malay"]["ICNO"] = "";
	$fieldLabelsenroll["Malay"]["DOB"] = "Tarikh Lahir";
	$fieldToolTipsenroll["Malay"]["DOB"] = "";
	$fieldLabelsenroll["Malay"]["Email"] = "Email";
	$fieldToolTipsenroll["Malay"]["Email"] = "";
	$fieldLabelsenroll["Malay"]["Date_Apply"] = "Tarikh Mohon";
	$fieldToolTipsenroll["Malay"]["Date_Apply"] = "";
	$fieldLabelsenroll["Malay"]["Gender"] = "Jantina";
	$fieldToolTipsenroll["Malay"]["Gender"] = "";
	$fieldLabelsenroll["Malay"]["Address1"] = "Alamat";
	$fieldToolTipsenroll["Malay"]["Address1"] = "";
	$fieldLabelsenroll["Malay"]["HomeTelephone"] = "Tel Rumah";
	$fieldToolTipsenroll["Malay"]["HomeTelephone"] = "";
	$fieldLabelsenroll["Malay"]["MobileTelephone"] = "Tel HP";
	$fieldToolTipsenroll["Malay"]["MobileTelephone"] = "";
	$fieldLabelsenroll["Malay"]["Status"] = "Status";
	$fieldToolTipsenroll["Malay"]["Status"] = "";
	$fieldLabelsenroll["Malay"]["Disability"] = "Kecacatan";
	$fieldToolTipsenroll["Malay"]["Disability"] = "";
	$fieldLabelsenroll["Malay"]["MedicalCondition"] = "Penyakit";
	$fieldToolTipsenroll["Malay"]["MedicalCondition"] = "";
	$fieldLabelsenroll["Malay"]["f1_name"] = "Nama Waris 1";
	$fieldToolTipsenroll["Malay"]["f1_name"] = "";
	$fieldLabelsenroll["Malay"]["f1_tel"] = "Tel";
	$fieldToolTipsenroll["Malay"]["f1_tel"] = "";
	$fieldLabelsenroll["Malay"]["f1_relation"] = "Hubungan";
	$fieldToolTipsenroll["Malay"]["f1_relation"] = "";
	$fieldLabelsenroll["Malay"]["f2_name"] = "Nama Waris 2";
	$fieldToolTipsenroll["Malay"]["f2_name"] = "";
	$fieldLabelsenroll["Malay"]["f2_tel"] = "Tel";
	$fieldToolTipsenroll["Malay"]["f2_tel"] = "";
	$fieldLabelsenroll["Malay"]["f2_relation"] = "Hubungan";
	$fieldToolTipsenroll["Malay"]["f2_relation"] = "";
	$fieldLabelsenroll["Malay"]["blood"] = "Jenis Darah";
	$fieldToolTipsenroll["Malay"]["blood"] = "";
	$fieldLabelsenroll["Malay"]["at_photo"] = "Gambar Photo";
	$fieldToolTipsenroll["Malay"]["at_photo"] = "";
	if (count($fieldToolTipsenroll["Malay"]))
		$tdataenroll[".isUseToolTips"] = true;
}
	
	
	$tdataenroll[".NCSearch"] = true;



$tdataenroll[".shortTableName"] = "enroll";
$tdataenroll[".nSecOptions"] = 0;
$tdataenroll[".recsPerRowList"] = 1;
$tdataenroll[".mainTableOwnerID"] = "";
$tdataenroll[".moveNext"] = 1;
$tdataenroll[".nType"] = 0;

$tdataenroll[".strOriginalTableName"] = "enroll";




$tdataenroll[".showAddInPopup"] = false;

$tdataenroll[".showEditInPopup"] = false;

$tdataenroll[".showViewInPopup"] = false;

$tdataenroll[".fieldsForRegister"] = array();
	
$tdataenroll[".listAjax"] = false;

	$tdataenroll[".audit"] = false;

	$tdataenroll[".locking"] = false;

$tdataenroll[".listIcons"] = true;
$tdataenroll[".edit"] = true;
$tdataenroll[".view"] = true;



$tdataenroll[".delete"] = true;

$tdataenroll[".showSimpleSearchOptions"] = false;

$tdataenroll[".showSearchPanel"] = true;

if (isMobile())
	$tdataenroll[".isUseAjaxSuggest"] = false;
else 
	$tdataenroll[".isUseAjaxSuggest"] = true;

$tdataenroll[".rowHighlite"] = true;

// button handlers file names

$tdataenroll[".addPageEvents"] = false;

// use timepicker for search panel
$tdataenroll[".isUseTimeForSearch"] = false;




$tdataenroll[".allSearchFields"] = array();

$tdataenroll[".allSearchFields"][] = "Name";
$tdataenroll[".allSearchFields"][] = "ICNO";
$tdataenroll[".allSearchFields"][] = "Date_Apply";
$tdataenroll[".allSearchFields"][] = "Gender";
$tdataenroll[".allSearchFields"][] = "Address1";
$tdataenroll[".allSearchFields"][] = "HomeTelephone";
$tdataenroll[".allSearchFields"][] = "MobileTelephone";
$tdataenroll[".allSearchFields"][] = "Status";
$tdataenroll[".allSearchFields"][] = "Disability";

$tdataenroll[".googleLikeFields"][] = "enrolID";
$tdataenroll[".googleLikeFields"][] = "Name";
$tdataenroll[".googleLikeFields"][] = "ICNO";
$tdataenroll[".googleLikeFields"][] = "DOB";
$tdataenroll[".googleLikeFields"][] = "Email";
$tdataenroll[".googleLikeFields"][] = "Date_Apply";
$tdataenroll[".googleLikeFields"][] = "Gender";
$tdataenroll[".googleLikeFields"][] = "Address1";
$tdataenroll[".googleLikeFields"][] = "HomeTelephone";
$tdataenroll[".googleLikeFields"][] = "MobileTelephone";
$tdataenroll[".googleLikeFields"][] = "Status";
$tdataenroll[".googleLikeFields"][] = "Disability";
$tdataenroll[".googleLikeFields"][] = "MedicalCondition";
$tdataenroll[".googleLikeFields"][] = "f1_name";
$tdataenroll[".googleLikeFields"][] = "f1_tel";
$tdataenroll[".googleLikeFields"][] = "f1_relation";
$tdataenroll[".googleLikeFields"][] = "f2_name";
$tdataenroll[".googleLikeFields"][] = "f2_tel";
$tdataenroll[".googleLikeFields"][] = "f2_relation";
$tdataenroll[".googleLikeFields"][] = "blood";
$tdataenroll[".googleLikeFields"][] = "at_photo";


$tdataenroll[".advSearchFields"][] = "Name";
$tdataenroll[".advSearchFields"][] = "ICNO";
$tdataenroll[".advSearchFields"][] = "Date_Apply";
$tdataenroll[".advSearchFields"][] = "Gender";
$tdataenroll[".advSearchFields"][] = "Address1";
$tdataenroll[".advSearchFields"][] = "HomeTelephone";
$tdataenroll[".advSearchFields"][] = "MobileTelephone";
$tdataenroll[".advSearchFields"][] = "Status";
$tdataenroll[".advSearchFields"][] = "Disability";

$tdataenroll[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataenroll[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataenroll[".strOrderBy"] = $tstrOrderBy;

$tdataenroll[".orderindexes"] = array();

$tdataenroll[".sqlHead"] = "SELECT enrolID,  Name,  ICNO,  DOB,  Email,  Date_Apply,  Gender,  Address1,  HomeTelephone,  MobileTelephone,  Status,  Disability,  MedicalCondition,  f1_name,  f1_tel,  f1_relation,  f2_name,  f2_tel,  f2_relation,  blood,  at_photo";
$tdataenroll[".sqlFrom"] = "FROM enroll";
$tdataenroll[".sqlWhereExpr"] = "";
$tdataenroll[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "Disability";
	$tabFields[] = "MedicalCondition";
	$tabFields[] = "blood";
$arrEditTabs[] = array('tabId'=>'Maklumat_Kesihatan1',
					   'tabName'=>"Maklumat Kesihatan",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_tel";
	$tabFields[] = "f2_relation";
$arrEditTabs[] = array('tabId'=>'Maklumat_Waris1',
					   'tabName'=>"Maklumat Waris",
					   'nType'=>'1',
					   'nOrder'=>16,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataenroll[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "Disability";
	$tabFields[] = "MedicalCondition";
	$tabFields[] = "blood";
$arrAddTabs[] = array('tabId'=>'Maklumat_Kesihatan1',
					  'tabName'=>"Maklumat Kesihatan",
					  'nType'=>'1',
					  'nOrder'=>12,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_tel";
	$tabFields[] = "f2_relation";
$arrAddTabs[] = array('tabId'=>'Maklumat_Waris1',
					  'tabName'=>"Maklumat Waris",
					  'nType'=>'1',
					  'nOrder'=>16,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdataenroll[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "Disability";
	$tabFields[] = "MedicalCondition";
	$tabFields[] = "blood";
$arrViewTabs[] = array('tabId'=>'Maklumat_Kesihatan1',
					   'tabName'=>"Maklumat Kesihatan",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_tel";
	$tabFields[] = "f2_relation";
$arrViewTabs[] = array('tabId'=>'Maklumat_Waris1',
					   'tabName'=>"Maklumat Waris",
					   'nType'=>'1',
					   'nOrder'=>16,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataenroll[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataenroll[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataenroll[".arrGroupsPerPage"] = $arrGPP;

$tableKeysenroll = array();
$tableKeysenroll[] = "enrolID";
$tdataenroll[".Keys"] = $tableKeysenroll;

$tdataenroll[".listFields"] = array();
$tdataenroll[".listFields"][] = "Name";
$tdataenroll[".listFields"][] = "ICNO";
$tdataenroll[".listFields"][] = "Date_Apply";
$tdataenroll[".listFields"][] = "Gender";
$tdataenroll[".listFields"][] = "Address1";
$tdataenroll[".listFields"][] = "HomeTelephone";
$tdataenroll[".listFields"][] = "MobileTelephone";
$tdataenroll[".listFields"][] = "Status";

$tdataenroll[".viewFields"] = array();
$tdataenroll[".viewFields"][] = "Name";
$tdataenroll[".viewFields"][] = "ICNO";
$tdataenroll[".viewFields"][] = "DOB";
$tdataenroll[".viewFields"][] = "Email";
$tdataenroll[".viewFields"][] = "Date_Apply";
$tdataenroll[".viewFields"][] = "Gender";
$tdataenroll[".viewFields"][] = "Address1";
$tdataenroll[".viewFields"][] = "HomeTelephone";
$tdataenroll[".viewFields"][] = "MobileTelephone";
$tdataenroll[".viewFields"][] = "Status";
$tdataenroll[".viewFields"][] = "at_photo";
$tdataenroll[".viewFields"][] = "Disability";
$tdataenroll[".viewFields"][] = "MedicalCondition";
$tdataenroll[".viewFields"][] = "blood";
$tdataenroll[".viewFields"][] = "f1_name";
$tdataenroll[".viewFields"][] = "f1_tel";
$tdataenroll[".viewFields"][] = "f1_relation";
$tdataenroll[".viewFields"][] = "f2_name";
$tdataenroll[".viewFields"][] = "f2_tel";
$tdataenroll[".viewFields"][] = "f2_relation";

$tdataenroll[".addFields"] = array();
$tdataenroll[".addFields"][] = "Name";
$tdataenroll[".addFields"][] = "ICNO";
$tdataenroll[".addFields"][] = "DOB";
$tdataenroll[".addFields"][] = "Email";
$tdataenroll[".addFields"][] = "Date_Apply";
$tdataenroll[".addFields"][] = "Gender";
$tdataenroll[".addFields"][] = "Address1";
$tdataenroll[".addFields"][] = "HomeTelephone";
$tdataenroll[".addFields"][] = "MobileTelephone";
$tdataenroll[".addFields"][] = "Status";
$tdataenroll[".addFields"][] = "at_photo";
$tdataenroll[".addFields"][] = "Disability";
$tdataenroll[".addFields"][] = "MedicalCondition";
$tdataenroll[".addFields"][] = "blood";
$tdataenroll[".addFields"][] = "f1_name";
$tdataenroll[".addFields"][] = "f1_tel";
$tdataenroll[".addFields"][] = "f1_relation";
$tdataenroll[".addFields"][] = "f2_name";
$tdataenroll[".addFields"][] = "f2_tel";
$tdataenroll[".addFields"][] = "f2_relation";

$tdataenroll[".inlineAddFields"] = array();

$tdataenroll[".editFields"] = array();
$tdataenroll[".editFields"][] = "Name";
$tdataenroll[".editFields"][] = "ICNO";
$tdataenroll[".editFields"][] = "DOB";
$tdataenroll[".editFields"][] = "Email";
$tdataenroll[".editFields"][] = "Date_Apply";
$tdataenroll[".editFields"][] = "Gender";
$tdataenroll[".editFields"][] = "Address1";
$tdataenroll[".editFields"][] = "HomeTelephone";
$tdataenroll[".editFields"][] = "MobileTelephone";
$tdataenroll[".editFields"][] = "Status";
$tdataenroll[".editFields"][] = "at_photo";
$tdataenroll[".editFields"][] = "Disability";
$tdataenroll[".editFields"][] = "MedicalCondition";
$tdataenroll[".editFields"][] = "blood";
$tdataenroll[".editFields"][] = "f1_name";
$tdataenroll[".editFields"][] = "f1_tel";
$tdataenroll[".editFields"][] = "f1_relation";
$tdataenroll[".editFields"][] = "f2_name";
$tdataenroll[".editFields"][] = "f2_tel";
$tdataenroll[".editFields"][] = "f2_relation";

$tdataenroll[".inlineEditFields"] = array();

$tdataenroll[".exportFields"] = array();

$tdataenroll[".printFields"] = array();

//	enrolID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "enrolID";
	$fdata["GoodName"] = "enrolID";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Enrol ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "enrolID"; 
		$fdata["FullName"] = "enrolID";
	
		
		
				
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
	
		
		
	$tdataenroll["enrolID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
		
		
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
			$edata["EditParams"].= " maxlength=150";
	
		$edata["inputStyle"] = " width:287px;";
	$edata["controlWidth"] = 287;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["Name"] = $fdata;
//	ICNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ICNO";
	$fdata["GoodName"] = "ICNO";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "IC/Mykad"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ICNO"; 
		$fdata["FullName"] = "ICNO";
	
		
		
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
	
		$edata["inputStyle"] = " width:222px;";
	$edata["controlWidth"] = 222;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["ICNO"] = $fdata;
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tarikh Lahir"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "DOB"; 
		$fdata["FullName"] = "DOB";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 20; 
	$edata["LastYearFactor"] = 0; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["DOB"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "Email"; 
		$fdata["FullName"] = "Email";
	
		
		
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
			$edata["EditParams"].= " maxlength=222";
	
		$edata["inputStyle"] = " width:271px;";
	$edata["controlWidth"] = 271;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["Email"] = $fdata;
//	Date_Apply
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Date_Apply";
	$fdata["GoodName"] = "Date_Apply";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tarikh Mohon"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Date_Apply"; 
		$fdata["FullName"] = "Date_Apply";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["Date_Apply"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Jantina"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Gender"; 
		$fdata["FullName"] = "Gender";
	
		
		
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
	
		
		
	$tdataenroll["Gender"] = $fdata;
//	Address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Address1";
	$fdata["GoodName"] = "Address1";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Alamat"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Address1"; 
		$fdata["FullName"] = "Address1";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 48;
			$edata["nCols"] = 339;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["Address1"] = $fdata;
//	HomeTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "HomeTelephone";
	$fdata["GoodName"] = "HomeTelephone";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tel Rumah"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "HomeTelephone"; 
		$fdata["FullName"] = "HomeTelephone";
	
		
		
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
	
		
		
	$tdataenroll["HomeTelephone"] = $fdata;
//	MobileTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "MobileTelephone";
	$fdata["GoodName"] = "MobileTelephone";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tel HP"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "MobileTelephone"; 
		$fdata["FullName"] = "MobileTelephone";
	
		
		
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
	
		
		
	$tdataenroll["MobileTelephone"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Belum Diproses";
	$edata["LookupValues"][] = "Disenarai Pendek";
	$edata["LookupValues"][] = "Layak Ditemuduga";
	$edata["LookupValues"][] = "Diterima";
	$edata["LookupValues"][] = "Ditolak";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["Status"] = $fdata;
//	Disability
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Disability";
	$fdata["GoodName"] = "Disability";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Kecacatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Disability"; 
		$fdata["FullName"] = "Disability";
	
		
		
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
	
		
		
	$tdataenroll["Disability"] = $fdata;
//	MedicalCondition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MedicalCondition";
	$fdata["GoodName"] = "MedicalCondition";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Penyakit"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "MedicalCondition"; 
		$fdata["FullName"] = "MedicalCondition";
	
		
		
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
	
		
		
	$tdataenroll["MedicalCondition"] = $fdata;
//	f1_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "f1_name";
	$fdata["GoodName"] = "f1_name";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Nama Waris 1"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["f1_name"] = $fdata;
//	f1_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "f1_tel";
	$fdata["GoodName"] = "f1_tel";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["f1_tel"] = $fdata;
//	f1_relation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "f1_relation";
	$fdata["GoodName"] = "f1_relation";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Hubungan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
	
		
		
	$tdataenroll["f1_relation"] = $fdata;
//	f2_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "f2_name";
	$fdata["GoodName"] = "f2_name";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Nama Waris 2"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["f2_name"] = $fdata;
//	f2_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "f2_tel";
	$fdata["GoodName"] = "f2_tel";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["f2_tel"] = $fdata;
//	f2_relation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "f2_relation";
	$fdata["GoodName"] = "f2_relation";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Hubungan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
	
		
		
	$tdataenroll["f2_relation"] = $fdata;
//	blood
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "blood";
	$fdata["GoodName"] = "blood";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Jenis Darah"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
	
		
		
	$tdataenroll["blood"] = $fdata;
//	at_photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "at_photo";
	$fdata["GoodName"] = "at_photo";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Gambar Photo"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "at_photo"; 
		$fdata["FullName"] = "at_photo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
					$vdata["ShowIcon"] = true; 
				
		
		
		
		
		
		
		
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
	
		$edata["maxFileSize"] = 3000;
	
		
		
		
		
		
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
	
		
		
	$tdataenroll["at_photo"] = $fdata;

	
$tables_data["enroll"]=&$tdataenroll;
$field_labels["enroll"] = &$fieldLabelsenroll;
$fieldToolTips["enroll"] = &$fieldToolTipsenroll;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["enroll"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["enroll"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_enroll()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "enrolID,  Name,  ICNO,  DOB,  Email,  Date_Apply,  Gender,  Address1,  HomeTelephone,  MobileTelephone,  Status,  Disability,  MedicalCondition,  f1_name,  f1_tel,  f1_relation,  f2_name,  f2_tel,  f2_relation,  blood,  at_photo";
$proto0["m_strFrom"] = "FROM enroll";
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
	"m_strName" => "enrolID",
	"m_strTable" => "enroll"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "enroll"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ICNO",
	"m_strTable" => "enroll"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "enroll"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "enroll"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Date_Apply",
	"m_strTable" => "enroll"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "enroll"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Address1",
	"m_strTable" => "enroll"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "HomeTelephone",
	"m_strTable" => "enroll"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "MobileTelephone",
	"m_strTable" => "enroll"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "enroll"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability",
	"m_strTable" => "enroll"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "MedicalCondition",
	"m_strTable" => "enroll"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_name",
	"m_strTable" => "enroll"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_tel",
	"m_strTable" => "enroll"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_relation",
	"m_strTable" => "enroll"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_name",
	"m_strTable" => "enroll"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_tel",
	"m_strTable" => "enroll"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_relation",
	"m_strTable" => "enroll"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "blood",
	"m_strTable" => "enroll"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "at_photo",
	"m_strTable" => "enroll"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "enroll";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "enrolID";
$proto48["m_columns"][] = "Name";
$proto48["m_columns"][] = "ICNO";
$proto48["m_columns"][] = "DOB";
$proto48["m_columns"][] = "Email";
$proto48["m_columns"][] = "Date_Apply";
$proto48["m_columns"][] = "Gender";
$proto48["m_columns"][] = "Address1";
$proto48["m_columns"][] = "HomeTelephone";
$proto48["m_columns"][] = "MobileTelephone";
$proto48["m_columns"][] = "Status";
$proto48["m_columns"][] = "Disability";
$proto48["m_columns"][] = "MedicalCondition";
$proto48["m_columns"][] = "race";
$proto48["m_columns"][] = "f1_name";
$proto48["m_columns"][] = "f1_tel";
$proto48["m_columns"][] = "f1_relation";
$proto48["m_columns"][] = "f2_name";
$proto48["m_columns"][] = "f2_tel";
$proto48["m_columns"][] = "f2_relation";
$proto48["m_columns"][] = "blood";
$proto48["m_columns"][] = "at_photo";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_alias"] = "";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = "0";
$proto49["m_inBrackets"] = "0";
$proto49["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_enroll = createSqlQuery_enroll();
																					$tdataenroll[".sqlquery"] = $queryData_enroll;

$tableEvents["enroll"] = new eventsBase;
$tdataenroll[".hasEvents"] = false;

$cipherer = new RunnerCipherer("enroll");

?>