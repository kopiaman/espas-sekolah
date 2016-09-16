<?php
require_once(getabspath("classes/cipherer.php"));
$tdataenroll_apply = array();
	$tdataenroll_apply[".NumberOfChars"] = 80; 
	$tdataenroll_apply[".ShortName"] = "enroll_apply";
	$tdataenroll_apply[".OwnerID"] = "";
	$tdataenroll_apply[".OriginalTable"] = "enroll";

//	field labels
$fieldLabelsenroll_apply = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsenroll_apply["Malay"] = array();
	$fieldToolTipsenroll_apply["Malay"] = array();
	$fieldLabelsenroll_apply["Malay"]["enrolID"] = "Enrol ID";
	$fieldToolTipsenroll_apply["Malay"]["enrolID"] = "";
	$fieldLabelsenroll_apply["Malay"]["Name"] = "Nama";
	$fieldToolTipsenroll_apply["Malay"]["Name"] = "";
	$fieldLabelsenroll_apply["Malay"]["ICNO"] = "IC/Mykad";
	$fieldToolTipsenroll_apply["Malay"]["ICNO"] = "";
	$fieldLabelsenroll_apply["Malay"]["DOB"] = "Tarikh Lahir";
	$fieldToolTipsenroll_apply["Malay"]["DOB"] = "";
	$fieldLabelsenroll_apply["Malay"]["Email"] = "Email";
	$fieldToolTipsenroll_apply["Malay"]["Email"] = "";
	$fieldLabelsenroll_apply["Malay"]["Date_Apply"] = "Tarikh Mohon";
	$fieldToolTipsenroll_apply["Malay"]["Date_Apply"] = "";
	$fieldLabelsenroll_apply["Malay"]["Gender"] = "Jantina";
	$fieldToolTipsenroll_apply["Malay"]["Gender"] = "";
	$fieldLabelsenroll_apply["Malay"]["Address1"] = "Alamat";
	$fieldToolTipsenroll_apply["Malay"]["Address1"] = "";
	$fieldLabelsenroll_apply["Malay"]["HomeTelephone"] = "Tel Rumah";
	$fieldToolTipsenroll_apply["Malay"]["HomeTelephone"] = "";
	$fieldLabelsenroll_apply["Malay"]["MobileTelephone"] = "Tel HP";
	$fieldToolTipsenroll_apply["Malay"]["MobileTelephone"] = "";
	$fieldLabelsenroll_apply["Malay"]["Status"] = "Status";
	$fieldToolTipsenroll_apply["Malay"]["Status"] = "";
	$fieldLabelsenroll_apply["Malay"]["Disability"] = "Kecacatan";
	$fieldToolTipsenroll_apply["Malay"]["Disability"] = "";
	$fieldLabelsenroll_apply["Malay"]["MedicalCondition"] = "Penyakit";
	$fieldToolTipsenroll_apply["Malay"]["MedicalCondition"] = "";
	$fieldLabelsenroll_apply["Malay"]["f1_name"] = "Nama Waris 1";
	$fieldToolTipsenroll_apply["Malay"]["f1_name"] = "";
	$fieldLabelsenroll_apply["Malay"]["f1_tel"] = "Tel";
	$fieldToolTipsenroll_apply["Malay"]["f1_tel"] = "";
	$fieldLabelsenroll_apply["Malay"]["f1_relation"] = "Hubungan";
	$fieldToolTipsenroll_apply["Malay"]["f1_relation"] = "";
	$fieldLabelsenroll_apply["Malay"]["f2_name"] = "Nama Waris 2";
	$fieldToolTipsenroll_apply["Malay"]["f2_name"] = "";
	$fieldLabelsenroll_apply["Malay"]["f2_tel"] = "Tel";
	$fieldToolTipsenroll_apply["Malay"]["f2_tel"] = "";
	$fieldLabelsenroll_apply["Malay"]["f2_relation"] = "Hubungan";
	$fieldToolTipsenroll_apply["Malay"]["f2_relation"] = "";
	$fieldLabelsenroll_apply["Malay"]["blood"] = "Jenis Darah";
	$fieldToolTipsenroll_apply["Malay"]["blood"] = "";
	$fieldLabelsenroll_apply["Malay"]["at_photo"] = "Gambar Photo";
	$fieldToolTipsenroll_apply["Malay"]["at_photo"] = "";
	if (count($fieldToolTipsenroll_apply["Malay"]))
		$tdataenroll_apply[".isUseToolTips"] = true;
}
	
	
	$tdataenroll_apply[".NCSearch"] = true;



$tdataenroll_apply[".shortTableName"] = "enroll_apply";
$tdataenroll_apply[".nSecOptions"] = 0;
$tdataenroll_apply[".recsPerRowList"] = 1;
$tdataenroll_apply[".mainTableOwnerID"] = "";
$tdataenroll_apply[".moveNext"] = 1;
$tdataenroll_apply[".nType"] = 1;

$tdataenroll_apply[".strOriginalTableName"] = "enroll";




$tdataenroll_apply[".showAddInPopup"] = false;

$tdataenroll_apply[".showEditInPopup"] = false;

$tdataenroll_apply[".showViewInPopup"] = false;

$tdataenroll_apply[".fieldsForRegister"] = array();
	
$tdataenroll_apply[".listAjax"] = false;

	$tdataenroll_apply[".audit"] = false;

	$tdataenroll_apply[".locking"] = false;

$tdataenroll_apply[".listIcons"] = true;




$tdataenroll_apply[".showSimpleSearchOptions"] = false;

$tdataenroll_apply[".showSearchPanel"] = true;

if (isMobile())
	$tdataenroll_apply[".isUseAjaxSuggest"] = false;
else 
	$tdataenroll_apply[".isUseAjaxSuggest"] = true;

$tdataenroll_apply[".rowHighlite"] = true;

// button handlers file names

$tdataenroll_apply[".addPageEvents"] = false;

// use timepicker for search panel
$tdataenroll_apply[".isUseTimeForSearch"] = false;




$tdataenroll_apply[".allSearchFields"] = array();


$tdataenroll_apply[".googleLikeFields"][] = "enrolID";
$tdataenroll_apply[".googleLikeFields"][] = "Name";
$tdataenroll_apply[".googleLikeFields"][] = "ICNO";
$tdataenroll_apply[".googleLikeFields"][] = "DOB";
$tdataenroll_apply[".googleLikeFields"][] = "Email";
$tdataenroll_apply[".googleLikeFields"][] = "Date_Apply";
$tdataenroll_apply[".googleLikeFields"][] = "Gender";
$tdataenroll_apply[".googleLikeFields"][] = "Address1";
$tdataenroll_apply[".googleLikeFields"][] = "HomeTelephone";
$tdataenroll_apply[".googleLikeFields"][] = "MobileTelephone";
$tdataenroll_apply[".googleLikeFields"][] = "Status";
$tdataenroll_apply[".googleLikeFields"][] = "Disability";
$tdataenroll_apply[".googleLikeFields"][] = "MedicalCondition";
$tdataenroll_apply[".googleLikeFields"][] = "f1_name";
$tdataenroll_apply[".googleLikeFields"][] = "f1_tel";
$tdataenroll_apply[".googleLikeFields"][] = "f1_relation";
$tdataenroll_apply[".googleLikeFields"][] = "f2_name";
$tdataenroll_apply[".googleLikeFields"][] = "f2_tel";
$tdataenroll_apply[".googleLikeFields"][] = "f2_relation";
$tdataenroll_apply[".googleLikeFields"][] = "blood";
$tdataenroll_apply[".googleLikeFields"][] = "at_photo";


$tdataenroll_apply[".advSearchFields"][] = "Name";
$tdataenroll_apply[".advSearchFields"][] = "ICNO";
$tdataenroll_apply[".advSearchFields"][] = "Date_Apply";
$tdataenroll_apply[".advSearchFields"][] = "Gender";
$tdataenroll_apply[".advSearchFields"][] = "Address1";
$tdataenroll_apply[".advSearchFields"][] = "HomeTelephone";
$tdataenroll_apply[".advSearchFields"][] = "MobileTelephone";
$tdataenroll_apply[".advSearchFields"][] = "Status";
$tdataenroll_apply[".advSearchFields"][] = "Disability";

$tdataenroll_apply[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataenroll_apply[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataenroll_apply[".strOrderBy"] = $tstrOrderBy;

$tdataenroll_apply[".orderindexes"] = array();

$tdataenroll_apply[".sqlHead"] = "SELECT enrolID,  Name,  ICNO,  DOB,  Email,  Date_Apply,  Gender,  Address1,  HomeTelephone,  MobileTelephone,  Status,  Disability,  MedicalCondition,  f1_name,  f1_tel,  f1_relation,  f2_name,  f2_tel,  f2_relation,  blood,  at_photo";
$tdataenroll_apply[".sqlFrom"] = "FROM enroll";
$tdataenroll_apply[".sqlWhereExpr"] = "";
$tdataenroll_apply[".sqlTail"] = "";

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
$tdataenroll_apply[".arrEditTabs"] = $arrEditTabs;

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
$tdataenroll_apply[".arrAddTabs"] = $arrAddTabs;

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
$tdataenroll_apply[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataenroll_apply[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataenroll_apply[".arrGroupsPerPage"] = $arrGPP;

$tableKeysenroll_apply = array();
$tableKeysenroll_apply[] = "enrolID";
$tdataenroll_apply[".Keys"] = $tableKeysenroll_apply;

$tdataenroll_apply[".listFields"] = array();

$tdataenroll_apply[".viewFields"] = array();

$tdataenroll_apply[".addFields"] = array();
$tdataenroll_apply[".addFields"][] = "Name";
$tdataenroll_apply[".addFields"][] = "ICNO";
$tdataenroll_apply[".addFields"][] = "DOB";
$tdataenroll_apply[".addFields"][] = "Email";
$tdataenroll_apply[".addFields"][] = "Date_Apply";
$tdataenroll_apply[".addFields"][] = "Gender";
$tdataenroll_apply[".addFields"][] = "Address1";
$tdataenroll_apply[".addFields"][] = "HomeTelephone";
$tdataenroll_apply[".addFields"][] = "MobileTelephone";
$tdataenroll_apply[".addFields"][] = "Status";
$tdataenroll_apply[".addFields"][] = "at_photo";
$tdataenroll_apply[".addFields"][] = "Disability";
$tdataenroll_apply[".addFields"][] = "MedicalCondition";
$tdataenroll_apply[".addFields"][] = "blood";
$tdataenroll_apply[".addFields"][] = "f1_name";
$tdataenroll_apply[".addFields"][] = "f1_tel";
$tdataenroll_apply[".addFields"][] = "f1_relation";
$tdataenroll_apply[".addFields"][] = "f2_name";
$tdataenroll_apply[".addFields"][] = "f2_tel";
$tdataenroll_apply[".addFields"][] = "f2_relation";

$tdataenroll_apply[".inlineAddFields"] = array();

$tdataenroll_apply[".editFields"] = array();

$tdataenroll_apply[".inlineEditFields"] = array();

$tdataenroll_apply[".exportFields"] = array();

$tdataenroll_apply[".printFields"] = array();

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
	
		
		
	$tdataenroll_apply["enrolID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["Name"] = $fdata;
//	ICNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ICNO";
	$fdata["GoodName"] = "ICNO";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "IC/Mykad"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "ICNO"; 
		$fdata["FullName"] = "ICNO";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["ICNO"] = $fdata;
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
	
		
		
		
		
		
		
		
		$fdata["strField"] = "DOB"; 
		$fdata["FullName"] = "DOB";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["DOB"] = $fdata;
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
	
		
		
		
		
		
		
		
		$fdata["strField"] = "Email"; 
		$fdata["FullName"] = "Email";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["Email"] = $fdata;
//	Date_Apply
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Date_Apply";
	$fdata["GoodName"] = "Date_Apply";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tarikh Mohon"; 
	$fdata["FieldType"] = 7;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "Date_Apply"; 
		$fdata["FullName"] = "Date_Apply";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["Date_Apply"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Jantina"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "Gender"; 
		$fdata["FullName"] = "Gender";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["Gender"] = $fdata;
//	Address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Address1";
	$fdata["GoodName"] = "Address1";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Alamat"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "Address1"; 
		$fdata["FullName"] = "Address1";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["Address1"] = $fdata;
//	HomeTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "HomeTelephone";
	$fdata["GoodName"] = "HomeTelephone";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tel Rumah"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "HomeTelephone"; 
		$fdata["FullName"] = "HomeTelephone";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["HomeTelephone"] = $fdata;
//	MobileTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "MobileTelephone";
	$fdata["GoodName"] = "MobileTelephone";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tel HP"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "MobileTelephone"; 
		$fdata["FullName"] = "MobileTelephone";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["MobileTelephone"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "Status";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["Status"] = $fdata;
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
	
		
		
		
		
		
		
		
		$fdata["strField"] = "Disability"; 
		$fdata["FullName"] = "Disability";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["Disability"] = $fdata;
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
	
		
		
		
		
		
		
		
		$fdata["strField"] = "MedicalCondition"; 
		$fdata["FullName"] = "MedicalCondition";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["MedicalCondition"] = $fdata;
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
	
		
		
		
		
		
		
		
		$fdata["strField"] = "f1_name"; 
		$fdata["FullName"] = "f1_name";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["f1_name"] = $fdata;
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
	
		
		
		
		
		
		
		
		$fdata["strField"] = "f1_tel"; 
		$fdata["FullName"] = "f1_tel";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["f1_tel"] = $fdata;
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
	
		
		
	$tdataenroll_apply["f1_relation"] = $fdata;
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
	
		
		
		
		
		
		
		
		$fdata["strField"] = "f2_name"; 
		$fdata["FullName"] = "f2_name";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["f2_name"] = $fdata;
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
	
		
		
		
		
		
		
		
		$fdata["strField"] = "f2_tel"; 
		$fdata["FullName"] = "f2_tel";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["f2_tel"] = $fdata;
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
	
		
		
	$tdataenroll_apply["f2_relation"] = $fdata;
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
	
		
		
		
		
		
		
		
		$fdata["strField"] = "blood"; 
		$fdata["FullName"] = "blood";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["blood"] = $fdata;
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
	
		
		
		
		
		
		
		
		$fdata["strField"] = "at_photo"; 
		$fdata["FullName"] = "at_photo";
	
		
		
				
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
	
		
		
	$tdataenroll_apply["at_photo"] = $fdata;

	
$tables_data["enroll_apply"]=&$tdataenroll_apply;
$field_labels["enroll_apply"] = &$fieldLabelsenroll_apply;
$fieldToolTips["enroll_apply"] = &$fieldToolTipsenroll_apply;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["enroll_apply"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["enroll_apply"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_enroll_apply()
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
$queryData_enroll_apply = createSqlQuery_enroll_apply();
																					$tdataenroll_apply[".sqlquery"] = $queryData_enroll_apply;

include_once(getabspath("include/enroll_apply_events.php"));
$tableEvents["enroll_apply"] = new eventclass_enroll_apply;
$tdataenroll_apply[".hasEvents"] = true;

$cipherer = new RunnerCipherer("enroll_apply");

?>