<?php
require_once(getabspath("classes/cipherer.php"));
$tdataattend_creator = array();
	$tdataattend_creator[".NumberOfChars"] = 80; 
	$tdataattend_creator[".ShortName"] = "attend_creator";
	$tdataattend_creator[".OwnerID"] = "";
	$tdataattend_creator[".OriginalTable"] = "attend_creator";

//	field labels
$fieldLabelsattend_creator = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsattend_creator["Malay"] = array();
	$fieldToolTipsattend_creator["Malay"] = array();
	$fieldLabelsattend_creator["Malay"]["aid"] = "Aid";
	$fieldToolTipsattend_creator["Malay"]["aid"] = "";
	$fieldLabelsattend_creator["Malay"]["amonth"] = "Bulan";
	$fieldToolTipsattend_creator["Malay"]["amonth"] = "";
	$fieldLabelsattend_creator["Malay"]["ayear"] = "Tahun";
	$fieldToolTipsattend_creator["Malay"]["ayear"] = "";
	$fieldLabelsattend_creator["Malay"]["teach_day"] = "Bil Hari Mengajar";
	$fieldToolTipsattend_creator["Malay"]["teach_day"] = "";
	$fieldLabelsattend_creator["Malay"]["teach_day_staff"] = "Hari Mengajar";
	$fieldToolTipsattend_creator["Malay"]["teach_day_staff"] = "";
	if (count($fieldToolTipsattend_creator["Malay"]))
		$tdataattend_creator[".isUseToolTips"] = true;
}
	
	
	$tdataattend_creator[".NCSearch"] = true;



$tdataattend_creator[".shortTableName"] = "attend_creator";
$tdataattend_creator[".nSecOptions"] = 0;
$tdataattend_creator[".recsPerRowList"] = 1;
$tdataattend_creator[".mainTableOwnerID"] = "";
$tdataattend_creator[".moveNext"] = 1;
$tdataattend_creator[".nType"] = 0;

$tdataattend_creator[".strOriginalTableName"] = "attend_creator";




$tdataattend_creator[".showAddInPopup"] = false;

$tdataattend_creator[".showEditInPopup"] = false;

$tdataattend_creator[".showViewInPopup"] = false;

$tdataattend_creator[".fieldsForRegister"] = array();
	
$tdataattend_creator[".listAjax"] = false;

	$tdataattend_creator[".audit"] = false;

	$tdataattend_creator[".locking"] = false;

$tdataattend_creator[".listIcons"] = true;
$tdataattend_creator[".inlineAdd"] = true;



$tdataattend_creator[".delete"] = true;

$tdataattend_creator[".showSimpleSearchOptions"] = false;

$tdataattend_creator[".showSearchPanel"] = true;

if (isMobile())
	$tdataattend_creator[".isUseAjaxSuggest"] = false;
else 
	$tdataattend_creator[".isUseAjaxSuggest"] = true;

$tdataattend_creator[".rowHighlite"] = true;

// button handlers file names

$tdataattend_creator[".addPageEvents"] = false;

// use timepicker for search panel
$tdataattend_creator[".isUseTimeForSearch"] = false;




$tdataattend_creator[".allSearchFields"] = array();

$tdataattend_creator[".allSearchFields"][] = "amonth";
$tdataattend_creator[".allSearchFields"][] = "ayear";

$tdataattend_creator[".googleLikeFields"][] = "aid";
$tdataattend_creator[".googleLikeFields"][] = "amonth";
$tdataattend_creator[".googleLikeFields"][] = "ayear";
$tdataattend_creator[".googleLikeFields"][] = "teach_day";
$tdataattend_creator[".googleLikeFields"][] = "teach_day_staff";


$tdataattend_creator[".advSearchFields"][] = "amonth";
$tdataattend_creator[".advSearchFields"][] = "ayear";

$tdataattend_creator[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataattend_creator[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataattend_creator[".strOrderBy"] = $tstrOrderBy;

$tdataattend_creator[".orderindexes"] = array();

$tdataattend_creator[".sqlHead"] = "SELECT aid,   amonth,   ayear,   teach_day,   teach_day_staff";
$tdataattend_creator[".sqlFrom"] = "FROM attend_creator";
$tdataattend_creator[".sqlWhereExpr"] = "";
$tdataattend_creator[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataattend_creator[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataattend_creator[".arrGroupsPerPage"] = $arrGPP;

$tableKeysattend_creator = array();
$tableKeysattend_creator[] = "aid";
$tdataattend_creator[".Keys"] = $tableKeysattend_creator;

$tdataattend_creator[".listFields"] = array();
$tdataattend_creator[".listFields"][] = "amonth";
$tdataattend_creator[".listFields"][] = "ayear";
$tdataattend_creator[".listFields"][] = "teach_day";

$tdataattend_creator[".viewFields"] = array();

$tdataattend_creator[".addFields"] = array();

$tdataattend_creator[".inlineAddFields"] = array();
$tdataattend_creator[".inlineAddFields"][] = "amonth";
$tdataattend_creator[".inlineAddFields"][] = "ayear";
$tdataattend_creator[".inlineAddFields"][] = "teach_day";

$tdataattend_creator[".editFields"] = array();

$tdataattend_creator[".inlineEditFields"] = array();

$tdataattend_creator[".exportFields"] = array();

$tdataattend_creator[".printFields"] = array();

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
	
		
		
	$tdataattend_creator["aid"] = $fdata;
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
	
		
		
	$tdataattend_creator["amonth"] = $fdata;
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
	
		
		
	$tdataattend_creator["ayear"] = $fdata;
//	teach_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "teach_day";
	$fdata["GoodName"] = "teach_day";
	$fdata["ownerTable"] = "attend_creator";
	$fdata["Label"] = "Bil Hari Mengajar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		
		$fdata["strField"] = "teach_day"; 
		$fdata["FullName"] = "teach_day";
	
		
		
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
			$edata["EditParams"].= " maxlength=2";
	
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataattend_creator["teach_day"] = $fdata;
//	teach_day_staff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "teach_day_staff";
	$fdata["GoodName"] = "teach_day_staff";
	$fdata["ownerTable"] = "attend_creator";
	$fdata["Label"] = "Hari Mengajar"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "teach_day_staff"; 
		$fdata["FullName"] = "teach_day_staff";
	
		
		
				
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
	
		
		
	$tdataattend_creator["teach_day_staff"] = $fdata;

	
$tables_data["attend_creator"]=&$tdataattend_creator;
$field_labels["attend_creator"] = &$fieldLabelsattend_creator;
$fieldToolTips["attend_creator"] = &$fieldToolTipsattend_creator;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["attend_creator"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["attend_creator"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_attend_creator()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aid,   amonth,   ayear,   teach_day,   teach_day_staff";
$proto0["m_strFrom"] = "FROM attend_creator";
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
	"m_strName" => "teach_day",
	"m_strTable" => "attend_creator"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "teach_day_staff",
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
$queryData_attend_creator = createSqlQuery_attend_creator();
					$tdataattend_creator[".sqlquery"] = $queryData_attend_creator;

include_once(getabspath("include/attend_creator_events.php"));
$tableEvents["attend_creator"] = new eventclass_attend_creator;
$tdataattend_creator[".hasEvents"] = true;

$cipherer = new RunnerCipherer("attend_creator");

?>