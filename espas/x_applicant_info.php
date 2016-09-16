<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STUDENT INFORMATION </title>
<?php require_once('include/dbcommon.php') ?>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
<body>
<p>
 <?php 
$enrolID = $_GET['enrolID'];

//select campus  settingk;/
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_array($q_01);

require_once('x_applicant_info_query.php');
?>
</p>
<table width="98%" border="1" align="center" class="table_cover">
  <tr>
    <th valign="top" scope="col">
      <table width="500" border="0" align="center" class="left">
        <tr>
          <th width="24%" scope="row"><img src="images/<?php echo $row_q01['logo']?>"/></th>
          <td width="5%"><br />          </td>
          <td width="71%"><strong><?php echo $row_q01['campus_name']?></strong><br />
            <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></td>
        </tr>
      </table>
      
      <div class="div_all">
        <h2><?php echo $row['Name']; ?><br />
        <?php echo $row['MatricNo']; ?>        </h2>
   
        <div class="divleft">
          <h2>PERSONAL INFORMATION</h2>
          <table width="100%" border="0" class="left">
            <tr>
              <th width="36%" class="left" scope="row"><strong>BIRTHDAY</strong></th>
              <th width="9%">:</th>
              <td width="55%"><?php $dob=$row['DOB'];  
 echo $newDate = date("d-m-Y", strtotime($dob));?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>IC</strong></th>
              <th>:</th>
              <td><?php echo $row['ICNO']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>MARITAL STATUS</strong></th>
              <th>:</th>
              <td><?php echo $row['married']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>GENDER</strong></th>
              <th>:</th>
              <td><?php echo $row['Gender']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>RACE</strong></th>
              <th>:</th>
              <td><?php echo $row['race']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>NATIONALITY</strong></th>
              <th>:</th>
              <td><?php echo $row['Nationality']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>RELIGION</strong></th>
              <th>:</th>
              <td><?php echo $row['Religion']; ?></td>
            </tr>
          </table>
          <h2>CONTACT INFORMATION</h2>
          <table width="100%" border="0" class="left">
            <tr>
              <th width="36%" class="left" scope="row"><strong>ADDRESS</strong></th>
              <th width="9%">:</th>
              <td width="55%"><?php echo $row['Address1']. ',' ;echo $row['Postcode']. ',';echo $row['City']. ','; echo $row['State'] ;?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>TEL NO</strong></th>
              <th>:</th>
              <td><?php echo $row['HomeTelephone']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>HP NO</strong></th>
              <th>:</th>
              <td><?php echo $row['MobileTelephone']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>1# Kin Name</strong></th>
              <th>:</th>
              <td rowspan="2"><?php echo $row['f1_name']. ',<br>('; echo $row['f1_relation']. '),<br>';echo $row['f1_tel'] ?></td>
            </tr>
            <tr>
              <th class="left" scope="row">&nbsp;</th>
              <th>&nbsp;</th>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>2# Kin Name</strong></th>
              <th>:</th>
              <td><?php echo $row['f2_name']. ',<br>('; echo $row['f2_relation']. '),<br>';echo $row['f2_tel'] ?></td>
            </tr>
          </table>
          <h2>MEDICAL INFORMATION</h2>
          <table width="100%" border="0" class="left">
            <tr>
              <th width="36%" class="left" scope="row"><strong>DISABILITY</strong></th>
              <th width="9%">:</th>
              <td width="55%"><?php echo $row['Disability'];?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>BLOOD TYPE</strong></th>
              <th>:</th>
              <td><?php echo $row['blood']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>MEDICAL CONDITION</strong></th>
              <th>:</th>
              <td><?php echo $row['MedicalCondition']; ?></td>
            </tr>
          </table>
          <p>&nbsp;</p>
        </div>
     <div class="divright">
       <h2>PROGRAM INFO</h2>
       <table width="100%" border="0" class="left">
         <tr>
           <th width="36%" class="left" scope="row"><strong>PROGRAM</strong></th>
           <th width="9%">:</th>
           <td width="55%"><?php echo $row3[programname]; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>DATE APPLY</strong></th>
           <th>:</th>
           <td><?php $Date_Apply=$row['Date_Apply'];  
 echo $newDate2 = date("d-m-Y", strtotime($Date_Apply));?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>STATUS</strong></th>
           <th>:</th>
           <td><?php echo $row['Status']; ?></td>
         </tr>
       </table>
       <h2>ACADEMIC BACKROUND</h2>
Academic Qualification: <?php echo $row[qua_level] ;?><br />
<br />
<table width="100%" border="1" align="center" class="left">
  <tr>
    <th width="45%" scope="col">Subject</th>
    <th width="55%" scope="col">Grade</th>
  </tr>
  <tr>
    <?php do{ ?>
    <td><?php echo $row[q1_s] ?></td>
    <td><?php echo $row[q1_g]?></td>
  </tr>
  <tr>
    <td><?php echo $row[q2_s] ?></td>
    <td><?php echo $row[q2_g]?></td>
  </tr>
  <tr>
    <td><?php echo $row[q3_s] ?></td>
    <td><?php echo $row[q3_g]?></td>
  </tr>
  <tr>
    <td><?php echo $row[q4_s] ?></td>
    <td><?php echo $row[q2_g]?></td>
  </tr>
  <tr>
    <td><?php echo $row[g5_s] ?></td>
    <td><?php echo $row[g5_g]?></td>
  </tr>
  <tr>
    <td><?php echo $row[g6_s] ?></td>
    <td><?php echo $row[g6_g]?></td>
  </tr>
  <tr>
    <td><?php echo $row[g7_s] ?></td>
    <td><?php echo $row[g7_g]?></td>
  </tr>
  <tr>
    <td><?php echo $row[g8_s] ?></td>
    <td><?php echo $row[g8_g]?></td>
  </tr>
  <?php if ($row[g9_s]) { ?>
  <tr>
    <td><?php echo $row[g9_s] ?></td>
    <td><?php echo $row[g9_g]?></td>
  </tr>
  <?php } ?>
  <?php } while($row_1=mysql_fetch_array($q_sc)) ;?>
</table>
<p>&nbsp;</p>
       <h2>&nbsp;</h2>
     </div>
     <div class="clear"></div>
     <div class="divcenter">
       <h2>&nbsp;</h2>
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

<!--
<script type="text/javascript">
print();
</script>
-->
</body>
</html>