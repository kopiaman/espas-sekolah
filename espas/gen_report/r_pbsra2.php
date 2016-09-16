<div class="whole">
<div class="header_report_right">PBSRA 2</div>
  <div class="pbsra1-topleft"></div>
<div class="pbsra1-topright"></div>
<div class="clr">Bilangan Guru Dan Pekerja</div>
<p>PENYATA BULANAN</p>
<div class="pbsra1-mid">
<p>GURU</p>
<?php
$sql_guru2="SELECT
coalesce(sum(staff_info.Gender='L' && staff_info.Race='Malay' && staff_info.Job_Type='Guru'), 0) AS laki_m,
coalesce(sum(staff_info.Gender='P' && staff_info.Race='Malay' && staff_info.Job_Type='Guru'), 0) AS girl_m,

coalesce(sum(staff_info.Gender='L' && staff_info.Race='Chinese' && staff_info.Job_Type='Guru'), 0) AS laki_c,
coalesce(sum(staff_info.Gender='P' && staff_info.Race='Chinese' && staff_info.Job_Type='Guru'), 0) AS girl_c,

coalesce(sum(staff_info.Gender='L' && staff_info.Race='Indian' && staff_info.Job_Type='Guru'), 0) AS laki_i,
coalesce(sum(staff_info.Gender='P' && staff_info.Race='Indian' && staff_info.Job_Type='Guru'), 0) AS girl_i,

coalesce(sum(staff_info.Gender='L' && staff_info.Race='Others' && staff_info.Job_Type='Guru'), 0) AS laki_o,
coalesce(sum(staff_info.Gender='P' && staff_info.Race='Others' && staff_info.Job_Type='Guru'), 0) AS girl_o,
coalesce(sum(staff_info.Job_Type='Guru'), 0) AS guru_all2,
job.ID,
job.job_grade AS Grade
FROM staff_info
RIGHT OUTER JOIN job ON job.job_grade = staff_info.Grade
WHERE (job.job_category ='Guru') AND sstatus='Aktif'
GROUP BY job.job_grade
ORDER BY job.ID ASC
";
$query_guru2=mysql_query($sql_guru2,$conn);
$row_guru2=mysql_fetch_assoc($query_guru2);

$sql_sumguru2="SELECT
coalesce(sum(Gender='L' && Race='Malay'), 0) AS sum_laki_m,
coalesce(sum(Gender='P' && Race='Malay'), 0) AS sum_girl_m,

coalesce(sum(Gender='L' && Race='Chinese'), 0) AS sum_laki_c,
coalesce(sum(Gender='P' && Race='Chinese'), 0) AS sum_girl_c,

coalesce(sum(Gender='L' && Race='Indian'), 0) AS sum_laki_i,
coalesce(sum(Gender='P' && Race='Indian'), 0) AS sum_girl_i,

coalesce(sum(Gender='L' && Race='Others'), 0) AS sum_laki_o,
coalesce(sum(Gender='P' && Race='Others'), 0) AS sum_girl_o,
COUNT(Name) AS guru_all2
FROM staff_info
WHERE Job_Type='Guru' AND sstatus='Aktif'
";
$query_sumguru2=mysql_query($sql_sumguru2,$conn);
$row_sumguru2=mysql_fetch_assoc($query_sumguru2);
?>
<?php
$sql_pekerja2="SELECT
coalesce(sum(staff_info.Gender='L' && staff_info.Race='Malay'), 0) AS laki_m,
coalesce(sum(staff_info.Gender='P' && staff_info.Race='Malay'), 0) AS girl_m,

coalesce(sum(staff_info.Gender='L' && staff_info.Race='Chinese'), 0) AS laki_c,
coalesce(sum(staff_info.Gender='P' && staff_info.Race='Chinese'), 0) AS girl_c,

coalesce(sum(staff_info.Gender='L' && staff_info.Race='Indian'), 0) AS laki_i,
coalesce(sum(staff_info.Gender='P' && staff_info.Race='Indian'), 0) AS girl_i,

coalesce(sum(staff_info.Gender='L' && staff_info.Race='Others'), 0) AS laki_o,
coalesce(sum(staff_info.Gender='P' && staff_info.Race='Others'), 0) AS girl_o,
COUNT(Name) AS Pekerja_all2,
Job_Title AS Job_Title,
Grade AS Grade
FROM staff_info
WHERE (Job_Type ='Pekerja') AND sstatus='Aktif'
GROUP BY Grade

";
$query_pekerja2=mysql_query($sql_pekerja2,$conn);
$row_pekerja2=mysql_fetch_assoc($query_pekerja2);

$sql_sumpekerja2="SELECT
coalesce(sum(Gender='L' && Race='Malay'), 0) AS sum_laki_m,
coalesce(sum(Gender='P' && Race='Malay'), 0) AS sum_girl_m,

coalesce(sum(Gender='L' && Race='Chinese'), 0) AS sum_laki_c,
coalesce(sum(Gender='P' && Race='Chinese'), 0) AS sum_girl_c,

coalesce(sum(Gender='L' && Race='Indian'), 0) AS sum_laki_i,
coalesce(sum(Gender='P' && Race='Indian'), 0) AS sum_girl_i,

coalesce(sum(Gender='L' && Race='Others'), 0) AS sum_laki_o,
coalesce(sum(Gender='P' && Race='Others'), 0) AS sum_girl_o,
COUNT(Name) AS Pekerja_all2
FROM staff_info
WHERE staff_info.Job_Type='Pekerja' AND staff_info.sstatus='Aktif'

";
$query_sumpekerja2=mysql_query($sql_sumpekerja2,$conn);
$row_sumpekerja2=mysql_fetch_assoc($query_sumpekerja2);
?>
<?php
$sql_all2="SELECT
COUNT(ID) AS total
FROM staff_info
WHERE sstatus='Aktif'
";
$query_all2=mysql_query($sql_all2,$conn);
$row_all2=mysql_fetch_assoc($query_all2);
?>
<table width="779" cellpadding="1" class="tablemid4">
    <tr>
      <th width="55" rowspan="2" scope="col">Bil</th>
      <th width="271" rowspan="2" scope="col">GRED</th>
      <th colspan="2" align="center" scope="col">MELAYU</th>
      <th colspan="2" align="center" scope="col">CINA</th>
      <th colspan="2" align="center" scope="col">INDIA</th>
      <th colspan="2" align="center" scope="col">LAIN-LAIN</th>
      <th width="77" rowspan="2" align="center" scope="col">JUMLAH BESAR</th>
    </tr>
    <tr>
      <th width="35" scope="col">L</th>
      <th width="39" scope="col">P</th>
      <th width="42" scope="col">L</th>
      <th width="46" scope="col">P</th>
      <th width="44" scope="col">L</th>
      <th width="41" scope="col">P</th>
      <th width="36" scope="col">L</th>
      <th width="45" scope="col">P</th>
    </tr>
     <?php 
	 $i=1;
	 do{ ?>
    <tr>
      <td scope="col"><?php echo $i++ ?></td>
      <td scope="col"><?php echo $row_guru2['Grade'] ?></td>
      <td align="center" scope="col"><?php echo $row_guru2['laki_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_guru2['girl_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_guru2['laki_c'] ?></td>
      <td align="center" scope="col"><?php echo $row_guru2['girl_c'] ?></td>
      <td align="center" scope="col"><?php echo $row_guru2['laki_i'] ?></td>
      <td align="center" scope="col"><?php echo $row_guru2['girl_i'] ?></td>
      <td align="center" scope="col"><?php echo $row_guru2['laki_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_guru2['girl_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_guru2['guru_all2'] ?></td>
    </tr>
    <?php }while($row_guru2=mysql_fetch_assoc($query_guru2)); ?>
    <tr>
      <th colspan="2" align="right" scope="col">JUMLAH</th>
        <td align="center" scope="col"><?php echo $row_sumguru2['sum_laki_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['sum_girl_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['sum_laki_c'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['sum_girl_c'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['sum_laki_i'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['sum_girl_i'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['sum_laki_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['sum_girl_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['guru_all2'] ?></td>
    </tr>
  </table>
<br />
  <p>PEKERJA</p>
  <table width="779" cellpadding="1" class="tablemid4">
    <tr>
      <th width="55" rowspan="2" scope="col">Bil</th>
      <th width="271" rowspan="2" scope="col">PEKERJAAN</th>
      <th colspan="2" align="center" scope="col">MELAYU</th>
      <th colspan="2" align="center" scope="col">CINA</th>
      <th colspan="2" align="center" scope="col">INDIA</th>
      <th colspan="2" align="center" scope="col">LAIN-LAIN</th>
      <th width="77" rowspan="2" align="center" scope="col">JUMLAH BESAR</th>
    </tr>
    <tr>
      <th width="35" scope="col">L</th>
      <th width="39" scope="col">P</th>
      <th width="42" scope="col">L</th>
      <th width="46" scope="col">P</th>
      <th width="44" scope="col">L</th>
      <th width="41" scope="col">P</th>
      <th width="36" scope="col">L</th>
      <th width="45" scope="col">P</th>
    </tr>
    <?php 
	 $i=1;
	 do{ ?>
    <tr>
      <td scope="col"><?php echo $i++ ?></td>
      <td scope="col"><?php echo $row_pekerja2['Job_Title'].' '.$row_pekerja2['Grade'] ?></td>
      <td align="center" scope="col"><?php echo $row_pekerja2['laki_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_pekerja2['girl_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_pekerja2['laki_c'] ?></td>
      <td align="center" scope="col"><?php echo $row_pekerja2['girl_c'] ?></td>
      <td align="center" scope="col"><?php echo $row_pekerja2['laki_i'] ?></td>
      <td align="center" scope="col"><?php echo $row_pekerja2['girl_i'] ?></td>
      <td align="center" scope="col"><?php echo $row_pekerja2['laki_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_pekerja2['girl_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_pekerja2['Pekerja_all2'] ?></td>
    </tr>
    <?php }while($row_pekerja2=mysql_fetch_assoc($query_pekerja2)); ?>
    <tr>
      <th colspan="2" align="right" scope="col">JUMLAH</th>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_laki_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_girl_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_laki_c'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_girl_c'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_laki_i'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_girl_i'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_laki_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_girl_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['Pekerja_all2'] ?></td>
    </tr>
  </table>
  <p><br />
    <br />
</p>
</div>
<div class="clr"></div>
</div>