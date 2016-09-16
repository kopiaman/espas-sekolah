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
coalesce(sum(staff_info.Gender='L' && staff_info.Race='Malay'), 0) AS laki_m,
coalesce(sum(staff_info.Gender='P' && staff_info.Race='Malay'), 0) AS girl_m,
coalesce(sum(staff_info.Gender='L' && staff_info.Race!='Malay'), 0) AS laki_o,
coalesce(sum(staff_info.Gender='P' && staff_info.Race!='Malay'), 0) AS girl_o,
COUNT(staff_info.Gender) AS guru_all2,
job.ID,
job.job_grade AS Grade
FROM staff_info
RIGHT OUTER JOIN job ON job.job_grade = staff_info.Grade
WHERE (job.job_category ='Guru')
GROUP BY job.job_grade
ORDER BY job.ID ASC
";
$query_guru2=mysql_query($sql_guru2,$conn);
$row_guru2=mysql_fetch_assoc($query_guru2);

$sql_sumguru2="SELECT
coalesce(sum(Gender='L' && Race='Malay'), 0) AS sum_laki_m,
coalesce(sum(Gender='P' && Race='Malay'), 0) AS sum_girl_m,
coalesce(sum(Gender='L' && Race!='Malay'), 0) AS sum_laki_o,
coalesce(sum(Gender='P' && Race!='Malay'), 0) AS sum_girl_o,
COUNT(Gender) AS guru_all2
FROM staff_info
WHERE Job_Type='Guru'
";
$query_sumguru2=mysql_query($sql_sumguru2,$conn);
$row_sumguru2=mysql_fetch_assoc($query_sumguru2);
?>
<?php
$sql_pekerja2="SELECT
coalesce(sum(staff_info.Gender='L' && staff_info.Race='Malay'), 0) AS laki_m,
coalesce(sum(staff_info.Gender='P' && staff_info.Race='Malay'), 0) AS girl_m,
coalesce(sum(staff_info.Gender='L' && staff_info.Race!='Malay'), 0) AS laki_o,
coalesce(sum(staff_info.Gender='P' && staff_info.Race!='Malay'), 0) AS girl_o,
COUNT(staff_info.Gender) AS pekerja_all2,
job.ID,
job.job_name AS Job_Title,
job.job_grade AS Grade
FROM staff_info
RIGHT OUTER JOIN job ON job.job_grade = staff_info.Grade AND job.job_name=staff_info.Job_Title
WHERE (job.job_category ='Pekerja')
GROUP BY job.job_grade,job.job_name
ORDER BY job.ID
";
$query_pekerja2=mysql_query($sql_pekerja2,$conn);
$row_pekerja2=mysql_fetch_assoc($query_pekerja2);

$sql_sumpekerja2="SELECT
coalesce(sum(Gender='L' && Race='Malay'), 0) AS sum_laki_m,
coalesce(sum(Gender='P' && Race='Malay'), 0) AS sum_girl_m,
coalesce(sum(Gender='L' && Race!='Malay'), 0) AS sum_laki_o,
coalesce(sum(Gender='P' && Race!='Malay'), 0) AS sum_girl_o,
COUNT(Gender) AS Pekerja_all2
FROM staff_info
WHERE Job_Type='Pekerja'
";
$query_sumpekerja2=mysql_query($sql_sumpekerja2,$conn);
$row_sumpekerja2=mysql_fetch_assoc($query_sumpekerja2);
?>
<?php
$sql_all2="SELECT
COUNT(ID) AS total
FROM staff_info
";
$query_all2=mysql_query($sql_all2,$conn);
$row_all2=mysql_fetch_assoc($query_all2);
?>
<table width="779" cellpadding="1" class="tablemid4">
    <tr>
      <th width="55" rowspan="3" scope="col">Bil</th>
      <th width="271" rowspan="3" scope="col">GRED</th>
      <th height="25" colspan="4" align="center" scope="col">SRAI</th>
      <th colspan="4" align="center" scope="col">SRA</th>
      <th width="77" rowspan="3" align="center" scope="col">JUMLAH BESAR</th>
    </tr>
    <tr>
      <th colspan="2" scope="col">MELAYU</th>
      <th colspan="2" scope="col">LAIN-LAIN</th>
      <th colspan="2" scope="col">MELAYU</th>
      <th colspan="2" scope="col">LAIN-LAIN</th>
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
      <td align="center" scope="col"><?php echo $row_guru2['laki_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_guru2['girl_o'] ?></td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo $row_guru2['guru_all2'] ?></td>
    </tr>
    <?php }while($row_guru2=mysql_fetch_assoc($query_guru2)); ?>
    <tr>
      <td colspan="2" align="right" scope="col">JUMLAH</td>
        <td align="center" scope="col"><?php echo $row_sumguru2['sum_laki_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['sum_girl_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['sum_laki_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumguru2['sum_girl_o'] ?></td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo $row_sumguru2['guru_all2'] ?></td>
    </tr>
  </table>
<br />
  <p>PEKERJA</p>
  <table width="779" cellpadding="1" class="tablemid4">
    <tr>
      <th width="55" rowspan="3" scope="col">Bil</th>
      <th width="271" rowspan="3" scope="col">GRED</th>
      <th height="25" colspan="4" align="center" scope="col">SRAI</th>
      <th colspan="4" align="center" scope="col">SRA</th>
      <th width="77" rowspan="3" align="center" scope="col">JUMLAH BESAR</th>
    </tr>
    <tr>
      <th colspan="2" scope="col">MELAYU</th>
      <th colspan="2" scope="col">LAIN-LAIN</th>
      <th colspan="2" scope="col">MELAYU</th>
      <th colspan="2" scope="col">LAIN-LAIN</th>
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
      <td align="center" scope="col"><?php echo $row_pekerja2['laki_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_pekerja2['girl_o'] ?></td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo $row_pekerja2['pekerja_all2'] ?></td>
    </tr>
    <?php }while($row_pekerja2=mysql_fetch_assoc($query_pekerja2)); ?>
    <tr>
      <td colspan="2" align="right" scope="col">JUMLAH</td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_laki_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_girl_m'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_laki_o'] ?></td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['sum_girl_o'] ?></td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo $row_sumpekerja2['Pekerja_all2'] ?></td>
    </tr>
    <tr>
      <td colspan="10" align="right" scope="col"><strong>JUMLAH BESAR</strong></td>
      <td align="center" scope="col"><strong><?php echo $row_all2['total']; ?></strong></td>
    </tr>
  </table>
  <p><br />
    <br />
</p>
</div>
<div class="clr"></div>
</div>