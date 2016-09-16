<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacampus_setting = array();
	$tdatacampus_setting[".NumberOfChars"] = 80; 
	$tdatacampus_setting[".ShortName"] = "campus_setting";
	$tdatacampus_setting[".OwnerID"] = "";
	$tdatacampus_setting[".OriginalTable"] = "campus_setting";

//	field labels
$fieldLabelscampus_setting = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelscampus_setting["Malay"] = array();
	$fieldToolTipscampus_setting["Malay"] = array();
	$fieldLabelscampus_setting["Malay"]["id"] = "Id";
	$fieldToolTipscampus_setting["Malay"]["id"] = "";
	$fieldLabelscampus_setting["Malay"]["logo"] = "Logo";
	$fieldToolTipscampus_setting["Malay"]["logo"] = "";
	$fieldLabelscampus_setting["Malay"]["acronyim"] = "Akronim";
	$fieldToolTipscampus_setting["Malay"]["acronyim"] = "";
	$fieldLabelscampus_setting["Malay"]["campus_name"] = "Nama Sekolah";
	$fieldToolTipscampus_setting["Malay"]["campus_name"] = "";
	$fieldLabelscampus_setting["Malay"]["address"] = "Alamat";
	$fieldToolTipscampus_setting["Malay"]["address"] = "";
	$fieldLabelscampus_setting["Malay"]["city"] = "Bandar";
	$fieldToolTipscampus_setting["Malay"]["city"] = "";
	$fieldLabelscampus_setting["Malay"]["postcode"] = "Poskod";
	$fieldToolTipscampus_setting["Malay"]["postcode"] = "";
	$fieldLabelscampus_setting["Malay"]["state"] = "Negeri";
	$fieldToolTipscampus_setting["Malay"]["state"] = "";
	$fieldLabelscampus_setting["Malay"]["faxNo"] = "No Fax";
	$fieldToolTipscampus_setting["Malay"]["faxNo"] = "";
	$fieldLabelscampus_setting["Malay"]["telephone"] = "No Tel";
	$fieldToolTipscampus_setting["Malay"]["telephone"] = "";
	$fieldLabelscampus_setting["Malay"]["email"] = "Email";
	$fieldToolTipscampus_setting["Malay"]["email"] = "";
	$fieldLabelscampus_setting["Malay"]["daerah"] = "Daerah";
	$fieldToolTipscampus_setting["Malay"]["daerah"] = "";
	$fieldLabelscampus_setting["Malay"]["gb_name"] = "Nama Guru Besar";
	$fieldToolTipscampus_setting["Malay"]["gb_name"] = "";
	$fieldLabelscampus_setting["Malay"]["gb_tel"] = "No Tel Guru Besar";
	$fieldToolTipscampus_setting["Malay"]["gb_tel"] = "";
	$fieldLabelscampus_setting["Malay"]["sek_mix"] = "Sek. Lelaki/ Perempuan/ Bercampur";
	$fieldToolTipscampus_setting["Malay"]["sek_mix"] = "";
	$fieldLabelscampus_setting["Malay"]["sek_tukar"] = "Sek. Bertukar Sesi Selepas 6/12 Bulan";
	$fieldToolTipscampus_setting["Malay"]["sek_tukar"] = "";
	$fieldLabelscampus_setting["Malay"]["sek_sesi"] = "Masa Sek. Pagi/Ptg/ Pagi & Ptg";
	$fieldToolTipscampus_setting["Malay"]["sek_sesi"] = "";
	$fieldLabelscampus_setting["Malay"]["sek_kod"] = "Kod Sekolah";
	$fieldToolTipscampus_setting["Malay"]["sek_kod"] = "";
	$fieldLabelscampus_setting["Malay"]["url"] = "Laman Sesawang";
	$fieldToolTipscampus_setting["Malay"]["url"] = "";
	$fieldLabelscampus_setting["Malay"]["sek_building"] = "Jenis Bangunan";
	$fieldToolTipscampus_setting["Malay"]["sek_building"] = "";
	$fieldLabelscampus_setting["Malay"]["sek_owner"] = "Pemilik Bangunan";
	$fieldToolTipscampus_setting["Malay"]["sek_owner"] = "";
	$fieldLabelscampus_setting["Malay"]["sek_jenis"] = "Jenis Sekolah";
	$fieldToolTipscampus_setting["Malay"]["sek_jenis"] = "";
	if (count($fieldToolTipscampus_setting["Malay"]))
		$tdatacampus_setting[".isUseToolTips"] = true;
}
	
	
	$tdatacampus_setting[".NCSearch"] = true;



$tdatacampus_setting[".shortTableName"] = "campus_setting";
$tdatacampus_setting[".nSecOptions"] = 0;
$tdatacampus_setting[".recsPerRowList"] = 1;
$tdatacampus_setting[".mainTableOwnerID"] = "";
$tdatacampus_setting[".moveNext"] = 1;
$tdatacampus_setting[".nType"] = 0;

$tdatacampus_setting[".strOriginalTableName"] = "campus_setting";




$tdatacampus_setting[".showAddInPopup"] = false;

$tdatacampus_setting[".showEditInPopup"] = false;

$tdatacampus_setting[".showViewInPopup"] = true;

$tdatacampus_setting[".fieldsForRegister"] = array();
	
$tdatacampus_setting[".listAjax"] = false;

	$tdatacampus_setting[".audit"] = false;

	$tdatacampus_setting[".locking"] = false;

$tdatacampus_setting[".listIcons"] = true;
$tdatacampus_setting[".edit"] = true;




$tdatacampus_setting[".showSimpleSearchOptions"] = false;

$tdatacampus_setting[".showSearchPanel"] = true;

if (isMobile())
	$tdatacampus_setting[".isUseAjaxSuggest"] = false;
else 
	$tdatacampus_setting[".isUseAjaxSuggest"] = true;

$tdatacampus_setting[".rowHighlite"] = true;

// button handlers file names

$tdatacampus_setting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacampus_setting[".isUseTimeForSearch"] = false;




$tdatacampus_setting[".allSearchFields"] = array();


$tdatacampus_setting[".googleLikeFields"][] = "email";
$tdatacampus_setting[".googleLikeFields"][] = "daerah";
$tdatacampus_setting[".googleLikeFields"][] = "gb_name";
$tdatacampus_setting[".googleLikeFields"][] = "gb_tel";
$tdatacampus_setting[".googleLikeFields"][] = "sek_mix";
$tdatacampus_setting[".googleLikeFields"][] = "sek_tukar";
$tdatacampus_setting[".googleLikeFields"][] = "sek_sesi";
$tdatacampus_setting[".googleLikeFields"][] = "sek_kod";
$tdatacampus_setting[".googleLikeFields"][] = "url";
$tdatacampus_setting[".googleLikeFields"][] = "sek_building";
$tdatacampus_setting[".googleLikeFields"][] = "sek_owner";
$tdatacampus_setting[".googleLikeFields"][] = "sek_jenis";



$tdatacampus_setting[".isTableType"] = "list";

	
$tdatacampus_setting[".isVerLayout"] = true;



// Access doesn't support subqueries from the same table as main



$tdatacampus_setting[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacampus_setting[".strOrderBy"] = $tstrOrderBy;

$tdatacampus_setting[".orderindexes"] = array();

$tdatacampus_setting[".sqlHead"] = "SELECT id,  logo,  acronyim,  campus_name,  address,  city,  postcode,  `state`,  faxNo,  telephone,  email,  daerah,  gb_name,  gb_tel,  sek_mix,  sek_tukar,  sek_sesi,  sek_kod,  url,  sek_building,  sek_owner,  sek_jenis";
$tdatacampus_setting[".sqlFrom"] = "FROM campus_setting";
$tdatacampus_setting[".sqlWhereExpr"] = "";
$tdatacampus_setting[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacampus_setting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacampus_setting[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscampus_setting = array();
$tableKeyscampus_setting[] = "id";
$tdatacampus_setting[".Keys"] = $tableKeyscampus_setting;

$tdatacampus_setting[".listFields"] = array();
$tdatacampus_setting[".listFields"][] = "logo";
$tdatacampus_setting[".listFields"][] = "acronyim";
$tdatacampus_setting[".listFields"][] = "campus_name";
$tdatacampus_setting[".listFields"][] = "sek_kod";
$tdatacampus_setting[".listFields"][] = "address";
$tdatacampus_setting[".listFields"][] = "postcode";
$tdatacampus_setting[".listFields"][] = "city";
$tdatacampus_setting[".listFields"][] = "state";
$tdatacampus_setting[".listFields"][] = "email";
$tdatacampus_setting[".listFields"][] = "faxNo";
$tdatacampus_setting[".listFields"][] = "telephone";
$tdatacampus_setting[".listFields"][] = "daerah";
$tdatacampus_setting[".listFields"][] = "gb_tel";
$tdatacampus_setting[".listFields"][] = "gb_name";
$tdatacampus_setting[".listFields"][] = "sek_mix";
$tdatacampus_setting[".listFields"][] = "sek_jenis";
$tdatacampus_setting[".listFields"][] = "sek_building";
$tdatacampus_setting[".listFields"][] = "sek_owner";

$tdatacampus_setting[".viewFields"] = array();

$tdatacampus_setting[".addFields"] = array();

$tdatacampus_setting[".inlineAddFields"] = array();

$tdatacampus_setting[".editFields"] = array();
$tdatacampus_setting[".editFields"][] = "logo";
$tdatacampus_setting[".editFields"][] = "acronyim";
$tdatacampus_setting[".editFields"][] = "campus_name";
$tdatacampus_setting[".editFields"][] = "sek_kod";
$tdatacampus_setting[".editFields"][] = "address";
$tdatacampus_setting[".editFields"][] = "postcode";
$tdatacampus_setting[".editFields"][] = "city";
$tdatacampus_setting[".editFields"][] = "state";
$tdatacampus_setting[".editFields"][] = "email";
$tdatacampus_setting[".editFields"][] = "faxNo";
$tdatacampus_setting[".editFields"][] = "telephone";
$tdatacampus_setting[".editFields"][] = "daerah";
$tdatacampus_setting[".editFields"][] = "gb_tel";
$tdatacampus_setting[".editFields"][] = "gb_name";
$tdatacampus_setting[".editFields"][] = "sek_mix";
$tdatacampus_setting[".editFields"][] = "sek_jenis";
$tdatacampus_setting[".editFields"][] = "sek_building";
$tdatacampus_setting[".editFields"][] = "sek_owner";

$tdatacampus_setting[".inlineEditFields"] = array();

$tdatacampus_setting[".exportFields"] = array();

$tdatacampus_setting[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "campus_setting";
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
	
		
		
	$tdatacampus_setting["id"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Logo"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "logo"; 
		$fdata["FullName"] = "logo";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "images/";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		$vdata["LinkPrefix"] ="setting/"; 
	
				$vdata["ImageWidth"] = 150;
	$vdata["ImageHeight"] = 80;
	
			
		
		
		
		
		
		
		
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
				$edata["NewSize"] = 400;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["logo"] = $fdata;
//	acronyim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "acronyim";
	$fdata["GoodName"] = "acronyim";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Akronim"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "acronyim"; 
		$fdata["FullName"] = "acronyim";
	
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["acronyim"] = $fdata;
//	campus_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "campus_name";
	$fdata["GoodName"] = "campus_name";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Nama Sekolah"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "campus_name"; 
		$fdata["FullName"] = "campus_name";
	
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
			$edata["EditParams"].= " maxlength=500";
	
		$edata["inputStyle"] = " width:283px;";
	$edata["controlWidth"] = 283;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["campus_name"] = $fdata;
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Alamat"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "address"; 
		$fdata["FullName"] = "address";
	
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 40;
			$edata["nCols"] = 264;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["address"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Bandar"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "city"; 
		$fdata["FullName"] = "city";
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["city"] = $fdata;
//	postcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "postcode";
	$fdata["GoodName"] = "postcode";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Poskod"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "postcode"; 
		$fdata["FullName"] = "postcode";
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["postcode"] = $fdata;
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Negeri"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "state"; 
		$fdata["FullName"] = "`state`";
	
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
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=1";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["state"] = $fdata;
//	faxNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "faxNo";
	$fdata["GoodName"] = "faxNo";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "No Fax"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "faxNo"; 
		$fdata["FullName"] = "faxNo";
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["faxNo"] = $fdata;
//	telephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "telephone";
	$fdata["GoodName"] = "telephone";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "No Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "telephone"; 
		$fdata["FullName"] = "telephone";
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["telephone"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "email"; 
		$fdata["FullName"] = "email";
	
		
		
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
	
		
		
	$tdatacampus_setting["email"] = $fdata;
//	daerah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "daerah";
	$fdata["GoodName"] = "daerah";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Daerah"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "daerah"; 
		$fdata["FullName"] = "daerah";
	
		
		
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
	
		
		
	$tdatacampus_setting["daerah"] = $fdata;
//	gb_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "gb_name";
	$fdata["GoodName"] = "gb_name";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Nama Guru Besar"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "gb_name"; 
		$fdata["FullName"] = "gb_name";
	
		
		
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
	
		
		
	$tdatacampus_setting["gb_name"] = $fdata;
//	gb_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "gb_tel";
	$fdata["GoodName"] = "gb_tel";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "No Tel Guru Besar"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "gb_tel"; 
		$fdata["FullName"] = "gb_tel";
	
		
		
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
	
		
		
	$tdatacampus_setting["gb_tel"] = $fdata;
//	sek_mix
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sek_mix";
	$fdata["GoodName"] = "sek_mix";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Sek. Lelaki/ Perempuan/ Bercampur"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "sek_mix"; 
		$fdata["FullName"] = "sek_mix";
	
		
		
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
	$edata["LookupValues"][] = "Lelaki";
	$edata["LookupValues"][] = "Perempuan";
	$edata["LookupValues"][] = "Bercampur";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["sek_mix"] = $fdata;
//	sek_tukar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sek_tukar";
	$fdata["GoodName"] = "sek_tukar";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Sek. Bertukar Sesi Selepas 6/12 Bulan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sek_tukar"; 
		$fdata["FullName"] = "sek_tukar";
	
		
		
				
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
	$edata["LookupValues"][] = "Ya";
	$edata["LookupValues"][] = "Tidak";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["sek_tukar"] = $fdata;
//	sek_sesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sek_sesi";
	$fdata["GoodName"] = "sek_sesi";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Masa Sek. Pagi/Ptg/ Pagi & Ptg"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sek_sesi"; 
		$fdata["FullName"] = "sek_sesi";
	
		
		
				
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
	
		
		
	$tdatacampus_setting["sek_sesi"] = $fdata;
//	sek_kod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "sek_kod";
	$fdata["GoodName"] = "sek_kod";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Kod Sekolah"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "sek_kod"; 
		$fdata["FullName"] = "sek_kod";
	
		
		
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
	
		
		
	$tdatacampus_setting["sek_kod"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Laman Sesawang"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "url"; 
		$fdata["FullName"] = "url";
	
		
		
				
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
	
		
		
	$tdatacampus_setting["url"] = $fdata;
//	sek_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "sek_building";
	$fdata["GoodName"] = "sek_building";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Jenis Bangunan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "sek_building"; 
		$fdata["FullName"] = "sek_building";
	
		
		
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
	$edata["LookupValues"][] = "BANGUNAN SEKOLAH";
	$edata["LookupValues"][] = "RUMAH KEDIAMAN";
	$edata["LookupValues"][] = "RUMAH KEDAI";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["sek_building"] = $fdata;
//	sek_owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sek_owner";
	$fdata["GoodName"] = "sek_owner";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Pemilik Bangunan"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "sek_owner"; 
		$fdata["FullName"] = "sek_owner";
	
		
		
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
	$edata["LookupValues"][] = "SENDIRI";
	$edata["LookupValues"][] = "SEWA";
	$edata["LookupValues"][] = "WAKAF";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["sek_owner"] = $fdata;
//	sek_jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sek_jenis";
	$fdata["GoodName"] = "sek_jenis";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Jenis Sekolah"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "sek_jenis"; 
		$fdata["FullName"] = "sek_jenis";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=58";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["sek_jenis"] = $fdata;

	
$tables_data["campus_setting"]=&$tdatacampus_setting;
$field_labels["campus_setting"] = &$fieldLabelscampus_setting;
$fieldToolTips["campus_setting"] = &$fieldToolTipscampus_setting;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["campus_setting"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["campus_setting"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_campus_setting()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  logo,  acronyim,  campus_name,  address,  city,  postcode,  `state`,  faxNo,  telephone,  email,  daerah,  gb_name,  gb_tel,  sek_mix,  sek_tukar,  sek_sesi,  sek_kod,  url,  sek_building,  sek_owner,  sek_jenis";
$proto0["m_strFrom"] = "FROM campus_setting";
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
	"m_strTable" => "campus_setting"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "campus_setting"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "acronyim",
	"m_strTable" => "campus_setting"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "campus_name",
	"m_strTable" => "campus_setting"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "campus_setting"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "campus_setting"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "postcode",
	"m_strTable" => "campus_setting"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "campus_setting"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "faxNo",
	"m_strTable" => "campus_setting"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "telephone",
	"m_strTable" => "campus_setting"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "campus_setting"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "daerah",
	"m_strTable" => "campus_setting"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "gb_name",
	"m_strTable" => "campus_setting"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "gb_tel",
	"m_strTable" => "campus_setting"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "sek_mix",
	"m_strTable" => "campus_setting"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "sek_tukar",
	"m_strTable" => "campus_setting"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "sek_sesi",
	"m_strTable" => "campus_setting"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "sek_kod",
	"m_strTable" => "campus_setting"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "campus_setting"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "sek_building",
	"m_strTable" => "campus_setting"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "sek_owner",
	"m_strTable" => "campus_setting"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "sek_jenis",
	"m_strTable" => "campus_setting"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto49=array();
$proto49["m_link"] = "SQLL_MAIN";
			$proto50=array();
$proto50["m_strName"] = "campus_setting";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "id";
$proto50["m_columns"][] = "logo";
$proto50["m_columns"][] = "acronyim";
$proto50["m_columns"][] = "campus_name";
$proto50["m_columns"][] = "address";
$proto50["m_columns"][] = "city";
$proto50["m_columns"][] = "postcode";
$proto50["m_columns"][] = "state";
$proto50["m_columns"][] = "faxNo";
$proto50["m_columns"][] = "telephone";
$proto50["m_columns"][] = "email";
$proto50["m_columns"][] = "daerah";
$proto50["m_columns"][] = "gb_name";
$proto50["m_columns"][] = "gb_tel";
$proto50["m_columns"][] = "gred_sek";
$proto50["m_columns"][] = "sek_mix";
$proto50["m_columns"][] = "sek_kongsi";
$proto50["m_columns"][] = "sek_tukar";
$proto50["m_columns"][] = "sek_sesi";
$proto50["m_columns"][] = "sek_kod";
$proto50["m_columns"][] = "url";
$proto50["m_columns"][] = "riten_no";
$proto50["m_columns"][] = "sek_building";
$proto50["m_columns"][] = "sek_owner";
$proto50["m_columns"][] = "sek_jenis";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_alias"] = "";
$proto51=array();
$proto51["m_sql"] = "";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "";
$proto51["m_havingmode"] = "0";
$proto51["m_inBrackets"] = "0";
$proto51["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_campus_setting = createSqlQuery_campus_setting();
																						$tdatacampus_setting[".sqlquery"] = $queryData_campus_setting;

$tableEvents["campus_setting"] = new eventsBase;
$tdatacampus_setting[".hasEvents"] = false;

$cipherer = new RunnerCipherer("campus_setting");

?>