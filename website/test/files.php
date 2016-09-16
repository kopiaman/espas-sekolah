<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

$con = mysql_connect("localhost","root","");
if (!$con)  { die('Could not connect: ' . mysql_error()); }
mysql_select_db("test", $con);

$IMG = isset($_POST['files']) ? $_POST['files'] : array();
if (!empty($IMG)) {
    $uploads_dir = 'projects/';
    foreach ($IMG["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $IMG["tmp_name"][$key];
            $name = $IMG["name"][$key];
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
            $name_array=mysql_real_escape_string($name);
            $value_insert[] = "('" . $name_array . "')";
        }
    }
    $values_insert = implode(',', $value_insert);
    $query = "INSERT INTO laporan_sum (summary) VALUES" . $values_insert;
    $result = mysql_query($query);
}else{
 echo 'empty array';
}
?>

<body>
<form method="post" enctype="multipart/form-data" action="">
     <p>
       <input type="file" name="files[]" > <input type="file" name="files[]" >

       <input id="formbutton" type= "submit" value="Upload!">
     </p>
</form>
</body>
</html>