<?php require_once('include/dbcommon.php');include('x_config.php');  ?>
<?php

$conn = mysql_connect($host, $user, $pwd) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($sys_dbname, $conn);

$today=date('d-m-Y');
$thisyear=date("Y");
$yeardate=substr($thisyear,2,2);

//select campus  settingk;/
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_array($q_01);


//get ID from ref code form button
$sid=$_GET['sid'];

//select invoice item
$sql_item="
SELECT
student_billing.sid,
student_billing.studentID,
student_billing.itemid,
student_billing.amount,
student_billing.bill_no,
SUM(student_payment.amount) AS paid_amount,
student_billing.balance,
student_billing.sstatus,
bill_item.bname AS itemName,
student_info.Name AS namaPelajar
FROM student_billing
LEFT OUTER JOIN student_payment ON student_billing.sid = student_payment.sid
INNER JOIN bill_item ON student_billing.itemid = bill_item.itemid
INNER JOIN student_info ON student_billing.studentID = student_info.StudentID
WHERE student_billing.sid='$sid'
";
$query_item=mysql_query($sql_item,$conn) or die(mysql_error());
$row_item= mysql_fetch_assoc($query_item);
$sum_paid=$row_item['paid_amount'];
//total amount
/*
$sql_total="
SELECT
SUM(quantity*priceUnit*(100-discount)/100) AS Amount,
SUM(discount) AS discount2
FROM item WHERE invID=$invID";
$query_total=mysql_query($sql_total,$conn) or die(mysql_error());
$row_total= mysql_fetch_assoc($query_total);
$discount=$row_total['discount2'];
*/
/*
$invoiceNo=substr($row1['refCode'],2,7);	
$receipt='R'.$invoiceNo.'-'.$row1['receiptCount'];
*/
?>
  <?php  

//select sum total paid 
/*
$sql_sum = "SELECT SUM(payAmount) AS sumpaid FROM payment WHERE invID=$invID";
$query_sum = mysql_query($sql_sum,$conn);
$row_sum=mysql_fetch_assoc($query_sum);
$sum_paid=$row_sum['sumpaid'];
*/

//select paid item
$sql_paid = "SELECT pay_id, sid, amount, pay_date, terms, ref_no FROM student_payment WHERE sid=$sid";
$query_paid = mysql_query($sql_paid,$conn);
$row_paid=mysql_fetch_assoc($query_paid);
?>


<link href="styles/css_simple.css" rel="stylesheet" type="text/css">
<body leftmargin="100px" topmargin="0px" marginwidth="100px" marginheight="0px">
<table width="512" border="0" align="center" class="left">
  <tr>
    <th width="11%" scope="row"><img src="<?php echo logo() ?>"/></th>
    <td width="2%"><br /></td>
    <td width="87%"><?php echo head() ?></td>
  </tr>
</table>
<h1>NOTIS YURAN</h1>
<table width="100%" border="0" class="table3">
  <tr>
    <td width="46%" height="93" class="left"><strong>Kepada Waris </strong><br><?php echo $row_item['namaPelajar'];?>
</td>
    <td width="54%" class="left"><strong>Tarikh:</strong> <?php echo $today ; ?></td>
  </tr>
</table>
<p><?php echo $row1['title'] ?></p>
<p>Terima Kasih atas bayaran:<br>
  <strong>Nama Bil: </strong> <?php echo $row_item['itemName']; ?> <span class="left"><strong>Bil No</strong>:<?php echo $row_item['bill_no']; ?></span></p>
<table width="100%" border="1" align="center" class="table2">
  <tr>
    <th>Bayaran (RM)</th>

    <th>Tarikh</th>
    <th>Kaedah</th>
    <th>No  Bayaran</th>
    <th>No Resit</th>
  </tr>
  <?php do { ?>
  <tr>
    <td align="center"><?php $amount_paid=$row_paid['amount'];
	echo number_format($amount_paid, 2) ?></td>
 
    <td align="center"><?php 
	$originalDate_paid=$row_paid['pay_date'];
 echo $newDate2 = date("d-m-Y", strtotime($originalDate_paid));
	 ?></td>
    <td align="center"><?php  echo $row_paid['terms'] ?></td>
    <td align="center"><?php echo $row_paid['ref_no'] ?></td>
    <td align="center"><?php echo $row_paid['sid'].$row_paid['pay_id'] ?></td>
    </tr>
  <?php } while ($row_paid= mysql_fetch_assoc($query_paid)); ?>
</table>
<p class="total_amount">Jumlah Dibayar: RM <?php echo number_format($sum_paid, 2);
?>

<p class="total_amount">
  <?php 
     if($row_item['balance']!=0){
	echo 'Baki Tertunggak: RM';
	echo number_format($row_item['balance'], 2);
	 };
?>
</p>
<p>&nbsp;</p>
<p class="footer">*********Resit ini dijana oleh komputer. Tandatangan tidak diperlukan. *********</p>
</body>