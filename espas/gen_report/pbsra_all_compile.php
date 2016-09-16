<?php session_start() ?>
<?php echo $_SESSION['pmonth']=$_GET['pmonth'] ?>  <?php echo $_SESSION['pyear']=$_GET['pyear'] ?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PBSRA</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php require_once('../include/dbcommon.php'); ?>
</head>
<style>
@media print
  {
.tablesmall th { background-color:#CCC; font-size:8px; border:1px solid black;}
.tablesmall td {font-size:8px;border:1px solid black; font-weight:lighter;}

p{font-size:8px;}
 }
</style>
<body>
<?php include('r_pbsra1.php') ?>
<div class="pagebreak"></div>
<?php include('r_pbsra2.php') ?>
<div class="pagebreak"></div>
<?php include('r_pbsra3.php') ?>
<div class="pagebreak"></div>
<?php include('r_pbsra4_ganti.php') ?>
<div class="pagebreak"></div>
<?php include('r_pbsra5_2_male.php') ?>
<div class="pagebreak"></div>
<?php include('r_pbsra5_2_female.php') ?>
<div class="pagebreak"></div>
<?php include('r_pbsra6_rakyat.php') ?>
</body>
</html>