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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
GROUP BY `group`.`group` ORDER BY group.id ASC
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
<!-- calculate bilangan kelas sesi pagi & petang--!>
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
