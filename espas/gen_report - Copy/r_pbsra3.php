<?php include('inc_pbsra0.php'); include('inc_pbsra3.php') ;
?>
<div class="whole">
<div class="header_report_right">PBSRA 3</div>
<div class="pbsra1-mid">
<p class="title2">BILANGAN MURID</p>
<p class="title">PENYATA BULANAN</p>
<div class="box_med1">
  <table width="339" cellpadding="1" class="tablemed1">
    <tr>
      <td colspan="4" scope="col">TAHUN SATU (1)</td>
    </tr>
    <tr>
      <th width="257" scope="col">SESI PAGI</th>
      <th width="40" align="center" scope="col">L</th>
      <th width="46" align="center" scope="col">P</th>
      <th width="68" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
    <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun1_pagi['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_pagi['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_pagi['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun1_pagi=mysql_fetch_assoc($query_tahun1_pagi))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" ><?php echo $row_tahun1_Pagisum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr> 
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_murid'] ?></td>
    </tr> 
    <tr>
      <th align="center" scope="col">SESI PETANG</th>
      <th align="center" scope="col">L</th>
      <th align="center" scope="col">P</th>
      <th align="center" scope="col">JUMLAH</th>
    </tr>
     <tr>
    <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun1_Petang['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Petang['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Petang['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Petang['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun1_Petang=mysql_fetch_assoc($query_tahun1_Petang))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo  $row_tahun1_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
<td align="center" scope="col"><?php echo $row_tahun1_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Petangsum['bil_murid'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col"><strong>JUMLAH BESAR</strong></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_laki']+ $row_tahun1_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_pom'] + $row_tahun1_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_murid']+ $row_tahun1_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>
</div>
<div class="box_med1">
  <table width="339" cellpadding="1" class="tablemed1">
    <tr>
      <td colspan="4" scope="col">TAHUN DUA (2)</td>
    </tr>
    <tr>
      <th width="257" scope="col">SESI PAGI</th>
      <th width="40" align="center" scope="col">L</th>
      <th width="46" align="center" scope="col">P</th>
      <th width="68" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun2_pagi['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_pagi['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_pagi['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun2_pagi=mysql_fetch_assoc($query_tahun2_pagi))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" class="row_topbottom_bold"><?php echo $row_tahun2_Pagisum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_murid'] ?></td>
    </tr>
    <tr>
      <th align="center" scope="col">SESI PETANG</th>
      <th align="center" scope="col">L</th>
      <th align="center" scope="col">P</th>
      <th align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun2_Petang['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Petang['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Petang['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Petang['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun2_Petang=mysql_fetch_assoc($query_tahun2_Petang))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo  $row_tahun2_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun2_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Petangsum['bil_murid'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col"><strong>JUMLAH BESAR</strong></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_laki']+ $row_tahun2_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_pom'] + $row_tahun2_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_murid']+ $row_tahun2_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>
</div>
<div class="box_med1">
  <table width="339" cellpadding="1" class="tablemed1">
    <tr>
      <td colspan="4" scope="col">TAHUN TIGA (3)</td>
    </tr>
    <tr>
      <th width="257" scope="col">SESI PAGI</th>
      <th width="40" align="center" scope="col">L</th>
      <th width="46" align="center" scope="col">P</th>
      <th width="68" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun3_pagi['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_pagi['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_pagi['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun3_pagi=mysql_fetch_assoc($query_tahun3_pagi))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" class="row_topbottom_bold"><?php echo $row_tahun3_Pagisum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_murid'] ?></td>
    </tr>
    <tr>
      <th align="center" scope="col">SESI PETANG</th>
      <th align="center" scope="col">L</th>
      <th align="center" scope="col">P</th>
      <th align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun3_Petang['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Petang['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Petang['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Petang['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun3_Petang=mysql_fetch_assoc($query_tahun3_Petang))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo  $row_tahun3_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun3_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Petangsum['bil_murid'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col"><strong>JUMLAH BESAR</strong></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_laki']+ $row_tahun3_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_pom'] + $row_tahun3_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_murid']+ $row_tahun3_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>
</div>
<div class="box_med1">
  <table width="340" cellpadding="1" class="tablemed1">
    <tr>
      <td colspan="4" scope="col">TAHUN EMPAT (4)</td>
    </tr>
    <tr>
      <th width="257" scope="col">SESI PAGI</th>
      <th width="40" align="center" scope="col">L</th>
      <th width="46" align="center" scope="col">P</th>
      <th width="68" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun4_pagi['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_pagi['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_pagi['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun4_pagi=mysql_fetch_assoc($query_tahun4_pagi))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" class="row_topbottom_bold"><?php echo $row_tahun4_Pagisum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_murid'] ?></td>
    </tr>
    <tr>
      <th align="center" scope="col">SESI PETANG</th>
      <th align="center" scope="col">L</th>
      <th align="center" scope="col">P</th>
      <th align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun4_Petang['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Petang['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Petang['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Petang['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun4_Petang=mysql_fetch_assoc($query_tahun4_Petang))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo  $row_tahun4_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun4_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Petangsum['bil_murid'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col"><strong>JUMLAH BESAR</strong></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_laki']+ $row_tahun4_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_pom'] + $row_tahun4_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_murid']+ $row_tahun4_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>
</div>
<div class="box_med1">
  <table width="339" cellpadding="1" class="tablemed1">
    <tr>
      <td colspan="5" scope="col">TAHUN LIMA (5)</td>
    </tr>
    <tr>
      <th width="257" scope="col">SESI PAGI</th>
      <th width="40" align="center" scope="col">L</th>
      <th width="46" align="center" scope="col">P</th>
      <th width="68" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun5_pagi['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_pagi['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_pagi['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun5_pagi=mysql_fetch_assoc($query_tahun5_pagi))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" class="row_topbottom_bold"><?php echo $row_tahun5_Pagisum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_murid'] ?></td>
    </tr>
    <tr>
      <th align="center" scope="col">SESI PETANG</th>
      <th align="center" scope="col">L</th>
      <th align="center" scope="col">P</th>
      <th align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun5_Petang['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Petang['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Petang['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Petang['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun5_Petang=mysql_fetch_assoc($query_tahun5_Petang))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo  $row_tahun5_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun5_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Petangsum['bil_murid'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col"><strong>JUMLAH BESAR</strong></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_laki']+ $row_tahun5_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_pom'] + $row_tahun5_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_murid']+ $row_tahun5_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>
</div>
<div class="box_med1">
  <table width="339" cellpadding="1" class="tablemed1">
    <tr>
      <td colspan="6" scope="col">TAHUN ENAM (6)</td>
    </tr>
    <tr>
     <th width="257" scope="col">SESI PAGI</th>
      <th width="40" align="center" scope="col">L</th>
      <th width="46" align="center" scope="col">P</th>
      <th width="68" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun6_pagi['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_pagi['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_pagi['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun6_pagi=mysql_fetch_assoc($query_tahun6_pagi))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" class="row_topbottom_bold"><?php echo $row_tahun6_Pagisum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_murid'] ?></td>
    </tr>
    <tr>
      <th align="center" scope="col">SESI PETANG</th>
      <th align="center" scope="col">L</th>
      <th align="center" scope="col">P</th>
      <th align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun6_Petang['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Petang['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Petang['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Petang['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun6_Petang=mysql_fetch_assoc($query_tahun6_Petang))?>
    <tr>
      <td align="right" scope="col">KELAS</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col">&nbsp;</td>
      <td align="center" scope="col"><?php echo  $row_tahun6_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_tahun6_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Petangsum['bil_murid'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col"><strong>JUMLAH BESAR</strong></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_laki']+ $row_tahun6_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_pom'] + $row_tahun6_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_murid']+ $row_tahun6_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>
</div>
<div class="clr"></div>
<div class="box_med1">
  <table width="339" cellpadding="1" class="tablemed1">
    <tr>
      <td colspan="4" scope="col">JUMLAH MURID KESELURUHAN</td>
    </tr>
    <tr>
      <th width="257" scope="col">SESI PAGI</th>
      <th width="40" align="center" scope="col">L</th>
      <th width="46" align="center" scope="col">P</th>
      <th width="68" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <td scope="col">TAHUN 1</td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_murid'] ?></td>
    </tr>
       <tr>
      <td scope="col">TAHUN 2</td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_murid'] ?></td>
    </tr>
       <tr>
      <td scope="col">TAHUN 3</td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_murid'] ?></td>
    </tr>
       <tr>
      <td scope="col">TAHUN 4</td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_murid'] ?></td>
    </tr>
       <tr>
      <td scope="col">TAHUN 5</td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_murid'] ?></td>
    </tr>
       <tr>
      <td scope="col">TAHUN 6</td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_murid'] ?></td>
    </tr>
 
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_sum['bil_laki_pg'] ?></td>
      <td align="center" scope="col"><?php echo $row_sum['bil_pom_pg'] ?></td>
      <td align="center" scope="col"><?php echo $row_sum['jum_pagi'] ?></td>
    </tr>
    <tr>
      <th align="center" scope="col">SESI PETANG</th>
      <th align="center" scope="col">L</th>
      <th align="center" scope="col">P</th>
      <th align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <td scope="col">TAHUN 1</td>
	  <td align="center" scope="col"><?php echo $row_tahun1_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Petangsum['bil_murid'] ?></td>
    </tr>
        <tr>
      <td scope="col">TAHUN 2</td>
	  <td align="center" scope="col"><?php echo $row_tahun2_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Petangsum['bil_murid'] ?></td>
    </tr>
        <tr>
      <td scope="col">TAHUN 3</td>
	  <td align="center" scope="col"><?php echo $row_tahun3_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Petangsum['bil_murid'] ?></td>
    </tr>
        <tr>
      <td scope="col">TAHUN 4</td>
	  <td align="center" scope="col"><?php echo $row_tahun4_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Petangsum['bil_murid'] ?></td>
    </tr>
        <tr>
      <td scope="col">TAHUN 5</td>
	  <td align="center" scope="col"><?php echo $row_tahun5_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Petangsum['bil_murid'] ?></td>
    </tr>
        <tr>
      <td scope="col">TAHUN 6</td>
	  <td align="center" scope="col"><?php echo $row_tahun6_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Petangsum['bil_murid'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col">JUMLAH KECIL</td>
      <td align="center" scope="col"><?php echo $row_sum['bil_laki_ptg'] ?></td>
      <td align="center" scope="col"><?php echo $row_sum['bil_pom_ptg'] ?></td>
      <td align="center" scope="col"><?php echo $row_sum['jum_ptg'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col"><strong>JUMLAH BESAR</strong></td>
      <td align="center" scope="col"><strong><?php echo $row_sum['jum_laki'] ?></strong></td>
      <td align="center" scope="col"><strong><?php echo $row_sum['jum_pom'] ?></strong></td>
      <td align="center" scope="col"><strong><?php echo $row_sum['total_pelajar'] ?></strong></td>
    </tr>
  </table>
</div>
<div class="box_med1">
  <table width="339" cellpadding="1" class="tablemed1">
    <tr>
      <td colspan="4" scope="col">JUMLAH KELAS KESELURUHAN </td>
    </tr>
    <tr>
      <th width="257" scope="col">JUMLAH KELAS</th>
      <th width="40" align="center" scope="col">PG</th>
      <th width="46" align="center" scope="col">PTG</th>
      <th width="68" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <td scope="col">TAHUN 1</td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum_sesi['sum_kelas']+$row_tahun1_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td scope="col">TAHUN 2</td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum_sesi['sum_kelas']+$row_tahun2_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td scope="col">TAHUN 3</td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum_sesi['sum_kelas']+$row_tahun3_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td scope="col">TAHUN 4</td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum_sesi['sum_kelas']+$row_tahun4_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td scope="col">TAHUN 5</td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum_sesi['sum_kelas']+$row_tahun5_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td scope="col">TAHUN 6</td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum_sesi['sum_kelas']+$row_tahun6_Petangsum_sesi['sum_kelas'] ?></td>
    </tr>
    <tr>
      <td align="right" scope="col"><strong>JUMLAH BESAR</strong></td>
      <td align="center" scope="col"><?php echo $row_sum_kelas_pg['bil_kelas_pagi']?></td>
      <td align="center" scope="col"><?php echo $row_sum_kelas_ptg['bil_kelas_ptg']?></td>
      <td align="center" scope="col"><?php echo $row_sum_kelas_pg['bil_kelas_pagi']+$row_sum_kelas_ptg['bil_kelas_ptg']?></td>
    </tr>
  </table>
  <br />
  <table width="339" border="0" cellpadding="1" class="table_none">
    <tr>
      <th width="235" scope="col">JUMLAH KEDATANGAN SEBULAN</th>
      <th width="22" scope="col">:</th>
      <td width="68" scope="col"><?php echo $month_attend ?></td>
    </tr>
    <tr><?php ; ?>
      <th>HITUNG PANJANG KEDATANGAN SEBULAN</th>
      <th>:</th>
      <td><?php echo $avg_at ?></td>
    </tr>
    <tr>
      <th>PERATUS KEDATANGAN</th>
      <th>:</th>
      <td><?php echo $peratus_datang.'%' ?></td>
    </tr>
    <tr>
      <th>HITUNG PANJANG RAMAI MURID</th>
      <th>:</th>
      <td><?php echo $murid_avg ?></td>
    </tr>
    <tr>
      <th>RAMAI MURID HUJUNG BULAN LEPAS</th>
      <th>:</th>
      <td><?php 
	 
	  echo $jumlahsemua ;
	  ?></td>
    </tr>
    <tr>
      <th>RAMAI MURID YANG MASUK</th>
      <th>:</th>
      <td><?php echo $masuk ?></td>
    </tr>
    <tr>
      <th>RAMAI MURID YANG KELUAR</th>
      <th>:</th>
      <td><?php echo $keluar ?></td>
    </tr>
    <tr>
      <th>RAMAI MURID PADA HUJUNG BULAN INI</th>
      <th>:</th>
      <td><?php echo $murid_bulanini ?></td>
    </tr>
    <tr>
      <th>BILANGAN HARI BELAJAR BULAN INI</th>
      <th>:</th>
      <td><?php echo $teach_day ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
<p>&nbsp;</p>
  <br /><br />
</div>
<div class="clr"></div>
</div>