<?php
require_once(getabspath("classes/cipherer.php"));
$tdataw_slider = array();
	$tdataw_slider[".NumberOfChars"] = 80; 
	$tdataw_slider[".ShortName"] = "w_slider";
	$tdataw_slider[".OwnerID"] = "";
	$tdataw_slider[".OriginalTable"] = "w_slider";

//	field labels
$fieldLabelsw_slider = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsw_slider["Malay"] = array();
	$fieldToolTipsw_slider["Malay"] = array();
	$fieldLabelsw_slider["Malay"]["slid"] = "Slid";
	$fieldToolTipsw_slider["Malay"]["slid"] = "";
	$fieldLabelsw_slider["Malay"]["headline"] = "Tajuk Slider";
	$fieldToolTipsw_slider["Malay"]["headline"] = "";
	$fieldLabelsw_slider["Malay"]["picture"] = "Gambar";
	$fieldToolTipsw_slider["Malay"]["picture"] = "";
	$fieldLabelsw_slider["Malay"]["slink"] = "Link";
	$fieldToolTipsw_slider["Malay"]["slink"] = "";
	$fieldLabelsw_slider["Malay"]["sstatus"] = "Status";
	$fieldToolTipsw_slider["Malay"]["sstatus"] = "";
	if (count($fieldToolTipsw_slider["Malay"]))
		$tdataw_slider[".isUseToolTips"] = true;
}
	
	
	$tdataw_slider[".NCSearch"] = true;



$tdataw_slider[".shortTableName"] = "w_slider";
$tdataw_slider[".nSecOptions"] = 0;
$tdataw_slider[".recsPerRowList"] = 1;
$tdataw_slider[".mainTableOwnerID"] = "";
$tdataw_slider[".moveNext"] = 1;
$tdataw_slider[".nType"] = 0;

$tdataw_slider[".strOriginalTableName"] = "w_slider";




$tdataw_slider[".showAddInPopup"] = false;

$tdataw_slider[".showEditInPopup"] = false;

$tdataw_slider[".showViewInPopup"] = false;

$tdataw_slider[".fieldsForRegister"] = array();
	
$tdataw_slider[".listAjax"] = false;

	$tdataw_slider[".audit"] = false;

	$tdataw_slider[".locking"] = false;

$tdataw_slider[".listIcons"] = true;
$tdataw_slider[".inlineEdit"] = true;
$tdataw_slider[".inlineAdd"] = true;



$tdataw_slider[".delete"] = true;

$tdataw_slider[".showSimpleSearchOptions"] = false;

$tdataw_slider[".showSearchPanel"] = true;

if (isMobile())
	$tdataw_slider[".isUseAjaxSuggest"] = false;
else 
	$tdataw_slider[".isUseAjaxSuggest"] = true;

$tdataw_slider[".rowHighlite"] = true;

// button handlers file names

$tdataw_slider[".addPageEvents"] = false;

// use timepicker for search panel
$tdataw_slider[".isUseTimeForSearch"] = false;




$tdataw_slider[".allSearchFields"] = array();

$tdataw_slider[".allSearchFields"][] = "headline";
$tdataw_slider[".allSearchFields"][] = "picture";
$tdataw_slider[".allSearchFields"][] = "sstatus";

$tdataw_slider[".googleLikeFields"][] = "slid";
$tdataw_slider[".googleLikeFields"][] = "headline";
$tdataw_slider[".googleLikeFields"][] = "picture";
$tdataw_slider[".googleLikeFields"][] = "slink";
$tdataw_slider[".googleLikeFields"][] = "sstatus";


$tdataw_slider[".advSearchFields"][] = "headline";
$tdataw_slider[".advSearchFields"][] = "picture";
$tdataw_slider[".advSearchFields"][] = "sstatus";

$tdataw_slider[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataw_slider[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataw_slider[".strOrderBy"] = $tstrOrderBy;

$tdataw_slider[".orderindexes"] = array();

$tdataw_slider[".sqlHead"] = "SELECT slid,   headline,   picture,   slink,   sstatus";
$tdataw_slider[".sqlFrom"] = "FROM w_slider";
$tdataw_slider[".sqlWhereExpr"] = "";
$tdataw_slider[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataw_slider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataw_slider[".arrGroupsPerPage"] = $arrGPP;

$tableKeysw_slider = array();
$tableKeysw_slider[] = "slid";
$tdataw_slider[".Keys"] = $tableKeysw_slider;

$tdataw_slider[".listFields"] = array();
$tdataw_slider[".listFields"][] = "headline";
$tdataw_slider[".listFields"][] = "picture";
$tdataw_slider[".listFields"][] = "slink";
$tdataw_slider[".listFields"][] = "sstatus";

$tdataw_slider[".viewFields"] = array();

$tdataw_slider[".addFields"] = array();

$tdataw_slider[".inlineAddFields"] = array();
$tdataw_slider[".inlineAddFields"][] = "headline";
$tdataw_slider[".inlineAddFields"][] = "picture";
$tdataw_slider[".inlineAddFields"][] = "slink";
$tdataw_slider[".inlineAddFields"][] = "sstatus";

$tdataw_slider[".editFields"] = array();

$tdataw_slider[".inlineEditFields"] = array();
$tdataw_slider[".inlineEditFields"][] = "headline";
$tdataw_slider[".inlineEditFields"][] = "picture";
$tdataw_slider[".inlineEditFields"][] = "slink";
$tdataw_slider[".inlineEditFields"][] = "sstatus";

$tdataw_slider[".exportFields"] = array();

$tdataw_slider[".printFields"] = array();

//	slid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "slid";
	$fdata["GoodName"] = "slid";
	$fdata["ownerTable"] = "w_slider";
	$fdata["Label"] = "Slid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "slid"; 
		$fdata["FullName"] = "slid";
	
		
		
				
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
	
		
		
	$tdataw_slider["slid"] = $fdata;
//	headline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "headline";
	$fdata["GoodName"] = "headline";
	$fdata["ownerTable"] = "w_slider";
	$fdata["Label"] = "Tajuk Slider"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "headline"; 
		$fdata["FullName"] = "headline";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";
	
		$edata["inputStyle"] = " width:500px;";
	$edata["controlWidth"] = 500;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";
	
		$edata["inputStyle"] = " width:500px;";
	$edata["controlWidth"] = 500;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdataw_slider["headline"] = $fdata;
//	picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "picture";
	$fdata["GoodName"] = "picture";
	$fdata["ownerTable"] = "w_slider";
	$fdata["Label"] = "Gambar"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "picture"; 
		$fdata["FullName"] = "picture";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
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
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 1200;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_slider["picture"] = $fdata;
//	slink
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "slink";
	$fdata["GoodName"] = "slink";
	$fdata["ownerTable"] = "w_slider";
	$fdata["Label"] = "Link"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "slink"; 
		$fdata["FullName"] = "slink";
	
		
		
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
				if(strpos(GetUserPermissions("w_slider"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "nid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "w_news";
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
	
		
		
	$tdataw_slider["slink"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "w_slider";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "On";
	$edata["LookupValues"][] = "Off";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_slider["sstatus"] = $fdata;

	
$tables_data["w_slider"]=&$tdataw_slider;
$field_labels["w_slider"] = &$fieldLabelsw_slider;
$fieldToolTips["w_slider"] = &$fieldToolTipsw_slider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["w_slider"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["w_slider"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_w_slider()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "slid,   headline,   picture,   slink,   sstatus";
$proto0["m_strFrom"] = "FROM w_slider";
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
	"m_strName" => "slid",
	"m_strTable" => "w_slider"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "headline",
	"m_strTable" => "w_slider"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "picture",
	"m_strTable" => "w_slider"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "slink",
	"m_strTable" => "w_slider"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "w_slider"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "w_slider";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "slid";
$proto16["m_columns"][] = "headline";
$proto16["m_columns"][] = "picture";
$proto16["m_columns"][] = "slink";
$proto16["m_columns"][] = "sstatus";
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
$queryData_w_slider = createSqlQuery_w_slider();
					$tdataw_slider[".sqlquery"] = $queryData_w_slider;

$tableEvents["w_slider"] = new eventsBase;
$tdataw_slider[".hasEvents"] = false;

$cipherer = new RunnerCipherer("w_slider");

?>