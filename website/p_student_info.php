<?php include_once('inc_head.php') ?>
<?php $studentID=$userid; include('../output/x_student_info_query.php') ;?>	
  <!-- Work page begins ======================================================================= -->

<div class="sixteen columns">
<div class="eight columns alpha">
  <h3>MAKLUMAT PERIBADI</h3>
  <table width="100%" border="0" class="left">
    <tr>
      <th width="36%" align="left" class="left" scope="row"><strong>TARIKH LAHIR</strong></th>
      <th width="9%">:</th>
      <td width="55%" align="left"><?php $dob=$row['DOB'];  
 if($dob){echo $newDate = date("d-m-Y", strtotime($dob));}?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>IC/MYKAD</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['ICNO']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>JANTINA</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['Gender']; ?></td>
    </tr>
  </table>
  <h3><br />
    MAKLUMAT WARIS</h3>
  <h4><br />
  </h4>
  <table width="100%" border="0" class="left">
    <tr>
    <th width="37%" align="left" class="left" scope="row"><strong>NAMA</strong></th>
    <th width="9%">:</th>
    <td width="54%" align="left" class="left" scope="row"><?php echo $row['f1_name']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>HUBUNGAN</strong></th>
    <th>:</th>
    <td align="left" class="left" scope="row"><?php echo $row['f1_relation']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>TEL</strong></th>
    <th>:</th>
    <td align="left" class="left" scope="row"><?php echo $row['f1_tel']?></td>
  </tr>
</table>
  <h4><br />
  </h4>
  <table width="100%" border="0" class="left">
    <tr>
    <th width="37%" align="left" class="left" scope="row"><strong>NAMA</strong></th>
    <th width="7%">:</th>
    <td width="56%" align="left"><?php echo $row['f2_name']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>HUBUNGAN</strong></th>
    <th>:</th>
    <td align="left"><?php echo $row['f2_relation']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>TEL</strong></th>
    <th>:</th>
    <td align="left"><?php echo $row['f2_tel']?></td>
  </tr>
</table>
  <h3><br />
</h3>
</div>
<div class="eight columns omega">
  <h3>MAKLUMAT SEKOLAH</h3>
  <table width="100%" border="0" class="left">
    <tr>
      <th align="left" class="left" scope="row">NO DIKENALI</th>
      <th>:</th>
      <td align="left"><?php echo $row['MatricNo']; ?></td>
    </tr>
    <tr>
      <th width="36%" align="left" class="left" scope="row"><strong>KELAS</strong></th>
      <th width="9%">:</th>
      <td width="55%" align="left"><?php echo $row0['classname']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>DARJAH</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['tahun']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>STATUS</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['Status']; ?></td>
    </tr>
  </table>
  <h3><br />
    MAKLUMAT KESIHATAN</h3>
  <table width="100%" border="0" class="left">
    <tr>
      <th width="36%" align="left" class="left" scope="row"><strong>KECACATAN</strong></th>
      <th width="9%">:</th>
      <td width="55%" align="left"><?php echo $row['Disability'];?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>JENIS DARAH</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['blood']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>PENYAKIT</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['MedicalCondition']; ?></td>
    </tr>
  </table>
  
  <h3><br />
</h3>
</div>
 <br class="clear" />
</div>

<div class="sixteen columns">
  <h3><br />
    AKTIVITI KOKORIKULUM</h3>
  <table width="90%" border="1" align="center" class="table2">
    <tr>
      <th width="24%" scope="col">AKTIVITI</th>
      <th width="22%" scope="col">PERINGKAT</th>
      <th width="12%" scope="col">PENCAPAIAN</th>
      <th width="22%" scope="col">TARIKH MULA</th>
      <th width="20%" scope="col">TARIKH AKHIR</th>
    </tr>
    <tr>
      <?php do{ ?>
      <td><?php echo $row_3['ex_activity'] ?></td>
      <td><?php echo $row_3['ex_level'] ?></td>
      <td><?php echo $row_3['ex_ach'] ?></td>
      <td><?php echo $row_3['ex_start'] ?></td>
      <td><?php echo $row_3['ex_end'] ?></td>
    </tr>
    <?php } while($row_3=mysql_fetch_assoc($q_sc3)) ;?>
  </table>
  <h3><br />
    REKOD DISIPLIN</h3>
  <table width="90%" border="1" align="center" class="table2">
    <tr>
      <th width="27%" scope="col">AKTIVITI</th>
      <th width="12%" scope="col">PERINGKAT</th>
      <th width="17%" scope="col">TARIKH</th>
      <th width="25%" scope="col">TINDAKAN</th>
      <th width="19%" scope="col">KOMEN</th>
    </tr>
    <tr>
      <?php do{ ?>
      <td><?php echo $row_4['dis_activity'] ?></td>
      <td><?php echo $row_4['dis_level'] ?></td>
      <td><?php echo $row_4['dis_date'] ?></td>
      <td><?php echo $row_4['dis_action'] ?></td>
      <td><?php echo $row_4['dis_comment'] ?></td>
    </tr>
    <?php } while($row_4=mysql_fetch_assoc($q_sc4)) ;?>
  </table>
 
  <h3><br />
    MAKLUMAT ASRAMA</h3>
  <table width="90%" border="1" align="center" class="table2">
    <tr>
      <th width="12%" scope="col">BILIK</th>
      <th width="17%" scope="col">TARIKH MASUK</th>
      <th width="19%" scope="col">BARANGAN</th>
    </tr>
    <tr>
      <?php do{ ?>
      <td><?php echo $row_7['room'] ?></td>
      <td><?php echo $row_7['date_in'] ?></td>
      <td><?php echo $row_7['item'] ?></td>
    </tr>
    <?php }while($row_7=mysql_fetch_assoc($q_sc7)) ;?>
  </table>
  <p></p>
 
  <br class="clear" />
</div>
<?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>