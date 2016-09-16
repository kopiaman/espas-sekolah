<?php
require_once(getabspath("classes/cipherer.php"));
$tdataadmin_users = array();
	$tdataadmin_users[".NumberOfChars"] = 80; 
	$tdataadmin_users[".ShortName"] = "admin_users";
	$tdataadmin_users[".OwnerID"] = "";
	$tdataadmin_users[".OriginalTable"] = "user";

//	field labels
$fieldLabelsadmin_users = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsadmin_users["Malay"] = array();
	$fieldToolTipsadmin_users["Malay"] = array();
	$fieldLabelsadmin_users["Malay"]["id"] = "Id";
	$fieldToolTipsadmin_users["Malay"]["id"] = "";
	$fieldLabelsadmin_users["Malay"]["username"] = "Username";
	$fieldToolTipsadmin_users["Malay"]["username"] = "";
	$fieldLabelsadmin_users["Malay"]["pass"] = "Option";
	$fieldToolTipsadmin_users["Malay"]["pass"] = "";
	$fieldLabelsadmin_users["Malay"][""] = "";
	$fieldToolTipsadmin_users["Malay"][""] = "";
	$fieldLabelsadmin_users["Malay"][""] = "Add/Edit users";
	$fieldToolTipsadmin_users["Malay"][""] = "";
	$fieldLabelsadmin_users["Malay"][""] = "";
	$fieldToolTipsadmin_users["Malay"][""] = "";
	$fieldLabelsadmin_users["Malay"][""] = "Add/Edit users";
	$fieldToolTipsadmin_users["Malay"][""] = "";
	if (count($fieldToolTipsadmin_users["Malay"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
	
	
	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;
$tdataadmin_users[".recsPerRowList"] = 1;
$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".moveNext"] = 1;
$tdataadmin_users[".nType"] = 1;

$tdataadmin_users[".strOriginalTableName"] = "user";




$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;

$tdataadmin_users[".fieldsForRegister"] = array();
	
$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = false;

	$tdataadmin_users[".locking"] = false;

$tdataadmin_users[".listIcons"] = true;
$tdataadmin_users[".inlineEdit"] = true;
$tdataadmin_users[".inlineAdd"] = true;



$tdataadmin_users[".delete"] = true;

$tdataadmin_users[".showSimpleSearchOptions"] = false;

$tdataadmin_users[".showSearchPanel"] = true;

if (isMobile())
	$tdataadmin_users[".isUseAjaxSuggest"] = false;
else 
	$tdataadmin_users[".isUseAjaxSuggest"] = true;

$tdataadmin_users[".rowHighlite"] = true;

// button handlers file names
$tdataadmin_users[".isUsebuttonHandlers"] = true;

$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;




$tdataadmin_users[".allSearchFields"] = array();

$tdataadmin_users[".allSearchFields"][] = "username";

$tdataadmin_users[".googleLikeFields"][] = "username";
$tdataadmin_users[".googleLikeFields"][] = "pass";


$tdataadmin_users[".advSearchFields"][] = "username";

$tdataadmin_users[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataadmin_users[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();

$tdataadmin_users[".sqlHead"] = "SELECT id,   username,   pass";
$tdataadmin_users[".sqlFrom"] = "FROM `user`";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "id";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;

$tdataadmin_users[".listFields"] = array();
$tdataadmin_users[".listFields"][] = "username";
$tdataadmin_users[".listFields"][] = "pass";

$tdataadmin_users[".viewFields"] = array();

$tdataadmin_users[".addFields"] = array();

$tdataadmin_users[".inlineAddFields"] = array();
$tdataadmin_users[".inlineAddFields"][] = "username";

$tdataadmin_users[".editFields"] = array();

$tdataadmin_users[".inlineEditFields"] = array();
$tdataadmin_users[".inlineEditFields"][] = "username";

$tdataadmin_users[".exportFields"] = array();

$tdataadmin_users[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
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
	
		
		
	$tdataadmin_users["id"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Username"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "username"; 
		$fdata["FullName"] = "username";
	
		
		
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
	
		
		
	$tdataadmin_users["username"] = $fdata;
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Option"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pass"; 
		$fdata["FullName"] = "pass";
	
		
		
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
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataadmin_users["pass"] = $fdata;

	
$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   username,   pass";
$proto0["m_strFrom"] = "FROM `user`";
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
	"m_strTable" => "user"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "user"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "pass",
	"m_strTable" => "user"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "user";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "username";
$proto12["m_columns"][] = "pass";
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
$queryData_admin_users = createSqlQuery_admin_users();
			$tdataadmin_users[".sqlquery"] = $queryData_admin_users;

include_once(getabspath("include/admin_users_events.php"));
$tableEvents["admin_users"] = new eventclass_admin_users;
$tdataadmin_users[".hasEvents"] = true;

$cipherer = new RunnerCipherer("admin_users");

?>