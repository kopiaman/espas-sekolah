<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacreate_pbsra = array();
	$tdatacreate_pbsra[".NumberOfChars"] = 80; 
	$tdatacreate_pbsra[".ShortName"] = "create_pbsra";
	$tdatacreate_pbsra[".OwnerID"] = "";
	$tdatacreate_pbsra[".OriginalTable"] = "create_pbsra";

//	field labels
$fieldLabelscreate_pbsra = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelscreate_pbsra["Malay"] = array();
	$fieldToolTipscreate_pbsra["Malay"] = array();
	$fieldLabelscreate_pbsra["Malay"]["id"] = "Id";
	$fieldToolTipscreate_pbsra["Malay"]["id"] = "";
	$fieldLabelscreate_pbsra["Malay"]["pyear"] = "Tahun";
	$fieldToolTipscreate_pbsra["Malay"]["pyear"] = "";
	$fieldLabelscreate_pbsra["Malay"]["pmonth"] = "Bulan";
	$fieldToolTipscreate_pbsra["Malay"]["pmonth"] = "";
	$fieldLabelscreate_pbsra["Malay"]["student_in"] = "Murid Masuk";
	$fieldToolTipscreate_pbsra["Malay"]["student_in"] = "";
	$fieldLabelscreate_pbsra["Malay"]["student_out"] = "Murid Keluar";
	$fieldToolTipscreate_pbsra["Malay"]["student_out"] = "";
	$fieldLabelscreate_pbsra["Malay"]["no_student"] = "Bil Murid";
	$fieldToolTipscreate_pbsra["Malay"]["no_student"] = "";
	$fieldLabelscreate_pbsra["Malay"]["Option"] = "JANA RITEN";
	$fieldToolTipscreate_pbsra["Malay"]["Option"] = "";
	$fieldLabelscreate_pbsra["Malay"]["no_male"] = "Bil Lelaki";
	$fieldToolTipscreate_pbsra["Malay"]["no_male"] = "";
	$fieldLabelscreate_pbsra["Malay"]["no_female"] = "Bil Perempuan";
	$fieldToolTipscreate_pbsra["Malay"]["no_female"] = "";
	$fieldLabelscreate_pbsra["Malay"]["att_male"] = "Kedatangan Lelaki";
	$fieldToolTipscreate_pbsra["Malay"]["att_male"] = "";
	$fieldLabelscreate_pbsra["Malay"]["att_female"] = "Kedatangan Perempuan";
	$fieldToolTipscreate_pbsra["Malay"]["att_female"] = "";
	$fieldLabelscreate_pbsra["Malay"]["att_all"] = "Peratus Kedatangan";
	$fieldToolTipscreate_pbsra["Malay"]["att_all"] = "";
	$fieldLabelscreate_pbsra["Malay"]["male_out"] = "Lelaki Keluar";
	$fieldToolTipscreate_pbsra["Malay"]["male_out"] = "";
	$fieldLabelscreate_pbsra["Malay"]["female_out"] = "Perempuan Keluar";
	$fieldToolTipscreate_pbsra["Malay"]["female_out"] = "";
	$fieldLabelscreate_pbsra["Malay"]["male_in"] = "Lelaki Masuk";
	$fieldToolTipscreate_pbsra["Malay"]["male_in"] = "";
	$fieldLabelscreate_pbsra["Malay"]["female_in"] = "Perempuan Masuk";
	$fieldToolTipscreate_pbsra["Malay"]["female_in"] = "";
	if (count($fieldToolTipscreate_pbsra["Malay"]))
		$tdatacreate_pbsra[".isUseToolTips"] = true;
}
	
	
	$tdatacreate_pbsra[".NCSearch"] = true;



$tdatacreate_pbsra[".shortTableName"] = "create_pbsra";
$tdatacreate_pbsra[".nSecOptions"] = 0;
$tdatacreate_pbsra[".recsPerRowList"] = 1;
$tdatacreate_pbsra[".mainTableOwnerID"] = "";
$tdatacreate_pbsra[".moveNext"] = 1;
$tdatacreate_pbsra[".nType"] = 0;

$tdatacreate_pbsra[".strOriginalTableName"] = "create_pbsra";




$tdatacreate_pbsra[".showAddInPopup"] = false;

$tdatacreate_pbsra[".showEditInPopup"] = false;

$tdatacreate_pbsra[".showViewInPopup"] = false;

$tdatacreate_pbsra[".fieldsForRegister"] = array();
	
$tdatacreate_pbsra[".listAjax"] = false;

	$tdatacreate_pbsra[".audit"] = false;

	$tdatacreate_pbsra[".locking"] = false;

$tdatacreate_pbsra[".listIcons"] = true;
$tdatacreate_pbsra[".inlineAdd"] = true;



$tdatacreate_pbsra[".delete"] = true;

$tdatacreate_pbsra[".showSimpleSearchOptions"] = false;

$tdatacreate_pbsra[".showSearchPanel"] = true;

if (isMobile())
	$tdatacreate_pbsra[".isUseAjaxSuggest"] = false;
else 
	$tdatacreate_pbsra[".isUseAjaxSuggest"] = true;

$tdatacreate_pbsra[".rowHighlite"] = true;

// button handlers file names
$tdatacreate_pbsra[".isUsebuttonHandlers"] = true;
$tdatacreate_pbsra[".isUsebuttonHandlers"] = true;

$tdatacreate_pbsra[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacreate_pbsra[".isUseTimeForSearch"] = false;




$tdatacreate_pbsra[".allSearchFields"] = array();

$tdatacreate_pbsra[".allSearchFields"][] = "pyear";
$tdatacreate_pbsra[".allSearchFields"][] = "pmonth";

$tdatacreate_pbsra[".googleLikeFields"][] = "id";
$tdatacreate_pbsra[".googleLikeFields"][] = "pyear";
$tdatacreate_pbsra[".googleLikeFields"][] = "pmonth";
$tdatacreate_pbsra[".googleLikeFields"][] = "no_student";
$tdatacreate_pbsra[".googleLikeFields"][] = "student_in";
$tdatacreate_pbsra[".googleLikeFields"][] = "student_out";
$tdatacreate_pbsra[".googleLikeFields"][] = "no_male";
$tdatacreate_pbsra[".googleLikeFields"][] = "no_female";
$tdatacreate_pbsra[".googleLikeFields"][] = "att_male";
$tdatacreate_pbsra[".googleLikeFields"][] = "att_female";
$tdatacreate_pbsra[".googleLikeFields"][] = "Option";
$tdatacreate_pbsra[".googleLikeFields"][] = "att_all";
$tdatacreate_pbsra[".googleLikeFields"][] = "male_out";
$tdatacreate_pbsra[".googleLikeFields"][] = "female_out";
$tdatacreate_pbsra[".googleLikeFields"][] = "male_in";
$tdatacreate_pbsra[".googleLikeFields"][] = "female_in";


$tdatacreate_pbsra[".advSearchFields"][] = "pyear";
$tdatacreate_pbsra[".advSearchFields"][] = "pmonth";

$tdatacreate_pbsra[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacreate_pbsra[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacreate_pbsra[".strOrderBy"] = $tstrOrderBy;

$tdatacreate_pbsra[".orderindexes"] = array();

$tdatacreate_pbsra[".sqlHead"] = "SELECT id,  pyear,  pmonth,  no_student,  student_in,  student_out,  no_male,  no_female,  att_male,  att_female,  id AS `Option`,  att_all,  male_out,  female_out,  male_in,  female_in";
$tdatacreate_pbsra[".sqlFrom"] = "FROM create_pbsra";
$tdatacreate_pbsra[".sqlWhereExpr"] = "";
$tdatacreate_pbsra[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacreate_pbsra[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacreate_pbsra[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscreate_pbsra = array();
$tableKeyscreate_pbsra[] = "id";
$tdatacreate_pbsra[".Keys"] = $tableKeyscreate_pbsra;

$tdatacreate_pbsra[".listFields"] = array();
$tdatacreate_pbsra[".listFields"][] = "pyear";
$tdatacreate_pbsra[".listFields"][] = "pmonth";
$tdatacreate_pbsra[".listFields"][] = "male_out";
$tdatacreate_pbsra[".listFields"][] = "female_out";
$tdatacreate_pbsra[".listFields"][] = "student_out";
$tdatacreate_pbsra[".listFields"][] = "male_in";
$tdatacreate_pbsra[".listFields"][] = "female_in";
$tdatacreate_pbsra[".listFields"][] = "student_in";
$tdatacreate_pbsra[".listFields"][] = "no_student";
$tdatacreate_pbsra[".listFields"][] = "no_male";
$tdatacreate_pbsra[".listFields"][] = "no_female";
$tdatacreate_pbsra[".listFields"][] = "Option";

$tdatacreate_pbsra[".viewFields"] = array();

$tdatacreate_pbsra[".addFields"] = array();

$tdatacreate_pbsra[".inlineAddFields"] = array();
$tdatacreate_pbsra[".inlineAddFields"][] = "pyear";
$tdatacreate_pbsra[".inlineAddFields"][] = "pmonth";

$tdatacreate_pbsra[".editFields"] = array();

$tdatacreate_pbsra[".inlineEditFields"] = array();

$tdatacreate_pbsra[".exportFields"] = array();

$tdatacreate_pbsra[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "create_pbsra";
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
	
		
		
	$tdatacreate_pbsra["id"] = $fdata;
//	pyear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pyear";
	$fdata["GoodName"] = "pyear";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Tahun"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "pyear"; 
		$fdata["FullName"] = "pyear";
	
		
		
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
	
		$edata["inputStyle"] = " width:40px;";
	$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacreate_pbsra["pyear"] = $fdata;
//	pmonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pmonth";
	$fdata["GoodName"] = "pmonth";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Bulan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "pmonth"; 
		$fdata["FullName"] = "pmonth";
	
		
		
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
	
		
		
		
		
		
		$edata["inputStyle"] = " width:40px;";
	$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacreate_pbsra["pmonth"] = $fdata;
//	no_student
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "no_student";
	$fdata["GoodName"] = "no_student";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Bil Murid"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "no_student"; 
		$fdata["FullName"] = "no_student";
	
		
		
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
	
		
		
	$tdatacreate_pbsra["no_student"] = $fdata;
//	student_in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "student_in";
	$fdata["GoodName"] = "student_in";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Murid Masuk"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "student_in"; 
		$fdata["FullName"] = "student_in";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
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
	
		
		
	$tdatacreate_pbsra["student_in"] = $fdata;
//	student_out
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "student_out";
	$fdata["GoodName"] = "student_out";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Murid Keluar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "student_out"; 
		$fdata["FullName"] = "student_out";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
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
	
		
		
	$tdatacreate_pbsra["student_out"] = $fdata;
//	no_male
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "no_male";
	$fdata["GoodName"] = "no_male";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Bil Lelaki"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "no_male"; 
		$fdata["FullName"] = "no_male";
	
		
		
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
	
		
		
	$tdatacreate_pbsra["no_male"] = $fdata;
//	no_female
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "no_female";
	$fdata["GoodName"] = "no_female";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Bil Perempuan"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "no_female"; 
		$fdata["FullName"] = "no_female";
	
		
		
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
	
		
		
	$tdatacreate_pbsra["no_female"] = $fdata;
//	att_male
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "att_male";
	$fdata["GoodName"] = "att_male";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Kedatangan Lelaki"; 
	$fdata["FieldType"] = 14;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "att_male"; 
		$fdata["FullName"] = "att_male";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
	
		
		
	$tdatacreate_pbsra["att_male"] = $fdata;
//	att_female
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "att_female";
	$fdata["GoodName"] = "att_female";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Kedatangan Perempuan"; 
	$fdata["FieldType"] = 14;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "att_female"; 
		$fdata["FullName"] = "att_female";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
	
		
		
	$tdatacreate_pbsra["att_female"] = $fdata;
//	Option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Option";
	$fdata["GoodName"] = "Option";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "JANA RITEN"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacreate_pbsra["Option"] = $fdata;
//	att_all
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "att_all";
	$fdata["GoodName"] = "att_all";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Peratus Kedatangan"; 
	$fdata["FieldType"] = 14;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "att_all"; 
		$fdata["FullName"] = "att_all";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
	
		
		
	$tdatacreate_pbsra["att_all"] = $fdata;
//	male_out
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "male_out";
	$fdata["GoodName"] = "male_out";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Lelaki Keluar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "male_out"; 
		$fdata["FullName"] = "male_out";
	
		
		
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
	
		
		
	$tdatacreate_pbsra["male_out"] = $fdata;
//	female_out
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "female_out";
	$fdata["GoodName"] = "female_out";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Perempuan Keluar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "female_out"; 
		$fdata["FullName"] = "female_out";
	
		
		
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
	
		
		
	$tdatacreate_pbsra["female_out"] = $fdata;
//	male_in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "male_in";
	$fdata["GoodName"] = "male_in";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Lelaki Masuk"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "male_in"; 
		$fdata["FullName"] = "male_in";
	
		
		
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
	
		
		
	$tdatacreate_pbsra["male_in"] = $fdata;
//	female_in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "female_in";
	$fdata["GoodName"] = "female_in";
	$fdata["ownerTable"] = "create_pbsra";
	$fdata["Label"] = "Perempuan Masuk"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "female_in"; 
		$fdata["FullName"] = "female_in";
	
		
		
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
	
		
		
	$tdatacreate_pbsra["female_in"] = $fdata;

	
$tables_data["create_pbsra"]=&$tdatacreate_pbsra;
$field_labels["create_pbsra"] = &$fieldLabelscreate_pbsra;
$fieldToolTips["create_pbsra"] = &$fieldToolTipscreate_pbsra;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["create_pbsra"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["create_pbsra"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_create_pbsra()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  pyear,  pmonth,  no_student,  student_in,  student_out,  no_male,  no_female,  att_male,  att_female,  id AS `Option`,  att_all,  male_out,  female_out,  male_in,  female_in";
$proto0["m_strFrom"] = "FROM create_pbsra";
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
	"m_strTable" => "create_pbsra"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pyear",
	"m_strTable" => "create_pbsra"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "pmonth",
	"m_strTable" => "create_pbsra"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "no_student",
	"m_strTable" => "create_pbsra"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "student_in",
	"m_strTable" => "create_pbsra"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "student_out",
	"m_strTable" => "create_pbsra"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "no_male",
	"m_strTable" => "create_pbsra"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "no_female",
	"m_strTable" => "create_pbsra"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "att_male",
	"m_strTable" => "create_pbsra"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "att_female",
	"m_strTable" => "create_pbsra"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "create_pbsra"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Option";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "att_all",
	"m_strTable" => "create_pbsra"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "male_out",
	"m_strTable" => "create_pbsra"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "female_out",
	"m_strTable" => "create_pbsra"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "male_in",
	"m_strTable" => "create_pbsra"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "female_in",
	"m_strTable" => "create_pbsra"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "create_pbsra";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id";
$proto38["m_columns"][] = "pyear";
$proto38["m_columns"][] = "pmonth";
$proto38["m_columns"][] = "no_student";
$proto38["m_columns"][] = "student_in";
$proto38["m_columns"][] = "male_in";
$proto38["m_columns"][] = "female_in";
$proto38["m_columns"][] = "student_out";
$proto38["m_columns"][] = "male_out";
$proto38["m_columns"][] = "female_out";
$proto38["m_columns"][] = "no_male";
$proto38["m_columns"][] = "no_female";
$proto38["m_columns"][] = "att_male";
$proto38["m_columns"][] = "att_female";
$proto38["m_columns"][] = "att_all";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_alias"] = "";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = "0";
$proto39["m_inBrackets"] = "0";
$proto39["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_create_pbsra = createSqlQuery_create_pbsra();
																$tdatacreate_pbsra[".sqlquery"] = $queryData_create_pbsra;

include_once(getabspath("include/create_pbsra_events.php"));
$tableEvents["create_pbsra"] = new eventclass_create_pbsra;
$tdatacreate_pbsra[".hasEvents"] = true;

$cipherer = new RunnerCipherer("create_pbsra");

?>