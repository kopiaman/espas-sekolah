<?php
require_once(getabspath("classes/cipherer.php"));
$tdataChart_no_student = array();
	$tdataChart_no_student[".ShortName"] = "Chart_no_student";
	$tdataChart_no_student[".OwnerID"] = "";
	$tdataChart_no_student[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsChart_no_student = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsChart_no_student["Malay"] = array();
	$fieldToolTipsChart_no_student["Malay"] = array();
	$fieldLabelsChart_no_student["Malay"]["no_student"] = "Bilangan Pelajar";
	$fieldToolTipsChart_no_student["Malay"]["no_student"] = "";
	$fieldLabelsChart_no_student["Malay"]["Gender"] = "Jantina";
	$fieldToolTipsChart_no_student["Malay"]["Gender"] = "";
	$fieldLabelsChart_no_student["Malay"]["StateID"] = "Negeri";
	$fieldToolTipsChart_no_student["Malay"]["StateID"] = "";
	$fieldLabelsChart_no_student["Malay"]["tahun"] = "Darjah";
	$fieldToolTipsChart_no_student["Malay"]["tahun"] = "";
	$fieldLabelsChart_no_student["Malay"]["Class"] = "Kelas";
	$fieldToolTipsChart_no_student["Malay"]["Class"] = "";
	$fieldLabelsChart_no_student["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsChart_no_student["Malay"]["sesi"] = "";
	if (count($fieldToolTipsChart_no_student["Malay"]))
		$tdataChart_no_student[".isUseToolTips"] = true;
}
	
	
	$tdataChart_no_student[".NCSearch"] = true;

	$tdataChart_no_student[".ChartRefreshTime"] = 0;


$tdataChart_no_student[".shortTableName"] = "Chart_no_student";
$tdataChart_no_student[".nSecOptions"] = 0;
$tdataChart_no_student[".recsPerRowList"] = 1;
$tdataChart_no_student[".mainTableOwnerID"] = "";
$tdataChart_no_student[".moveNext"] = 0;
$tdataChart_no_student[".nType"] = 3;

$tdataChart_no_student[".strOriginalTableName"] = "student_info";




$tdataChart_no_student[".showAddInPopup"] = false;

$tdataChart_no_student[".showEditInPopup"] = false;

$tdataChart_no_student[".showViewInPopup"] = false;

$tdataChart_no_student[".fieldsForRegister"] = array();
	
$tdataChart_no_student[".listAjax"] = false;

	$tdataChart_no_student[".audit"] = false;

	$tdataChart_no_student[".locking"] = false;

$tdataChart_no_student[".listIcons"] = true;
$tdataChart_no_student[".edit"] = true;
$tdataChart_no_student[".inlineEdit"] = true;
$tdataChart_no_student[".inlineAdd"] = true;
$tdataChart_no_student[".view"] = true;



$tdataChart_no_student[".delete"] = true;

$tdataChart_no_student[".showSimpleSearchOptions"] = false;

$tdataChart_no_student[".showSearchPanel"] = true;

if (isMobile())
	$tdataChart_no_student[".isUseAjaxSuggest"] = false;
else 
	$tdataChart_no_student[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataChart_no_student[".addPageEvents"] = false;

// use timepicker for search panel
$tdataChart_no_student[".isUseTimeForSearch"] = false;




$tdataChart_no_student[".allSearchFields"] = array();

$tdataChart_no_student[".allSearchFields"][] = "Gender";
$tdataChart_no_student[".allSearchFields"][] = "StateID";
$tdataChart_no_student[".allSearchFields"][] = "Class";
$tdataChart_no_student[".allSearchFields"][] = "sesi";

$tdataChart_no_student[".googleLikeFields"][] = "Class";
$tdataChart_no_student[".googleLikeFields"][] = "sesi";

$tdataChart_no_student[".panelSearchFields"][] = "Gender";
$tdataChart_no_student[".panelSearchFields"][] = "StateID";
$tdataChart_no_student[".panelSearchFields"][] = "Class";
$tdataChart_no_student[".panelSearchFields"][] = "sesi";

$tdataChart_no_student[".advSearchFields"][] = "Gender";
$tdataChart_no_student[".advSearchFields"][] = "StateID";
$tdataChart_no_student[".advSearchFields"][] = "Class";
$tdataChart_no_student[".advSearchFields"][] = "sesi";

$tdataChart_no_student[".isTableType"] = "chart";

	



// Access doesn't support subqueries from the same table as main



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataChart_no_student[".strOrderBy"] = $tstrOrderBy;

$tdataChart_no_student[".orderindexes"] = array();

$tdataChart_no_student[".sqlHead"] = "SELECT COUNT(StudentID) AS no_student,  Gender,  StateID,  tahun,  `Class`,  sesi";
$tdataChart_no_student[".sqlFrom"] = "FROM student_info";
$tdataChart_no_student[".sqlWhereExpr"] = "";
$tdataChart_no_student[".sqlTail"] = "GROUP BY tahun";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataChart_no_student[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataChart_no_student[".arrGroupsPerPage"] = $arrGPP;

$tableKeysChart_no_student = array();
$tdataChart_no_student[".Keys"] = $tableKeysChart_no_student;

$tdataChart_no_student[".listFields"] = array();
$tdataChart_no_student[".listFields"][] = "no_student";
$tdataChart_no_student[".listFields"][] = "Gender";
$tdataChart_no_student[".listFields"][] = "StateID";
$tdataChart_no_student[".listFields"][] = "tahun";
$tdataChart_no_student[".listFields"][] = "Class";
$tdataChart_no_student[".listFields"][] = "sesi";

$tdataChart_no_student[".viewFields"] = array();
$tdataChart_no_student[".viewFields"][] = "no_student";
$tdataChart_no_student[".viewFields"][] = "Gender";
$tdataChart_no_student[".viewFields"][] = "StateID";
$tdataChart_no_student[".viewFields"][] = "tahun";
$tdataChart_no_student[".viewFields"][] = "Class";
$tdataChart_no_student[".viewFields"][] = "sesi";

$tdataChart_no_student[".addFields"] = array();
$tdataChart_no_student[".addFields"][] = "Gender";
$tdataChart_no_student[".addFields"][] = "StateID";
$tdataChart_no_student[".addFields"][] = "tahun";
$tdataChart_no_student[".addFields"][] = "Class";
$tdataChart_no_student[".addFields"][] = "sesi";

$tdataChart_no_student[".inlineAddFields"] = array();
$tdataChart_no_student[".inlineAddFields"][] = "no_student";
$tdataChart_no_student[".inlineAddFields"][] = "Gender";
$tdataChart_no_student[".inlineAddFields"][] = "StateID";
$tdataChart_no_student[".inlineAddFields"][] = "tahun";
$tdataChart_no_student[".inlineAddFields"][] = "Class";
$tdataChart_no_student[".inlineAddFields"][] = "sesi";

$tdataChart_no_student[".editFields"] = array();
$tdataChart_no_student[".editFields"][] = "Gender";
$tdataChart_no_student[".editFields"][] = "StateID";
$tdataChart_no_student[".editFields"][] = "tahun";
$tdataChart_no_student[".editFields"][] = "Class";
$tdataChart_no_student[".editFields"][] = "sesi";

$tdataChart_no_student[".inlineEditFields"] = array();
$tdataChart_no_student[".inlineEditFields"][] = "no_student";
$tdataChart_no_student[".inlineEditFields"][] = "Gender";
$tdataChart_no_student[".inlineEditFields"][] = "StateID";
$tdataChart_no_student[".inlineEditFields"][] = "tahun";
$tdataChart_no_student[".inlineEditFields"][] = "Class";
$tdataChart_no_student[".inlineEditFields"][] = "sesi";

$tdataChart_no_student[".exportFields"] = array();
$tdataChart_no_student[".exportFields"][] = "no_student";
$tdataChart_no_student[".exportFields"][] = "Gender";
$tdataChart_no_student[".exportFields"][] = "StateID";
$tdataChart_no_student[".exportFields"][] = "tahun";
$tdataChart_no_student[".exportFields"][] = "Class";
$tdataChart_no_student[".exportFields"][] = "sesi";

$tdataChart_no_student[".printFields"] = array();
$tdataChart_no_student[".printFields"][] = "no_student";
$tdataChart_no_student[".printFields"][] = "Gender";
$tdataChart_no_student[".printFields"][] = "StateID";
$tdataChart_no_student[".printFields"][] = "tahun";
$tdataChart_no_student[".printFields"][] = "Class";
$tdataChart_no_student[".printFields"][] = "sesi";

//	no_student
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "no_student";
	$fdata["GoodName"] = "no_student";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Bilangan Pelajar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "no_student"; 
		$fdata["FullName"] = "COUNT(StudentID)";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["no_student"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Jantina"; 
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
	
		$fdata["strField"] = "Gender"; 
		$fdata["FullName"] = "Gender";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["Gender"] = $fdata;
//	StateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StateID";
	$fdata["GoodName"] = "StateID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Negeri"; 
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
	
		$fdata["strField"] = "StateID"; 
		$fdata["FullName"] = "StateID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		$edata["LookupWhere"] = "Class=1";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["StateID"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Darjah"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tahun"; 
		$fdata["FullName"] = "tahun";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["tahun"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Kelas"; 
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
	
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "`Class`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["Class"] = $fdata;
//	sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sesi";
	$fdata["GoodName"] = "sesi";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Sesi"; 
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
	
		$fdata["strField"] = "sesi"; 
		$fdata["FullName"] = "sesi";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["sesi"] = $fdata;

	$tdataChart_no_student[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Chart_no_student</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>
		
		<attr value="parameters">';
	$tdataChart_no_student[".chartXml"] .= '<attr value="0">
			<attr value="name">no_student</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr">Student</attr>';
	$tdataChart_no_student[".chartXml"] .= '</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="1">
		<attr value="name">tahun</attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdataChart_no_student[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdataChart_no_student[".chartXml"] .= '<attr value="head">'.xmlencode("Bilangan Pelajar").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("BranchID").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">FFFFFF</attr>
<attr value="color72">FFFFFF</attr>
<attr value="color81">FEF7DB</attr>
<attr value="color82">FEF7DB</attr>
<attr value="color91">000000</attr>
<attr value="color92">000000</attr>
<attr value="color101">000000</attr>
<attr value="color102">000000</attr>
<attr value="color111">000000</attr>
<attr value="color112">000000</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">5</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdataChart_no_student[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataChart_no_student[".chartXml"] .= '<attr value="0">
		<attr value="name">no_student</attr>
		<attr value="label">'.xmlencode("Bilangan Pelajar").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="1">
		<attr value="name">Gender</attr>
		<attr value="label">'.xmlencode("Jantina").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="2">
		<attr value="name">StateID</attr>
		<attr value="label">'.xmlencode("Negeri").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="3">
		<attr value="name">tahun</attr>
		<attr value="label">'.xmlencode("Darjah").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="4">
		<attr value="name">Class</attr>
		<attr value="label">'.xmlencode("Kelas").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="5">
		<attr value="name">sesi</attr>
		<attr value="label">'.xmlencode("Sesi").'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataChart_no_student[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Chart_no_student</attr>
<attr value="short_table_name">Chart_no_student</attr>
</attr>

</chart>';
	
$tables_data["Chart_no_student"]=&$tdataChart_no_student;
$field_labels["Chart_no_student"] = &$fieldLabelsChart_no_student;
$fieldToolTips["Chart_no_student"] = &$fieldToolTipsChart_no_student;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Chart_no_student"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Chart_no_student"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Chart_no_student()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(StudentID) AS no_student,  Gender,  StateID,  tahun,  `Class`,  sesi";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_COUNT";
$proto6["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto6);

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "no_student";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "student_info"
));

$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "StateID",
	"m_strTable" => "student_info"
));

$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sesi",
	"m_strTable" => "student_info"
));

$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "student_info";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "StudentID";
$proto19["m_columns"][] = "Name";
$proto19["m_columns"][] = "ICNO";
$proto19["m_columns"][] = "DOB";
$proto19["m_columns"][] = "MatricNo";
$proto19["m_columns"][] = "Email";
$proto19["m_columns"][] = "Access";
$proto19["m_columns"][] = "DateJoin";
$proto19["m_columns"][] = "Dateout";
$proto19["m_columns"][] = "Gender";
$proto19["m_columns"][] = "Address1";
$proto19["m_columns"][] = "City";
$proto19["m_columns"][] = "Postcode";
$proto19["m_columns"][] = "StateID";
$proto19["m_columns"][] = "HomeTelephone";
$proto19["m_columns"][] = "Nationality";
$proto19["m_columns"][] = "Status";
$proto19["m_columns"][] = "Disability";
$proto19["m_columns"][] = "MedicalCondition";
$proto19["m_columns"][] = "race";
$proto19["m_columns"][] = "Class";
$proto19["m_columns"][] = "sesi";
$proto19["m_columns"][] = "tahun";
$proto19["m_columns"][] = "f1_name";
$proto19["m_columns"][] = "f1_tel";
$proto19["m_columns"][] = "f1_relation";
$proto19["m_columns"][] = "f1_job";
$proto19["m_columns"][] = "f2_name";
$proto19["m_columns"][] = "f2_tel";
$proto19["m_columns"][] = "f2_relation";
$proto19["m_columns"][] = "f2_job";
$proto19["m_columns"][] = "blood";
$proto19["m_columns"][] = "hostel_in";
$proto19["m_columns"][] = "photo";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_alias"] = "";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = "0";
$proto20["m_inBrackets"] = "0";
$proto20["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Chart_no_student = createSqlQuery_Chart_no_student();
						$tdataChart_no_student[".sqlquery"] = $queryData_Chart_no_student;

$tableEvents["Chart_no_student"] = new eventsBase;
$tdataChart_no_student[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Chart_no_student");

?>