<?php
$sql_guru52= "SELECT
staff_info.Name,
staff_info.Job_Title,
job.job_grade AS Grade,
staff_info.course_opsyen,
staff_info.course_main,
staff_info.Job_Sesi,
staff_info.Gender,
IF(staff_info.Gender='L', 1, 0) AS gender_set_L,
IF(staff_info.Gender='P', 1, 0) AS gender_set_P,
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
IF(staff_info.Elaun='R', 1, 0) AS r
FROM staff_info
INNER JOIN job ON staff_info.Grade = job.job_grade
WHERE staff_info.Job_Type='Guru' AND (staff_info.Grade='KAFA' OR staff_info.Grade='RAKYAT')
GROUP BY staff_info.Name
ORDER BY job.ID";
$query_guru52=mysql_query($sql_guru52,$conn);
$row_guru52=mysql_fetch_assoc($query_guru52);


$sql_sum52= "SELECT 
coalesce(sum(staff_info.Gender='L'), 0) AS sum_laki,
coalesce(sum(staff_info.Gender='P'), 0) AS sum_pom,
coalesce(sum(staff_info.Elaun='J/B/K'), 0) AS sjbk,
coalesce(sum(staff_info.Elaun='B/K'), 0) AS sbk,
coalesce(sum(staff_info.Elaun='KN'), 0) AS skn,
coalesce(sum(staff_info.Elaun='J/B'), 0) AS sjb,
coalesce(sum(staff_info.Elaun='R'),0) AS sr
FROM staff_info
WHERE staff_info.Job_Type='Guru' AND (staff_info.Grade='KAFA' OR staff_info.Grade='RAKYAT')
";
$query_sum52=mysql_query($sql_sum52,$conn);
$row_sum52=mysql_fetch_assoc($query_sum52);
?>
<?php

$sql_cat52= "SELECT
coalesce(sum(Grade='DG41' OR Grade='DGA34' OR Grade='DGA32' OR Grade='DGA29' && Gender='L'), 0) AS laki_dg,
coalesce(sum(Grade='DG41' OR Grade='DGA34' OR Grade='DGA32' OR Grade='DGA29' && Gender='P'), 0) AS p_dg,
coalesce(sum(Grade='DGA29(K)' OR Grade='DB27(K)' OR Grade='DB17(K)' && Gender='L'), 0) AS laki_dgdb_k,
coalesce(sum(Grade='DGA29(K)' OR Grade='DB27(K)' OR Grade='DB17(K)' && Gender='P'), 0) AS p_dgdb_k,
coalesce(sum(Grade='DGA29' && Gender='P'), 0) AS p_27,
coalesce(sum(Grade='N17' OR Grade='N1' OR Grade='R1' && Gender='L'), 0) AS laki_others,
coalesce(sum(Grade LIKE '%N17' OR Grade='DB27(K)' OR Grade='DB17(K)' && Gender='L'), 0) AS l_others,
coalesce(sum(Grade LIKE '%N17' OR Grade='DB27(K)' OR Grade='DB17(K)' && Gender='P'), 0) AS p_others
FROM staff_info
";
$query_cat52=mysql_query($sql_cat52,$conn);
$row_cat52=mysql_fetch_assoc($query_cat52);

//kira total jantina
$sql_total52= "SELECT 
coalesce(sum(staff_info.Gender='L'), 0) AS total_laki,
coalesce(sum(staff_info.Gender='P'), 0) AS total_pom
FROM staff_info
WHERE staff_info.Job_Type='Guru'";
$query_total52=mysql_query($sql_total52,$conn);
$row_total52=mysql_fetch_assoc($query_total52);

//kira total rakyat & kafa
$sql_total522= "SELECT 
coalesce(sum(staff_info.Gender='L' AND staff_info.Grade='KAFA' ), 0) AS sum_laki_kafa,
coalesce(sum(staff_info.Gender='P' AND staff_info.Grade='KAFA'), 0) AS sum_pom_kafa,
coalesce(sum(staff_info.Gender='L' AND staff_info.Grade='RAKYAT' ), 0) AS sum_laki_rak,
coalesce(sum(staff_info.Gender='P' AND staff_info.Grade='RAKYAT'), 0) AS sum_pom_rak
FROM staff_info
WHERE staff_info.Job_Type='Guru'";
$query_total522=mysql_query($sql_total522,$conn);
$row_total522=mysql_fetch_assoc($query_total522);
?>
<div class="whole_landscape">
<div class="header_report_right">PBSRA 5(2)</div>
  <div class="pbsra1-topleft"></div>
<div class="pbsra1-topright"></div>
<div class="clr"><strong>SENARAI GURU-GURU DAN PEKERJA-PEKERJA</strong></div>
<p class="title">PENYATA BULANAN</p>
<p><strong>1.SENARAI NAMA GURU/ PEKERJA LANTIKAN SEK/JAIS (KN) &amp; JAKIM</strong></p>
<div class="pbsra1-mid">
  <table width="1100" cellpadding="1" class="tablesmall">
    <tr>
      <th width="15" rowspan="2" align="center" scope="col">BIL</th>
      <th width="147" rowspan="2" scope="col">NAMA GURU</th>
      <th width="45" rowspan="2" scope="col">JAWATAN DI <br />
        SEKOLAH</th>
      <th width="35" rowspan="2" scope="col">GRED</th>
      <th colspan="2" scope="col">JANTINA</th>
      <th colspan="2" scope="col">NO KP</th>
      <th width="77" rowspan="2" scope="col">KELULUSAN</th>
      <th width="70" rowspan="2" scope="col">NAMA BANK &amp;<br /> 
        NO AKAUN</th>
      <th width="40" rowspan="2" scope="col">NO KWSP</th>
      <th width="35" rowspan="2" scope="col">TARIKH <br />
        LANTIKAN</th>
      <th colspan="5" scope="col">ELAUN</th>
      <th width="102" rowspan="2" scope="col">ALAMAT</th>
      <th width="55" rowspan="2" scope="col">NO TEL</th>
      </tr>
    <tr>
      <th width="15" scope="col">L</th>
      <th width="15" scope="col">P</th>
      <th width="40" scope="col">LAMA</th>
      <th width="50" scope="col">BARU</th>
      <th width="15" align="center" scope="col">J/B/K</th>
      <th width="15" align="center" scope="col">B/K</th>
      <th width="15" align="center" scope="col">KN</th>
      <th width="15" align="center" scope="col">J/B</th>
      <th width="10" align="center" scope="col">R</th>
      </tr>
    <tr>
       <?php $i=1; do{ ?> 
      <td align="center" scope="col"><?php echo $i++?></td>
      <td scope="col"><?php echo $row_guru52['Name']?></td>
      <td align="center" scope="col"><?php echo $row_guru52['Job_Title']?></td>
      <td align="center" scope="col"><?php echo $row_guru52['Grade']?></td>
      <td align="center" scope="col"><?php echo $row_guru52['gender_set_L']?></td>
      <td align="center" scope="col"><?php echo $row_guru52['gender_set_P']?></td>
      <td align="center" scope="col"><?php echo $row_guru52['IC_OLD']?></td>
      <td align="center" scope="col"><?php echo $row_guru52['IC_No']?></td>
      <td align="center" scope="col"><?php echo $row_guru52['kelulusan']?></td>
      <td align="center" scope="col"><?php echo $row_guru52['bank1']?></td>
      <td align="center" scope="col"><?php echo $row_guru52['epf']?></td>
      <td scope="col"><?php  if($row_guru52['Join_Date']!='' ){ echo date("d/m/Y", strtotime($row_guru52['Join_Date'])); };?></td>
      <td align="center" scope="col"><?php echo $row_guru52['jbk'];?></td>
      <td align="center" scope="col"><?php echo $row_guru52['bk'];?></td>
      <td align="center" scope="col"><?php echo $row_guru52['kn'];?></td>
      <td align="center" scope="col"><?php echo $row_guru52['jb'];?></td>
      <td align="center" scope="col"><?php echo $row_guru52['r'];?></td>
      <td align="left" scope="col"><?php echo $row_guru52['Address1'].', '. $row_guru52['Postcode'].', '.$row_guru52['City'].', '. $row_guru52['State']?></td>
      <td align="center" scope="col"><?php echo $row_guru52['Mobile_Tel']?></td>
      </tr>
       <?php }while($row_guru52=mysql_fetch_assoc($query_guru52)) ?>

    <tr>
      <td align="center" scope="col">&nbsp;</td>
      <td scope="col"><strong>JUMLAH GURU</strong></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td align="center"  scope="col"><?php echo $row_sum52['sum_laki']?></td>
      <td align="center" scope="col"><?php echo $row_sum52['sum_pom']?></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo $row_sum52['sjbk']?></td>
      <td align="center" scope="col"><?php echo $row_sum52['sbk']?></td>
      <td align="center" scope="col"><?php echo $row_sum52['skn']?></td>
      <td align="center" scope="col"><?php echo $row_sum52['sjb']?></td>
      <td align="center" scope="col"><?php echo $row_sum52['sr']?></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" scope="col">&nbsp;</td>
      <td scope="col"><strong>JUMLAH GURU KESELURUHAN</strong></td>
      <td colspan="2" scope="col">&nbsp;</td>
      <td colspan="2" align="center" scope="col"><?php echo $row_sum52['sum_pom']+$row_sum52['sum_laki'] ;?></td>
      <td colspan="13" scope="col">&nbsp;</td>
      </tr>
  </table>
  <br />
  <table width="363" cellpadding="1" class="tablesmall">
    <tr>
      <th width="21" align="right" scope="col">BIL</th>
      <th width="245" scope="col">NAMA GURU</th>
      <th width="81" colspan="2" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <td align="right" scope="col">&nbsp;</td>
      <td scope="col">JUMLAH GURU LELAKI</td>
      <td colspan="2" align="center" scope="col"><?php echo $row_total52['total_laki'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">&nbsp;</td>
      <td scope="col">JUMLAH GURU PEREMPUAN</td>
      <td colspan="2" align="center" scope="col"><?php echo $row_total52['total_pom'] ?></td>
      </tr>
    <tr>
      <td align="right" scope="col">&nbsp;</td>
      <td scope="col">JUMLAH GURU KESELURUHAN</td>
      <td colspan="2" align="center" scope="col"><?php echo $row_total52['total_laki']+$row_total52['total_pom'] ?></td>
    </tr>
  </table>
  <br />
  <table width="600" border="0" cellpadding="1" class="table_none">
    <tr>
      <td width="192">GURU KAFA LELAKI</td>
      <td width="41"><?php echo $row_total522['sum_laki_kafa']?></td>
      <td width="121">&nbsp;</td>
      <td width="183">GURU RAKYAT) LELAKI</td>
      <td width="41"><?php echo $row_total522['sum_laki_rak']?></td>
      </tr>
    <tr>
      <td>GURU KAFA PEREMPUAN</td>
      <td><?php echo $row_total522['sum_pom_kafa']?></td>
      <td>&nbsp;</td>
      <td>GURU RAKYAT PEREMPUAN</td>
      <td><?php echo $row_total522['sum_pom_rak']?></td>
      </tr>
</table>
  <p>*Gred Jawatan Sila Rujuk PBSRA 2<br />
    * J/B/K = 3 Sumber ( Jakim + Baitulmal + Kerajaan Negeri )<br />
    * B/K = 2 sumber ( Baitulmal + Kerajaan Negeri )<br />
    * KN 
     = 1 sumber ( Kerajaan negeri )<br />
     *R = 1 Sumber (PIBG)
     <br />
  </p>
<p>&nbsp;</p>
  <br /><br />
</div>
<div class="clr"></div>
</div>
