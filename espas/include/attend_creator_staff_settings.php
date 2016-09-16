<?php
require_once(getabspath("classes/cipherer.php"));
$tdataattend_creator_staff = array();
	$tdataattend_creator_staff[".NumberOfChars"] = 80; 
	$tdataattend_creator_staff[".ShortName"] = "attend_creator_staff";
	$tdataattend_creator_staff[".OwnerID"] = "";
	$tdataattend_creator_staff[".OriginalTable"] = "attend_creator";

//	field labels
$fieldLabelsattend_creator_staff = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsattend_creator_staff["Malay"] = array();
	$fieldToolTipsattend_creator_staff["Malay"] = array();
	$fieldLabelsattend_creator_staff["Malay"]["aid"] = "Aid";
	$fieldToolTipsattend_creator_staff["Malay"]["aid"] = "";
	$fieldLabelsattend_creator_staff["Malay"]["amonth"] = "Bulan";
	$fieldToolTipsattend_creator_staff["Malay"]["amonth"] = "";
	$fieldLabelsattend_creator_staff["Malay"]["ayear"] = "Tahun";
	$fieldToolTipsattend_creator_staff["Malay"]["ayear"] = "";
	$fieldLabelsattend_creator_staff["Malay"]["teach_day_staff"] = "Hari Bekerja";
	$fieldToolTipsattend_creator_staff["Malay"]["teach_day_staff"] = "";
	$fieldLabelsattend_creator_staff["Malay"]["teach_day"] = "Hari Mengajar";
	$fieldToolTipsattend_creator_staff["Malay"]["teach_day"] = "";
	if (count($fieldToolTipsattend_creator_staff["Malay"]))
		$tdataattend_creator_staff[".isUseToolTips"] = true;
}
	
	
	$tdataattend_creator_staff[".NCSearch"] = true;



$tdataattend_creator_staff[".shortTableName"] = "attend_creator_staff";
$tdataattend_creator_staff[".nSecOptions"] = 0;
$tdataattend_creator_staff[".recsPerRowList"] = 1;
$tdataattend_creator_staff[".mainTableOwnerID"] = "";
$tdataattend_creator_staff[".moveNext"] = 1;
$tdataattend_creator_staff[".nType"] = 1;

$tdataattend_creator_staff[".strOriginalTableName"] = "attend_creator";




$tdataattend_creator_staff[".showAddInPopup"] = false;

$tdataattend_creator_staff[".showEditInPopup"] = false;

$tdataattend_creator_staff[".showViewInPopup"] = false;

$tdataattend_creator_staff[".fieldsForRegister"] = array();
	
$tdataattend_creator_staff[".listAjax"] = false;

	$tdataattend_creator_staff[".audit"] = false;

	$tdataattend_creator_staff[".locking"] = false;

$tdataattend_creator_staff[".listIcons"] = true;
$tdataattend_creator_staff[".inlineEdit"] = true;
$tdataattend_creator_staff[".inlineAdd"] = true;



$tdataattend_creator_staff[".delete"] = true;

$tdataattend_creator_staff[".showSimpleSearchOptions"] = false;

$tdataattend_creator_staff[".showSearchPanel"] = true;

if (isMobile())
	$tdataattend_creator_staff[".isUseAjaxSuggest"] = false;
else 
	$tdataattend_creator_staff[".isUseAjaxSuggest"] = true;

$tdataattend_creator_staff[".rowHighlite"] = true;

// button handlers file names

$tdataattend_creator_staff[".addPageEvents"] = false;

// use timepicker for search panel
$tdataattend_creator_staff[".isUseTimeForSearch"] = false;




$tdataattend_creator_staff[".allSearchFields"] = array();

$tdataattend_creator_staff[".allSearchFields"][] = "amonth";
$tdataattend_creator_staff[".allSearchFields"][] = "ayear";
$tdataattend_creator_staff[".allSearchFields"][] = "teach_day_staff";

$tdataattend_creator_staff[".googleLikeFields"][] = "aid";
$tdataattend_creator_staff[".googleLikeFields"][] = "amonth";
$tdataattend_creator_staff[".googleLikeFields"][] = "ayear";
$tdataattend_creator_staff[".googleLikeFields"][] = "teach_day_staff";
$tdataattend_creator_staff[".googleLikeFields"][] = "teach_day";


$tdataattend_creator_staff[".advSearchFields"][] = "amonth";
$tdataattend_creator_staff[".advSearchFields"][] = "ayear";
$tdataattend_creator_staff[".advSearchFields"][] = "teach_day_staff";

$tdataattend_creator_staff[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataattend_creator_staff[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataattend_creator_staff[".strOrderBy"] = $tstrOrderBy;

$tdataattend_creator_staff[".orderindexes"] = array();

$tdataattend_creator_staff[".sqlHead"] = "SELECT aid,  amonth,  ayear,  teach_day_staff,  teach_day";
$tdataattend_creator_staff[".sqlFrom"] = "FROM attend_creator";
$tdataattend_creator_staff[".sqlWhereExpr"] = "(teach_day IS NULL)";
$tdataattend_creator_staff[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataattend_creator_staff[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataattend_creator_staff[".arrGroupsPerPage"] = $arrGPP;

$tableKeysattend_creator_staff = array();
$tableKeysattend_creator_staff[] = "aid";
$tdataattend_creator_staff[".Keys"] = $tableKeysattend_creator_staff;

$tdataattend_creator_staff[".listFields"] = array();
$tdataattend_creator_staff[".listFields"][] = "amonth";
$tdataattend_creator_staff[".listFields"][] = "ayear";
$tdataattend_creator_staff[".listFields"][] = "teach_day_staff";

$tdataattend_creator_staff[".viewFields"] = array();

$tdataattend_creator_staff[".addFields"] = array();

$tdataattend_creator_staff[".inlineAddFields"] = array();
$tdataattend_creator_staff[".inlineAddFields"][] = "amonth";
$tdataattend_creator_staff[".inlineAddFields"][] = "ayear";
$tdataattend_creator_staff[".inlineAddFields"][] = "teach_day_staff";

$tdataattend_creator_staff[".editFields"] = array();

$tdataattend_creator_staff[".inlineEditFields"] = array();
$tdataattend_creator_staff[".inlineEditFields"][] = "amonth";
$tdataattend_creator_staff[".inlineEditFields"][] = "ayear";
$tdataattend_creator_staff[".inlineEditFields"][] = "teach_day_staff";

$tdataattend_creator_staff[".exportFields"] = array();

$tdataattend_creator_staff[".printFields"] = array();

//	aid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aid";
	$fdata["GoodName"] = "aid";
	$fdata["ownerTable"] = "attend_creator";
	$fdata["Label"] = "Aid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "aid"; 
		$fdata["FullName"] = "aid";
	
		
		
				
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
	
		
		
	$tdataattend_creator_staff["aid"] = $fdata;
//	amonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "amonth";
	$fdata["GoodName"] = "amonth";
	$fdata["ownerTable"] = "attend_creator";
	$fdata["Label"] = "Bulan"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "amonth"; 
		$fdata["FullName"] = "amonth";
	
		
		
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
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataattend_creator_staff["amonth"] = $fdata;
//	ayear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ayear";
	$fdata["GoodName"] = "ayear";
	$fdata["ownerTable"] = "attend_creator";
	$fdata["Label"] = "Tahun"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ayear"; 
		$fdata["FullName"] = "ayear";
	
		
		
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
			$edata["EditParams"].= " maxlength=4";
	
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataattend_creator_staff["ayear"] = $fdata;
//	teach_day_staff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "teach_day_staff";
	$fdata["GoodName"] = "teach_day_staff";
	$fdata["ownerTable"] = "attend_creator";
	$fdata["Label"] = "Hari Bekerja"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "teach_day_staff"; 
		$fdata["FullName"] = "teach_day_staff";
	
		
		
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
	
		
		
	$tdataattend_creator_staff["teach_day_staff"] = $fdata;
//	teach_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "teach_day";
	$fdata["GoodName"] = "teach_day";
	$fdata["ownerTable"] = "attend_creator";
	$fdata["Label"] = "Hari Mengajar"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "teach_day"; 
		$fdata["FullName"] = "teach_day";
	
		
		
				
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
	
		
		
	$tdataattend_creator_staff["teach_day"] = $fdata;

	
$tables_data["attend_creator_staff"]=&$tdataattend_creator_staff;
$field_labels["attend_creator_staff"] = &$fieldLabelsattend_creator_staff;
$fieldToolTips["attend_creator_staff"] = &$fieldToolTipsattend_creator_staff;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["attend_creator_staff"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["attend_creator_staff"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_attend_creator_staff()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aid,  amonth,  ayear,  teach_day_staff,  teach_day";
$proto0["m_strFrom"] = "FROM attend_creator";
$proto0["m_strWhere"] = "(teach_day IS NULL)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "teach_day IS NULL";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "teach_day",
	"m_strTable" => "attend_creator"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "IS NULL";
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
	"m_strName" => "aid",
	"m_strTable" => "attend_creator"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "amonth",
	"m_strTable" => "attend_creator"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ayear",
	"m_strTable" => "attend_creator"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "teach_day_staff",
	"m_strTable" => "attend_creator"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "teach_day",
	"m_strTable" => "attend_creator"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "attend_creator";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "aid";
$proto16["m_columns"][] = "amonth";
$proto16["m_columns"][] = "ayear";
$proto16["m_columns"][] = "teach_day";
$proto16["m_columns"][] = "teach_day_staff";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_attend_creator_staff = createSqlQuery_attend_creator_staff();
					$tdataattend_creator_staff[".sqlquery"] = $queryData_attend_creator_staff;

$tableEvents["attend_creator_staff"] = new eventsBase;
$tdataattend_creator_staff[".hasEvents"] = false;

$cipherer = new RunnerCipherer("attend_creator_staff");

?>