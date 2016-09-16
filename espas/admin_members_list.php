<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/admin_members_variables.php");

$gsqlHead="select `username` ";
$gsqlFrom="from `user`";
$gsqlWhereExpr="";
$gsqlTail="";
// $gstrSQL = "SELECT id,   username,   pass  FROM `user` ";
$gstrSQL = $gQuery->gSQLWhere("");

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(!IsAdmin())
{
	echo "<p>"."Anda tidak mempunyai kebenaran untuk akses jadual ini"." <a href=\"login.php\">"."Kembali ke halaman log-masuk"."</a></p>";
	exit();
}

$layout = new TLayout("ug_members2","Purific1Green1","MobileGreen1");
$layout->blocks["center"] = array();
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "1";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"ugmemgrid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch1","block"=>"searchform_block","substyle"=>2);


$layout->containers["left"][] = array("name"=>"vsearch2","block"=>"searchform_block","substyle"=>1);


$layout->skins["left"] = "1";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();


$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);





$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["ugcontrols"] = array();

$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons","block"=>"savebuttons_block","substyle"=>1);


$layout->containers["ugcontrols"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["ugcontrols"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["ugcontrols"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["ugcontrols"] = "undermenu";
$layout->blocks["top"][] = "ugcontrols";$page_layouts["admin_members_list"] = $layout;


include('include/xtempl.php');
include("classes/searchclause.php");

include("classes/searchcontrol.php");
include("classes/panelsearchcontrol.php");

include("classes/searchpanel.php");
include("classes/searchpanelsimple.php");	

include('classes/runnerpage.php');
include('classes/listpage.php');
include('classes/listpage_simple.php');
include('classes/memberspage.php');
$xt = new Xtempl();






$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = MEMBERS_PAGE;
$options['xt'] = &$xt;



$pageObject = ListPage::createListPage($strTableName, $options);

 // add button events if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();



	

?>