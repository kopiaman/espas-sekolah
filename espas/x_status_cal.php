<?php


$sqlSta = "select * from setting where class='24'";
$resultSta = mysql_query($sqlSta) or die(mysql_error());
while($sta = mysql_fetch_array($resultSta))
{
	
if($total_png_gpa>=$sta['Value']){ echo $status=$sta['Field_Name']; return; }
else
{
	echo $status = "FAILED";
	return;
	}


}
?>