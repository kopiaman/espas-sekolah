<?php
$sql_kafa_male= "SELECT
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
INNER JOIN job ON staff_info.Grade = job.job_grade
WHERE staff_info.Job_Type='Guru' AND (staff_info.Grade!='RAKYAT') AND staff_info.Grade!='GANTI' AND  staff_info.Gender='L'
GROUP BY staff_info.Name
ORDER BY job.ID";
$query_kafa_male=mysql_query($sql_kafa_male,$conn);
$row_kafa_male=mysql_fetch_assoc($query_kafa_male);


$sql_sum_male= "SELECT 
coalesce(sum(staff_info.Gender='L'), 0) AS sum_laki,
coalesce(sum(staff_info.Elaun='J/B/K'), 0) AS sjbk,
coalesce(sum(staff_info.Elaun='B/K'), 0) AS sbk,
coalesce(sum(staff_info.Elaun='KN'), 0) AS skn,
coalesce(sum(staff_info.Elaun='J/B'), 0) AS sjb,
coalesce(sum(staff_info.Elaun='J'),0) AS sr
FROM staff_info
WHERE staff_info.Job_Type='Guru' AND staff_info.Grade!='RAKYAT' AND staff_info.Grade!='GANTI' AND  staff_info.Gender='L'
";
$query_sum_male=mysql_query($sql_sum_male,$conn);
$row_sum_male=mysql_fetch_assoc($query_sum_male);
?>

<style>
 td { font-size:14px; }
</style>
<div class="whole">
<div class="header_report_right">PBSRA 5</div>
<div class="pbsra1-mid">
<h3 class="title2">PENYATA BULANAN</h3>
<h3><strong>SENARAI NAMA GURU KAFA LANTIKAN</strong> (LELAKI)</h3>



<div class="pbsra1-mid">
  <table width="100%" cellpadding="10" class="tablesmall">
    <tr>
      <th rowspan="2" align="center" scope="col">BIL</th>
      <th rowspan="2" scope="col">NAMA GURU</th>
      <th colspan="5" scope="col">JAIS (PERUNTUKAN ELAUN)</th>
      <th rowspan="2" scope="col">JAWATAN </th>
      <th colspan="2" scope="col">NO KP</th>
      <th rowspan="2" scope="col">        NO AKAUN &amp; NAMA BANK</th>
      <th rowspan="2" scope="col">NO KWSP</th>
      <th rowspan="2" scope="col">TARIKH <br />
        LANTIKAN</th>
      </tr>
    <tr>
      <th align="center" scope="col">J/B/K</th>
      <th align="center" scope="col">B/K</th>
      <th align="center" scope="col">KN</th>
      <th align="center" scope="col">J  </th>
      <th align="center" scope="col">J/B</th>
      <th scope="col">LAMA</th>
      <th scope="col">BARU</th>
      </tr>
    <tr>
       <?php $i=1; do{ ?> 
      <td align="center" scope="col"><?php echo $i++?></td>
      <td scope="col"><?php echo $row_kafa_male['Name']?></td>
      <td align="center" scope="col"><?php echo $row_kafa_male['jbk'];?></td>
      <td align="center" scope="col"><?php echo $row_kafa_male['bk'];?></td>
      <td align="center" scope="col"><?php echo $row_kafa_male['kn'];?></td>
      <td align="center" scope="col"><?php echo $row_kafa_male['jb'];?></td>
      <td align="center" scope="col"><?php echo $row_kafa_male['r'];?></td>
      <td align="center" scope="col"><?php echo $row_kafa_male['Job_Title']?></td>
      <td align="center" scope="col"><?php echo $row_kafa_male['IC_OLD']?></td>
      <td align="center" scope="col"><?php echo $row_kafa_male['IC_No']?></td>
      <td align="center" scope="col"><?php echo $row_kafa_male['bank1']?></td>
      <td align="center" scope="col"><?php echo $row_kafa_male['epf']?></td>
      <td scope="col"><?php  if($row_kafa_male['Join_Date']!='' ){ echo date("d/m/Y", strtotime($row_kafa_male['Join_Date'])); };?></td>
      </tr>
       <?php }while($row_kafa_male=mysql_fetch_assoc($query_kafa_male)) ?>

    <tr>
      <td align="center" scope="col">&nbsp;</td>
      <td scope="col"><strong>JUMLAH GURU</strong></td>
      <td align="center" scope="col"><?php echo $row_sum_male['sjbk']?></td>
      <td align="center" scope="col"><?php echo $row_sum_male['sbk']?></td>
      <td align="center" scope="col"><?php echo $row_sum_male['skn']?></td>
      <td align="center" scope="col"><?php echo $row_sum_male['sjb']?></td>
      <td align="center" scope="col"><?php echo $row_sum_male['sr']?></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      </tr>
  </table>
  <br />
  <br />
  <p><br />
</p>
<p>&nbsp;</p>
  <br /><br />
</div>
<div class="clr"></div>
</div>
