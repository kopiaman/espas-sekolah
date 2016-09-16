<?php
 $sql_set= "SELECT logo,	acronyim,	campus_name,	address	,city,	postcode,	state,	faxNo,	telephone AS tel,	email	,daerah,	gb_name,	gb_tel,
	gred_sek,	sek_mix,	sek_kongsi,	sek_tukar	,sek_sesi,	sek_kod,	url	,riten_no	,sek_building,	sek_owner,	sek_jenis FROM campus_setting WHERE id=1";
$query_set=mysql_query($sql_set,$conn);
$school=mysql_fetch_array($query_set);

function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {$input = strip_tags($input);}
	//no need to trim, already shorter than trim length
    if (strlen($input) <= $length) { return $input; }
	 //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
	 //add ellipses (...)
    if ($ellipses) {$trimmed_text .= '..';}
    return $trimmed_text;}
	
	//create modal 
	 function modalbox($id,$title,$body){
	 echo '<div class="modal fade" id="'.$id.'" role="dialog" tabindex="2" >
    <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header">';
	echo '<button type="button" class="close" data-dismiss="modal"><span>Close</span></button>
              <h4 class="modal-title">'.$title.'</h4></div>	
  		                <div class="modal-body"><p>'.$body.'</p></div>
         <div class="modal-footer">    </div>
        </div>
    </div>  
</div>';				 
 };
 
 function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function thumb($files){
$dcode=json_decode($files);
$thumbs=$dcode[0]->thumbnail;
return $thumbs;
};

function full($files){
$dcode=json_decode($files);
$full=$dcode[0]->name;
return $full;
	
};


function files($files){
$dcode=json_decode($files);
$full=$dcode[0]->name;
return $full;
	
};

/*
HOW TO DISPLAY ALL DATA FROM JSON

$result = json_decode($JSONdata);
foreach($result as $key => $value) {
    if($value) {

       echo '<br>'.$value->name;
	   echo '<br>'.$value->usrName;
    }
}
*/


function dates($date){
$dateNormal=date("d M Y", strtotime($date));	
return $dateNormal;
};

 
 ?>