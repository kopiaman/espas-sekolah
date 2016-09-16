<?php
require_once(getabspath("classes/cipherer.php"));
$tdataexam_rank_kelas = array();
	$tdataexam_rank_kelas[".NumberOfChars"] = 80; 
	$tdataexam_rank_kelas[".ShortName"] = "exam_rank_kelas";
	$tdataexam_rank_kelas[".OwnerID"] = "";
	$tdataexam_rank_kelas[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsexam_rank_kelas = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsexam_rank_kelas["Malay"] = array();
	$fieldToolTipsexam_rank_kelas["Malay"] = array();
	$fieldLabelsexam_rank_kelas["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsexam_rank_kelas["Malay"]["sesi"] = "";
	$fieldLabelsexam_rank_kelas["Malay"]["darjah"] = "Darjah";
	$fieldToolTipsexam_rank_kelas["Malay"]["darjah"] = "";
	$fieldLabelsexam_rank_kelas["Malay"]["kelas"] = "Kelas";
	$fieldToolTipsexam_rank_kelas["Malay"]["kelas"] = "";
	$fieldLabelsexam_rank_kelas["Malay"]["opt"] = "UP1";
	$fieldToolTipsexam_rank_kelas["Malay"]["opt"] = "";
	$fieldLabelsexam_rank_kelas["Malay"]["StudentID"] = "Student ID";
	$fieldToolTipsexam_rank_kelas["Malay"]["StudentID"] = "";
	$fieldLabelsexam_rank_kelas["Malay"]["ppt"] = "PPT";
	$fieldToolTipsexam_rank_kelas["Malay"]["ppt"] = "";
	$fieldLabelsexam_rank_kelas["Malay"]["up2"] = "UP2";
	$fieldToolTipsexam_rank_kelas["Malay"]["up2"] = "";
	$fieldLabelsexam_rank_kelas["Malay"]["pat"] = "PAT";
	$fieldToolTipsexam_rank_kelas["Malay"]["pat"] = "";
	if (count($fieldToolTipsexam_rank_kelas["Malay"]))
		$tdataexam_rank_kelas[".isUseToolTips"] = true;
}
	
	



$tdataexam_rank_kelas[".shortTableName"] = "exam_rank_kelas";
$tdataexam_rank_kelas[".nSecOptions"] = 0;
$tdataexam_rank_kelas[".recsPerRowList"] = 1;
$tdataexam_rank_kelas[".mainTableOwnerID"] = "";
$tdataexam_rank_kelas[".moveNext"] = 1;
$tdataexam_rank_kelas[".nType"] = 1;

$tdataexam_rank_kelas[".strOriginalTableName"] = "student_info";




$tdataexam_rank_kelas[".showAddInPopup"] = false;

$tdataexam_rank_kelas[".showEditInPopup"] = false;

$tdataexam_rank_kelas[".showViewInPopup"] = true;

$tdataexam_rank_kelas[".fieldsForRegister"] = array();
	
$tdataexam_rank_kelas[".listAjax"] = false;

	$tdataexam_rank_kelas[".audit"] = false;

	$tdataexam_rank_kelas[".locking"] = false;

$tdataexam_rank_kelas[".listIcons"] = true;




$tdataexam_rank_kelas[".showSimpleSearchOptions"] = false;

$tdataexam_rank_kelas[".showSearchPanel"] = true;

if (isMobile())
	$tdataexam_rank_kelas[".isUseAjaxSuggest"] = false;
else 
	$tdataexam_rank_kelas[".isUseAjaxSuggest"] = true;

$tdataexam_rank_kelas[".rowHighlite"] = true;

// button handlers file names

$tdataexam_rank_kelas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexam_rank_kelas[".isUseTimeForSearch"] = false;




$tdataexam_rank_kelas[".allSearchFields"] = array();

$tdataexam_rank_kelas[".allSearchFields"][] = "darjah";
$tdataexam_rank_kelas[".allSearchFields"][] = "kelas";

$tdataexam_rank_kelas[".googleLikeFields"][] = "StudentID";
$tdataexam_rank_kelas[".googleLikeFields"][] = "darjah";
$tdataexam_rank_kelas[".googleLikeFields"][] = "kelas";
$tdataexam_rank_kelas[".googleLikeFields"][] = "opt";
$tdataexam_rank_kelas[".googleLikeFields"][] = "ppt";
$tdataexam_rank_kelas[".googleLikeFields"][] = "up2";
$tdataexam_rank_kelas[".googleLikeFields"][] = "pat";

$tdataexam_rank_kelas[".panelSearchFields"][] = "sesi";

$tdataexam_rank_kelas[".advSearchFields"][] = "darjah";
$tdataexam_rank_kelas[".advSearchFields"][] = "kelas";

$tdataexam_rank_kelas[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataexam_rank_kelas[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY tahun";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataexam_rank_kelas[".strOrderBy"] = $tstrOrderBy;

$tdataexam_rank_kelas[".orderindexes"] = array();
$tdataexam_rank_kelas[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "tahun");

$tdataexam_rank_kelas[".sqlHead"] = "SELECT StudentID,  sesi,  tahun AS darjah,  `Class` AS kelas,  StudentID AS opt,  StudentID AS ppt,  StudentID AS up2,  StudentID AS pat";
$tdataexam_rank_kelas[".sqlFrom"] = "FROM student_info";
$tdataexam_rank_kelas[".sqlWhereExpr"] = "";
$tdataexam_rank_kelas[".sqlTail"] = "GROUP BY tahun, `Class`";

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
$tdataexam_rank_kelas[".arrEditTabs"] = $arrEditTabs;

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
$tdataexam_rank_kelas[".arrAddTabs"] = $arrAddTabs;

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
$tdataexam_rank_kelas[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexam_rank_kelas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexam_rank_kelas[".arrGroupsPerPage"] = $arrGPP;

$tableKeysexam_rank_kelas = array();
$tableKeysexam_rank_kelas[] = "StudentID";
$tdataexam_rank_kelas[".Keys"] = $tableKeysexam_rank_kelas;

$tdataexam_rank_kelas[".listFields"] = array();
$tdataexam_rank_kelas[".listFields"][] = "darjah";
$tdataexam_rank_kelas[".listFields"][] = "kelas";
$tdataexam_rank_kelas[".listFields"][] = "sesi";
$tdataexam_rank_kelas[".listFields"][] = "opt";
$tdataexam_rank_kelas[".listFields"][] = "ppt";
$tdataexam_rank_kelas[".listFields"][] = "up2";
$tdataexam_rank_kelas[".listFields"][] = "pat";

$tdataexam_rank_kelas[".viewFields"] = array();

$tdataexam_rank_kelas[".addFields"] = array();

$tdataexam_rank_kelas[".inlineAddFields"] = array();

$tdataexam_rank_kelas[".editFields"] = array();

$tdataexam_rank_kelas[".inlineEditFields"] = array();

$tdataexam_rank_kelas[".exportFields"] = array();

$tdataexam_rank_kelas[".printFields"] = array();

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
	
		
		
	$tdataexam_rank_kelas["StudentID"] = $fdata;
//	sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sesi";
	$fdata["GoodName"] = "sesi";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Sesi"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
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
	
		
		
	$tdataexam_rank_kelas["sesi"] = $fdata;
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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataexam_rank_kelas["darjah"] = $fdata;
//	kelas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "kelas";
	$fdata["GoodName"] = "kelas";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataexam_rank_kelas["kelas"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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
	
		
		
	$tdataexam_rank_kelas["opt"] = $fdata;
//	ppt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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
	
		
		
	$tdataexam_rank_kelas["ppt"] = $fdata;
//	up2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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
	
		
		
	$tdataexam_rank_kelas["up2"] = $fdata;
//	pat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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
	
		
		
	$tdataexam_rank_kelas["pat"] = $fdata;

	
$tables_data["exam_rank_kelas"]=&$tdataexam_rank_kelas;
$field_labels["exam_rank_kelas"] = &$fieldLabelsexam_rank_kelas;
$fieldToolTips["exam_rank_kelas"] = &$fieldToolTipsexam_rank_kelas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["exam_rank_kelas"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["exam_rank_kelas"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_exam_rank_kelas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StudentID,  sesi,  tahun AS darjah,  `Class` AS kelas,  StudentID AS opt,  StudentID AS ppt,  StudentID AS up2,  StudentID AS pat";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tahun";
$proto0["m_strTail"] = "GROUP BY tahun, `Class`";
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
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "kelas";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "ppt";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "up2";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "pat";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "student_info";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "StudentID";
$proto22["m_columns"][] = "Name";
$proto22["m_columns"][] = "ICNO";
$proto22["m_columns"][] = "DOB";
$proto22["m_columns"][] = "MatricNo";
$proto22["m_columns"][] = "Email";
$proto22["m_columns"][] = "Access";
$proto22["m_columns"][] = "DateJoin";
$proto22["m_columns"][] = "Dateout";
$proto22["m_columns"][] = "Gender";
$proto22["m_columns"][] = "Address1";
$proto22["m_columns"][] = "City";
$proto22["m_columns"][] = "Postcode";
$proto22["m_columns"][] = "StateID";
$proto22["m_columns"][] = "HomeTelephone";
$proto22["m_columns"][] = "Nationality";
$proto22["m_columns"][] = "Status";
$proto22["m_columns"][] = "Disability";
$proto22["m_columns"][] = "MedicalCondition";
$proto22["m_columns"][] = "race";
$proto22["m_columns"][] = "Class";
$proto22["m_columns"][] = "sesi";
$proto22["m_columns"][] = "tahun";
$proto22["m_columns"][] = "f1_name";
$proto22["m_columns"][] = "f1_tel";
$proto22["m_columns"][] = "f1_relation";
$proto22["m_columns"][] = "f1_job";
$proto22["m_columns"][] = "f2_name";
$proto22["m_columns"][] = "f2_tel";
$proto22["m_columns"][] = "f2_relation";
$proto22["m_columns"][] = "f2_job";
$proto22["m_columns"][] = "blood";
$proto22["m_columns"][] = "hostel_in";
$proto22["m_columns"][] = "photo";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 1;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_exam_rank_kelas = createSqlQuery_exam_rank_kelas();
								$tdataexam_rank_kelas[".sqlquery"] = $queryData_exam_rank_kelas;

include_once(getabspath("include/exam_rank_kelas_events.php"));
$tableEvents["exam_rank_kelas"] = new eventclass_exam_rank_kelas;
$tdataexam_rank_kelas[".hasEvents"] = true;

$cipherer = new RunnerCipherer("exam_rank_kelas");

?>