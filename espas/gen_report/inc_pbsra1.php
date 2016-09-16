<?php
//jumlah L & OP ikut kelas
$sql_tahun1_pagi="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=1)
GROUP BY `group`.`group`
";
$query_tahun1_pagi=mysql_query($sql_tahun1_pagi,$conn);
$row_tahun1_pagi=mysql_fetch_assoc($query_tahun1_pagi);


//kira jumlah L & P 
$sql_tahun1_Pagisum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=1)
";
$query_tahun1_Pagisum=mysql_query($sql_tahun1_Pagisum,$conn);
$row_tahun1_Pagisum=mysql_fetch_assoc($query_tahun1_Pagisum);

//jumlah kelas sesi
$sql_tahun1_Pagisum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun =1)
";
$query_tahun1_Pagisum_sesi=mysql_query($sql_tahun1_Pagisum_sesi,$conn);
$row_tahun1_Pagisum_sesi=mysql_fetch_assoc($query_tahun1_Pagisum_sesi);

?>
<?php
//jumlah L & P 
$sql_tahun1_Petangsum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=1)
";
$query_tahun1_Petangsum=mysql_query($sql_tahun1_Petangsum,$conn);
$row_tahun1_Petangsum=mysql_fetch_assoc($query_tahun1_Petangsum);

//jumlah L & Perempuan mengikut kumpulan kelas
$sql_tahun1_Petang="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=1)
";
$query_tahun1_Petang=mysql_query($sql_tahun1_Petang,$conn);
$row_tahun1_Petang=mysql_fetch_assoc($query_tahun1_Petang);

//jumlah kelas sesi
$sql_tahun1_Petangsum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun =1)
";
$query_tahun1_Petangsum_sesi=mysql_query($sql_tahun1_Petangsum_sesi,$conn);
$row_tahun1_Petangsum_sesi=mysql_fetch_assoc($query_tahun1_Petangsum_sesi);
?>
<!--start for tahun2 -->
<?php
//jumlah L & OP ikut kelas
$sql_tahun2_pagi="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=2)
GROUP BY `group`.`group`
";
$query_tahun2_pagi=mysql_query($sql_tahun2_pagi,$conn);
$row_tahun2_pagi=mysql_fetch_assoc($query_tahun2_pagi);


//kira jumlah L & P 
$sql_tahun2_Pagisum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=2)
";
$query_tahun2_Pagisum=mysql_query($sql_tahun2_Pagisum,$conn);
$row_tahun2_Pagisum=mysql_fetch_assoc($query_tahun2_Pagisum);

//jumlah kelas sesi
$sql_tahun2_Pagisum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun =2)
";
$query_tahun2_Pagisum_sesi=mysql_query($sql_tahun2_Pagisum_sesi,$conn);
$row_tahun2_Pagisum_sesi=mysql_fetch_assoc($query_tahun2_Pagisum_sesi);

?>
<?php
//jumlah L & P 
$sql_tahun2_Petangsum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=2)
";
$query_tahun2_Petangsum=mysql_query($sql_tahun2_Petangsum,$conn);
$row_tahun2_Petangsum=mysql_fetch_assoc($query_tahun2_Petangsum);

//jumlah L & Perempuan mengikut kumpulan kelas
$sql_tahun2_Petang="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=2)
";
$query_tahun2_Petang=mysql_query($sql_tahun2_Petang,$conn);
$row_tahun2_Petang=mysql_fetch_assoc($query_tahun2_Petang);

//jumlah kelas sesi
$sql_tahun2_Petangsum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun =2)
";
$query_tahun2_Petangsum_sesi=mysql_query($sql_tahun2_Petangsum_sesi,$conn);
$row_tahun2_Petangsum_sesi=mysql_fetch_assoc($query_tahun2_Petangsum_sesi);
?>
<!--start for tahun3 -->
<?php
//jumlah L & OP ikut kelas
$sql_tahun3_pagi="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=3)
GROUP BY `group`.`group`
";
$query_tahun3_pagi=mysql_query($sql_tahun3_pagi,$conn);
$row_tahun3_pagi=mysql_fetch_assoc($query_tahun3_pagi);


//kira jumlah L & P 
$sql_tahun3_Pagisum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=3)
";
$query_tahun3_Pagisum=mysql_query($sql_tahun3_Pagisum,$conn);
$row_tahun3_Pagisum=mysql_fetch_assoc($query_tahun3_Pagisum);

//jumlah kelas sesi
$sql_tahun3_Pagisum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun =3)
";
$query_tahun3_Pagisum_sesi=mysql_query($sql_tahun3_Pagisum_sesi,$conn);
$row_tahun3_Pagisum_sesi=mysql_fetch_assoc($query_tahun3_Pagisum_sesi);

?>
<?php
//jumlah L & P 
$sql_tahun3_Petangsum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=3)
";
$query_tahun3_Petangsum=mysql_query($sql_tahun3_Petangsum,$conn);
$row_tahun3_Petangsum=mysql_fetch_assoc($query_tahun3_Petangsum);

//jumlah L & Perempuan mengikut kumpulan kelas
$sql_tahun3_Petang="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=3)
";
$query_tahun3_Petang=mysql_query($sql_tahun3_Petang,$conn);
$row_tahun3_Petang=mysql_fetch_assoc($query_tahun3_Petang);

//jumlah kelas sesi
$sql_tahun3_Petangsum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun =3)
";
$query_tahun3_Petangsum_sesi=mysql_query($sql_tahun3_Petangsum_sesi,$conn);
$row_tahun3_Petangsum_sesi=mysql_fetch_assoc($query_tahun3_Petangsum_sesi);
?>
<!--start for tahun4 -->
<?php
//jumlah L & OP ikut kelas
$sql_tahun4_pagi="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=4)
GROUP BY `group`.`group`
";
$query_tahun4_pagi=mysql_query($sql_tahun4_pagi,$conn);
$row_tahun4_pagi=mysql_fetch_assoc($query_tahun4_pagi);


//kira jumlah L & P 
$sql_tahun4_Pagisum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=4)
";
$query_tahun4_Pagisum=mysql_query($sql_tahun4_Pagisum,$conn);
$row_tahun4_Pagisum=mysql_fetch_assoc($query_tahun4_Pagisum);

//jumlah kelas sesi
$sql_tahun4_Pagisum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun =4)
";
$query_tahun4_Pagisum_sesi=mysql_query($sql_tahun4_Pagisum_sesi,$conn);
$row_tahun4_Pagisum_sesi=mysql_fetch_assoc($query_tahun4_Pagisum_sesi);

?>
<?php
//jumlah L & P 
$sql_tahun4_Petangsum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=4)
";
$query_tahun4_Petangsum=mysql_query($sql_tahun4_Petangsum,$conn);
$row_tahun4_Petangsum=mysql_fetch_assoc($query_tahun4_Petangsum);

//jumlah L & Perempuan mengikut kumpulan kelas
$sql_tahun4_Petang="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=4)
";
$query_tahun4_Petang=mysql_query($sql_tahun4_Petang,$conn);
$row_tahun4_Petang=mysql_fetch_assoc($query_tahun4_Petang);

//jumlah kelas sesi
$sql_tahun4_Petangsum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun =4)
";
$query_tahun4_Petangsum_sesi=mysql_query($sql_tahun4_Petangsum_sesi,$conn);
$row_tahun4_Petangsum_sesi=mysql_fetch_assoc($query_tahun4_Petangsum_sesi);
?>
<!--start for tahun5-->
<?php
//jumlah L & OP ikut kelas
$sql_tahun5_pagi="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=5)
GROUP BY `group`.`group`
";
$query_tahun5_pagi=mysql_query($sql_tahun5_pagi,$conn);
$row_tahun5_pagi=mysql_fetch_assoc($query_tahun5_pagi);


//kira jumlah L & P 
$sql_tahun5_Pagisum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=5)
";
$query_tahun5_Pagisum=mysql_query($sql_tahun5_Pagisum,$conn);
$row_tahun5_Pagisum=mysql_fetch_assoc($query_tahun5_Pagisum);

//jumlah kelas sesi
$sql_tahun5_Pagisum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun =5)
";
$query_tahun5_Pagisum_sesi=mysql_query($sql_tahun5_Pagisum_sesi,$conn);
$row_tahun5_Pagisum_sesi=mysql_fetch_assoc($query_tahun5_Pagisum_sesi);

?>
<?php
//jumlah L & P 
$sql_tahun5_Petangsum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=5)
";
$query_tahun5_Petangsum=mysql_query($sql_tahun5_Petangsum,$conn);
$row_tahun5_Petangsum=mysql_fetch_assoc($query_tahun5_Petangsum);

//jumlah L & Perempuan mengikut kumpulan kelas
$sql_tahun5_Petang="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=5)
";
$query_tahun5_Petang=mysql_query($sql_tahun5_Petang,$conn);
$row_tahun5_Petang=mysql_fetch_assoc($query_tahun5_Petang);

//jumlah kelas sesi
$sql_tahun5_Petangsum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun =5)
";
$query_tahun5_Petangsum_sesi=mysql_query($sql_tahun5_Petangsum_sesi,$conn);
$row_tahun5_Petangsum_sesi=mysql_fetch_assoc($query_tahun5_Petangsum_sesi);
?>
<!--start for tahun6-->
<?php
//jumlah L & OP ikut kelas
$sql_tahun6_pagi="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=6)
";
$query_tahun6_pagi=mysql_query($sql_tahun6_pagi,$conn);
$row_tahun6_pagi=mysql_fetch_assoc($query_tahun6_pagi);


//kira jumlah L & P 
$sql_tahun6_Pagisum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun=6)
";
$query_tahun6_Pagisum=mysql_query($sql_tahun6_Pagisum,$conn);
$row_tahun6_Pagisum=mysql_fetch_assoc($query_tahun6_Pagisum);

//jumlah kelas sesi
$sql_tahun6_Pagisum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Pagi') AND (student_info.Status ='Aktif') AND (student_info.tahun =6)
";
$query_tahun6_Pagisum_sesi=mysql_query($sql_tahun6_Pagisum_sesi,$conn);
$row_tahun6_Pagisum_sesi=mysql_fetch_assoc($query_tahun6_Pagisum_sesi);

?>
<?php
//jumlah L & P 
$sql_tahun6_Petangsum="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=6)
";
$query_tahun6_Petangsum=mysql_query($sql_tahun6_Petangsum,$conn);
$row_tahun6_Petangsum=mysql_fetch_assoc($query_tahun6_Petangsum);

//jumlah L & Perempuan mengikut kumpulan kelas
$sql_tahun6_Petang="SELECT
coalesce(sum(student_info.Gender='L'), 0) AS bil_laki,
coalesce(sum(student_info.Gender='P'), 0) AS bil_pom,
COUNT(student_info.Gender) AS bil_murid,
student_info.`Class`,
`group`.`group` AS nama_kelas,
student_info.sesi
FROM student_info
INNER JOIN `group` ON student_info.`Class` = `group`.id
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun=6)
";
$query_tahun6_Petang=mysql_query($sql_tahun6_Petang,$conn);
$row_tahun6_Petang=mysql_fetch_assoc($query_tahun6_Petang);

//jumlah kelas sesi
$sql_tahun6_Petangsum_sesi="SELECT
COUNT(DISTINCT student_info.`Class`) AS sum_kelas
FROM student_info
WHERE (student_info.sesi ='Petang') AND (student_info.Status ='Aktif') AND (student_info.tahun =6)
";
$query_tahun6_Petangsum_sesi=mysql_query($sql_tahun6_Petangsum_sesi,$conn);
$row_tahun6_Petangsum_sesi=mysql_fetch_assoc($query_tahun6_Petangsum_sesi);
?>
<!-- calculate total student according sesi --!>
<?php
$sql_sum= "SELECT
coalesce(sum(student_info.Gender='L' AND sesi='Pagi'), 0) AS bil_laki_pg,
coalesce(sum(student_info.Gender='P' AND sesi='Pagi'), 0) AS bil_pom_pg,
coalesce(sum(sesi='Pagi'), 0) AS jum_pagi,
coalesce(sum(student_info.Gender='L' AND sesi='Petang'), 0) AS bil_laki_ptg,
coalesce(sum(student_info.Gender='P' AND sesi='Petang'), 0) AS bil_pom_ptg,
coalesce(sum(sesi='Petang'), 0) AS jum_ptg,
coalesce(sum(student_info.Gender='L'), 0) AS jum_laki,
coalesce(sum(student_info.Gender='P'), 0) AS jum_pom,
COUNT(StudentID) AS total_pelajar
FROM student_info
WHERE student_info.Status='Aktif' ";
$query_sum=mysql_query($sql_sum,$conn);
$row_sum=mysql_fetch_assoc($query_sum);
?>
<!-- part total --!>
<?php
$sql_sum_kelas_pg= "SELECT SUM(bil_class) AS bil_kelas_pagi FROM
(SELECT COUNT(DISTINCT student_info.Class) AS bil_class
FROM student_info WHERE sesi='Pagi'
GROUP BY tahun,sesi) AS bil_kelas
";
$query_sum_kelas_pg=mysql_query($sql_sum_kelas_pg,$conn);
$row_sum_kelas_pg=mysql_fetch_assoc($query_sum_kelas_pg);

$sql_sum_kelas_ptg= "SELECT SUM(bil_class) AS bil_kelas_ptg FROM
(SELECT COUNT(DISTINCT student_info.Class) AS bil_class
FROM student_info WHERE sesi='Petang'
GROUP BY tahun,sesi) AS bil_kelas
";
$query_sum_kelas_ptg=mysql_query($sql_sum_kelas_ptg,$conn);
$row_sum_kelas_ptg=mysql_fetch_assoc($query_sum_kelas_ptg);
?>
<!-- PART GURU --!>
<?php
$sql_guru="SELECT
coalesce(sum(staff_info.Gender='L' && staff_info.Grade='DG41'), 0) AS dg41l,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='DG41'), 0) AS dg41p,
coalesce(sum(staff_info.Grade='DG41'), 0) AS sum_dg41,

coalesce(sum(staff_info.Gender='L' && staff_info.Grade='DGA34'), 0) AS dga34l,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='DGA34'), 0) AS dga34p,
coalesce(sum(staff_info.Grade='DGA34'), 0) AS sum_dga34,

coalesce(sum(staff_info.Gender='L' && staff_info.Grade='DGA32'), 0) AS dga32l,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='DGA32'), 0) AS dga32p,
coalesce(sum(staff_info.Grade='DGA32'), 0) AS sum_dga32,

coalesce(sum(staff_info.Gender='L' && staff_info.Grade='DGA29'), 0) AS dga29l,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='DGA29'), 0) AS dga29p,
coalesce(sum(staff_info.Grade='DGA29'), 0) AS sum_dga29,

coalesce(sum(staff_info.Gender='L' && staff_info.Grade='DGA29(K)'), 0) AS dga29kl,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='DGA29(K)'), 0) AS dga29kp,
coalesce(sum(staff_info.Grade='DGA29(K)'), 0) AS sum_dga29k,

coalesce(sum(staff_info.Gender='L' && staff_info.Grade='DB27(K)'), 0) AS db27kl,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='DB27(K)'), 0) AS db27kp,
coalesce(sum(staff_info.Grade='DB27(K)'), 0) AS sum_db27k,

coalesce(sum(staff_info.Gender='L' && staff_info.Grade='DB17(K)'), 0) AS db17kl,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='DB17(K)'), 0) AS db17kp,
coalesce(sum(staff_info.Grade='DB17(K)'), 0) AS sum_db17k,

coalesce(sum(staff_info.Gender='L' && staff_info.Grade!='RAKYAT' && staff_info.Grade!='GANTI' && staff_info.Job_Type='Guru'), 0) AS kafal,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade!='RAKYAT' && staff_info.Grade!='GANTI' && staff_info.Job_Type='Guru'), 0) AS kafap,
coalesce(sum(staff_info.Grade!='RAKYAT' && staff_info.Grade!='GANTI' && staff_info.Job_Type='Guru'), 0) AS sum_kafa,

coalesce(sum(staff_info.Gender='L' && staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS rakyatl,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS rakyatp,
coalesce(sum(staff_info.Grade='RAKYAT' && staff_info.Job_Type='Guru'), 0) AS sum_rakyat,

coalesce(sum(staff_info.Gender='L' && staff_info.Grade='GANTI'), 0) AS gantil,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='GANTI'), 0) AS gantip,
coalesce(sum(staff_info.Grade='GANTI'), 0) AS sum_ganti,

coalesce(sum(staff_info.Gender='P'), 0) AS sum_pom,
coalesce(sum(staff_info.Gender='L'), 0) AS sum_laki,

coalesce(sum(staff_info.Job_Type='Guru' && staff_info.Grade!='GANTI'), 0) AS guru_all
FROM staff_info
RIGHT OUTER JOIN job ON job.job_grade = staff_info.Grade
WHERE (job.job_category ='Guru' AND staff_info.sstatus='Aktif')
";
$query_guru=mysql_query($sql_guru,$conn);
$row_guru=mysql_fetch_assoc($query_guru);
?>
<!-- PART PEKERJA --!>
<?php
$sql_pekerja="SELECT
coalesce(sum(staff_info.Gender='L' && staff_info.Grade='N17'), 0) AS n17l,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='N17'), 0) AS n17p,
coalesce(sum(staff_info.Gender='L' && staff_info.Grade='N17(K)'), 0) AS n17kl,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='N17(K)'), 0) AS n17kp,
coalesce(sum(staff_info.Gender='L' && staff_info.Grade='N17(S)'), 0) AS n17sl,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='N17(S)'), 0) AS n17sp,
coalesce(sum(staff_info.Gender='L' && staff_info.Grade='N1'), 0) AS n1l,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='N1'), 0) AS n1p,
coalesce(sum(staff_info.Gender='L' && staff_info.Grade='R1'), 0) AS r1l,
coalesce(sum(staff_info.Gender='P' && staff_info.Grade='R1'), 0) AS r1p,
coalesce(sum(staff_info.Gender='L' && staff_info.Job_Title='Kerani Kewangan'), 0) AS ker_rakl,
coalesce(sum(staff_info.Gender='P' && staff_info.Job_Title='Kerani Kewangan'), 0) AS ker_rakp,
coalesce(sum(staff_info.Gender='L' && staff_info.Job_Title='Pembersih Kawasan' && staff_info.Grade='KONTRAKTOR'), 0) AS pem_kl,
coalesce(sum(staff_info.Gender='P' && staff_info.Job_Title='Pembersih Kawasan' && staff_info.Grade='KONTRAKTOR'), 0) AS pem_kp,
coalesce(sum(staff_info.Gender='L' && staff_info.Job_Title='Pembersih Kawasan' && staff_info.Grade='RAKYAT'), 0) AS pem_rl,
coalesce(sum(staff_info.Gender='P' && staff_info.Job_Title='Pembersih Kawasan' && staff_info.Grade='RAKYAT'), 0) AS pem_rp,
coalesce(sum(staff_info.Gender='L' && staff_info.Job_Title='Pengawal Keselamatan' && staff_info.Grade='KONTRAKTOR'), 0) AS peng_kl,
coalesce(sum(staff_info.Gender='P' && staff_info.Job_Title='Pengawal Keselamatan' && staff_info.Grade='KONTRAKTOR'), 0) AS peng_kp,
coalesce(sum(staff_info.Gender='L' && staff_info.Job_Title='Pengawal Keselamatan' && staff_info.Grade='RAKYAT'), 0) AS peng_rl,
coalesce(sum(staff_info.Gender='P' && staff_info.Job_Title='Pengawal Keselamatan' && staff_info.Grade='RAKYAT'), 0) AS peng_rp,
coalesce(sum(staff_info.Gender='L'), 0) AS sum_laki,
coalesce(sum(staff_info.Gender='P'), 0) AS sum_pom,
COUNT(staff_info.Gender) AS pekerja_all
FROM staff_info
WHERE (staff_info.Job_Type ='Pekerja' AND staff_info.sstatus='Aktif')
";
$query_pekerja=mysql_query($sql_pekerja,$conn);
$row_pekerja=mysql_fetch_assoc($query_pekerja);

?>
