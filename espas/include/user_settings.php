<?php
require_once(getabspath("classes/cipherer.php"));
$tdatauser = array();
	$tdatauser[".NumberOfChars"] = 80; 
	$tdatauser[".ShortName"] = "user";
	$tdatauser[".OwnerID"] = "";
	$tdatauser[".OriginalTable"] = "user";

//	field labels
$fieldLabelsuser = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsuser["Malay"] = array();
	$fieldToolTipsuser["Malay"] = array();
	$fieldLabelsuser["Malay"]["id"] = "Id";
	$fieldToolTipsuser["Malay"]["id"] = "";
	$fieldLabelsuser["Malay"]["username"] = "Username";
	$fieldToolTipsuser["Malay"]["username"] = "";
	$fieldLabelsuser["Malay"]["pass"] = "Password";
	$fieldToolTipsuser["Malay"]["pass"] = "";
	if (count($fieldToolTipsuser["Malay"]))
		$tdatauser[".isUseToolTips"] = true;
}
	
	
	$tdatauser[".NCSearch"] = true;



$tdatauser[".shortTableName"] = "user";
$tdatauser[".nSecOptions"] = 0;
$tdatauser[".recsPerRowList"] = 1;
$tdatauser[".mainTableOwnerID"] = "";
$tdatauser[".moveNext"] = 1;
$tdatauser[".nType"] = 0;

$tdatauser[".strOriginalTableName"] = "user";




$tdatauser[".showAddInPopup"] = false;

$tdatauser[".showEditInPopup"] = false;

$tdatauser[".showViewInPopup"] = false;

$tdatauser[".fieldsForRegister"] = array();
	//Begin register settings
$tdatauser[".fieldsForRegister"][] = "username";
$tdatauser[".fieldsForRegister"][] = "pass";
/*
$tdatauser[".PasswordField"] = "pass";
$tdatauser[".UserNameField"] = "username";	
*/
//End register settings	

$tdatauser[".listAjax"] = false;

	$tdatauser[".audit"] = false;

	$tdatauser[".locking"] = false;

$tdatauser[".listIcons"] = true;
$tdatauser[".inlineEdit"] = true;
$tdatauser[".view"] = true;




$tdatauser[".showSimpleSearchOptions"] = false;

$tdatauser[".showSearchPanel"] = true;

if (isMobile())
	$tdatauser[".isUseAjaxSuggest"] = false;
else 
	$tdatauser[".isUseAjaxSuggest"] = true;

$tdatauser[".rowHighlite"] = true;

// button handlers file names

$tdatauser[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser[".isUseTimeForSearch"] = false;




$tdatauser[".allSearchFields"] = array();

$tdatauser[".allSearchFields"][] = "username";
$tdatauser[".allSearchFields"][] = "pass";

$tdatauser[".googleLikeFields"][] = "username";
$tdatauser[".googleLikeFields"][] = "pass";


$tdatauser[".advSearchFields"][] = "username";
$tdatauser[".advSearchFields"][] = "pass";

$tdatauser[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatauser[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser[".strOrderBy"] = $tstrOrderBy;

$tdatauser[".orderindexes"] = array();

$tdatauser[".sqlHead"] = "SELECT id,   username,   pass";
$tdatauser[".sqlFrom"] = "FROM `user`";
$tdatauser[".sqlWhereExpr"] = "";
$tdatauser[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser[".arrGroupsPerPage"] = $arrGPP;

$tableKeysuser = array();
$tableKeysuser[] = "id";
$tdatauser[".Keys"] = $tableKeysuser;

$tdatauser[".listFields"] = array();
$tdatauser[".listFields"][] = "username";
$tdatauser[".listFields"][] = "pass";

$tdatauser[".viewFields"] = array();
$tdatauser[".viewFields"][] = "username";
$tdatauser[".viewFields"][] = "pass";

$tdatauser[".addFields"] = array();

$tdatauser[".inlineAddFields"] = array();

$tdatauser[".editFields"] = array();

$tdatauser[".inlineEditFields"] = array();
$tdatauser[".inlineEditFields"][] = "username";
$tdatauser[".inlineEditFields"][] = "pass";

$tdatauser[".exportFields"] = array();

$tdatauser[".printFields"] = array();

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
	
		
		
	$tdatauser["id"] = $fdata;
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
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
		
							if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser["username"] = $fdata;
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Password"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "pass"; 
		$fdata["FullName"] = "pass";
	
		
		
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
		
							if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser["pass"] = $fdata;

	
$tables_data["user"]=&$tdatauser;
$field_labels["user"] = &$fieldLabelsuser;
$fieldToolTips["user"] = &$fieldToolTipsuser;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["user"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user()
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
$queryData_user = createSqlQuery_user();
			$tdatauser[".sqlquery"] = $queryData_user;

$tableEvents["user"] = new eventsBase;
$tdatauser[".hasEvents"] = false;

$cipherer = new RunnerCipherer("user");

?>