<?php
$dalTablebill_record = array();
$dalTablebill_record["bid"] = array("type"=>3,"varname"=>"bid");
$dalTablebill_record["itemid"] = array("type"=>3,"varname"=>"itemid");
$dalTablebill_record["amount"] = array("type"=>14,"varname"=>"amount");
$dalTablebill_record["bill_date"] = array("type"=>7,"varname"=>"bill_date");
$dalTablebill_record["bill_no"] = array("type"=>200,"varname"=>"bill_no");
$dalTablebill_record["darjah"] = array("type"=>3,"varname"=>"darjah");
$dalTablebill_record["sstatus"] = array("type"=>3,"varname"=>"sstatus");
	$dalTablebill_record["bid"]["key"]=true;
$dal_info["bill_record"]=&$dalTablebill_record;

?>