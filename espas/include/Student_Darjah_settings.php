<?php
require_once(getabspath("classes/cipherer.php"));
$tdataStudent_Darjah = array();
	$tdataStudent_Darjah[".NumberOfChars"] = 80; 
	$tdataStudent_Darjah[".ShortName"] = "Student_Darjah";
	$tdataStudent_Darjah[".OwnerID"] = "";
	$tdataStudent_Darjah[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsStudent_Darjah = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsStudent_Darjah["Malay"] = array();
	$fieldToolTipsStudent_Darjah["Malay"] = array();
	$fieldLabelsStudent_Darjah["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsStudent_Darjah["Malay"]["sesi"] = "";
	$fieldLabelsStudent_Darjah["Malay"]["darjah"] = "Darjah";
	$fieldToolTipsStudent_Darjah["Malay"]["darjah"] = "";
	$fieldLabelsStudent_Darjah["Malay"]["kelas"] = "Kelas";
	$fieldToolTipsStudent_Darjah["Malay"]["kelas"] = "";
	if (count($fieldToolTipsStudent_Darjah["Malay"]))
		$tdataStudent_Darjah[".isUseToolTips"] = true;
}
	
	



$tdataStudent_Darjah[".shortTableName"] = "Student_Darjah";
$tdataStudent_Darjah[".nSecOptions"] = 0;
$tdataStudent_Darjah[".recsPerRowList"] = 1;
$tdataStudent_Darjah[".mainTableOwnerID"] = "";
$tdataStudent_Darjah[".moveNext"] = 1;
$tdataStudent_Darjah[".nType"] = 1;

$tdataStudent_Darjah[".strOriginalTableName"] = "student_info";




$tdataStudent_Darjah[".showAddInPopup"] = false;

$tdataStudent_Darjah[".showEditInPopup"] = false;

$tdataStudent_Darjah[".showViewInPopup"] = true;

$tdataStudent_Darjah[".fieldsForRegister"] = array();
	
$tdataStudent_Darjah[".listAjax"] = false;

	$tdataStudent_Darjah[".audit"] = false;

	$tdataStudent_Darjah[".locking"] = false;

$tdataStudent_Darjah[".listIcons"] = true;




$tdataStudent_Darjah[".showSimpleSearchOptions"] = false;

$tdataStudent_Darjah[".showSearchPanel"] = true;

if (isMobile())
	$tdataStudent_Darjah[".isUseAjaxSuggest"] = false;
else 
	$tdataStudent_Darjah[".isUseAjaxSuggest"] = true;

$tdataStudent_Darjah[".rowHighlite"] = true;

// button handlers file names

$tdataStudent_Darjah[".addPageEvents"] = false;

// use timepicker for search panel
$tdataStudent_Darjah[".isUseTimeForSearch"] = false;




$tdataStudent_Darjah[".allSearchFields"] = array();

$tdataStudent_Darjah[".allSearchFields"][] = "darjah";
$tdataStudent_Darjah[".allSearchFields"][] = "kelas";

$tdataStudent_Darjah[".googleLikeFields"][] = "darjah";
$tdataStudent_Darjah[".googleLikeFields"][] = "kelas";

$tdataStudent_Darjah[".panelSearchFields"][] = "sesi";

$tdataStudent_Darjah[".advSearchFields"][] = "darjah";
$tdataStudent_Darjah[".advSearchFields"][] = "kelas";

$tdataStudent_Darjah[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataStudent_Darjah[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY tahun";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataStudent_Darjah[".strOrderBy"] = $tstrOrderBy;

$tdataStudent_Darjah[".orderindexes"] = array();
$tdataStudent_Darjah[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "tahun");

$tdataStudent_Darjah[".sqlHead"] = "SELECT sesi,  tahun AS darjah,  `Class` AS kelas";
$tdataStudent_Darjah[".sqlFrom"] = "FROM student_info";
$tdataStudent_Darjah[".sqlWhereExpr"] = "";
$tdataStudent_Darjah[".sqlTail"] = "GROUP BY tahun, `Class`";

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
$tdataStudent_Darjah[".arrEditTabs"] = $arrEditTabs;

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
$tdataStudent_Darjah[".arrAddTabs"] = $arrAddTabs;

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
$tdataStudent_Darjah[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataStudent_Darjah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataStudent_Darjah[".arrGroupsPerPage"] = $arrGPP;

$tableKeysStudent_Darjah = array();
$tdataStudent_Darjah[".Keys"] = $tableKeysStudent_Darjah;

$tdataStudent_Darjah[".listFields"] = array();
$tdataStudent_Darjah[".listFields"][] = "darjah";
$tdataStudent_Darjah[".listFields"][] = "kelas";

$tdataStudent_Darjah[".viewFields"] = array();

$tdataStudent_Darjah[".addFields"] = array();

$tdataStudent_Darjah[".inlineAddFields"] = array();

$tdataStudent_Darjah[".editFields"] = array();

$tdataStudent_Darjah[".inlineEditFields"] = array();

$tdataStudent_Darjah[".exportFields"] = array();

$tdataStudent_Darjah[".printFields"] = array();

//	sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
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
	
		
		
	$tdataStudent_Darjah["sesi"] = $fdata;
//	darjah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
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
	
		
		
	$tdataStudent_Darjah["darjah"] = $fdata;
//	kelas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
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
	
		
		
	$tdataStudent_Darjah["kelas"] = $fdata;

	
$tables_data["Student_Darjah"]=&$tdataStudent_Darjah;
$field_labels["Student_Darjah"] = &$fieldLabelsStudent_Darjah;
$fieldToolTips["Student_Darjah"] = &$fieldToolTipsStudent_Darjah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Student_Darjah"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Student_Darjah"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Student_Darjah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sesi,  tahun AS darjah,  `Class` AS kelas";
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
	"m_strName" => "sesi",
	"m_strTable" => "student_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "darjah";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "kelas";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "student_info";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "StudentID";
$proto12["m_columns"][] = "Name";
$proto12["m_columns"][] = "ICNO";
$proto12["m_columns"][] = "DOB";
$proto12["m_columns"][] = "MatricNo";
$proto12["m_columns"][] = "Email";
$proto12["m_columns"][] = "Access";
$proto12["m_columns"][] = "DateJoin";
$proto12["m_columns"][] = "Dateout";
$proto12["m_columns"][] = "Gender";
$proto12["m_columns"][] = "Address1";
$proto12["m_columns"][] = "City";
$proto12["m_columns"][] = "Postcode";
$proto12["m_columns"][] = "StateID";
$proto12["m_columns"][] = "HomeTelephone";
$proto12["m_columns"][] = "Nationality";
$proto12["m_columns"][] = "Status";
$proto12["m_columns"][] = "Disability";
$proto12["m_columns"][] = "MedicalCondition";
$proto12["m_columns"][] = "race";
$proto12["m_columns"][] = "Class";
$proto12["m_columns"][] = "sesi";
$proto12["m_columns"][] = "tahun";
$proto12["m_columns"][] = "f1_name";
$proto12["m_columns"][] = "f1_tel";
$proto12["m_columns"][] = "f1_relation";
$proto12["m_columns"][] = "f1_job";
$proto12["m_columns"][] = "f2_name";
$proto12["m_columns"][] = "f2_tel";
$proto12["m_columns"][] = "f2_relation";
$proto12["m_columns"][] = "f2_job";
$proto12["m_columns"][] = "blood";
$proto12["m_columns"][] = "hostel_in";
$proto12["m_columns"][] = "photo";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto19["m_column"]=$obj;
$proto19["m_bAsc"] = 1;
$proto19["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto19);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Student_Darjah = createSqlQuery_Student_Darjah();
			$tdataStudent_Darjah[".sqlquery"] = $queryData_Student_Darjah;

include_once(getabspath("include/Student_Darjah_events.php"));
$tableEvents["Student_Darjah"] = new eventclass_Student_Darjah;
$tdataStudent_Darjah[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Student_Darjah");

?>