<style>
table{ border:1px solid black; border-collapse:collapse;}

@charset "utf-8";
body {
	font-family: Arial, Helvetica, sans-serif;
	margin-top:20px;
}

.pagebreak {
	page-break-after:always;
}
 @media print{
	table{ font-size:11px; } 
	h2 { font-size:14px;}
	p { font-size:12px;}
	 
 }
</style>
<?php

function gred($mark){
	if($mark>79){ $gred='A';
	}else if($mark>59&&$mark<80) { $gred='B'; }
	else if($mark>39&&$mark<60) { $gred='C'; }
	else if($mark<40){ $gred='D'; }else{ $gred=''; }
	return $gred;
}


function gredlulus($mark){
	if($mark>40){ $gred='LULUS'; 
	}else if($mark<40){ $gred='GAGAL'; }else{ $gred=''; }
	return $gred;
}

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

 $gred_fail='<span style="color:red">';  $gred_ex='<span style="color:blue">';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Ranking Peperiksaan</title>
  </head>

  <body>
  <?php $i=1;do{ ?>
  <h2 style="text-align:center">JABATAN AGAMA ISLAM WILAYAH PERSEKUTUAN<br>
    SLIP KEPUTUSAN PEPERIKSAAN UPSRA <?php echo $row_at['syear']; ?></h2>
  <p><strong>NAMA : </strong><?php echo $row_at['nama']; ?><br>
    <strong>DARJAH: <?php echo $darjah; ?></strong> <strong>KELAS :</strong> <?php echo $row_at['namakelas']; ?><br />
    <strong>NO SB / NO KP :</strong> <?php echo $row_at['icno']; ?><br />
<strong>ANGKA GILIRAN :</strong> <?php echo $row_at['nogilir']; ?><br />
<strong>NAMA SEKOLAH :</strong> <?php echo $row_at['scode']; ?></p>
  <table width="500" border="2" cellpadding="2" >
    <tr>
      <th width="47%">MATA PELAJARAN</th>
 <th width="53%" align="center">Markah</th>
 </tr>
    <tr>
      <th>AL QURAN</th>
      <td align="center"><?php $s1=$row_at['s1']; echo gred($s1)?></td>
    </tr>
    <tr>
      <th>AKIDAH</th>
      <td align="center"><?php $s2=$row_at['s2']; echo gred($s2)?></td>
    </tr>
    <tr>
      <th>FEQAH</th>
      <td align="center"><?php $s3=$row_at['s3']; echo gred($s3)?></td>
    </tr>
    <tr>
      <th>TAUHID</th>
       <td align="center"><?php $s4=$row_at['s4']; echo gred($s4)?></td>
    </tr>
    <tr>
      <th>SIRAH</th>
       <td align="center"><?php $s3=$row_at['s5']; echo gred($s5)?></td>
    </tr>
    <tr>
      <th>BAHASA ARAB</th>
       <td align="center"><?php $s6=$row_at['s6']; echo gred($s6)?></td>
    </tr>
    <tr>
      <th>TAJWID</th>
       <td align="center"><?php $s7=$row_at['s7']; echo gred($s7)?></td>
    </tr>
    <tr>
      <th>JAWI *</th>
      <td align="center" style="background-color:#FFC"> 
        <?php $s8=$row_at['s8']; echo gredlulus($s8)?></td>
    </tr>
    <tr>
      <th>KHAT*</th>
      <td align="center" style="background-color:#FFC">
       <?php $s9=$row_at['s9']; echo gredlulus($s9)?></td>
    </tr>
      
      
  </table>
    <br>
    <table width="500" border="0">
      <tr>
        <th width="100" scope="row">Jumlah</th>
        <td width="168" align="center"><?php echo $row_at['tot_points']; ?></td>
        <th width="100">%</th>
        <td width="90" align="center"><?php echo number_format($row_at['tot_points']/7,2); ?></td>
        <th width="156" rowspan="2">Ranking : <span style="text-align:center"><?php echo $row_at['rank']; ?></span></th>
      </tr>
      <tr>
        <th scope="row">Gred</th>
        <td align="center"><?php if($row_at['gredasum']>0){ echo $row_at['gredasum'].'A'; }else{};?>
          <?php if($row_at['gredbsum']>0){ echo $row_at['gredbsum'].'B'; }; ?>
          <?php if($row_at['gredcsum']>0){ echo $row_at['gredcsum'].'C';} ?>
        <?php if($row_at['greddsum']>0){ echo $row_at['greddsum'].'D'; };?></td>
        <th>GPI</th>
        <td align="center"><?php echo number_format(($row_at['gp1sum']+$row_at['gp2sum']+$row_at['gp3sum']+$row_at['gp4sum'])/7,2) ?></td>
      </tr>
  </table>
   
    <?php //if even number will page break to fit 2 student in one page 
if(is_int($i/2)){ echo "<div class='pagebreak'></div>";
}else{ echo "<br/><p></p><hr /><br/><p></p>";} $i++;
?>
      <?php }while($row_at=mysql_fetch_array($query_at)); ?>

</body>
  </html>
