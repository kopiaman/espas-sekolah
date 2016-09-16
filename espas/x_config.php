<?php
/**
 * CAMPSYS common functions for external scripts
 *
 * Author: Zon Hisham Z.Abidin <zonhisham@gmail.com>
 * 14/4/2013
 *
 */

require_once("include/dbcommon.php");
$branch = 1;


/**
 * Get image info on logo and name of campus
 * Return result as array
 *
 */
function namelogo() {
  $sqllogo = "select logo,campus_name from campus_setting";
  $resultlogo = mysql_query($sqllogo) or die(mysql_error());
  while($rowlogo = mysql_fetch_array($resultlogo)) {
    $info['logo']       =  $rowlogo['logo'];
    $info['campusname'] = $rowlogo['campus_name'];
  }
  return($info);
}

function logo(){
 $sqllogo = "select logo from campus_setting WHERE id=1";
  $resultlogo = mysql_query($sqllogo) or die(mysql_error());
  $rowlogo = mysql_fetch_array($resultlogo);
  
 $files_at_photo=json_decode($rowlogo['logo']);
    $full=$files_at_photo[0]->name;
    $thumbs=$files_at_photo[0]->thumbnail;

	return $thumbs;
	
}


function head(){
  $sqllogo = "select * from campus_setting WHERE id=1";
  $resultlogo = mysql_query($sqllogo) or die(mysql_error());
  $row_q01 = mysql_fetch_array($resultlogo);
  
	$text="<strong>".$row_q01['campus_name']."</strong><br />"
	 .$row_q01['address']." , ".$row_q01['city'].", ".$row_q01['state']."<br />FAX:"
	 .$row_q01['faxNo']." TEL:". $row_q01['telephone'];	
	
    return $text;
}

function dates($date){
$dateNormal=date("d-M-Y", strtotime($date));	
return $dateNormal;
};




?>
