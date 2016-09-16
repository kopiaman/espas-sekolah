<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff_valuation = array();
	$tdatastaff_valuation[".NumberOfChars"] = 80; 
	$tdatastaff_valuation[".ShortName"] = "staff_valuation";
	$tdatastaff_valuation[".OwnerID"] = "";
	$tdatastaff_valuation[".OriginalTable"] = "staff_valuation";

//	field labels
$fieldLabelsstaff_valuation = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstaff_valuation["Malay"] = array();
	$fieldToolTipsstaff_valuation["Malay"] = array();
	$fieldLabelsstaff_valuation["Malay"]["svid"] = "Svid";
	$fieldToolTipsstaff_valuation["Malay"]["svid"] = "";
	$fieldLabelsstaff_valuation["Malay"]["StaffID"] = "Staff ID";
	$fieldToolTipsstaff_valuation["Malay"]["StaffID"] = "";
	$fieldLabelsstaff_valuation["Malay"]["rate"] = "Pencapaian";
	$fieldToolTipsstaff_valuation["Malay"]["rate"] = "";
	$fieldLabelsstaff_valuation["Malay"]["sdate"] = "Tarikh";
	$fieldToolTipsstaff_valuation["Malay"]["sdate"] = "";
	$fieldLabelsstaff_valuation["Malay"]["remark"] = "Catatan";
	$fieldToolTipsstaff_valuation["Malay"]["remark"] = "";
	if (count($fieldToolTipsstaff_valuation["Malay"]))
		$tdatastaff_valuation[".isUseToolTips"] = true;
}
	
	
	$tdatastaff_valuation[".NCSearch"] = true;



$tdatastaff_valuation[".shortTableName"] = "staff_valuation";
$tdatastaff_valuation[".nSecOptions"] = 0;
$tdatastaff_valuation[".recsPerRowList"] = 1;
$tdatastaff_valuation[".mainTableOwnerID"] = "";
$tdatastaff_valuation[".moveNext"] = 1;
$tdatastaff_valuation[".nType"] = 0;

$tdatastaff_valuation[".strOriginalTableName"] = "staff_valuation";




$tdatastaff_valuation[".showAddInPopup"] = false;

$tdatastaff_valuation[".showEditInPopup"] = false;

$tdatastaff_valuation[".showViewInPopup"] = false;

$tdatastaff_valuation[".fieldsForRegister"] = array();
	
$tdatastaff_valuation[".listAjax"] = false;

	$tdatastaff_valuation[".audit"] = false;

	$tdatastaff_valuation[".locking"] = false;

$tdatastaff_valuation[".listIcons"] = true;
$tdatastaff_valuation[".inlineEdit"] = true;
$tdatastaff_valuation[".inlineAdd"] = true;
$tdatastaff_valuation[".view"] = true;



$tdatastaff_valuation[".delete"] = true;

$tdatastaff_valuation[".showSimpleSearchOptions"] = false;

$tdatastaff_valuation[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff_valuation[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff_valuation[".isUseAjaxSuggest"] = true;

$tdatastaff_valuation[".rowHighlite"] = true;

// button handlers file names

$tdatastaff_valuation[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff_valuation[".isUseTimeForSearch"] = false;




$tdatastaff_valuation[".allSearchFields"] = array();

$tdatastaff_valuation[".allSearchFields"][] = "rate";
$tdatastaff_valuation[".allSearchFields"][] = "sdate";
$tdatastaff_valuation[".allSearchFields"][] = "remark";

$tdatastaff_valuation[".googleLikeFields"][] = "svid";
$tdatastaff_valuation[".googleLikeFields"][] = "StaffID";
$tdatastaff_valuation[".googleLikeFields"][] = "rate";
$tdatastaff_valuation[".googleLikeFields"][] = "sdate";
$tdatastaff_valuation[".googleLikeFields"][] = "remark";


$tdatastaff_valuation[".advSearchFields"][] = "rate";
$tdatastaff_valuation[".advSearchFields"][] = "sdate";
$tdatastaff_valuation[".advSearchFields"][] = "remark";

$tdatastaff_valuation[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastaff_valuation[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff_valuation[".strOrderBy"] = $tstrOrderBy;

$tdatastaff_valuation[".orderindexes"] = array();

$tdatastaff_valuation[".sqlHead"] = "SELECT svid,   StaffID,   rate,   sdate,   remark";
$tdatastaff_valuation[".sqlFrom"] = "FROM staff_valuation";
$tdatastaff_valuation[".sqlWhereExpr"] = "";
$tdatastaff_valuation[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff_valuation[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff_valuation[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff_valuation = array();
$tableKeysstaff_valuation[] = "svid";
$tdatastaff_valuation[".Keys"] = $tableKeysstaff_valuation;

$tdatastaff_valuation[".listFields"] = array();
$tdatastaff_valuation[".listFields"][] = "rate";
$tdatastaff_valuation[".listFields"][] = "sdate";
$tdatastaff_valuation[".listFields"][] = "remark";

$tdatastaff_valuation[".viewFields"] = array();
$tdatastaff_valuation[".viewFields"][] = "rate";
$tdatastaff_valuation[".viewFields"][] = "sdate";
$tdatastaff_valuation[".viewFields"][] = "remark";

$tdatastaff_valuation[".addFields"] = array();

$tdatastaff_valuation[".inlineAddFields"] = array();
$tdatastaff_valuation[".inlineAddFields"][] = "rate";
$tdatastaff_valuation[".inlineAddFields"][] = "sdate";
$tdatastaff_valuation[".inlineAddFields"][] = "remark";

$tdatastaff_valuation[".editFields"] = array();

$tdatastaff_valuation[".inlineEditFields"] = array();
$tdatastaff_valuation[".inlineEditFields"][] = "rate";
$tdatastaff_valuation[".inlineEditFields"][] = "sdate";
$tdatastaff_valuation[".inlineEditFields"][] = "remark";

$tdatastaff_valuation[".exportFields"] = array();

$tdatastaff_valuation[".printFields"] = array();

//	svid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "svid";
	$fdata["GoodName"] = "svid";
	$fdata["ownerTable"] = "staff_valuation";
	$fdata["Label"] = "Svid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "svid"; 
		$fdata["FullName"] = "svid";
	
		
		
				
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
	
		
		
	$tdatastaff_valuation["svid"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "staff_valuation";
	$fdata["Label"] = "Staff ID"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StaffID"; 
		$fdata["FullName"] = "StaffID";
	
		
		
				
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
	
		
		
	$tdatastaff_valuation["StaffID"] = $fdata;
//	rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rate";
	$fdata["GoodName"] = "rate";
	$fdata["ownerTable"] = "staff_valuation";
	$fdata["Label"] = "Pencapaian"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "rate"; 
		$fdata["FullName"] = "rate";
	
		
		
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
	
		
		
	$tdatastaff_valuation["rate"] = $fdata;
//	sdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sdate";
	$fdata["GoodName"] = "sdate";
	$fdata["ownerTable"] = "staff_valuation";
	$fdata["Label"] = "Tarikh"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sdate"; 
		$fdata["FullName"] = "sdate";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_valuation["sdate"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "staff_valuation";
	$fdata["Label"] = "Catatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "remark"; 
		$fdata["FullName"] = "remark";
	
		
		
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
	
		
		
	$tdatastaff_valuation["remark"] = $fdata;

	
$tables_data["staff_valuation"]=&$tdatastaff_valuation;
$field_labels["staff_valuation"] = &$fieldLabelsstaff_valuation;
$fieldToolTips["staff_valuation"] = &$fieldToolTipsstaff_valuation;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff_valuation"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["staff_valuation"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="staff_info";
	$masterParams["mDataSourceTable"]="staff_info";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "staff_info";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["staff_valuation"][$mIndex] = $masterParams;	
		$masterTablesData["staff_valuation"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["staff_valuation"][$mIndex]["detailKeys"][]="StaffID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff_valuation()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "svid,   StaffID,   rate,   sdate,   remark";
$proto0["m_strFrom"] = "FROM staff_valuation";
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
	"m_strName" => "svid",
	"m_strTable" => "staff_valuation"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "staff_valuation"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "rate",
	"m_strTable" => "staff_valuation"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "sdate",
	"m_strTable" => "staff_valuation"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "staff_valuation"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "staff_valuation";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "svid";
$proto16["m_columns"][] = "StaffID";
$proto16["m_columns"][] = "rate";
$proto16["m_columns"][] = "sdate";
$proto16["m_columns"][] = "remark";
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
$queryData_staff_valuation = createSqlQuery_staff_valuation();
					$tdatastaff_valuation[".sqlquery"] = $queryData_staff_valuation;

$tableEvents["staff_valuation"] = new eventsBase;
$tdatastaff_valuation[".hasEvents"] = false;

$cipherer = new RunnerCipherer("staff_valuation");

?>