<?php
$sql_guru51= "SELECT
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
staff_info.Mobile_Tel
FROM staff_info
INNER JOIN job ON staff_info.Grade = job.job_grade
WHERE staff_info.Job_Type='Guru' AND (staff_info.Grade!='KAFA' AND staff_info.Grade!='RAKYAT')
GROUP BY staff_info.Name
ORDER BY job.ID";
$query_guru51=mysql_query($sql_guru51,$conn);
$row_guru51=mysql_fetch_assoc($query_guru51);


$sql_sum51= "SELECT 
coalesce(sum(staff_info.Gender='L'), 0) AS sum_laki,
coalesce(sum(staff_info.Gender='P'), 0) AS sum_pom
FROM staff_info
WHERE staff_info.Job_Type='Guru' AND (staff_info.Grade!='KAFA' AND staff_info.Grade!='RAKYAT')
";
$query_sum51=mysql_query($sql_sum51,$conn);
$row_sum51=mysql_fetch_assoc($query_sum51);
?>
<?php

$sql_cat_l= "SELECT
Gender,
coalesce(sum(Grade='DG41' OR Grade='DGA34' OR Grade='DGA32' OR Grade='DGA29'), 0) AS dg,
coalesce(sum(Grade='DGA29(K)' OR Grade='DB27(K)' OR Grade='DB17(K)'), 0) AS dgdb_k,
coalesce(sum(Grade LIKE '%N17%' OR Grade='N1' OR Grade='R1'), 0) AS `others`
FROM staff_info
WHERE Gender='L' AND staff_info.Job_Type='Guru' 
";
$query_cat_l=mysql_query($sql_cat_l,$conn);
$row_cat_l=mysql_fetch_assoc($query_cat_l);

$sql_cat_p= "SELECT
Gender,
coalesce(sum(Grade='DG41' OR Grade='DGA34' OR Grade='DGA32' OR Grade='DGA29'), 0) AS dg,
coalesce(sum(Grade='DGA29(K)' OR Grade='DB27(K)' OR Grade='DB17(K)'), 0) AS dgdb_k,
coalesce(sum(Grade='DG27'), 0) AS dg27,
coalesce(sum(Grade LIKE '%N17%' OR Grade='N1' OR Grade='R1'), 0) AS `others`
FROM staff_info
WHERE Gender='P' AND staff_info.Job_Type='Guru' 
";
$query_cat_p=mysql_query($sql_cat_p,$conn);
$row_cat_p=mysql_fetch_assoc($query_cat_p);
?>
<div class="whole_landscape">
<div class="header_report_right">PBSRA 5(1)</div>
  <div class="pbsra1-topleft"></div>
<div class="pbsra1-topright"></div>
<div class="clr"><strong>SENARAI GURU-GURU DAN PEKERJA-PEKERJA</strong></div>
<p class="title">PENYATA BULANAN</p>
<p><strong>1.SENARAI NAMA GURU LANTIKAN JAIS (TETAP/KONTRAK) </strong></p>
<div class="pbsra1-mid">
  <table width="1100" cellpadding="1" class="tablesmall">
    <tr>
      <th width="29" rowspan="2" align="right" scope="col">BIL</th>
      <th width="147" rowspan="2" scope="col">NAMA GURU</th>
      <th width="55" rowspan="2" align="center" scope="col">JAWATAN DI SEKOLAH</th>
      <th width="37" rowspan="2" align="center" scope="col">GRED</th>
      <th colspan="2" align="center" scope="col">JANTINA</th>
      <th colspan="2" align="center" scope="col">NO KP</th>
      <th width="63" rowspan="2" align="center" scope="col">KELULUSAN</th>
      <th width="76" rowspan="2" align="center" scope="col">NAMA BANK &amp; NO AKAUN</th>
      <th width="36" rowspan="2" align="center" scope="col">NO KWSP</th>
      <th width="55" rowspan="2" align="center" scope="col">TARIKH LANTIKAN</th>
      <th width="55" rowspan="2" align="center" scope="col">TARIKH BERSARA</th>
      <th width="55" rowspan="2" align="center" scope="col">TARIH P'GRKAN GAJI</th>
      <th width="100" rowspan="2" align="center" scope="col">ALAMAT</th>
      <th width="55" rowspan="2" align="center" scope="col">NO TEL</th>
      </tr>
    <tr>
      <th width="15" scope="col">L</th>
      <th width="15" scope="col">P</th>
      <th width="47" scope="col">LAMA</th>
      <th width="67" scope="col">BARU</th>
      </tr>
    <tr>
    <?php $i=1; do{ ?>
      <td align="right" scope="col"><?php echo $i++?></td>
      <td scope="col"><?php echo $row_guru51['Name']?></td>
      <td align="center" scope="col"><?php echo $row_guru51['Job_Title']?></td>
      <td align="center" scope="col"><?php echo $row_guru51['Grade']?></td>
      <td align="center" scope="col"><?php echo $row_guru51['gender_set_L']?></td>
      <td align="center" scope="col"><?php echo $row_guru51['gender_set_P']?></td>
      <td align="center" scope="col"><?php echo $row_guru51['IC_OLD']?></td>
      <td align="center" scope="col"><?php echo $row_guru51['IC_No']?></td>
      <td align="center" scope="col"><?php echo $row_guru51['kelulusan']?></td>
      <td align="center" scope="col"><?php echo $row_guru51['bank1']?></td>
      <td align="center" scope="col"><?php echo $row_guru51['epf']?></td>
      <td align="center" scope="col"><?php  if($row_guru51['Join_Date']!=''){ echo date("d/m/Y", strtotime($row_guru51['Join_Date'])); };?></td>
      <td align="center" scope="col"><?php  if($row_guru51['End_Date']!=''){ echo date("d/m/Y", strtotime($row_guru51['End_Date'])); };?></td>
      <td align="center" scope="col"><?php  echo $row_guru51['Gerak_Date'] ?></td>
      <td align="left" scope="col"><?php echo $row_guru51['Address1'].', '. $row_guru51['Postcode'].', '.$row_guru51['City'].', '. $row_guru51['State']?></td>
      <td align="center" scope="col"><?php echo $row_guru51['Mobile_Tel']?></td>
      </tr>
      <?php }while($row_guru51=mysql_fetch_assoc($query_guru51)) ?>
    <tr>
      <td align="right" scope="col">&nbsp;</td>
      <td scope="col"><strong>JUMLAH GURU</strong></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td align="center"  scope="col"><?php echo $row_sum51['sum_laki']?></td>
      <td align="center" scope="col"><?php echo $row_sum51['sum_pom']?></td>
      <td align="center" scope="col"></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" scope="col">&nbsp;</td>
      <td scope="col"><strong>JUMLAH GURU KESELURUHAN</strong></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td colspan="2" scope="col" align="center"><?php echo ($row_sum51['sum_pom']+$row_sum51['sum_laki'])?></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
    </tr>
  </table>
  <p>GURU DG(TETAP) </p>
  <table width="1004" border="0" cellpadding="1" class="table_none">
    <tr>
      <td width="149">GURU DG(TETAP) LELAKI</td>
      <td width="51"><?php echo $row_cat_l['dg'] ?></td>
      <td width="136">&nbsp;</td>
      <td width="163">GURU DG/DB (K) LELAKI</td>
      <td width="51"><?php echo $row_cat_l['dgdb_k'] ?></td>
      <td width="127">&nbsp;</td>
      <td width="247">KAKITANGAN N17,N17(K), N17(S), N1.R1 LELAKI</td>
      <td width="46"><?php echo $row_cat_l['others'] ?></td>
    </tr>
    <tr>
      <td>GURU DG(TETAP) PEREMPUAN</td>
      <td><?php echo $row_cat_p['dg'] ?></td>
      <td>&nbsp;</td>
      <td>GURU DG/DB (K) PEREMPUAN</td>
      <td><?php echo $row_cat_p['dgdb_k'] ?></td>
      <td>&nbsp;</td>
      <td>KAKITANGAN N17,N17(K), N17(S), N1.R1 PEREMPUAN</td>
      <td><?php echo $row_cat_p['others'] ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>GURU DG27 PEREMPUAN</td>
      <td><?php echo $row_cat_p['dg27'] ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p><br />
  </p>
  <p>&nbsp;</p>
  <br /><br />
</div>
<div class="clr"></div>
</div>