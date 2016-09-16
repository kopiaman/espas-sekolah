<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

define('CLIENT_LONG_PASSWORD', 1);
$link =mysql_connect('103.8.26.135', 'kreatiwi_user', 'gengmalay86', false, CLIENT_LONG_PASSWORD);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';

mysql_select_db('kreatiwi_test',$link) or die ("could not open db".mysql_error());


$sql_1= "INSERT INTO test1 (b) VALUES('hantam saja')";
mysql_query($sql_1,$link);
?>
</body>
</html>