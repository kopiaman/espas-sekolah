<?php
require_once(getabspath("classes/cipherer.php"));
$tdatabilling_collection_permurid = array();
	$tdatabilling_collection_permurid[".NumberOfChars"] = 80; 
	$tdatabilling_collection_permurid[".ShortName"] = "billing_collection_permurid";
	$tdatabilling_collection_permurid[".OwnerID"] = "";
	$tdatabilling_collection_permurid[".OriginalTable"] = "student_billing";

//	field labels
$fieldLabelsbilling_collection_permurid = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsbilling_collection_permurid["Malay"] = array();
	$fieldToolTipsbilling_collection_permurid["Malay"] = array();
	$fieldLabelsbilling_collection_permurid["Malay"]["MatricNo"] = "No Dikenali";
	$fieldToolTipsbilling_collection_permurid["Malay"]["MatricNo"] = "";
	$fieldLabelsbilling_collection_permurid["Malay"]["Bill"] = "Yuran";
	$fieldToolTipsbilling_collection_permurid["Malay"]["Bill"] = "";
	$fieldLabelsbilling_collection_permurid["Malay"]["Paid"] = "Dibayar";
	$fieldToolTipsbilling_collection_permurid["Malay"]["Paid"] = "";
	$fieldLabelsbilling_collection_permurid["Malay"]["Outstanding"] = "Tertunggak";
	$fieldToolTipsbilling_collection_permurid["Malay"]["Outstanding"] = "";
	$fieldLabelsbilling_collection_permurid["Malay"]["tahun"] = "Darjah";
	$fieldToolTipsbilling_collection_permurid["Malay"]["tahun"] = "";
	$fieldLabelsbilling_collection_permurid["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsbilling_collection_permurid["Malay"]["sesi"] = "";
	$fieldLabelsbilling_collection_permurid["Malay"]["opt"] = "Cetak";
	$fieldToolTipsbilling_collection_permurid["Malay"]["opt"] = "";
	$fieldLabelsbilling_collection_permurid["Malay"]["StudentID"] = "Nama";
	$fieldToolTipsbilling_collection_permurid["Malay"]["StudentID"] = "";
	$fieldLabelsbilling_collection_permurid["Malay"][""] = "";
	$fieldToolTipsbilling_collection_permurid["Malay"][""] = "";
	$fieldLabelsbilling_collection_permurid["Malay"][""] = "Billing Collection Permurid";
	$fieldToolTipsbilling_collection_permurid["Malay"][""] = "";
	$fieldLabelsbilling_collection_permurid["Malay"][""] = "";
	$fieldToolTipsbilling_collection_permurid["Malay"][""] = "";
	$fieldLabelsbilling_collection_permurid["Malay"][""] = "Billing Collection Permurid";
	$fieldToolTipsbilling_collection_permurid["Malay"][""] = "";
	$fieldLabelsbilling_collection_permurid["Malay"]["Name"] = "Name";
	$fieldToolTipsbilling_collection_permurid["Malay"]["Name"] = "";
	if (count($fieldToolTipsbilling_collection_permurid["Malay"]))
		$tdatabilling_collection_permurid[".isUseToolTips"] = true;
}
	
	



$tdatabilling_collection_permurid[".shortTableName"] = "billing_collection_permurid";
$tdatabilling_collection_permurid[".nSecOptions"] = 0;
$tdatabilling_collection_permurid[".recsPerRowList"] = 1;
$tdatabilling_collection_permurid[".mainTableOwnerID"] = "";
$tdatabilling_collection_permurid[".moveNext"] = 1;
$tdatabilling_collection_permurid[".nType"] = 1;

$tdatabilling_collection_permurid[".strOriginalTableName"] = "student_billing";




$tdatabilling_collection_permurid[".showAddInPopup"] = false;

$tdatabilling_collection_permurid[".showEditInPopup"] = false;

$tdatabilling_collection_permurid[".showViewInPopup"] = false;

$tdatabilling_collection_permurid[".fieldsForRegister"] = array();
	
$tdatabilling_collection_permurid[".listAjax"] = false;

	$tdatabilling_collection_permurid[".audit"] = false;

	$tdatabilling_collection_permurid[".locking"] = false;

$tdatabilling_collection_permurid[".listIcons"] = true;

$tdatabilling_collection_permurid[".exportTo"] = true;



$tdatabilling_collection_permurid[".showSimpleSearchOptions"] = false;

$tdatabilling_collection_permurid[".showSearchPanel"] = true;

if (isMobile())
	$tdatabilling_collection_permurid[".isUseAjaxSuggest"] = false;
else 
	$tdatabilling_collection_permurid[".isUseAjaxSuggest"] = true;

$tdatabilling_collection_permurid[".rowHighlite"] = true;

// button handlers file names

$tdatabilling_collection_permurid[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabilling_collection_permurid[".isUseTimeForSearch"] = false;




$tdatabilling_collection_permurid[".allSearchFields"] = array();

$tdatabilling_collection_permurid[".allSearchFields"][] = "StudentID";
$tdatabilling_collection_permurid[".allSearchFields"][] = "MatricNo";
$tdatabilling_collection_permurid[".allSearchFields"][] = "tahun";
$tdatabilling_collection_permurid[".allSearchFields"][] = "sesi";
$tdatabilling_collection_permurid[".allSearchFields"][] = "Bill";
$tdatabilling_collection_permurid[".allSearchFields"][] = "Paid";
$tdatabilling_collection_permurid[".allSearchFields"][] = "Outstanding";

$tdatabilling_collection_permurid[".googleLikeFields"][] = "StudentID";
$tdatabilling_collection_permurid[".googleLikeFields"][] = "Name";

$tdatabilling_collection_permurid[".panelSearchFields"][] = "MatricNo";
$tdatabilling_collection_permurid[".panelSearchFields"][] = "tahun";
$tdatabilling_collection_permurid[".panelSearchFields"][] = "Bill";
$tdatabilling_collection_permurid[".panelSearchFields"][] = "Paid";
$tdatabilling_collection_permurid[".panelSearchFields"][] = "Outstanding";

$tdatabilling_collection_permurid[".advSearchFields"][] = "StudentID";
$tdatabilling_collection_permurid[".advSearchFields"][] = "MatricNo";
$tdatabilling_collection_permurid[".advSearchFields"][] = "tahun";
$tdatabilling_collection_permurid[".advSearchFields"][] = "sesi";
$tdatabilling_collection_permurid[".advSearchFields"][] = "Bill";
$tdatabilling_collection_permurid[".advSearchFields"][] = "Paid";
$tdatabilling_collection_permurid[".advSearchFields"][] = "Outstanding";

$tdatabilling_collection_permurid[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main

$tdatabilling_collection_permurid[".noRecordsFirstPage"] = true;


$tdatabilling_collection_permurid[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_info.Name ASC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabilling_collection_permurid[".strOrderBy"] = $tstrOrderBy;

$tdatabilling_collection_permurid[".orderindexes"] = array();
$tdatabilling_collection_permurid[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "student_info.Name");

$tdatabilling_collection_permurid[".sqlHead"] = "SELECT student_info.StudentID,  student_info.MatricNo,  SUM(student_billing.amount) AS Bill,  SUM(student_billing.amount)-SUM(student_billing.balance) AS Paid,  SUM(student_billing.balance) AS Outstanding,  student_info.tahun,  student_info.sesi,student_info.Name,  student_info.StudentID AS opt";
$tdatabilling_collection_permurid[".sqlFrom"] = "FROM student_info  LEFT OUTER JOIN student_billing ON student_info.StudentID = student_billing.studentID";
$tdatabilling_collection_permurid[".sqlWhereExpr"] = "";
$tdatabilling_collection_permurid[".sqlTail"] = "GROUP BY student_info.StudentID";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabilling_collection_permurid[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabilling_collection_permurid[".arrGroupsPerPage"] = $arrGPP;

$tableKeysbilling_collection_permurid = array();
$tdatabilling_collection_permurid[".Keys"] = $tableKeysbilling_collection_permurid;

$tdatabilling_collection_permurid[".listFields"] = array();
$tdatabilling_collection_permurid[".listFields"][] = "StudentID";
$tdatabilling_collection_permurid[".listFields"][] = "MatricNo";
$tdatabilling_collection_permurid[".listFields"][] = "tahun";
$tdatabilling_collection_permurid[".listFields"][] = "sesi";
$tdatabilling_collection_permurid[".listFields"][] = "Bill";
$tdatabilling_collection_permurid[".listFields"][] = "Paid";
$tdatabilling_collection_permurid[".listFields"][] = "Outstanding";
$tdatabilling_collection_permurid[".listFields"][] = "opt";

$tdatabilling_collection_permurid[".viewFields"] = array();

$tdatabilling_collection_permurid[".addFields"] = array();

$tdatabilling_collection_permurid[".inlineAddFields"] = array();

$tdatabilling_collection_permurid[".editFields"] = array();

$tdatabilling_collection_permurid[".inlineEditFields"] = array();

$tdatabilling_collection_permurid[".exportFields"] = array();
$tdatabilling_collection_permurid[".exportFields"][] = "StudentID";
$tdatabilling_collection_permurid[".exportFields"][] = "MatricNo";
$tdatabilling_collection_permurid[".exportFields"][] = "tahun";
$tdatabilling_collection_permurid[".exportFields"][] = "sesi";
$tdatabilling_collection_permurid[".exportFields"][] = "Bill";
$tdatabilling_collection_permurid[".exportFields"][] = "Paid";
$tdatabilling_collection_permurid[".exportFields"][] = "Outstanding";

$tdatabilling_collection_permurid[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_info.StudentID";
	
		
		
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
				if(strpos(GetUserPermissions("billing_collection_permurid"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
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
	
		
		
	$tdatabilling_collection_permurid["StudentID"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "No Dikenali"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "student_info.MatricNo";
	
		
		
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
	
		
		
	$tdatabilling_collection_permurid["MatricNo"] = $fdata;
//	Bill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Bill";
	$fdata["GoodName"] = "Bill";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Yuran"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Bill"; 
		$fdata["FullName"] = "SUM(student_billing.amount)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
		
		
	$tdatabilling_collection_permurid["Bill"] = $fdata;
//	Paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Paid";
	$fdata["GoodName"] = "Paid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Dibayar"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Paid"; 
		$fdata["FullName"] = "SUM(student_billing.amount)-SUM(student_billing.balance)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
		
		
	$tdatabilling_collection_permurid["Paid"] = $fdata;
//	Outstanding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Outstanding";
	$fdata["GoodName"] = "Outstanding";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Tertunggak"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Outstanding"; 
		$fdata["FullName"] = "SUM(student_billing.balance)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
		
		
	$tdatabilling_collection_permurid["Outstanding"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Darjah"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tahun"; 
		$fdata["FullName"] = "student_info.tahun";
	
		
		
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
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabilling_collection_permurid["tahun"] = $fdata;
//	sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sesi";
	$fdata["GoodName"] = "sesi";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Sesi"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sesi"; 
		$fdata["FullName"] = "student_info.sesi";
	
		
		
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
	
		
		
	$tdatabilling_collection_permurid["sesi"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "student_info.Name";
	
		
		
				
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
	
		
		
	$tdatabilling_collection_permurid["Name"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Cetak"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_info.StudentID";
	
		
		
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
	
		
		
	$tdatabilling_collection_permurid["opt"] = $fdata;

	
$tables_data["billing_collection_permurid"]=&$tdatabilling_collection_permurid;
$field_labels["billing_collection_permurid"] = &$fieldLabelsbilling_collection_permurid;
$fieldToolTips["billing_collection_permurid"] = &$fieldToolTipsbilling_collection_permurid;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["billing_collection_permurid"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["billing_collection_permurid"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_billing_collection_permurid()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_info.StudentID,  student_info.MatricNo,  SUM(student_billing.amount) AS Bill,  SUM(student_billing.amount)-SUM(student_billing.balance) AS Paid,  SUM(student_billing.balance) AS Outstanding,  student_info.tahun,  student_info.sesi,student_info.Name,  student_info.StudentID AS opt";
$proto0["m_strFrom"] = "FROM student_info  LEFT OUTER JOIN student_billing ON student_info.StudentID = student_billing.studentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_info.Name ASC";
$proto0["m_strTail"] = "GROUP BY student_info.StudentID";
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
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_SUM";
$proto10["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_billing"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto10);

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Bill";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(student_billing.amount)-SUM(student_billing.balance)"
));

$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Paid";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_SUM";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "balance",
	"m_strTable" => "student_billing"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto15);

$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Outstanding";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "sesi",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "student_info";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "StudentID";
$proto26["m_columns"][] = "Name";
$proto26["m_columns"][] = "ICNO";
$proto26["m_columns"][] = "DOB";
$proto26["m_columns"][] = "MatricNo";
$proto26["m_columns"][] = "Email";
$proto26["m_columns"][] = "Access";
$proto26["m_columns"][] = "DateJoin";
$proto26["m_columns"][] = "Dateout";
$proto26["m_columns"][] = "Gender";
$proto26["m_columns"][] = "Address1";
$proto26["m_columns"][] = "City";
$proto26["m_columns"][] = "Postcode";
$proto26["m_columns"][] = "StateID";
$proto26["m_columns"][] = "HomeTelephone";
$proto26["m_columns"][] = "Nationality";
$proto26["m_columns"][] = "Status";
$proto26["m_columns"][] = "Disability";
$proto26["m_columns"][] = "MedicalCondition";
$proto26["m_columns"][] = "race";
$proto26["m_columns"][] = "Class";
$proto26["m_columns"][] = "sesi";
$proto26["m_columns"][] = "tahun";
$proto26["m_columns"][] = "f1_name";
$proto26["m_columns"][] = "f1_tel";
$proto26["m_columns"][] = "f1_relation";
$proto26["m_columns"][] = "f1_job";
$proto26["m_columns"][] = "f2_name";
$proto26["m_columns"][] = "f2_tel";
$proto26["m_columns"][] = "f2_relation";
$proto26["m_columns"][] = "f2_job";
$proto26["m_columns"][] = "blood";
$proto26["m_columns"][] = "hostel_in";
$proto26["m_columns"][] = "photo";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_LEFTJOIN";
			$proto30=array();
$proto30["m_strName"] = "student_billing";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "sid";
$proto30["m_columns"][] = "bid";
$proto30["m_columns"][] = "studentID";
$proto30["m_columns"][] = "itemid";
$proto30["m_columns"][] = "amount";
$proto30["m_columns"][] = "balance";
$proto30["m_columns"][] = "bill_date";
$proto30["m_columns"][] = "bill_no";
$proto30["m_columns"][] = "sstatus";
$proto30["m_columns"][] = "remarks";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "";
$proto31=array();
$proto31["m_sql"] = "student_info.StudentID = student_billing.studentID";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "= student_billing.studentID";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 1;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_billing_collection_permurid = createSqlQuery_billing_collection_permurid();
									$tdatabilling_collection_permurid[".sqlquery"] = $queryData_billing_collection_permurid;

$tableEvents["billing_collection_permurid"] = new eventsBase;
$tdatabilling_collection_permurid[".hasEvents"] = false;

$cipherer = new RunnerCipherer("billing_collection_permurid");

?>