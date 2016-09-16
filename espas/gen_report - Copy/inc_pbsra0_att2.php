<!--  COMMON FORMULA--!>
<?php
//bilangan hari; belajar bulanan--(A)= $no_schoolday
$sql_scday= "SELECT teach_day FROM attend_creator WHERE amonth=$bulan AND ayear=$year ";
$query_scday=mysql_query($sql_scday,$conn);
$row_scday=mysql_fetch_assoc($query_scday);
$teach_day=$row_scday['teach_day'];

$sql_absent="SELECT
coalesce(sum(student_attendance.`1`=1), 0)  +
coalesce(sum(student_attendance.`2`=1), 0)  +
coalesce(sum(student_attendance.`3`=1), 0)  +
coalesce(sum(student_attendance.`4`=1), 0)  +
coalesce(sum(student_attendance.`5`=1), 0)  +
coalesce(sum(student_attendance.`6`=1), 0)  +
coalesce(sum(student_attendance.`7`=1), 0)  +
coalesce(sum(student_attendance.`8`=1), 0)  +
coalesce(sum(student_attendance.`9`=1), 0)  +
coalesce(sum(student_attendance.`10`=1), 0) +
coalesce(sum(student_attendance.`11`=1), 0) +
coalesce(sum(student_attendance.`12`=1), 0) +
coalesce(sum(student_attendance.`13`=1), 0) +
coalesce(sum(student_attendance.`14`=1), 0) +
coalesce(sum(student_attendance.`15`=1), 0) +
coalesce(sum(student_attendance.`16`=1), 0) +
coalesce(sum(student_attendance.`17`=1), 0) +
coalesce(sum(student_attendance.`18`=1), 0) +
coalesce(sum(student_attendance.`19`=1), 0) +
coalesce(sum(student_attendance.`20`=1), 0) +
coalesce(sum(student_attendance.`21`=1), 0) +
coalesce(sum(student_attendance.`22`=1), 0) +
coalesce(sum(student_attendance.`23`=1), 0) +
coalesce(sum(student_attendance.`24`=1), 0) +
coalesce(sum(student_attendance.`25`=1), 0) +
coalesce(sum(student_attendance.`26`=1), 0) +
coalesce(sum(student_attendance.`27`=1), 0) +
coalesce(sum(student_attendance.`28`=1), 0) +
coalesce(sum(student_attendance.`29`=1), 0) +
coalesce(sum(student_attendance.`30`=1), 0) +
coalesce(sum(student_attendance.`31`=1), 0) AS absent
FROM student_attendance
INNER JOIN student_info ON student_attendance.StudentID = student_info.StudentID ";
?>
<?php
//data from create_pbsra of total student

$sql_riten= "SELECT no_student,student_in,male_in,female_in,student_out,male_out,female_out,no_male,no_female FROM create_pbsra WHERE pmonth=$bulan AND pyear=$year";
$query_riten=mysql_query($sql_riten,$conn);
$row_riten=mysql_fetch_assoc($query_riten);

$no_female=$row_riten['no_female'];
$no_male=$row_riten['no_male'];
?>
<!--  CALCULATION OF ATTENDANCE SESI PAGI--!>
<?php

//no of student sesi PAGI by month--(B)pg
$sql_murid_month_pg= "SELECT COUNT(StudentID) AS no_student FROM student_info WHERE Status='Aktif' AND sesi='Pagi'";
$query_murid_month_pg=mysql_query($sql_murid_month_pg,$conn);
$row_murid_month_pg=mysql_fetch_assoc($query_murid_month_pg);
$murid_bulanini_pg=$row_murid_month_pg['no_student'];

//Jumlah Kedatangan Ideal Pagi (C)pg=(A) x (B)pg
$sum_at_pg=$teach_day*$murid_bulanini_pg;

//Jumlah tak Hadir Pagi --(D)pg
$sql_abs_pg= "$sql_absent WHERE student_info.sesi='Pagi' 
AND student_attendance.amonth=$bulan AND student_attendance.ayear=$year";
$query_abs_pg=mysql_query($sql_abs_pg,$conn);
$row_abs_pg=mysql_fetch_assoc($query_abs_pg);
$abs_pg=$row_abs_pg['absent'];

//peratus kedatangan tak hadir pagi --(E)pg = (D)/(C) X 100
$abs_pg_percent=$abs_pg/$sum_at_pg*100;
//peratus kedatangan pago = 100-(E) --dibundar perpuluhan kedua
$at_pg_percent=ROUND(100-$abs_pg_percent,2);
  
?>
<!--  CALCULATION OF ATTENDANCE SESI PETANG--!>
<?php

//bilangan hari; belajar bulanan--(A)= $no_schoolday

//no of student sesi PAGI by month--(B)ptg
$sql_murid_month_ptg= "SELECT COUNT(StudentID) AS no_student FROM student_info WHERE Status='Aktif' AND sesi='Petang'";
$query_murid_month_ptg=mysql_query($sql_murid_month_ptg,$conn);
$row_murid_month_ptg=mysql_fetch_assoc($query_murid_month_ptg);
$murid_bulanini_ptg=$row_murid_month_ptg['no_student'];

if($murid_bulanini_ptg>1){
//Jumlah Kedatangan Ideal ptg (C)ptg=(A) x (B)ptg
$sum_at_ptg=$teach_day*$murid_bulanini_ptg;

//Jumlah tak Hadir Pagi --(D)ptg
$sql_abs_ptg= "$sql_absent WHERE student_info.sesi='Petang' 
AND student_attendance.amonth=$bulan AND student_attendance.ayear=$year";
$query_abs_ptg=mysql_query($sql_abs_ptg,$conn);
$row_abs_ptg=mysql_fetch_assoc($query_abs_ptg);
$abs_ptg=$row_abs_ptg['absent'];

//peratus kedatangan tak hadir pagi --(E)ptg = (D)/(C) X 100
$abs_ptg_percent=$abs_ptg/$sum_at_ptg*100;
//peratus kedatangan pago = 100-(E) --dibundar perpuluhan kedua
$at_ptg_percent=ROUND(100-$abs_ptg_percent,2);
}

?>
<?php
//purata kedatangan kedua dua sesi
if($at_ptg_percent){
$avg_att=ROUND(($at_pg_percent+$at_ptg_percent)/2,2);
}else{$avg_att=ROUND($at_pg_percent,2);}
?>
<?php
//jumlah ketidakhadiran kesemua
$sql_abs= "$sql_absent WHERE student_attendance.amonth=$bulan AND student_attendance.ayear=$year";
$query_abs=mysql_query($sql_abs,$conn);
$row_abs=mysql_fetch_assoc($query_abs);
$sum_abs=$row_abs['absent'];

//jumlah murid datang ideal ( jumlah murid semua X hari persekolahan)
$sum_att_ideal=$jumlahsemua*$teach_day;
//jumlah kedatangan sebulan ( JUMLAH SEMUA DTG- JUMLAH TAK DATANG)
$month_attend=$sum_att_ideal-$sum_abs;

//purata kehadiran murid sebulan
$avg_at=ROUND($month_attend/$teach_day);
//peratus kehadiran murid sebulan
//$peratus_datang=ROUND(($avg_at/$jumlahsemua*100),2);
$peratus_datang=$avg_att;

?>
<?php
//jumlah ketidakhadiran perempuan
$sql_abs_female= "$sql_absent WHERE student_attendance.amonth=$bulan AND student_attendance.ayear=$year AND student_info.Gender='P'";
$query_abs_female=mysql_query($sql_abs_female,$conn);
$row_abs_female=mysql_fetch_assoc($query_abs_female);
$sum_abs_female=$row_abs_female['absent'];

//jumlah murid perempuan datang ideal  ( jumlah murid perempuan X hari persekolahan)
$sum_att_ideal_female=$no_female*$teach_day;
//jumlah kedatangan sebulan perempuan( JUMLAH SEMUA DTG- JUMLAH TAK DATANG)
$month_attend_female=$sum_att_ideal_female-$sum_abs_female;
//purata kehadiran murid sebulan perempuan
$avg_at_female=ROUND($month_attend_female/$teach_day);
//peratus tak  hadir  perempuan
$abs_percent_female=$sum_abs_female/$sum_att_ideal_female*100;
//peratus kedatangan perempuan
$peratus_datang_female=ROUND(100-$abs_percent_female,2);
?>
<?php
//jumlah ketidakhadiran lelaki
$sql_abs_male= "$sql_absent WHERE student_attendance.amonth=$bulan AND student_attendance.ayear=$year AND student_info.Gender='L'";
$query_abs_male=mysql_query($sql_abs_male,$conn);
$row_abs_male=mysql_fetch_assoc($query_abs_male);
$sum_abs_male=$row_abs_male['absent'];

//jumlah murid datang ideal ( jumlah murid lelaki X hari persekolahan)
$sum_att_ideal_men=$no_male*$teach_day;
//jumlah kedatangan sebulan ( JUMLAH SEMUA DTG- JUMLAH TAK DATANG)
$month_attend_male=$sum_att_ideal_men-$sum_abs_male;
//purata kehadiran murid sebulan
$avg_at_male=ROUND($month_attend_male/$teach_day);
//peratus tak  hadir  lelaki
$abs_percent_male=$sum_abs_male/$sum_att_ideal_men*100;
//peratus kedatangan lelaki
$peratus_datang_male=ROUND(100-$abs_percent_male,2);

?>





