<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_billing = array();
	$tdatastudent_billing[".NumberOfChars"] = 80; 
	$tdatastudent_billing[".ShortName"] = "student_billing";
	$tdatastudent_billing[".OwnerID"] = "";
	$tdatastudent_billing[".OriginalTable"] = "student_billing";

//	field labels
$fieldLabelsstudent_billing = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsstudent_billing["Malay"] = array();
	$fieldToolTipsstudent_billing["Malay"] = array();
	$fieldLabelsstudent_billing["Malay"]["studentID"] = "Nama Pelajar";
	$fieldToolTipsstudent_billing["Malay"]["studentID"] = "";
	$fieldLabelsstudent_billing["Malay"]["amount"] = "Bil(RM)";
	$fieldToolTipsstudent_billing["Malay"]["amount"] = "";
	$fieldLabelsstudent_billing["Malay"]["bill_no"] = "No Bil";
	$fieldToolTipsstudent_billing["Malay"]["bill_no"] = "";
	$fieldLabelsstudent_billing["Malay"]["MatricNo"] = "No Dikenali";
	$fieldToolTipsstudent_billing["Malay"]["MatricNo"] = "";
	$fieldLabelsstudent_billing["Malay"]["paid_amount"] = "Dibayar";
	$fieldToolTipsstudent_billing["Malay"]["paid_amount"] = "";
	$fieldLabelsstudent_billing["Malay"]["cetak"] = "Cetak";
	$fieldToolTipsstudent_billing["Malay"]["cetak"] = "";
	$fieldLabelsstudent_billing["Malay"]["itemid"] = "Item";
	$fieldToolTipsstudent_billing["Malay"]["itemid"] = "";
	$fieldLabelsstudent_billing["Malay"]["sstatus"] = "Status";
	$fieldToolTipsstudent_billing["Malay"]["sstatus"] = "";
	$fieldLabelsstudent_billing["Malay"]["balance"] = "Baki";
	$fieldToolTipsstudent_billing["Malay"]["balance"] = "";
	$fieldLabelsstudent_billing["Malay"]["tahun"] = "Darjah";
	$fieldToolTipsstudent_billing["Malay"]["tahun"] = "";
	$fieldLabelsstudent_billing["Malay"]["Class"] = "Kelas";
	$fieldToolTipsstudent_billing["Malay"]["Class"] = "";
	$fieldLabelsstudent_billing["Malay"]["sid"] = "Sid";
	$fieldToolTipsstudent_billing["Malay"]["sid"] = "";
	$fieldLabelsstudent_billing["Malay"]["Name"] = "Name";
	$fieldToolTipsstudent_billing["Malay"]["Name"] = "";
	if (count($fieldToolTipsstudent_billing["Malay"]))
		$tdatastudent_billing[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_billing[".NCSearch"] = true;



$tdatastudent_billing[".shortTableName"] = "student_billing";
$tdatastudent_billing[".nSecOptions"] = 0;
$tdatastudent_billing[".recsPerRowList"] = 1;
$tdatastudent_billing[".mainTableOwnerID"] = "";
$tdatastudent_billing[".moveNext"] = 1;
$tdatastudent_billing[".nType"] = 0;

$tdatastudent_billing[".strOriginalTableName"] = "student_billing";




$tdatastudent_billing[".showAddInPopup"] = false;

$tdatastudent_billing[".showEditInPopup"] = false;

$tdatastudent_billing[".showViewInPopup"] = false;

$tdatastudent_billing[".fieldsForRegister"] = array();
	
$tdatastudent_billing[".listAjax"] = false;

	$tdatastudent_billing[".audit"] = false;

	$tdatastudent_billing[".locking"] = false;

$tdatastudent_billing[".listIcons"] = true;
$tdatastudent_billing[".inlineAdd"] = true;

$tdatastudent_billing[".exportTo"] = true;


$tdatastudent_billing[".delete"] = true;

$tdatastudent_billing[".showSimpleSearchOptions"] = false;

$tdatastudent_billing[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_billing[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_billing[".isUseAjaxSuggest"] = true;

$tdatastudent_billing[".rowHighlite"] = true;

// button handlers file names
$tdatastudent_billing[".isUsebuttonHandlers"] = true;

$tdatastudent_billing[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_billing[".isUseTimeForSearch"] = false;



$tdatastudent_billing[".useDetailsPreview"] = true;

$tdatastudent_billing[".allSearchFields"] = array();

$tdatastudent_billing[".allSearchFields"][] = "studentID";
$tdatastudent_billing[".allSearchFields"][] = "MatricNo";
$tdatastudent_billing[".allSearchFields"][] = "tahun";
$tdatastudent_billing[".allSearchFields"][] = "Class";
$tdatastudent_billing[".allSearchFields"][] = "itemid";
$tdatastudent_billing[".allSearchFields"][] = "bill_no";
$tdatastudent_billing[".allSearchFields"][] = "balance";
$tdatastudent_billing[".allSearchFields"][] = "sstatus";

$tdatastudent_billing[".googleLikeFields"][] = "sid";
$tdatastudent_billing[".googleLikeFields"][] = "studentID";
$tdatastudent_billing[".googleLikeFields"][] = "Name";

$tdatastudent_billing[".panelSearchFields"][] = "studentID";
$tdatastudent_billing[".panelSearchFields"][] = "MatricNo";
$tdatastudent_billing[".panelSearchFields"][] = "tahun";
$tdatastudent_billing[".panelSearchFields"][] = "Class";
$tdatastudent_billing[".panelSearchFields"][] = "itemid";
$tdatastudent_billing[".panelSearchFields"][] = "bill_no";
$tdatastudent_billing[".panelSearchFields"][] = "balance";
$tdatastudent_billing[".panelSearchFields"][] = "sstatus";

$tdatastudent_billing[".advSearchFields"][] = "studentID";
$tdatastudent_billing[".advSearchFields"][] = "MatricNo";
$tdatastudent_billing[".advSearchFields"][] = "tahun";
$tdatastudent_billing[".advSearchFields"][] = "Class";
$tdatastudent_billing[".advSearchFields"][] = "itemid";
$tdatastudent_billing[".advSearchFields"][] = "bill_no";
$tdatastudent_billing[".advSearchFields"][] = "balance";
$tdatastudent_billing[".advSearchFields"][] = "sstatus";

$tdatastudent_billing[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	
$tdatastudent_billing[".noRecordsFirstPage"] = true;

$tdatastudent_billing[".totalsFields"][] = array(
	"fName" => "amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatastudent_billing[".totalsFields"][] = array(
	"fName" => "paid_amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Currency');

$tdatastudent_billing[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_info.Name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_billing[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_billing[".orderindexes"] = array();
$tdatastudent_billing[".orderindexes"][] = array(13, (1 ? "ASC" : "DESC"), "student_info.Name");

$tdatastudent_billing[".sqlHead"] = "SELECT student_billing.sid,  student_billing.studentID,  student_billing.itemid,  student_billing.amount,  student_billing.bill_no,  student_info.MatricNo,  SUM(student_payment.amount) AS paid_amount,  student_billing.studentID AS cetak,  student_billing.balance,  student_billing.sstatus,  student_info.tahun,  student_info.`Class`,  student_info.Name";
$tdatastudent_billing[".sqlFrom"] = "FROM student_billing  INNER JOIN student_info ON student_billing.studentID = student_info.StudentID  LEFT OUTER JOIN student_payment ON student_billing.sid = student_payment.sid";
$tdatastudent_billing[".sqlWhereExpr"] = "";
$tdatastudent_billing[".sqlTail"] = "GROUP BY student_billing.sid";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_billing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_billing[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_billing = array();
$tableKeysstudent_billing[] = "sid";
$tdatastudent_billing[".Keys"] = $tableKeysstudent_billing;

$tdatastudent_billing[".listFields"] = array();
$tdatastudent_billing[".listFields"][] = "studentID";
$tdatastudent_billing[".listFields"][] = "tahun";
$tdatastudent_billing[".listFields"][] = "Class";
$tdatastudent_billing[".listFields"][] = "itemid";
$tdatastudent_billing[".listFields"][] = "amount";
$tdatastudent_billing[".listFields"][] = "bill_no";
$tdatastudent_billing[".listFields"][] = "paid_amount";
$tdatastudent_billing[".listFields"][] = "balance";
$tdatastudent_billing[".listFields"][] = "sstatus";
$tdatastudent_billing[".listFields"][] = "cetak";

$tdatastudent_billing[".viewFields"] = array();

$tdatastudent_billing[".addFields"] = array();

$tdatastudent_billing[".inlineAddFields"] = array();
$tdatastudent_billing[".inlineAddFields"][] = "studentID";
$tdatastudent_billing[".inlineAddFields"][] = "itemid";
$tdatastudent_billing[".inlineAddFields"][] = "amount";
$tdatastudent_billing[".inlineAddFields"][] = "bill_no";

$tdatastudent_billing[".editFields"] = array();

$tdatastudent_billing[".inlineEditFields"] = array();

$tdatastudent_billing[".exportFields"] = array();
$tdatastudent_billing[".exportFields"][] = "Class";
$tdatastudent_billing[".exportFields"][] = "studentID";
$tdatastudent_billing[".exportFields"][] = "tahun";
$tdatastudent_billing[".exportFields"][] = "itemid";
$tdatastudent_billing[".exportFields"][] = "amount";
$tdatastudent_billing[".exportFields"][] = "bill_no";
$tdatastudent_billing[".exportFields"][] = "paid_amount";
$tdatastudent_billing[".exportFields"][] = "sstatus";
$tdatastudent_billing[".exportFields"][] = "balance";

$tdatastudent_billing[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Sid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "student_billing.sid";
	
		
		
				
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
	
		
		
	$tdatastudent_billing["sid"] = $fdata;
//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Nama Pelajar"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "studentID"; 
		$fdata["FullName"] = "student_billing.studentID";
	
		
		
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
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing["studentID"] = $fdata;
//	itemid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "itemid";
	$fdata["GoodName"] = "itemid";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Item"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "itemid"; 
		$fdata["FullName"] = "student_billing.itemid";
	
		
		
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
				
		
			
	$edata["LinkField"] = "itemid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "bname";
	
		
	$edata["LookupTable"] = "bill_item";
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
	
		
		
	$tdatastudent_billing["itemid"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Bil(RM)"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "student_billing.amount";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "amount";
	$edata["LinkFieldType"] = 5;
	$edata["DisplayField"] = "amount";
	
		
	$edata["LookupTable"] = "bill_item";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing["amount"] = $fdata;
//	bill_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "bill_no";
	$fdata["GoodName"] = "bill_no";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "No Bil"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "bill_no"; 
		$fdata["FullName"] = "student_billing.bill_no";
	
		
		
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
	
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing["bill_no"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "No Dikenali"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatastudent_billing["MatricNo"] = $fdata;
//	paid_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "paid_amount";
	$fdata["GoodName"] = "paid_amount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Dibayar"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "paid_amount"; 
		$fdata["FullName"] = "SUM(student_payment.amount)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Currency");
	
		
		
		
			
		
		
		
		
		
		
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
	
		
		
	$tdatastudent_billing["paid_amount"] = $fdata;
//	cetak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cetak";
	$fdata["GoodName"] = "cetak";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Cetak"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "studentID"; 
		$fdata["FullName"] = "student_billing.studentID";
	
		
		
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
	
		
		
	$tdatastudent_billing["cetak"] = $fdata;
//	balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "balance";
	$fdata["GoodName"] = "balance";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Baki"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "balance"; 
		$fdata["FullName"] = "student_billing.balance";
	
		
		
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
	
		
		
	$tdatastudent_billing["balance"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sstatus"; 
		$fdata["FullName"] = "student_billing.sstatus";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	$edata["LookupValues"][] = "Dibayar";
	$edata["LookupValues"][] = "Tertunggak";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing["sstatus"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
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
	
		
		
	$tdatastudent_billing["tahun"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "student_info.`Class`";
	
		
		
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
	$edata["DisplayField"] = "group";
	
		
	$edata["LookupTable"] = "group";
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
	
		
		
	$tdatastudent_billing["Class"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
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
	
		
		
	$tdatastudent_billing["Name"] = $fdata;

	
$tables_data["student_billing"]=&$tdatastudent_billing;
$field_labels["student_billing"] = &$fieldLabelsstudent_billing;
$fieldToolTips["student_billing"] = &$fieldToolTipsstudent_billing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_billing"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="student_payment";
	$detailsParam["dDataSourceTable"]="student_payment";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="student_payment";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["student_billing"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["student_billing"][$dIndex]["masterKeys"][]="sid";
		$detailsTablesData["student_billing"][$dIndex]["detailKeys"][]="sid";

	
// tables which are master tables for current table (detail)
$masterTablesData["student_billing"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_billing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_billing.sid,  student_billing.studentID,  student_billing.itemid,  student_billing.amount,  student_billing.bill_no,  student_info.MatricNo,  SUM(student_payment.amount) AS paid_amount,  student_billing.studentID AS cetak,  student_billing.balance,  student_billing.sstatus,  student_info.tahun,  student_info.`Class`,  student_info.Name";
$proto0["m_strFrom"] = "FROM student_billing  INNER JOIN student_info ON student_billing.studentID = student_info.StudentID  LEFT OUTER JOIN student_payment ON student_billing.sid = student_payment.sid";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_info.Name";
$proto0["m_strTail"] = "GROUP BY student_billing.sid";
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
	"m_strName" => "sid",
	"m_strTable" => "student_billing"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_billing"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "itemid",
	"m_strTable" => "student_billing"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_billing"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "bill_no",
	"m_strTable" => "student_billing"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_SUM";
$proto18["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_payment"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto18);

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "paid_amount";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_billing"
));

$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "cetak";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "balance",
	"m_strTable" => "student_billing"
));

$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "student_billing"
));

$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "student_billing";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "sid";
$proto33["m_columns"][] = "bid";
$proto33["m_columns"][] = "studentID";
$proto33["m_columns"][] = "itemid";
$proto33["m_columns"][] = "amount";
$proto33["m_columns"][] = "balance";
$proto33["m_columns"][] = "bill_date";
$proto33["m_columns"][] = "bill_no";
$proto33["m_columns"][] = "sstatus";
$proto33["m_columns"][] = "remarks";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_alias"] = "";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = "0";
$proto34["m_inBrackets"] = "0";
$proto34["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "student_info";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "StudentID";
$proto37["m_columns"][] = "Name";
$proto37["m_columns"][] = "ICNO";
$proto37["m_columns"][] = "DOB";
$proto37["m_columns"][] = "MatricNo";
$proto37["m_columns"][] = "Email";
$proto37["m_columns"][] = "Access";
$proto37["m_columns"][] = "DateJoin";
$proto37["m_columns"][] = "Dateout";
$proto37["m_columns"][] = "Gender";
$proto37["m_columns"][] = "Address1";
$proto37["m_columns"][] = "City";
$proto37["m_columns"][] = "Postcode";
$proto37["m_columns"][] = "StateID";
$proto37["m_columns"][] = "HomeTelephone";
$proto37["m_columns"][] = "Nationality";
$proto37["m_columns"][] = "Status";
$proto37["m_columns"][] = "Disability";
$proto37["m_columns"][] = "MedicalCondition";
$proto37["m_columns"][] = "race";
$proto37["m_columns"][] = "Class";
$proto37["m_columns"][] = "sesi";
$proto37["m_columns"][] = "tahun";
$proto37["m_columns"][] = "f1_name";
$proto37["m_columns"][] = "f1_tel";
$proto37["m_columns"][] = "f1_relation";
$proto37["m_columns"][] = "f1_job";
$proto37["m_columns"][] = "f2_name";
$proto37["m_columns"][] = "f2_tel";
$proto37["m_columns"][] = "f2_relation";
$proto37["m_columns"][] = "f2_job";
$proto37["m_columns"][] = "blood";
$proto37["m_columns"][] = "hostel_in";
$proto37["m_columns"][] = "photo";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_alias"] = "";
$proto38=array();
$proto38["m_sql"] = "student_billing.studentID = student_info.StudentID";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_billing"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= student_info.StudentID";
$proto38["m_havingmode"] = "0";
$proto38["m_inBrackets"] = "0";
$proto38["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_LEFTJOIN";
			$proto41=array();
$proto41["m_strName"] = "student_payment";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "pay_id";
$proto41["m_columns"][] = "sid";
$proto41["m_columns"][] = "amount";
$proto41["m_columns"][] = "pay_date";
$proto41["m_columns"][] = "terms";
$proto41["m_columns"][] = "ref_no";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_alias"] = "";
$proto42=array();
$proto42["m_sql"] = "student_billing.sid = student_payment.sid";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "student_billing"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= student_payment.sid";
$proto42["m_havingmode"] = "0";
$proto42["m_inBrackets"] = "0";
$proto42["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "student_billing"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 1;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_billing = createSqlQuery_student_billing();
													$tdatastudent_billing[".sqlquery"] = $queryData_student_billing;

include_once(getabspath("include/student_billing_events.php"));
$tableEvents["student_billing"] = new eventclass_student_billing;
$tdatastudent_billing[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_billing");

?>