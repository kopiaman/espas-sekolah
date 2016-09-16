<?php
$sql_guru4= "
SELECT
Name AS name,
IC_No AS ic,
Job_Title AS job,
Mobile_Tel AS tel,
kelulusan,
course_main AS course
FROM staff_info
ORDER BY Job_Title DESC";
$query_guru4=mysql_query($sql_guru4,$conn);
$row_guru4=mysql_fetch_assoc($query_guru4);
?>
<div class="whole">
  <h3>SENARAI GURU-GURU</h3>
<table cellpadding="5"  border="1" style="font-size:12px">
  <tr>
    <th align="right" scope="col">BIL</th>
    <th scope="col">NAMA</th>
    <th scope="col">JAWATAN DI SEKOLAH</th>
    <th scope="col">KAD PENGENALAN</th>
    <th scope="col">KELULUSAN</th>
    <th scope="col">MATA PELAJARAN</th>
    <th scope="col">NO TEL</th>
  </tr>
  <tr>
    <?php $i=1; do{ ?>
    <td align="right" scope="col"><?php echo $i++?></td>
    <td scope="col"><?php echo $row_guru4['name']?></td>
    <td scope="col"><?php echo $row_guru4['job']?></td>
    <td scope="col"><?php echo $row_guru4['ic']?></td>
    <td scope="col"><?php echo $row_guru4['kelulusan']?></td>
    <td scope="col"><?php echo $row_guru4['course']?></td>
    <td scope="col"><?php echo $row_guru4['tel']?></td>
  </tr>
  <?php }while($row_guru4=mysql_fetch_assoc($query_guru4)) ;?>
</table>
<div class="clr"></div>
</div>