<?php
require_once(getabspath("classes/cipherer.php"));
$tdatabill_record = array();
	$tdatabill_record[".NumberOfChars"] = 80; 
	$tdatabill_record[".ShortName"] = "bill_record";
	$tdatabill_record[".OwnerID"] = "";
	$tdatabill_record[".OriginalTable"] = "bill_record";

//	field labels
$fieldLabelsbill_record = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsbill_record["Malay"] = array();
	$fieldToolTipsbill_record["Malay"] = array();
	$fieldLabelsbill_record["Malay"]["darjah"] = "Darjah";
	$fieldToolTipsbill_record["Malay"]["darjah"] = "";
	$fieldLabelsbill_record["Malay"]["bid"] = "Bid";
	$fieldToolTipsbill_record["Malay"]["bid"] = "";
	$fieldLabelsbill_record["Malay"]["itemid"] = "Item";
	$fieldToolTipsbill_record["Malay"]["itemid"] = "";
	$fieldLabelsbill_record["Malay"]["amount"] = "Jumlah (RM)";
	$fieldToolTipsbill_record["Malay"]["amount"] = "";
	$fieldLabelsbill_record["Malay"]["bill_date"] = "Tarikh Bil";
	$fieldToolTipsbill_record["Malay"]["bill_date"] = "";
	$fieldLabelsbill_record["Malay"]["bill_no"] = "No Bil";
	$fieldToolTipsbill_record["Malay"]["bill_no"] = "";
	$fieldLabelsbill_record["Malay"]["sstatus"] = "Status";
	$fieldToolTipsbill_record["Malay"]["sstatus"] = "";
	if (count($fieldToolTipsbill_record["Malay"]))
		$tdatabill_record[".isUseToolTips"] = true;
}
	
	
	$tdatabill_record[".NCSearch"] = true;



$tdatabill_record[".shortTableName"] = "bill_record";
$tdatabill_record[".nSecOptions"] = 0;
$tdatabill_record[".recsPerRowList"] = 1;
$tdatabill_record[".mainTableOwnerID"] = "";
$tdatabill_record[".moveNext"] = 1;
$tdatabill_record[".nType"] = 0;

$tdatabill_record[".strOriginalTableName"] = "bill_record";




$tdatabill_record[".showAddInPopup"] = false;

$tdatabill_record[".showEditInPopup"] = false;

$tdatabill_record[".showViewInPopup"] = false;

$tdatabill_record[".fieldsForRegister"] = array();
	
$tdatabill_record[".listAjax"] = false;

	$tdatabill_record[".audit"] = false;

	$tdatabill_record[".locking"] = false;

$tdatabill_record[".listIcons"] = true;
$tdatabill_record[".inlineAdd"] = true;



$tdatabill_record[".delete"] = true;

$tdatabill_record[".showSimpleSearchOptions"] = false;

$tdatabill_record[".showSearchPanel"] = true;

if (isMobile())
	$tdatabill_record[".isUseAjaxSuggest"] = false;
else 
	$tdatabill_record[".isUseAjaxSuggest"] = true;

$tdatabill_record[".rowHighlite"] = true;

// button handlers file names
$tdatabill_record[".isUsebuttonHandlers"] = true;

$tdatabill_record[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabill_record[".isUseTimeForSearch"] = false;




$tdatabill_record[".allSearchFields"] = array();

$tdatabill_record[".allSearchFields"][] = "darjah";
$tdatabill_record[".allSearchFields"][] = "itemid";
$tdatabill_record[".allSearchFields"][] = "amount";
$tdatabill_record[".allSearchFields"][] = "bill_date";
$tdatabill_record[".allSearchFields"][] = "bill_no";

$tdatabill_record[".googleLikeFields"][] = "itemid";
$tdatabill_record[".googleLikeFields"][] = "amount";
$tdatabill_record[".googleLikeFields"][] = "bill_date";
$tdatabill_record[".googleLikeFields"][] = "bill_no";
$tdatabill_record[".googleLikeFields"][] = "darjah";


$tdatabill_record[".advSearchFields"][] = "darjah";
$tdatabill_record[".advSearchFields"][] = "itemid";
$tdatabill_record[".advSearchFields"][] = "amount";
$tdatabill_record[".advSearchFields"][] = "bill_date";
$tdatabill_record[".advSearchFields"][] = "bill_no";

$tdatabill_record[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatabill_record[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY darjah";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabill_record[".strOrderBy"] = $tstrOrderBy;

$tdatabill_record[".orderindexes"] = array();
$tdatabill_record[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "darjah");

$tdatabill_record[".sqlHead"] = "SELECT bid,  itemid,  amount,  bill_date,  bill_no,  darjah,  sstatus";
$tdatabill_record[".sqlFrom"] = "FROM bill_record";
$tdatabill_record[".sqlWhereExpr"] = "";
$tdatabill_record[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabill_record[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabill_record[".arrGroupsPerPage"] = $arrGPP;

$tableKeysbill_record = array();
$tableKeysbill_record[] = "bid";
$tdatabill_record[".Keys"] = $tableKeysbill_record;

$tdatabill_record[".listFields"] = array();
$tdatabill_record[".listFields"][] = "darjah";
$tdatabill_record[".listFields"][] = "itemid";
$tdatabill_record[".listFields"][] = "amount";
$tdatabill_record[".listFields"][] = "bill_date";
$tdatabill_record[".listFields"][] = "bill_no";
$tdatabill_record[".listFields"][] = "sstatus";

$tdatabill_record[".viewFields"] = array();

$tdatabill_record[".addFields"] = array();

$tdatabill_record[".inlineAddFields"] = array();
$tdatabill_record[".inlineAddFields"][] = "darjah";
$tdatabill_record[".inlineAddFields"][] = "itemid";
$tdatabill_record[".inlineAddFields"][] = "amount";
$tdatabill_record[".inlineAddFields"][] = "bill_date";
$tdatabill_record[".inlineAddFields"][] = "bill_no";

$tdatabill_record[".editFields"] = array();

$tdatabill_record[".inlineEditFields"] = array();

$tdatabill_record[".exportFields"] = array();

$tdatabill_record[".printFields"] = array();

//	bid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "bid";
	$fdata["GoodName"] = "bid";
	$fdata["ownerTable"] = "bill_record";
	$fdata["Label"] = "Bid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "bid"; 
		$fdata["FullName"] = "bid";
	
		
		
				
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
	
		
		
	$tdatabill_record["bid"] = $fdata;
//	itemid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "itemid";
	$fdata["GoodName"] = "itemid";
	$fdata["ownerTable"] = "bill_record";
	$fdata["Label"] = "Item"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "itemid"; 
		$fdata["FullName"] = "itemid";
	
		
		
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
				
		
			
	$edata["LinkField"] = "itemid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "bname";
	
		
	$edata["LookupTable"] = "bill_item";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabill_record["itemid"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "bill_record";
	$fdata["Label"] = "Jumlah (RM)"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "amount";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
			
		$edata["inputStyle"] = " width:80px;";
	$edata["controlWidth"] = 80;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabill_record["amount"] = $fdata;
//	bill_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "bill_date";
	$fdata["GoodName"] = "bill_date";
	$fdata["ownerTable"] = "bill_record";
	$fdata["Label"] = "Tarikh Bil"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "bill_date"; 
		$fdata["FullName"] = "bill_date";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 5; 
	$edata["LastYearFactor"] = 1; 
	
		
		
		$edata["inputStyle"] = " width:100px;";
	$edata["controlWidth"] = 100;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabill_record["bill_date"] = $fdata;
//	bill_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "bill_no";
	$fdata["GoodName"] = "bill_no";
	$fdata["ownerTable"] = "bill_record";
	$fdata["Label"] = "No Bil"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "bill_no"; 
		$fdata["FullName"] = "bill_no";
	
		
		
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
			
		$edata["inputStyle"] = " width:80px;";
	$edata["controlWidth"] = 80;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabill_record["bill_no"] = $fdata;
//	darjah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "darjah";
	$fdata["GoodName"] = "darjah";
	$fdata["ownerTable"] = "bill_record";
	$fdata["Label"] = "Darjah"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "darjah"; 
		$fdata["FullName"] = "darjah";
	
		
		
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
				
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";

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
	
		
		
	$tdatabill_record["darjah"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "bill_record";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sstatus"; 
		$fdata["FullName"] = "sstatus";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabill_record["sstatus"] = $fdata;

	
$tables_data["bill_record"]=&$tdatabill_record;
$field_labels["bill_record"] = &$fieldLabelsbill_record;
$fieldToolTips["bill_record"] = &$fieldToolTipsbill_record;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["bill_record"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["bill_record"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_bill_record()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bid,  itemid,  amount,  bill_date,  bill_no,  darjah,  sstatus";
$proto0["m_strFrom"] = "FROM bill_record";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY darjah";
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
	"m_strName" => "bid",
	"m_strTable" => "bill_record"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "itemid",
	"m_strTable" => "bill_record"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "bill_record"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "bill_date",
	"m_strTable" => "bill_record"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "bill_no",
	"m_strTable" => "bill_record"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "darjah",
	"m_strTable" => "bill_record"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "bill_record"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "bill_record";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "bid";
$proto20["m_columns"][] = "itemid";
$proto20["m_columns"][] = "amount";
$proto20["m_columns"][] = "bill_date";
$proto20["m_columns"][] = "bill_no";
$proto20["m_columns"][] = "darjah";
$proto20["m_columns"][] = "sstatus";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "darjah",
	"m_strTable" => "bill_record"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 1;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bill_record = createSqlQuery_bill_record();
							$tdatabill_record[".sqlquery"] = $queryData_bill_record;

include_once(getabspath("include/bill_record_events.php"));
$tableEvents["bill_record"] = new eventclass_bill_record;
$tdatabill_record[".hasEvents"] = true;

$cipherer = new RunnerCipherer("bill_record");

?>