<?php
$gpa = $rows['total']; 
$grade='N/A';
$point=0;

 $sqlCal = "select * from grade";
$resultCal = mysql_query($sqlCal) or die(mysql_error());
while($cal = mysql_fetch_array($resultCal))
{
if($gpa>=$cal['Mark_Initial'] && $gpa <=$cal['Mark_End']){ $grade=$cal['Grade']; $point=$cal['Point']; }

}
?>