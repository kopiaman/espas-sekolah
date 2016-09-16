<?php
require_once(getabspath("classes/cipherer.php"));
$tdataexam_grade_result = array();
	$tdataexam_grade_result[".NumberOfChars"] = 80; 
	$tdataexam_grade_result[".ShortName"] = "exam_grade_result";
	$tdataexam_grade_result[".OwnerID"] = "";
	$tdataexam_grade_result[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsexam_grade_result = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsexam_grade_result["Malay"] = array();
	$fieldToolTipsexam_grade_result["Malay"] = array();
	$fieldLabelsexam_grade_result["Malay"]["etype"] = "Peperiksaan";
	$fieldToolTipsexam_grade_result["Malay"]["etype"] = "";
	$fieldLabelsexam_grade_result["Malay"]["tahun"] = "Darjah";
	$fieldToolTipsexam_grade_result["Malay"]["tahun"] = "";
	$fieldLabelsexam_grade_result["Malay"]["Class"] = "Kelas";
	$fieldToolTipsexam_grade_result["Malay"]["Class"] = "";
	$fieldLabelsexam_grade_result["Malay"]["scid"] = "Scid";
	$fieldToolTipsexam_grade_result["Malay"]["scid"] = "";
	$fieldLabelsexam_grade_result["Malay"]["s1"] = "AL QURAN";
	$fieldToolTipsexam_grade_result["Malay"]["s1"] = "";
	$fieldLabelsexam_grade_result["Malay"]["s2"] = "AKHLAK";
	$fieldToolTipsexam_grade_result["Malay"]["s2"] = "";
	$fieldLabelsexam_grade_result["Malay"]["s3"] = "FEKAH";
	$fieldToolTipsexam_grade_result["Malay"]["s3"] = "";
	$fieldLabelsexam_grade_result["Malay"]["s4"] = "TAUHID";
	$fieldToolTipsexam_grade_result["Malay"]["s4"] = "";
	$fieldLabelsexam_grade_result["Malay"]["s5"] = "SIRAH";
	$fieldToolTipsexam_grade_result["Malay"]["s5"] = "";
	$fieldLabelsexam_grade_result["Malay"]["s6"] = "BH ARAB";
	$fieldToolTipsexam_grade_result["Malay"]["s6"] = "";
	$fieldLabelsexam_grade_result["Malay"]["s7"] = "TAJWID";
	$fieldToolTipsexam_grade_result["Malay"]["s7"] = "";
	$fieldLabelsexam_grade_result["Malay"]["s8"] = "JAWI";
	$fieldToolTipsexam_grade_result["Malay"]["s8"] = "";
	$fieldLabelsexam_grade_result["Malay"]["s9"] = "KHAT";
	$fieldToolTipsexam_grade_result["Malay"]["s9"] = "";
	$fieldLabelsexam_grade_result["Malay"]["sum"] = "Sum";
	$fieldToolTipsexam_grade_result["Malay"]["sum"] = "";
	$fieldLabelsexam_grade_result["Malay"]["murid"] = "Murid";
	$fieldToolTipsexam_grade_result["Malay"]["murid"] = "";
	$fieldLabelsexam_grade_result["Malay"]["grade1"] = "Gred";
	$fieldToolTipsexam_grade_result["Malay"]["grade1"] = "";
	$fieldLabelsexam_grade_result["Malay"]["grade2"] = "Gred";
	$fieldToolTipsexam_grade_result["Malay"]["grade2"] = "";
	$fieldLabelsexam_grade_result["Malay"]["grade3"] = "Gred";
	$fieldToolTipsexam_grade_result["Malay"]["grade3"] = "";
	$fieldLabelsexam_grade_result["Malay"]["grade4"] = "Gred";
	$fieldToolTipsexam_grade_result["Malay"]["grade4"] = "";
	$fieldLabelsexam_grade_result["Malay"]["grade5"] = "Gred";
	$fieldToolTipsexam_grade_result["Malay"]["grade5"] = "";
	$fieldLabelsexam_grade_result["Malay"]["grade6"] = "Gred";
	$fieldToolTipsexam_grade_result["Malay"]["grade6"] = "";
	$fieldLabelsexam_grade_result["Malay"]["grade7"] = "Gred";
	$fieldToolTipsexam_grade_result["Malay"]["grade7"] = "";
	$fieldLabelsexam_grade_result["Malay"]["grade8"] = "Gred";
	$fieldToolTipsexam_grade_result["Malay"]["grade8"] = "";
	$fieldLabelsexam_grade_result["Malay"]["grade9"] = "Gred";
	$fieldToolTipsexam_grade_result["Malay"]["grade9"] = "";
	if (count($fieldToolTipsexam_grade_result["Malay"]))
		$tdataexam_grade_result[".isUseToolTips"] = true;
}
	
	



$tdataexam_grade_result[".shortTableName"] = "exam_grade_result";
$tdataexam_grade_result[".nSecOptions"] = 0;
$tdataexam_grade_result[".recsPerRowList"] = 1;
$tdataexam_grade_result[".mainTableOwnerID"] = "";
$tdataexam_grade_result[".moveNext"] = 1;
$tdataexam_grade_result[".nType"] = 1;

$tdataexam_grade_result[".strOriginalTableName"] = "student_info";




$tdataexam_grade_result[".showAddInPopup"] = false;

$tdataexam_grade_result[".showEditInPopup"] = false;

$tdataexam_grade_result[".showViewInPopup"] = true;

$tdataexam_grade_result[".fieldsForRegister"] = array();
	
$tdataexam_grade_result[".listAjax"] = false;

	$tdataexam_grade_result[".audit"] = false;

	$tdataexam_grade_result[".locking"] = false;

$tdataexam_grade_result[".listIcons"] = true;

$tdataexam_grade_result[".exportTo"] = true;



$tdataexam_grade_result[".showSimpleSearchOptions"] = false;

$tdataexam_grade_result[".showSearchPanel"] = true;

if (isMobile())
	$tdataexam_grade_result[".isUseAjaxSuggest"] = false;
else 
	$tdataexam_grade_result[".isUseAjaxSuggest"] = true;

$tdataexam_grade_result[".rowHighlite"] = true;

// button handlers file names

$tdataexam_grade_result[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexam_grade_result[".isUseTimeForSearch"] = false;




$tdataexam_grade_result[".allSearchFields"] = array();

$tdataexam_grade_result[".allSearchFields"][] = "murid";
$tdataexam_grade_result[".allSearchFields"][] = "tahun";
$tdataexam_grade_result[".allSearchFields"][] = "Class";
$tdataexam_grade_result[".allSearchFields"][] = "etype";
$tdataexam_grade_result[".allSearchFields"][] = "s1";
$tdataexam_grade_result[".allSearchFields"][] = "grade1";
$tdataexam_grade_result[".allSearchFields"][] = "s2";
$tdataexam_grade_result[".allSearchFields"][] = "grade2";
$tdataexam_grade_result[".allSearchFields"][] = "s3";
$tdataexam_grade_result[".allSearchFields"][] = "grade3";
$tdataexam_grade_result[".allSearchFields"][] = "s4";
$tdataexam_grade_result[".allSearchFields"][] = "grade4";
$tdataexam_grade_result[".allSearchFields"][] = "s5";
$tdataexam_grade_result[".allSearchFields"][] = "grade5";
$tdataexam_grade_result[".allSearchFields"][] = "s8";
$tdataexam_grade_result[".allSearchFields"][] = "grade8";
$tdataexam_grade_result[".allSearchFields"][] = "s9";
$tdataexam_grade_result[".allSearchFields"][] = "grade9";
$tdataexam_grade_result[".allSearchFields"][] = "s6";
$tdataexam_grade_result[".allSearchFields"][] = "grade6";
$tdataexam_grade_result[".allSearchFields"][] = "s7";
$tdataexam_grade_result[".allSearchFields"][] = "grade7";
$tdataexam_grade_result[".allSearchFields"][] = "sum";

$tdataexam_grade_result[".googleLikeFields"][] = "scid";
$tdataexam_grade_result[".googleLikeFields"][] = "murid";
$tdataexam_grade_result[".googleLikeFields"][] = "s1";
$tdataexam_grade_result[".googleLikeFields"][] = "grade1";
$tdataexam_grade_result[".googleLikeFields"][] = "s2";
$tdataexam_grade_result[".googleLikeFields"][] = "grade2";
$tdataexam_grade_result[".googleLikeFields"][] = "s3";
$tdataexam_grade_result[".googleLikeFields"][] = "grade3";
$tdataexam_grade_result[".googleLikeFields"][] = "s4";
$tdataexam_grade_result[".googleLikeFields"][] = "grade4";
$tdataexam_grade_result[".googleLikeFields"][] = "s5";
$tdataexam_grade_result[".googleLikeFields"][] = "grade5";
$tdataexam_grade_result[".googleLikeFields"][] = "s6";
$tdataexam_grade_result[".googleLikeFields"][] = "grade6";
$tdataexam_grade_result[".googleLikeFields"][] = "s7";
$tdataexam_grade_result[".googleLikeFields"][] = "grade7";
$tdataexam_grade_result[".googleLikeFields"][] = "s8";
$tdataexam_grade_result[".googleLikeFields"][] = "grade8";
$tdataexam_grade_result[".googleLikeFields"][] = "s9";
$tdataexam_grade_result[".googleLikeFields"][] = "grade9";
$tdataexam_grade_result[".googleLikeFields"][] = "sum";
$tdataexam_grade_result[".googleLikeFields"][] = "etype";
$tdataexam_grade_result[".googleLikeFields"][] = "tahun";
$tdataexam_grade_result[".googleLikeFields"][] = "Class";


$tdataexam_grade_result[".advSearchFields"][] = "murid";
$tdataexam_grade_result[".advSearchFields"][] = "tahun";
$tdataexam_grade_result[".advSearchFields"][] = "Class";
$tdataexam_grade_result[".advSearchFields"][] = "etype";
$tdataexam_grade_result[".advSearchFields"][] = "s1";
$tdataexam_grade_result[".advSearchFields"][] = "grade1";
$tdataexam_grade_result[".advSearchFields"][] = "s2";
$tdataexam_grade_result[".advSearchFields"][] = "grade2";
$tdataexam_grade_result[".advSearchFields"][] = "s3";
$tdataexam_grade_result[".advSearchFields"][] = "grade3";
$tdataexam_grade_result[".advSearchFields"][] = "s4";
$tdataexam_grade_result[".advSearchFields"][] = "grade4";
$tdataexam_grade_result[".advSearchFields"][] = "s5";
$tdataexam_grade_result[".advSearchFields"][] = "grade5";
$tdataexam_grade_result[".advSearchFields"][] = "s8";
$tdataexam_grade_result[".advSearchFields"][] = "grade8";
$tdataexam_grade_result[".advSearchFields"][] = "s9";
$tdataexam_grade_result[".advSearchFields"][] = "grade9";
$tdataexam_grade_result[".advSearchFields"][] = "s6";
$tdataexam_grade_result[".advSearchFields"][] = "grade6";
$tdataexam_grade_result[".advSearchFields"][] = "s7";
$tdataexam_grade_result[".advSearchFields"][] = "grade7";
$tdataexam_grade_result[".advSearchFields"][] = "sum";

$tdataexam_grade_result[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataexam_grade_result[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_course.scid DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataexam_grade_result[".strOrderBy"] = $tstrOrderBy;

$tdataexam_grade_result[".orderindexes"] = array();
$tdataexam_grade_result[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_course.scid");

$tdataexam_grade_result[".sqlHead"] = "SELECT student_course.scid,  student_course.StudentID AS murid,  student_course.s1,  CASE  WHEN student_course.s1>79 THEN 'A' WHEN student_course.s1>59 THEN 'B' WHEN student_course.s1>40 THEN 'C'  	   	WHEN student_course.s1<41 THEN 'D'	 ELSE '-' END AS grade1,  student_course.s2,  CASE  WHEN student_course.s2>79 THEN 'A'  WHEN student_course.s2>59 THEN 'B'	WHEN student_course.s2>40 THEN 'C'  		  WHEN student_course.s2<41 THEN 'D'  ELSE '-'  END AS grade2,  student_course.s3,  CASE  WHEN student_course.s3>79 THEN 'A'  WHEN student_course.s3>59 THEN 'B'	WHEN student_course.s3>40 THEN 'C'  		  WHEN student_course.s3<41 THEN 'D'  ELSE '-'  END AS grade3,  student_course.s4,  CASE  WHEN student_course.s4>79 THEN 'A'  WHEN student_course.s4>59 THEN 'B'	WHEN student_course.s4>40 THEN 'C'  		  WHEN student_course.s4<41 THEN 'D'  ELSE '-'  END AS grade4,  student_course.s5,  CASE  WHEN student_course.s5>79 THEN 'A'  WHEN student_course.s5>59 THEN 'B'	WHEN student_course.s5>40 THEN 'C'  		  WHEN student_course.s5<41 THEN 'D'  ELSE '-'  END AS grade5,  student_course.s6,  CASE  WHEN student_course.s6>79 THEN 'A'  WHEN student_course.s6>59 THEN 'B'	WHEN student_course.s6>40 THEN 'C'  		  WHEN student_course.s6<41 THEN 'D'  ELSE '-'  END AS grade6,  student_course.s7,  CASE  WHEN student_course.s7>79 THEN 'A'  WHEN student_course.s7>59 THEN 'B'	WHEN student_course.s7>40 THEN 'C'  		  WHEN student_course.s7<41 THEN 'D'  ELSE '-'  END AS grade7,  student_course.s8,  CASE  WHEN student_course.s8>79 THEN 'A'  WHEN student_course.s8>59 THEN 'B'	WHEN student_course.s8>40 THEN 'C'  		  WHEN student_course.s8<41 THEN 'D'  ELSE '-'  END AS grade8,  student_course.s9,  CASE  WHEN student_course.s9>79 THEN 'A'  WHEN student_course.s9>59 THEN 'B'	WHEN student_course.s9>40 THEN 'C'  		  WHEN student_course.s9<41 THEN 'D'  ELSE '-'  END AS grade9,  SUM(s1+s2+s3+s4+s5+s6+s7) AS `sum`,  student_course.etype,  student_info.tahun,  student_info.`Class`";
$tdataexam_grade_result[".sqlFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$tdataexam_grade_result[".sqlWhereExpr"] = "";
$tdataexam_grade_result[".sqlTail"] = "GROUP BY student_course.StudentID, student_course.etype";

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
$tdataexam_grade_result[".arrEditTabs"] = $arrEditTabs;

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
$tdataexam_grade_result[".arrAddTabs"] = $arrAddTabs;

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
$tdataexam_grade_result[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexam_grade_result[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexam_grade_result[".arrGroupsPerPage"] = $arrGPP;

$tableKeysexam_grade_result = array();
$tdataexam_grade_result[".Keys"] = $tableKeysexam_grade_result;

$tdataexam_grade_result[".listFields"] = array();
$tdataexam_grade_result[".listFields"][] = "murid";
$tdataexam_grade_result[".listFields"][] = "tahun";
$tdataexam_grade_result[".listFields"][] = "Class";
$tdataexam_grade_result[".listFields"][] = "etype";
$tdataexam_grade_result[".listFields"][] = "s1";
$tdataexam_grade_result[".listFields"][] = "grade1";
$tdataexam_grade_result[".listFields"][] = "s2";
$tdataexam_grade_result[".listFields"][] = "grade2";
$tdataexam_grade_result[".listFields"][] = "s3";
$tdataexam_grade_result[".listFields"][] = "grade3";
$tdataexam_grade_result[".listFields"][] = "s4";
$tdataexam_grade_result[".listFields"][] = "grade4";
$tdataexam_grade_result[".listFields"][] = "s5";
$tdataexam_grade_result[".listFields"][] = "grade5";
$tdataexam_grade_result[".listFields"][] = "s8";
$tdataexam_grade_result[".listFields"][] = "grade8";
$tdataexam_grade_result[".listFields"][] = "s9";
$tdataexam_grade_result[".listFields"][] = "grade9";
$tdataexam_grade_result[".listFields"][] = "s6";
$tdataexam_grade_result[".listFields"][] = "grade6";
$tdataexam_grade_result[".listFields"][] = "s7";
$tdataexam_grade_result[".listFields"][] = "grade7";
$tdataexam_grade_result[".listFields"][] = "sum";

$tdataexam_grade_result[".viewFields"] = array();

$tdataexam_grade_result[".addFields"] = array();

$tdataexam_grade_result[".inlineAddFields"] = array();

$tdataexam_grade_result[".editFields"] = array();

$tdataexam_grade_result[".inlineEditFields"] = array();

$tdataexam_grade_result[".exportFields"] = array();
$tdataexam_grade_result[".exportFields"][] = "murid";
$tdataexam_grade_result[".exportFields"][] = "tahun";
$tdataexam_grade_result[".exportFields"][] = "Class";
$tdataexam_grade_result[".exportFields"][] = "etype";
$tdataexam_grade_result[".exportFields"][] = "s1";
$tdataexam_grade_result[".exportFields"][] = "grade1";
$tdataexam_grade_result[".exportFields"][] = "s2";
$tdataexam_grade_result[".exportFields"][] = "grade2";
$tdataexam_grade_result[".exportFields"][] = "s3";
$tdataexam_grade_result[".exportFields"][] = "grade3";
$tdataexam_grade_result[".exportFields"][] = "s4";
$tdataexam_grade_result[".exportFields"][] = "grade4";
$tdataexam_grade_result[".exportFields"][] = "s5";
$tdataexam_grade_result[".exportFields"][] = "grade5";
$tdataexam_grade_result[".exportFields"][] = "s8";
$tdataexam_grade_result[".exportFields"][] = "grade8";
$tdataexam_grade_result[".exportFields"][] = "s9";
$tdataexam_grade_result[".exportFields"][] = "grade9";
$tdataexam_grade_result[".exportFields"][] = "s6";
$tdataexam_grade_result[".exportFields"][] = "grade6";
$tdataexam_grade_result[".exportFields"][] = "s7";
$tdataexam_grade_result[".exportFields"][] = "grade7";
$tdataexam_grade_result[".exportFields"][] = "sum";

$tdataexam_grade_result[".printFields"] = array();

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
	
		
		
	$tdataexam_grade_result["scid"] = $fdata;
//	murid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "murid";
	$fdata["GoodName"] = "murid";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Murid"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
				if(strpos(GetUserPermissions("exam_grade_result"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Status='Aktif'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_grade_result["murid"] = $fdata;
//	s1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "s1";
	$fdata["GoodName"] = "s1";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "AL QURAN"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_grade_result["s1"] = $fdata;
//	grade1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "grade1";
	$fdata["GoodName"] = "grade1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gred"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade1"; 
		$fdata["FullName"] = "CASE  WHEN student_course.s1>79 THEN 'A' WHEN student_course.s1>59 THEN 'B' WHEN student_course.s1>40 THEN 'C'  	   	WHEN student_course.s1<41 THEN 'D'	 ELSE '-' END";
	
		
		
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
	
		
		
	$tdataexam_grade_result["grade1"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "AKHLAK"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_grade_result["s2"] = $fdata;
//	grade2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "grade2";
	$fdata["GoodName"] = "grade2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gred"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade2"; 
		$fdata["FullName"] = "CASE  WHEN student_course.s2>79 THEN 'A'  WHEN student_course.s2>59 THEN 'B'	WHEN student_course.s2>40 THEN 'C'  		  WHEN student_course.s2<41 THEN 'D'  ELSE '-'  END";
	
		
		
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
	
		
		
	$tdataexam_grade_result["grade2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "FEKAH"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_grade_result["s3"] = $fdata;
//	grade3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "grade3";
	$fdata["GoodName"] = "grade3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gred"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade3"; 
		$fdata["FullName"] = "CASE  WHEN student_course.s3>79 THEN 'A'  WHEN student_course.s3>59 THEN 'B'	WHEN student_course.s3>40 THEN 'C'  		  WHEN student_course.s3<41 THEN 'D'  ELSE '-'  END";
	
		
		
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
	
		
		
	$tdataexam_grade_result["grade3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "TAUHID"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_grade_result["s4"] = $fdata;
//	grade4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "grade4";
	$fdata["GoodName"] = "grade4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gred"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade4"; 
		$fdata["FullName"] = "CASE  WHEN student_course.s4>79 THEN 'A'  WHEN student_course.s4>59 THEN 'B'	WHEN student_course.s4>40 THEN 'C'  		  WHEN student_course.s4<41 THEN 'D'  ELSE '-'  END";
	
		
		
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
	
		
		
	$tdataexam_grade_result["grade4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "SIRAH"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_grade_result["s5"] = $fdata;
//	grade5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "grade5";
	$fdata["GoodName"] = "grade5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gred"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade5"; 
		$fdata["FullName"] = "CASE  WHEN student_course.s5>79 THEN 'A'  WHEN student_course.s5>59 THEN 'B'	WHEN student_course.s5>40 THEN 'C'  		  WHEN student_course.s5<41 THEN 'D'  ELSE '-'  END";
	
		
		
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
	
		
		
	$tdataexam_grade_result["grade5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "BH ARAB"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_grade_result["s6"] = $fdata;
//	grade6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "grade6";
	$fdata["GoodName"] = "grade6";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gred"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade6"; 
		$fdata["FullName"] = "CASE  WHEN student_course.s6>79 THEN 'A'  WHEN student_course.s6>59 THEN 'B'	WHEN student_course.s6>40 THEN 'C'  		  WHEN student_course.s6<41 THEN 'D'  ELSE '-'  END";
	
		
		
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
	
		
		
	$tdataexam_grade_result["grade6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "TAJWID"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_grade_result["s7"] = $fdata;
//	grade7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "grade7";
	$fdata["GoodName"] = "grade7";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gred"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade7"; 
		$fdata["FullName"] = "CASE  WHEN student_course.s7>79 THEN 'A'  WHEN student_course.s7>59 THEN 'B'	WHEN student_course.s7>40 THEN 'C'  		  WHEN student_course.s7<41 THEN 'D'  ELSE '-'  END";
	
		
		
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
	
		
		
	$tdataexam_grade_result["grade7"] = $fdata;
//	s8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "s8";
	$fdata["GoodName"] = "s8";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "JAWI"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_grade_result["s8"] = $fdata;
//	grade8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "grade8";
	$fdata["GoodName"] = "grade8";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gred"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade8"; 
		$fdata["FullName"] = "CASE  WHEN student_course.s8>79 THEN 'A'  WHEN student_course.s8>59 THEN 'B'	WHEN student_course.s8>40 THEN 'C'  		  WHEN student_course.s8<41 THEN 'D'  ELSE '-'  END";
	
		
		
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
	
		
		
	$tdataexam_grade_result["grade8"] = $fdata;
//	s9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "s9";
	$fdata["GoodName"] = "s9";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "KHAT"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_grade_result["s9"] = $fdata;
//	grade9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "grade9";
	$fdata["GoodName"] = "grade9";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Gred"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "grade9"; 
		$fdata["FullName"] = "CASE  WHEN student_course.s9>79 THEN 'A'  WHEN student_course.s9>59 THEN 'B'	WHEN student_course.s9>40 THEN 'C'  		  WHEN student_course.s9<41 THEN 'D'  ELSE '-'  END";
	
		
		
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
	
		
		
	$tdataexam_grade_result["grade9"] = $fdata;
//	sum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sum";
	$fdata["GoodName"] = "sum";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Sum"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdataexam_grade_result["sum"] = $fdata;
//	etype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "etype";
	$fdata["GoodName"] = "etype";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Peperiksaan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdataexam_grade_result["etype"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
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
	
		
		
	$tdataexam_grade_result["tahun"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdataexam_grade_result["Class"] = $fdata;

	
$tables_data["exam_grade_result"]=&$tdataexam_grade_result;
$field_labels["exam_grade_result"] = &$fieldLabelsexam_grade_result;
$fieldToolTips["exam_grade_result"] = &$fieldToolTipsexam_grade_result;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["exam_grade_result"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["exam_grade_result"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_exam_grade_result()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_course.scid,  student_course.StudentID AS murid,  student_course.s1,  CASE  WHEN student_course.s1>79 THEN 'A' WHEN student_course.s1>59 THEN 'B' WHEN student_course.s1>40 THEN 'C'  	   	WHEN student_course.s1<41 THEN 'D'	 ELSE '-' END AS grade1,  student_course.s2,  CASE  WHEN student_course.s2>79 THEN 'A'  WHEN student_course.s2>59 THEN 'B'	WHEN student_course.s2>40 THEN 'C'  		  WHEN student_course.s2<41 THEN 'D'  ELSE '-'  END AS grade2,  student_course.s3,  CASE  WHEN student_course.s3>79 THEN 'A'  WHEN student_course.s3>59 THEN 'B'	WHEN student_course.s3>40 THEN 'C'  		  WHEN student_course.s3<41 THEN 'D'  ELSE '-'  END AS grade3,  student_course.s4,  CASE  WHEN student_course.s4>79 THEN 'A'  WHEN student_course.s4>59 THEN 'B'	WHEN student_course.s4>40 THEN 'C'  		  WHEN student_course.s4<41 THEN 'D'  ELSE '-'  END AS grade4,  student_course.s5,  CASE  WHEN student_course.s5>79 THEN 'A'  WHEN student_course.s5>59 THEN 'B'	WHEN student_course.s5>40 THEN 'C'  		  WHEN student_course.s5<41 THEN 'D'  ELSE '-'  END AS grade5,  student_course.s6,  CASE  WHEN student_course.s6>79 THEN 'A'  WHEN student_course.s6>59 THEN 'B'	WHEN student_course.s6>40 THEN 'C'  		  WHEN student_course.s6<41 THEN 'D'  ELSE '-'  END AS grade6,  student_course.s7,  CASE  WHEN student_course.s7>79 THEN 'A'  WHEN student_course.s7>59 THEN 'B'	WHEN student_course.s7>40 THEN 'C'  		  WHEN student_course.s7<41 THEN 'D'  ELSE '-'  END AS grade7,  student_course.s8,  CASE  WHEN student_course.s8>79 THEN 'A'  WHEN student_course.s8>59 THEN 'B'	WHEN student_course.s8>40 THEN 'C'  		  WHEN student_course.s8<41 THEN 'D'  ELSE '-'  END AS grade8,  student_course.s9,  CASE  WHEN student_course.s9>79 THEN 'A'  WHEN student_course.s9>59 THEN 'B'	WHEN student_course.s9>40 THEN 'C'  		  WHEN student_course.s9<41 THEN 'D'  ELSE '-'  END AS grade9,  SUM(s1+s2+s3+s4+s5+s6+s7) AS `sum`,  student_course.etype,  student_info.tahun,  student_info.`Class`";
$proto0["m_strFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_course.scid DESC";
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
$proto7["m_alias"] = "murid";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  WHEN student_course.s1>79 THEN 'A' WHEN student_course.s1>59 THEN 'B' WHEN student_course.s1>40 THEN 'C'  	   	WHEN student_course.s1<41 THEN 'D'	 ELSE '-' END"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "grade1";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "student_course"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  WHEN student_course.s2>79 THEN 'A'  WHEN student_course.s2>59 THEN 'B'	WHEN student_course.s2>40 THEN 'C'  		  WHEN student_course.s2<41 THEN 'D'  ELSE '-'  END"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "grade2";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "student_course"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  WHEN student_course.s3>79 THEN 'A'  WHEN student_course.s3>59 THEN 'B'	WHEN student_course.s3>40 THEN 'C'  		  WHEN student_course.s3<41 THEN 'D'  ELSE '-'  END"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "grade3";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "student_course"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  WHEN student_course.s4>79 THEN 'A'  WHEN student_course.s4>59 THEN 'B'	WHEN student_course.s4>40 THEN 'C'  		  WHEN student_course.s4<41 THEN 'D'  ELSE '-'  END"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "grade4";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "student_course"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  WHEN student_course.s5>79 THEN 'A'  WHEN student_course.s5>59 THEN 'B'	WHEN student_course.s5>40 THEN 'C'  		  WHEN student_course.s5<41 THEN 'D'  ELSE '-'  END"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "grade5";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "student_course"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  WHEN student_course.s6>79 THEN 'A'  WHEN student_course.s6>59 THEN 'B'	WHEN student_course.s6>40 THEN 'C'  		  WHEN student_course.s6<41 THEN 'D'  ELSE '-'  END"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "grade6";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "student_course"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  WHEN student_course.s7>79 THEN 'A'  WHEN student_course.s7>59 THEN 'B'	WHEN student_course.s7>40 THEN 'C'  		  WHEN student_course.s7<41 THEN 'D'  ELSE '-'  END"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "grade7";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "s8",
	"m_strTable" => "student_course"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  WHEN student_course.s8>79 THEN 'A'  WHEN student_course.s8>59 THEN 'B'	WHEN student_course.s8>40 THEN 'C'  		  WHEN student_course.s8<41 THEN 'D'  ELSE '-'  END"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "grade8";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "s9",
	"m_strTable" => "student_course"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  WHEN student_course.s9>79 THEN 'A'  WHEN student_course.s9>59 THEN 'B'	WHEN student_course.s9>40 THEN 'C'  		  WHEN student_course.s9<41 THEN 'D'  ELSE '-'  END"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "grade9";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$proto46=array();
$proto46["m_functiontype"] = "SQLF_SUM";
$proto46["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1+s2+s3+s4+s5+s6+s7"
));

$proto46["m_arguments"][]=$obj;
$proto46["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto46);

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "sum";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "etype",
	"m_strTable" => "student_course"
));

$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "student_course";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "scid";
$proto55["m_columns"][] = "StudentID";
$proto55["m_columns"][] = "s1";
$proto55["m_columns"][] = "s2";
$proto55["m_columns"][] = "s3";
$proto55["m_columns"][] = "s4";
$proto55["m_columns"][] = "s5";
$proto55["m_columns"][] = "s6";
$proto55["m_columns"][] = "s7";
$proto55["m_columns"][] = "s8";
$proto55["m_columns"][] = "s9";
$proto55["m_columns"][] = "s10";
$proto55["m_columns"][] = "etype";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_alias"] = "";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = "0";
$proto56["m_inBrackets"] = "0";
$proto56["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
												$proto58=array();
$proto58["m_link"] = "SQLL_INNERJOIN";
			$proto59=array();
$proto59["m_strName"] = "student_info";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "StudentID";
$proto59["m_columns"][] = "Name";
$proto59["m_columns"][] = "ICNO";
$proto59["m_columns"][] = "DOB";
$proto59["m_columns"][] = "MatricNo";
$proto59["m_columns"][] = "Email";
$proto59["m_columns"][] = "Access";
$proto59["m_columns"][] = "DateJoin";
$proto59["m_columns"][] = "Dateout";
$proto59["m_columns"][] = "Gender";
$proto59["m_columns"][] = "Address1";
$proto59["m_columns"][] = "City";
$proto59["m_columns"][] = "Postcode";
$proto59["m_columns"][] = "StateID";
$proto59["m_columns"][] = "HomeTelephone";
$proto59["m_columns"][] = "Nationality";
$proto59["m_columns"][] = "Status";
$proto59["m_columns"][] = "Disability";
$proto59["m_columns"][] = "MedicalCondition";
$proto59["m_columns"][] = "race";
$proto59["m_columns"][] = "Class";
$proto59["m_columns"][] = "sesi";
$proto59["m_columns"][] = "tahun";
$proto59["m_columns"][] = "f1_name";
$proto59["m_columns"][] = "f1_tel";
$proto59["m_columns"][] = "f1_relation";
$proto59["m_columns"][] = "f1_job";
$proto59["m_columns"][] = "f2_name";
$proto59["m_columns"][] = "f2_tel";
$proto59["m_columns"][] = "f2_relation";
$proto59["m_columns"][] = "f2_job";
$proto59["m_columns"][] = "blood";
$proto59["m_columns"][] = "hostel_in";
$proto59["m_columns"][] = "photo";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_alias"] = "";
$proto60=array();
$proto60["m_sql"] = "student_course.StudentID = student_info.StudentID";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= student_info.StudentID";
$proto60["m_havingmode"] = "0";
$proto60["m_inBrackets"] = "0";
$proto60["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "etype",
	"m_strTable" => "student_course"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "scid",
	"m_strTable" => "student_course"
));

$proto66["m_column"]=$obj;
$proto66["m_bAsc"] = 0;
$proto66["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto66);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_exam_grade_result = createSqlQuery_exam_grade_result();
																								$tdataexam_grade_result[".sqlquery"] = $queryData_exam_grade_result;

$tableEvents["exam_grade_result"] = new eventsBase;
$tdataexam_grade_result[".hasEvents"] = false;

$cipherer = new RunnerCipherer("exam_grade_result");

?>