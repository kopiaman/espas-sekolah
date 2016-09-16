<!--  CALCULATION OF STUDENTS AND ATTENDANCE --!>
<?php
$bulan=$_SESSION['pmonth'];
$year=$_SESSION['pyear'];

//no of student by month and this year
$sql_murid_month= "SELECT no_student FROM create_pbsra WHERE pmonth=$bulan AND pyear=$year";
$query_murid_month=mysql_query($sql_murid_month,$conn);
$row_murid_month=mysql_fetch_assoc($query_murid_month);
$murid_bulanini=$row_murid_month['no_student'];

$jumlahsemua=$murid_bulanini;

//purata murid tahunan
$sql_murid_avg= "SELECT ROUND(SUM(no_student)/COUNT(id)) AS avg , ROUND(SUM(no_female)/COUNT(id)) AS avg_female,ROUND(SUM(no_male)/COUNT(id)) AS avg_male  FROM create_pbsra WHERE pyear=$year";
$query_murid_avg=mysql_query($sql_murid_avg,$conn);
$row_murid_avg=mysql_fetch_assoc($query_murid_avg);
$murid_avg=$row_murid_avg['avg'];
$murid_avg_male=$row_murid_avg['avg_male'];
$murid_avg_female=$row_murid_avg['avg_female'];

//no of student in & out
$sql_murid_bil= "
SELECT student_in AS student_in_month,  student_out AS student_out_month FROM create_pbsra WHERE pmonth=$bulan AND pyear=$year";
$query_murid_bil=mysql_query($sql_murid_bil,$conn);
$row_murid_bil=mysql_fetch_assoc($query_murid_bil);

$masuk=$row_murid_bil['student_in_month'];
$keluar=$row_murid_bil['student_out_month'];


//bilangan murid masuk
$sql_murid_in= "SELECT
StudentID,
MONTH(DateJoin) AS joinmonth,
YEAR(DateJoin) AS joinyear,
MONTH(Dateout) AS endmonth,
YEAR(Dateout) AS endyear
FROM student_info
WHERE Status='Aktif'
";
$query_murid_in=mysql_query($sql_murid_in,$conn);
$row_murid_in=mysql_fetch_assoc($query_murid_in);

//bilangan murid keluar
$sql_murid_out= "SELECT
StudentID,
MONTH(DateJoin) AS joinmonth,
YEAR(DateJoin) AS joinyear,
MONTH(Dateout) AS endmonth,
YEAR(Dateout) AS endyear
FROM student_info
WHERE Status='Aktif'
";
$query_murid_out=mysql_query($sql_murid_out,$conn);
$row_murid_out=mysql_fetch_assoc($query_murid_out);

include_once('inc_pbsra0_att2.php') ;
	  
?>
<!-- calculate bilangan pelajar lelaki , perempuan dan semua--!>
<?php
$sql_sum_gen= "SELECT
coalesce(sum(Gender='L' AND Status='Aktif'), 0) AS no_men,
coalesce(sum(Gender='P' AND Status='Aktif'), 0) AS no_girl,
coalesce(sum(Status='Aktif'), 0) AS no_all
FROM student_info ";
//FROM student_info WHERE MONTH(DateJoin) < $bulan AND YEAR(DateJoin) = $year ";
$query_sum_gen=mysql_query($sql_sum_gen,$conn);
$row_sum_gen=mysql_fetch_assoc($query_sum_gen);
?>


