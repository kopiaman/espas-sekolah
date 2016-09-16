<?php
$sqlrakyat="SELECT
staff_info.Name,
staff_info.Job_Title,
job.job_grade AS Grade,
staff_info.course_opsyen,
staff_info.course_main,
staff_info.Job_Sesi,
staff_info.Gender,
staff_info.IC_No,
staff_info.kelulusan,
staff_info.bank1,
staff_info.epf,
staff_info.Join_Date,
staff_info.End_Date,
staff_info.Gerak_Date,
staff_info.Address,
staff_info.Mobile_Tel,
IF(staff_info.Elaun='J/B/K', 1, 0) AS jbk,
IF(staff_info.Elaun='B/K', 1, 0) AS bk,
IF(staff_info.Elaun='KN', 1, 0) AS kn,
IF(staff_info.Elaun='J/B', 1, 0) AS jb,
IF(staff_info.Elaun='J', 1, 0) AS r
FROM staff_info
INNER JOIN job ON staff_info.Grade = job.job_grade";

$sql_guru_rakyat_male= " $sqlrakyat
WHERE staff_info.Job_Type='Guru' AND (staff_info.Grade='RAKYAT') AND  staff_info.Gender='L'
GROUP BY staff_info.Name
ORDER BY job.ID";
$query_guru_rakyat_male=mysql_query($sql_guru_rakyat_male,$conn);
$row_guru_rakyat_male=mysql_fetch_assoc($query_guru_rakyat_male);

$sql_sum_guru_rakyat_male="SELECT COUNT(staff_info.Name) AS jumlah FROM staff_info
WHERE staff_info.Job_Type='Guru' AND (staff_info.Grade='RAKYAT') AND  staff_info.Gender='L' ";
$query_sum_guru_rakyat_male=mysql_query($sql_sum_guru_rakyat_male,$conn);
$sum_guru_rakyat_male=mysql_fetch_assoc($query_sum_guru_rakyat_male);

$sql_guru_rakyat_female= " $sqlrakyat
WHERE staff_info.Job_Type='Guru' AND (staff_info.Grade='RAKYAT') AND  staff_info.Gender='P'
GROUP BY staff_info.Name
ORDER BY job.ID";
$query_guru_rakyat_female=mysql_query($sql_guru_rakyat_female,$conn);
$row_guru_rakyat_female=mysql_fetch_assoc($query_guru_rakyat_female);

$sql_sum_guru_rakyat_female="SELECT COUNT(staff_info.Name) AS jumlah FROM staff_info
WHERE staff_info.Job_Type='Guru' AND (staff_info.Grade='RAKYAT') AND  staff_info.Gender='P' ";
$query_sum_guru_rakyat_female=mysql_query($sql_sum_guru_rakyat_female,$conn);
$sum_guru_rakyat_female=mysql_fetch_assoc($query_sum_guru_rakyat_female);
?>
<?php

?>
<div class="whole_landscape">
<div class="header_report_right">PBSRA 6</div>
  <div class="pbsra1-topleft"></div>
<div class="pbsra1-topright"></div>
<div class="clr"></div>
<p class="title">PENYATA BULANAN</p>
<h3><strong>SENARAI NAMA GURU RAKYAT (LELAKI)</strong></h3>
<div class="pbsra1-mid">
  <table width="100%" cellpadding="10" class="tablesmall">
    <tr>
      <th rowspan="2" align="center" scope="col">BIL</th>
      <th rowspan="2" scope="col">NAMA GURU</th>
      <th rowspan="2" scope="col">PERUNTUKAN SEKOLAH</th>
      <th rowspan="2" scope="col">JAWATAN </th>
      <th colspan="2" scope="col">NO KP</th>
      <th rowspan="2" scope="col">        NO AKAUN &amp; NAMA BANK</th>
      <th rowspan="2" scope="col">NO KWSP</th>
      <th rowspan="2" scope="col">TARIKH <br />
        LANTIKAN</th>
      </tr>
    <tr>
      <th scope="col">LAMA</th>
      <th scope="col">BARU</th>
      </tr>
    <tr>
       <?php $i_rakyat_male=1; do{ ?> 
      <td align="center" scope="col"><?php echo $i_rakyat_male++?></td>
      <td scope="col"><?php echo $row_guru_rakyat_male['Name']?></td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo $row_guru_rakyat_male['Job_Title']?></td>
      <td align="center" scope="col"><?php echo $row_guru_rakyat_male['IC_OLD']?></td>
      <td align="center" scope="col"><?php echo $row_guru_rakyat_male['IC_No']?></td>
      <td align="center" scope="col"><?php echo $row_guru_rakyat_male['bank1']?></td>
      <td align="center" scope="col"><?php echo $row_guru_rakyat_male['epf']?></td>
      <td scope="col"><?php  if($row_guru_rakyat_male['Join_Date']!='' ){ echo date("d/m/Y", strtotime($row_guru_rakyat_male['Join_Date'])); };?></td>
      </tr>
       <?php
	 
	    }while($row_guru_rakyat_male=mysql_fetch_assoc($query_guru_rakyat_male)) ;?>
  </table>
  <h3>JUMLAH GURU : <?php echo $sum_guru_rakyat_male['jumlah'] ?> <br />
    <br />
  </h3>
  <p><br />
</p>
  <h3><strong>SENARAI NAMA GURU RAKYAT (PEREMPUAN)</strong></h3>
  <div class="pbsra1-mid">
    <table width="100%" cellpadding="10" class="tablesmall">
      <tr>
        <th rowspan="2" align="center" scope="col">BIL</th>
        <th rowspan="2" scope="col">NAMA GURU</th>
        <th rowspan="2" scope="col">PERUNTUKAN SEKOLAH</th>
        <th rowspan="2" scope="col">JAWATAN </th>
        <th colspan="2" scope="col">NO KP</th>
        <th rowspan="2" scope="col"> NO AKAUN &amp; NAMA BANK</th>
        <th rowspan="2" scope="col">NO KWSP</th>
        <th rowspan="2" scope="col">TARIKH <br />
          LANTIKAN</th>
      </tr>
      <tr>
        <th scope="col">LAMA</th>
        <th scope="col">BARU</th>
      </tr>
      <tr>
        <?php $sum_rakyat_female=1; do{ ?>
        <td align="center" scope="col"><?php echo $sum_rakyat_female++?></td>
        <td scope="col"><?php echo $row_guru_rakyat_female['Name']?></td>
        <td align="center" scope="col">&nbsp;</td>
        <td align="center" scope="col"><?php echo $row_guru_rakyat_female['Job_Title']?></td>
        <td align="center" scope="col"><?php echo $row_guru_rakyat_female['IC_OLD']?></td>
        <td align="center" scope="col"><?php echo $row_guru_rakyat_female['IC_No']?></td>
        <td align="center" scope="col"><?php echo $row_guru_rakyat_female['bank1']?></td>
        <td align="center" scope="col"><?php echo $row_guru_rakyat_female['epf']?></td>
        <td scope="col"><?php  if($row_guru_rakyat_female['Join_Date']!='' ){ echo date("d/m/Y", strtotime($row_guru_rakyat_female['Join_Date'])); };?></td>
      </tr>
      <?php 
	  }while($row_guru_rakyat_female=mysql_fetch_assoc($query_guru_rakyat_female)) ?>
    </table>
  </div>
  <h3>JUMLAH GURU : <?php echo $sum_guru_rakyat_female['jumlah'] ?> <br /></h3>
  <br /><br />
</div>
<div class="clr"></div>
</div>
