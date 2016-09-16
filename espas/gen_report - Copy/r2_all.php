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
<?php include('r2_p1.php') ?>
<?php include('r2_p2.php') ?>
<div class="pagebreak"></div>
<?php include('r2_p3.php') ?>
</body>
</html>