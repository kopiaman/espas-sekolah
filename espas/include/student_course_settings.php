<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_course = array();
	$tdatastudent_course[".NumberOfChars"] = 80; 
	$tdatastudent_course[".ShortName"] = "student_course";
	$tdatastudent_course[".OwnerID"] = "";
	$tdatastudent_course[".OriginalTable"] = "student_course";

//	field labels
$fieldLabelsstudent_course = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstudent_course["Malay"] = array();
	$fieldToolTipsstudent_course["Malay"] = array();
	$fieldLabelsstudent_course["Malay"]["StudentID"] = "Pelajar";
	$fieldToolTipsstudent_course["Malay"]["StudentID"] = "";
	$fieldLabelsstudent_course["Malay"]["s1"] = "Al-QURAN";
	$fieldToolTipsstudent_course["Malay"]["s1"] = "";
	$fieldLabelsstudent_course["Malay"]["s2"] = "AKHLAK";
	$fieldToolTipsstudent_course["Malay"]["s2"] = "";
	$fieldLabelsstudent_course["Malay"]["s3"] = "FEKAH";
	$fieldToolTipsstudent_course["Malay"]["s3"] = "";
	$fieldLabelsstudent_course["Malay"]["s4"] = "TAUHID";
	$fieldToolTipsstudent_course["Malay"]["s4"] = "";
	$fieldLabelsstudent_course["Malay"]["s5"] = "SIRAH";
	$fieldToolTipsstudent_course["Malay"]["s5"] = "";
	$fieldLabelsstudent_course["Malay"]["s6"] = "BH ARAB";
	$fieldToolTipsstudent_course["Malay"]["s6"] = "";
	$fieldLabelsstudent_course["Malay"]["s7"] = "TAJWID";
	$fieldToolTipsstudent_course["Malay"]["s7"] = "";
	$fieldLabelsstudent_course["Malay"]["s8"] = "JAWI*";
	$fieldToolTipsstudent_course["Malay"]["s8"] = "";
	$fieldLabelsstudent_course["Malay"]["s9"] = "KHAT*";
	$fieldToolTipsstudent_course["Malay"]["s9"] = "";
	$fieldLabelsstudent_course["Malay"]["scid"] = "Scid";
	$fieldToolTipsstudent_course["Malay"]["scid"] = "";
	$fieldLabelsstudent_course["Malay"]["sum"] = "Jumlah";
	$fieldToolTipsstudent_course["Malay"]["sum"] = "";
	$fieldLabelsstudent_course["Malay"]["etype"] = "Peperiksaan/Ujian";
	$fieldToolTipsstudent_course["Malay"]["etype"] = "";
	$fieldLabelsstudent_course["Malay"]["tahun"] = "Tahun";
	$fieldToolTipsstudent_course["Malay"]["tahun"] = "";
	$fieldLabelsstudent_course["Malay"]["Class"] = "Kelas";
	$fieldToolTipsstudent_course["Malay"]["Class"] = "";
	if (count($fieldToolTipsstudent_course["Malay"]))
		$tdatastudent_course[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_course[".NCSearch"] = true;



$tdatastudent_course[".shortTableName"] = "student_course";
$tdatastudent_course[".nSecOptions"] = 0;
$tdatastudent_course[".recsPerRowList"] = 1;
$tdatastudent_course[".mainTableOwnerID"] = "";
$tdatastudent_course[".moveNext"] = 1;
$tdatastudent_course[".nType"] = 0;

$tdatastudent_course[".strOriginalTableName"] = "student_course";




$tdatastudent_course[".showAddInPopup"] = false;

$tdatastudent_course[".showEditInPopup"] = false;

$tdatastudent_course[".showViewInPopup"] = false;

$tdatastudent_course[".fieldsForRegister"] = array();
	
$tdatastudent_course[".listAjax"] = false;

	$tdatastudent_course[".audit"] = false;

	$tdatastudent_course[".locking"] = false;

$tdatastudent_course[".listIcons"] = true;
$tdatastudent_course[".inlineEdit"] = true;
$tdatastudent_course[".inlineAdd"] = true;



$tdatastudent_course[".delete"] = true;

$tdatastudent_course[".showSimpleSearchOptions"] = false;

$tdatastudent_course[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_course[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_course[".isUseAjaxSuggest"] = true;

$tdatastudent_course[".rowHighlite"] = true;

// button handlers file names
$tdatastudent_course[".isUsebuttonHandlers"] = true;
$tdatastudent_course[".isUsebuttonHandlers"] = true;
$tdatastudent_course[".isUsebuttonHandlers"] = true;
$tdatastudent_course[".isUsebuttonHandlers"] = true;
$tdatastudent_course[".isUsebuttonHandlers"] = true;
$tdatastudent_course[".isUsebuttonHandlers"] = true;
$tdatastudent_course[".isUsebuttonHandlers"] = true;
$tdatastudent_course[".isUsebuttonHandlers"] = true;
$tdatastudent_course[".isUsebuttonHandlers"] = true;
$tdatastudent_course[".isUsebuttonHandlers"] = true;

$tdatastudent_course[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_course[".isUseTimeForSearch"] = false;




$tdatastudent_course[".allSearchFields"] = array();

$tdatastudent_course[".allSearchFields"][] = "StudentID";
$tdatastudent_course[".allSearchFields"][] = "tahun";
$tdatastudent_course[".allSearchFields"][] = "Class";
$tdatastudent_course[".allSearchFields"][] = "etype";
$tdatastudent_course[".allSearchFields"][] = "s1";
$tdatastudent_course[".allSearchFields"][] = "s2";
$tdatastudent_course[".allSearchFields"][] = "s3";
$tdatastudent_course[".allSearchFields"][] = "s4";
$tdatastudent_course[".allSearchFields"][] = "s5";
$tdatastudent_course[".allSearchFields"][] = "s6";
$tdatastudent_course[".allSearchFields"][] = "s7";
$tdatastudent_course[".allSearchFields"][] = "s8";
$tdatastudent_course[".allSearchFields"][] = "s9";

$tdatastudent_course[".googleLikeFields"][] = "scid";
$tdatastudent_course[".googleLikeFields"][] = "StudentID";
$tdatastudent_course[".googleLikeFields"][] = "s1";
$tdatastudent_course[".googleLikeFields"][] = "s2";
$tdatastudent_course[".googleLikeFields"][] = "s3";
$tdatastudent_course[".googleLikeFields"][] = "s4";
$tdatastudent_course[".googleLikeFields"][] = "s5";
$tdatastudent_course[".googleLikeFields"][] = "s6";
$tdatastudent_course[".googleLikeFields"][] = "s7";
$tdatastudent_course[".googleLikeFields"][] = "s8";
$tdatastudent_course[".googleLikeFields"][] = "s9";
$tdatastudent_course[".googleLikeFields"][] = "sum";
$tdatastudent_course[".googleLikeFields"][] = "etype";
$tdatastudent_course[".googleLikeFields"][] = "tahun";
$tdatastudent_course[".googleLikeFields"][] = "Class";


$tdatastudent_course[".advSearchFields"][] = "StudentID";
$tdatastudent_course[".advSearchFields"][] = "tahun";
$tdatastudent_course[".advSearchFields"][] = "Class";
$tdatastudent_course[".advSearchFields"][] = "etype";
$tdatastudent_course[".advSearchFields"][] = "s1";
$tdatastudent_course[".advSearchFields"][] = "s2";
$tdatastudent_course[".advSearchFields"][] = "s3";
$tdatastudent_course[".advSearchFields"][] = "s4";
$tdatastudent_course[".advSearchFields"][] = "s5";
$tdatastudent_course[".advSearchFields"][] = "s6";
$tdatastudent_course[".advSearchFields"][] = "s7";
$tdatastudent_course[".advSearchFields"][] = "s8";
$tdatastudent_course[".advSearchFields"][] = "s9";

$tdatastudent_course[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_course[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_course[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_course[".orderindexes"] = array();

$tdatastudent_course[".sqlHead"] = "SELECT student_course.scid,  student_course.StudentID,  student_course.s1,  student_course.s2,  student_course.s3,  student_course.s4,  student_course.s5,  student_course.s6,  student_course.s7,  student_course.s8,  student_course.s9,  SUM(s1+s2+s3+s4+s5+s6+s7) AS `sum`,  student_course.etype,  student_info.tahun,  student_info.`Class`";
$tdatastudent_course[".sqlFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$tdatastudent_course[".sqlWhereExpr"] = "";
$tdatastudent_course[".sqlTail"] = "GROUP BY student_course.StudentID, student_course.etype";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_course[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_course[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_course = array();
$tableKeysstudent_course[] = "scid";
$tdatastudent_course[".Keys"] = $tableKeysstudent_course;

$tdatastudent_course[".listFields"] = array();
$tdatastudent_course[".listFields"][] = "StudentID";
$tdatastudent_course[".listFields"][] = "tahun";
$tdatastudent_course[".listFields"][] = "Class";
$tdatastudent_course[".listFields"][] = "etype";
$tdatastudent_course[".listFields"][] = "s1";
$tdatastudent_course[".listFields"][] = "s2";
$tdatastudent_course[".listFields"][] = "s3";
$tdatastudent_course[".listFields"][] = "s4";
$tdatastudent_course[".listFields"][] = "s5";
$tdatastudent_course[".listFields"][] = "s6";
$tdatastudent_course[".listFields"][] = "s7";
$tdatastudent_course[".listFields"][] = "s8";
$tdatastudent_course[".listFields"][] = "s9";
$tdatastudent_course[".listFields"][] = "sum";

$tdatastudent_course[".viewFields"] = array();

$tdatastudent_course[".addFields"] = array();

$tdatastudent_course[".inlineAddFields"] = array();
$tdatastudent_course[".inlineAddFields"][] = "StudentID";
$tdatastudent_course[".inlineAddFields"][] = "etype";
$tdatastudent_course[".inlineAddFields"][] = "s1";
$tdatastudent_course[".inlineAddFields"][] = "s2";
$tdatastudent_course[".inlineAddFields"][] = "s3";
$tdatastudent_course[".inlineAddFields"][] = "s4";
$tdatastudent_course[".inlineAddFields"][] = "s5";
$tdatastudent_course[".inlineAddFields"][] = "s6";
$tdatastudent_course[".inlineAddFields"][] = "s7";
$tdatastudent_course[".inlineAddFields"][] = "s8";
$tdatastudent_course[".inlineAddFields"][] = "s9";

$tdatastudent_course[".editFields"] = array();

$tdatastudent_course[".inlineEditFields"] = array();
$tdatastudent_course[".inlineEditFields"][] = "s1";
$tdatastudent_course[".inlineEditFields"][] = "s2";
$tdatastudent_course[".inlineEditFields"][] = "s3";
$tdatastudent_course[".inlineEditFields"][] = "s4";
$tdatastudent_course[".inlineEditFields"][] = "s5";
$tdatastudent_course[".inlineEditFields"][] = "s6";
$tdatastudent_course[".inlineEditFields"][] = "s7";
$tdatastudent_course[".inlineEditFields"][] = "s8";
$tdatastudent_course[".inlineEditFields"][] = "s9";

$tdatastudent_course[".exportFields"] = array();

$tdatastudent_course[".printFields"] = array();

//	scid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "scid";
	$fdata["GoodName"] = "scid";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Scid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "scid"; 
		$fdata["FullName"] = "student_course.scid";
	
		
		
				
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
	
		
		
	$tdatastudent_course["scid"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Pelajar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_course.StudentID";
	
		
		
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
	
		
		
	$tdatastudent_course["StudentID"] = $fdata;
//	s1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "s1";
	$fdata["GoodName"] = "s1";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Al-QURAN"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s1"; 
		$fdata["FullName"] = "student_course.s1";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:20px;";
	$edata["controlWidth"] = 20;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course["s1"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "AKHLAK"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s2"; 
		$fdata["FullName"] = "student_course.s2";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:20px;";
	$edata["controlWidth"] = 20;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "FEKAH"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s3"; 
		$fdata["FullName"] = "student_course.s3";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:20px;";
	$edata["controlWidth"] = 20;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "TAUHID"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s4"; 
		$fdata["FullName"] = "student_course.s4";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:20px;";
	$edata["controlWidth"] = 20;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "SIRAH"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s5"; 
		$fdata["FullName"] = "student_course.s5";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:20px;";
	$edata["controlWidth"] = 20;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course["s5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "BH ARAB"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s6"; 
		$fdata["FullName"] = "student_course.s6";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:20px;";
	$edata["controlWidth"] = 20;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "TAJWID"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s7"; 
		$fdata["FullName"] = "student_course.s7";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:20px;";
	$edata["controlWidth"] = 20;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course["s7"] = $fdata;
//	s8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "s8";
	$fdata["GoodName"] = "s8";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "JAWI*"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s8"; 
		$fdata["FullName"] = "student_course.s8";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:20px;";
	$edata["controlWidth"] = 20;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course["s8"] = $fdata;
//	s9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s9";
	$fdata["GoodName"] = "s9";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "KHAT*"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s9"; 
		$fdata["FullName"] = "student_course.s9";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:20px;";
	$edata["controlWidth"] = 20;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course["s9"] = $fdata;
//	sum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sum";
	$fdata["GoodName"] = "sum";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Jumlah"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sum"; 
		$fdata["FullName"] = "SUM(s1+s2+s3+s4+s5+s6+s7)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
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
	
		
		
	$tdatastudent_course["sum"] = $fdata;
//	etype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "etype";
	$fdata["GoodName"] = "etype";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Peperiksaan/Ujian"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "etype"; 
		$fdata["FullName"] = "student_course.etype";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=52";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course["etype"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Tahun"; 
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
	
		
		
	$tdatastudent_course["tahun"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatastudent_course["Class"] = $fdata;

	
$tables_data["student_course"]=&$tdatastudent_course;
$field_labels["student_course"] = &$fieldLabelsstudent_course;
$fieldToolTips["student_course"] = &$fieldToolTipsstudent_course;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_course"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_course"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_course()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_course.scid,  student_course.StudentID,  student_course.s1,  student_course.s2,  student_course.s3,  student_course.s4,  student_course.s5,  student_course.s6,  student_course.s7,  student_course.s8,  student_course.s9,  SUM(s1+s2+s3+s4+s5+s6+s7) AS `sum`,  student_course.etype,  student_info.tahun,  student_info.`Class`";
$proto0["m_strFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY student_course.StudentID, student_course.etype";
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
	"m_strName" => "scid",
	"m_strTable" => "student_course"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "student_course"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "student_course"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "student_course"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "student_course"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "student_course"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "student_course"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "student_course"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "s8",
	"m_strTable" => "student_course"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "s9",
	"m_strTable" => "student_course"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$proto28=array();
$proto28["m_functiontype"] = "SQLF_SUM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1+s2+s3+s4+s5+s6+s7"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto28);

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "sum";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "etype",
	"m_strTable" => "student_course"
));

$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "student_course";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "scid";
$proto37["m_columns"][] = "StudentID";
$proto37["m_columns"][] = "s1";
$proto37["m_columns"][] = "s2";
$proto37["m_columns"][] = "s3";
$proto37["m_columns"][] = "s4";
$proto37["m_columns"][] = "s5";
$proto37["m_columns"][] = "s6";
$proto37["m_columns"][] = "s7";
$proto37["m_columns"][] = "s8";
$proto37["m_columns"][] = "s9";
$proto37["m_columns"][] = "s10";
$proto37["m_columns"][] = "etype";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_alias"] = "";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = "0";
$proto38["m_inBrackets"] = "0";
$proto38["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "student_info";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "StudentID";
$proto41["m_columns"][] = "Name";
$proto41["m_columns"][] = "ICNO";
$proto41["m_columns"][] = "DOB";
$proto41["m_columns"][] = "MatricNo";
$proto41["m_columns"][] = "Email";
$proto41["m_columns"][] = "Access";
$proto41["m_columns"][] = "DateJoin";
$proto41["m_columns"][] = "Dateout";
$proto41["m_columns"][] = "Gender";
$proto41["m_columns"][] = "Address1";
$proto41["m_columns"][] = "City";
$proto41["m_columns"][] = "Postcode";
$proto41["m_columns"][] = "StateID";
$proto41["m_columns"][] = "HomeTelephone";
$proto41["m_columns"][] = "Nationality";
$proto41["m_columns"][] = "Status";
$proto41["m_columns"][] = "Disability";
$proto41["m_columns"][] = "MedicalCondition";
$proto41["m_columns"][] = "race";
$proto41["m_columns"][] = "Class";
$proto41["m_columns"][] = "sesi";
$proto41["m_columns"][] = "tahun";
$proto41["m_columns"][] = "f1_name";
$proto41["m_columns"][] = "f1_tel";
$proto41["m_columns"][] = "f1_relation";
$proto41["m_columns"][] = "f1_job";
$proto41["m_columns"][] = "f2_name";
$proto41["m_columns"][] = "f2_tel";
$proto41["m_columns"][] = "f2_relation";
$proto41["m_columns"][] = "f2_job";
$proto41["m_columns"][] = "blood";
$proto41["m_columns"][] = "hostel_in";
$proto41["m_columns"][] = "photo";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_alias"] = "";
$proto42=array();
$proto42["m_sql"] = "student_course.StudentID = student_info.StudentID";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= student_info.StudentID";
$proto42["m_havingmode"] = "0";
$proto42["m_inBrackets"] = "0";
$proto42["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "etype",
	"m_strTable" => "student_course"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_course = createSqlQuery_student_course();
															$tdatastudent_course[".sqlquery"] = $queryData_student_course;

include_once(getabspath("include/student_course_events.php"));
$tableEvents["student_course"] = new eventclass_student_course;
$tdatastudent_course[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_course");

?>