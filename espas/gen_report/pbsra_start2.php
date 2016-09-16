<?php session_start() ?>
<?php echo $_SESSION['pmonth']=$_GET['pmonth'] ?>  <?php echo $_SESSION['pyear']=$_GET['pyear'] ?>  
<!DOCTYPE html>
<html>
<head>
   <!-- HTML meta refresh URL redirection -->
   <meta http-equiv="refresh" 
   content="0; url=pbsra_all_compile.php?pmonth=<?php echo $_GET['pmonth'] ?>&pyear=<?php echo $_GET['pyear'] ?>  ">
</head>
<body>

</body>
</html>