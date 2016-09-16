<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PENYATA YURAN KESELURUHAN </title>
<?php require_once('include/dbcommon.php') ?>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
</head>
<style>
body{
font-size:16px;	
}
 @media print{
	.table_top{ font-size:12px; } 

 }
</style>
<?php
$StudentID=$_GET['StudentID'];

$sql_total = "
SELECT
student_info.StudentID,
SUM(student_billing.amount) AS TotalBill,
SUM(student_billing.amount)-SUM(student_billing.balance) AS TotalPaid,
SUM(student_billing.balance) AS TotalOutstanding
FROM student_info
LEFT OUTER JOIN student_billing ON student_info.StudentID = student_billing.studentID
WHERE student_info.StudentID =$StudentID";
$q_total =mysql_query($sql_total) or die(mysql_error());
$row_total=mysql_fetch_assoc($q_total);

$sql_bill = "
SELECT
student_billing.sid,
student_info.StudentID,
student_billing.amount AS Fees,
student_billing.amount-student_billing.balance AS Paid,
student_billing.balance AS Outstanding,
student_billing.bill_no AS Invoice_No,
student_billing.bill_date AS Invoice_Date,
bill_item.bname AS Item_Name,
student_billing.itemid AS ItemID,
student_info.Name AS Student_Name,
student_info.MatricNo AS Matric_No,
student_info.tahun AS darjah,
student_info.sesi AS sesi,
student_info.Class AS kelas,
`group`.`group` AS nama_kelas
FROM student_info
LEFT JOIN `group` ON student_info.`Class` = `group`.id
LEFT OUTER JOIN student_billing ON student_info.StudentID = student_billing.studentID
INNER JOIN bill_item ON student_billing.item = bill_item.itemid
WHERE student_billing.studentID=$StudentID ";
$q_bill =mysql_query($sql_bill) or die(mysql_error());
$row_bill=mysql_fetch_assoc($q_bill);
//related bill payment

?>
<body>
 <h1> REKOD YURAN PELAJAR 
</h1>
 <p>&nbsp;</p>
 <table width="600" border="1" align="center">
   <tr>
     <th width="26%" scope="col">NAMA</th>
     <th width="16%" scope="col">NO MURID<br /></th>
     <th width="16%" scope="col">DARJAH</th>
     <th width="19%" scope="col">KELAS<br /></th>
     <th width="20%" scope="col">SESI</th>
   </tr>
   <tr>
     <td scope="col"><?php echo $row_bill['Student_Name']; ?></td>
     <td width="16%" scope="col"><?php echo $row_bill['Matric_No']; ?></td>
     <td width="16%" scope="col"><?php echo $row_bill['darjah']; ?></td>
     <td width="19%" scope="col"><?php echo $row_bill['nama_kelas']; ?></td>
     <td width="20%" scope="col"><?php echo $row_bill['sesi']; ?></td>
   </tr>
 </table>
 <br />
<table width="600" border="1" align="center">
   <tr>
     <th>Jumlah Yuran</th>
     <th >Jumlah Dibayar</th>
     <th >Jumlah Tertunggak</th>
   </tr>
   <tr>
     <td><?php echo $row_total['TotalBill']; ?></td>
     <td><?php echo $row_total['TotalPaid']; ?></td>
     <td><?php echo $row_total['TotalOutstanding']; ?></td>
   </tr>
</table>

<p>&nbsp;</p>
 <?php 
 do {  ?>
 <table width="600" border="1" align="center" class="table_top">
   <tr>
    
     <th width="193">Item</th>
     <th width="111">No Bil</th>
     <th width="98">Bil  (RM)</th>
     <th width="78">Bayar  (RM)</th>
     <th width="98">Baki  (RM)</th>
   </tr>
   <tr>
  
     <td><?php echo $row_bill['Item_Name']; ?></td>
     <td><?php echo $row_bill['Invoice_No']; ?></td>
     <td><?php echo $row_bill['Fees']; ?></td>
     <td><?php echo $row_bill['Paid']; ?></td>
     <td><?php echo $row_bill['Outstanding']; ?></td>
   
   </tr>
   <tr>
   <?php 
	 $sid=$row_bill['sid'];
	 $sql_pay = "SELECT pay_id, sid, amount, pay_date, terms, ref_no FROM student_payment WHERE sid=$sid";
$q_pay =mysql_query($sql_pay) or die(mysql_error());
$row_pay=mysql_fetch_assoc($q_pay);
	 ?> <?php  if($row_pay['sid']) { ?>
     <td colspan="5"><p>PAYMENT HISTORY:<br />
     </p>
   
       <table width="500" border="1" align="center" class="table_grey">
         
         <tr>
           <th scope="col">Bayar (RM)</th>
           <th scope="col">Tarikh</th>
           <th scope="col">Terma</th>
           <th scope="col">No Resit</th>
         </tr>
         <tr>
         <?php } ?>
     <?php do {   ?>
           <td><?php echo $row_pay['amount']; ?></td>
           <td><?php if($row_pay['pay_date']){
		   $paydate=$row_pay['pay_date'];  
		   echo $newDate = date("d-m-Y", strtotime($paydate));
		   } ?></td>
           <td><?php echo $row_pay['terms']; ?></td>
           <td><?php echo $row_pay['ref_no']; ?></td>
         </tr><?php } while($row_pay=mysql_fetch_array($q_pay))  ?>
           
       </table>
      <p>&nbsp;</p></td>
   </tr>  
 

   
 </table> <p>
   <?php  } while($row_bill=mysql_fetch_assoc($q_bill))  ?>
</body>
</html>
