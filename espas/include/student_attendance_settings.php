<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_attendance = array();
	$tdatastudent_attendance[".NumberOfChars"] = 80; 
	$tdatastudent_attendance[".ShortName"] = "student_attendance";
	$tdatastudent_attendance[".OwnerID"] = "";
	$tdatastudent_attendance[".OriginalTable"] = "student_attendance";

//	field labels
$fieldLabelsstudent_attendance = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstudent_attendance["Malay"] = array();
	$fieldToolTipsstudent_attendance["Malay"] = array();
	$fieldLabelsstudent_attendance["Malay"]["sid"] = "Sid";
	$fieldToolTipsstudent_attendance["Malay"]["sid"] = "";
	$fieldLabelsstudent_attendance["Malay"]["amonth"] = "Bulan";
	$fieldToolTipsstudent_attendance["Malay"]["amonth"] = "";
	$fieldLabelsstudent_attendance["Malay"]["ayear"] = "Tahun";
	$fieldToolTipsstudent_attendance["Malay"]["ayear"] = "";
	$fieldLabelsstudent_attendance["Malay"]["1"] = "1";
	$fieldToolTipsstudent_attendance["Malay"]["1"] = "";
	$fieldLabelsstudent_attendance["Malay"]["2"] = "2";
	$fieldToolTipsstudent_attendance["Malay"]["2"] = "";
	$fieldLabelsstudent_attendance["Malay"]["3"] = "3";
	$fieldToolTipsstudent_attendance["Malay"]["3"] = "";
	$fieldLabelsstudent_attendance["Malay"]["4"] = "4";
	$fieldToolTipsstudent_attendance["Malay"]["4"] = "";
	$fieldLabelsstudent_attendance["Malay"]["5"] = "5";
	$fieldToolTipsstudent_attendance["Malay"]["5"] = "";
	$fieldLabelsstudent_attendance["Malay"]["6"] = "6";
	$fieldToolTipsstudent_attendance["Malay"]["6"] = "";
	$fieldLabelsstudent_attendance["Malay"]["StudentID"] = "Nama";
	$fieldToolTipsstudent_attendance["Malay"]["StudentID"] = "";
	$fieldLabelsstudent_attendance["Malay"]["7"] = "7";
	$fieldToolTipsstudent_attendance["Malay"]["7"] = "";
	$fieldLabelsstudent_attendance["Malay"]["8"] = "8";
	$fieldToolTipsstudent_attendance["Malay"]["8"] = "";
	$fieldLabelsstudent_attendance["Malay"]["9"] = "9";
	$fieldToolTipsstudent_attendance["Malay"]["9"] = "";
	$fieldLabelsstudent_attendance["Malay"]["10"] = "10";
	$fieldToolTipsstudent_attendance["Malay"]["10"] = "";
	$fieldLabelsstudent_attendance["Malay"]["11"] = "11";
	$fieldToolTipsstudent_attendance["Malay"]["11"] = "";
	$fieldLabelsstudent_attendance["Malay"]["12"] = "12";
	$fieldToolTipsstudent_attendance["Malay"]["12"] = "";
	$fieldLabelsstudent_attendance["Malay"]["13"] = "13";
	$fieldToolTipsstudent_attendance["Malay"]["13"] = "";
	$fieldLabelsstudent_attendance["Malay"]["14"] = "14";
	$fieldToolTipsstudent_attendance["Malay"]["14"] = "";
	$fieldLabelsstudent_attendance["Malay"]["15"] = "15";
	$fieldToolTipsstudent_attendance["Malay"]["15"] = "";
	$fieldLabelsstudent_attendance["Malay"]["16"] = "16";
	$fieldToolTipsstudent_attendance["Malay"]["16"] = "";
	$fieldLabelsstudent_attendance["Malay"]["17"] = "17";
	$fieldToolTipsstudent_attendance["Malay"]["17"] = "";
	$fieldLabelsstudent_attendance["Malay"]["18"] = "18";
	$fieldToolTipsstudent_attendance["Malay"]["18"] = "";
	$fieldLabelsstudent_attendance["Malay"]["19"] = "19";
	$fieldToolTipsstudent_attendance["Malay"]["19"] = "";
	$fieldLabelsstudent_attendance["Malay"]["20"] = "20";
	$fieldToolTipsstudent_attendance["Malay"]["20"] = "";
	$fieldLabelsstudent_attendance["Malay"]["21"] = "21";
	$fieldToolTipsstudent_attendance["Malay"]["21"] = "";
	$fieldLabelsstudent_attendance["Malay"]["22"] = "22";
	$fieldToolTipsstudent_attendance["Malay"]["22"] = "";
	$fieldLabelsstudent_attendance["Malay"]["23"] = "23";
	$fieldToolTipsstudent_attendance["Malay"]["23"] = "";
	$fieldLabelsstudent_attendance["Malay"]["24"] = "24";
	$fieldToolTipsstudent_attendance["Malay"]["24"] = "";
	$fieldLabelsstudent_attendance["Malay"]["25"] = "25";
	$fieldToolTipsstudent_attendance["Malay"]["25"] = "";
	$fieldLabelsstudent_attendance["Malay"]["26"] = "26";
	$fieldToolTipsstudent_attendance["Malay"]["26"] = "";
	$fieldLabelsstudent_attendance["Malay"]["27"] = "27";
	$fieldToolTipsstudent_attendance["Malay"]["27"] = "";
	$fieldLabelsstudent_attendance["Malay"]["28"] = "28";
	$fieldToolTipsstudent_attendance["Malay"]["28"] = "";
	$fieldLabelsstudent_attendance["Malay"]["29"] = "29";
	$fieldToolTipsstudent_attendance["Malay"]["29"] = "";
	$fieldLabelsstudent_attendance["Malay"]["30"] = "30";
	$fieldToolTipsstudent_attendance["Malay"]["30"] = "";
	$fieldLabelsstudent_attendance["Malay"]["31"] = "31";
	$fieldToolTipsstudent_attendance["Malay"]["31"] = "";
	$fieldLabelsstudent_attendance["Malay"]["MatricNo"] = "No Dikenali";
	$fieldToolTipsstudent_attendance["Malay"]["MatricNo"] = "";
	$fieldLabelsstudent_attendance["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsstudent_attendance["Malay"]["sesi"] = "";
	$fieldLabelsstudent_attendance["Malay"]["tahun"] = "Darjah";
	$fieldToolTipsstudent_attendance["Malay"]["tahun"] = "";
	$fieldLabelsstudent_attendance["Malay"]["Class"] = "Kelas";
	$fieldToolTipsstudent_attendance["Malay"]["Class"] = "";
	$fieldLabelsstudent_attendance["Malay"]["Name"] = "Name";
	$fieldToolTipsstudent_attendance["Malay"]["Name"] = "";
	if (count($fieldToolTipsstudent_attendance["Malay"]))
		$tdatastudent_attendance[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_attendance[".NCSearch"] = true;



$tdatastudent_attendance[".shortTableName"] = "student_attendance";
$tdatastudent_attendance[".nSecOptions"] = 0;
$tdatastudent_attendance[".recsPerRowList"] = 1;
$tdatastudent_attendance[".mainTableOwnerID"] = "";
$tdatastudent_attendance[".moveNext"] = 1;
$tdatastudent_attendance[".nType"] = 0;

$tdatastudent_attendance[".strOriginalTableName"] = "student_attendance";




$tdatastudent_attendance[".showAddInPopup"] = false;

$tdatastudent_attendance[".showEditInPopup"] = false;

$tdatastudent_attendance[".showViewInPopup"] = false;

$tdatastudent_attendance[".fieldsForRegister"] = array();
	
$tdatastudent_attendance[".listAjax"] = false;

	$tdatastudent_attendance[".audit"] = false;

	$tdatastudent_attendance[".locking"] = false;

$tdatastudent_attendance[".listIcons"] = true;
$tdatastudent_attendance[".inlineEdit"] = true;
$tdatastudent_attendance[".inlineAdd"] = true;



$tdatastudent_attendance[".delete"] = true;

$tdatastudent_attendance[".showSimpleSearchOptions"] = false;

$tdatastudent_attendance[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_attendance[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_attendance[".isUseAjaxSuggest"] = true;

$tdatastudent_attendance[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_attendance[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_attendance[".isUseTimeForSearch"] = false;




$tdatastudent_attendance[".allSearchFields"] = array();

$tdatastudent_attendance[".allSearchFields"][] = "StudentID";
$tdatastudent_attendance[".allSearchFields"][] = "MatricNo";
$tdatastudent_attendance[".allSearchFields"][] = "sesi";
$tdatastudent_attendance[".allSearchFields"][] = "tahun";
$tdatastudent_attendance[".allSearchFields"][] = "Class";
$tdatastudent_attendance[".allSearchFields"][] = "amonth";
$tdatastudent_attendance[".allSearchFields"][] = "ayear";

$tdatastudent_attendance[".googleLikeFields"][] = "StudentID";
$tdatastudent_attendance[".googleLikeFields"][] = "Class";
$tdatastudent_attendance[".googleLikeFields"][] = "Name";

$tdatastudent_attendance[".panelSearchFields"][] = "StudentID";
$tdatastudent_attendance[".panelSearchFields"][] = "MatricNo";
$tdatastudent_attendance[".panelSearchFields"][] = "sesi";
$tdatastudent_attendance[".panelSearchFields"][] = "tahun";
$tdatastudent_attendance[".panelSearchFields"][] = "Class";
$tdatastudent_attendance[".panelSearchFields"][] = "amonth";
$tdatastudent_attendance[".panelSearchFields"][] = "ayear";

$tdatastudent_attendance[".advSearchFields"][] = "StudentID";
$tdatastudent_attendance[".advSearchFields"][] = "MatricNo";
$tdatastudent_attendance[".advSearchFields"][] = "sesi";
$tdatastudent_attendance[".advSearchFields"][] = "tahun";
$tdatastudent_attendance[".advSearchFields"][] = "Class";
$tdatastudent_attendance[".advSearchFields"][] = "amonth";
$tdatastudent_attendance[".advSearchFields"][] = "ayear";

$tdatastudent_attendance[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main

$tdatastudent_attendance[".noRecordsFirstPage"] = true;


$tdatastudent_attendance[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY tahun DESC, Name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_attendance[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_attendance[".orderindexes"] = array();

$tdatastudent_attendance[".sqlHead"] = "SELECT student_attendance.sid,  student_attendance.StudentID,  student_attendance.amonth,  student_attendance.ayear,  student_attendance.`1`,  student_attendance.`2`,  student_attendance.`3`,  student_attendance.`4`,  student_attendance.`5`,  student_attendance.`6`,  student_attendance.`7`,  student_attendance.`8`,  student_attendance.`9`,  student_attendance.`10`,  student_attendance.`11`,  student_attendance.`12`,  student_attendance.`13`,  student_attendance.`14`,  student_attendance.`15`,  student_attendance.`16`,  student_attendance.`17`,  student_attendance.`18`,  student_attendance.`19`,  student_attendance.`20`,  student_attendance.`21`,  student_attendance.`22`,  student_attendance.`23`,  student_attendance.`24`,  student_attendance.`25`,  student_attendance.`26`,  student_attendance.`27`,  student_attendance.`28`,  student_attendance.`29`,  student_attendance.`30`,  student_attendance.`31`,  student_info.MatricNo,  student_info.sesi,  student_info.tahun,  student_info.`Class`,  student_info.Name";
$tdatastudent_attendance[".sqlFrom"] = "FROM student_attendance  INNER JOIN student_info ON student_attendance.StudentID = student_info.StudentID";
$tdatastudent_attendance[".sqlWhereExpr"] = "";
$tdatastudent_attendance[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_attendance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_attendance[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_attendance = array();
$tableKeysstudent_attendance[] = "sid";
$tdatastudent_attendance[".Keys"] = $tableKeysstudent_attendance;

$tdatastudent_attendance[".listFields"] = array();
$tdatastudent_attendance[".listFields"][] = "StudentID";
$tdatastudent_attendance[".listFields"][] = "tahun";
$tdatastudent_attendance[".listFields"][] = "sesi";
$tdatastudent_attendance[".listFields"][] = "amonth";
$tdatastudent_attendance[".listFields"][] = "ayear";
$tdatastudent_attendance[".listFields"][] = "1";
$tdatastudent_attendance[".listFields"][] = "2";
$tdatastudent_attendance[".listFields"][] = "3";
$tdatastudent_attendance[".listFields"][] = "4";
$tdatastudent_attendance[".listFields"][] = "5";
$tdatastudent_attendance[".listFields"][] = "6";
$tdatastudent_attendance[".listFields"][] = "7";
$tdatastudent_attendance[".listFields"][] = "8";
$tdatastudent_attendance[".listFields"][] = "9";
$tdatastudent_attendance[".listFields"][] = "10";
$tdatastudent_attendance[".listFields"][] = "11";
$tdatastudent_attendance[".listFields"][] = "12";
$tdatastudent_attendance[".listFields"][] = "13";
$tdatastudent_attendance[".listFields"][] = "14";
$tdatastudent_attendance[".listFields"][] = "15";
$tdatastudent_attendance[".listFields"][] = "16";
$tdatastudent_attendance[".listFields"][] = "17";
$tdatastudent_attendance[".listFields"][] = "18";
$tdatastudent_attendance[".listFields"][] = "19";
$tdatastudent_attendance[".listFields"][] = "20";
$tdatastudent_attendance[".listFields"][] = "21";
$tdatastudent_attendance[".listFields"][] = "22";
$tdatastudent_attendance[".listFields"][] = "23";
$tdatastudent_attendance[".listFields"][] = "24";
$tdatastudent_attendance[".listFields"][] = "25";
$tdatastudent_attendance[".listFields"][] = "26";
$tdatastudent_attendance[".listFields"][] = "27";
$tdatastudent_attendance[".listFields"][] = "28";
$tdatastudent_attendance[".listFields"][] = "29";
$tdatastudent_attendance[".listFields"][] = "30";
$tdatastudent_attendance[".listFields"][] = "31";

$tdatastudent_attendance[".viewFields"] = array();

$tdatastudent_attendance[".addFields"] = array();

$tdatastudent_attendance[".inlineAddFields"] = array();
$tdatastudent_attendance[".inlineAddFields"][] = "StudentID";
$tdatastudent_attendance[".inlineAddFields"][] = "amonth";
$tdatastudent_attendance[".inlineAddFields"][] = "ayear";
$tdatastudent_attendance[".inlineAddFields"][] = "1";
$tdatastudent_attendance[".inlineAddFields"][] = "2";
$tdatastudent_attendance[".inlineAddFields"][] = "3";
$tdatastudent_attendance[".inlineAddFields"][] = "4";
$tdatastudent_attendance[".inlineAddFields"][] = "5";
$tdatastudent_attendance[".inlineAddFields"][] = "6";
$tdatastudent_attendance[".inlineAddFields"][] = "7";
$tdatastudent_attendance[".inlineAddFields"][] = "8";
$tdatastudent_attendance[".inlineAddFields"][] = "9";
$tdatastudent_attendance[".inlineAddFields"][] = "10";
$tdatastudent_attendance[".inlineAddFields"][] = "11";
$tdatastudent_attendance[".inlineAddFields"][] = "12";
$tdatastudent_attendance[".inlineAddFields"][] = "13";
$tdatastudent_attendance[".inlineAddFields"][] = "14";
$tdatastudent_attendance[".inlineAddFields"][] = "15";
$tdatastudent_attendance[".inlineAddFields"][] = "16";
$tdatastudent_attendance[".inlineAddFields"][] = "17";
$tdatastudent_attendance[".inlineAddFields"][] = "18";
$tdatastudent_attendance[".inlineAddFields"][] = "19";
$tdatastudent_attendance[".inlineAddFields"][] = "20";
$tdatastudent_attendance[".inlineAddFields"][] = "21";
$tdatastudent_attendance[".inlineAddFields"][] = "22";
$tdatastudent_attendance[".inlineAddFields"][] = "23";
$tdatastudent_attendance[".inlineAddFields"][] = "24";
$tdatastudent_attendance[".inlineAddFields"][] = "25";
$tdatastudent_attendance[".inlineAddFields"][] = "26";
$tdatastudent_attendance[".inlineAddFields"][] = "27";
$tdatastudent_attendance[".inlineAddFields"][] = "28";
$tdatastudent_attendance[".inlineAddFields"][] = "29";
$tdatastudent_attendance[".inlineAddFields"][] = "30";
$tdatastudent_attendance[".inlineAddFields"][] = "31";

$tdatastudent_attendance[".editFields"] = array();

$tdatastudent_attendance[".inlineEditFields"] = array();
$tdatastudent_attendance[".inlineEditFields"][] = "1";
$tdatastudent_attendance[".inlineEditFields"][] = "2";
$tdatastudent_attendance[".inlineEditFields"][] = "3";
$tdatastudent_attendance[".inlineEditFields"][] = "4";
$tdatastudent_attendance[".inlineEditFields"][] = "5";
$tdatastudent_attendance[".inlineEditFields"][] = "6";
$tdatastudent_attendance[".inlineEditFields"][] = "7";
$tdatastudent_attendance[".inlineEditFields"][] = "8";
$tdatastudent_attendance[".inlineEditFields"][] = "9";
$tdatastudent_attendance[".inlineEditFields"][] = "10";
$tdatastudent_attendance[".inlineEditFields"][] = "11";
$tdatastudent_attendance[".inlineEditFields"][] = "12";
$tdatastudent_attendance[".inlineEditFields"][] = "13";
$tdatastudent_attendance[".inlineEditFields"][] = "14";
$tdatastudent_attendance[".inlineEditFields"][] = "15";
$tdatastudent_attendance[".inlineEditFields"][] = "16";
$tdatastudent_attendance[".inlineEditFields"][] = "17";
$tdatastudent_attendance[".inlineEditFields"][] = "18";
$tdatastudent_attendance[".inlineEditFields"][] = "19";
$tdatastudent_attendance[".inlineEditFields"][] = "20";
$tdatastudent_attendance[".inlineEditFields"][] = "21";
$tdatastudent_attendance[".inlineEditFields"][] = "22";
$tdatastudent_attendance[".inlineEditFields"][] = "23";
$tdatastudent_attendance[".inlineEditFields"][] = "24";
$tdatastudent_attendance[".inlineEditFields"][] = "25";
$tdatastudent_attendance[".inlineEditFields"][] = "26";
$tdatastudent_attendance[".inlineEditFields"][] = "27";
$tdatastudent_attendance[".inlineEditFields"][] = "28";
$tdatastudent_attendance[".inlineEditFields"][] = "29";
$tdatastudent_attendance[".inlineEditFields"][] = "30";
$tdatastudent_attendance[".inlineEditFields"][] = "31";

$tdatastudent_attendance[".exportFields"] = array();

$tdatastudent_attendance[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Sid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "student_attendance.sid";
	
		
		
				
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
	
		
		
	$tdatastudent_attendance["sid"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_attendance.StudentID";
	
		
		
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
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_attendance["StudentID"] = $fdata;
//	amonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "amonth";
	$fdata["GoodName"] = "amonth";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Bulan"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "amonth"; 
		$fdata["FullName"] = "student_attendance.amonth";
	
		
		
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
				
		
			
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=51";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_attendance["amonth"] = $fdata;
//	ayear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ayear";
	$fdata["GoodName"] = "ayear";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Tahun"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ayear"; 
		$fdata["FullName"] = "student_attendance.ayear";
	
		
		
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
	
		
		
	$tdatastudent_attendance["ayear"] = $fdata;
//	1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "1";
	$fdata["GoodName"] = "1";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "1"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "1"; 
		$fdata["FullName"] = "student_attendance.`1`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["1"] = $fdata;
//	2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "2";
	$fdata["GoodName"] = "2";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "2"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "2"; 
		$fdata["FullName"] = "student_attendance.`2`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["2"] = $fdata;
//	3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "3";
	$fdata["GoodName"] = "3";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "3"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "3"; 
		$fdata["FullName"] = "student_attendance.`3`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["3"] = $fdata;
//	4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "4";
	$fdata["GoodName"] = "4";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "4"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "4"; 
		$fdata["FullName"] = "student_attendance.`4`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["4"] = $fdata;
//	5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "5";
	$fdata["GoodName"] = "5";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "5"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "5"; 
		$fdata["FullName"] = "student_attendance.`5`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["5"] = $fdata;
//	6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "6";
	$fdata["GoodName"] = "6";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "6"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "6"; 
		$fdata["FullName"] = "student_attendance.`6`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["6"] = $fdata;
//	7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "7";
	$fdata["GoodName"] = "7";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "7"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "7"; 
		$fdata["FullName"] = "student_attendance.`7`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["7"] = $fdata;
//	8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "8";
	$fdata["GoodName"] = "8";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "8"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "8"; 
		$fdata["FullName"] = "student_attendance.`8`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["8"] = $fdata;
//	9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "9";
	$fdata["GoodName"] = "9";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "9"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "9"; 
		$fdata["FullName"] = "student_attendance.`9`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["9"] = $fdata;
//	10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "10";
	$fdata["GoodName"] = "10";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "10"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "10"; 
		$fdata["FullName"] = "student_attendance.`10`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["10"] = $fdata;
//	11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "11";
	$fdata["GoodName"] = "11";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "11"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "11"; 
		$fdata["FullName"] = "student_attendance.`11`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["11"] = $fdata;
//	12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "12";
	$fdata["GoodName"] = "12";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "12"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "12"; 
		$fdata["FullName"] = "student_attendance.`12`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["12"] = $fdata;
//	13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "13";
	$fdata["GoodName"] = "13";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "13"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "13"; 
		$fdata["FullName"] = "student_attendance.`13`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["13"] = $fdata;
//	14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "14";
	$fdata["GoodName"] = "14";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "14"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "14"; 
		$fdata["FullName"] = "student_attendance.`14`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["14"] = $fdata;
//	15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "15";
	$fdata["GoodName"] = "15";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "15"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "15"; 
		$fdata["FullName"] = "student_attendance.`15`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["15"] = $fdata;
//	16
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "16";
	$fdata["GoodName"] = "16";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "16"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "16"; 
		$fdata["FullName"] = "student_attendance.`16`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["16"] = $fdata;
//	17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "17";
	$fdata["GoodName"] = "17";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "17"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "17"; 
		$fdata["FullName"] = "student_attendance.`17`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["17"] = $fdata;
//	18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "18";
	$fdata["GoodName"] = "18";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "18"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "18"; 
		$fdata["FullName"] = "student_attendance.`18`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["18"] = $fdata;
//	19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "19";
	$fdata["GoodName"] = "19";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "19"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "19"; 
		$fdata["FullName"] = "student_attendance.`19`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["19"] = $fdata;
//	20
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "20";
	$fdata["GoodName"] = "20";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "20"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "20"; 
		$fdata["FullName"] = "student_attendance.`20`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["20"] = $fdata;
//	21
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "21";
	$fdata["GoodName"] = "21";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "21"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "21"; 
		$fdata["FullName"] = "student_attendance.`21`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["21"] = $fdata;
//	22
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "22";
	$fdata["GoodName"] = "22";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "22"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "22"; 
		$fdata["FullName"] = "student_attendance.`22`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["22"] = $fdata;
//	23
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "23";
	$fdata["GoodName"] = "23";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "23"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "23"; 
		$fdata["FullName"] = "student_attendance.`23`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["23"] = $fdata;
//	24
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "24";
	$fdata["GoodName"] = "24";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "24"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "24"; 
		$fdata["FullName"] = "student_attendance.`24`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["24"] = $fdata;
//	25
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "25";
	$fdata["GoodName"] = "25";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "25"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "25"; 
		$fdata["FullName"] = "student_attendance.`25`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["25"] = $fdata;
//	26
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "26";
	$fdata["GoodName"] = "26";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "26"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "26"; 
		$fdata["FullName"] = "student_attendance.`26`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["26"] = $fdata;
//	27
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "27";
	$fdata["GoodName"] = "27";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "27"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "27"; 
		$fdata["FullName"] = "student_attendance.`27`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["27"] = $fdata;
//	28
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "28";
	$fdata["GoodName"] = "28";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "28"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "28"; 
		$fdata["FullName"] = "student_attendance.`28`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["28"] = $fdata;
//	29
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "29";
	$fdata["GoodName"] = "29";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "29"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "29"; 
		$fdata["FullName"] = "student_attendance.`29`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["29"] = $fdata;
//	30
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "30";
	$fdata["GoodName"] = "30";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "30"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "30"; 
		$fdata["FullName"] = "student_attendance.`30`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["30"] = $fdata;
//	31
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "31";
	$fdata["GoodName"] = "31";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "31"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "31"; 
		$fdata["FullName"] = "student_attendance.`31`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
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
	
		
		
	$tdatastudent_attendance["31"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "No Dikenali"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatastudent_attendance["MatricNo"] = $fdata;
//	sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "sesi";
	$fdata["GoodName"] = "sesi";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Sesi"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatastudent_attendance["sesi"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Darjah"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatastudent_attendance["tahun"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatastudent_attendance["Class"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "student_info.Name";
	
		
		
				
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
	
		
		
	$tdatastudent_attendance["Name"] = $fdata;

	
$tables_data["student_attendance"]=&$tdatastudent_attendance;
$field_labels["student_attendance"] = &$fieldLabelsstudent_attendance;
$fieldToolTips["student_attendance"] = &$fieldToolTipsstudent_attendance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_attendance"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_attendance"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_attendance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_attendance.sid,  student_attendance.StudentID,  student_attendance.amonth,  student_attendance.ayear,  student_attendance.`1`,  student_attendance.`2`,  student_attendance.`3`,  student_attendance.`4`,  student_attendance.`5`,  student_attendance.`6`,  student_attendance.`7`,  student_attendance.`8`,  student_attendance.`9`,  student_attendance.`10`,  student_attendance.`11`,  student_attendance.`12`,  student_attendance.`13`,  student_attendance.`14`,  student_attendance.`15`,  student_attendance.`16`,  student_attendance.`17`,  student_attendance.`18`,  student_attendance.`19`,  student_attendance.`20`,  student_attendance.`21`,  student_attendance.`22`,  student_attendance.`23`,  student_attendance.`24`,  student_attendance.`25`,  student_attendance.`26`,  student_attendance.`27`,  student_attendance.`28`,  student_attendance.`29`,  student_attendance.`30`,  student_attendance.`31`,  student_info.MatricNo,  student_info.sesi,  student_info.tahun,  student_info.`Class`,  student_info.Name";
$proto0["m_strFrom"] = "FROM student_attendance  INNER JOIN student_info ON student_attendance.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tahun DESC, Name";
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
	"m_strName" => "sid",
	"m_strTable" => "student_attendance"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_attendance"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "amonth",
	"m_strTable" => "student_attendance"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ayear",
	"m_strTable" => "student_attendance"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "1",
	"m_strTable" => "student_attendance"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "2",
	"m_strTable" => "student_attendance"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "3",
	"m_strTable" => "student_attendance"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "4",
	"m_strTable" => "student_attendance"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "5",
	"m_strTable" => "student_attendance"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "6",
	"m_strTable" => "student_attendance"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "7",
	"m_strTable" => "student_attendance"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "8",
	"m_strTable" => "student_attendance"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "9",
	"m_strTable" => "student_attendance"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "10",
	"m_strTable" => "student_attendance"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "11",
	"m_strTable" => "student_attendance"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "12",
	"m_strTable" => "student_attendance"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "13",
	"m_strTable" => "student_attendance"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "14",
	"m_strTable" => "student_attendance"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "15",
	"m_strTable" => "student_attendance"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "16",
	"m_strTable" => "student_attendance"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "17",
	"m_strTable" => "student_attendance"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "18",
	"m_strTable" => "student_attendance"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "19",
	"m_strTable" => "student_attendance"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "20",
	"m_strTable" => "student_attendance"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "21",
	"m_strTable" => "student_attendance"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "22",
	"m_strTable" => "student_attendance"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "23",
	"m_strTable" => "student_attendance"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "24",
	"m_strTable" => "student_attendance"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "25",
	"m_strTable" => "student_attendance"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "26",
	"m_strTable" => "student_attendance"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "27",
	"m_strTable" => "student_attendance"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "28",
	"m_strTable" => "student_attendance"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "29",
	"m_strTable" => "student_attendance"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "30",
	"m_strTable" => "student_attendance"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "31",
	"m_strTable" => "student_attendance"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "sesi",
	"m_strTable" => "student_info"
));

$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto85=array();
$proto85["m_link"] = "SQLL_MAIN";
			$proto86=array();
$proto86["m_strName"] = "student_attendance";
$proto86["m_columns"] = array();
$proto86["m_columns"][] = "sid";
$proto86["m_columns"][] = "StudentID";
$proto86["m_columns"][] = "amonth";
$proto86["m_columns"][] = "ayear";
$proto86["m_columns"][] = "1";
$proto86["m_columns"][] = "2";
$proto86["m_columns"][] = "3";
$proto86["m_columns"][] = "4";
$proto86["m_columns"][] = "5";
$proto86["m_columns"][] = "6";
$proto86["m_columns"][] = "7";
$proto86["m_columns"][] = "8";
$proto86["m_columns"][] = "9";
$proto86["m_columns"][] = "10";
$proto86["m_columns"][] = "11";
$proto86["m_columns"][] = "12";
$proto86["m_columns"][] = "13";
$proto86["m_columns"][] = "14";
$proto86["m_columns"][] = "15";
$proto86["m_columns"][] = "16";
$proto86["m_columns"][] = "17";
$proto86["m_columns"][] = "18";
$proto86["m_columns"][] = "19";
$proto86["m_columns"][] = "20";
$proto86["m_columns"][] = "21";
$proto86["m_columns"][] = "22";
$proto86["m_columns"][] = "23";
$proto86["m_columns"][] = "24";
$proto86["m_columns"][] = "25";
$proto86["m_columns"][] = "26";
$proto86["m_columns"][] = "27";
$proto86["m_columns"][] = "28";
$proto86["m_columns"][] = "29";
$proto86["m_columns"][] = "30";
$proto86["m_columns"][] = "31";
$obj = new SQLTable($proto86);

$proto85["m_table"] = $obj;
$proto85["m_alias"] = "";
$proto87=array();
$proto87["m_sql"] = "";
$proto87["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto87["m_column"]=$obj;
$proto87["m_contained"] = array();
$proto87["m_strCase"] = "";
$proto87["m_havingmode"] = "0";
$proto87["m_inBrackets"] = "0";
$proto87["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto87);

$proto85["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto85);

$proto0["m_fromlist"][]=$obj;
												$proto89=array();
$proto89["m_link"] = "SQLL_INNERJOIN";
			$proto90=array();
$proto90["m_strName"] = "student_info";
$proto90["m_columns"] = array();
$proto90["m_columns"][] = "StudentID";
$proto90["m_columns"][] = "Name";
$proto90["m_columns"][] = "ICNO";
$proto90["m_columns"][] = "DOB";
$proto90["m_columns"][] = "MatricNo";
$proto90["m_columns"][] = "Email";
$proto90["m_columns"][] = "Access";
$proto90["m_columns"][] = "DateJoin";
$proto90["m_columns"][] = "Dateout";
$proto90["m_columns"][] = "Gender";
$proto90["m_columns"][] = "Address1";
$proto90["m_columns"][] = "City";
$proto90["m_columns"][] = "Postcode";
$proto90["m_columns"][] = "StateID";
$proto90["m_columns"][] = "HomeTelephone";
$proto90["m_columns"][] = "Nationality";
$proto90["m_columns"][] = "Status";
$proto90["m_columns"][] = "Disability";
$proto90["m_columns"][] = "MedicalCondition";
$proto90["m_columns"][] = "race";
$proto90["m_columns"][] = "Class";
$proto90["m_columns"][] = "sesi";
$proto90["m_columns"][] = "tahun";
$proto90["m_columns"][] = "f1_name";
$proto90["m_columns"][] = "f1_tel";
$proto90["m_columns"][] = "f1_relation";
$proto90["m_columns"][] = "f1_job";
$proto90["m_columns"][] = "f2_name";
$proto90["m_columns"][] = "f2_tel";
$proto90["m_columns"][] = "f2_relation";
$proto90["m_columns"][] = "f2_job";
$proto90["m_columns"][] = "blood";
$proto90["m_columns"][] = "hostel_in";
$proto90["m_columns"][] = "photo";
$obj = new SQLTable($proto90);

$proto89["m_table"] = $obj;
$proto89["m_alias"] = "";
$proto91=array();
$proto91["m_sql"] = "student_attendance.StudentID = student_info.StudentID";
$proto91["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_attendance"
));

$proto91["m_column"]=$obj;
$proto91["m_contained"] = array();
$proto91["m_strCase"] = "= student_info.StudentID";
$proto91["m_havingmode"] = "0";
$proto91["m_inBrackets"] = "0";
$proto91["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto91);

$proto89["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto89);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto93=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tahun "
));

$proto93["m_column"]=$obj;
$proto93["m_bAsc"] = 0;
$proto93["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto93);

$proto0["m_orderby"][]=$obj;					
												$proto95=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Name"
));

$proto95["m_column"]=$obj;
$proto95["m_bAsc"] = 1;
$proto95["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto95);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_attendance = createSqlQuery_student_attendance();
																																								$tdatastudent_attendance[".sqlquery"] = $queryData_student_attendance;

$tableEvents["student_attendance"] = new eventsBase;
$tdatastudent_attendance[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_attendance");

?>