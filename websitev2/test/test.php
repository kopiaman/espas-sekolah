<?php 

function query($name,$query){

  // $sql_name='sql'.$name;
   //$query_name='query'.$name;
   //$row_name='row'.$name;
   
echo "`$sql`_$".$name."='".$query."'"; echo '<br>';
//echo $query_name='mysql_query('.$sql_name.',$conn)';  echo '<br>';
//echo $name='mysql_fetch_array('.$query_name.')';  echo '<br>';

//$query=$sql_name.$query_name.$row_name;
// echo $query;
}
 ?>
<body>
<?php echo query('test','SELECT logo,	acronyim FROM campus_setting WHERE id=1');
 ?><br>
 
 <?php echo $test['logo'] ?>
</body>