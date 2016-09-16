<?php
require_once(getabspath("classes/cipherer.php"));
$tdataw_gallery = array();
	$tdataw_gallery[".NumberOfChars"] = 80; 
	$tdataw_gallery[".ShortName"] = "w_gallery";
	$tdataw_gallery[".OwnerID"] = "";
	$tdataw_gallery[".OriginalTable"] = "w_gallery";

//	field labels
$fieldLabelsw_gallery = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsw_gallery["Malay"] = array();
	$fieldToolTipsw_gallery["Malay"] = array();
	$fieldLabelsw_gallery["Malay"]["wcat"] = "Wcat";
	$fieldToolTipsw_gallery["Malay"]["wcat"] = "";
	$fieldLabelsw_gallery["Malay"]["category_name"] = "Nama Album";
	$fieldToolTipsw_gallery["Malay"]["category_name"] = "";
	if (count($fieldToolTipsw_gallery["Malay"]))
		$tdataw_gallery[".isUseToolTips"] = true;
}
	
	
	$tdataw_gallery[".NCSearch"] = true;



$tdataw_gallery[".shortTableName"] = "w_gallery";
$tdataw_gallery[".nSecOptions"] = 0;
$tdataw_gallery[".recsPerRowList"] = 1;
$tdataw_gallery[".mainTableOwnerID"] = "";
$tdataw_gallery[".moveNext"] = 1;
$tdataw_gallery[".nType"] = 0;

$tdataw_gallery[".strOriginalTableName"] = "w_gallery";




$tdataw_gallery[".showAddInPopup"] = false;

$tdataw_gallery[".showEditInPopup"] = false;

$tdataw_gallery[".showViewInPopup"] = false;

$tdataw_gallery[".fieldsForRegister"] = array();
	
$tdataw_gallery[".listAjax"] = false;

	$tdataw_gallery[".audit"] = false;

	$tdataw_gallery[".locking"] = false;

$tdataw_gallery[".listIcons"] = true;
$tdataw_gallery[".inlineEdit"] = true;
$tdataw_gallery[".inlineAdd"] = true;



$tdataw_gallery[".delete"] = true;

$tdataw_gallery[".showSimpleSearchOptions"] = false;

$tdataw_gallery[".showSearchPanel"] = true;

if (isMobile())
	$tdataw_gallery[".isUseAjaxSuggest"] = false;
else 
	$tdataw_gallery[".isUseAjaxSuggest"] = true;

$tdataw_gallery[".rowHighlite"] = true;

// button handlers file names

$tdataw_gallery[".addPageEvents"] = false;

// use timepicker for search panel
$tdataw_gallery[".isUseTimeForSearch"] = false;



$tdataw_gallery[".useDetailsPreview"] = true;

$tdataw_gallery[".allSearchFields"] = array();

$tdataw_gallery[".allSearchFields"][] = "category_name";

$tdataw_gallery[".googleLikeFields"][] = "wcat";
$tdataw_gallery[".googleLikeFields"][] = "category_name";


$tdataw_gallery[".advSearchFields"][] = "category_name";

$tdataw_gallery[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataw_gallery[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataw_gallery[".strOrderBy"] = $tstrOrderBy;

$tdataw_gallery[".orderindexes"] = array();

$tdataw_gallery[".sqlHead"] = "SELECT wcat,  category_name";
$tdataw_gallery[".sqlFrom"] = "FROM w_gallery";
$tdataw_gallery[".sqlWhereExpr"] = "";
$tdataw_gallery[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataw_gallery[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataw_gallery[".arrGroupsPerPage"] = $arrGPP;

$tableKeysw_gallery = array();
$tableKeysw_gallery[] = "wcat";
$tdataw_gallery[".Keys"] = $tableKeysw_gallery;

$tdataw_gallery[".listFields"] = array();
$tdataw_gallery[".listFields"][] = "category_name";

$tdataw_gallery[".viewFields"] = array();

$tdataw_gallery[".addFields"] = array();

$tdataw_gallery[".inlineAddFields"] = array();
$tdataw_gallery[".inlineAddFields"][] = "category_name";

$tdataw_gallery[".editFields"] = array();

$tdataw_gallery[".inlineEditFields"] = array();
$tdataw_gallery[".inlineEditFields"][] = "category_name";

$tdataw_gallery[".exportFields"] = array();

$tdataw_gallery[".printFields"] = array();

//	wcat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "wcat";
	$fdata["GoodName"] = "wcat";
	$fdata["ownerTable"] = "w_gallery";
	$fdata["Label"] = "Wcat"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "wcat"; 
		$fdata["FullName"] = "wcat";
	
		
		
				
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
	
		
		
	$tdataw_gallery["wcat"] = $fdata;
//	category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_name";
	$fdata["GoodName"] = "category_name";
	$fdata["ownerTable"] = "w_gallery";
	$fdata["Label"] = "Nama Album"; 
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_gallery["category_name"] = $fdata;

	
$tables_data["w_gallery"]=&$tdataw_gallery;
$field_labels["w_gallery"] = &$fieldLabelsw_gallery;
$fieldToolTips["w_gallery"] = &$fieldToolTipsw_gallery;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["w_gallery"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="w_gallery_sub";
	$detailsParam["dDataSourceTable"]="w_gallery_sub";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="w_gallery_sub";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["w_gallery"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["w_gallery"][$dIndex]["masterKeys"][]="wcat";
		$detailsTablesData["w_gallery"][$dIndex]["detailKeys"][]="wcat";

	
// tables which are master tables for current table (detail)
$masterTablesData["w_gallery"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_w_gallery()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "wcat,  category_name";
$proto0["m_strFrom"] = "FROM w_gallery";
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
	"m_strName" => "wcat",
	"m_strTable" => "w_gallery"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "category_name",
	"m_strTable" => "w_gallery"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "w_gallery";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "wcat";
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
$queryData_w_gallery = createSqlQuery_w_gallery();
		$tdataw_gallery[".sqlquery"] = $queryData_w_gallery;

$tableEvents["w_gallery"] = new eventsBase;
$tdataw_gallery[".hasEvents"] = false;

$cipherer = new RunnerCipherer("w_gallery");

?>