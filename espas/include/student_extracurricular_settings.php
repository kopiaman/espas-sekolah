<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_extracurricular = array();
	$tdatastudent_extracurricular[".NumberOfChars"] = 80; 
	$tdatastudent_extracurricular[".ShortName"] = "student_extracurricular";
	$tdatastudent_extracurricular[".OwnerID"] = "";
	$tdatastudent_extracurricular[".OriginalTable"] = "student_extracurricular";

//	field labels
$fieldLabelsstudent_extracurricular = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstudent_extracurricular["Malay"] = array();
	$fieldToolTipsstudent_extracurricular["Malay"] = array();
	$fieldLabelsstudent_extracurricular["Malay"]["ID"] = "ID";
	$fieldToolTipsstudent_extracurricular["Malay"]["ID"] = "";
	$fieldLabelsstudent_extracurricular["Malay"]["StudentID"] = "Nama Pelajar";
	$fieldToolTipsstudent_extracurricular["Malay"]["StudentID"] = "";
	$fieldLabelsstudent_extracurricular["Malay"]["Activity"] = "Aktiviti";
	$fieldToolTipsstudent_extracurricular["Malay"]["Activity"] = "";
	$fieldLabelsstudent_extracurricular["Malay"]["Achievement"] = "Pencapaian";
	$fieldToolTipsstudent_extracurricular["Malay"]["Achievement"] = "";
	$fieldLabelsstudent_extracurricular["Malay"]["Start_Date"] = "Tarikh Mula";
	$fieldToolTipsstudent_extracurricular["Malay"]["Start_Date"] = "";
	$fieldLabelsstudent_extracurricular["Malay"]["End_Date"] = "Tarikh Akhir";
	$fieldToolTipsstudent_extracurricular["Malay"]["End_Date"] = "";
	$fieldLabelsstudent_extracurricular["Malay"]["Level"] = "Peringkat";
	$fieldToolTipsstudent_extracurricular["Malay"]["Level"] = "";
	if (count($fieldToolTipsstudent_extracurricular["Malay"]))
		$tdatastudent_extracurricular[".isUseToolTips"] = true;
}
	
	



$tdatastudent_extracurricular[".shortTableName"] = "student_extracurricular";
$tdatastudent_extracurricular[".nSecOptions"] = 0;
$tdatastudent_extracurricular[".recsPerRowList"] = 1;
$tdatastudent_extracurricular[".mainTableOwnerID"] = "";
$tdatastudent_extracurricular[".moveNext"] = 1;
$tdatastudent_extracurricular[".nType"] = 0;

$tdatastudent_extracurricular[".strOriginalTableName"] = "student_extracurricular";




$tdatastudent_extracurricular[".showAddInPopup"] = false;

$tdatastudent_extracurricular[".showEditInPopup"] = false;

$tdatastudent_extracurricular[".showViewInPopup"] = true;

$tdatastudent_extracurricular[".fieldsForRegister"] = array();
	
$tdatastudent_extracurricular[".listAjax"] = false;

	$tdatastudent_extracurricular[".audit"] = false;

	$tdatastudent_extracurricular[".locking"] = false;

$tdatastudent_extracurricular[".listIcons"] = true;
$tdatastudent_extracurricular[".edit"] = true;
$tdatastudent_extracurricular[".inlineEdit"] = true;
$tdatastudent_extracurricular[".inlineAdd"] = true;



$tdatastudent_extracurricular[".delete"] = true;

$tdatastudent_extracurricular[".showSimpleSearchOptions"] = false;

$tdatastudent_extracurricular[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_extracurricular[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_extracurricular[".isUseAjaxSuggest"] = true;

$tdatastudent_extracurricular[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_extracurricular[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_extracurricular[".isUseTimeForSearch"] = false;




$tdatastudent_extracurricular[".allSearchFields"] = array();

$tdatastudent_extracurricular[".allSearchFields"][] = "Level";

$tdatastudent_extracurricular[".googleLikeFields"][] = "ID";
$tdatastudent_extracurricular[".googleLikeFields"][] = "StudentID";
$tdatastudent_extracurricular[".googleLikeFields"][] = "Activity";
$tdatastudent_extracurricular[".googleLikeFields"][] = "Achievement";
$tdatastudent_extracurricular[".googleLikeFields"][] = "Start_Date";
$tdatastudent_extracurricular[".googleLikeFields"][] = "End_Date";
$tdatastudent_extracurricular[".googleLikeFields"][] = "Level";

$tdatastudent_extracurricular[".panelSearchFields"][] = "StudentID";
$tdatastudent_extracurricular[".panelSearchFields"][] = "ID";
$tdatastudent_extracurricular[".panelSearchFields"][] = "Activity";
$tdatastudent_extracurricular[".panelSearchFields"][] = "Achievement";
$tdatastudent_extracurricular[".panelSearchFields"][] = "Start_Date";
$tdatastudent_extracurricular[".panelSearchFields"][] = "End_Date";

$tdatastudent_extracurricular[".advSearchFields"][] = "Level";

$tdatastudent_extracurricular[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_extracurricular[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_extracurricular[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_extracurricular[".orderindexes"] = array();

$tdatastudent_extracurricular[".sqlHead"] = "SELECT ID,   StudentID,   Activity,   Achievement,   Start_Date,   End_Date,   `Level`";
$tdatastudent_extracurricular[".sqlFrom"] = "FROM student_extracurricular";
$tdatastudent_extracurricular[".sqlWhereExpr"] = "";
$tdatastudent_extracurricular[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_extracurricular[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_extracurricular[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_extracurricular = array();
$tableKeysstudent_extracurricular[] = "ID";
$tdatastudent_extracurricular[".Keys"] = $tableKeysstudent_extracurricular;

$tdatastudent_extracurricular[".listFields"] = array();
$tdatastudent_extracurricular[".listFields"][] = "Activity";
$tdatastudent_extracurricular[".listFields"][] = "Level";
$tdatastudent_extracurricular[".listFields"][] = "Achievement";
$tdatastudent_extracurricular[".listFields"][] = "Start_Date";
$tdatastudent_extracurricular[".listFields"][] = "End_Date";

$tdatastudent_extracurricular[".viewFields"] = array();
$tdatastudent_extracurricular[".viewFields"][] = "Level";

$tdatastudent_extracurricular[".addFields"] = array();
$tdatastudent_extracurricular[".addFields"][] = "StudentID";
$tdatastudent_extracurricular[".addFields"][] = "Activity";
$tdatastudent_extracurricular[".addFields"][] = "Level";
$tdatastudent_extracurricular[".addFields"][] = "Achievement";
$tdatastudent_extracurricular[".addFields"][] = "Start_Date";
$tdatastudent_extracurricular[".addFields"][] = "End_Date";

$tdatastudent_extracurricular[".inlineAddFields"] = array();
$tdatastudent_extracurricular[".inlineAddFields"][] = "Activity";
$tdatastudent_extracurricular[".inlineAddFields"][] = "Level";
$tdatastudent_extracurricular[".inlineAddFields"][] = "Achievement";
$tdatastudent_extracurricular[".inlineAddFields"][] = "Start_Date";
$tdatastudent_extracurricular[".inlineAddFields"][] = "End_Date";

$tdatastudent_extracurricular[".editFields"] = array();
$tdatastudent_extracurricular[".editFields"][] = "StudentID";
$tdatastudent_extracurricular[".editFields"][] = "Activity";
$tdatastudent_extracurricular[".editFields"][] = "Level";
$tdatastudent_extracurricular[".editFields"][] = "Achievement";
$tdatastudent_extracurricular[".editFields"][] = "Start_Date";
$tdatastudent_extracurricular[".editFields"][] = "End_Date";

$tdatastudent_extracurricular[".inlineEditFields"] = array();
$tdatastudent_extracurricular[".inlineEditFields"][] = "Activity";
$tdatastudent_extracurricular[".inlineEditFields"][] = "Level";
$tdatastudent_extracurricular[".inlineEditFields"][] = "Achievement";
$tdatastudent_extracurricular[".inlineEditFields"][] = "Start_Date";
$tdatastudent_extracurricular[".inlineEditFields"][] = "End_Date";

$tdatastudent_extracurricular[".exportFields"] = array();
$tdatastudent_extracurricular[".exportFields"][] = "Level";

$tdatastudent_extracurricular[".printFields"] = array();
$tdatastudent_extracurricular[".printFields"][] = "Level";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_extracurricular";
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
	
		
		
	$tdatastudent_extracurricular["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Nama Pelajar"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
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
				if(strpos(GetUserPermissions("student_extracurricular"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
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
	
		
		
	$tdatastudent_extracurricular["StudentID"] = $fdata;
//	Activity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Activity";
	$fdata["GoodName"] = "Activity";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Aktiviti"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Activity"; 
		$fdata["FullName"] = "Activity";
	
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
	
		
		
	$tdatastudent_extracurricular["Activity"] = $fdata;
//	Achievement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Achievement";
	$fdata["GoodName"] = "Achievement";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Pencapaian"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Achievement"; 
		$fdata["FullName"] = "Achievement";
	
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
	
		
		
	$tdatastudent_extracurricular["Achievement"] = $fdata;
//	Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Start_Date";
	$fdata["GoodName"] = "Start_Date";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Tarikh Mula"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Start_Date"; 
		$fdata["FullName"] = "Start_Date";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
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
	
		
		
	$tdatastudent_extracurricular["Start_Date"] = $fdata;
//	End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "End_Date";
	$fdata["GoodName"] = "End_Date";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Tarikh Akhir"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "End_Date"; 
		$fdata["FullName"] = "End_Date";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
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
	
		
		
	$tdatastudent_extracurricular["End_Date"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Peringkat"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Level"; 
		$fdata["FullName"] = "`Level`";
	
		
		
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
	
		
		$edata["LookupWhere"] = "class=34";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_extracurricular["Level"] = $fdata;

	
$tables_data["student_extracurricular"]=&$tdatastudent_extracurricular;
$field_labels["student_extracurricular"] = &$fieldLabelsstudent_extracurricular;
$fieldToolTips["student_extracurricular"] = &$fieldToolTipsstudent_extracurricular;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_extracurricular"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_extracurricular"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="student_info";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student_info";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["student_extracurricular"][$mIndex] = $masterParams;	
		$masterTablesData["student_extracurricular"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_extracurricular"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_extracurricular()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   StudentID,   Activity,   Achievement,   Start_Date,   End_Date,   `Level`";
$proto0["m_strFrom"] = "FROM student_extracurricular";
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
	"m_strTable" => "student_extracurricular"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_extracurricular"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Activity",
	"m_strTable" => "student_extracurricular"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Achievement",
	"m_strTable" => "student_extracurricular"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Start_Date",
	"m_strTable" => "student_extracurricular"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "End_Date",
	"m_strTable" => "student_extracurricular"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "student_extracurricular"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "student_extracurricular";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "StudentID";
$proto20["m_columns"][] = "Activity";
$proto20["m_columns"][] = "Achievement";
$proto20["m_columns"][] = "Start_Date";
$proto20["m_columns"][] = "End_Date";
$proto20["m_columns"][] = "Level";
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
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_extracurricular = createSqlQuery_student_extracurricular();
							$tdatastudent_extracurricular[".sqlquery"] = $queryData_student_extracurricular;

$tableEvents["student_extracurricular"] = new eventsBase;
$tdatastudent_extracurricular[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_extracurricular");

?>