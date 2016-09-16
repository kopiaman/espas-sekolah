<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_discipline = array();
	$tdatastudent_discipline[".NumberOfChars"] = 80; 
	$tdatastudent_discipline[".ShortName"] = "student_discipline";
	$tdatastudent_discipline[".OwnerID"] = "";
	$tdatastudent_discipline[".OriginalTable"] = "student_discipline";

//	field labels
$fieldLabelsstudent_discipline = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstudent_discipline["Malay"] = array();
	$fieldToolTipsstudent_discipline["Malay"] = array();
	$fieldLabelsstudent_discipline["Malay"]["ID"] = "ID";
	$fieldToolTipsstudent_discipline["Malay"]["ID"] = "";
	$fieldLabelsstudent_discipline["Malay"]["StudentID"] = "Nama Pelajar";
	$fieldToolTipsstudent_discipline["Malay"]["StudentID"] = "";
	$fieldLabelsstudent_discipline["Malay"]["Activity"] = "Aktiviti";
	$fieldToolTipsstudent_discipline["Malay"]["Activity"] = "";
	$fieldLabelsstudent_discipline["Malay"]["Level"] = "Peringkat";
	$fieldToolTipsstudent_discipline["Malay"]["Level"] = "";
	$fieldLabelsstudent_discipline["Malay"]["Date_Committed"] = "Tarikh Dilakukan";
	$fieldToolTipsstudent_discipline["Malay"]["Date_Committed"] = "";
	$fieldLabelsstudent_discipline["Malay"]["Action_Taken"] = "Tindakan";
	$fieldToolTipsstudent_discipline["Malay"]["Action_Taken"] = "";
	$fieldLabelsstudent_discipline["Malay"]["Comment"] = "Catatan";
	$fieldToolTipsstudent_discipline["Malay"]["Comment"] = "";
	if (count($fieldToolTipsstudent_discipline["Malay"]))
		$tdatastudent_discipline[".isUseToolTips"] = true;
}
	
	



$tdatastudent_discipline[".shortTableName"] = "student_discipline";
$tdatastudent_discipline[".nSecOptions"] = 0;
$tdatastudent_discipline[".recsPerRowList"] = 1;
$tdatastudent_discipline[".mainTableOwnerID"] = "";
$tdatastudent_discipline[".moveNext"] = 1;
$tdatastudent_discipline[".nType"] = 0;

$tdatastudent_discipline[".strOriginalTableName"] = "student_discipline";




$tdatastudent_discipline[".showAddInPopup"] = false;

$tdatastudent_discipline[".showEditInPopup"] = false;

$tdatastudent_discipline[".showViewInPopup"] = true;

$tdatastudent_discipline[".fieldsForRegister"] = array();
	
$tdatastudent_discipline[".listAjax"] = false;

	$tdatastudent_discipline[".audit"] = false;

	$tdatastudent_discipline[".locking"] = false;

$tdatastudent_discipline[".listIcons"] = true;
$tdatastudent_discipline[".edit"] = true;
$tdatastudent_discipline[".inlineEdit"] = true;
$tdatastudent_discipline[".inlineAdd"] = true;



$tdatastudent_discipline[".delete"] = true;

$tdatastudent_discipline[".showSimpleSearchOptions"] = false;

$tdatastudent_discipline[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_discipline[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_discipline[".isUseAjaxSuggest"] = true;

$tdatastudent_discipline[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_discipline[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_discipline[".isUseTimeForSearch"] = false;




$tdatastudent_discipline[".allSearchFields"] = array();


$tdatastudent_discipline[".googleLikeFields"][] = "ID";
$tdatastudent_discipline[".googleLikeFields"][] = "StudentID";
$tdatastudent_discipline[".googleLikeFields"][] = "Activity";
$tdatastudent_discipline[".googleLikeFields"][] = "Level";
$tdatastudent_discipline[".googleLikeFields"][] = "Date_Committed";
$tdatastudent_discipline[".googleLikeFields"][] = "Action_Taken";
$tdatastudent_discipline[".googleLikeFields"][] = "Comment";

$tdatastudent_discipline[".panelSearchFields"][] = "StudentID";
$tdatastudent_discipline[".panelSearchFields"][] = "ID";
$tdatastudent_discipline[".panelSearchFields"][] = "Activity";
$tdatastudent_discipline[".panelSearchFields"][] = "Level";
$tdatastudent_discipline[".panelSearchFields"][] = "Date_Committed";
$tdatastudent_discipline[".panelSearchFields"][] = "Action_Taken";
$tdatastudent_discipline[".panelSearchFields"][] = "Comment";


$tdatastudent_discipline[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_discipline[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_discipline[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_discipline[".orderindexes"] = array();

$tdatastudent_discipline[".sqlHead"] = "SELECT ID,   StudentID,   Activity,   `Level`,   Date_Committed,   Action_Taken,   `Comment`";
$tdatastudent_discipline[".sqlFrom"] = "FROM student_discipline";
$tdatastudent_discipline[".sqlWhereExpr"] = "";
$tdatastudent_discipline[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_discipline[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_discipline[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_discipline = array();
$tableKeysstudent_discipline[] = "ID";
$tdatastudent_discipline[".Keys"] = $tableKeysstudent_discipline;

$tdatastudent_discipline[".listFields"] = array();
$tdatastudent_discipline[".listFields"][] = "Activity";
$tdatastudent_discipline[".listFields"][] = "Level";
$tdatastudent_discipline[".listFields"][] = "Date_Committed";
$tdatastudent_discipline[".listFields"][] = "Action_Taken";
$tdatastudent_discipline[".listFields"][] = "Comment";

$tdatastudent_discipline[".viewFields"] = array();

$tdatastudent_discipline[".addFields"] = array();
$tdatastudent_discipline[".addFields"][] = "Activity";
$tdatastudent_discipline[".addFields"][] = "Level";
$tdatastudent_discipline[".addFields"][] = "Date_Committed";
$tdatastudent_discipline[".addFields"][] = "Action_Taken";
$tdatastudent_discipline[".addFields"][] = "Comment";

$tdatastudent_discipline[".inlineAddFields"] = array();
$tdatastudent_discipline[".inlineAddFields"][] = "Activity";
$tdatastudent_discipline[".inlineAddFields"][] = "Level";
$tdatastudent_discipline[".inlineAddFields"][] = "Date_Committed";
$tdatastudent_discipline[".inlineAddFields"][] = "Action_Taken";
$tdatastudent_discipline[".inlineAddFields"][] = "Comment";

$tdatastudent_discipline[".editFields"] = array();
$tdatastudent_discipline[".editFields"][] = "Activity";
$tdatastudent_discipline[".editFields"][] = "Level";
$tdatastudent_discipline[".editFields"][] = "Date_Committed";
$tdatastudent_discipline[".editFields"][] = "Action_Taken";
$tdatastudent_discipline[".editFields"][] = "Comment";

$tdatastudent_discipline[".inlineEditFields"] = array();
$tdatastudent_discipline[".inlineEditFields"][] = "Activity";
$tdatastudent_discipline[".inlineEditFields"][] = "Level";
$tdatastudent_discipline[".inlineEditFields"][] = "Date_Committed";
$tdatastudent_discipline[".inlineEditFields"][] = "Action_Taken";
$tdatastudent_discipline[".inlineEditFields"][] = "Comment";

$tdatastudent_discipline[".exportFields"] = array();

$tdatastudent_discipline[".printFields"] = array();

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
	
		
		
	$tdatastudent_discipline["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_discipline";
	$fdata["Label"] = "Nama Pelajar"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_discipline["StudentID"] = $fdata;
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 120;
			$edata["nCols"] = 300;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_discipline["Activity"] = $fdata;
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
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Level"; 
		$fdata["FullName"] = "`Level`";
	
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
	
		
		
	$tdatastudent_discipline["Level"] = $fdata;
//	Date_Committed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Date_Committed";
	$fdata["GoodName"] = "Date_Committed";
	$fdata["ownerTable"] = "student_discipline";
	$fdata["Label"] = "Tarikh Dilakukan"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Date_Committed"; 
		$fdata["FullName"] = "Date_Committed";
	
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
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_discipline["Date_Committed"] = $fdata;
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
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Action_Taken"; 
		$fdata["FullName"] = "Action_Taken";
	
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
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_discipline["Action_Taken"] = $fdata;
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
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Comment"; 
		$fdata["FullName"] = "`Comment`";
	
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
	
		
		
		
				$edata["nRows"] = 120;
			$edata["nCols"] = 300;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_discipline["Comment"] = $fdata;

	
$tables_data["student_discipline"]=&$tdatastudent_discipline;
$field_labels["student_discipline"] = &$fieldLabelsstudent_discipline;
$fieldToolTips["student_discipline"] = &$fieldToolTipsstudent_discipline;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_discipline"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_discipline"] = array();

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
	$masterTablesData["student_discipline"][$mIndex] = $masterParams;	
		$masterTablesData["student_discipline"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_discipline"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_discipline()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   StudentID,   Activity,   `Level`,   Date_Committed,   Action_Taken,   `Comment`";
$proto0["m_strFrom"] = "FROM student_discipline";
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
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "student_discipline";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "StudentID";
$proto20["m_columns"][] = "Activity";
$proto20["m_columns"][] = "Level";
$proto20["m_columns"][] = "Date_Committed";
$proto20["m_columns"][] = "Action_Taken";
$proto20["m_columns"][] = "Comment";
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
$queryData_student_discipline = createSqlQuery_student_discipline();
							$tdatastudent_discipline[".sqlquery"] = $queryData_student_discipline;

$tableEvents["student_discipline"] = new eventsBase;
$tdatastudent_discipline[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_discipline");

?>