<?php
require_once(getabspath("classes/cipherer.php"));
$tdataset_setting_category = array();
	$tdataset_setting_category[".NumberOfChars"] = 80; 
	$tdataset_setting_category[".ShortName"] = "set_setting_category";
	$tdataset_setting_category[".OwnerID"] = "";
	$tdataset_setting_category[".OriginalTable"] = "set_setting_category";

//	field labels
$fieldLabelsset_setting_category = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsset_setting_category["Malay"] = array();
	$fieldToolTipsset_setting_category["Malay"] = array();
	$fieldLabelsset_setting_category["Malay"]["id"] = "Id";
	$fieldToolTipsset_setting_category["Malay"]["id"] = "";
	$fieldLabelsset_setting_category["Malay"]["category_name"] = "Nama Kategori";
	$fieldToolTipsset_setting_category["Malay"]["category_name"] = "";
	if (count($fieldToolTipsset_setting_category["Malay"]))
		$tdataset_setting_category[".isUseToolTips"] = true;
}
	
	
	$tdataset_setting_category[".NCSearch"] = true;



$tdataset_setting_category[".shortTableName"] = "set_setting_category";
$tdataset_setting_category[".nSecOptions"] = 0;
$tdataset_setting_category[".recsPerRowList"] = 2;
$tdataset_setting_category[".mainTableOwnerID"] = "";
$tdataset_setting_category[".moveNext"] = 1;
$tdataset_setting_category[".nType"] = 0;

$tdataset_setting_category[".strOriginalTableName"] = "set_setting_category";




$tdataset_setting_category[".showAddInPopup"] = false;

$tdataset_setting_category[".showEditInPopup"] = false;

$tdataset_setting_category[".showViewInPopup"] = false;

$tdataset_setting_category[".fieldsForRegister"] = array();
	
$tdataset_setting_category[".listAjax"] = false;

	$tdataset_setting_category[".audit"] = false;

	$tdataset_setting_category[".locking"] = false;

$tdataset_setting_category[".listIcons"] = true;
$tdataset_setting_category[".inlineEdit"] = true;
$tdataset_setting_category[".inlineAdd"] = true;



$tdataset_setting_category[".delete"] = true;

$tdataset_setting_category[".showSimpleSearchOptions"] = false;

$tdataset_setting_category[".showSearchPanel"] = true;

if (isMobile())
	$tdataset_setting_category[".isUseAjaxSuggest"] = false;
else 
	$tdataset_setting_category[".isUseAjaxSuggest"] = true;

$tdataset_setting_category[".rowHighlite"] = true;

// button handlers file names

$tdataset_setting_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_setting_category[".isUseTimeForSearch"] = false;



$tdataset_setting_category[".useDetailsPreview"] = true;

$tdataset_setting_category[".allSearchFields"] = array();

$tdataset_setting_category[".allSearchFields"][] = "category_name";

$tdataset_setting_category[".googleLikeFields"][] = "category_name";

$tdataset_setting_category[".panelSearchFields"][] = "category_name";

$tdataset_setting_category[".advSearchFields"][] = "category_name";

$tdataset_setting_category[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataset_setting_category[".pageSize"] = 50;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_setting_category[".strOrderBy"] = $tstrOrderBy;

$tdataset_setting_category[".orderindexes"] = array();

$tdataset_setting_category[".sqlHead"] = "SELECT id,   category_name";
$tdataset_setting_category[".sqlFrom"] = "FROM set_setting_category";
$tdataset_setting_category[".sqlWhereExpr"] = "";
$tdataset_setting_category[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_setting_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_setting_category[".arrGroupsPerPage"] = $arrGPP;

$tableKeysset_setting_category = array();
$tableKeysset_setting_category[] = "id";
$tdataset_setting_category[".Keys"] = $tableKeysset_setting_category;

$tdataset_setting_category[".listFields"] = array();
$tdataset_setting_category[".listFields"][] = "category_name";
$tdataset_setting_category[".listFields"][] = "id";

$tdataset_setting_category[".viewFields"] = array();

$tdataset_setting_category[".addFields"] = array();

$tdataset_setting_category[".inlineAddFields"] = array();
$tdataset_setting_category[".inlineAddFields"][] = "category_name";

$tdataset_setting_category[".editFields"] = array();

$tdataset_setting_category[".inlineEditFields"] = array();
$tdataset_setting_category[".inlineEditFields"][] = "category_name";

$tdataset_setting_category[".exportFields"] = array();

$tdataset_setting_category[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "set_setting_category";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
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
	
		
		
	$tdataset_setting_category["id"] = $fdata;
//	category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_name";
	$fdata["GoodName"] = "category_name";
	$fdata["ownerTable"] = "set_setting_category";
	$fdata["Label"] = "Nama Kategori"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "category_name"; 
		$fdata["FullName"] = "category_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
		$edata["inputStyle"] = " width:250px;";
	$edata["controlWidth"] = 250;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataset_setting_category["category_name"] = $fdata;

	
$tables_data["set_setting_category"]=&$tdataset_setting_category;
$field_labels["set_setting_category"] = &$fieldLabelsset_setting_category;
$fieldToolTips["set_setting_category"] = &$fieldToolTipsset_setting_category;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_setting_category"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="setting";
	$detailsParam["dDataSourceTable"]="setting";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="setting";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["set_setting_category"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["set_setting_category"][$dIndex]["masterKeys"][]="id";
		$detailsTablesData["set_setting_category"][$dIndex]["detailKeys"][]="Class";

	
// tables which are master tables for current table (detail)
$masterTablesData["set_setting_category"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_setting_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   category_name";
$proto0["m_strFrom"] = "FROM set_setting_category";
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
	"m_strName" => "id",
	"m_strTable" => "set_setting_category"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "category_name",
	"m_strTable" => "set_setting_category"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "set_setting_category";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "category_name";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_setting_category = createSqlQuery_set_setting_category();
		$tdataset_setting_category[".sqlquery"] = $queryData_set_setting_category;

include_once(getabspath("include/set_setting_category_events.php"));
$tableEvents["set_setting_category"] = new eventclass_set_setting_category;
$tdataset_setting_category[".hasEvents"] = true;

$cipherer = new RunnerCipherer("set_setting_category");

?>