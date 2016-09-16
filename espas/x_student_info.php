<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MAKLUMAT PELAJAR </title>
<?php require_once('include/dbcommon.php') ; include('x_config.php') ;?>
<link href="basic.css" rel="stylesheet" type="text/css" />
<body>
<p>
 <?php 
$studentID = $_GET['StudentID'];

require_once('x_student_info_query.php');
?>
</p>
<table width="98%" border="0" align="center" class="table_cover">
  <tr>
    <th align="center" valign="top" scope="col">
      <p>&nbsp;</p>
      <table width="486" border="0" align="center" class="left">
        <tr>
          <th width="25%" scope="row"><img src="<?php echo logo() ?>"/></th>
          <td width="6%"><br />          </td>
          <td width="69%"><?php echo head()?></td>
        </tr>
      </table>
      <hr />
      <div class="div_all">
      <p align="center">
        <span class="headline" style="text-align:center"> PROFIL MURID</span>
        </p>
      <h1>
          <?php
    $files_at_photo=json_decode($row['photo']);
    $filenames_at_photo=$files_at_photo[0]->name;
    $thumbs_at_photo=$files_at_photo[0]->thumbnail;
?>
          <img src="<?php echo $thumbs_at_photo ?>" /></h1>
        <h1><?php echo $row['Name']; ?><br />
        </h1>
   
        <div class="divleft">
          <h2 class="tableTitle">Peribadi</h2>
          <table width="100%" border="0" class="specialtable">
            <tr>
              <th width="36%" class="left" scope="row"><strong>TARIKH LAHIR</strong></th>
              <th width="9%">:</th>
              <td width="55%"><?php   if($row['DOB']!='-') { echo dates($row['DOB']); };?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>IC/SURAT BERANAK</strong></th>
              <th>:</th>
              <td><?php echo $row['ICNO']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>JANTINA</strong></th>
              <th>:</th>
              <td><?php if( $row['Gender']=='L'){ echo 'Lelaki' ; } else{ echo 'Perempuan' ; }?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>ALAMAT</strong></th>
              <th>:</th>
              <td><?php echo $row['Address1']. ',' ;echo $row['Postcode']. ',';echo $row['City']. ','; echo $row['State'] ;?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>TEL RUMAH</strong></th>
              <th>:</th>
              <td><?php if($row['HomeTelephone']!='-') { echo $row['HomeTelephone']; }?></td>
            </tr>
          </table>
          <h2 class="tableTitle">Maklumat Bapa</h2>
          <table width="100%" border="0" class="specialtable">
            <tr>
              <th width="36%" class="left" scope="row"><strong>NAMA </strong></th>
              <th width="9%">:</th>
              <td width="55%"><?php echo $row['f1_name']; ?></td
            ></tr>
            <tr>
              <th class="left" scope="row">NO TEL</th>
              <th>:</th>
              <td width="55%"><?php echo $row['f1_tel']; ?></td
            >
            </tr>
            <tr>
              <th class="left" scope="row"><strong>PEKERJAAN</strong></th>
              <th>:</th>
              <td rowspan="2"><?php echo $row['f1_job']; ?></td
            ></tr>
          </table>
          <h2 class="tableTitle">&nbsp;</h2>
          <p>&nbsp;</p>
        </div>
     <div class="divright">
       <h2 class="tableTitle">Persekolahan</h2>
       <table width="100%" border="0" class="specialtable">
         <tr>
           <th class="left" scope="row">NO DIKENALI</th>
           <th>:</th>
           <td><?php echo $row['MatricNo']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row">TAHUN</th>
           <th>:</th>
           <td><?php echo $row['tahun']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row">SESI</th>
           <th>:</th>
           <td><?php echo $row['sesi']; ?></td>
         </tr>
         <tr>
           <th width="36%" class="left" scope="row"><strong>KELAS</strong></th>
           <th width="9%">:</th>
           <td width="55%"><?php echo $row0['classname']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>STATUS</strong></th>
           <th>:</th>
           <td><?php echo $row['Status']; ?></td>
         </tr>
       </table>
       <h2 class="tableTitle">Maklumat Ibu</h2>
       <table width="100%" border="0" class="specialtable">
         <tr>
           <th width="36%" class="left" scope="row"><strong>NAMA </strong></th>
           <th width="9%">:</th>
           <td width="55%"><?php echo $row['f2_name']; ?></td
            >
         </tr>
         <tr>
           <th class="left" scope="row">NO TEL</th>
           <th>:</th>
           <td width="55%"><?php echo $row['f2_tel']; ?></td
            >
         </tr>
         <tr>
           <th class="left" scope="row"><strong>PEKERJAAN</strong></th>
           <th>:</th>
           <td rowspan="2"><?php echo $row['f2_job']; ?></td
            >
         </tr>
       </table>
       <h2>&nbsp;</h2>
     </div>
     <div class="clear"></div>
     <div class="divcenter">
     <?php /*
       <h2>ACADEMIC HISTORY</h2>
       <table width="60%" border="1" align="center">
         <tr>
           
           <th width="35%" scope="col">Institution</th>
           <th width="14%" scope="col">Year</th>
           <th width="21%" scope="col">Education Type</th>
           <th width="14%" scope="col">Major</th>
           <th width="16%" scope="col">Result</th>
         </tr>
         <tr>
         <?php do{ ?>
           <td><?php echo $row_2[qua_ins] ;?></td>
           <td><?php echo $row_2[qua_year] ;?></td>
           <td><?php echo $row_2[qua_edu] ;?></td>
           <td><?php echo $row_2[qua_major] ;?></td>
           <td><?php echo $row_2[qua_grade] ;?></td>
         </tr>
        <?php } while($row_2=mysql_fetch_array($q_sc2)) ;?>
       </table>
       <br />
       <table width="60%" border="1" align="center">
         <tr>
           <th scope="col">Subject</th>
           <th scope="col">Grade</th>
         </tr>
         <tr>
          <?php do{ ?>
           <td><?php echo $row_1[sc_subject] ?></td>
           <td><?php echo $row_1[sc_grade] ;?></td>
         </tr>
            <?php } while($row_1=mysql_fetch_array($q_sc)) ;?>
     </table>
	 */ ?>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
     </div>
      </div>
   </th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div style="page-break-before:always"></div>
<div class="height_divider"></div>
<table width="98%" border="0" align="center" class="table_cover"><tr>
  <th valign="top"><p>&nbsp;</p>
    <table width="486" border="0" align="center" class="left">
    <tr>
      <th width="25%" scope="row"><img src="<?php echo logo() ?>"/></th>
      <td width="6%"><br /></td>
      <td width="69%"><?php echo head() ;?></td>
    </tr>
  </table>
    <h2>&nbsp;</h2>
<h2 class="tableTitle">Rekod Disiplin</h2>
    <table width="90%" border="0" align="center" cellpadding="10">
      <tr>
        <th width="27%" scope="col">Aktiviti</th>
        <th width="12%" scope="col">Peringkat</th>
        <th width="17%" scope="col">Tarikh Perlakuan</th>
        <th width="25%" scope="col">Tindakan</th>
        <th width="19%" scope="col">Catatan</th>
        </tr>
      <tr> <?php do{ ?>
        <td><?php echo $row_4[dis_activity] ?></td>
        <td><?php echo $row_4[dis_level] ?></td>
        <td><?php echo $row_4[dis_date] ?></td>
        <td><?php echo $row_4[dis_action] ?></td>
        <td><?php echo $row_4[dis_comment] ?></td>
        </tr><?php } while($row_4=mysql_fetch_array($q_sc4)) ;?>
    </table>
<!--   <h2>REKOD ASRAMA/ HOSTEL</h2>
    <table width="90%" border="1" align="center">
      <tr>
        <th width="27%" scope="col">Asrama</th>
        <th width="12%" scope="col">No Bilik</th>
        <th width="17%" scope="col">Tarikh Check-In</th>
        <th width="19%" scope="col">Item</th>
      </tr>
      <tr>
        <?php do{ ?>
        <td><?php echo $row_7[hostel] ?></td>
        <td><?php echo $row_7[room] ?></td>
        <td><?php echo $row_7[date_in] ?></td>
        <td><?php echo $row_7[item] ?></td>
      </tr>
      <?php } while($row_7=mysql_fetch_array($q_sc7)) ;?>
  </table>-->
    <h2 class="tableTitle">Rekod Yuran</h2>
    <table width="90%" border="0" align="center" cellpadding="10">
      <tr>
        <th scope="col">Nama Bil</th>
        <th scope="col">Tarikh Bil</th>
        <th scope="col">Jumlah Bil (RM)</th>
        <th scope="col">Dibayar (RM)</th>
        <th scope="col">Baki (RM)</th>
      </tr>
      <tr> <?php do{ ?>
        <td><?php echo $row_9['item_name'] ?></td>
        <td><?php echo $row_9['bill_date'] ?></td>
        <td><?php echo $row_9['Bill'] ?></td>
        <td><?php echo $row_9['Paid'] ?></td>
        <td><?php echo $row_9['Outstanding'] ?></td>
      </tr>
      <?php } while($row_9=mysql_fetch_array($q_sc9)) ;?>
  </table>
    <h2 class="tableTitle">Rekod Kedatangan</h2>
    <table width="90%" border="0" align="center" cellpadding="10">
      <tr>
        <th width="24%" scope="col">Bulan</th>
        <th width="22%" scope="col">Bilangan Tidak Hadir</th>
        <th width="12%" scope="col">Hari Persekolahan</th>
        <th width="22%" scope="col">Peratus Kedatangan</th>
        </tr>
      <tr>
        <?php 
	
if($row_8['amonth']){ ?>

<?php
		do{ ; 
		$amonth=$row_8['amonth']; $ayear=$row_8['ayear'] ; $absent=$row_8['absent'];

		//bilangan hari; belajar bulanan--(A)= 
		$sql_scday= "SELECT teach_day FROM attend_creator WHERE amonth=$amonth AND ayear=$ayear ";
		$query_scday=mysql_query($sql_scday,$conn);
		$row_scday=mysql_fetch_assoc($query_scday);
		
		$teach_day=$row_scday['teach_day'] ;
		
		?>
        <td><?php echo $amonth.'-'.$ayear ?></td>
        <td><?php echo $absent ?></td>
        <td><?php echo $teach_day ?></td>
        <td><?php if($absent){ echo number_format(100-($absent/$teach_day*100),2).'%'; }else{ echo '100%';} ?></td>
        </tr>
      <?php } while($row_8=mysql_fetch_array($q_sc8))  ?>
      
      <?php } ?>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></th></tr></table>



<!--
<script type="text/javascript">
print();
</script>
-->
</body>
</html>