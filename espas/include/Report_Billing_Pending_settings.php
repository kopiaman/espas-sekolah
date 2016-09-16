<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Billing_Pending = array();
	$tdataReport_Billing_Pending[".NumberOfChars"] = 80; 
	$tdataReport_Billing_Pending[".ShortName"] = "Report_Billing_Pending";
	$tdataReport_Billing_Pending[".OwnerID"] = "";
	$tdataReport_Billing_Pending[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Billing_Pending = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsReport_Billing_Pending["Malay"] = array();
	$fieldToolTipsReport_Billing_Pending["Malay"] = array();
	$fieldLabelsReport_Billing_Pending["Malay"]["StudentID"] = "Nama Pelajar";
	$fieldToolTipsReport_Billing_Pending["Malay"]["StudentID"] = "";
	$fieldLabelsReport_Billing_Pending["Malay"]["Name"] = "Nama";
	$fieldToolTipsReport_Billing_Pending["Malay"]["Name"] = "";
	$fieldLabelsReport_Billing_Pending["Malay"]["MatricNo"] = "No Dikenali";
	$fieldToolTipsReport_Billing_Pending["Malay"]["MatricNo"] = "";
	$fieldLabelsReport_Billing_Pending["Malay"]["Bill"] = "Bill";
	$fieldToolTipsReport_Billing_Pending["Malay"]["Bill"] = "";
	$fieldLabelsReport_Billing_Pending["Malay"]["Paid"] = "Paid";
	$fieldToolTipsReport_Billing_Pending["Malay"]["Paid"] = "";
	$fieldLabelsReport_Billing_Pending["Malay"]["Outstanding"] = "Outstanding";
	$fieldToolTipsReport_Billing_Pending["Malay"]["Outstanding"] = "";
	$fieldLabelsReport_Billing_Pending["Malay"]["tahun"] = "Darjah";
	$fieldToolTipsReport_Billing_Pending["Malay"]["tahun"] = "";
	$fieldLabelsReport_Billing_Pending["Malay"]["sesi"] = "Sesi";
	$fieldToolTipsReport_Billing_Pending["Malay"]["sesi"] = "";
	$fieldLabelsReport_Billing_Pending["Malay"]["kelas"] = "Kelas";
	$fieldToolTipsReport_Billing_Pending["Malay"]["kelas"] = "";
	if (count($fieldToolTipsReport_Billing_Pending["Malay"]))
		$tdataReport_Billing_Pending[".isUseToolTips"] = true;
}
	
	



$tdataReport_Billing_Pending[".shortTableName"] = "Report_Billing_Pending";
$tdataReport_Billing_Pending[".nSecOptions"] = 0;
$tdataReport_Billing_Pending[".recsPerRowList"] = 1;
$tdataReport_Billing_Pending[".mainTableOwnerID"] = "";
$tdataReport_Billing_Pending[".moveNext"] = 1;
$tdataReport_Billing_Pending[".nType"] = 1;

$tdataReport_Billing_Pending[".strOriginalTableName"] = "student_info";




$tdataReport_Billing_Pending[".showAddInPopup"] = false;

$tdataReport_Billing_Pending[".showEditInPopup"] = false;

$tdataReport_Billing_Pending[".showViewInPopup"] = true;

$tdataReport_Billing_Pending[".fieldsForRegister"] = array();
	
$tdataReport_Billing_Pending[".listAjax"] = false;

	$tdataReport_Billing_Pending[".audit"] = false;

	$tdataReport_Billing_Pending[".locking"] = false;

$tdataReport_Billing_Pending[".listIcons"] = true;




$tdataReport_Billing_Pending[".showSimpleSearchOptions"] = false;

$tdataReport_Billing_Pending[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Billing_Pending[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Billing_Pending[".isUseAjaxSuggest"] = true;

$tdataReport_Billing_Pending[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Billing_Pending[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Billing_Pending[".isUseTimeForSearch"] = false;




$tdataReport_Billing_Pending[".allSearchFields"] = array();

$tdataReport_Billing_Pending[".allSearchFields"][] = "kelas";
$tdataReport_Billing_Pending[".allSearchFields"][] = "tahun";
$tdataReport_Billing_Pending[".allSearchFields"][] = "sesi";
$tdataReport_Billing_Pending[".allSearchFields"][] = "Name";
$tdataReport_Billing_Pending[".allSearchFields"][] = "MatricNo";

$tdataReport_Billing_Pending[".googleLikeFields"][] = "Name";
$tdataReport_Billing_Pending[".googleLikeFields"][] = "MatricNo";
$tdataReport_Billing_Pending[".googleLikeFields"][] = "tahun";
$tdataReport_Billing_Pending[".googleLikeFields"][] = "sesi";
$tdataReport_Billing_Pending[".googleLikeFields"][] = "kelas";

$tdataReport_Billing_Pending[".panelSearchFields"][] = "tahun";
$tdataReport_Billing_Pending[".panelSearchFields"][] = "sesi";
$tdataReport_Billing_Pending[".panelSearchFields"][] = "Name";
$tdataReport_Billing_Pending[".panelSearchFields"][] = "MatricNo";

$tdataReport_Billing_Pending[".advSearchFields"][] = "kelas";
$tdataReport_Billing_Pending[".advSearchFields"][] = "tahun";
$tdataReport_Billing_Pending[".advSearchFields"][] = "sesi";
$tdataReport_Billing_Pending[".advSearchFields"][] = "Name";
$tdataReport_Billing_Pending[".advSearchFields"][] = "MatricNo";

$tdataReport_Billing_Pending[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdataReport_Billing_Pending[".totalsFields"][] = array(
	"fName" => "Bill", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataReport_Billing_Pending[".totalsFields"][] = array(
	"fName" => "Paid", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataReport_Billing_Pending[".totalsFields"][] = array(
	"fName" => "Outstanding", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdataReport_Billing_Pending[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_info.StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Billing_Pending[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Billing_Pending[".orderindexes"] = array();
$tdataReport_Billing_Pending[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_info.StudentID");

$tdataReport_Billing_Pending[".sqlHead"] = "SELECT student_info.StudentID,  student_info.Name,  student_info.MatricNo,  SUM(student_billing.amount) AS Bill,  SUM(student_billing.amount)-SUM(student_billing.balance) AS Paid,  SUM(student_billing.balance) AS Outstanding,  student_info.tahun,  student_info.sesi,  `group`.`group` AS kelas";
$tdataReport_Billing_Pending[".sqlFrom"] = "FROM student_info  LEFT OUTER JOIN student_billing ON student_info.StudentID = student_billing.studentID  INNER JOIN `group` ON student_info.`Class` = `group`.id";
$tdataReport_Billing_Pending[".sqlWhereExpr"] = "";
$tdataReport_Billing_Pending[".sqlTail"] = "GROUP BY student_info.StudentID  HAVING SUM(student_billing.balance) >0";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "MatricNo";
$arrEditTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>22,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>37,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Billing_Pending[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Personal",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Campus_Info1',
					  'tabName'=>"Campus Info",
					  'nType'=>'0',
					  'nOrder'=>11,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Contact1',
					  'tabName'=>"Contact",
					  'nType'=>'0',
					  'nOrder'=>22,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Next_Of_Kin1',
					  'tabName'=>"Next Of Kin",
					  'nType'=>'0',
					  'nOrder'=>30,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Medical1',
					  'tabName'=>"Medical",
					  'nType'=>'0',
					  'nOrder'=>37,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataReport_Billing_Pending[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "MatricNo";
$arrViewTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>22,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>34,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Billing_Pending[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Billing_Pending[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Billing_Pending[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Billing_Pending = array();
$tableKeysReport_Billing_Pending[] = "StudentID";
$tdataReport_Billing_Pending[".Keys"] = $tableKeysReport_Billing_Pending;

$tdataReport_Billing_Pending[".listFields"] = array();
$tdataReport_Billing_Pending[".listFields"][] = "kelas";
$tdataReport_Billing_Pending[".listFields"][] = "tahun";
$tdataReport_Billing_Pending[".listFields"][] = "Name";
$tdataReport_Billing_Pending[".listFields"][] = "MatricNo";
$tdataReport_Billing_Pending[".listFields"][] = "Bill";
$tdataReport_Billing_Pending[".listFields"][] = "Paid";
$tdataReport_Billing_Pending[".listFields"][] = "Outstanding";

$tdataReport_Billing_Pending[".viewFields"] = array();

$tdataReport_Billing_Pending[".addFields"] = array();

$tdataReport_Billing_Pending[".inlineAddFields"] = array();

$tdataReport_Billing_Pending[".editFields"] = array();

$tdataReport_Billing_Pending[".inlineEditFields"] = array();

$tdataReport_Billing_Pending[".exportFields"] = array();

$tdataReport_Billing_Pending[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Nama Pelajar"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_info.StudentID";
	
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Billing_Pending["StudentID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Nama"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "student_info.Name";
	
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Billing_Pending["Name"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "No Dikenali"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "student_info.MatricNo";
	
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
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "MatricNo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "MatricNo";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Billing_Pending["MatricNo"] = $fdata;
//	Bill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Bill";
	$fdata["GoodName"] = "Bill";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Bill"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Bill"; 
		$fdata["FullName"] = "SUM(student_billing.amount)";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["Bill"] = $fdata;
//	Paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Paid";
	$fdata["GoodName"] = "Paid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Paid"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Paid"; 
		$fdata["FullName"] = "SUM(student_billing.amount)-SUM(student_billing.balance)";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["Paid"] = $fdata;
//	Outstanding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Outstanding";
	$fdata["GoodName"] = "Outstanding";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Outstanding"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Outstanding"; 
		$fdata["FullName"] = "SUM(student_billing.balance)";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["Outstanding"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Darjah"; 
	$fdata["FieldType"] = 16;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["tahun"] = $fdata;
//	sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sesi";
	$fdata["GoodName"] = "sesi";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Sesi"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Pagi";
	$edata["LookupValues"][] = "Petang";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Billing_Pending["sesi"] = $fdata;
//	kelas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "kelas";
	$fdata["GoodName"] = "kelas";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = "Kelas"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "group"; 
		$fdata["FullName"] = "`group`.`group`";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["kelas"] = $fdata;

	
$tables_data["Report-Billing Pending"]=&$tdataReport_Billing_Pending;
$field_labels["Report_Billing_Pending"] = &$fieldLabelsReport_Billing_Pending;
$fieldToolTips["Report-Billing Pending"] = &$fieldToolTipsReport_Billing_Pending;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report-Billing Pending"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report-Billing Pending"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Billing_Pending()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_info.StudentID,  student_info.Name,  student_info.MatricNo,  SUM(student_billing.amount) AS Bill,  SUM(student_billing.amount)-SUM(student_billing.balance) AS Paid,  SUM(student_billing.balance) AS Outstanding,  student_info.tahun,  student_info.sesi,  `group`.`group` AS kelas";
$proto0["m_strFrom"] = "FROM student_info  LEFT OUTER JOIN student_billing ON student_info.StudentID = student_billing.studentID  INNER JOIN `group` ON student_info.`Class` = `group`.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_info.StudentID DESC";
$proto0["m_strTail"] = "GROUP BY student_info.StudentID  HAVING SUM(student_billing.balance) >0";
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
$proto3["m_sql"] = "SUM(student_billing.balance) >0";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$proto4=array();
$proto4["m_functiontype"] = "SQLF_SUM";
$proto4["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "balance",
	"m_strTable" => "student_billing"
));

$proto4["m_arguments"][]=$obj;
$proto4["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto4);

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = ">0";
$proto3["m_havingmode"] = "1";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_SUM";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_billing"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto13);

$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Bill";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(student_billing.amount)-SUM(student_billing.balance)"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Paid";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_SUM";
$proto18["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "balance",
	"m_strTable" => "student_billing"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto18);

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Outstanding";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "student_info"
));

$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sesi",
	"m_strTable" => "student_info"
));

$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "group"
));

$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "kelas";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "student_info";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "StudentID";
$proto27["m_columns"][] = "Name";
$proto27["m_columns"][] = "ICNO";
$proto27["m_columns"][] = "DOB";
$proto27["m_columns"][] = "MatricNo";
$proto27["m_columns"][] = "Email";
$proto27["m_columns"][] = "Access";
$proto27["m_columns"][] = "DateJoin";
$proto27["m_columns"][] = "Dateout";
$proto27["m_columns"][] = "Gender";
$proto27["m_columns"][] = "Address1";
$proto27["m_columns"][] = "City";
$proto27["m_columns"][] = "Postcode";
$proto27["m_columns"][] = "StateID";
$proto27["m_columns"][] = "HomeTelephone";
$proto27["m_columns"][] = "Nationality";
$proto27["m_columns"][] = "Status";
$proto27["m_columns"][] = "Disability";
$proto27["m_columns"][] = "MedicalCondition";
$proto27["m_columns"][] = "race";
$proto27["m_columns"][] = "Class";
$proto27["m_columns"][] = "sesi";
$proto27["m_columns"][] = "tahun";
$proto27["m_columns"][] = "f1_name";
$proto27["m_columns"][] = "f1_tel";
$proto27["m_columns"][] = "f1_relation";
$proto27["m_columns"][] = "f1_job";
$proto27["m_columns"][] = "f2_name";
$proto27["m_columns"][] = "f2_tel";
$proto27["m_columns"][] = "f2_relation";
$proto27["m_columns"][] = "f2_job";
$proto27["m_columns"][] = "blood";
$proto27["m_columns"][] = "hostel_in";
$proto27["m_columns"][] = "photo";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_alias"] = "";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = "0";
$proto28["m_inBrackets"] = "0";
$proto28["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_LEFTJOIN";
			$proto31=array();
$proto31["m_strName"] = "student_billing";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "sid";
$proto31["m_columns"][] = "bid";
$proto31["m_columns"][] = "studentID";
$proto31["m_columns"][] = "itemid";
$proto31["m_columns"][] = "amount";
$proto31["m_columns"][] = "balance";
$proto31["m_columns"][] = "bill_date";
$proto31["m_columns"][] = "bill_no";
$proto31["m_columns"][] = "sstatus";
$proto31["m_columns"][] = "remarks";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_alias"] = "";
$proto32=array();
$proto32["m_sql"] = "student_info.StudentID = student_billing.studentID";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= student_billing.studentID";
$proto32["m_havingmode"] = "0";
$proto32["m_inBrackets"] = "0";
$proto32["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "group";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "group";
$proto35["m_columns"][] = "darjah";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_alias"] = "";
$proto36=array();
$proto36["m_sql"] = "student_info.`Class` = `group`.id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= `group`.id";
$proto36["m_havingmode"] = "0";
$proto36["m_inBrackets"] = "0";
$proto36["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Billing_Pending = createSqlQuery_Report_Billing_Pending();
									$tdataReport_Billing_Pending[".sqlquery"] = $queryData_Report_Billing_Pending;

include_once(getabspath("include/Report_Billing_Pending_events.php"));
$tableEvents["Report-Billing Pending"] = new eventclass_Report_Billing_Pending;
$tdataReport_Billing_Pending[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report-Billing Pending");

?>