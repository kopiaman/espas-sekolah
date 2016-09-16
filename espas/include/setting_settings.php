<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasetting = array();
	$tdatasetting[".NumberOfChars"] = 80; 
	$tdatasetting[".ShortName"] = "setting";
	$tdatasetting[".OwnerID"] = "";
	$tdatasetting[".OriginalTable"] = "setting";

//	field labels
$fieldLabelssetting = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssetting["Malay"] = array();
	$fieldToolTipssetting["Malay"] = array();
	$fieldLabelssetting["Malay"]["ID"] = "ID";
	$fieldToolTipssetting["Malay"]["ID"] = "";
	$fieldLabelssetting["Malay"]["Field_Name"] = "Nama Item";
	$fieldToolTipssetting["Malay"]["Field_Name"] = "";
	$fieldLabelssetting["Malay"]["Class"] = "Kelas";
	$fieldToolTipssetting["Malay"]["Class"] = "";
	$fieldLabelssetting["Malay"]["Value"] = "Nilai";
	$fieldToolTipssetting["Malay"]["Value"] = "";
	$fieldLabelssetting["Malay"]["etype"] = "Etype";
	$fieldToolTipssetting["Malay"]["etype"] = "";
	$fieldLabelssetting["Malay"]["EducationType"] = "Education Type";
	$fieldToolTipssetting["Malay"]["EducationType"] = "";
	$fieldLabelssetting["Malay"]["reason"] = "Reason";
	$fieldToolTipssetting["Malay"]["reason"] = "";
	$fieldLabelssetting["Malay"]["category"] = "Category";
	$fieldToolTipssetting["Malay"]["category"] = "";
	$fieldLabelssetting["Malay"]["Status"] = "Status";
	$fieldToolTipssetting["Malay"]["Status"] = "";
	$fieldLabelssetting["Malay"]["relation1"] = "Relation1";
	$fieldToolTipssetting["Malay"]["relation1"] = "";
	$fieldLabelssetting["Malay"]["Level"] = "Level";
	$fieldToolTipssetting["Malay"]["Level"] = "";
	$fieldLabelssetting["Malay"]["bulan"] = "Bulan";
	$fieldToolTipssetting["Malay"]["bulan"] = "";
	$fieldLabelssetting["Malay"]["sek_jenis"] = "Sek Jenis";
	$fieldToolTipssetting["Malay"]["sek_jenis"] = "";
	$fieldLabelssetting["Malay"]["amonth"] = "Amonth";
	$fieldToolTipssetting["Malay"]["amonth"] = "";
	$fieldLabelssetting["Malay"]["pmonth"] = "Pmonth";
	$fieldToolTipssetting["Malay"]["pmonth"] = "";
	$fieldLabelssetting["Malay"]["Race"] = "Race";
	$fieldToolTipssetting["Malay"]["Race"] = "";
	if (count($fieldToolTipssetting["Malay"]))
		$tdatasetting[".isUseToolTips"] = true;
}
	
	



$tdatasetting[".shortTableName"] = "setting";
$tdatasetting[".nSecOptions"] = 0;
$tdatasetting[".recsPerRowList"] = 1;
$tdatasetting[".mainTableOwnerID"] = "";
$tdatasetting[".moveNext"] = 1;
$tdatasetting[".nType"] = 0;

$tdatasetting[".strOriginalTableName"] = "setting";




$tdatasetting[".showAddInPopup"] = false;

$tdatasetting[".showEditInPopup"] = false;

$tdatasetting[".showViewInPopup"] = true;

$tdatasetting[".fieldsForRegister"] = array();
	
$tdatasetting[".listAjax"] = false;

	$tdatasetting[".audit"] = false;

	$tdatasetting[".locking"] = false;

$tdatasetting[".listIcons"] = true;
$tdatasetting[".edit"] = true;
$tdatasetting[".inlineEdit"] = true;
$tdatasetting[".inlineAdd"] = true;



$tdatasetting[".delete"] = true;

$tdatasetting[".showSimpleSearchOptions"] = false;

$tdatasetting[".showSearchPanel"] = true;

if (isMobile())
	$tdatasetting[".isUseAjaxSuggest"] = false;
else 
	$tdatasetting[".isUseAjaxSuggest"] = true;

$tdatasetting[".rowHighlite"] = true;

// button handlers file names

$tdatasetting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasetting[".isUseTimeForSearch"] = false;




$tdatasetting[".allSearchFields"] = array();

$tdatasetting[".allSearchFields"][] = "Field_Name";
$tdatasetting[".allSearchFields"][] = "Class";
$tdatasetting[".allSearchFields"][] = "ID";

$tdatasetting[".googleLikeFields"][] = "Field_Name";
$tdatasetting[".googleLikeFields"][] = "Value";

$tdatasetting[".panelSearchFields"][] = "Field_Name";

$tdatasetting[".advSearchFields"][] = "Field_Name";
$tdatasetting[".advSearchFields"][] = "Class";
$tdatasetting[".advSearchFields"][] = "ID";

$tdatasetting[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasetting[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasetting[".strOrderBy"] = $tstrOrderBy;

$tdatasetting[".orderindexes"] = array();

$tdatasetting[".sqlHead"] = "SELECT ID,   Field_Name,   `Class`,   `Value`";
$tdatasetting[".sqlFrom"] = "FROM setting";
$tdatasetting[".sqlWhereExpr"] = "";
$tdatasetting[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasetting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasetting[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssetting = array();
$tableKeyssetting[] = "ID";
$tdatasetting[".Keys"] = $tableKeyssetting;

$tdatasetting[".listFields"] = array();
$tdatasetting[".listFields"][] = "Field_Name";
$tdatasetting[".listFields"][] = "Value";

$tdatasetting[".viewFields"] = array();

$tdatasetting[".addFields"] = array();
$tdatasetting[".addFields"][] = "Class";
$tdatasetting[".addFields"][] = "Field_Name";

$tdatasetting[".inlineAddFields"] = array();
$tdatasetting[".inlineAddFields"][] = "Field_Name";
$tdatasetting[".inlineAddFields"][] = "Value";

$tdatasetting[".editFields"] = array();
$tdatasetting[".editFields"][] = "Class";
$tdatasetting[".editFields"][] = "Field_Name";

$tdatasetting[".inlineEditFields"] = array();
$tdatasetting[".inlineEditFields"][] = "Field_Name";
$tdatasetting[".inlineEditFields"][] = "Value";

$tdatasetting[".exportFields"] = array();

$tdatasetting[".printFields"] = array();

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
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
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
	
		
		
	$tdatasetting["ID"] = $fdata;
//	Field_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Field_Name";
	$fdata["GoodName"] = "Field_Name";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = "Nama Item"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatasetting["Field_Name"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "`Class`";
	
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
	
		
		
	$tdatasetting["Class"] = $fdata;
//	Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Value";
	$fdata["GoodName"] = "Value";
	$fdata["ownerTable"] = "setting";
	$fdata["Label"] = "Nilai"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
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
	
		
		
	$tdatasetting["Value"] = $fdata;

	
$tables_data["setting"]=&$tdatasetting;
$field_labels["setting"] = &$fieldLabelssetting;
$fieldToolTips["setting"] = &$fieldToolTipssetting;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["setting"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["setting"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="set_setting_category";
	$masterParams["mDataSourceTable"]="set_setting_category";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "set_setting_category";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["setting"][$mIndex] = $masterParams;	
		$masterTablesData["setting"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["setting"][$mIndex]["detailKeys"][]="Class";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_setting()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   Field_Name,   `Class`,   `Value`";
$proto0["m_strFrom"] = "FROM setting";
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
	"m_strName" => "ID",
	"m_strTable" => "setting"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Field_Name",
	"m_strTable" => "setting"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
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
$queryData_setting = createSqlQuery_setting();
				$tdatasetting[".sqlquery"] = $queryData_setting;

$tableEvents["setting"] = new eventsBase;
$tdatasetting[".hasEvents"] = false;

$cipherer = new RunnerCipherer("setting");

?>