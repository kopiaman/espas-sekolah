<?php
require_once(getabspath("classes/cipherer.php"));
$tdataw_pic = array();
	$tdataw_pic[".NumberOfChars"] = 80; 
	$tdataw_pic[".ShortName"] = "w_pic";
	$tdataw_pic[".OwnerID"] = "";
	$tdataw_pic[".OriginalTable"] = "w_pic";

//	field labels
$fieldLabelsw_pic = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsw_pic["Malay"] = array();
	$fieldToolTipsw_pic["Malay"] = array();
	$fieldLabelsw_pic["Malay"]["picid"] = "Picid";
	$fieldToolTipsw_pic["Malay"]["picid"] = "";
	$fieldLabelsw_pic["Malay"]["wig"] = "Wig";
	$fieldToolTipsw_pic["Malay"]["wig"] = "";
	$fieldLabelsw_pic["Malay"]["files"] = "Fail";
	$fieldToolTipsw_pic["Malay"]["files"] = "";
	$fieldLabelsw_pic["Malay"]["caption"] = "Caption";
	$fieldToolTipsw_pic["Malay"]["caption"] = "";
	$fieldLabelsw_pic["Malay"][""] = "";
	$fieldToolTipsw_pic["Malay"][""] = "";
	$fieldLabelsw_pic["Malay"][""] = "Gambar";
	$fieldToolTipsw_pic["Malay"][""] = "";
	if (count($fieldToolTipsw_pic["Malay"]))
		$tdataw_pic[".isUseToolTips"] = true;
}
	
	
	$tdataw_pic[".NCSearch"] = true;



$tdataw_pic[".shortTableName"] = "w_pic";
$tdataw_pic[".nSecOptions"] = 0;
$tdataw_pic[".recsPerRowList"] = 1;
$tdataw_pic[".mainTableOwnerID"] = "";
$tdataw_pic[".moveNext"] = 1;
$tdataw_pic[".nType"] = 0;

$tdataw_pic[".strOriginalTableName"] = "w_pic";




$tdataw_pic[".showAddInPopup"] = false;

$tdataw_pic[".showEditInPopup"] = false;

$tdataw_pic[".showViewInPopup"] = false;

$tdataw_pic[".fieldsForRegister"] = array();
	
$tdataw_pic[".listAjax"] = false;

	$tdataw_pic[".audit"] = false;

	$tdataw_pic[".locking"] = false;

$tdataw_pic[".listIcons"] = true;
$tdataw_pic[".inlineEdit"] = true;
$tdataw_pic[".inlineAdd"] = true;



$tdataw_pic[".delete"] = true;

$tdataw_pic[".showSimpleSearchOptions"] = false;

$tdataw_pic[".showSearchPanel"] = true;

if (isMobile())
	$tdataw_pic[".isUseAjaxSuggest"] = false;
else 
	$tdataw_pic[".isUseAjaxSuggest"] = true;

$tdataw_pic[".rowHighlite"] = true;

// button handlers file names

$tdataw_pic[".addPageEvents"] = false;

// use timepicker for search panel
$tdataw_pic[".isUseTimeForSearch"] = false;




$tdataw_pic[".allSearchFields"] = array();

$tdataw_pic[".allSearchFields"][] = "files";
$tdataw_pic[".allSearchFields"][] = "caption";

$tdataw_pic[".googleLikeFields"][] = "picid";
$tdataw_pic[".googleLikeFields"][] = "wig";
$tdataw_pic[".googleLikeFields"][] = "files";
$tdataw_pic[".googleLikeFields"][] = "caption";


$tdataw_pic[".advSearchFields"][] = "files";
$tdataw_pic[".advSearchFields"][] = "caption";

$tdataw_pic[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataw_pic[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataw_pic[".strOrderBy"] = $tstrOrderBy;

$tdataw_pic[".orderindexes"] = array();

$tdataw_pic[".sqlHead"] = "SELECT picid,   wig,   files,   caption";
$tdataw_pic[".sqlFrom"] = "FROM w_pic";
$tdataw_pic[".sqlWhereExpr"] = "";
$tdataw_pic[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataw_pic[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataw_pic[".arrGroupsPerPage"] = $arrGPP;

$tableKeysw_pic = array();
$tableKeysw_pic[] = "picid";
$tdataw_pic[".Keys"] = $tableKeysw_pic;

$tdataw_pic[".listFields"] = array();
$tdataw_pic[".listFields"][] = "files";
$tdataw_pic[".listFields"][] = "caption";

$tdataw_pic[".viewFields"] = array();

$tdataw_pic[".addFields"] = array();

$tdataw_pic[".inlineAddFields"] = array();
$tdataw_pic[".inlineAddFields"][] = "files";
$tdataw_pic[".inlineAddFields"][] = "caption";

$tdataw_pic[".editFields"] = array();

$tdataw_pic[".inlineEditFields"] = array();
$tdataw_pic[".inlineEditFields"][] = "files";
$tdataw_pic[".inlineEditFields"][] = "caption";

$tdataw_pic[".exportFields"] = array();

$tdataw_pic[".printFields"] = array();

//	picid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "picid";
	$fdata["GoodName"] = "picid";
	$fdata["ownerTable"] = "w_pic";
	$fdata["Label"] = "Picid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "picid"; 
		$fdata["FullName"] = "picid";
	
		
		
				
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
	
		
		
	$tdataw_pic["picid"] = $fdata;
//	wig
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "wig";
	$fdata["GoodName"] = "wig";
	$fdata["ownerTable"] = "w_pic";
	$fdata["Label"] = "Wig"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "wig"; 
		$fdata["FullName"] = "wig";
	
		
		
				
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
	
		
		
	$tdataw_pic["wig"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "w_pic";
	$fdata["Label"] = "Fail"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "files"; 
		$fdata["FullName"] = "files";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
								$vdata["ShowIcon"] = true; 
				
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 550;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 700;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_pic["files"] = $fdata;
//	caption
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "caption";
	$fdata["GoodName"] = "caption";
	$fdata["ownerTable"] = "w_pic";
	$fdata["Label"] = "Caption"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "caption"; 
		$fdata["FullName"] = "caption";
	
		
		
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
	
		
		
	$tdataw_pic["caption"] = $fdata;

	
$tables_data["w_pic"]=&$tdataw_pic;
$field_labels["w_pic"] = &$fieldLabelsw_pic;
$fieldToolTips["w_pic"] = &$fieldToolTipsw_pic;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["w_pic"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["w_pic"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="w_gallery_sub";
	$masterParams["mDataSourceTable"]="w_gallery_sub";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "w_gallery_sub";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["w_pic"][$mIndex] = $masterParams;	
		$masterTablesData["w_pic"][$mIndex]["masterKeys"][]="wig";
		$masterTablesData["w_pic"][$mIndex]["detailKeys"][]="wig";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_w_pic()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "picid,   wig,   files,   caption";
$proto0["m_strFrom"] = "FROM w_pic";
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
	"m_strName" => "picid",
	"m_strTable" => "w_pic"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "wig",
	"m_strTable" => "w_pic"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "files",
	"m_strTable" => "w_pic"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "caption",
	"m_strTable" => "w_pic"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "w_pic";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "picid";
$proto14["m_columns"][] = "wig";
$proto14["m_columns"][] = "files";
$proto14["m_columns"][] = "caption";
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
$queryData_w_pic = createSqlQuery_w_pic();
				$tdataw_pic[".sqlquery"] = $queryData_w_pic;

$tableEvents["w_pic"] = new eventsBase;
$tdataw_pic[".hasEvents"] = false;

$cipherer = new RunnerCipherer("w_pic");

?>