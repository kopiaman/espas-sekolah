<?php
require_once(getabspath("classes/cipherer.php"));
$tdataexam_slip_darjah = array();
	$tdataexam_slip_darjah[".NumberOfChars"] = 80; 
	$tdataexam_slip_darjah[".ShortName"] = "exam_slip_darjah";
	$tdataexam_slip_darjah[".OwnerID"] = "";
	$tdataexam_slip_darjah[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsexam_slip_darjah = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsexam_slip_darjah["Malay"] = array();
	$fieldToolTipsexam_slip_darjah["Malay"] = array();
	$fieldLabelsexam_slip_darjah["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsexam_slip_darjah["Malay"]["sesi"] = "";
	$fieldLabelsexam_slip_darjah["Malay"]["darjah"] = "Darjah";
	$fieldToolTipsexam_slip_darjah["Malay"]["darjah"] = "";
	$fieldLabelsexam_slip_darjah["Malay"]["opt"] = "UP1";
	$fieldToolTipsexam_slip_darjah["Malay"]["opt"] = "";
	$fieldLabelsexam_slip_darjah["Malay"]["StudentID"] = "Student ID";
	$fieldToolTipsexam_slip_darjah["Malay"]["StudentID"] = "";
	$fieldLabelsexam_slip_darjah["Malay"]["ppt"] = "PPT";
	$fieldToolTipsexam_slip_darjah["Malay"]["ppt"] = "";
	$fieldLabelsexam_slip_darjah["Malay"]["up2"] = "UP2";
	$fieldToolTipsexam_slip_darjah["Malay"]["up2"] = "";
	$fieldLabelsexam_slip_darjah["Malay"]["pat"] = "PAT";
	$fieldToolTipsexam_slip_darjah["Malay"]["pat"] = "";
	if (count($fieldToolTipsexam_slip_darjah["Malay"]))
		$tdataexam_slip_darjah[".isUseToolTips"] = true;
}
	
	



$tdataexam_slip_darjah[".shortTableName"] = "exam_slip_darjah";
$tdataexam_slip_darjah[".nSecOptions"] = 0;
$tdataexam_slip_darjah[".recsPerRowList"] = 1;
$tdataexam_slip_darjah[".mainTableOwnerID"] = "";
$tdataexam_slip_darjah[".moveNext"] = 1;
$tdataexam_slip_darjah[".nType"] = 1;

$tdataexam_slip_darjah[".strOriginalTableName"] = "student_info";




$tdataexam_slip_darjah[".showAddInPopup"] = false;

$tdataexam_slip_darjah[".showEditInPopup"] = false;

$tdataexam_slip_darjah[".showViewInPopup"] = true;

$tdataexam_slip_darjah[".fieldsForRegister"] = array();
	
$tdataexam_slip_darjah[".listAjax"] = false;

	$tdataexam_slip_darjah[".audit"] = false;

	$tdataexam_slip_darjah[".locking"] = false;

$tdataexam_slip_darjah[".listIcons"] = true;




$tdataexam_slip_darjah[".showSimpleSearchOptions"] = false;

$tdataexam_slip_darjah[".showSearchPanel"] = true;

if (isMobile())
	$tdataexam_slip_darjah[".isUseAjaxSuggest"] = false;
else 
	$tdataexam_slip_darjah[".isUseAjaxSuggest"] = true;

$tdataexam_slip_darjah[".rowHighlite"] = true;

// button handlers file names

$tdataexam_slip_darjah[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexam_slip_darjah[".isUseTimeForSearch"] = false;




$tdataexam_slip_darjah[".allSearchFields"] = array();


$tdataexam_slip_darjah[".googleLikeFields"][] = "StudentID";
$tdataexam_slip_darjah[".googleLikeFields"][] = "darjah";
$tdataexam_slip_darjah[".googleLikeFields"][] = "opt";
$tdataexam_slip_darjah[".googleLikeFields"][] = "ppt";
$tdataexam_slip_darjah[".googleLikeFields"][] = "up2";
$tdataexam_slip_darjah[".googleLikeFields"][] = "pat";

$tdataexam_slip_darjah[".panelSearchFields"][] = "sesi";


$tdataexam_slip_darjah[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataexam_slip_darjah[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY tahun";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataexam_slip_darjah[".strOrderBy"] = $tstrOrderBy;

$tdataexam_slip_darjah[".orderindexes"] = array();
$tdataexam_slip_darjah[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "tahun");

$tdataexam_slip_darjah[".sqlHead"] = "SELECT StudentID,  sesi,  tahun AS darjah,  StudentID AS opt,  StudentID AS ppt,  StudentID AS up2,  StudentID AS pat";
$tdataexam_slip_darjah[".sqlFrom"] = "FROM student_info";
$tdataexam_slip_darjah[".sqlWhereExpr"] = "";
$tdataexam_slip_darjah[".sqlTail"] = "GROUP BY tahun";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Peribadi",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "sesi";
$arrEditTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Persekolahan",
					   'nType'=>'0',
					   'nOrder'=>7,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Perhubungan",
					   'nType'=>'0',
					   'nOrder'=>16,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Orang Untuk Dihubungi",
					   'nType'=>'0',
					   'nOrder'=>24,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Kesihatan",
					   'nType'=>'0',
					   'nOrder'=>31,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataexam_slip_darjah[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Peribadi",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "sesi";
$arrAddTabs[] = array('tabId'=>'Campus_Info1',
					  'tabName'=>"Persekolahan",
					  'nType'=>'0',
					  'nOrder'=>7,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Contact1',
					  'tabName'=>"Perhubungan",
					  'nType'=>'0',
					  'nOrder'=>16,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Next_Of_Kin1',
					  'tabName'=>"Orang Untuk Dihubungi",
					  'nType'=>'0',
					  'nOrder'=>21,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Medical1',
					  'tabName'=>"Kesihatan",
					  'nType'=>'0',
					  'nOrder'=>28,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataexam_slip_darjah[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Peribadi",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "sesi";
$arrViewTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Persekolahan",
					   'nType'=>'0',
					   'nOrder'=>7,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Perhubungan",
					   'nType'=>'0',
					   'nOrder'=>16,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Orang Untuk Dihubungi",
					   'nType'=>'0',
					   'nOrder'=>24,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Kesihatan",
					   'nType'=>'0',
					   'nOrder'=>31,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataexam_slip_darjah[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexam_slip_darjah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexam_slip_darjah[".arrGroupsPerPage"] = $arrGPP;

$tableKeysexam_slip_darjah = array();
$tableKeysexam_slip_darjah[] = "StudentID";
$tdataexam_slip_darjah[".Keys"] = $tableKeysexam_slip_darjah;

$tdataexam_slip_darjah[".listFields"] = array();
$tdataexam_slip_darjah[".listFields"][] = "darjah";
$tdataexam_slip_darjah[".listFields"][] = "opt";
$tdataexam_slip_darjah[".listFields"][] = "ppt";
$tdataexam_slip_darjah[".listFields"][] = "up2";
$tdataexam_slip_darjah[".listFields"][] = "pat";

$tdataexam_slip_darjah[".viewFields"] = array();

$tdataexam_slip_darjah[".addFields"] = array();

$tdataexam_slip_darjah[".inlineAddFields"] = array();

$tdataexam_slip_darjah[".editFields"] = array();

$tdataexam_slip_darjah[".inlineEditFields"] = array();

$tdataexam_slip_darjah[".exportFields"] = array();

$tdataexam_slip_darjah[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Student ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_slip_darjah["StudentID"] = $fdata;
//	sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sesi";
	$fdata["GoodName"] = "sesi";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Sesi"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sesi"; 
		$fdata["FullName"] = "sesi";
	
		
		
				
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
	
		
		
	$tdataexam_slip_darjah["sesi"] = $fdata;
//	darjah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "darjah";
	$fdata["GoodName"] = "darjah";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Darjah"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
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
	
		
		
	$tdataexam_slip_darjah["darjah"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "UP1"; 
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
	
		
		
	$tdataexam_slip_darjah["opt"] = $fdata;
//	ppt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ppt";
	$fdata["GoodName"] = "ppt";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "PPT"; 
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
	
		
		
	$tdataexam_slip_darjah["ppt"] = $fdata;
//	up2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "up2";
	$fdata["GoodName"] = "up2";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "UP2"; 
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
	
		
		
	$tdataexam_slip_darjah["up2"] = $fdata;
//	pat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pat";
	$fdata["GoodName"] = "pat";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "PAT"; 
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
	
		
		
	$tdataexam_slip_darjah["pat"] = $fdata;

	
$tables_data["exam_slip_darjah"]=&$tdataexam_slip_darjah;
$field_labels["exam_slip_darjah"] = &$fieldLabelsexam_slip_darjah;
$fieldToolTips["exam_slip_darjah"] = &$fieldToolTipsexam_slip_darjah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["exam_slip_darjah"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["exam_slip_darjah"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_exam_slip_darjah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StudentID,  sesi,  tahun AS darjah,  StudentID AS opt,  StudentID AS ppt,  StudentID AS up2,  StudentID AS pat";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tahun";
$proto0["m_strTail"] = "GROUP BY tahun";
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
	"m_strName" => "sesi",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "darjah";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "ppt";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "up2";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "pat";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "student_info";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "StudentID";
$proto20["m_columns"][] = "Name";
$proto20["m_columns"][] = "ICNO";
$proto20["m_columns"][] = "DOB";
$proto20["m_columns"][] = "MatricNo";
$proto20["m_columns"][] = "Email";
$proto20["m_columns"][] = "Access";
$proto20["m_columns"][] = "DateJoin";
$proto20["m_columns"][] = "Dateout";
$proto20["m_columns"][] = "Gender";
$proto20["m_columns"][] = "Address1";
$proto20["m_columns"][] = "City";
$proto20["m_columns"][] = "Postcode";
$proto20["m_columns"][] = "StateID";
$proto20["m_columns"][] = "HomeTelephone";
$proto20["m_columns"][] = "Nationality";
$proto20["m_columns"][] = "Status";
$proto20["m_columns"][] = "Disability";
$proto20["m_columns"][] = "MedicalCondition";
$proto20["m_columns"][] = "race";
$proto20["m_columns"][] = "Class";
$proto20["m_columns"][] = "sesi";
$proto20["m_columns"][] = "tahun";
$proto20["m_columns"][] = "f1_name";
$proto20["m_columns"][] = "f1_tel";
$proto20["m_columns"][] = "f1_relation";
$proto20["m_columns"][] = "f1_job";
$proto20["m_columns"][] = "f2_name";
$proto20["m_columns"][] = "f2_tel";
$proto20["m_columns"][] = "f2_relation";
$proto20["m_columns"][] = "f2_job";
$proto20["m_columns"][] = "blood";
$proto20["m_columns"][] = "hostel_in";
$proto20["m_columns"][] = "photo";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 1;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_exam_slip_darjah = createSqlQuery_exam_slip_darjah();
							$tdataexam_slip_darjah[".sqlquery"] = $queryData_exam_slip_darjah;

include_once(getabspath("include/exam_slip_darjah_events.php"));
$tableEvents["exam_slip_darjah"] = new eventclass_exam_slip_darjah;
$tdataexam_slip_darjah[".hasEvents"] = true;

$cipherer = new RunnerCipherer("exam_slip_darjah");

?>