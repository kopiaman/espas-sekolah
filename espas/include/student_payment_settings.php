<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_payment = array();
	$tdatastudent_payment[".NumberOfChars"] = 80; 
	$tdatastudent_payment[".ShortName"] = "student_payment";
	$tdatastudent_payment[".OwnerID"] = "";
	$tdatastudent_payment[".OriginalTable"] = "student_payment";

//	field labels
$fieldLabelsstudent_payment = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstudent_payment["Malay"] = array();
	$fieldToolTipsstudent_payment["Malay"] = array();
	$fieldLabelsstudent_payment["Malay"]["pay_id"] = "Pay Id";
	$fieldToolTipsstudent_payment["Malay"]["pay_id"] = "";
	$fieldLabelsstudent_payment["Malay"]["amount"] = "Jumlah";
	$fieldToolTipsstudent_payment["Malay"]["amount"] = "";
	$fieldLabelsstudent_payment["Malay"]["pay_date"] = "Tarikh Bayar";
	$fieldToolTipsstudent_payment["Malay"]["pay_date"] = "";
	$fieldLabelsstudent_payment["Malay"]["terms"] = "Terma";
	$fieldToolTipsstudent_payment["Malay"]["terms"] = "";
	$fieldLabelsstudent_payment["Malay"]["ref_no"] = "No Resit";
	$fieldToolTipsstudent_payment["Malay"]["ref_no"] = "";
	$fieldLabelsstudent_payment["Malay"]["sid"] = "Sid";
	$fieldToolTipsstudent_payment["Malay"]["sid"] = "";
	$fieldLabelsstudent_payment["Malay"]["option"] = "Cetak";
	$fieldToolTipsstudent_payment["Malay"]["option"] = "";
	if (count($fieldToolTipsstudent_payment["Malay"]))
		$tdatastudent_payment[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_payment[".NCSearch"] = true;



$tdatastudent_payment[".shortTableName"] = "student_payment";
$tdatastudent_payment[".nSecOptions"] = 0;
$tdatastudent_payment[".recsPerRowList"] = 1;
$tdatastudent_payment[".mainTableOwnerID"] = "";
$tdatastudent_payment[".moveNext"] = 1;
$tdatastudent_payment[".nType"] = 0;

$tdatastudent_payment[".strOriginalTableName"] = "student_payment";




$tdatastudent_payment[".showAddInPopup"] = false;

$tdatastudent_payment[".showEditInPopup"] = false;

$tdatastudent_payment[".showViewInPopup"] = false;

$tdatastudent_payment[".fieldsForRegister"] = array();
	
$tdatastudent_payment[".listAjax"] = false;

	$tdatastudent_payment[".audit"] = false;

	$tdatastudent_payment[".locking"] = false;

$tdatastudent_payment[".listIcons"] = true;
$tdatastudent_payment[".inlineEdit"] = true;
$tdatastudent_payment[".inlineAdd"] = true;



$tdatastudent_payment[".delete"] = true;

$tdatastudent_payment[".showSimpleSearchOptions"] = false;

$tdatastudent_payment[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_payment[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_payment[".isUseAjaxSuggest"] = true;

$tdatastudent_payment[".rowHighlite"] = true;

// button handlers file names
$tdatastudent_payment[".isUsebuttonHandlers"] = true;

$tdatastudent_payment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_payment[".isUseTimeForSearch"] = false;




$tdatastudent_payment[".allSearchFields"] = array();


$tdatastudent_payment[".googleLikeFields"][] = "pay_id";
$tdatastudent_payment[".googleLikeFields"][] = "sid";
$tdatastudent_payment[".googleLikeFields"][] = "amount";
$tdatastudent_payment[".googleLikeFields"][] = "pay_date";
$tdatastudent_payment[".googleLikeFields"][] = "terms";
$tdatastudent_payment[".googleLikeFields"][] = "ref_no";
$tdatastudent_payment[".googleLikeFields"][] = "option";



$tdatastudent_payment[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdatastudent_payment[".totalsFields"][] = array(
	"fName" => "amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdatastudent_payment[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_payment[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_payment[".orderindexes"] = array();

$tdatastudent_payment[".sqlHead"] = "SELECT pay_id,  sid,  amount,  pay_date,  terms,  ref_no,  pay_id AS `option`";
$tdatastudent_payment[".sqlFrom"] = "FROM student_payment";
$tdatastudent_payment[".sqlWhereExpr"] = "";
$tdatastudent_payment[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_payment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_payment[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_payment = array();
$tableKeysstudent_payment[] = "pay_id";
$tdatastudent_payment[".Keys"] = $tableKeysstudent_payment;

$tdatastudent_payment[".listFields"] = array();
$tdatastudent_payment[".listFields"][] = "amount";
$tdatastudent_payment[".listFields"][] = "pay_date";
$tdatastudent_payment[".listFields"][] = "terms";
$tdatastudent_payment[".listFields"][] = "ref_no";
$tdatastudent_payment[".listFields"][] = "option";

$tdatastudent_payment[".viewFields"] = array();

$tdatastudent_payment[".addFields"] = array();

$tdatastudent_payment[".inlineAddFields"] = array();
$tdatastudent_payment[".inlineAddFields"][] = "amount";
$tdatastudent_payment[".inlineAddFields"][] = "pay_date";
$tdatastudent_payment[".inlineAddFields"][] = "terms";
$tdatastudent_payment[".inlineAddFields"][] = "ref_no";

$tdatastudent_payment[".editFields"] = array();

$tdatastudent_payment[".inlineEditFields"] = array();
$tdatastudent_payment[".inlineEditFields"][] = "amount";
$tdatastudent_payment[".inlineEditFields"][] = "pay_date";
$tdatastudent_payment[".inlineEditFields"][] = "terms";
$tdatastudent_payment[".inlineEditFields"][] = "ref_no";

$tdatastudent_payment[".exportFields"] = array();

$tdatastudent_payment[".printFields"] = array();

//	pay_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pay_id";
	$fdata["GoodName"] = "pay_id";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Pay Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pay_id"; 
		$fdata["FullName"] = "pay_id";
	
		
		
				
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
	
		
		
	$tdatastudent_payment["pay_id"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Sid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "sid";
	
		
		
				
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
	
		
		
	$tdatastudent_payment["sid"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Jumlah"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "amount";
	
		
		
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
	
		
		
	$tdatastudent_payment["amount"] = $fdata;
//	pay_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pay_date";
	$fdata["GoodName"] = "pay_date";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Tarikh Bayar"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "pay_date"; 
		$fdata["FullName"] = "pay_date";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_payment["pay_date"] = $fdata;
//	terms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "terms";
	$fdata["GoodName"] = "terms";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Terma"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "terms"; 
		$fdata["FullName"] = "terms";
	
		
		
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
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=29";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_payment["terms"] = $fdata;
//	ref_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ref_no";
	$fdata["GoodName"] = "ref_no";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "No Resit"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "ref_no"; 
		$fdata["FullName"] = "ref_no";
	
		
		
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
	
		
		
	$tdatastudent_payment["ref_no"] = $fdata;
//	option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "option";
	$fdata["GoodName"] = "option";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Cetak"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pay_id"; 
		$fdata["FullName"] = "pay_id";
	
		
		
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
	
		
		
	$tdatastudent_payment["option"] = $fdata;

	
$tables_data["student_payment"]=&$tdatastudent_payment;
$field_labels["student_payment"] = &$fieldLabelsstudent_payment;
$fieldToolTips["student_payment"] = &$fieldToolTipsstudent_payment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_payment"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_payment"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_billing";
	$masterParams["mDataSourceTable"]="student_billing";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student_billing";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["student_payment"][$mIndex] = $masterParams;	
		$masterTablesData["student_payment"][$mIndex]["masterKeys"][]="sid";
		$masterTablesData["student_payment"][$mIndex]["detailKeys"][]="sid";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_payment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pay_id,  sid,  amount,  pay_date,  terms,  ref_no,  pay_id AS `option`";
$proto0["m_strFrom"] = "FROM student_payment";
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
	"m_strName" => "pay_id",
	"m_strTable" => "student_payment"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "student_payment"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_payment"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pay_date",
	"m_strTable" => "student_payment"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "terms",
	"m_strTable" => "student_payment"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ref_no",
	"m_strTable" => "student_payment"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pay_id",
	"m_strTable" => "student_payment"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "option";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "student_payment";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "pay_id";
$proto20["m_columns"][] = "sid";
$proto20["m_columns"][] = "amount";
$proto20["m_columns"][] = "pay_date";
$proto20["m_columns"][] = "terms";
$proto20["m_columns"][] = "ref_no";
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
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_payment = createSqlQuery_student_payment();
							$tdatastudent_payment[".sqlquery"] = $queryData_student_payment;

include_once(getabspath("include/student_payment_events.php"));
$tableEvents["student_payment"] = new eventclass_student_payment;
$tdatastudent_payment[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_payment");

?>