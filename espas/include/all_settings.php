<?php
require_once(getabspath("classes/cipherer.php"));
$tdataall = array();
	$tdataall[".NumberOfChars"] = 80; 
	$tdataall[".ShortName"] = "all";
	$tdataall[".OwnerID"] = "";
	$tdataall[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsall = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsall["Malay"] = array();
	$fieldToolTipsall["Malay"] = array();
	$fieldLabelsall["Malay"]["kafal"] = "Kafal";
	$fieldToolTipsall["Malay"]["kafal"] = "";
	$fieldLabelsall["Malay"]["kafap"] = "Kafap";
	$fieldToolTipsall["Malay"]["kafap"] = "";
	$fieldLabelsall["Malay"]["sum_kafa"] = "Sum Kafa";
	$fieldToolTipsall["Malay"]["sum_kafa"] = "";
	$fieldLabelsall["Malay"]["rakyatl"] = "Rakyatl";
	$fieldToolTipsall["Malay"]["rakyatl"] = "";
	$fieldLabelsall["Malay"]["rakyatp"] = "Rakyatp";
	$fieldToolTipsall["Malay"]["rakyatp"] = "";
	$fieldLabelsall["Malay"]["sum_rakyat"] = "Sum Rakyat";
	$fieldToolTipsall["Malay"]["sum_rakyat"] = "";
	$fieldLabelsall["Malay"]["gantil"] = "Gantil";
	$fieldToolTipsall["Malay"]["gantil"] = "";
	$fieldLabelsall["Malay"]["gantip"] = "Gantip";
	$fieldToolTipsall["Malay"]["gantip"] = "";
	$fieldLabelsall["Malay"]["sum_ganti"] = "Sum Ganti";
	$fieldToolTipsall["Malay"]["sum_ganti"] = "";
	$fieldLabelsall["Malay"]["sum_pom"] = "Sum Pom";
	$fieldToolTipsall["Malay"]["sum_pom"] = "";
	$fieldLabelsall["Malay"]["sum_laki"] = "Sum Laki";
	$fieldToolTipsall["Malay"]["sum_laki"] = "";
	$fieldLabelsall["Malay"]["guru_all"] = "Guru All";
	$fieldToolTipsall["Malay"]["guru_all"] = "";
	if (count($fieldToolTipsall["Malay"]))
		$tdataall[".isUseToolTips"] = true;
}
	
	



$tdataall[".shortTableName"] = "all";
$tdataall[".nSecOptions"] = 0;
$tdataall[".recsPerRowList"] = 1;
$tdataall[".mainTableOwnerID"] = "";
$tdataall[".moveNext"] = 1;
$tdataall[".nType"] = 1;

$tdataall[".strOriginalTableName"] = "student_info";




$tdataall[".showAddInPopup"] = false;

$tdataall[".showEditInPopup"] = false;

$tdataall[".showViewInPopup"] = true;

$tdataall[".fieldsForRegister"] = array();
	
$tdataall[".listAjax"] = false;

	$tdataall[".audit"] = false;

	$tdataall[".locking"] = false;

$tdataall[".listIcons"] = true;




$tdataall[".showSimpleSearchOptions"] = false;

$tdataall[".showSearchPanel"] = true;

if (isMobile())
	$tdataall[".isUseAjaxSuggest"] = false;
else 
	$tdataall[".isUseAjaxSuggest"] = true;

$tdataall[".rowHighlite"] = true;

// button handlers file names

$tdataall[".addPageEvents"] = false;

// use timepicker for search panel
$tdataall[".isUseTimeForSearch"] = false;




$tdataall[".allSearchFields"] = array();

$tdataall[".allSearchFields"][] = "kafal";
$tdataall[".allSearchFields"][] = "kafap";
$tdataall[".allSearchFields"][] = "sum_kafa";
$tdataall[".allSearchFields"][] = "rakyatl";
$tdataall[".allSearchFields"][] = "rakyatp";
$tdataall[".allSearchFields"][] = "sum_rakyat";
$tdataall[".allSearchFields"][] = "gantil";
$tdataall[".allSearchFields"][] = "gantip";
$tdataall[".allSearchFields"][] = "sum_ganti";
$tdataall[".allSearchFields"][] = "sum_pom";
$tdataall[".allSearchFields"][] = "sum_laki";
$tdataall[".allSearchFields"][] = "guru_all";

$tdataall[".googleLikeFields"][] = "kafal";
$tdataall[".googleLikeFields"][] = "kafap";
$tdataall[".googleLikeFields"][] = "sum_kafa";
$tdataall[".googleLikeFields"][] = "rakyatl";
$tdataall[".googleLikeFields"][] = "rakyatp";
$tdataall[".googleLikeFields"][] = "sum_rakyat";
$tdataall[".googleLikeFields"][] = "gantil";
$tdataall[".googleLikeFields"][] = "gantip";
$tdataall[".googleLikeFields"][] = "sum_ganti";
$tdataall[".googleLikeFields"][] = "sum_pom";
$tdataall[".googleLikeFields"][] = "sum_laki";
$tdataall[".googleLikeFields"][] = "guru_all";


$tdataall[".advSearchFields"][] = "kafal";
$tdataall[".advSearchFields"][] = "kafap";
$tdataall[".advSearchFields"][] = "sum_kafa";
$tdataall[".advSearchFields"][] = "rakyatl";
$tdataall[".advSearchFields"][] = "rakyatp";
$tdataall[".advSearchFields"][] = "sum_rakyat";
$tdataall[".advSearchFields"][] = "gantil";
$tdataall[".advSearchFields"][] = "gantip";
$tdataall[".advSearchFields"][] = "sum_ganti";
$tdataall[".advSearchFields"][] = "sum_pom";
$tdataall[".advSearchFields"][] = "sum_laki";
$tdataall[".advSearchFields"][] = "guru_all";

$tdataall[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataall[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataall[".strOrderBy"] = $tstrOrderBy;

$tdataall[".orderindexes"] = array();

$tdataall[".sqlHead"] = "SELECT coalesce(sum(staff_info.Gender='L' && staff_info.Grade!='RAKYAT'  && staff_info.Grade!='GANTI' && staff_info.Job_Type='Guru'), 0) AS kafal,  coalesce(sum(staff_info.Gender='P' && staff_info.Grade!='RAKYAT' &&  staff_info.Grade!='GANTI' &&  staff_info.Job_Type='Guru'), 0) AS kafap,  coalesce(sum(staff_info.Grade!='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS sum_kafa,  coalesce(sum(staff_info.Gender='L' && staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS rakyatl,  coalesce(sum(staff_info.Gender='P' && staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS rakyatp,  coalesce(sum(staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS sum_rakyat,  coalesce(sum(staff_info.Gender='L' && staff_info.Grade='GANTI'), 0) AS gantil,  coalesce(sum(staff_info.Gender='P' && staff_info.Grade='GANTI'), 0) AS gantip,  coalesce(sum(staff_info.Grade='GANTI'), 0) AS sum_ganti,  coalesce(sum(staff_info.Gender='P'), 0) AS sum_pom,  coalesce(sum(staff_info.Gender='L'), 0) AS sum_laki,  coalesce(sum(staff_info.Job_Type='Guru' &&  staff_info.Grade!='GANTI'), 0) AS guru_all";
$tdataall[".sqlFrom"] = "FROM staff_info  RIGHT OUTER JOIN job ON job.job_grade = staff_info.Grade";
$tdataall[".sqlWhereExpr"] = "(job.job_category ='Guru') AND (staff_info.sstatus ='Aktif')";
$tdataall[".sqlTail"] = "";

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
$tdataall[".arrEditTabs"] = $arrEditTabs;

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
$tdataall[".arrAddTabs"] = $arrAddTabs;

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
$tdataall[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataall[".arrGroupsPerPage"] = $arrGPP;

$tableKeysall = array();
$tdataall[".Keys"] = $tableKeysall;

$tdataall[".listFields"] = array();
$tdataall[".listFields"][] = "kafal";
$tdataall[".listFields"][] = "kafap";
$tdataall[".listFields"][] = "sum_kafa";
$tdataall[".listFields"][] = "rakyatl";
$tdataall[".listFields"][] = "rakyatp";
$tdataall[".listFields"][] = "sum_rakyat";
$tdataall[".listFields"][] = "gantil";
$tdataall[".listFields"][] = "gantip";
$tdataall[".listFields"][] = "sum_ganti";
$tdataall[".listFields"][] = "sum_pom";
$tdataall[".listFields"][] = "sum_laki";
$tdataall[".listFields"][] = "guru_all";

$tdataall[".viewFields"] = array();

$tdataall[".addFields"] = array();

$tdataall[".inlineAddFields"] = array();

$tdataall[".editFields"] = array();

$tdataall[".inlineEditFields"] = array();

$tdataall[".exportFields"] = array();

$tdataall[".printFields"] = array();

//	kafal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "kafal";
	$fdata["GoodName"] = "kafal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Kafal"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "kafal"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Gender='L' && staff_info.Grade!='RAKYAT'  && staff_info.Grade!='GANTI' && staff_info.Job_Type='Guru'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["kafal"] = $fdata;
//	kafap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "kafap";
	$fdata["GoodName"] = "kafap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Kafap"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "kafap"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Gender='P' && staff_info.Grade!='RAKYAT' &&  staff_info.Grade!='GANTI' &&  staff_info.Job_Type='Guru'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["kafap"] = $fdata;
//	sum_kafa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sum_kafa";
	$fdata["GoodName"] = "sum_kafa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Sum Kafa"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sum_kafa"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Grade!='RAKYAT' && staff_info.Job_Type='Guru'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["sum_kafa"] = $fdata;
//	rakyatl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rakyatl";
	$fdata["GoodName"] = "rakyatl";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Rakyatl"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "rakyatl"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Gender='L' && staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["rakyatl"] = $fdata;
//	rakyatp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rakyatp";
	$fdata["GoodName"] = "rakyatp";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Rakyatp"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "rakyatp"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Gender='P' && staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["rakyatp"] = $fdata;
//	sum_rakyat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sum_rakyat";
	$fdata["GoodName"] = "sum_rakyat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Sum Rakyat"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sum_rakyat"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["sum_rakyat"] = $fdata;
//	gantil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "gantil";
	$fdata["GoodName"] = "gantil";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gantil"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "gantil"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Gender='L' && staff_info.Grade='GANTI'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["gantil"] = $fdata;
//	gantip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "gantip";
	$fdata["GoodName"] = "gantip";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gantip"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "gantip"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Gender='P' && staff_info.Grade='GANTI'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["gantip"] = $fdata;
//	sum_ganti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sum_ganti";
	$fdata["GoodName"] = "sum_ganti";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Sum Ganti"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sum_ganti"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Grade='GANTI'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["sum_ganti"] = $fdata;
//	sum_pom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sum_pom";
	$fdata["GoodName"] = "sum_pom";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Sum Pom"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sum_pom"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Gender='P'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["sum_pom"] = $fdata;
//	sum_laki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sum_laki";
	$fdata["GoodName"] = "sum_laki";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Sum Laki"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sum_laki"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Gender='L'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["sum_laki"] = $fdata;
//	guru_all
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "guru_all";
	$fdata["GoodName"] = "guru_all";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Guru All"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "guru_all"; 
		$fdata["FullName"] = "coalesce(sum(staff_info.Job_Type='Guru' &&  staff_info.Grade!='GANTI'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataall["guru_all"] = $fdata;

	
$tables_data["all"]=&$tdataall;
$field_labels["all"] = &$fieldLabelsall;
$fieldToolTips["all"] = &$fieldToolTipsall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["all"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["all"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "coalesce(sum(staff_info.Gender='L' && staff_info.Grade!='RAKYAT'  && staff_info.Grade!='GANTI' && staff_info.Job_Type='Guru'), 0) AS kafal,  coalesce(sum(staff_info.Gender='P' && staff_info.Grade!='RAKYAT' &&  staff_info.Grade!='GANTI' &&  staff_info.Job_Type='Guru'), 0) AS kafap,  coalesce(sum(staff_info.Grade!='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS sum_kafa,  coalesce(sum(staff_info.Gender='L' && staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS rakyatl,  coalesce(sum(staff_info.Gender='P' && staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS rakyatp,  coalesce(sum(staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS sum_rakyat,  coalesce(sum(staff_info.Gender='L' && staff_info.Grade='GANTI'), 0) AS gantil,  coalesce(sum(staff_info.Gender='P' && staff_info.Grade='GANTI'), 0) AS gantip,  coalesce(sum(staff_info.Grade='GANTI'), 0) AS sum_ganti,  coalesce(sum(staff_info.Gender='P'), 0) AS sum_pom,  coalesce(sum(staff_info.Gender='L'), 0) AS sum_laki,  coalesce(sum(staff_info.Job_Type='Guru' &&  staff_info.Grade!='GANTI'), 0) AS guru_all";
$proto0["m_strFrom"] = "FROM staff_info  RIGHT OUTER JOIN job ON job.job_grade = staff_info.Grade";
$proto0["m_strWhere"] = "(job.job_category ='Guru') AND (staff_info.sstatus ='Aktif')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(job.job_category ='Guru') AND (staff_info.sstatus ='Aktif')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(job.job_category ='Guru') AND (staff_info.sstatus ='Aktif')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "job.job_category ='Guru'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_category",
	"m_strTable" => "job"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "='Guru'";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "1";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "staff_info.sstatus ='Aktif'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "staff_info"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "='Aktif'";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "1";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = "0";
$proto7["m_inBrackets"] = "0";
$proto7["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_CUSTOM";
$proto10["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Gender='L' && staff_info.Grade!='RAKYAT'  && staff_info.Grade!='GANTI' && staff_info.Job_Type='Guru')"
));

$proto10["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto10);

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "kafal";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Gender='P' && staff_info.Grade!='RAKYAT' &&  staff_info.Grade!='GANTI' &&  staff_info.Job_Type='Guru')"
));

$proto14["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto14);

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "kafap";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Grade!='RAKYAT' && staff_info.Job_Type='Guru')"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto18);

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "sum_kafa";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Gender='L' && staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru')"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto22);

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "rakyatl";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_CUSTOM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Gender='P' && staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru')"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto26);

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "rakyatp";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_CUSTOM";
$proto30["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru')"
));

$proto30["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto30);

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "sum_rakyat";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$proto34=array();
$proto34["m_functiontype"] = "SQLF_CUSTOM";
$proto34["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Gender='L' && staff_info.Grade='GANTI')"
));

$proto34["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto34["m_arguments"][]=$obj;
$proto34["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto34);

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "gantil";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$proto38=array();
$proto38["m_functiontype"] = "SQLF_CUSTOM";
$proto38["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Gender='P' && staff_info.Grade='GANTI')"
));

$proto38["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto38["m_arguments"][]=$obj;
$proto38["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto38);

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "gantip";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$proto42=array();
$proto42["m_functiontype"] = "SQLF_CUSTOM";
$proto42["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Grade='GANTI')"
));

$proto42["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto42["m_arguments"][]=$obj;
$proto42["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto42);

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "sum_ganti";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$proto46=array();
$proto46["m_functiontype"] = "SQLF_CUSTOM";
$proto46["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Gender='P')"
));

$proto46["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto46["m_arguments"][]=$obj;
$proto46["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto46);

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "sum_pom";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$proto50=array();
$proto50["m_functiontype"] = "SQLF_CUSTOM";
$proto50["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Gender='L')"
));

$proto50["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto50["m_arguments"][]=$obj;
$proto50["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto50);

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "sum_laki";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$proto54=array();
$proto54["m_functiontype"] = "SQLF_CUSTOM";
$proto54["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(staff_info.Job_Type='Guru' &&  staff_info.Grade!='GANTI')"
));

$proto54["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto54["m_arguments"][]=$obj;
$proto54["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto54);

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "guru_all";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "staff_info";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "ID";
$proto58["m_columns"][] = "Name";
$proto58["m_columns"][] = "StaffNo";
$proto58["m_columns"][] = "IC_No";
$proto58["m_columns"][] = "Email";
$proto58["m_columns"][] = "Gender";
$proto58["m_columns"][] = "Race";
$proto58["m_columns"][] = "DOB";
$proto58["m_columns"][] = "Address";
$proto58["m_columns"][] = "City";
$proto58["m_columns"][] = "State";
$proto58["m_columns"][] = "Nationality";
$proto58["m_columns"][] = "Home_Tel";
$proto58["m_columns"][] = "Mobile_Tel";
$proto58["m_columns"][] = "Disability";
$proto58["m_columns"][] = "Medical_condition";
$proto58["m_columns"][] = "Join_Date";
$proto58["m_columns"][] = "End_Date";
$proto58["m_columns"][] = "Gerak_Date";
$proto58["m_columns"][] = "Job_Type";
$proto58["m_columns"][] = "Employee_Type";
$proto58["m_columns"][] = "Job_Title";
$proto58["m_columns"][] = "Job_Sesi";
$proto58["m_columns"][] = "Grade";
$proto58["m_columns"][] = "Elaun";
$proto58["m_columns"][] = "department";
$proto58["m_columns"][] = "passport";
$proto58["m_columns"][] = "married";
$proto58["m_columns"][] = "blood";
$proto58["m_columns"][] = "photo";
$proto58["m_columns"][] = "f1_name";
$proto58["m_columns"][] = "f1_relation";
$proto58["m_columns"][] = "f1_tel";
$proto58["m_columns"][] = "f2_name";
$proto58["m_columns"][] = "f2_relation";
$proto58["m_columns"][] = "f2_tel";
$proto58["m_columns"][] = "bank1";
$proto58["m_columns"][] = "bank2";
$proto58["m_columns"][] = "epf";
$proto58["m_columns"][] = "socso";
$proto58["m_columns"][] = "lhdn";
$proto58["m_columns"][] = "confirmation_date";
$proto58["m_columns"][] = "kelulusan";
$proto58["m_columns"][] = "course_opsyen";
$proto58["m_columns"][] = "course_main";
$proto58["m_columns"][] = "sstatus";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_alias"] = "";
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = "0";
$proto59["m_inBrackets"] = "0";
$proto59["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
												$proto61=array();
$proto61["m_link"] = "SQLL_RIGHTJOIN";
			$proto62=array();
$proto62["m_strName"] = "job";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "ID";
$proto62["m_columns"][] = "job_category";
$proto62["m_columns"][] = "job_name";
$proto62["m_columns"][] = "job_grade";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_alias"] = "";
$proto63=array();
$proto63["m_sql"] = "job.job_grade = staff_info.Grade";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "job_grade",
	"m_strTable" => "job"
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "= staff_info.Grade";
$proto63["m_havingmode"] = "0";
$proto63["m_inBrackets"] = "0";
$proto63["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto63);

$proto61["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto61);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_all = createSqlQuery_all();
												$tdataall[".sqlquery"] = $queryData_all;

$tableEvents["all"] = new eventsBase;
$tdataall[".hasEvents"] = false;

$cipherer = new RunnerCipherer("all");

?>