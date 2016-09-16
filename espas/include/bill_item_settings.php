<?php
require_once(getabspath("classes/cipherer.php"));
$tdatabill_item = array();
	$tdatabill_item[".NumberOfChars"] = 80; 
	$tdatabill_item[".ShortName"] = "bill_item";
	$tdatabill_item[".OwnerID"] = "";
	$tdatabill_item[".OriginalTable"] = "bill_item";

//	field labels
$fieldLabelsbill_item = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsbill_item["Malay"] = array();
	$fieldToolTipsbill_item["Malay"] = array();
	$fieldLabelsbill_item["Malay"]["amount"] = "Jumlah RM";
	$fieldToolTipsbill_item["Malay"]["amount"] = "";
	$fieldLabelsbill_item["Malay"]["itemid"] = "Itemid";
	$fieldToolTipsbill_item["Malay"]["itemid"] = "";
	$fieldLabelsbill_item["Malay"]["bname"] = "Nama Yuran";
	$fieldToolTipsbill_item["Malay"]["bname"] = "";
	if (count($fieldToolTipsbill_item["Malay"]))
		$tdatabill_item[".isUseToolTips"] = true;
}
	
	
	$tdatabill_item[".NCSearch"] = true;



$tdatabill_item[".shortTableName"] = "bill_item";
$tdatabill_item[".nSecOptions"] = 0;
$tdatabill_item[".recsPerRowList"] = 1;
$tdatabill_item[".mainTableOwnerID"] = "";
$tdatabill_item[".moveNext"] = 1;
$tdatabill_item[".nType"] = 0;

$tdatabill_item[".strOriginalTableName"] = "bill_item";




$tdatabill_item[".showAddInPopup"] = false;

$tdatabill_item[".showEditInPopup"] = false;

$tdatabill_item[".showViewInPopup"] = false;

$tdatabill_item[".fieldsForRegister"] = array();
	
$tdatabill_item[".listAjax"] = false;

	$tdatabill_item[".audit"] = false;

	$tdatabill_item[".locking"] = false;

$tdatabill_item[".listIcons"] = true;
$tdatabill_item[".inlineEdit"] = true;
$tdatabill_item[".inlineAdd"] = true;



$tdatabill_item[".delete"] = true;

$tdatabill_item[".showSimpleSearchOptions"] = false;

$tdatabill_item[".showSearchPanel"] = true;

if (isMobile())
	$tdatabill_item[".isUseAjaxSuggest"] = false;
else 
	$tdatabill_item[".isUseAjaxSuggest"] = true;

$tdatabill_item[".rowHighlite"] = true;

// button handlers file names

$tdatabill_item[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabill_item[".isUseTimeForSearch"] = false;




$tdatabill_item[".allSearchFields"] = array();

$tdatabill_item[".allSearchFields"][] = "bname";

$tdatabill_item[".googleLikeFields"][] = "itemid";
$tdatabill_item[".googleLikeFields"][] = "bname";
$tdatabill_item[".googleLikeFields"][] = "amount";


$tdatabill_item[".advSearchFields"][] = "bname";

$tdatabill_item[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatabill_item[".pageSize"] = 50;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabill_item[".strOrderBy"] = $tstrOrderBy;

$tdatabill_item[".orderindexes"] = array();

$tdatabill_item[".sqlHead"] = "SELECT itemid,   bname,   amount";
$tdatabill_item[".sqlFrom"] = "FROM bill_item";
$tdatabill_item[".sqlWhereExpr"] = "";
$tdatabill_item[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabill_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabill_item[".arrGroupsPerPage"] = $arrGPP;

$tableKeysbill_item = array();
$tableKeysbill_item[] = "itemid";
$tdatabill_item[".Keys"] = $tableKeysbill_item;

$tdatabill_item[".listFields"] = array();
$tdatabill_item[".listFields"][] = "bname";

$tdatabill_item[".viewFields"] = array();

$tdatabill_item[".addFields"] = array();

$tdatabill_item[".inlineAddFields"] = array();
$tdatabill_item[".inlineAddFields"][] = "bname";

$tdatabill_item[".editFields"] = array();

$tdatabill_item[".inlineEditFields"] = array();
$tdatabill_item[".inlineEditFields"][] = "bname";

$tdatabill_item[".exportFields"] = array();

$tdatabill_item[".printFields"] = array();

//	itemid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "itemid";
	$fdata["GoodName"] = "itemid";
	$fdata["ownerTable"] = "bill_item";
	$fdata["Label"] = "Itemid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "itemid"; 
		$fdata["FullName"] = "itemid";
	
		
		
				
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
	
		
		
	$tdatabill_item["itemid"] = $fdata;
//	bname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "bname";
	$fdata["GoodName"] = "bname";
	$fdata["ownerTable"] = "bill_item";
	$fdata["Label"] = "Nama Yuran"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "bname"; 
		$fdata["FullName"] = "bname";
	
		
		
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
	
		
		
	$tdatabill_item["bname"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "bill_item";
	$fdata["Label"] = "Jumlah RM"; 
	$fdata["FieldType"] = 5;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "amount";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdatabill_item["amount"] = $fdata;

	
$tables_data["bill_item"]=&$tdatabill_item;
$field_labels["bill_item"] = &$fieldLabelsbill_item;
$fieldToolTips["bill_item"] = &$fieldToolTipsbill_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["bill_item"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["bill_item"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_bill_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "itemid,   bname,   amount";
$proto0["m_strFrom"] = "FROM bill_item";
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
	"m_strName" => "itemid",
	"m_strTable" => "bill_item"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "bname",
	"m_strTable" => "bill_item"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "bill_item"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "bill_item";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "itemid";
$proto12["m_columns"][] = "bname";
$proto12["m_columns"][] = "amount";
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
$queryData_bill_item = createSqlQuery_bill_item();
			$tdatabill_item[".sqlquery"] = $queryData_bill_item;

$tableEvents["bill_item"] = new eventsBase;
$tdatabill_item[".hasEvents"] = false;

$cipherer = new RunnerCipherer("bill_item");

?>