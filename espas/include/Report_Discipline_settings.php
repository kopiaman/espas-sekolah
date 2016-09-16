<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Discipline = array();
	$tdataReport_Discipline[".NumberOfChars"] = 80; 
	$tdataReport_Discipline[".ShortName"] = "Report_Discipline";
	$tdataReport_Discipline[".OwnerID"] = "";
	$tdataReport_Discipline[".OriginalTable"] = "student_discipline";

//	field labels
$fieldLabelsReport_Discipline = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsReport_Discipline["Malay"] = array();
	$fieldToolTipsReport_Discipline["Malay"] = array();
	$fieldLabelsReport_Discipline["Malay"]["ID"] = "ID";
	$fieldToolTipsReport_Discipline["Malay"]["ID"] = "";
	$fieldLabelsReport_Discipline["Malay"]["StudentID"] = "Nama Pelajar";
	$fieldToolTipsReport_Discipline["Malay"]["StudentID"] = "";
	$fieldLabelsReport_Discipline["Malay"]["Activity"] = "Aktiviti";
	$fieldToolTipsReport_Discipline["Malay"]["Activity"] = "";
	$fieldLabelsReport_Discipline["Malay"]["Level"] = "Peringkat";
	$fieldToolTipsReport_Discipline["Malay"]["Level"] = "";
	$fieldLabelsReport_Discipline["Malay"]["Date_Committed"] = "Tarikh Perlakuan";
	$fieldToolTipsReport_Discipline["Malay"]["Date_Committed"] = "";
	$fieldLabelsReport_Discipline["Malay"]["Action_Taken"] = "Tindakan";
	$fieldToolTipsReport_Discipline["Malay"]["Action_Taken"] = "";
	$fieldLabelsReport_Discipline["Malay"]["Comment"] = "Catatan";
	$fieldToolTipsReport_Discipline["Malay"]["Comment"] = "";
	$fieldLabelsReport_Discipline["Malay"]["MatricNo"] = "No Dikenali";
	$fieldToolTipsReport_Discipline["Malay"]["MatricNo"] = "";
	$fieldLabelsReport_Discipline["Malay"]["Status"] = "Status";
	$fieldToolTipsReport_Discipline["Malay"]["Status"] = "";
	$fieldLabelsReport_Discipline["Malay"]["Class"] = "Kelas";
	$fieldToolTipsReport_Discipline["Malay"]["Class"] = "";
	$fieldLabelsReport_Discipline["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsReport_Discipline["Malay"]["sesi"] = "";
	$fieldLabelsReport_Discipline["Malay"]["darjah"] = "Darjah";
	$fieldToolTipsReport_Discipline["Malay"]["darjah"] = "";
	if (count($fieldToolTipsReport_Discipline["Malay"]))
		$tdataReport_Discipline[".isUseToolTips"] = true;
}
	
	



$tdataReport_Discipline[".shortTableName"] = "Report_Discipline";
$tdataReport_Discipline[".nSecOptions"] = 0;
$tdataReport_Discipline[".recsPerRowList"] = 1;
$tdataReport_Discipline[".mainTableOwnerID"] = "";
$tdataReport_Discipline[".moveNext"] = 1;
$tdataReport_Discipline[".nType"] = 1;

$tdataReport_Discipline[".strOriginalTableName"] = "student_discipline";




$tdataReport_Discipline[".showAddInPopup"] = false;

$tdataReport_Discipline[".showEditInPopup"] = false;

$tdataReport_Discipline[".showViewInPopup"] = true;

$tdataReport_Discipline[".fieldsForRegister"] = array();
	
$tdataReport_Discipline[".listAjax"] = false;

	$tdataReport_Discipline[".audit"] = false;

	$tdataReport_Discipline[".locking"] = false;

$tdataReport_Discipline[".listIcons"] = true;
$tdataReport_Discipline[".inlineEdit"] = true;
$tdataReport_Discipline[".inlineAdd"] = true;

$tdataReport_Discipline[".exportTo"] = true;


$tdataReport_Discipline[".delete"] = true;

$tdataReport_Discipline[".showSimpleSearchOptions"] = false;

$tdataReport_Discipline[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Discipline[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Discipline[".isUseAjaxSuggest"] = true;

$tdataReport_Discipline[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Discipline[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Discipline[".isUseTimeForSearch"] = false;




$tdataReport_Discipline[".allSearchFields"] = array();

$tdataReport_Discipline[".allSearchFields"][] = "StudentID";
$tdataReport_Discipline[".allSearchFields"][] = "MatricNo";
$tdataReport_Discipline[".allSearchFields"][] = "Status";
$tdataReport_Discipline[".allSearchFields"][] = "Class";
$tdataReport_Discipline[".allSearchFields"][] = "sesi";
$tdataReport_Discipline[".allSearchFields"][] = "darjah";
$tdataReport_Discipline[".allSearchFields"][] = "Activity";
$tdataReport_Discipline[".allSearchFields"][] = "Level";
$tdataReport_Discipline[".allSearchFields"][] = "Date_Committed";
$tdataReport_Discipline[".allSearchFields"][] = "Action_Taken";
$tdataReport_Discipline[".allSearchFields"][] = "Comment";

$tdataReport_Discipline[".googleLikeFields"][] = "StudentID";
$tdataReport_Discipline[".googleLikeFields"][] = "Class";
$tdataReport_Discipline[".googleLikeFields"][] = "sesi";
$tdataReport_Discipline[".googleLikeFields"][] = "darjah";

$tdataReport_Discipline[".panelSearchFields"][] = "StudentID";
$tdataReport_Discipline[".panelSearchFields"][] = "MatricNo";
$tdataReport_Discipline[".panelSearchFields"][] = "Status";
$tdataReport_Discipline[".panelSearchFields"][] = "Class";
$tdataReport_Discipline[".panelSearchFields"][] = "sesi";
$tdataReport_Discipline[".panelSearchFields"][] = "darjah";
$tdataReport_Discipline[".panelSearchFields"][] = "Level";

$tdataReport_Discipline[".advSearchFields"][] = "StudentID";
$tdataReport_Discipline[".advSearchFields"][] = "MatricNo";
$tdataReport_Discipline[".advSearchFields"][] = "Status";
$tdataReport_Discipline[".advSearchFields"][] = "Class";
$tdataReport_Discipline[".advSearchFields"][] = "sesi";
$tdataReport_Discipline[".advSearchFields"][] = "darjah";
$tdataReport_Discipline[".advSearchFields"][] = "Activity";
$tdataReport_Discipline[".advSearchFields"][] = "Level";
$tdataReport_Discipline[".advSearchFields"][] = "Date_Committed";
$tdataReport_Discipline[".advSearchFields"][] = "Action_Taken";
$tdataReport_Discipline[".advSearchFields"][] = "Comment";

$tdataReport_Discipline[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Discipline[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_discipline.ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Discipline[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Discipline[".orderindexes"] = array();
$tdataReport_Discipline[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_discipline.ID");

$tdataReport_Discipline[".sqlHead"] = "SELECT student_discipline.ID,  student_discipline.StudentID,  student_discipline.Activity,  student_discipline.`Level`,  student_discipline.Date_Committed,  student_discipline.Action_Taken,  student_discipline.`Comment`,  student_info.MatricNo,  student_info.Status,  student_info.`Class`,  student_info.sesi,  student_info.tahun AS darjah";
$tdataReport_Discipline[".sqlFrom"] = "FROM student_discipline  INNER JOIN student_info ON student_discipline.StudentID = student_info.StudentID";
$tdataReport_Discipline[".sqlWhereExpr"] = "";
$tdataReport_Discipline[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Discipline[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Discipline[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Discipline = array();
$tableKeysReport_Discipline[] = "ID";
$tdataReport_Discipline[".Keys"] = $tableKeysReport_Discipline;

$tdataReport_Discipline[".listFields"] = array();
$tdataReport_Discipline[".listFields"][] = "StudentID";
$tdataReport_Discipline[".listFields"][] = "darjah";
$tdataReport_Discipline[".listFields"][] = "Activity";
$tdataReport_Discipline[".listFields"][] = "Level";
$tdataReport_Discipline[".listFields"][] = "Date_Committed";
$tdataReport_Discipline[".listFields"][] = "Action_Taken";
$tdataReport_Discipline[".listFields"][] = "Comment";

$tdataReport_Discipline[".viewFields"] = array();

$tdataReport_Discipline[".addFields"] = array();

$tdataReport_Discipline[".inlineAddFields"] = array();
$tdataReport_Discipline[".inlineAddFields"][] = "StudentID";
$tdataReport_Discipline[".inlineAddFields"][] = "darjah";
$tdataReport_Discipline[".inlineAddFields"][] = "Activity";
$tdataReport_Discipline[".inlineAddFields"][] = "Level";
$tdataReport_Discipline[".inlineAddFields"][] = "Date_Committed";
$tdataReport_Discipline[".inlineAddFields"][] = "Action_Taken";
$tdataReport_Discipline[".inlineAddFields"][] = "Comment";

$tdataReport_Discipline[".editFields"] = array();

$tdataReport_Discipline[".inlineEditFields"] = array();
$tdataReport_Discipline[".inlineEditFields"][] = "StudentID";
$tdataReport_Discipline[".inlineEditFields"][] = "darjah";
$tdataReport_Discipline[".inlineEditFields"][] = "Activity";
$tdataReport_Discipline[".inlineEditFields"][] = "Level";
$tdataReport_Discipline[".inlineEditFields"][] = "Date_Committed";
$tdataReport_Discipline[".inlineEditFields"][] = "Action_Taken";
$tdataReport_Discipline[".inlineEditFields"][] = "Comment";

$tdataReport_Discipline[".exportFields"] = array();
$tdataReport_Discipline[".exportFields"][] = "StudentID";
$tdataReport_Discipline[".exportFields"][] = "sesi";
$tdataReport_Discipline[".exportFields"][] = "Class";
$tdataReport_Discipline[".exportFields"][] = "Status";
$tdataReport_Discipline[".exportFields"][] = "MatricNo";
$tdataReport_Discipline[".exportFields"][] = "darjah";
$tdataReport_Discipline[".exportFields"][] = "Activity";
$tdataReport_Discipline[".exportFields"][] = "Level";
$tdataReport_Discipline[".exportFields"][] = "Date_Committed";
$tdataReport_Discipline[".exportFields"][] = "Action_Taken";
$tdataReport_Discipline[".exportFields"][] = "Comment";

$tdataReport_Discipline[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_discipline";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "student_discipline.ID";
	
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
	
		
		
	$tdataReport_Discipline["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_discipline";
	$fdata["Label"] = "Nama Pelajar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_discipline.StudentID";
	
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
				if(strpos(GetUserPermissions("Report_Discipline"), 'S') !== false)
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
	
		
		
	$tdataReport_Discipline["StudentID"] = $fdata;
//	Activity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Activity";
	$fdata["GoodName"] = "Activity";
	$fdata["ownerTable"] = "student_discipline";
	$fdata["Label"] = "Aktiviti"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activity"; 
		$fdata["FullName"] = "student_discipline.Activity";
	
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
	
		
		
		
				$edata["nRows"] = 80;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Discipline["Activity"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "student_discipline";
	$fdata["Label"] = "Peringkat"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Level"; 
		$fdata["FullName"] = "student_discipline.`Level`";
	
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=14";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Discipline["Level"] = $fdata;
//	Date_Committed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Date_Committed";
	$fdata["GoodName"] = "Date_Committed";
	$fdata["ownerTable"] = "student_discipline";
	$fdata["Label"] = "Tarikh Perlakuan"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Date_Committed"; 
		$fdata["FullName"] = "student_discipline.Date_Committed";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
	
		
	
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
	
		
		
	$tdataReport_Discipline["Date_Committed"] = $fdata;
//	Action_Taken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Action_Taken";
	$fdata["GoodName"] = "Action_Taken";
	$fdata["ownerTable"] = "student_discipline";
	$fdata["Label"] = "Tindakan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Action_Taken"; 
		$fdata["FullName"] = "student_discipline.Action_Taken";
	
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
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=15";
	
		
		
		
				
	
	
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
	
		
		
	$tdataReport_Discipline["Action_Taken"] = $fdata;
//	Comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Comment";
	$fdata["GoodName"] = "Comment";
	$fdata["ownerTable"] = "student_discipline";
	$fdata["Label"] = "Catatan"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Comment"; 
		$fdata["FullName"] = "student_discipline.`Comment`";
	
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
	
		
		
		
				$edata["nRows"] = 80;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Discipline["Comment"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "No Dikenali"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_Discipline["MatricNo"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
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
	
		
		
	$tdataReport_Discipline["Status"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
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
	
		
		
	$tdataReport_Discipline["Class"] = $fdata;
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
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
	
		
		
	$tdataReport_Discipline["sesi"] = $fdata;
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
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
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
	
		
		
	$tdataReport_Discipline["darjah"] = $fdata;

	
$tables_data["Report_Discipline"]=&$tdataReport_Discipline;
$field_labels["Report_Discipline"] = &$fieldLabelsReport_Discipline;
$fieldToolTips["Report_Discipline"] = &$fieldToolTipsReport_Discipline;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Discipline"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Discipline"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Discipline()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_discipline.ID,  student_discipline.StudentID,  student_discipline.Activity,  student_discipline.`Level`,  student_discipline.Date_Committed,  student_discipline.Action_Taken,  student_discipline.`Comment`,  student_info.MatricNo,  student_info.Status,  student_info.`Class`,  student_info.sesi,  student_info.tahun AS darjah";
$proto0["m_strFrom"] = "FROM student_discipline  INNER JOIN student_info ON student_discipline.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_discipline.ID DESC";
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
	"m_strTable" => "student_discipline"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_discipline"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Activity",
	"m_strTable" => "student_discipline"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "student_discipline"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Date_Committed",
	"m_strTable" => "student_discipline"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Action_Taken",
	"m_strTable" => "student_discipline"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Comment",
	"m_strTable" => "student_discipline"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
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
$proto30["m_strName"] = "student_discipline";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "ID";
$proto30["m_columns"][] = "StudentID";
$proto30["m_columns"][] = "Activity";
$proto30["m_columns"][] = "Level";
$proto30["m_columns"][] = "Date_Committed";
$proto30["m_columns"][] = "Action_Taken";
$proto30["m_columns"][] = "Comment";
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
$proto35["m_sql"] = "student_discipline.StudentID = student_info.StudentID";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_discipline"
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
	"m_strTable" => "student_discipline"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 0;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Discipline = createSqlQuery_Report_Discipline();
												$tdataReport_Discipline[".sqlquery"] = $queryData_Report_Discipline;

$tableEvents["Report_Discipline"] = new eventsBase;
$tdataReport_Discipline[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_Discipline");

?>