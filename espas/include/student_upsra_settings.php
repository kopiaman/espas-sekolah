<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_upsra = array();
	$tdatastudent_upsra[".NumberOfChars"] = 80; 
	$tdatastudent_upsra[".ShortName"] = "student_upsra";
	$tdatastudent_upsra[".OwnerID"] = "";
	$tdatastudent_upsra[".OriginalTable"] = "student_upsra";

//	field labels
$fieldLabelsstudent_upsra = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstudent_upsra["Malay"] = array();
	$fieldToolTipsstudent_upsra["Malay"] = array();
	$fieldLabelsstudent_upsra["Malay"]["sid"] = "Sid";
	$fieldToolTipsstudent_upsra["Malay"]["sid"] = "";
	$fieldLabelsstudent_upsra["Malay"]["name"] = "Murid";
	$fieldToolTipsstudent_upsra["Malay"]["name"] = "";
	$fieldLabelsstudent_upsra["Malay"]["icno"] = "IC/MyKad";
	$fieldToolTipsstudent_upsra["Malay"]["icno"] = "";
	$fieldLabelsstudent_upsra["Malay"]["scode"] = "Kod Sekolah";
	$fieldToolTipsstudent_upsra["Malay"]["scode"] = "";
	$fieldLabelsstudent_upsra["Malay"]["sstatus"] = "Status";
	$fieldToolTipsstudent_upsra["Malay"]["sstatus"] = "";
	$fieldLabelsstudent_upsra["Malay"]["syear"] = "Tahun";
	$fieldToolTipsstudent_upsra["Malay"]["syear"] = "";
	if (count($fieldToolTipsstudent_upsra["Malay"]))
		$tdatastudent_upsra[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_upsra[".NCSearch"] = true;



$tdatastudent_upsra[".shortTableName"] = "student_upsra";
$tdatastudent_upsra[".nSecOptions"] = 0;
$tdatastudent_upsra[".recsPerRowList"] = 1;
$tdatastudent_upsra[".mainTableOwnerID"] = "";
$tdatastudent_upsra[".moveNext"] = 1;
$tdatastudent_upsra[".nType"] = 0;

$tdatastudent_upsra[".strOriginalTableName"] = "student_upsra";




$tdatastudent_upsra[".showAddInPopup"] = false;

$tdatastudent_upsra[".showEditInPopup"] = false;

$tdatastudent_upsra[".showViewInPopup"] = false;

$tdatastudent_upsra[".fieldsForRegister"] = array();
	
$tdatastudent_upsra[".listAjax"] = false;

	$tdatastudent_upsra[".audit"] = false;

	$tdatastudent_upsra[".locking"] = false;

$tdatastudent_upsra[".listIcons"] = true;
$tdatastudent_upsra[".inlineAdd"] = true;



$tdatastudent_upsra[".delete"] = true;

$tdatastudent_upsra[".showSimpleSearchOptions"] = false;

$tdatastudent_upsra[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_upsra[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_upsra[".isUseAjaxSuggest"] = true;

$tdatastudent_upsra[".rowHighlite"] = true;

// button handlers file names
$tdatastudent_upsra[".isUsebuttonHandlers"] = true;
$tdatastudent_upsra[".isUsebuttonHandlers"] = true;

$tdatastudent_upsra[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_upsra[".isUseTimeForSearch"] = false;




$tdatastudent_upsra[".allSearchFields"] = array();

$tdatastudent_upsra[".allSearchFields"][] = "name";
$tdatastudent_upsra[".allSearchFields"][] = "icno";
$tdatastudent_upsra[".allSearchFields"][] = "syear";
$tdatastudent_upsra[".allSearchFields"][] = "sstatus";

$tdatastudent_upsra[".googleLikeFields"][] = "sid";
$tdatastudent_upsra[".googleLikeFields"][] = "name";
$tdatastudent_upsra[".googleLikeFields"][] = "scode";
$tdatastudent_upsra[".googleLikeFields"][] = "icno";
$tdatastudent_upsra[".googleLikeFields"][] = "syear";
$tdatastudent_upsra[".googleLikeFields"][] = "sstatus";


$tdatastudent_upsra[".advSearchFields"][] = "name";
$tdatastudent_upsra[".advSearchFields"][] = "icno";
$tdatastudent_upsra[".advSearchFields"][] = "syear";
$tdatastudent_upsra[".advSearchFields"][] = "sstatus";

$tdatastudent_upsra[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_upsra[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_upsra[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_upsra[".orderindexes"] = array();

$tdatastudent_upsra[".sqlHead"] = "SELECT sid,   name,   scode,   icno,   syear,   sstatus";
$tdatastudent_upsra[".sqlFrom"] = "FROM student_upsra";
$tdatastudent_upsra[".sqlWhereExpr"] = "";
$tdatastudent_upsra[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_upsra[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_upsra[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_upsra = array();
$tableKeysstudent_upsra[] = "sid";
$tdatastudent_upsra[".Keys"] = $tableKeysstudent_upsra;

$tdatastudent_upsra[".listFields"] = array();
$tdatastudent_upsra[".listFields"][] = "name";
$tdatastudent_upsra[".listFields"][] = "icno";
$tdatastudent_upsra[".listFields"][] = "syear";
$tdatastudent_upsra[".listFields"][] = "sstatus";

$tdatastudent_upsra[".viewFields"] = array();

$tdatastudent_upsra[".addFields"] = array();

$tdatastudent_upsra[".inlineAddFields"] = array();
$tdatastudent_upsra[".inlineAddFields"][] = "name";
$tdatastudent_upsra[".inlineAddFields"][] = "icno";
$tdatastudent_upsra[".inlineAddFields"][] = "syear";
$tdatastudent_upsra[".inlineAddFields"][] = "sstatus";

$tdatastudent_upsra[".editFields"] = array();

$tdatastudent_upsra[".inlineEditFields"] = array();

$tdatastudent_upsra[".exportFields"] = array();

$tdatastudent_upsra[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "student_upsra";
	$fdata["Label"] = "Sid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
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
	
		
		
	$tdatastudent_upsra["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "student_upsra";
	$fdata["Label"] = "Murid"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_upsra["name"] = $fdata;
//	scode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "scode";
	$fdata["GoodName"] = "scode";
	$fdata["ownerTable"] = "student_upsra";
	$fdata["Label"] = "Kod Sekolah"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "scode"; 
		$fdata["FullName"] = "scode";
	
		
		
				
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
	
		
		
	$tdatastudent_upsra["scode"] = $fdata;
//	icno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "icno";
	$fdata["GoodName"] = "icno";
	$fdata["ownerTable"] = "student_upsra";
	$fdata["Label"] = "IC/MyKad"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "icno"; 
		$fdata["FullName"] = "icno";
	
		
		
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
	
		
		
	$tdatastudent_upsra["icno"] = $fdata;
//	syear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syear";
	$fdata["GoodName"] = "syear";
	$fdata["ownerTable"] = "student_upsra";
	$fdata["Label"] = "Tahun"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "syear"; 
		$fdata["FullName"] = "syear";
	
		
		
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
	
		
		
	$tdatastudent_upsra["syear"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "student_upsra";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
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
	$edata["LookupValues"][] = "Ya";
	$edata["LookupValues"][] = "Tidak";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_upsra["sstatus"] = $fdata;

	
$tables_data["student_upsra"]=&$tdatastudent_upsra;
$field_labels["student_upsra"] = &$fieldLabelsstudent_upsra;
$fieldToolTips["student_upsra"] = &$fieldToolTipsstudent_upsra;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_upsra"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_upsra"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_upsra()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,   name,   scode,   icno,   syear,   sstatus";
$proto0["m_strFrom"] = "FROM student_upsra";
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
	"m_strName" => "sid",
	"m_strTable" => "student_upsra"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "student_upsra"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "scode",
	"m_strTable" => "student_upsra"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "icno",
	"m_strTable" => "student_upsra"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "syear",
	"m_strTable" => "student_upsra"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "student_upsra"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "student_upsra";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "sid";
$proto18["m_columns"][] = "name";
$proto18["m_columns"][] = "scode";
$proto18["m_columns"][] = "icno";
$proto18["m_columns"][] = "syear";
$proto18["m_columns"][] = "sstatus";
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
$queryData_student_upsra = createSqlQuery_student_upsra();
						$tdatastudent_upsra[".sqlquery"] = $queryData_student_upsra;

include_once(getabspath("include/student_upsra_events.php"));
$tableEvents["student_upsra"] = new eventclass_student_upsra;
$tdatastudent_upsra[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_upsra");

?>