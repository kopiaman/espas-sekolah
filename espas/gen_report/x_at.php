<?php
require_once("../include/dbcommon.php");


echo 'BULAN: '.$bulan=7;
echo "<p><br>";
 //jumlah kedatangan
 $sql_sum_at= "SELECT SUM( 1A + 1B + 1J + 1H + 1D +2A + 2B + 2J + 2H + 2D +3A + 3B + 3J + 3H + 3D+ 4A + 4B + 4J + 4H + 4D+5A + 5B + 5J + 5H + 5D +6A + 6B + 6J + 6H + 6D  ) AS sum_attend
FROM  `attendance_daily`
WHERE month(adate)=$bulan";
$query_sum_at=mysql_query($sql_sum_at,$conn);
$row_sum_at=mysql_fetch_assoc($query_sum_at);

echo 'Jumlah datang '.$sum_attend=$row_sum_at['sum_attend'];
echo "<p><br>";

//jumlah hari persekolahan
$sql_sum_school= " SELECT COUNT( id ) AS no_schoolday 
FROM  `attendance_daily` 
WHERE month(adate)=$bulan";
$query_sum_school=mysql_query($sql_sum_school,$conn);
$row_sum_school=mysql_fetch_assoc($query_sum_school);

echo 'Bil sekolah '.$no_schoolday=$row_sum_school['no_schoolday'];
echo "<p><br>";
echo 'Purata Sekolah '.$purata=$sum_attend/$no_schoolday;

//peratus kedatangan

?>
