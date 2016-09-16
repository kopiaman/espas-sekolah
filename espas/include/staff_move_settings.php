<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff_move = array();
	$tdatastaff_move[".NumberOfChars"] = 80; 
	$tdatastaff_move[".ShortName"] = "staff_move";
	$tdatastaff_move[".OwnerID"] = "";
	$tdatastaff_move[".OriginalTable"] = "staff_move";

//	field labels
$fieldLabelsstaff_move = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstaff_move["Malay"] = array();
	$fieldToolTipsstaff_move["Malay"] = array();
	$fieldLabelsstaff_move["Malay"]["id"] = "Id";
	$fieldToolTipsstaff_move["Malay"]["id"] = "";
	$fieldLabelsstaff_move["Malay"]["reason"] = "Sebab/Tujuan";
	$fieldToolTipsstaff_move["Malay"]["reason"] = "";
	$fieldLabelsstaff_move["Malay"]["start"] = "Tarikh Mula";
	$fieldToolTipsstaff_move["Malay"]["start"] = "";
	$fieldLabelsstaff_move["Malay"]["end"] = "Tarikh Akhir";
	$fieldToolTipsstaff_move["Malay"]["end"] = "";
	$fieldLabelsstaff_move["Malay"]["staff"] = "Staf";
	$fieldToolTipsstaff_move["Malay"]["staff"] = "";
	if (count($fieldToolTipsstaff_move["Malay"]))
		$tdatastaff_move[".isUseToolTips"] = true;
}
	
	
	$tdatastaff_move[".NCSearch"] = true;



$tdatastaff_move[".shortTableName"] = "staff_move";
$tdatastaff_move[".nSecOptions"] = 0;
$tdatastaff_move[".recsPerRowList"] = 1;
$tdatastaff_move[".mainTableOwnerID"] = "";
$tdatastaff_move[".moveNext"] = 1;
$tdatastaff_move[".nType"] = 0;

$tdatastaff_move[".strOriginalTableName"] = "staff_move";




$tdatastaff_move[".showAddInPopup"] = false;

$tdatastaff_move[".showEditInPopup"] = false;

$tdatastaff_move[".showViewInPopup"] = false;

$tdatastaff_move[".fieldsForRegister"] = array();
	
$tdatastaff_move[".listAjax"] = false;

	$tdatastaff_move[".audit"] = false;

	$tdatastaff_move[".locking"] = false;

$tdatastaff_move[".listIcons"] = true;
$tdatastaff_move[".inlineEdit"] = true;
$tdatastaff_move[".inlineAdd"] = true;



$tdatastaff_move[".delete"] = true;

$tdatastaff_move[".showSimpleSearchOptions"] = false;

$tdatastaff_move[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff_move[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff_move[".isUseAjaxSuggest"] = true;

$tdatastaff_move[".rowHighlite"] = true;

// button handlers file names

$tdatastaff_move[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff_move[".isUseTimeForSearch"] = false;




$tdatastaff_move[".allSearchFields"] = array();

$tdatastaff_move[".allSearchFields"][] = "staff";
$tdatastaff_move[".allSearchFields"][] = "reason";
$tdatastaff_move[".allSearchFields"][] = "start";
$tdatastaff_move[".allSearchFields"][] = "end";

$tdatastaff_move[".googleLikeFields"][] = "id";
$tdatastaff_move[".googleLikeFields"][] = "reason";
$tdatastaff_move[".googleLikeFields"][] = "start";
$tdatastaff_move[".googleLikeFields"][] = "end";
$tdatastaff_move[".googleLikeFields"][] = "staff";


$tdatastaff_move[".advSearchFields"][] = "staff";
$tdatastaff_move[".advSearchFields"][] = "reason";
$tdatastaff_move[".advSearchFields"][] = "start";
$tdatastaff_move[".advSearchFields"][] = "end";

$tdatastaff_move[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastaff_move[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff_move[".strOrderBy"] = $tstrOrderBy;

$tdatastaff_move[".orderindexes"] = array();

$tdatastaff_move[".sqlHead"] = "SELECT id,   reason,   `start`,   `end`,   staff";
$tdatastaff_move[".sqlFrom"] = "FROM staff_move";
$tdatastaff_move[".sqlWhereExpr"] = "";
$tdatastaff_move[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff_move[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff_move[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff_move = array();
$tableKeysstaff_move[] = "id";
$tdatastaff_move[".Keys"] = $tableKeysstaff_move;

$tdatastaff_move[".listFields"] = array();
$tdatastaff_move[".listFields"][] = "staff";
$tdatastaff_move[".listFields"][] = "reason";
$tdatastaff_move[".listFields"][] = "start";
$tdatastaff_move[".listFields"][] = "end";

$tdatastaff_move[".viewFields"] = array();

$tdatastaff_move[".addFields"] = array();

$tdatastaff_move[".inlineAddFields"] = array();
$tdatastaff_move[".inlineAddFields"][] = "staff";
$tdatastaff_move[".inlineAddFields"][] = "reason";
$tdatastaff_move[".inlineAddFields"][] = "start";
$tdatastaff_move[".inlineAddFields"][] = "end";

$tdatastaff_move[".editFields"] = array();

$tdatastaff_move[".inlineEditFields"] = array();
$tdatastaff_move[".inlineEditFields"][] = "staff";
$tdatastaff_move[".inlineEditFields"][] = "reason";
$tdatastaff_move[".inlineEditFields"][] = "start";
$tdatastaff_move[".inlineEditFields"][] = "end";

$tdatastaff_move[".exportFields"] = array();

$tdatastaff_move[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "staff_move";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				
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
	
		
		
	$tdatastaff_move["id"] = $fdata;
//	reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "reason";
	$fdata["GoodName"] = "reason";
	$fdata["ownerTable"] = "staff_move";
	$fdata["Label"] = "Sebab/Tujuan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "reason"; 
		$fdata["FullName"] = "reason";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=49";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_move["reason"] = $fdata;
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "start";
	$fdata["GoodName"] = "start";
	$fdata["ownerTable"] = "staff_move";
	$fdata["Label"] = "Tarikh Mula"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "start"; 
		$fdata["FullName"] = "`start`";
	
		
		
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
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_move["start"] = $fdata;
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "end";
	$fdata["GoodName"] = "end";
	$fdata["ownerTable"] = "staff_move";
	$fdata["Label"] = "Tarikh Akhir"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "end"; 
		$fdata["FullName"] = "`end`";
	
		
		
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
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_move["end"] = $fdata;
//	staff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "staff";
	$fdata["GoodName"] = "staff";
	$fdata["ownerTable"] = "staff_move";
	$fdata["Label"] = "Staf"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "staff"; 
		$fdata["FullName"] = "staff";
	
		
		
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
				if(strpos(GetUserPermissions("staff_move"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "staff_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
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
	
		
		
	$tdatastaff_move["staff"] = $fdata;

	
$tables_data["staff_move"]=&$tdatastaff_move;
$field_labels["staff_move"] = &$fieldLabelsstaff_move;
$fieldToolTips["staff_move"] = &$fieldToolTipsstaff_move;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff_move"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["staff_move"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff_move()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   reason,   `start`,   `end`,   staff";
$proto0["m_strFrom"] = "FROM staff_move";
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
	"m_strTable" => "staff_move"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "reason",
	"m_strTable" => "staff_move"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "start",
	"m_strTable" => "staff_move"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "staff_move"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "staff",
	"m_strTable" => "staff_move"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "staff_move";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "reason";
$proto16["m_columns"][] = "start";
$proto16["m_columns"][] = "end";
$proto16["m_columns"][] = "staff";
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
$queryData_staff_move = createSqlQuery_staff_move();
					$tdatastaff_move[".sqlquery"] = $queryData_staff_move;

$tableEvents["staff_move"] = new eventsBase;
$tdatastaff_move[".hasEvents"] = false;

$cipherer = new RunnerCipherer("staff_move");

?>