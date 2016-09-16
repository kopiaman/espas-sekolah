<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Extracurricular = array();
	$tdataReport_Extracurricular[".NumberOfChars"] = 80; 
	$tdataReport_Extracurricular[".ShortName"] = "Report_Extracurricular";
	$tdataReport_Extracurricular[".OwnerID"] = "";
	$tdataReport_Extracurricular[".OriginalTable"] = "student_extracurricular";

//	field labels
$fieldLabelsReport_Extracurricular = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsReport_Extracurricular["Malay"] = array();
	$fieldToolTipsReport_Extracurricular["Malay"] = array();
	$fieldLabelsReport_Extracurricular["Malay"]["ID"] = "ID";
	$fieldToolTipsReport_Extracurricular["Malay"]["ID"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["StudentID"] = "Nama Pelajar";
	$fieldToolTipsReport_Extracurricular["Malay"]["StudentID"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["Activity"] = "Aktiviti";
	$fieldToolTipsReport_Extracurricular["Malay"]["Activity"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["Achievement"] = "Pencapaian";
	$fieldToolTipsReport_Extracurricular["Malay"]["Achievement"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["Start_Date"] = "Tarikh Mula";
	$fieldToolTipsReport_Extracurricular["Malay"]["Start_Date"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["End_Date"] = "Tarikh Akhir";
	$fieldToolTipsReport_Extracurricular["Malay"]["End_Date"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["MatricNo"] = "No Dikenali";
	$fieldToolTipsReport_Extracurricular["Malay"]["MatricNo"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["Level"] = "Peringkat";
	$fieldToolTipsReport_Extracurricular["Malay"]["Level"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["Class"] = "Kelas";
	$fieldToolTipsReport_Extracurricular["Malay"]["Class"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["Status"] = "Status";
	$fieldToolTipsReport_Extracurricular["Malay"]["Status"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsReport_Extracurricular["Malay"]["sesi"] = "";
	$fieldLabelsReport_Extracurricular["Malay"]["darjah"] = "Darjah";
	$fieldToolTipsReport_Extracurricular["Malay"]["darjah"] = "";
	if (count($fieldToolTipsReport_Extracurricular["Malay"]))
		$tdataReport_Extracurricular[".isUseToolTips"] = true;
}
	
	



$tdataReport_Extracurricular[".shortTableName"] = "Report_Extracurricular";
$tdataReport_Extracurricular[".nSecOptions"] = 0;
$tdataReport_Extracurricular[".recsPerRowList"] = 1;
$tdataReport_Extracurricular[".mainTableOwnerID"] = "";
$tdataReport_Extracurricular[".moveNext"] = 1;
$tdataReport_Extracurricular[".nType"] = 1;

$tdataReport_Extracurricular[".strOriginalTableName"] = "student_extracurricular";




$tdataReport_Extracurricular[".showAddInPopup"] = false;

$tdataReport_Extracurricular[".showEditInPopup"] = false;

$tdataReport_Extracurricular[".showViewInPopup"] = true;

$tdataReport_Extracurricular[".fieldsForRegister"] = array();
	
$tdataReport_Extracurricular[".listAjax"] = false;

	$tdataReport_Extracurricular[".audit"] = false;

	$tdataReport_Extracurricular[".locking"] = false;

$tdataReport_Extracurricular[".listIcons"] = true;
$tdataReport_Extracurricular[".inlineEdit"] = true;
$tdataReport_Extracurricular[".inlineAdd"] = true;

$tdataReport_Extracurricular[".exportTo"] = true;


$tdataReport_Extracurricular[".delete"] = true;

$tdataReport_Extracurricular[".showSimpleSearchOptions"] = false;

$tdataReport_Extracurricular[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Extracurricular[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Extracurricular[".isUseAjaxSuggest"] = true;

$tdataReport_Extracurricular[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Extracurricular[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Extracurricular[".isUseTimeForSearch"] = false;




$tdataReport_Extracurricular[".allSearchFields"] = array();

$tdataReport_Extracurricular[".allSearchFields"][] = "StudentID";
$tdataReport_Extracurricular[".allSearchFields"][] = "darjah";
$tdataReport_Extracurricular[".allSearchFields"][] = "Class";
$tdataReport_Extracurricular[".allSearchFields"][] = "sesi";
$tdataReport_Extracurricular[".allSearchFields"][] = "MatricNo";
$tdataReport_Extracurricular[".allSearchFields"][] = "Activity";
$tdataReport_Extracurricular[".allSearchFields"][] = "Level";
$tdataReport_Extracurricular[".allSearchFields"][] = "Achievement";
$tdataReport_Extracurricular[".allSearchFields"][] = "Start_Date";
$tdataReport_Extracurricular[".allSearchFields"][] = "End_Date";
$tdataReport_Extracurricular[".allSearchFields"][] = "Status";

$tdataReport_Extracurricular[".googleLikeFields"][] = "StudentID";

$tdataReport_Extracurricular[".panelSearchFields"][] = "StudentID";
$tdataReport_Extracurricular[".panelSearchFields"][] = "darjah";
$tdataReport_Extracurricular[".panelSearchFields"][] = "Class";
$tdataReport_Extracurricular[".panelSearchFields"][] = "sesi";
$tdataReport_Extracurricular[".panelSearchFields"][] = "MatricNo";
$tdataReport_Extracurricular[".panelSearchFields"][] = "Activity";
$tdataReport_Extracurricular[".panelSearchFields"][] = "Level";
$tdataReport_Extracurricular[".panelSearchFields"][] = "Status";

$tdataReport_Extracurricular[".advSearchFields"][] = "StudentID";
$tdataReport_Extracurricular[".advSearchFields"][] = "darjah";
$tdataReport_Extracurricular[".advSearchFields"][] = "Class";
$tdataReport_Extracurricular[".advSearchFields"][] = "sesi";
$tdataReport_Extracurricular[".advSearchFields"][] = "MatricNo";
$tdataReport_Extracurricular[".advSearchFields"][] = "Activity";
$tdataReport_Extracurricular[".advSearchFields"][] = "Level";
$tdataReport_Extracurricular[".advSearchFields"][] = "Achievement";
$tdataReport_Extracurricular[".advSearchFields"][] = "Start_Date";
$tdataReport_Extracurricular[".advSearchFields"][] = "End_Date";
$tdataReport_Extracurricular[".advSearchFields"][] = "Status";

$tdataReport_Extracurricular[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Extracurricular[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_extracurricular.ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Extracurricular[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Extracurricular[".orderindexes"] = array();
$tdataReport_Extracurricular[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_extracurricular.ID");

$tdataReport_Extracurricular[".sqlHead"] = "SELECT student_extracurricular.ID,  student_extracurricular.StudentID,  student_extracurricular.Activity,  student_extracurricular.Achievement,  student_extracurricular.Start_Date,  student_extracurricular.End_Date,  student_info.MatricNo,  student_extracurricular.`Level`,  student_info.`Class`,  student_info.Status,  student_info.sesi,  student_info.tahun AS darjah";
$tdataReport_Extracurricular[".sqlFrom"] = "FROM student_extracurricular  INNER JOIN student_info ON student_extracurricular.StudentID = student_info.StudentID";
$tdataReport_Extracurricular[".sqlWhereExpr"] = "";
$tdataReport_Extracurricular[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Extracurricular[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Extracurricular[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Extracurricular = array();
$tableKeysReport_Extracurricular[] = "ID";
$tdataReport_Extracurricular[".Keys"] = $tableKeysReport_Extracurricular;

$tdataReport_Extracurricular[".listFields"] = array();
$tdataReport_Extracurricular[".listFields"][] = "StudentID";
$tdataReport_Extracurricular[".listFields"][] = "darjah";
$tdataReport_Extracurricular[".listFields"][] = "MatricNo";
$tdataReport_Extracurricular[".listFields"][] = "Activity";
$tdataReport_Extracurricular[".listFields"][] = "Level";
$tdataReport_Extracurricular[".listFields"][] = "Achievement";
$tdataReport_Extracurricular[".listFields"][] = "Start_Date";
$tdataReport_Extracurricular[".listFields"][] = "End_Date";

$tdataReport_Extracurricular[".viewFields"] = array();

$tdataReport_Extracurricular[".addFields"] = array();

$tdataReport_Extracurricular[".inlineAddFields"] = array();
$tdataReport_Extracurricular[".inlineAddFields"][] = "StudentID";
$tdataReport_Extracurricular[".inlineAddFields"][] = "Activity";
$tdataReport_Extracurricular[".inlineAddFields"][] = "Level";
$tdataReport_Extracurricular[".inlineAddFields"][] = "Achievement";
$tdataReport_Extracurricular[".inlineAddFields"][] = "Start_Date";
$tdataReport_Extracurricular[".inlineAddFields"][] = "End_Date";

$tdataReport_Extracurricular[".editFields"] = array();

$tdataReport_Extracurricular[".inlineEditFields"] = array();
$tdataReport_Extracurricular[".inlineEditFields"][] = "StudentID";
$tdataReport_Extracurricular[".inlineEditFields"][] = "Activity";
$tdataReport_Extracurricular[".inlineEditFields"][] = "Level";
$tdataReport_Extracurricular[".inlineEditFields"][] = "Achievement";
$tdataReport_Extracurricular[".inlineEditFields"][] = "Start_Date";
$tdataReport_Extracurricular[".inlineEditFields"][] = "End_Date";

$tdataReport_Extracurricular[".exportFields"] = array();
$tdataReport_Extracurricular[".exportFields"][] = "StudentID";
$tdataReport_Extracurricular[".exportFields"][] = "darjah";
$tdataReport_Extracurricular[".exportFields"][] = "Class";
$tdataReport_Extracurricular[".exportFields"][] = "sesi";
$tdataReport_Extracurricular[".exportFields"][] = "MatricNo";
$tdataReport_Extracurricular[".exportFields"][] = "Activity";
$tdataReport_Extracurricular[".exportFields"][] = "Achievement";
$tdataReport_Extracurricular[".exportFields"][] = "Start_Date";
$tdataReport_Extracurricular[".exportFields"][] = "Level";
$tdataReport_Extracurricular[".exportFields"][] = "End_Date";
$tdataReport_Extracurricular[".exportFields"][] = "Status";

$tdataReport_Extracurricular[".printFields"] = array();

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
		$fdata["FullName"] = "student_extracurricular.ID";
	
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
	
		
		
	$tdataReport_Extracurricular["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Nama Pelajar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_extracurricular.StudentID";
	
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
				if(strpos(GetUserPermissions("Report_Extracurricular"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
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
	
		
		
	$tdataReport_Extracurricular["StudentID"] = $fdata;
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
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activity"; 
		$fdata["FullName"] = "student_extracurricular.Activity";
	
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
	
		
		
	$tdataReport_Extracurricular["Activity"] = $fdata;
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
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Achievement"; 
		$fdata["FullName"] = "student_extracurricular.Achievement";
	
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
	
		
		
	$tdataReport_Extracurricular["Achievement"] = $fdata;
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
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Start_Date"; 
		$fdata["FullName"] = "student_extracurricular.Start_Date";
	
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
	
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Extracurricular["Start_Date"] = $fdata;
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
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "End_Date"; 
		$fdata["FullName"] = "student_extracurricular.End_Date";
	
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
	
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Extracurricular["End_Date"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "No Dikenali"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "student_info.MatricNo";
	
		
		
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
	
		
		
	$tdataReport_Extracurricular["MatricNo"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Peringkat"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Level"; 
		$fdata["FullName"] = "student_extracurricular.`Level`";
	
		
		
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
	$edata["LookupOrderBy"] = "ID";
	
		
		$edata["LookupWhere"] = "Class=34";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Extracurricular["Level"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "student_info.`Class`";
	
		
		
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
	
		
		
	$tdataReport_Extracurricular["Class"] = $fdata;
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
		$fdata["FullName"] = "student_info.Status";
	
		
		
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
	
		
		
	$tdataReport_Extracurricular["Status"] = $fdata;
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
		$fdata["FullName"] = "student_info.sesi";
	
		
		
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
	$edata["LookupValues"][] = "Pagi";
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
	
		
		
	$tdataReport_Extracurricular["sesi"] = $fdata;
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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tahun"; 
		$fdata["FullName"] = "student_info.tahun";
	
		
		
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
	
		
		
	$tdataReport_Extracurricular["darjah"] = $fdata;

	
$tables_data["Report_Extracurricular"]=&$tdataReport_Extracurricular;
$field_labels["Report_Extracurricular"] = &$fieldLabelsReport_Extracurricular;
$fieldToolTips["Report_Extracurricular"] = &$fieldToolTipsReport_Extracurricular;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Extracurricular"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Extracurricular"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Extracurricular()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_extracurricular.ID,  student_extracurricular.StudentID,  student_extracurricular.Activity,  student_extracurricular.Achievement,  student_extracurricular.Start_Date,  student_extracurricular.End_Date,  student_info.MatricNo,  student_extracurricular.`Level`,  student_info.`Class`,  student_info.Status,  student_info.sesi,  student_info.tahun AS darjah";
$proto0["m_strFrom"] = "FROM student_extracurricular  INNER JOIN student_info ON student_extracurricular.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_extracurricular.ID DESC";
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
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "student_extracurricular"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
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
$proto30["m_strName"] = "student_extracurricular";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "ID";
$proto30["m_columns"][] = "StudentID";
$proto30["m_columns"][] = "Activity";
$proto30["m_columns"][] = "Achievement";
$proto30["m_columns"][] = "Start_Date";
$proto30["m_columns"][] = "End_Date";
$proto30["m_columns"][] = "Level";
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
												$proto33=array();
$proto33["m_link"] = "SQLL_INNERJOIN";
			$proto34=array();
$proto34["m_strName"] = "student_info";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "StudentID";
$proto34["m_columns"][] = "Name";
$proto34["m_columns"][] = "ICNO";
$proto34["m_columns"][] = "DOB";
$proto34["m_columns"][] = "MatricNo";
$proto34["m_columns"][] = "Email";
$proto34["m_columns"][] = "Access";
$proto34["m_columns"][] = "DateJoin";
$proto34["m_columns"][] = "Dateout";
$proto34["m_columns"][] = "Gender";
$proto34["m_columns"][] = "Address1";
$proto34["m_columns"][] = "City";
$proto34["m_columns"][] = "Postcode";
$proto34["m_columns"][] = "StateID";
$proto34["m_columns"][] = "HomeTelephone";
$proto34["m_columns"][] = "Nationality";
$proto34["m_columns"][] = "Status";
$proto34["m_columns"][] = "Disability";
$proto34["m_columns"][] = "MedicalCondition";
$proto34["m_columns"][] = "race";
$proto34["m_columns"][] = "Class";
$proto34["m_columns"][] = "sesi";
$proto34["m_columns"][] = "tahun";
$proto34["m_columns"][] = "f1_name";
$proto34["m_columns"][] = "f1_tel";
$proto34["m_columns"][] = "f1_relation";
$proto34["m_columns"][] = "f1_job";
$proto34["m_columns"][] = "f2_name";
$proto34["m_columns"][] = "f2_tel";
$proto34["m_columns"][] = "f2_relation";
$proto34["m_columns"][] = "f2_job";
$proto34["m_columns"][] = "blood";
$proto34["m_columns"][] = "hostel_in";
$proto34["m_columns"][] = "photo";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_alias"] = "";
$proto35=array();
$proto35["m_sql"] = "student_extracurricular.StudentID = student_info.StudentID";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_extracurricular"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= student_info.StudentID";
$proto35["m_havingmode"] = "0";
$proto35["m_inBrackets"] = "0";
$proto35["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "student_extracurricular"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 0;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Extracurricular = createSqlQuery_Report_Extracurricular();
												$tdataReport_Extracurricular[".sqlquery"] = $queryData_Report_Extracurricular;

$tableEvents["Report_Extracurricular"] = new eventsBase;
$tdataReport_Extracurricular[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_Extracurricular");

?>