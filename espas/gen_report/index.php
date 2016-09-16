<?php session_start(); ?>
<?php  $_SESSION['pmonth']=$_GET['pmonth']; ?> <?php  $_SESSION['pyear']=$_GET['pyear']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PBSRA</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php require_once('../include/dbcommon.php'); ?>
<?php include('inc_pbsra0.php'); include('inc_pbsra3.php') ;?>
<?php include('inc_pbsra1.php'); ?>
</head>
<body>
<?php if($reportType=='SRI'){
include('r2_p1.php') ;
include('r2_p2.php') ;
echo "<div class='pagebreak'></div>";
include('r2_p3.php') ; 
}else if($reportType=='SRA'){
	
	include('r2_p1.php') ;
	include('r2_p1.php') ;
	};?>
    <area shape="rect" coords="161,129,419,173" href="pbsra_all_pot.php" target="_blank" />
    <area shape="rect" coords="161,180,406,229" href="pbsra_all_hor.php" target="_blank" />

</body>
</html>