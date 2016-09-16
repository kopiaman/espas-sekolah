<?php include('inc_pbsra0.php'); include('inc_pbsra3.php') ;
?>
<div class="whole">
	<div class="header_report_right">PBSRA 3</div>
	<div class="pbsra1-mid">

    <p class="title2">BILANGAN MURID</p>
    <p class="title">PENYATA BULANAN</p>

	<div class="box_med1">
  <table width="339" cellpadding="1" class="tablemed1" >
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
    
    <?php //tambah row kosong daripada darjah 1 pagi
	$jumlahKelasDarjah1Pagi= $row_tahun1_Pagisum_sesi['sum_kelas']; $rowkosongDarjah1Pagi=9-$jumlahKelasDarjah1Pagi?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah1Pagi--; }while($rowkosongDarjah1Pagi!=0) ?>
    
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
    
        <?php //tambah row kosong daripada darjah 1 ptg
	$jumlahKelasDarjah1Ptg= $row_tahun1_Petangsum_sesi['sum_kelas']; $rowkosongDarjah1Ptg=9-$jumlahKelasDarjah1Ptg?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah1Ptg--; }while($rowkosongDarjah1Ptg!=0) ?>
   
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
  <p>&nbsp;</p>
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
    
        <?php //tambah row kosong daripada darjah 2 pagi
	$jumlahKelasDarjah2Pagi= $row_tahun2_Pagisum_sesi['sum_kelas']; $rowkosongDarjah2Pagi=9-$jumlahKelasDarjah2Pagi?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah2Pagi--; }while($rowkosongDarjah2Pagi!=0) ?>
    
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
    
      <?php //tambah row kosong daripada darjah 2 ptg
	$jumlahKelasDarjah2Ptg= $row_tahun2_Petangsum_sesi['sum_kelas']; $rowkosongDarjah2Ptg=9-$jumlahKelasDarjah2Ptg?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah2Ptg--; }while($rowkosongDarjah2Ptg!=0) ?>
   
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
    <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
   <p>&nbsp;</p>
  <p>&nbsp;</p>
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
    
      <?php //tambah row kosong daripada darjah 3pagi
	$jumlahKelasDarjah3Pagi= $row_tahun3_Pagisum_sesi['sum_kelas']; $rowkosongDarjah3Pagi=9-$jumlahKelasDarjah3Pagi?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah3Pagi--; }while($rowkosongDarjah3Pagi!=0) ?>
    
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
    
          <?php //tambah row kosong daripada darjah 3 ptg
	$jumlahKelasDarjah3Ptg= $row_tahun3_Petangsum_sesi['sum_kelas']; $rowkosongDarjah3Ptg=9-$jumlahKelasDarjah3Ptg?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah3Ptg--; }while($rowkosongDarjah3Ptg!=0) ?>
   
   
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div class="box_med1"></div>
<div class="box_med1"></div>
<div class="box_med2">
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
    
          <?php //tambah row kosong daripada darjah 4 pagi
	$jumlahKelasDarjah4Pagi= $row_tahun4_Pagisum_sesi['sum_kelas']; $rowkosongDarjah4Pagi=9-$jumlahKelasDarjah4Pagi?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah4Pagi--; }while($rowkosongDarjah4Pagi!=0) ?>
   
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
    
    <?php //tambah row kosong daripada darjah 4 ptg
	$jumlahKelasDarjah4Ptg= $row_tahun4_Petangsum_sesi['sum_kelas']; $rowkosongDarjah4Ptg=9-$jumlahKelasDarjah4Ptg?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah4Ptg--; }while($rowkosongDarjah4Ptg!=0) ?>
   
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
  <p>&nbsp;</p>
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
    
          <?php //tambah row kosong daripada darjah 5pagi
	$jumlahKelasDarjah5Pagi= $row_tahun5_Pagisum_sesi['sum_kelas']; $rowkosongDarjah5Pagi=9-$jumlahKelasDarjah5Pagi?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah5Pagi--; }while($rowkosongDarjah5Pagi!=0) ?>


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
    
    
  <?php //tambah row kosong daripada darjah 5 ptg
	$jumlahKelasDarjah5Ptg= $row_tahun5_Petangsum_sesi['sum_kelas']; $rowkosongDarjah5Ptg=9-$jumlahKelasDarjah5Ptg?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah5Ptg--; }while($rowkosongDarjah5Ptg!=0) ?>
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
    <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

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
    
          <?php //tambah row kosong daripada darjah 6pagi
	$jumlahKelasDarjah6Pagi= $row_tahun6_Pagisum_sesi['sum_kelas']; $rowkosongDarjah6Pagi=9-$jumlahKelasDarjah6Pagi?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah6Pagi--; }while($rowkosongDarjah6Pagi!=0) ?>


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
    
    
  <?php //tambah row kosong daripada darjah 6 ptg
	$jumlahKelasDarjah6Ptg= $row_tahun6_Petangsum_sesi['sum_kelas']; $rowkosongDarjah6Ptg=9-$jumlahKelasDarjah6Ptg?>
    <?php do { ?><tr> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col"></td> <td align="center" scope="col">0</td> </tr>
   <?php $rowkosongDarjah6Ptg--; }while($rowkosongDarjah6Ptg!=0) ?>
   
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div> <!--box_med1 -->

<div class="clr"></div>

<div class="box_med1"><br />
  <table width="565" border="0" cellpadding="5" class="table_none">
    <tr><?php ; ?>
      <th width="267" align="left">HITUNG PANJANG KEDATANGAN SEBULAN</th>
      <th width="68">:</th>
      <td width="192"><table width="39%" border="1" cellpadding="5">
        <tr>
            <td><?php echo $avg_at ?><br /></td>
            </tr>
      </table></td>
    </tr>
    <tr>
      <th align="left">PERATUS KEDATANGAN</th>
      <th>:</th>
      <td><table width="39%" border="1" cellpadding="5">
        <tr>
            <td><?php echo $peratus_datang.'%' ?><br /></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <th align="left">HITUNG PANJANG RAMAI MURID</th>
      <th>:</th>
      <td><table width="39%" border="1" cellpadding="5">
        <tr>
            <td><?php echo $murid_avg ?><br /></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <th align="left">RAMAI MURID HUJUNG BULAN LEPAS</th>
      <th>:</th>
      <td><table width="39%" border="1" cellpadding="5">
        <tr>
            <td><?php 
	 
	  echo $jumlahsemua ;
	  ?>              <br /></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <th align="left">RAMAI MURID YANG MASUK</th>
      <th>:</th>
      <td><table width="39%" border="1" cellpadding="5">
        <tr>
          <td><?php echo $masuk ?><br /></td>
        </tr>
    </table></td>
    </tr>
    <tr>
      <th align="left">RAMAI MURID YANG KELUAR</th>
      <th>:</th>
      <td><table width="39%" border="1" cellpadding="5">
        <tr>
            <td><?php echo $keluar ?><br /></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <th align="left">RAMAI MURID PADA HUJUNG BULAN INI</th>
      <th>:</th>
      <td><table width="39%" border="1" cellpadding="5">
        <tr>
            <td><?php echo $murid_bulanini ?><br /></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <th align="left">BILANGAN KELAS</th>
      <th>:</th>
      <td><table width="39%" border="1" cellpadding="5">
        <tr>
            <td><?php echo $row_sum_kelas_pg['bil_kelas_pagi']+$row_sum_kelas_ptg['bil_kelas_ptg']?><br /></td>
          </tr>
      </table></td>
    </tr>
  </table>

  
</div>

</div>

</div>

<div class="clr"></div>

<div class="pagebreak"></div>