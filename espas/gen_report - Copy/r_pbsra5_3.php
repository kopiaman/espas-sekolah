<?php
$month=$_SESSION['pmonth'];
$sql_guru53= "SELECT
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
IF(staff_info.Elaun='R', 1, 0) AS r,
staff_move.reason AS move_reason,
staff_move.start AS move_start,
staff_move.end AS move_end
FROM staff_info
LEFT JOIN job ON staff_info.Grade = job.job_grade
INNER JOIN staff_move ON staff_info.ID=staff_move.staff
GROUP BY staff_info.Name
HAVING month(staff_move.end)>=$month
";
$query_guru53=mysql_query($sql_guru53,$conn);
$row_guru53=mysql_fetch_assoc($query_guru53);

//sum jantina dan elaun
$sql_sum53= "SELECT 
coalesce(sum(staff_info.Gender='L'), 0) AS sum_laki,
coalesce(sum(staff_info.Gender='P'), 0) AS sum_pom,
staff_move.reason AS move_reason,
staff_move.start AS move_start,
staff_move.end AS move_end
FROM staff_info
INNER JOIN staff_move ON staff_info.ID=staff_move.staff
WHERE month(staff_move.end)>=$month
";
$query_sum53=mysql_query($sql_sum53,$conn);
$row_sum53=mysql_fetch_assoc($query_sum53);
?>
<?php

?>
<div class="whole_landscape">
<div class="header_report_right">PBSRA 5(3)</div>
  <div class="pbsra1-topleft"></div>
<div class="pbsra1-topright"></div>
<div class="clr"><strong>SENARAI GURU-GURU DAN PEKERJA-PEKERJA</strong></div>
<p class="title">PENYATA BULANAN</p>
<p><strong>3.SENARAI NAMA GURU MASUK, BERPINDAH, BERHENTI, CUTI BERSALIN, UMRAH, HAJI DAN SEBAGAINYA PADA BULAN INI</strong></p>
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
      <th width="60" rowspan="2" scope="col">NAMA BANK &amp;<br />
        NO AKAUN</th>
      <th width="40" rowspan="2" scope="col">NO KWSP</th>
      <th width="30" rowspan="2" align="center" scope="col">TARIKH <br />
        LANTIKAN</th>
      <th colspan="5" scope="col">ELAUN</th>
      <th width="80" rowspan="2" scope="col">ALAMAT</th>
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
       <?php if($row_guru53['move_reason']){ ?>
      <?php $i=1; do{ ?>
      <td align="center" scope="col"><?php echo $i++?></td>
      <td scope="col"><?php echo $row_guru53['Name']?><br />
   
        (<?php echo $row_guru53['move_reason']?> <?php echo 'Mulai '.date("d/m/Y", strtotime($row_guru53['move_start'])) ?>        
         - <?php echo date("d/m/Y", strtotime($row_guru53['move_end']))?>)
      
        </td>
      <td align="center" scope="col"><?php echo $row_guru53['Job_Title']?></td>
      <td align="center" scope="col"><?php echo $row_guru53['Grade']?></td>
      <td align="center" scope="col"><?php echo $row_guru53['gender_set_L']?></td>
      <td align="center" scope="col"><?php echo $row_guru53['gender_set_P']?></td>
      <td align="center" scope="col"><?php echo $row_guru53['IC_OLD']?></td>
      <td align="center" scope="col"><?php echo $row_guru53['IC_No']?></td>
      <td align="center" scope="col"><?php echo $row_guru53['bank1']?></td>
      <td align="center" scope="col"><?php echo $row_guru53['epf']?></td>
      <td align="center" scope="col"><?php  if($row_guru53['Join_Date']){ echo date("d/m/Y", strtotime($row_guru53['Join_Date'])); };?></td>
      <td align="center" scope="col"><?php echo $row_guru53['jbk'];?></td>
      <td align="center" scope="col"><?php echo $row_guru53['bk'];?></td>
      <td align="center" scope="col"><?php echo $row_guru53['kn'];?></td>
      <td align="center" scope="col"><?php echo $row_guru53['jb'];?></td>
      <td align="center" scope="col"><?php echo $row_guru53['r'];?></td>
      <td align="left" scope="col"><?php echo $row_guru53['Address1'].', '. $row_guru53['Postcode'].', '.$row_guru53['City'].', '. $row_guru53['State']?></td>
      <td align="center" scope="col"><?php echo $row_guru53['Mobile_Tel']?></td>
    </tr>
    <?php }while($row_guru53=mysql_fetch_assoc($query_guru53)) ?>
    <?php } ?> 
    <tr>
      <td align="center" scope="col">&nbsp;</td>
      <td scope="col"><strong>JUMLAH GURU</strong></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td align="center"  scope="col"><?php echo $row_sum53['sum_laki']?></td>
      <td align="center" scope="col"><?php echo $row_sum53['sum_pom']?></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo $row_sum53['sjbk']?></td>
      <td align="center" scope="col"><?php echo $row_sum53['sbk']?></td>
      <td align="center" scope="col"><?php echo $row_sum53['skn']?></td>
      <td align="center" scope="col"><?php echo $row_sum53['sjb']?></td>
      <td align="center" scope="col"><?php echo $row_sum53['sr']?></td>
      <td scope="col">&nbsp;</td>
      <td scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" scope="col">&nbsp;</td>
      <td scope="col"><strong>JUMLAH GURU KESELURUHAN</strong></td>
      <td colspan="2" scope="col">&nbsp;</td>
      <td colspan="2" align="center" scope="col"><?php echo $row_sum53['sum_pom']+$row_sum53['sum_laki'] ;?></td>
      <td colspan="12" scope="col">&nbsp;</td>
    </tr>
  </table>
  <br />
  <br />
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
