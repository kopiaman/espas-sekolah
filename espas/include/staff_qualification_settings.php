<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff_qualification = array();
	$tdatastaff_qualification[".NumberOfChars"] = 80; 
	$tdatastaff_qualification[".ShortName"] = "staff_qualification";
	$tdatastaff_qualification[".OwnerID"] = "";
	$tdatastaff_qualification[".OriginalTable"] = "staff_qualification";

//	field labels
$fieldLabelsstaff_qualification = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstaff_qualification["Malay"] = array();
	$fieldToolTipsstaff_qualification["Malay"] = array();
	$fieldLabelsstaff_qualification["Malay"]["ID"] = "ID";
	$fieldToolTipsstaff_qualification["Malay"]["ID"] = "";
	$fieldLabelsstaff_qualification["Malay"]["StaffID"] = "Staff";
	$fieldToolTipsstaff_qualification["Malay"]["StaffID"] = "";
	$fieldLabelsstaff_qualification["Malay"]["Institution"] = "Institution";
	$fieldToolTipsstaff_qualification["Malay"]["Institution"] = "";
	$fieldLabelsstaff_qualification["Malay"]["YearGrad"] = "Tahun Graduasi";
	$fieldToolTipsstaff_qualification["Malay"]["YearGrad"] = "";
	$fieldLabelsstaff_qualification["Malay"]["EducationType"] = "Jenis ";
	$fieldToolTipsstaff_qualification["Malay"]["EducationType"] = "";
	$fieldLabelsstaff_qualification["Malay"]["Major"] = "Major";
	$fieldToolTipsstaff_qualification["Malay"]["Major"] = "";
	$fieldLabelsstaff_qualification["Malay"]["Grade_CGPA"] = "Keputusan";
	$fieldToolTipsstaff_qualification["Malay"]["Grade_CGPA"] = "";
	if (count($fieldToolTipsstaff_qualification["Malay"]))
		$tdatastaff_qualification[".isUseToolTips"] = true;
}
	
	
	$tdatastaff_qualification[".NCSearch"] = true;



$tdatastaff_qualification[".shortTableName"] = "staff_qualification";
$tdatastaff_qualification[".nSecOptions"] = 0;
$tdatastaff_qualification[".recsPerRowList"] = 1;
$tdatastaff_qualification[".mainTableOwnerID"] = "";
$tdatastaff_qualification[".moveNext"] = 1;
$tdatastaff_qualification[".nType"] = 0;

$tdatastaff_qualification[".strOriginalTableName"] = "staff_qualification";




$tdatastaff_qualification[".showAddInPopup"] = false;

$tdatastaff_qualification[".showEditInPopup"] = false;

$tdatastaff_qualification[".showViewInPopup"] = false;

$tdatastaff_qualification[".fieldsForRegister"] = array();
	
$tdatastaff_qualification[".listAjax"] = false;

	$tdatastaff_qualification[".audit"] = false;

	$tdatastaff_qualification[".locking"] = false;

$tdatastaff_qualification[".listIcons"] = true;
$tdatastaff_qualification[".inlineEdit"] = true;
$tdatastaff_qualification[".inlineAdd"] = true;



$tdatastaff_qualification[".delete"] = true;

$tdatastaff_qualification[".showSimpleSearchOptions"] = false;

$tdatastaff_qualification[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff_qualification[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff_qualification[".isUseAjaxSuggest"] = true;

$tdatastaff_qualification[".rowHighlite"] = true;

// button handlers file names

$tdatastaff_qualification[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff_qualification[".isUseTimeForSearch"] = false;




$tdatastaff_qualification[".allSearchFields"] = array();

$tdatastaff_qualification[".allSearchFields"][] = "Institution";
$tdatastaff_qualification[".allSearchFields"][] = "YearGrad";
$tdatastaff_qualification[".allSearchFields"][] = "EducationType";
$tdatastaff_qualification[".allSearchFields"][] = "Major";
$tdatastaff_qualification[".allSearchFields"][] = "Grade_CGPA";

$tdatastaff_qualification[".googleLikeFields"][] = "ID";
$tdatastaff_qualification[".googleLikeFields"][] = "StaffID";
$tdatastaff_qualification[".googleLikeFields"][] = "Institution";
$tdatastaff_qualification[".googleLikeFields"][] = "YearGrad";
$tdatastaff_qualification[".googleLikeFields"][] = "EducationType";
$tdatastaff_qualification[".googleLikeFields"][] = "Major";
$tdatastaff_qualification[".googleLikeFields"][] = "Grade_CGPA";


$tdatastaff_qualification[".advSearchFields"][] = "Institution";
$tdatastaff_qualification[".advSearchFields"][] = "YearGrad";
$tdatastaff_qualification[".advSearchFields"][] = "EducationType";
$tdatastaff_qualification[".advSearchFields"][] = "Major";
$tdatastaff_qualification[".advSearchFields"][] = "Grade_CGPA";

$tdatastaff_qualification[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastaff_qualification[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff_qualification[".strOrderBy"] = $tstrOrderBy;

$tdatastaff_qualification[".orderindexes"] = array();

$tdatastaff_qualification[".sqlHead"] = "SELECT ID,  StaffID,  Institution,  YearGrad,  EducationType,  Major,  Grade_CGPA";
$tdatastaff_qualification[".sqlFrom"] = "FROM staff_qualification";
$tdatastaff_qualification[".sqlWhereExpr"] = "";
$tdatastaff_qualification[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff_qualification[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff_qualification[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff_qualification = array();
$tableKeysstaff_qualification[] = "ID";
$tdatastaff_qualification[".Keys"] = $tableKeysstaff_qualification;

$tdatastaff_qualification[".listFields"] = array();
$tdatastaff_qualification[".listFields"][] = "Institution";
$tdatastaff_qualification[".listFields"][] = "YearGrad";
$tdatastaff_qualification[".listFields"][] = "EducationType";
$tdatastaff_qualification[".listFields"][] = "Major";
$tdatastaff_qualification[".listFields"][] = "Grade_CGPA";

$tdatastaff_qualification[".viewFields"] = array();

$tdatastaff_qualification[".addFields"] = array();

$tdatastaff_qualification[".inlineAddFields"] = array();
$tdatastaff_qualification[".inlineAddFields"][] = "Institution";
$tdatastaff_qualification[".inlineAddFields"][] = "YearGrad";
$tdatastaff_qualification[".inlineAddFields"][] = "EducationType";
$tdatastaff_qualification[".inlineAddFields"][] = "Major";
$tdatastaff_qualification[".inlineAddFields"][] = "Grade_CGPA";

$tdatastaff_qualification[".editFields"] = array();

$tdatastaff_qualification[".inlineEditFields"] = array();
$tdatastaff_qualification[".inlineEditFields"][] = "Institution";
$tdatastaff_qualification[".inlineEditFields"][] = "YearGrad";
$tdatastaff_qualification[".inlineEditFields"][] = "EducationType";
$tdatastaff_qualification[".inlineEditFields"][] = "Major";
$tdatastaff_qualification[".inlineEditFields"][] = "Grade_CGPA";

$tdatastaff_qualification[".exportFields"] = array();

$tdatastaff_qualification[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "staff_qualification";
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
	
		
		
	$tdatastaff_qualification["ID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "staff_qualification";
	$fdata["Label"] = "Staff"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StaffID"; 
		$fdata["FullName"] = "StaffID";
	
		
		
				
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
	
		
		
	$tdatastaff_qualification["StaffID"] = $fdata;
//	Institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Institution";
	$fdata["GoodName"] = "Institution";
	$fdata["ownerTable"] = "staff_qualification";
	$fdata["Label"] = "Institution"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Institution"; 
		$fdata["FullName"] = "Institution";
	
		
		
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
			$edata["EditParams"].= " maxlength=222";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_qualification["Institution"] = $fdata;
//	YearGrad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "YearGrad";
	$fdata["GoodName"] = "YearGrad";
	$fdata["ownerTable"] = "staff_qualification";
	$fdata["Label"] = "Tahun Graduasi"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "YearGrad"; 
		$fdata["FullName"] = "YearGrad";
	
		
		
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
			$edata["EditParams"].= " maxlength=4";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_qualification["YearGrad"] = $fdata;
//	EducationType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EducationType";
	$fdata["GoodName"] = "EducationType";
	$fdata["ownerTable"] = "staff_qualification";
	$fdata["Label"] = "Jenis "; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "EducationType"; 
		$fdata["FullName"] = "EducationType";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=2";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_qualification["EducationType"] = $fdata;
//	Major
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Major";
	$fdata["GoodName"] = "Major";
	$fdata["ownerTable"] = "staff_qualification";
	$fdata["Label"] = "Major"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Major"; 
		$fdata["FullName"] = "Major";
	
		
		
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
			$edata["EditParams"].= " maxlength=421";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_qualification["Major"] = $fdata;
//	Grade_CGPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Grade_CGPA";
	$fdata["GoodName"] = "Grade_CGPA";
	$fdata["ownerTable"] = "staff_qualification";
	$fdata["Label"] = "Keputusan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Grade_CGPA"; 
		$fdata["FullName"] = "Grade_CGPA";
	
		
		
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
	
		
		
	$tdatastaff_qualification["Grade_CGPA"] = $fdata;

	
$tables_data["staff_qualification"]=&$tdatastaff_qualification;
$field_labels["staff_qualification"] = &$fieldLabelsstaff_qualification;
$fieldToolTips["staff_qualification"] = &$fieldToolTipsstaff_qualification;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff_qualification"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["staff_qualification"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="staff_info";
	$masterParams["mDataSourceTable"]="staff_info";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "staff_info";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["staff_qualification"][$mIndex] = $masterParams;	
		$masterTablesData["staff_qualification"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["staff_qualification"][$mIndex]["detailKeys"][]="StaffID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff_qualification()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  StaffID,  Institution,  YearGrad,  EducationType,  Major,  Grade_CGPA";
$proto0["m_strFrom"] = "FROM staff_qualification";
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
	"m_strTable" => "staff_qualification"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "staff_qualification"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Institution",
	"m_strTable" => "staff_qualification"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "YearGrad",
	"m_strTable" => "staff_qualification"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "EducationType",
	"m_strTable" => "staff_qualification"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Major",
	"m_strTable" => "staff_qualification"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Grade_CGPA",
	"m_strTable" => "staff_qualification"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "staff_qualification";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "StaffID";
$proto20["m_columns"][] = "Institution";
$proto20["m_columns"][] = "YearGrad";
$proto20["m_columns"][] = "EducationType";
$proto20["m_columns"][] = "Major";
$proto20["m_columns"][] = "Grade_CGPA";
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
$queryData_staff_qualification = createSqlQuery_staff_qualification();
							$tdatastaff_qualification[".sqlquery"] = $queryData_staff_qualification;

$tableEvents["staff_qualification"] = new eventsBase;
$tdatastaff_qualification[".hasEvents"] = false;

$cipherer = new RunnerCipherer("staff_qualification");

?>