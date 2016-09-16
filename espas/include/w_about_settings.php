<?php
require_once(getabspath("classes/cipherer.php"));
$tdataw_about = array();
	$tdataw_about[".NumberOfChars"] = 80; 
	$tdataw_about[".ShortName"] = "w_about";
	$tdataw_about[".OwnerID"] = "";
	$tdataw_about[".OriginalTable"] = "w_news";

//	field labels
$fieldLabelsw_about = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsw_about["Malay"] = array();
	$fieldToolTipsw_about["Malay"] = array();
	$fieldLabelsw_about["Malay"]["nid"] = "Nid";
	$fieldToolTipsw_about["Malay"]["nid"] = "";
	$fieldLabelsw_about["Malay"]["title"] = "Tajuk";
	$fieldToolTipsw_about["Malay"]["title"] = "";
	$fieldLabelsw_about["Malay"]["content"] = "Kandungan";
	$fieldToolTipsw_about["Malay"]["content"] = "";
	$fieldLabelsw_about["Malay"]["ndate"] = "Tarikh";
	$fieldToolTipsw_about["Malay"]["ndate"] = "";
	$fieldLabelsw_about["Malay"]["category"] = "Kategori";
	$fieldToolTipsw_about["Malay"]["category"] = "";
	$fieldLabelsw_about["Malay"]["nstatus"] = "Status";
	$fieldToolTipsw_about["Malay"]["nstatus"] = "";
	$fieldLabelsw_about["Malay"]["pic"] = "Gambar";
	$fieldToolTipsw_about["Malay"]["pic"] = "";
	$fieldLabelsw_about["Malay"]["attach"] = "Attachment";
	$fieldToolTipsw_about["Malay"]["attach"] = "";
	$fieldLabelsw_about["Malay"]["slink"] = "Slink";
	$fieldToolTipsw_about["Malay"]["slink"] = "";
	if (count($fieldToolTipsw_about["Malay"]))
		$tdataw_about[".isUseToolTips"] = true;
}
	
	
	$tdataw_about[".NCSearch"] = true;



$tdataw_about[".shortTableName"] = "w_about";
$tdataw_about[".nSecOptions"] = 0;
$tdataw_about[".recsPerRowList"] = 1;
$tdataw_about[".mainTableOwnerID"] = "";
$tdataw_about[".moveNext"] = 1;
$tdataw_about[".nType"] = 1;

$tdataw_about[".strOriginalTableName"] = "w_news";




$tdataw_about[".showAddInPopup"] = false;

$tdataw_about[".showEditInPopup"] = false;

$tdataw_about[".showViewInPopup"] = false;

$tdataw_about[".fieldsForRegister"] = array();
	
$tdataw_about[".listAjax"] = false;

	$tdataw_about[".audit"] = false;

	$tdataw_about[".locking"] = false;

$tdataw_about[".listIcons"] = true;
$tdataw_about[".edit"] = true;



$tdataw_about[".delete"] = true;

$tdataw_about[".showSimpleSearchOptions"] = false;

$tdataw_about[".showSearchPanel"] = true;

if (isMobile())
	$tdataw_about[".isUseAjaxSuggest"] = false;
else 
	$tdataw_about[".isUseAjaxSuggest"] = true;

$tdataw_about[".rowHighlite"] = true;

// button handlers file names

$tdataw_about[".addPageEvents"] = false;

// use timepicker for search panel
$tdataw_about[".isUseTimeForSearch"] = false;




$tdataw_about[".allSearchFields"] = array();


$tdataw_about[".googleLikeFields"][] = "nid";
$tdataw_about[".googleLikeFields"][] = "title";
$tdataw_about[".googleLikeFields"][] = "content";
$tdataw_about[".googleLikeFields"][] = "ndate";
$tdataw_about[".googleLikeFields"][] = "category";
$tdataw_about[".googleLikeFields"][] = "nstatus";
$tdataw_about[".googleLikeFields"][] = "pic";
$tdataw_about[".googleLikeFields"][] = "attach";



$tdataw_about[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataw_about[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataw_about[".strOrderBy"] = $tstrOrderBy;

$tdataw_about[".orderindexes"] = array();

$tdataw_about[".sqlHead"] = "SELECT nid,  title,  content,  ndate,  category,  nstatus,  pic,  attach";
$tdataw_about[".sqlFrom"] = "FROM w_news";
$tdataw_about[".sqlWhereExpr"] = "(category ='profil')";
$tdataw_about[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataw_about[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataw_about[".arrGroupsPerPage"] = $arrGPP;

$tableKeysw_about = array();
$tableKeysw_about[] = "nid";
$tdataw_about[".Keys"] = $tableKeysw_about;

$tdataw_about[".listFields"] = array();
$tdataw_about[".listFields"][] = "title";
$tdataw_about[".listFields"][] = "nstatus";

$tdataw_about[".viewFields"] = array();

$tdataw_about[".addFields"] = array();
$tdataw_about[".addFields"][] = "title";
$tdataw_about[".addFields"][] = "category";
$tdataw_about[".addFields"][] = "nstatus";
$tdataw_about[".addFields"][] = "attach";
$tdataw_about[".addFields"][] = "content";

$tdataw_about[".inlineAddFields"] = array();

$tdataw_about[".editFields"] = array();
$tdataw_about[".editFields"][] = "title";
$tdataw_about[".editFields"][] = "category";
$tdataw_about[".editFields"][] = "nstatus";
$tdataw_about[".editFields"][] = "attach";
$tdataw_about[".editFields"][] = "content";

$tdataw_about[".inlineEditFields"] = array();

$tdataw_about[".exportFields"] = array();

$tdataw_about[".printFields"] = array();

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
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "nid"; 
		$fdata["FullName"] = "nid";
	
		
		
				
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
	
		
		
	$tdataw_about["nid"] = $fdata;
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
	
		
		
	$tdataw_about["title"] = $fdata;
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
	
		
		
		
				$edata["nRows"] = 375;
			$edata["nCols"] = 725;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_about["content"] = $fdata;
//	ndate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ndate";
	$fdata["GoodName"] = "ndate";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Tarikh"; 
	$fdata["FieldType"] = 7;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ndate"; 
		$fdata["FullName"] = "ndate";
	
		
		
				
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
	
		
		
	$tdataw_about["ndate"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Kategori"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_about["category"] = $fdata;
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
	
		
		
	$tdataw_about["nstatus"] = $fdata;
//	pic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pic";
	$fdata["GoodName"] = "pic";
	$fdata["ownerTable"] = "w_news";
	$fdata["Label"] = "Gambar"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pic"; 
		$fdata["FullName"] = "pic";
	
		
		
				
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
	
		
		$edata["maxFileSize"] = 3000;
	
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_about["pic"] = $fdata;
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

		
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpeg";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 5;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 300;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_about["attach"] = $fdata;

	
$tables_data["w_about"]=&$tdataw_about;
$field_labels["w_about"] = &$fieldLabelsw_about;
$fieldToolTips["w_about"] = &$fieldToolTipsw_about;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["w_about"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["w_about"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_w_about()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nid,  title,  content,  ndate,  category,  nstatus,  pic,  attach";
$proto0["m_strFrom"] = "FROM w_news";
$proto0["m_strWhere"] = "(category ='profil')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "category ='profil'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "w_news"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "='profil'";
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
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_w_about = createSqlQuery_w_about();
								$tdataw_about[".sqlquery"] = $queryData_w_about;

$tableEvents["w_about"] = new eventsBase;
$tdataw_about[".hasEvents"] = false;

$cipherer = new RunnerCipherer("w_about");

?>