<?php
include_once('../espas/include/dbcommon.php');
$conn= mysql_connect($host, $user, $pwd) or trigger_error(mysql_error); 
mysql_select_db($sys_dbname) or die(mysql_error()); 
include_once('inc_function.php');
?>
<head profile="http://www.w3.org/2005/10/profile">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="image/favicon.ico">
    <title><?php echo $school['campus_name'].','.$school['city'] ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
