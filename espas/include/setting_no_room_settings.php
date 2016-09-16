<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasetting_no_room = array();
	$tdatasetting_no_room[".NumberOfChars"] = 80; 
	$tdatasetting_no_room[".ShortName"] = "setting_no_room";
	$tdatasetting_no_room[".OwnerID"] = "";
	$tdatasetting_no_room[".OriginalTable"] = "setting";

//	field labels
$fieldLabelssetting_no_room = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssetting_no_room["Malay"] = array();
	$fieldToolTipssetting_no_room["Malay"] = array();
	$fieldLabelssetting_no_room["Malay"]["Field_Name"] = "Bilik";
	$fieldToolTipssetting_no_room["Malay"]["Field_Name"] = "";
	$fieldLabelssetting_no_room["Malay"]["Class"] = "Kelas";
	$fieldToolTipssetting_no_room["Malay"]["Class"] = "";
	$fieldLabelssetting_no_room["Malay"]["Value"] = "Bilangan Bilik";
	$fieldToolTipssetting_no_room["Malay"]["Value"] = "";
	$fieldLabelssetting_no_room["Malay"]["ID"] = "ID";
	$fieldToolTipssetting_no_room["Malay"]["ID"] = "";
	if (count($fieldToolTipssetting_no_room["Malay"]))
		$tdatasetting_no_room[".isUseToolTips"] = true;
}
	
	



$tdatasetting_no_room[".shortTableName"] = "setting_no_room";
$tdatasetting_no_room[".nSecOptions"] = 0;
$tdatasetting_no_room[".recsPerRowList"] = 1;
$tdatasetting_no_room[".mainTableOwnerID"] = "";
$tdatasetting_no_room[".moveNext"] = 1;
$tdatasetting_no_room[".nType"] = 1;

$tdatasetting_no_room[".strOriginalTableName"] = "setting";




$tdatasetting_no_room[".showAddInPopup"] = false;

$tdatasetting_no_room[".showEditInPopup"] = false;

$tdatasetting_no_room[".showViewInPopup"] = true;

$tdatasetting_no_room[".fieldsForRegister"] = array();
	
$tdatasetting_no_room[".listAjax"] = false;

	$tdatasetting_no_room[".audit"] = false;

	$tdatasetting_no_room[".locking"] = false;

$tdatasetting_no_room[".listIcons"] = true;
$tdatasetting_no_room[".inlineEdit"] = true;




$tdatasetting_no_room[".showSimpleSearchOptions"] = false;

$tdatasetting_no_room[".showSearchPanel"] = true;

if (isMobile())
	$tdatasetting_no_room[".isUseAjaxSuggest"] = false;
else 
	$tdatasetting_no_room[".isUseAjaxSuggest"] = true;

$tdatasetting_no_room[".rowHighlite"] = true;

// button handlers file names

$tdatasetting_no_room[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasetting_no_room[".isUseTimeForSearch"] = false;




$tdatasetting_no_room[".allSearchFields"] = array();


$tdatasetting_no_room[".googleLikeFields"][] = "ID";
$tdatasetting_no_room[".googleLikeFields"][] = "Field_Name";
$tdatasetting_no_room[".googleLikeFields"][] = "Value";

$tdatasetting_no_room[".panelSearchFields"][] = "Field_Name";


$tdatasetting_no_room[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasetting_no_room[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasetting_no_room[".strOrderBy"] = $tstrOrderBy;

$tdatasetting_no_room[".orderindexes"] = array();

$tdatasetting_no_room[".sqlHead"] = "SELECT ID,  `Class`,  Field_Name,  `Value`";
$tdatasetting_no_room[".sqlFrom"] = "FROM setting";
$tdatasetting_no_room[".sqlWhereExpr"] = "(`Class` =48)";
$tdatasetting_no_room[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasetting_no_room[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasetting_no_room[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssetting_no_room = array();
$tableKeyssetting_no_room[] = "ID";
$tdatasetting_no_room[".Keys"] = $tableKeyssetting_no_room;

$tdatasetting_no_room[".listFields"] = array();
$tdatasetting_no_room[".listFields"][] = "Field_Name";
$tdatasetting_no_room[".listFields"][] = "Value";

$tdatasetting_no_room[".viewFields"] = array();

$tdatasetting_no_room[".addFields"] = array();

$tdatasetting_no_room[".inlineAddFields"] = array();

$tdatasetting_no_room[".editFields"] = array();

$tdatasetting_no_room[".inlineEditFields"] = array();
$tdatasetting_no_room[".inlineEditFields"][] = "Value";

$tdatasetting_no_room[".exportFields"] = array();

$tdatasetting_no_room[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
		
		
				
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
	
		
		
	$tdatasetting_no_room["ID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "`Class`";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				
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
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "category_name";
	
		
	$edata["LookupTable"] = "set_setting_category";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasetting_no_room["Class"] = $fdata;
//	Field_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Field_Name";
	$fdata["GoodName"] = "Field_Name";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = "Bilik"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Field_Name"; 
		$fdata["FullName"] = "Field_Name";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 20;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasetting_no_room["Field_Name"] = $fdata;
//	Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Value";
	$fdata["GoodName"] = "Value";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = "Bilangan Bilik"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Value"; 
		$fdata["FullName"] = "`Value`";
	
		
		
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
	
		
		
	$tdatasetting_no_room["Value"] = $fdata;

	
$tables_data["setting_no_room"]=&$tdatasetting_no_room;
$field_labels["setting_no_room"] = &$fieldLabelssetting_no_room;
$fieldToolTips["setting_no_room"] = &$fieldToolTipssetting_no_room;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["setting_no_room"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["setting_no_room"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_setting_no_room()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  `Class`,  Field_Name,  `Value`";
$proto0["m_strFrom"] = "FROM setting";
$proto0["m_strWhere"] = "(`Class` =48)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "`Class` =48";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "setting"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=48";
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
	"m_strName" => "ID",
	"m_strTable" => "setting"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "setting"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Field_Name",
	"m_strTable" => "setting"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Value",
	"m_strTable" => "setting"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "setting";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "ID";
$proto14["m_columns"][] = "Field_Name";
$proto14["m_columns"][] = "Class";
$proto14["m_columns"][] = "Value";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_setting_no_room = createSqlQuery_setting_no_room();
				$tdatasetting_no_room[".sqlquery"] = $queryData_setting_no_room;

$tableEvents["setting_no_room"] = new eventsBase;
$tdatasetting_no_room[".hasEvents"] = false;

$cipherer = new RunnerCipherer("setting_no_room");

?>