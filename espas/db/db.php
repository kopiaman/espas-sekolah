<?php

//local
$hostname_main = "localhost";
$database_main = "srasys";
$username_main = "root";
$password_main = "";
$main = mysql_connect($hostname_main, $username_main, $password_main) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_main) or die(mysql_error());
/*
//server
$hostname_main = "localhost";
$database_main = "kopiaman_campsys";
$username_main = "kopiaman_user";
$password_main = "gengmalay86";
$main = mysql_connect($hostname_main, $username_main, $password_main) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_main) or die(mysql_error());
*/
?>