<?php
$sql_sekolah= " SELECT id, url, riten_no,
logo, acronyim, campus_name, sek_kod,address, 
city, postcode, `state`, faxNo, 
telephone, email, daerah, gb_name, gb_tel, 
gred_sek, sek_mix, sek_kongsi, sek_tukar, sek_sesi,
sek_building,sek_owner,sek_jenis
FROM campus_setting";
$query_sekolah=mysql_query($sql_sekolah,$conn);
$row_sekolah=mysql_fetch_assoc($query_sekolah);
 
$month=$_SESSION['pmonth'];
$pyear=$_GET['pyear'];
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
<link href="style.css" rel="stylesheet" type="text/css" />

<div class="whole">
  <h3 align="center">JABATAN AGAMA ISLAM <br />
    WILAYAH KUALA LUMPUR<br /> </h3>
<h4 align="center">SEKOLAH PERSENDIRIAN / SWASTA<br />
    PRA SEKOLAH / SRI / SRII / TAHFIZ / PUSAT TUISYEN</h4>
  <div class="rs1_topleft">
    <table border="1">
      <tr>
        <td ><p>Kepada:</p>
          <p>Ketua Penolong Pengarah<br />
            Bahagian Pendidikan Islam<br />
            Jabatan Agama Islam Wilayah Kuala Lumpur<br />
          </p>
        <p>&nbsp;</p></td>
      </tr>
    </table>
    <p>&nbsp;</p>
</div>
  <div class="rs1_topright">
    <table width="100%" border="0" cellpadding="2" cellspacing="5" style="border-collapse:separate;">
      <tr>
        <th width="278" align="right" class="td_none"  scope="col"><strong>PENYATA BULAN</strong></th>
        <th width="28" class="td_none" scope="col" ><strong>:</strong></th>
        <td colspan="3" class="td_have" scope="col"><?php echo $monthname; ?> <?php echo $pyear; ?></td>
      </tr>
      <tr>
        <th align="right" class="td_none" ><strong>NAMA &amp; ALAMAT SEKOLAH</strong></th>
        <th width="28" class="td_none" scope="col" ><strong>:</strong></th>
        <td colspan="3" class="td_have"><?php echo $row_sekolah['campus_name'] ?><br />
          <?php echo $row_sekolah['address'] ?>,<?php echo $row_sekolah['postcode'] ?> <?php echo $row_sekolah['city'] ?>,<br />
        <?php echo $row_sekolah['state'] ?></td>
      </tr>
      <tr>
        <th align="right" class="td_none" ><strong>NO TEL</strong></th>
        <th width="28" class="td_none" scope="col" ><strong>:</strong></th>
        <td colspan="3" class="td_have"><?php echo $row_sekolah['telephone'] ?></td>
      </tr>
      <tr>
        <th align="right" class="td_none" ><strong>NO FAX</strong></th>
        <th class="td_none" scope="col" ><strong>:</strong></th>
        <td colspan="3" class="td_have"><?php echo $row_sekolah['faxNo'] ?></td>
      </tr>
      <tr>
        <th align="right" class="td_none" >JENIS SEKOLAH</th>
        <th class="td_none" scope="col" >&nbsp;</th>
        <td colspan="3" class="td_have"><?php echo $row_sekolah['sek_jenis'] ?></td>
      </tr>
      <tr>
        <th align="right" class="td_none" >JENIS BANGUNAN</th>
        <th class="td_none" scope="col" >:</th>
        <td colspan="3" class="td_have"><?php echo $row_sekolah['sek_building'] ?></td>
      </tr>
      <tr>
        <th align="right" class="td_none" >PEMILIKAN BANGUNAN</th>
        <th class="td_none" scope="col" >:</th>
        <td colspan="3" class="td_have"><?php echo $row_sekolah['sek_owner'] ?></td>
      </tr>
      <tr>
        <th align="right" class="td_none" >JENIS PELAJAR</th>
        <th class="td_none" scope="col" >:</th>
        <td colspan="3" class="td_have"><?php echo $row_sekolah['sek_mix'] ?></td>
      </tr>
      <tr>
        <th rowspan="2" align="right" class="td_none" ><strong>BILANGAN MURID</strong></th>
        <th rowspan="2" class="td_none" scope="col" ><strong>:</strong></th>
        <th align="center" class="td_have" cellpadding="0">L</th>
        <th align="center" class="td_have" cellpadding="0">P</th>
        <th align="center" class="td_have" cellpadding="0">JUMLAH</th>
      </tr>
      <tr >
        <td align="center" class="td_have"><?php echo $row_sum_gen['no_men']; ?></td>
        <td align="center" class="td_have"><?php echo $row_sum_gen['no_girl']; ?></td>
        <td align="center" class="td_have"><?php echo $row_sum_gen['no_all']; ?></td>
      </tr>
      <tr>
        <th rowspan="2" align="right" class="td_none" ><strong>BILANGAN GURU</strong></th>
        <th width="28" rowspan="2" class="td_none" scope="col" ><strong>:</strong></th>
        <th width="126" align="center" class="td_have">L</th>
        <th width="150" align="center" class="td_have">P</th>
        <th width="213" align="center" class="td_have">JUMLAH</th>
      </tr>
      <tr>
        <td width="126" align="center" class="td_have"><?php echo $row_guru['sum_laki'] ?></td>
        <td align="center" class="td_have"><?php echo $row_guru['sum_pom'] ?></td>
        <td width="213" align="center" class="td_have"><?php echo $row_guru['guru_all'] ?></td>
      </tr>
    </table>
  </div>
  <div class="clr"></div>
  <div>
    <table width="100%" border="1" align="center" cellpadding="5">
      <tr>
        <th width="437" scope="col"><p class="small">Pengakuan: Saya mengakui bahawa semua butir-butir diisi dalam borang- PENYATA BULANAN adalah benar</p>
          <p>&nbsp;</p>
          <table width="90%" border="0">
            <tr>
              <th><p>&nbsp;</p></th>
              <td>&nbsp;</td>
              <th><span class="td_none">Nama Dan Tandatangan Guru Besar</span></th>
            </tr>
            <tr>
              <th width="76"><p>&nbsp;</p></th>
              <td width="137">&nbsp;</td>
              <th width="293">&nbsp;</th>
            </tr>
            <tr>
              <th>&nbsp;</th>
              <td>&nbsp;</td>
              <th>&nbsp;</th>
            </tr>
            <tr>
              <th><span class="td_none">Tarikh:</span></th>
              <td>&nbsp;</td>
              <th><span class="td_none">Cop Sekolah</span></th>
            </tr>
          </table>
</th>
      </tr>
    </table>          <p class="small">CATATAN: Sila hantar dalam minggu pertama setiap bulan. Kegagalan menghantar riten pada setiap bulan boleh menyebabkan pendaftaran sekolah dibatalkan. Sila buat 3 salinan dan setiap salinan terus kepada ketua penolong pengarah (pendidikan islam), Penolong Pegawai Tadbir Agama Islam Daerah (Unit Pendidikan) dan simpanan sekolah.</p>
  </div>
</div>
