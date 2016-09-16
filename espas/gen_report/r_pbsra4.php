<?php
$sql_guru4= "SELECT
staff_info.Name,
staff_info.Job_Title,
staff_info.course_opsyen,
staff_info.course_main,
staff_info.Job_Sesi,
job.job_grade AS Grade
FROM staff_info
INNER JOIN job ON staff_info.Grade = job.job_grade
WHERE Job_Type='Guru'
GROUP BY staff_info.Name
ORDER BY job.ID ";
$query_guru4=mysql_query($sql_guru4,$conn);
$row_guru4=mysql_fetch_assoc($query_guru4);
?>
<div class="whole">
<div class="header_report_right">PBSRA 4</div>
  <div class="pbsra1-topleft"></div>
<div class="pbsra1-topright"></div>
<div class="clr"></div>
<p class="title2">SENARAI GURU-GURU DAN PEKERJA-PEKERJA</p>
<p class="title">PENYATA BULANAN</p>
<div class="pbsra1-mid">
  <table width="779" cellpadding="1" class="tablemid4">
    <tr>
      <th width="40" rowspan="2" align="right" scope="col">BIL</th>
      <th width="299" rowspan="2" scope="col">NAMA</th>
      <th width="99" rowspan="2" scope="col">JAWATAN DI SEKOLAH</th>
      <th width="42" rowspan="2" scope="col">GRED</th>
      <th width="52" rowspan="2" scope="col">SESI</th>
      <th colspan="2" scope="col">MATA PELAJARAN</th>
      </tr>
    <tr>
      <th width="101" scope="col">OPSYEN</th>
      <th width="114" scope="col">MENGAJAR UTAMA</th>
    </tr>
    <tr>
    <?php $i=1; do{ ?>
      <td align="right" scope="col"><?php echo $i++?></td>
      <td scope="col"><?php echo $row_guru4['Name']?></td>
      <td scope="col"><?php echo $row_guru4['Job_Title']?></td>
      <td scope="col"><?php echo $row_guru4['Grade']?></td>
      <td scope="col"><?php echo $row_guru4['Job_Sesi']?></td>
      <td scope="col"><?php echo $row_guru4['course_opsyen']?></td>
       <td scope="col"><?php echo $row_guru4['course_main']?></td>
      </tr>
      <?php }while($row_guru4=mysql_fetch_assoc($query_guru4)) ;?>
</table>
<p>*DG: DG DB:DB KAFA: Fardhu Ain RAKYAT: Guru Rakyat<br /></p>
 <p>&nbsp;</p>
 
</div>
<div class="clr"></div>
</div>