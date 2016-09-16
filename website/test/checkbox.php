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
mysql_select_db("test", $con);

if(isset($_POST['idlaporan'])){
	
	foreach ($_POST['idlaporan'] as $idlaporan) {
		//update status	
		$sql="UPDATE laporan set status='3' where idlaporan='$idlaporan'";    
		
		if (!mysql_query($sql,$con)) {
		   die('Error: ' . mysql_error());
		}
		echo "1 record added<br/>";    
	}

}else{};
?>
<?php
       

        $query = "SELECT * FROM laporan ";
        $result = mysql_query($query);

        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
        {?>
            <form action="" method="post" id="formtest">
                <input type="checkbox" name="idlaporan[]" value="<?php echo $row['idlaporan'] ?>" /><?php echo "ID : {$row['idlaporan']}" ?><br />
                <?php echo  "Nomor Polisi : {$row['platkenderaan']} <br>" .
                            "Status : {$row['status']} <br>" . 
                            " <br><br>"; ?>

        <?php   
        } 
        ?>  
                <input type="submit">
            </form>
</body>
</html>