<?php session_start() ?>
<?php echo $_SESSION['pmonth']=$_GET['pmonth'] ?>  <?php echo $_SESSION['pyear']=$_GET['pyear'] ?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GENERATE PBSRA REPORT</title>
</head>

<body>

<p><img src="images/generator.png" width="445" height="257" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="161,129,419,173" href="pbsra_all_pot.php" target="_blank" />
    <area shape="rect" coords="161,180,406,229" href="pbsra_all_hor.php" target="_blank" />
  </map>
</p>
</body>
</html>