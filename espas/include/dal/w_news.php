<?php
$dalTablew_news = array();
$dalTablew_news["nid"] = array("type"=>3,"varname"=>"nid");
$dalTablew_news["title"] = array("type"=>200,"varname"=>"title");
$dalTablew_news["content"] = array("type"=>201,"varname"=>"content");
$dalTablew_news["ndate"] = array("type"=>7,"varname"=>"ndate");
$dalTablew_news["category"] = array("type"=>200,"varname"=>"category");
$dalTablew_news["nstatus"] = array("type"=>200,"varname"=>"nstatus");
$dalTablew_news["pic"] = array("type"=>201,"varname"=>"pic");
$dalTablew_news["attach"] = array("type"=>201,"varname"=>"attach");
	$dalTablew_news["nid"]["key"]=true;
$dal_info["w_news"]=&$dalTablew_news;

?>