<style>
table{ border:1px solid black; border-collapse:collapse;}

 @media print{
	table{ font-size:12px; } 
	 
 }
</style>
<?php

require_once("include/dbcommon.php");

$etype=$_GET['etype'];
$darjah=$_GET['darjah'];


$kelas=$_GET['kelas'];
if($kelas!=''){
$kelas=$_GET['kelas'];
$sqlkelas="AND student_info.`Class`='$kelas'";	
}else{ $kelas='';
$sqlkelas="";
};	

//formula to calculate how many A's etc
$sc="student_course";
$greda="79,1,0";
$greda_sum="IF($sc.s1>$greda) + IF($sc.s2>$greda) + IF($sc.s3>$greda) +IF($sc.s4>$greda) +IF($sc.s5>$greda) +IF($sc.s6>$greda) +IF($sc.s7>$greda) AS gredasum ";

$gredb_sum="IF($sc.s1>59 && $sc.s1<80,1,0) + IF($sc.s2>59 && $sc.s2<80,1,0) + IF($sc.s3>59 && $sc.s3<80,1,0) + 
IF($sc.s4>59 && $sc.s4<80,1,0) + IF($sc.s5>59 && $sc.s5<80,1,0) + IF($sc.s6>59 && $sc.s6<80,1,0) + IF($sc.s7>59 && $sc.s7<80,1,0) AS gredbsum";

$gredc_sum="IF($sc.s1>39 && $sc.s1<60,1,0) + IF($sc.s2>39 && $sc.s2<60,1,0) + IF($sc.s3>39 && $sc.s3<60,1,0) + 
IF($sc.s4>39 && $sc.s4<60,1,0) + IF($sc.s5>39 && $sc.s5<60,1,0) + IF($sc.s6>39 && $sc.s6<60,1,0) + IF($sc.s7>39 && $sc.s7<60,1,0) AS gredcsum";

$gredd="40,1,0";
$gredd_sum="IF($sc.s1<$gredd) + IF($sc.s2<$gredd) + IF($sc.s3<$gredd) +IF($sc.s4<$gredd) +IF($sc.s5<$gredd) +IF($sc.s6<$gredd) +IF($sc.s7<$gredd) AS greddsum";

//calculate CGPA
$gre4a="79,4,0";
$gp4_sum="IF($sc.s1>$gre4a) + IF($sc.s2>$gre4a) + IF($sc.s3>$gre4a) + IF($sc.s4>$gre4a) + IF($sc.s5>$gre4a) + IF($sc.s6>$gre4a) + IF($sc.s7>$gre4a) AS gp4sum ";

$gp3_sum="IF($sc.s1>59 && $sc.s1<80,3,0) + IF($sc.s2>59 && $sc.s2<80,3,0) + IF($sc.s3>59 && $sc.s3<80,3,0) + 
IF($sc.s4>59 && $sc.s4<80,3,0) + IF($sc.s5>59 && $sc.s5<80,3,0) + IF($sc.s6>59 && $sc.s6<80,3,0) + IF($sc.s7>59 && $sc.s7<80,3,0) AS gp3sum";

$gp2_sum="IF($sc.s1>39 && $sc.s1<60,2,0) + IF($sc.s2>39 && $sc.s2<60,2,0) + IF($sc.s3>39 && $sc.s3<60,2,0) + 
IF($sc.s4>39 && $sc.s4<60,2,0) + IF($sc.s5>39 && $sc.s5<60,2,0) + IF($sc.s6>39 && $sc.s6<60,2,0) + IF($sc.s7>39 && $sc.s7<60,2,0) AS gp2sum";

$gredd="40,1,0";
$gp1_sum="IF($sc.s1<$gredd) + IF($sc.s2<$gredd) + IF($sc.s3<$gredd) +IF($sc.s4<$gredd) +IF($sc.s5<$gredd) +IF($sc.s6<$gredd) +IF($sc.s7<$gredd) AS gp1sum";


$sql_at= "SELECT StudentID, nama, darjah, kelas,namakelas, s1 ,s2,s3,s4,s5,s6,s7,s8,s9,
tot_points, etype,gredasum,gredbsum,gredcsum,greddsum,gp1sum,gp2sum,gp3sum,gp4sum, @Rank := @Rank +1 AS rank
FROM (

	SELECT student_course.StudentID, student_course.etype,
	student_course.s1 ,student_course.s2,student_course.s3,student_course.s4,
student_course.s5,student_course.s6,student_course.s7,
student_course.s8,student_course.s9,
	$greda_sum,$gredb_sum,$gredc_sum,$gredd_sum,
	$gp1_sum,$gp2_sum,$gp3_sum,$gp4_sum,
	SUM( s1 + s2 + s3 + s4 + s5 + s6 + s7 ) AS tot_points,
	student_info.Name AS nama,student_info.tahun AS darjah,
	student_info.`Class` AS kelas, student_info.sesi, student_info.MatricNo, `group`.`group` AS namakelas
	FROM student_course
	INNER JOIN student_info ON student_course.StudentID = student_info.StudentID
    INNER JOIN `group` ON `group`.id = student_info.`Class`
	WHERE student_course.etype ='$etype' AND  student_info.tahun='$darjah' $sqlkelas
	GROUP BY student_course.StudentID
	ORDER BY tot_points DESC
)Sub1
CROSS JOIN (SELECT @Rank :=0) Sub2
";
$query_at=mysql_query($sql_at,$conn);
$row_at=mysql_fetch_array($query_at);


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Ranking Peperiksaan</title>
  </head>
  <body>
  <table width="764" border="0">
    <tr>
      <td height="21"><h2><strong>Keputusan Peperiksaan | Darjah: <?php echo $darjah; ?> | Peperiksaan/ Ujian: <?php echo $etype; ?></strong></h2></td>
    </tr>
  </table>
  </br> <?php do{ ?> 
  <p>NAMA : <?php echo $row_at['nama']; ?><br>
KELAS : <?php echo $row_at['namakelas']; ?><br />
NO SB / NO KP : <?php echo $row_at['icno']; ?><br />
ANGKA GILIRAN : <?php echo $row_at['nogilir']; ?><br />
NAMA SEKOLAH : <?php echo $row_at['scode']; ?></p>
  <table width="100%" border="2" cellpadding="5" >
    <tr>
      <th>AQ</th>
 <th>AK</th>
 <th>FQ</th>
 <th>TH</th>
 <th>SR</th>
 <th>BA</th>
 <th>TJ</th>
 <th>JW*</th>
 <th>KH*</th>  
      <th>Jumlah </th>
      <th>%</th>
      <th>Ranking </th>
      <th>Gred</th>
       <th>GPI</th>
    </tr>
    <tr> <?php $gred_fail='<span style="color:red">';  $gred_ex='<span style="color:blue">';?>
      <td><?php $s1=$row_at['s1'];if ($s1>79) { echo $gred_ex.$s1.'</span>'; }else if($s1<40){  echo $gred_fail.$s1.'</span>'; }else{ echo $s1 ;}; ?></td>
           <td><?php $s2=$row_at['s2'];if ($s2>79) { echo $gred_ex.$s2.'</span>'; }else if($s2<40){  echo $gred_fail.$s2.'</span>'; }else{ echo $s2 ;}; ?></td>
         <td><?php $s3=$row_at['s3'];if ($s3>79) { echo $gred_ex.$s3.'</span>'; }else if($s3<40){  echo $gred_fail.$s3.'</span>'; }else{ echo $s3 ;}; ?></td>
         <td><?php $s4=$row_at['s4'];if ($s4>79) { echo $gred_ex.$s4.'</span>'; }else if($s4<40){  echo $gred_fail.$s4.'</span>'; }else{ echo $s4 ;}; ?></td>
         <td><?php $s5=$row_at['s5'];if ($s5>79) { echo $gred_ex.$s5.'</span>'; }else if($s5<40){  echo $gred_fail.$s5.'</span>'; }else{ echo $s5 ;}; ?></td>
         <td><?php $s6=$row_at['s6'];if ($s6>79) { echo $gred_ex.$s6.'</span>'; }else if($s6<40){  echo $gred_fail.$s6.'</span>'; }else{ echo $s6 ;}; ?></td>
         <td><?php $s7=$row_at['s7'];if ($s7>79) { echo $gred_ex.$s7.'</span>'; }else if($s7<40){  echo $gred_fail.$s7.'</span>'; }else{ echo $s7 ;}; ?></td>
      <td style="background-color:#FFC"><?php $s8=$row_at['s8'];if ($s8>39) { echo $gred_ex.$s8.'</span>'; }else if($s8<40){  echo $gred_fail.$s8.'</span>'; }else{ echo $s8 ;}; ?></td>
      <td style="background-color:#FFC"><?php $s9=$row_at['s9'];if ($s9>39) { echo $gred_ex.$s9.'</span>'; }else if($s9<40){  echo $gred_fail.$s9.'</span>'; }else{ echo $s9 ;}; ?></td>

      <td><?php echo $row_at['tot_points']; ?></td>
      <td><?php echo number_format($row_at['tot_points']/7,2); ?></td>
      <td style="text-align:center"><?php echo $row_at['rank']; ?></td>
      <td><?php if($row_at['gredasum']>0){ echo $row_at['gredasum'].'A'; }else{};?> <?php if($row_at['gredbsum']>0){ echo $row_at['gredbsum'].'B'; }; ?> 
	  <?php if($row_at['gredcsum']>0){ echo $row_at['gredcsum'].'C';} ?> <?php if($row_at['greddsum']>0){ echo $row_at['greddsum'].'D'; };?></td>
  
  
  
      <td><?php echo number_format(($row_at['gp1sum']+$row_at['gp2sum']+$row_at['gp3sum']+$row_at['gp4sum'])/7,2) ?></td>
  </tr>
      
      
  </table>
  <p>&nbsp;</p>
  <?php }while($row_at=mysql_fetch_array($query_at)); ?>
</body>
  </html>
