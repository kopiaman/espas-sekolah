<?php
require_once(getabspath("classes/cipherer.php"));
$tdataaset = array();
	$tdataaset[".NumberOfChars"] = 80; 
	$tdataaset[".ShortName"] = "aset";
	$tdataaset[".OwnerID"] = "";
	$tdataaset[".OriginalTable"] = "aset";

//	field labels
$fieldLabelsaset = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsaset["Malay"] = array();
	$fieldToolTipsaset["Malay"] = array();
	$fieldLabelsaset["Malay"]["aid"] = "Aid";
	$fieldToolTipsaset["Malay"]["aid"] = "";
	$fieldLabelsaset["Malay"]["name"] = "Nama";
	$fieldToolTipsaset["Malay"]["name"] = "";
	$fieldLabelsaset["Malay"]["cat"] = "Kategori";
	$fieldToolTipsaset["Malay"]["cat"] = "";
	$fieldLabelsaset["Malay"]["sstatus"] = "Status";
	$fieldToolTipsaset["Malay"]["sstatus"] = "";
	$fieldLabelsaset["Malay"]["quantity"] = "Kuantiti";
	$fieldToolTipsaset["Malay"]["quantity"] = "";
	$fieldLabelsaset["Malay"]["catatan"] = "Catatan";
	$fieldToolTipsaset["Malay"]["catatan"] = "";
	if (count($fieldToolTipsaset["Malay"]))
		$tdataaset[".isUseToolTips"] = true;
}
	
	
	$tdataaset[".NCSearch"] = true;



$tdataaset[".shortTableName"] = "aset";
$tdataaset[".nSecOptions"] = 0;
$tdataaset[".recsPerRowList"] = 1;
$tdataaset[".mainTableOwnerID"] = "";
$tdataaset[".moveNext"] = 1;
$tdataaset[".nType"] = 0;

$tdataaset[".strOriginalTableName"] = "aset";




$tdataaset[".showAddInPopup"] = false;

$tdataaset[".showEditInPopup"] = false;

$tdataaset[".showViewInPopup"] = false;

$tdataaset[".fieldsForRegister"] = array();
	
$tdataaset[".listAjax"] = false;

	$tdataaset[".audit"] = false;

	$tdataaset[".locking"] = false;

$tdataaset[".listIcons"] = true;
$tdataaset[".inlineEdit"] = true;
$tdataaset[".inlineAdd"] = true;



$tdataaset[".delete"] = true;

$tdataaset[".showSimpleSearchOptions"] = false;

$tdataaset[".showSearchPanel"] = true;

if (isMobile())
	$tdataaset[".isUseAjaxSuggest"] = false;
else 
	$tdataaset[".isUseAjaxSuggest"] = true;

$tdataaset[".rowHighlite"] = true;

// button handlers file names
$tdataaset[".isUsebuttonHandlers"] = true;
$tdataaset[".isUsebuttonHandlers"] = true;

$tdataaset[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaset[".isUseTimeForSearch"] = false;




$tdataaset[".allSearchFields"] = array();

$tdataaset[".allSearchFields"][] = "name";
$tdataaset[".allSearchFields"][] = "cat";
$tdataaset[".allSearchFields"][] = "quantity";
$tdataaset[".allSearchFields"][] = "catatan";
$tdataaset[".allSearchFields"][] = "sstatus";

$tdataaset[".googleLikeFields"][] = "aid";
$tdataaset[".googleLikeFields"][] = "name";
$tdataaset[".googleLikeFields"][] = "cat";
$tdataaset[".googleLikeFields"][] = "quantity";
$tdataaset[".googleLikeFields"][] = "sstatus";
$tdataaset[".googleLikeFields"][] = "catatan";


$tdataaset[".advSearchFields"][] = "name";
$tdataaset[".advSearchFields"][] = "cat";
$tdataaset[".advSearchFields"][] = "quantity";
$tdataaset[".advSearchFields"][] = "catatan";
$tdataaset[".advSearchFields"][] = "sstatus";

$tdataaset[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataaset[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaset[".strOrderBy"] = $tstrOrderBy;

$tdataaset[".orderindexes"] = array();

$tdataaset[".sqlHead"] = "SELECT aid,   name,   cat,   quantity,   sstatus,   catatan";
$tdataaset[".sqlFrom"] = "FROM aset";
$tdataaset[".sqlWhereExpr"] = "";
$tdataaset[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaset[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaset[".arrGroupsPerPage"] = $arrGPP;

$tableKeysaset = array();
$tableKeysaset[] = "aid";
$tdataaset[".Keys"] = $tableKeysaset;

$tdataaset[".listFields"] = array();
$tdataaset[".listFields"][] = "name";
$tdataaset[".listFields"][] = "cat";
$tdataaset[".listFields"][] = "quantity";
$tdataaset[".listFields"][] = "catatan";
$tdataaset[".listFields"][] = "sstatus";

$tdataaset[".viewFields"] = array();

$tdataaset[".addFields"] = array();

$tdataaset[".inlineAddFields"] = array();
$tdataaset[".inlineAddFields"][] = "name";
$tdataaset[".inlineAddFields"][] = "cat";
$tdataaset[".inlineAddFields"][] = "quantity";
$tdataaset[".inlineAddFields"][] = "catatan";
$tdataaset[".inlineAddFields"][] = "sstatus";

$tdataaset[".editFields"] = array();

$tdataaset[".inlineEditFields"] = array();
$tdataaset[".inlineEditFields"][] = "name";
$tdataaset[".inlineEditFields"][] = "cat";
$tdataaset[".inlineEditFields"][] = "quantity";
$tdataaset[".inlineEditFields"][] = "catatan";
$tdataaset[".inlineEditFields"][] = "sstatus";

$tdataaset[".exportFields"] = array();

$tdataaset[".printFields"] = array();

//	aid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aid";
	$fdata["GoodName"] = "aid";
	$fdata["ownerTable"] = "aset";
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
	
		
		
	$tdataaset["aid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "aset";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "name"; 
		$fdata["FullName"] = "name";
	
		
		
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
	
		
		
	$tdataaset["name"] = $fdata;
//	cat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat";
	$fdata["GoodName"] = "cat";
	$fdata["ownerTable"] = "aset";
	$fdata["Label"] = "Kategori"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "cat"; 
		$fdata["FullName"] = "cat";
	
		
		
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
	$edata["LookupValues"][] = "Kawasan Sekolah";
	$edata["LookupValues"][] = "Keselamatan";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataaset["cat"] = $fdata;
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "aset";
	$fdata["Label"] = "Kuantiti"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "quantity"; 
		$fdata["FullName"] = "quantity";
	
		
		
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
	
		
		
	$tdataaset["quantity"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "aset";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sstatus"; 
		$fdata["FullName"] = "sstatus";
	
		
		
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
	$edata["LookupValues"][] = "Mencukupi";
	$edata["LookupValues"][] = "Tidak Mencukupi";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataaset["sstatus"] = $fdata;
//	catatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "catatan";
	$fdata["GoodName"] = "catatan";
	$fdata["ownerTable"] = "aset";
	$fdata["Label"] = "Catatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "catatan"; 
		$fdata["FullName"] = "catatan";
	
		
		
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
	
		
		
	$tdataaset["catatan"] = $fdata;

	
$tables_data["aset"]=&$tdataaset;
$field_labels["aset"] = &$fieldLabelsaset;
$fieldToolTips["aset"] = &$fieldToolTipsaset;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["aset"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["aset"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_aset()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aid,   name,   cat,   quantity,   sstatus,   catatan";
$proto0["m_strFrom"] = "FROM aset";
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
	"m_strTable" => "aset"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "aset"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cat",
	"m_strTable" => "aset"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "aset"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "aset"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "catatan",
	"m_strTable" => "aset"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "aset";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "aid";
$proto18["m_columns"][] = "name";
$proto18["m_columns"][] = "cat";
$proto18["m_columns"][] = "quantity";
$proto18["m_columns"][] = "sstatus";
$proto18["m_columns"][] = "catatan";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aset = createSqlQuery_aset();
						$tdataaset[".sqlquery"] = $queryData_aset;

include_once(getabspath("include/aset_events.php"));
$tableEvents["aset"] = new eventclass_aset;
$tdataaset[".hasEvents"] = true;

$cipherer = new RunnerCipherer("aset");

?>