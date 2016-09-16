<?php   include('inc_pbsra0.php') ;include('inc_pbsra1.php'); ?>
<?php
$sql_sekolah= " SELECT id, url, riten_no,
logo, acronyim, campus_name, sek_kod,address, 
city, postcode, `state`, faxNo, 
telephone, email, daerah, gb_name, gb_tel, 
gred_sek, sek_mix, sek_kongsi, sek_tukar, sek_sesi
FROM campus_setting";
$query_sekolah=mysql_query($sql_sekolah,$conn);
$row_sekolah=mysql_fetch_assoc($query_sekolah);
 
$sql_room= " SELECT
Field_Name AS nama_bilik,`Value` AS no_bilik
FROM setting
WHERE CLASS=48";
$query_room=mysql_query($sql_room,$conn);
$row_room=mysql_fetch_assoc($query_room);

$month=$_SESSION['pmonth'];
switch($month)
		{
		case ($month=='01'):$monthname='Januari'; break; case ($month=='07'):$monthname='Julai'; break;
		case ($month=='02'):$monthname='Febuari'; break; case ($month=='08'):$monthname='Ogos'; break;
		case ($month=='03'):$monthname='Mac'; break; case ($month=='09'):$monthname='September'; break;
		case ($month=='04'):$monthname='April'; break; case ($month=='10'):$monthname='Oktober'; break;
		case ($month=='05'):$monthname='Mei'; break; case ($month=='11'):$monthname='November'; break;	
		case ($month=='06'):$monthname='Jun'; break; case ($month=='12'):$monthname='Disember'; break;		
		}
?>
<div class="whole">

  <div class="header_center1">JABATAN AGAMA ISLAM <br /> SELANGOR DARUL EHSAN </div>
  <div class="header_center2">PENYATA BULANAN SRA INTEGRASI</div>

<div class="header_report_right">PBSRA 1</div>
  <div class="pbsra1-topleft">
    <table width="200" border="1" cellpadding="2">
    <tr>
      <th ><p>Bil(<?php echo $_SESSION['pmonth']; ?>) dlm SRAI.<?php echo $row_sekolah['riten_no'] ?></p></th>
    </tr>
    <tr>
      <th ><p>Kepada:</p>
        <p>Pengarah<br />
          Jabatan Agama Islam Selangor <br />
          Tingkat 2, Menara Utara,<br />
          Bangunan Sultan Idris Shah,<br />
          40676 Shah Alam,<br />
        Selangor </p></th>
    </tr>
    <tr style="border-width:5px;border-style:ridge; height:160px;">
      <th style="vertical-align:text-top"><p>Untuk Kegunaan Pejabat</p><hr />
        <p>Cop Penerima</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p></th>
    </tr>
  </table>
</div>
<div class="pbsra1-topright">
  <table width="550" border="0" cellpadding="2" class="table_pbsra1">
    <tr>
      <th width="42%" align="right"  scope="col"><strong>PENYATA BULAN</strong></th>
      <th width="5%" scope="col" ><strong>:</strong></th>
      <td width="53%" scope="col"><?php echo $monthname; ?>. <?php echo date('Y'); ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>KOD SEKOLAH</strong></th>
        <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['sek_kod'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>NAMA &amp; ALAMAT SEKOLAH</strong></th>
        <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['campus_name'] ?><br /><?php echo $row_sekolah['address'] ?>,<?php echo $row_sekolah['postcode'] ?> <?php echo $row_sekolah['city'] ?>,<br /><?php echo $row_sekolah['state'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>TEL/FAX SEK</strong></th>
        <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['telephone'] ?> / <?php echo $row_sekolah['faxNo'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>LAMAN SESAWANG</strong></th>
      <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['url'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>EMAIL</strong></th>
       <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['email'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>DAERAH</strong></th>
        <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['daerah'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>GURU BESAR &amp;<br />
        NO H/P
        </strong></th>
      <th width="5%"  scope="col"><strong>:</strong></th>
      <td><?php echo $row_sekolah['gb_name'] ?><br />
        <?php echo $row_sekolah['gb_tel'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>GRED SEKOLAH</strong></th>
      <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['gred_sek'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>SEK LELAKI/ PEREMPUAN/ BERCAMPUR</strong></th>
      <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['sek_mix'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>DUA SEK. BERKONGSI SATU BANGUNAN</strong></th>
      <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['sek_kongsi'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>SEK BERTUKAR SESI SELEPAS 6/12 BULAN</strong></th>
        <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['sek_tukar'] ?></td>
    </tr>
    <tr>
      <th align="right" ><strong>MASA SEK PAGI/ PTG/ PAGI &amp; PETANG</strong></th>
        <th width="5%" scope="col" ><strong>:</strong></th>
      <td><?php echo $row_sekolah['sek_sesi'] ?></td>
    </tr>
  </table>
</div>
<div class="clr"></div><p></p>
<div class="pbsra1-mid">
<table width="800" cellpadding="1" class="tablemid">
    <tr>
      <th colspan="6" scope="col">TAHUN (1)</th>
      <th colspan="6" scope="col">TAHUN (2)</th>
      <th colspan="6" scope="col">TAHUN (3)</th>
      <th colspan="4" scope="col">JUMLAH KESELURUHAN <br />
        BIL MURID</th>
    </tr>
    <tr>
      <th colspan="2" align="center">PAGI</th>
      <th colspan="2" align="center">PTG</th>
      <th colspan="2" align="center">KELAS</th>
      <th colspan="2">PAGI</th>
      <th colspan="2">PTG</th>
      <th colspan="2">KELAS</th>
      <th colspan="2">PAGI</th>
      <th colspan="2">PTG</th>
      <th colspan="2">KELAS</th>
      <th colspan="2">PAGI</th>
      <th colspan="2">PTG</th>
    </tr>
    <tr>
      <th width="23" align="center">L</th>
      <th width="23" align="center">P</th>
      <th width="20" align="center">L</th>
      <th width="20" align="center">P</th>
      <th width="51" align="center">PAGI</th>
      <th width="42" align="center">PTG</th>
      <th width="23">L</th>
      <th width="23">P</th>
      <th width="20">L</th>
      <th width="20">P</th>
      <th width="51">PAGI</th>
      <th width="42">PTG</th>
      <th width="23">L</th>
      <th width="23">P</th>
      <th width="20">L</th>
      <th width="20">P</th>
      <th width="51">PAGI</th>
      <th width="42">PTG</th>
      <th width="51" align="center">L</th>
      <th width="57" align="center">P</th>
      <th width="51" align="center">L</th>
      <th width="68" align="center">P</th>
    </tr>
    <tr>
      <td align="center"><?php echo $row_tahun1_pagi['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun1_pagi['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun1_Petang['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun1_Petang['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun1_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_tahun1_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_tahun2_pagi['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun2_pagi['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun2_Petang['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun2_Petang['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun2_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_tahun2_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_tahun3_pagi['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun3_pagi['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun3_Petang['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun3_Petang['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun3_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_tahun3_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_sum['bil_laki_pg'] ?></td>
      <td align="center"><?php echo $row_sum['bil_pom_pg'] ?></td>
      <td align="center"><?php echo $row_sum['bil_laki_ptg'] ?></td>
      <td align="center"><?php echo $row_sum['bil_pom_ptg'] ?></td>
      </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $row_tahun1_Pagisum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun1_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun1_Pagisum_sesi['sum_kelas']+$row_tahun1_Petangsum_sesi['sum_kelas'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun2_Pagisum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun2_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun2_Pagisum_sesi['sum_kelas']+$row_tahun2_Petangsum_sesi['sum_kelas'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun3_Pagisum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun3_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun3_Pagisum_sesi['sum_kelas']+$row_tahun3_Petangsum_sesi['sum_kelas'] ?></td>
      <td colspan="2" align="center"><?php echo $row_sum['jum_pagi'] ?></td>
      <td colspan="2" align="center"><?php echo $row_sum['jum_ptg'] ?></td>
      </tr>
    <tr>
      <td colspan="4" align="center"><?php echo $row_tahun1_Pagisum['bil_murid']+ $row_tahun1_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center" class="row_ganjil"></td>
      <td colspan="4" align="center"><?php echo $row_tahun2_Pagisum['bil_murid']+ $row_tahun2_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center" class="row_ganjil"></td>
      <td colspan="4" align="center"><?php echo $row_tahun3_Pagisum['bil_murid']+ $row_tahun3_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center" class="row_ganjil"></td>
      <td colspan="4" align="center"><?php echo $row_sum['total_pelajar'] ?></td>
      </tr>
  </table><br />
  <table width="800px" class="tablemid">
    <tr>
      <th colspan="6" scope="col">TAHUN (4)</th>
      <th colspan="6" scope="col">TAHUN (5)</th>
      <th colspan="6" scope="col">TAHUN (6)</th>
      <th colspan="2" rowspan="2" scope="col">JUMLAH<br />
KELAS</th>
      <th colspan="2" rowspan="2" scope="col">PERATUS<br />
KEDATANGAN</th>
      </tr>
    <tr>
      <th colspan="2">PAGI</th>
      <th colspan="2">PTG</th>
      <th colspan="2">KELAS</th>
      <th colspan="2">PAGI</th>
      <th colspan="2">PTG</th>
      <th colspan="2">KELAS</th>
      <th colspan="2">PAGI</th>
      <th colspan="2">PTG</th>
      <th colspan="2">KELAS</th>
      </tr>
    <tr>
      <th width="3%">L</th>
      <th width="3%">P</th>
      <th width="3%">L</th>
      <th width="3%">P</th>
      <th width="6%">PAGI</th>
      <th width="6%">PTG</th>
      <th width="3%">L</th>
      <th width="3%">P</th>
      <th width="3%">L</th>
      <th width="3%">P</th>
      <th width="6%">PAGI</th>
      <th width="6%">PTG</th>
      <th width="3%" align="center">L</th>
      <th width="3%" align="center">P</th>
      <th width="3%" align="center">L</th>
      <th width="3%" align="center">P</th>
      <th width="6%" align="center">PAGI</th>
      <th width="6%" align="center">PTG</th>
      <th width="6%" align="center">PAGI</th>
      <th width="8%" align="center">PTG</th>
      <th width="6%" align="center">PAGI</th>
      <th width="8%" align="center">PTG</th>
      </tr>
    <tr>
      <td align="center"><?php echo $row_tahun4_pagi['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun4_pagi['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun4_Petang['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun4_Petang['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun4_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_tahun4_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_tahun5_pagi['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun5_pagi['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun5_Petang['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun5_Petang['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun5_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_tahun5_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_tahun6_pagi['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun6_pagi['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun6_Petang['bil_laki'] ?></td>
      <td align="center"><?php echo $row_tahun6_Petang['bil_pom'] ?></td>
      <td align="center"><?php echo $row_tahun6_Pagisum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_tahun6_Petangsum_sesi['sum_kelas'] ?></td>
      <td align="center"><?php echo $row_sum_kelas_pg['bil_kelas_pagi']?></td>
      <td align="center"><?php echo $row_sum_kelas_ptg['bil_kelas_ptg']?></td>
      <td align="center"><?php //echo $peratus_datang.'%' ;
	  echo $at_pg_percent.'%'   ?></td>
      <td align="center"><?php //echo $peratus_datang.'%' ;
	  echo $at_ptg_percent.'%'   ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $row_tahun4_Pagisum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun4_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun4_Pagisum_sesi['sum_kelas']+$row_tahun4_Petangsum_sesi['sum_kelas'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun5_Pagisum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun5_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun5_Pagisum_sesi['sum_kelas']+$row_tahun5_Petangsum_sesi['sum_kelas'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun6_Pagisum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun6_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center"><?php echo $row_tahun6_Pagisum_sesi['sum_kelas']+$row_tahun6_Petangsum_sesi['sum_kelas'] ?></td>
      <td colspan="2" align="center"><?php echo $row_sum_kelas_pg['bil_kelas_pagi']+$row_sum_kelas_ptg['bil_kelas_ptg']?></td>
      <td colspan="2" align="center"><?php //echo $peratus_datang.'%' ;
	  echo $avg_att.'%'; ?></td>
    </tr>
    <tr>
      <td colspan="4" align="center"><?php echo $row_tahun4_Pagisum['bil_murid']+ $row_tahun4_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center" class="row_ganjil"></td>
      <td colspan="4" align="center"><?php echo $row_tahun5_Pagisum['bil_murid']+ $row_tahun5_Petangsum['bil_murid'] ?></td>
      <td colspan="2" align="center" class="row_ganjil"></td>
      <td colspan="4" align="center"><?php echo $row_tahun6_Pagisum['bil_murid']+ $row_tahun6_Petangsum['bil_murid'] ?></td>
      <td colspan="6" class="row_ganjil"></td>
      </tr>
  </table>
  <br />
  <table class="tablemid" width="800px">
    <tr>
      <th colspan="20" scope="col">JUMLAH KESELURUHAN BILANGAN GURU</th>
      <th colspan="2" rowspan="2" scope="col">JUMLAH GURU</th>
    </tr>
    <tr>
      <th colspan="2">DG41</th>
      <th colspan="2">DGA34</th>
      <th colspan="2">DGA32</th>
      <th colspan="2">DGA29</th>
      <th colspan="2">DGA29(K)</th>
      <th colspan="2">DB27(K)</th>
      <th colspan="2">DB17(K)</th>
      <th colspan="2">KAFA</th>
      <th colspan="2">RAKYAT</th>
      <th colspan="2">GANTI</th>
      </tr>
    <tr>
      <th>L</th>
      <th>P</th>
      <th>L</th>
      <th>P</th>
      <th>L</th>
      <th>P</th>
      <th>L</th>
      <th>P</th>
      <th>L</th>
      <th>P</th>
      <th>L</th>
      <th>P</th>
      <th>L</th>
      <th>P</th>
      <th>L</th>
      <th>P</th>
      <th>L</th>
      <th>P</th>
      <th>L</th>
      <th>P</th>
      <th>L</th>
      <th>P</th>
      </tr>
    <tr>
      <th colspan="20" align="center">BILANGAN GURU SRAI</th>
      <td rowspan="2" align="center"><?php echo $row_guru['sum_laki'] ?></td>
      <td rowspan="2" align="center"><?php echo $row_guru['sum_pom'] ?></td>
    </tr>
    <tr>
      <td align="center"><?php echo $row_guru['dg41l'] ?></td>
      <td align="center"><?php echo $row_guru['dg41p'] ?></td>
      <td align="center"><?php echo $row_guru['dga34l'] ?></td>
      <td align="center"><?php echo $row_guru['dga34p'] ?></td>
      <td align="center"><?php echo $row_guru['dga32l'] ?></td>
      <td align="center"><?php echo $row_guru['dga32p'] ?></td>
      <td align="center"><?php echo $row_guru['dga29l'] ?></td>
      <td align="center"><?php echo $row_guru['dga29p'] ?></td>
      <td align="center"><?php echo $row_guru['dga29kl'] ?></td>
      <td align="center"><?php echo $row_guru['dga29kp'] ?></td>
      <td align="center"><?php echo $row_guru['db27kl'] ?></td>
      <td align="center"><?php echo $row_guru['db27kp'] ?></td>
      <td align="center"><?php echo $row_guru['db17kl'] ?></td>
      <td align="center"><?php echo $row_guru['db17kp'] ?></td>
      <td align="center"><?php echo $row_guru['kafal'] ?></td>
      <td align="center"><?php echo $row_guru['kafap'] ?></td>
      <td align="center"><?php echo $row_guru['rakyatl'] ?></td>
      <td align="center"><?php echo $row_guru['rakyatp'] ?></td>
      <td align="center"><?php echo $row_guru['gantil'] ?></td>
      <td align="center"><?php echo $row_guru['gantip'] ?></td>
      </tr>
    <tr>
      <th colspan="20" align="center">BILANGAN GURU SRA</th>
      <td rowspan="2" align="center">0</td>
      <td rowspan="2" align="center">0</td>
    </tr>
    <tr>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      <td align="center">0</td>
      </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $row_guru['sum_dg41'] ?></td>
      <td colspan="2" align="center"><?php echo $row_guru['sum_dga34'] ?></td>
      <td colspan="2" align="center"><?php echo $row_guru['sum_dga32'] ?></td>
      <td colspan="2" align="center"><?php echo $row_guru['sum_dga29'] ?></td>
      <td colspan="2" align="center"><?php echo $row_guru['sum_dga29k'] ?></td>
      <td colspan="2" align="center"><?php echo $row_guru['sum_db27k'] ?></td>
      <td colspan="2" align="center"><?php echo $row_guru['sum_db17k'] ?></td>
      <td colspan="2" align="center"><?php echo $row_guru['sum_kafa'] ?></td>
      <td colspan="2" align="center"><?php echo $row_guru['sum_rakyat'] ?></td>
      <td colspan="2" align="center"><?php echo $row_guru['sum_ganti'] ?></td>
      <td colspan="2" align="center"><?php echo $row_guru['guru_all'] ?></td>
    </tr>
    <tr>
      <td colspan="8" align="center"><?php echo $permanent=$row_guru['sum_dg41']+$row_guru['sum_dga34']+$row_guru['sum_dga32']+$row_guru['sum_dga29'] ?></td>
      <td colspan="6" align="center"><?php echo $contract=$row_guru['sum_dga29k']+$row_guru['sum_db27k']+$row_guru['sum_db17k']?></td>
      <td colspan="6" align="center"><?php echo $others_guru=$row_guru['sum_kafa']+$row_guru['sum_rakyat']+$row_guru['sum_ganti']?></td>
      <td colspan="2" align="center" class="row_ganjil"></td>
    </tr>
  </table><br />
  <table width="800" class="tablemid">
    <tr>
      <th colspan="12" scope="col">JUMLAH KESELURUHAN BIL PEMBANTU TADBIR</th>
      <th colspan="4" scope="col">JUMLAH KESELURUHAN BIL PEMBERSIH KAWASAN</th>
      <th colspan="4" scope="col">JUMLAH<br />
        KESELURUHAN BIL PENGAWAL</th>
      <th colspan="2" rowspan="2" scope="col">JUMLAH KAKITANGAN <br />
        SOKONGAN</th>
    </tr>
    <tr>
      <th colspan="2">N17</th>
      <th colspan="2">N17(K)</th>
      <th colspan="2">N17(S)</th>
      <th colspan="2">N1</th>
      <th colspan="2">R1</th>
      <th colspan="2">RAKYAT</th>
      <th colspan="2">KONTRAKTOR</th>
      <th colspan="2">RAKYAT</th>
      <th colspan="2" align="center">KONTRAKTOR</th>
      <th colspan="2" align="center">RAKYAT</th>
      </tr>
    <tr>
      <th width="19" align="center">L</th>
      <th width="30" align="center">P</th>
      <th width="19" align="center">L</th>
      <th width="31" align="center">P</th>
      <th width="23" align="center">L</th>
      <th width="25" align="center">P</th>
      <th width="22" align="center">L</th>
      <th width="25" align="center">P</th>
      <th width="26" align="center">L</th>
      <th width="40" align="center">P</th>
      <th width="29" align="center">L</th>
      <th width="36" align="center">P</th>
      <th width="49" align="center">L</th>
      <th width="44" align="center">P</th>
      <th width="28" align="center">L</th>
      <th width="68" align="center">P</th>
      <th width="48" align="center">L</th>
      <th width="46" align="center">P</th>
      <th width="33" align="center">L</th>
      <th width="39" align="center">P</th>
      <th width="57" align="center">L</th>
      <th width="71" align="center">P</th>
      </tr>
    <tr>
      <td align="center"><?php echo $row_pekerja['n17l'] ?></td>
      <td align="center"><?php echo $row_pekerja['n17p'] ?></td>
      <td align="center"><?php echo $row_pekerja['n17kl'] ?></td>
      <td align="center"><?php echo $row_pekerja['n17kp'] ?></td>
      <td align="center"><?php echo $row_pekerja['n17sl'] ?></td>
      <td align="center"><?php echo $row_pekerja['n17sp'] ?></td>
      <td align="center"><?php echo $row_pekerja['n1l'] ?></td>
      <td align="center"><?php echo $row_pekerja['n1p'] ?></td>
      <td align="center"><?php echo $row_pekerja['r1l'] ?></td>
      <td align="center"><?php echo $row_pekerja['r1p'] ?></td>
      <td align="center"><?php echo $row_pekerja['ker_rakl'] ?></td>
      <td align="center"><?php echo $row_pekerja['ker_rakp'] ?></td>
      <td align="center"><?php echo $row_pekerja['pem_kl'] ?></td>
      <td align="center"><?php echo $row_pekerja['pem_kp'] ?></td>
      <td align="center"><?php echo $row_pekerja['pem_rl'] ?></td>
      <td align="center"><?php echo $row_pekerja['pem_rp'] ?></td>
      <td align="center"><?php echo $row_pekerja['peng_kl'] ?></td>
      <td align="center"><?php echo $row_pekerja['peng_kp'] ?></td>
      <td align="center"><?php echo $row_pekerja['peng_rl'] ?></td>
      <td align="center"><?php echo $row_pekerja['peng_rp'] ?></td>
      <td align="center"><?php echo $row_pekerja['sum_laki'] ?></td>
      <td align="center"><?php echo $row_pekerja['sum_pom'] ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo $row_pekerja['n17l']+$row_pekerja['n17p'] ?></td>
      <td colspan="2" align="center"><?php echo $row_pekerja['n17kl']+$row_pekerja['n17kp'] ?></td>
      <td colspan="2" align="center"><?php echo $row_pekerja['n17sl']+$row_pekerja['n17sp'] ?></td>
      <td colspan="2" align="center"><?php echo $row_pekerja['n1l']+$row_pekerja['n1p'] ?></td>
      <td colspan="2" align="center"><?php echo $row_pekerja['r1l']+$row_pekerja['r1p'] ?></td>
      <td colspan="2" align="center"><?php echo $row_pekerja['ker_rakl']+$row_pekerja['ker_rakp'] ?></td>
      <td colspan="2" align="center"><?php echo $row_pekerja['pem_kl']+$row_pekerja['pem_kp'] ?></td>
      <td colspan="2" align="center"><?php echo $row_pekerja['pem_rl']+$row_pekerja['pem_rp']  ?></td>
      <td colspan="2" align="center"><?php echo $row_pekerja['peng_kl']+ $row_pekerja['peng_kp'] ?></td>
      <td colspan="2" align="center"><?php echo $row_pekerja['peng_rl']+$row_pekerja['peng_rp']  ?></td>
      <td colspan="2" align="center"><?php echo $row_pekerja['sum_laki']+$row_pekerja['sum_pom'] ?></td>
    </tr>
    <tr>
      <td colspan="12" align="center"><?php echo $row_pekerja['n17l']+$row_pekerja['n17p']+$row_pekerja['n17kl']+$row_pekerja['n17kp']+$row_pekerja['n17sl']+$row_pekerja['n17sp']+$row_pekerja['n1l']+$row_pekerja['n1p']+$row_pekerja['r1l']+$row_pekerja['r1p']+$row_pekerja['ker_rakl']+$row_pekerja['ker_rakp'] ?></td>
      <td colspan="4" align="center"><?php echo $row_pekerja['pem_kl']+$row_pekerja['pem_kp']+$row_pekerja['pem_rl']+$row_pekerja['pem_rp'] ?></td>
      <td colspan="4" align="center"><?php echo $row_pekerja['peng_kl']+ $row_pekerja['peng_kp']+$row_pekerja['peng_rl']+$row_pekerja['peng_rp'] ?></td>
      <td colspan="2" class="row_ganjil"></td>
      </tr>
  </table>
</div>
<div class="clr">
<div class="pbsra1-botleft">
  <table width="226" border="0" cellpadding="1" class="tablesmall">
    <tr>
      <th colspan="2" scope="col" class="table_none">Bilangan Bilik</th>
    </tr><?php do{ ?>
    <tr>
      <td width="37%"><?php echo $row_room['nama_bilik'] ?></td>
      <td width="63%"><?php echo $row_room['no_bilik'] ?></td>
    </tr>
       <?php }while($row_room=mysql_fetch_assoc($query_room)); ?>
 
  </table>
</div>
</div>
<div class="pbsra1-botright"> <table width="455" border="1" align="center" cellpadding="5">
    <tr>
      <th width="437" scope="col"><p>SAYA MENGAKU BAHAWA SEMUA BUTIR YANG DIISI DALAM BORANG PENYATA BULANAN<br />
PBSRA 1 HINGGA PBSRA 5 ADALAH BETUL</p>
        <p>*Sila buat 3 salinan untuk penyata bulanan ini<br />
          * Sila hantar ke Pejabat Agama Daerah pada atau sebelum 3hb setiap awal bulan</p>
        <table width="410" border="0" cellpadding="5">
          <tr>
            <th width="76">Disahkan
              <p>&nbsp;</p></th>
            <td width="137">&nbsp;</td>
            <td width="159">&nbsp;</td>
          </tr>
          <tr>
            <th>Nama: </th>
            <td>&nbsp;</td>
            <th>Cop</th>
          </tr>
          <tr>
            <th>Jawatan: </th>
            <td>&nbsp;</td>
            <th>Tarikh:</th>
          </tr>
        </table></th>
    </tr>
  </table>
</div>
</div>