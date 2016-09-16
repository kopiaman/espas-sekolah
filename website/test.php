<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php echo $matric='ED 12A101 0225 MY';
echo '<br>';
echo substr($matric,9,4).'<br>';	
echo substr($matric,10,4).'<br>';	
echo substr($matric,11,4).'<br>';	

echo '<br>';
echo $test=123456;
echo '<br>';
echo $data_status=sprintf("%06s",$test).'<br>';	
echo $extract=substr($data_status,0,2).'<br>';	

?>
</body>
</html>