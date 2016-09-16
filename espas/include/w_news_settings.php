<?php
require_once(getabspath("classes/cipherer.php"));
$tdataw_news = array();
	$tdataw_news[".NumberOfChars"] = 80; 
	$tdataw_news[".ShortName"] = "w_news";
	$tdataw_news[".OwnerID"] = "";
	$tdataw_news[".OriginalTable"] = "w_news";

//	field labels
$fieldLabelsw_news = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsw_news["Malay"] = array();
	$fieldToolTipsw_news["Malay"] = array();
	$fieldLabelsw_news["Malay"]["nid"] = "Nid";
	$fieldToolTipsw_news["Malay"]["nid"] = "";
	$fieldLabelsw_news["Malay"]["title"] = "Tajuk";
	$fieldToolTipsw_news["Malay"]["title"] = "";
	$fieldLabelsw_news["Malay"]["content"] = "Kandungan";
	$fieldToolTipsw_news["Malay"]["content"] = "";
	$fieldLabelsw_news["Malay"]["ndate"] = "Tarikh";
	$fieldToolTipsw_news["Malay"]["ndate"] = "";
	$fieldLabelsw_news["Malay"]["category"] = "Kategori";
	$fieldToolTipsw_news["Malay"]["category"] = "";
	$fieldLabelsw_news["Malay"]["nstatus"] = "Status";
	$fieldToolTipsw_news["Malay"]["nstatus"] = "";
	$fieldLabelsw_news["Malay"]["pic"] = "Gambar";
	$fieldToolTipsw_news["Malay"]["pic"] = "";
	$fieldLabelsw_news["Malay"]["attach"] = "Attachment";
	$fieldToolTipsw_news["Malay"]["attach"] = "";
	$fieldLabelsw_news["Malay"]["slink"] = "Slink";
	$fieldToolTipsw_news["Malay"]["slink"] = "";
	if (count($fieldToolTipsw_news["Malay"]))
		$tdataw_news[".isUseToolTips"] = true;
}
	
	
	$tdataw_news[".NCSearch"] = true;



$tdataw_news[".shortTableName"] = "w_news";
$tdataw_news[".nSecOptions"] = 0;
$tdataw_news[".recsPerRowList"] = 1;
$tdataw_news[".mainTableOwnerID"] = "";
$tdataw_news[".moveNext"] = 1;
$tdataw_news[".nType"] = 0;

$tdataw_news[".strOriginalTableName"] = "w_news";




$tdataw_news[".showAddInPopup"] = false;

$tdataw_news[".showEditInPopup"] = false;

$tdataw_news[".showViewInPopup"] = false;

$tdataw_news[".fieldsForRegister"] = array();
	
$tdataw_news[".listAjax"] = false;

	$tdataw_news[".audit"] = false;

	$tdataw_news[".locking"] = false;

$tdataw_news[".listIcons"] = true;
$tdataw_news[".edit"] = true;



$tdataw_news[".delete"] = true;

$tdataw_news[".showSimpleSearchOptions"] = false;

$tdataw_news[".showSearchPanel"] = true;

if (isMobile())
	$tdataw_news[".isUseAjaxSuggest"] = false;
else 
	$tdataw_news[".isUseAjaxSuggest"] = true;

$tdataw_news[".rowHighlite"] = true;

// button handlers file names

$tdataw_news[".addPageEvents"] = false;

// use timepicker for search panel
$tdataw_news[".isUseTimeForSearch"] = false;




$tdataw_news[".allSearchFields"] = array();

$tdataw_news[".allSearchFields"][] = "nid";
$tdataw_news[".allSearchFields"][] = "title";
$tdataw_news[".allSearchFields"][] = "ndate";
$tdataw_news[".allSearchFields"][] = "category";
$tdataw_news[".allSearchFields"][] = "nstatus";
$tdataw_news[".allSearchFields"][] = "pic";
$tdataw_news[".allSearchFields"][] = "attach";

$tdataw_news[".googleLikeFields"][] = "nid";
$tdataw_news[".googleLikeFields"][] = "title";
$tdataw_news[".googleLikeFields"][] = "content";
$tdataw_news[".googleLikeFields"][] = "ndate";
$tdataw_news[".googleLikeFields"][] = "category";
$tdataw_news[".googleLikeFields"][] = "nstatus";
$tdataw_news[".googleLikeFields"][] = "pic";
$tdataw_news[".googleLikeFields"][] = "attach";


$tdataw_news[".advSearchFields"][] = "nid";
$tdataw_news[".advSearchFields"][] = "title";
$tdataw_news[".advSearchFields"][] = "ndate";
$tdataw_news[".advSearchFields"][] = "category";
$tdataw_news[".advSearchFields"][] = "nstatus";
$tdataw_news[".advSearchFields"][] = "pic";
$tdataw_news[".advSearchFields"][] = "attach";

$tdataw_news[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataw_news[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY ndate DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataw_news[".strOrderBy"] = $tstrOrderBy;

$tdataw_news[".orderindexes"] = array();
$tdataw_news[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "ndate");

$tdataw_news[".sqlHead"] = "SELECT nid,  title,  content,  ndate,  category,  nstatus,  pic,  attach";
$tdataw_news[".sqlFrom"] = "FROM w_news";
$tdataw_news[".sqlWhereExpr"] = "category!='Profil'";
$tdataw_news[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataw_news[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataw_news[".arrGroupsPerPage"] = $arrGPP;

$tableKeysw_news = array();
$tableKeysw_news[] = "nid";
$tdataw_news[".Keys"] = $tableKeysw_news;

$tdataw_news[".listFields"] = array();
$tdataw_news[".listFields"][] = "title";
$tdataw_news[".listFields"][] = "ndate";
$tdataw_news[".listFields"][] = "category";
$tdataw_news[".listFields"][] = "nstatus";

$tdataw_news[".viewFields"] = array();

$tdataw_news[".addFields"] = array();
$tdataw_news[".addFields"][] = "title";
$tdataw_news[".addFields"][] = "ndate";
$tdataw_news[".addFields"][] = "category";
$tdataw_news[".addFields"][] = "nstatus";
$tdataw_news[".addFields"][] = "pic";
$tdataw_news[".addFields"][] = "attach";
$tdataw_news[".addFields"][] = "content";

$tdataw_news[".inlineAddFields"] = array();

$tdataw_news[".editFields"] = array();
$tdataw_news[".editFields"][] = "title";
$tdataw_news[".editFields"][] = "ndate";
$tdataw_news[".editFields"][] = "category";
$tdataw_news[".editFields"][] = "nstatus";
$tdataw_news[".editFields"][] = "pic";
$tdataw_news[".editFields"][] = "attach";
$tdataw_news[".editFields"][] = "content";

$tdataw_news[".inlineEditFields"] = array();

$tdataw_news[".exportFields"] = array();

$tdataw_news[".printFields"] = array();

//	nid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nid";
	$fdata["GoodName"] = "nid";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Nid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nid"; 
		$fdata["FullName"] = "nid";
	
		
		
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
	
		
		
	$tdataw_news["nid"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Tajuk"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "title"; 
		$fdata["FullName"] = "title";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";
	
		$edata["inputStyle"] = " width:632px;";
	$edata["controlWidth"] = 632;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_news["title"] = $fdata;
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Kandungan"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "content"; 
		$fdata["FullName"] = "content";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "HTML");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 756;
			$edata["nCols"] = 725;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_news["content"] = $fdata;
//	ndate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ndate";
	$fdata["GoodName"] = "ndate";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Tarikh"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ndate"; 
		$fdata["FullName"] = "ndate";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_news["ndate"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Kategori"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "category"; 
		$fdata["FullName"] = "category";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=57";
	
		
		
		
				
	
	
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
	
		
		
	$tdataw_news["category"] = $fdata;
//	nstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nstatus";
	$fdata["GoodName"] = "nstatus";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nstatus"; 
		$fdata["FullName"] = "nstatus";
	
		
		
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
	
		
		
	$tdataw_news["nstatus"] = $fdata;
//	pic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pic";
	$fdata["GoodName"] = "pic";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Gambar"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "pic"; 
		$fdata["FullName"] = "pic";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true; 
	$vdata["ImageWidth"] = 0;
	$vdata["ImageHeight"] = 0;
	
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpeg";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		
		$edata["maxFileSize"] = 6000;
	
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 250;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_news["pic"] = $fdata;
//	attach
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "attach";
	$fdata["GoodName"] = "attach";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Attachment"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "attach"; 
		$fdata["FullName"] = "attach";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 5;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_news["attach"] = $fdata;

	
$tables_data["w_news"]=&$tdataw_news;
$field_labels["w_news"] = &$fieldLabelsw_news;
$fieldToolTips["w_news"] = &$fieldToolTipsw_news;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["w_news"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["w_news"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_w_news()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nid,  title,  content,  ndate,  category,  nstatus,  pic,  attach";
$proto0["m_strFrom"] = "FROM w_news";
$proto0["m_strWhere"] = "category!='Profil'";
$proto0["m_strOrderBy"] = "ORDER BY ndate DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "category!='Profil'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "w_news"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "!='Profil'";
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
	"m_strName" => "nid",
	"m_strTable" => "w_news"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "w_news"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "w_news"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ndate",
	"m_strTable" => "w_news"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "w_news"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nstatus",
	"m_strTable" => "w_news"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pic",
	"m_strTable" => "w_news"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "attach",
	"m_strTable" => "w_news"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "w_news";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "nid";
$proto22["m_columns"][] = "title";
$proto22["m_columns"][] = "content";
$proto22["m_columns"][] = "ndate";
$proto22["m_columns"][] = "category";
$proto22["m_columns"][] = "nstatus";
$proto22["m_columns"][] = "pic";
$proto22["m_columns"][] = "attach";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "ndate",
	"m_strTable" => "w_news"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 0;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_w_news = createSqlQuery_w_news();
								$tdataw_news[".sqlquery"] = $queryData_w_news;

$tableEvents["w_news"] = new eventsBase;
$tdataw_news[".hasEvents"] = false;

$cipherer = new RunnerCipherer("w_news");

?>