<?php
require_once(getabspath("classes/cipherer.php"));
$tdataw_gallery_sub = array();
	$tdataw_gallery_sub[".NumberOfChars"] = 80; 
	$tdataw_gallery_sub[".ShortName"] = "w_gallery_sub";
	$tdataw_gallery_sub[".OwnerID"] = "";
	$tdataw_gallery_sub[".OriginalTable"] = "w_gallery_sub";

//	field labels
$fieldLabelsw_gallery_sub = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsw_gallery_sub["Malay"] = array();
	$fieldToolTipsw_gallery_sub["Malay"] = array();
	$fieldLabelsw_gallery_sub["Malay"]["wig"] = "Wig";
	$fieldToolTipsw_gallery_sub["Malay"]["wig"] = "";
	$fieldLabelsw_gallery_sub["Malay"]["wcat"] = "Wcat";
	$fieldToolTipsw_gallery_sub["Malay"]["wcat"] = "";
	$fieldLabelsw_gallery_sub["Malay"]["sub_cat"] = "Sub Album";
	$fieldToolTipsw_gallery_sub["Malay"]["sub_cat"] = "";
	if (count($fieldToolTipsw_gallery_sub["Malay"]))
		$tdataw_gallery_sub[".isUseToolTips"] = true;
}
	
	
	$tdataw_gallery_sub[".NCSearch"] = true;



$tdataw_gallery_sub[".shortTableName"] = "w_gallery_sub";
$tdataw_gallery_sub[".nSecOptions"] = 0;
$tdataw_gallery_sub[".recsPerRowList"] = 1;
$tdataw_gallery_sub[".mainTableOwnerID"] = "";
$tdataw_gallery_sub[".moveNext"] = 1;
$tdataw_gallery_sub[".nType"] = 0;

$tdataw_gallery_sub[".strOriginalTableName"] = "w_gallery_sub";




$tdataw_gallery_sub[".showAddInPopup"] = false;

$tdataw_gallery_sub[".showEditInPopup"] = false;

$tdataw_gallery_sub[".showViewInPopup"] = false;

$tdataw_gallery_sub[".fieldsForRegister"] = array();
	
$tdataw_gallery_sub[".listAjax"] = false;

	$tdataw_gallery_sub[".audit"] = false;

	$tdataw_gallery_sub[".locking"] = false;

$tdataw_gallery_sub[".listIcons"] = true;
$tdataw_gallery_sub[".inlineEdit"] = true;
$tdataw_gallery_sub[".inlineAdd"] = true;



$tdataw_gallery_sub[".delete"] = true;

$tdataw_gallery_sub[".showSimpleSearchOptions"] = false;

$tdataw_gallery_sub[".showSearchPanel"] = true;

if (isMobile())
	$tdataw_gallery_sub[".isUseAjaxSuggest"] = false;
else 
	$tdataw_gallery_sub[".isUseAjaxSuggest"] = true;

$tdataw_gallery_sub[".rowHighlite"] = true;

// button handlers file names

$tdataw_gallery_sub[".addPageEvents"] = false;

// use timepicker for search panel
$tdataw_gallery_sub[".isUseTimeForSearch"] = false;



$tdataw_gallery_sub[".useDetailsPreview"] = true;

$tdataw_gallery_sub[".allSearchFields"] = array();

$tdataw_gallery_sub[".allSearchFields"][] = "sub_cat";

$tdataw_gallery_sub[".googleLikeFields"][] = "wig";
$tdataw_gallery_sub[".googleLikeFields"][] = "wcat";
$tdataw_gallery_sub[".googleLikeFields"][] = "sub_cat";


$tdataw_gallery_sub[".advSearchFields"][] = "sub_cat";

$tdataw_gallery_sub[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataw_gallery_sub[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataw_gallery_sub[".strOrderBy"] = $tstrOrderBy;

$tdataw_gallery_sub[".orderindexes"] = array();

$tdataw_gallery_sub[".sqlHead"] = "SELECT wig,  wcat,  sub_cat";
$tdataw_gallery_sub[".sqlFrom"] = "FROM w_gallery_sub";
$tdataw_gallery_sub[".sqlWhereExpr"] = "";
$tdataw_gallery_sub[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataw_gallery_sub[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataw_gallery_sub[".arrGroupsPerPage"] = $arrGPP;

$tableKeysw_gallery_sub = array();
$tableKeysw_gallery_sub[] = "wig";
$tdataw_gallery_sub[".Keys"] = $tableKeysw_gallery_sub;

$tdataw_gallery_sub[".listFields"] = array();
$tdataw_gallery_sub[".listFields"][] = "sub_cat";

$tdataw_gallery_sub[".viewFields"] = array();

$tdataw_gallery_sub[".addFields"] = array();

$tdataw_gallery_sub[".inlineAddFields"] = array();
$tdataw_gallery_sub[".inlineAddFields"][] = "sub_cat";

$tdataw_gallery_sub[".editFields"] = array();

$tdataw_gallery_sub[".inlineEditFields"] = array();
$tdataw_gallery_sub[".inlineEditFields"][] = "sub_cat";

$tdataw_gallery_sub[".exportFields"] = array();

$tdataw_gallery_sub[".printFields"] = array();

//	wig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "wig";
	$fdata["GoodName"] = "wig";
	$fdata["ownerTable"] = "w_gallery_sub";
	$fdata["Label"] = "Wig"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "wig"; 
		$fdata["FullName"] = "wig";
	
		
		
				
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
	
		
		
	$tdataw_gallery_sub["wig"] = $fdata;
//	wcat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "wcat";
	$fdata["GoodName"] = "wcat";
	$fdata["ownerTable"] = "w_gallery_sub";
	$fdata["Label"] = "Wcat"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
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
	
		
		
	$tdataw_gallery_sub["wcat"] = $fdata;
//	sub_cat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sub_cat";
	$fdata["GoodName"] = "sub_cat";
	$fdata["ownerTable"] = "w_gallery_sub";
	$fdata["Label"] = "Sub Album"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sub_cat"; 
		$fdata["FullName"] = "sub_cat";
	
		
		
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
	
		
		
	$tdataw_gallery_sub["sub_cat"] = $fdata;

	
$tables_data["w_gallery_sub"]=&$tdataw_gallery_sub;
$field_labels["w_gallery_sub"] = &$fieldLabelsw_gallery_sub;
$fieldToolTips["w_gallery_sub"] = &$fieldToolTipsw_gallery_sub;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["w_gallery_sub"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="w_pic";
	$detailsParam["dDataSourceTable"]="w_pic";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="w_pic";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["w_gallery_sub"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["w_gallery_sub"][$dIndex]["masterKeys"][]="wig";
		$detailsTablesData["w_gallery_sub"][$dIndex]["detailKeys"][]="wig";

	
// tables which are master tables for current table (detail)
$masterTablesData["w_gallery_sub"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="w_gallery";
	$masterParams["mDataSourceTable"]="w_gallery";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "w_gallery";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["w_gallery_sub"][$mIndex] = $masterParams;	
		$masterTablesData["w_gallery_sub"][$mIndex]["masterKeys"][]="wcat";
		$masterTablesData["w_gallery_sub"][$mIndex]["detailKeys"][]="wcat";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_w_gallery_sub()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "wig,  wcat,  sub_cat";
$proto0["m_strFrom"] = "FROM w_gallery_sub";
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
	"m_strName" => "wig",
	"m_strTable" => "w_gallery_sub"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "wcat",
	"m_strTable" => "w_gallery_sub"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_cat",
	"m_strTable" => "w_gallery_sub"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "w_gallery_sub";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "wig";
$proto12["m_columns"][] = "wcat";
$proto12["m_columns"][] = "sub_cat";
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
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_w_gallery_sub = createSqlQuery_w_gallery_sub();
			$tdataw_gallery_sub[".sqlquery"] = $queryData_w_gallery_sub;

$tableEvents["w_gallery_sub"] = new eventsBase;
$tdataw_gallery_sub[".hasEvents"] = false;

$cipherer = new RunnerCipherer("w_gallery_sub");

?>