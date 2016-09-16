<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)  { die('Could not connect: ' . mysql_error()); }
mysql_select_db("kamera", $con);

	
	$offer="GIFT,NEGO";
	$query = "SELECT sellid, offer FROM to_sell WHERE offer IN ('$offer')"; $result = mysql_query($query);
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
        {?>
            
                <input type="checkbox" name="idlaporan[]" value="<?php echo $row['offer'] ?>" /><?php echo "ID : {$row['sellid']}" ?><br />
                 

       <?php   
        } 

?>

       

</body>
</html>