<?php

//local
$hostname_main = "localhost";
$database_main = "srasys_iqra";
$username_main = "root";
$password_main = "";
$conn= mysql_connect($hostname_main, $username_main, $password_main) or trigger_error(mysql_error); 
mysql_select_db($database_main) or die(mysql_error());


/*
//server
$hostname_main = "localhost";
$database_main = "nad10001_nadwav2";
$username_main = "nad10001_user";
$password_main = "gengmalay86";
$conn = mysql_connect($hostname_main, $username_main, $password_main) or trigger_error(mysql_error); 
mysql_select_db($database_main) or die(mysql_error());
*/
?>
<?php


/**
 * trims text to a space then adds ellipses if desired
 */
function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {
        $input = strip_tags($input);
    }
  
    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }
  
    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
  
    //add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= '...';
    }
  
    return $trimmed_text;
}


?>