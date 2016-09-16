<div class="whole">

  <h3>BILANGAN MURID  </h3>
  <table width="100%" border="1" cellpadding="1">
    
    <tr>
      <th width="257" scope="col">&nbsp;</th>
      <th width="257" scope="col">NAMA KELAS</th>
      <th width="40" align="center" scope="col">L</th>
      <th width="46" align="center" scope="col">P</th>
      <th width="68" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <th rowspan="10" scope="col">TAHUN SATU </th>
    <?php 
	do{?>
      <td scope="col"><?php echo $row_tahun1_pagi['nama_kelas'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_pagi['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_pagi['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun1_pagi=mysql_fetch_assoc($query_tahun1_pagi))?>
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
      <td align="right" scope="col"><strong>JUMLAH </strong></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_laki']+ $row_tahun1_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_pom'] + $row_tahun1_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun1_Pagisum['bil_murid']+ $row_tahun1_Petangsum['bil_murid'] ?></td>
    </tr>
</table>

  <table width="100%" border="1" cellpadding="1" >
    <tr>
      <th width="257" rowspan="10" scope="col">TAHUN DUA </th>
      <?php 
	do{?>
      <td width="257" scope="col"><?php echo $row_tahun2_pagi['nama_kelas'] ?></td>
      <td width="40" align="center" scope="col"><?php echo $row_tahun2_pagi['bil_laki'] ?></td>
      <td width="46" align="center" scope="col"><?php echo $row_tahun2_pagi['bil_pom'] ?></td>
      <td width="68" align="center" scope="col"><?php echo $row_tahun2_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun2_pagi=mysql_fetch_assoc($query_tahun2_pagi))?>
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
      <td align="right" scope="col"><strong>JUMLAH </strong></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_laki']+ $row_tahun2_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_pom'] + $row_tahun2_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun2_Pagisum['bil_murid']+ $row_tahun2_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>

  <table width="100%" border="1" cellpadding="1" >
    <tr>
      <th width="257" rowspan="10" scope="col">TAHUN TIGA </th>
      <?php 
	do{?>
      <td width="257" scope="col"><?php echo $row_tahun3_pagi['nama_kelas'] ?></td>
      <td width="40" align="center" scope="col"><?php echo $row_tahun3_pagi['bil_laki'] ?></td>
      <td width="46" align="center" scope="col"><?php echo $row_tahun3_pagi['bil_pom'] ?></td>
      <td width="68" align="center" scope="col"><?php echo $row_tahun3_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun3_pagi=mysql_fetch_assoc($query_tahun3_pagi))?>
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
      <td align="right" scope="col"><strong>JUMLAH </strong></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_laki']+ $row_tahun3_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_pom'] + $row_tahun3_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun3_Pagisum['bil_murid']+ $row_tahun3_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>

  <table width="100%" border="1" cellpadding="1" >
    <tr>
      <th width="257" rowspan="10" scope="col">TAHUN EMPAT </th>
      <?php 
	do{?>
      <td width="257" scope="col"><?php echo $row_tahun4_pagi['nama_kelas'] ?></td>
      <td width="40" align="center" scope="col"><?php echo $row_tahun4_pagi['bil_laki'] ?></td>
      <td width="46" align="center" scope="col"><?php echo $row_tahun4_pagi['bil_pom'] ?></td>
      <td width="68" align="center" scope="col"><?php echo $row_tahun4_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun4_pagi=mysql_fetch_assoc($query_tahun4_pagi))?>
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
      <td align="right" scope="col"><strong>JUMLAH </strong></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_laki']+ $row_tahun4_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_pom'] + $row_tahun4_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun4_Pagisum['bil_murid']+ $row_tahun4_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>

  <table width="100%" border="1" cellpadding="1">
    <tr>
      <th width="257" rowspan="10" scope="col">TAHUN LIMA </th>
      <?php 
	do{?>
      <td width="257" scope="col"><?php echo $row_tahun5_pagi['nama_kelas'] ?></td>
      <td width="40" align="center" scope="col"><?php echo $row_tahun5_pagi['bil_laki'] ?></td>
      <td width="46" align="center" scope="col"><?php echo $row_tahun5_pagi['bil_pom'] ?></td>
      <td width="68" align="center" scope="col"><?php echo $row_tahun5_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun5_pagi=mysql_fetch_assoc($query_tahun5_pagi))?>
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
      <td align="right" scope="col"><strong>JUMLAH </strong></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_laki']+ $row_tahun5_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_pom'] + $row_tahun5_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun5_Pagisum['bil_murid']+ $row_tahun5_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>

  <table width="100%" border="1" cellpadding="1" >
    <tr>
      <th width="257" rowspan="10" scope="col">TAHUN ENAM </th>
      <?php 
	do{?>
      <td width="257" scope="col"><?php echo $row_tahun6_pagi['nama_kelas'] ?></td>
      <td width="40" align="center" scope="col"><?php echo $row_tahun6_pagi['bil_laki'] ?></td>
      <td width="46" align="center" scope="col"><?php echo $row_tahun6_pagi['bil_pom'] ?></td>
      <td width="68" align="center" scope="col"><?php echo $row_tahun6_pagi['bil_murid'] ?></td>
    </tr>
    <?php }while($row_tahun6_pagi=mysql_fetch_assoc($query_tahun6_pagi))?>
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
      <td align="right" scope="col"><strong>JUMLAH </strong></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_laki']+ $row_tahun6_Petangsum['bil_laki'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_pom'] + $row_tahun6_Petangsum['bil_pom'] ?></td>
      <td align="center" scope="col"><?php echo $row_tahun6_Pagisum['bil_murid']+ $row_tahun6_Petangsum['bil_murid'] ?></td>
    </tr>
  </table>
  <table width="100%" border="1" cellpadding="1" >
    <tr>
      <th width="514" scope="col"><strong>JUMLAH KESELURUHAN</strong></th>
 
      <td width="40" align="center" scope="col"><?php echo $row_sum_gen['no_men']; ?></td>
      <td width="46" align="center" scope="col"><?php echo $row_sum_gen['no_girl']; ?></td>
      <td width="68" align="center" scope="col"><?php echo $row_sum_gen['no_all']; ?></td>
    </tr>
 
    </table>
    <br /><p></p>
  <table width="100%" border="1" cellpadding="1" >
    <tr>
      <th width="753" scope="col"><strong>PERKARA</strong></th>
      <th width="175" align="center" scope="col">LELAKI</th>
      <th width="167" align="center" scope="col">PEREMPUAN</th>
      <th width="160" align="center" scope="col">JUMLAH</th>
    </tr>
    <tr>
      <th scope="col">HITUNG PANJANG KEDATANGAN SEBULAN</th>
      <th align="center" scope="col"><?php echo $avg_at_male ?></th>
      <th align="center" scope="col"><?php echo $avg_at_female ?></th>
      <th align="center" scope="col"><?php echo $avg_at ?></th>
    </tr>
    <tr>
      <th scope="col">PERATUS KEDATANGAN</th>
      <th align="center" scope="col"><?php echo $peratus_datang_male.'%' ?></th>
      <th align="center" scope="col"><?php echo $peratus_datang_female.'%' ?></th>
      <th align="center" scope="col"><?php $peratus_datang=(($peratus_datang_female+$peratus_datang_male)/2); echo ROUND($peratus_datang,2).'%'; ?></th>
    </tr>
    <tr>
      <th scope="col">HITUNG PANJANG RAMAI MURID</th>
      <th align="center" scope="col"><?php echo $murid_avg_male ?></th>
      <th align="center" scope="col"><?php echo $murid_avg_female ?></th>
      <th align="center" scope="col"><?php echo $murid_avg ?></th>
    </tr>
    <tr>
      <th scope="col">RAMAI MURID HUJUNG BULAN LEPAS</th>
      <th align="center" scope="col"><?php 
	 
	  echo $jumlahsemua_men=$row_riten['no_male']-$row_riten['male_in']+$row_riten['male_out'] ;
	  ?></th>
      <th align="center" scope="col"><?php 
	 
	  echo $jumlahsemua_female =$row_riten['no_female']-$row_riten['female_in']+$row_riten['female_out'];
	  ?></th>
      <th align="center" scope="col"><?php 
	 
	  echo $jumlahsemua= $row_riten['no_student']-$row_riten['student_in']+$row_riten['student_out'];
	  ?></th>
    </tr>
    <tr>
      <th class="table_none">RAMAI MURID PADA HUJUNG BULAN INI</th>
      <th align="center" scope="col"><?php echo $row_riten['no_male']?></th>
      <th align="center" scope="col"><?php echo $row_riten['no_female'] ?></th>
      <th align="center" scope="col"><?php echo $row_riten['no_student'] ?></th>
    </tr>
    <tr>
      <th class="table_none">RAMAI MURID YANG MASUK</th>
      <th align="center" scope="col"><?php echo $row_riten['male_in'] ?></th>
      <th align="center" scope="col"><?php echo $row_riten['female_in']  ?></th>
      <th align="center" scope="col"><?php echo $row_riten['student_in'] ?></th>
    </tr>
    <tr>
      <th class="table_none">RAMAI MURID YANG KELUAR</th>
      <th align="center" scope="col"><?php echo $row_riten['male_out']?></th>
      <th align="center" scope="col"><?php echo $row_riten['female_out']?></th>
      <th align="center" scope="col"><?php echo $row_riten['student_out'] ?></th>
    </tr>
  </table>

</div>