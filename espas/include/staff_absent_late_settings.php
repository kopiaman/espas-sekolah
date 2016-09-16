<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff_absent_late = array();
	$tdatastaff_absent_late[".NumberOfChars"] = 80; 
	$tdatastaff_absent_late[".ShortName"] = "staff_absent_late";
	$tdatastaff_absent_late[".OwnerID"] = "";
	$tdatastaff_absent_late[".OriginalTable"] = "staff_absent_late";

//	field labels
$fieldLabelsstaff_absent_late = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstaff_absent_late["Malay"] = array();
	$fieldToolTipsstaff_absent_late["Malay"] = array();
	$fieldLabelsstaff_absent_late["Malay"]["abid"] = "Abid";
	$fieldToolTipsstaff_absent_late["Malay"]["abid"] = "";
	$fieldLabelsstaff_absent_late["Malay"]["StaffID"] = "Nama";
	$fieldToolTipsstaff_absent_late["Malay"]["StaffID"] = "";
	$fieldLabelsstaff_absent_late["Malay"]["abdate"] = "Tarikh";
	$fieldToolTipsstaff_absent_late["Malay"]["abdate"] = "";
	$fieldLabelsstaff_absent_late["Malay"]["reason"] = "Sebab";
	$fieldToolTipsstaff_absent_late["Malay"]["reason"] = "";
	$fieldLabelsstaff_absent_late["Malay"]["late"] = "Lewat";
	$fieldToolTipsstaff_absent_late["Malay"]["late"] = "";
	$fieldLabelsstaff_absent_late["Malay"]["note"] = "Catatan";
	$fieldToolTipsstaff_absent_late["Malay"]["note"] = "";
	$fieldLabelsstaff_absent_late["Malay"]["bulan"] = "Bulan";
	$fieldToolTipsstaff_absent_late["Malay"]["bulan"] = "";
	$fieldLabelsstaff_absent_late["Malay"]["tahun"] = "Tahun";
	$fieldToolTipsstaff_absent_late["Malay"]["tahun"] = "";
	if (count($fieldToolTipsstaff_absent_late["Malay"]))
		$tdatastaff_absent_late[".isUseToolTips"] = true;
}
	
	
	$tdatastaff_absent_late[".NCSearch"] = true;



$tdatastaff_absent_late[".shortTableName"] = "staff_absent_late";
$tdatastaff_absent_late[".nSecOptions"] = 0;
$tdatastaff_absent_late[".recsPerRowList"] = 1;
$tdatastaff_absent_late[".mainTableOwnerID"] = "";
$tdatastaff_absent_late[".moveNext"] = 1;
$tdatastaff_absent_late[".nType"] = 0;

$tdatastaff_absent_late[".strOriginalTableName"] = "staff_absent_late";




$tdatastaff_absent_late[".showAddInPopup"] = false;

$tdatastaff_absent_late[".showEditInPopup"] = false;

$tdatastaff_absent_late[".showViewInPopup"] = false;

$tdatastaff_absent_late[".fieldsForRegister"] = array();
	
$tdatastaff_absent_late[".listAjax"] = false;

	$tdatastaff_absent_late[".audit"] = false;

	$tdatastaff_absent_late[".locking"] = false;

$tdatastaff_absent_late[".listIcons"] = true;
$tdatastaff_absent_late[".inlineEdit"] = true;
$tdatastaff_absent_late[".inlineAdd"] = true;



$tdatastaff_absent_late[".delete"] = true;

$tdatastaff_absent_late[".showSimpleSearchOptions"] = false;

$tdatastaff_absent_late[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff_absent_late[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff_absent_late[".isUseAjaxSuggest"] = true;

$tdatastaff_absent_late[".rowHighlite"] = true;

// button handlers file names

$tdatastaff_absent_late[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff_absent_late[".isUseTimeForSearch"] = false;




$tdatastaff_absent_late[".allSearchFields"] = array();

$tdatastaff_absent_late[".allSearchFields"][] = "StaffID";
$tdatastaff_absent_late[".allSearchFields"][] = "abdate";
$tdatastaff_absent_late[".allSearchFields"][] = "bulan";
$tdatastaff_absent_late[".allSearchFields"][] = "tahun";
$tdatastaff_absent_late[".allSearchFields"][] = "reason";
$tdatastaff_absent_late[".allSearchFields"][] = "note";

$tdatastaff_absent_late[".googleLikeFields"][] = "StaffID";

$tdatastaff_absent_late[".panelSearchFields"][] = "StaffID";
$tdatastaff_absent_late[".panelSearchFields"][] = "abdate";
$tdatastaff_absent_late[".panelSearchFields"][] = "bulan";
$tdatastaff_absent_late[".panelSearchFields"][] = "tahun";
$tdatastaff_absent_late[".panelSearchFields"][] = "reason";
$tdatastaff_absent_late[".panelSearchFields"][] = "note";

$tdatastaff_absent_late[".advSearchFields"][] = "StaffID";
$tdatastaff_absent_late[".advSearchFields"][] = "abdate";
$tdatastaff_absent_late[".advSearchFields"][] = "bulan";
$tdatastaff_absent_late[".advSearchFields"][] = "tahun";
$tdatastaff_absent_late[".advSearchFields"][] = "reason";
$tdatastaff_absent_late[".advSearchFields"][] = "note";

$tdatastaff_absent_late[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastaff_absent_late[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY abdate DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff_absent_late[".strOrderBy"] = $tstrOrderBy;

$tdatastaff_absent_late[".orderindexes"] = array();
$tdatastaff_absent_late[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "abdate");

$tdatastaff_absent_late[".sqlHead"] = "SELECT abid,   StaffID,   abdate,   MONTH(abdate) AS bulan,  YEAR(abdate) AS tahun,  reason,   note,   late";
$tdatastaff_absent_late[".sqlFrom"] = "FROM staff_absent_late";
$tdatastaff_absent_late[".sqlWhereExpr"] = "late IS NULL";
$tdatastaff_absent_late[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff_absent_late[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff_absent_late[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff_absent_late = array();
$tableKeysstaff_absent_late[] = "abid";
$tdatastaff_absent_late[".Keys"] = $tableKeysstaff_absent_late;

$tdatastaff_absent_late[".listFields"] = array();
$tdatastaff_absent_late[".listFields"][] = "StaffID";
$tdatastaff_absent_late[".listFields"][] = "abdate";
$tdatastaff_absent_late[".listFields"][] = "reason";
$tdatastaff_absent_late[".listFields"][] = "note";

$tdatastaff_absent_late[".viewFields"] = array();

$tdatastaff_absent_late[".addFields"] = array();

$tdatastaff_absent_late[".inlineAddFields"] = array();
$tdatastaff_absent_late[".inlineAddFields"][] = "StaffID";
$tdatastaff_absent_late[".inlineAddFields"][] = "abdate";
$tdatastaff_absent_late[".inlineAddFields"][] = "reason";
$tdatastaff_absent_late[".inlineAddFields"][] = "note";

$tdatastaff_absent_late[".editFields"] = array();

$tdatastaff_absent_late[".inlineEditFields"] = array();
$tdatastaff_absent_late[".inlineEditFields"][] = "StaffID";
$tdatastaff_absent_late[".inlineEditFields"][] = "abdate";
$tdatastaff_absent_late[".inlineEditFields"][] = "reason";
$tdatastaff_absent_late[".inlineEditFields"][] = "note";

$tdatastaff_absent_late[".exportFields"] = array();

$tdatastaff_absent_late[".printFields"] = array();

//	abid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "abid";
	$fdata["GoodName"] = "abid";
	$fdata["ownerTable"] = "staff_absent_late";
	$fdata["Label"] = "Abid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "abid"; 
		$fdata["FullName"] = "abid";
	
		
		
				
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
	
		
		
	$tdatastaff_absent_late["abid"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "staff_absent_late";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StaffID"; 
		$fdata["FullName"] = "StaffID";
	
		
		
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
				if(strpos(GetUserPermissions("staff_absent_late"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "staff_info";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "sstatus='Aktif'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_absent_late["StaffID"] = $fdata;
//	abdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "abdate";
	$fdata["GoodName"] = "abdate";
	$fdata["ownerTable"] = "staff_absent_late";
	$fdata["Label"] = "Tarikh"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "abdate"; 
		$fdata["FullName"] = "abdate";
	
		
		
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
	$edata["InitialYearFactor"] = 1; 
	$edata["LastYearFactor"] = 0; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_absent_late["abdate"] = $fdata;
//	bulan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "bulan";
	$fdata["GoodName"] = "bulan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Bulan"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "bulan"; 
		$fdata["FullName"] = "MONTH(abdate)";
	
		
		
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
				
		
			
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=51";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_absent_late["bulan"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Tahun"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "tahun"; 
		$fdata["FullName"] = "YEAR(abdate)";
	
		
		
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
	
		
		
	$tdatastaff_absent_late["tahun"] = $fdata;
//	reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reason";
	$fdata["GoodName"] = "reason";
	$fdata["ownerTable"] = "staff_absent_late";
	$fdata["Label"] = "Sebab"; 
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
				
		
			
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "ID";
	
		
		$edata["LookupWhere"] = "Class=56";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_absent_late["reason"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "staff_absent_late";
	$fdata["Label"] = "Catatan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "note"; 
		$fdata["FullName"] = "note";
	
		
		
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
	
		
		
	$tdatastaff_absent_late["note"] = $fdata;
//	late
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "late";
	$fdata["GoodName"] = "late";
	$fdata["ownerTable"] = "staff_absent_late";
	$fdata["Label"] = "Lewat"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "late"; 
		$fdata["FullName"] = "late";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_absent_late["late"] = $fdata;

	
$tables_data["staff_absent_late"]=&$tdatastaff_absent_late;
$field_labels["staff_absent_late"] = &$fieldLabelsstaff_absent_late;
$fieldToolTips["staff_absent_late"] = &$fieldToolTipsstaff_absent_late;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff_absent_late"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["staff_absent_late"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff_absent_late()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "abid,   StaffID,   abdate,   MONTH(abdate) AS bulan,  YEAR(abdate) AS tahun,  reason,   note,   late";
$proto0["m_strFrom"] = "FROM staff_absent_late";
$proto0["m_strWhere"] = "late IS NULL";
$proto0["m_strOrderBy"] = "ORDER BY abdate DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "late IS NULL";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "late",
	"m_strTable" => "staff_absent_late"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "IS NULL";
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
	"m_strName" => "abid",
	"m_strTable" => "staff_absent_late"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "staff_absent_late"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "abdate",
	"m_strTable" => "staff_absent_late"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_CUSTOM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "abdate"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto12);

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "bulan";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "abdate"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "YEAR";
$obj = new SQLFunctionCall($proto15);

$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "tahun";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "reason",
	"m_strTable" => "staff_absent_late"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "staff_absent_late"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "late",
	"m_strTable" => "staff_absent_late"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "staff_absent_late";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "abid";
$proto24["m_columns"][] = "StaffID";
$proto24["m_columns"][] = "abdate";
$proto24["m_columns"][] = "reason";
$proto24["m_columns"][] = "note";
$proto24["m_columns"][] = "late";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = "0";
$proto25["m_inBrackets"] = "0";
$proto25["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "abdate",
	"m_strTable" => "staff_absent_late"
));

$proto27["m_column"]=$obj;
$proto27["m_bAsc"] = 0;
$proto27["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto27);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_staff_absent_late = createSqlQuery_staff_absent_late();
								$tdatastaff_absent_late[".sqlquery"] = $queryData_staff_absent_late;

$tableEvents["staff_absent_late"] = new eventsBase;
$tdatastaff_absent_late[".hasEvents"] = false;

$cipherer = new RunnerCipherer("staff_absent_late");

?>