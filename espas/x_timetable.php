<?php
require_once('include/dbcommon.php') ;

$scheduleID = $_GET["scheduleID"];

//select campus  setting
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_array($q_01);

//check group name & semester
$sql = "SELECT
`group`.`group` AS groupname,
program.Name AS program_name,
schedule.programID AS darjah,
schedule.batchID AS batch,
schedule.semester AS sem,
schedule.sesi AS sesi
FROM schedule
INNER JOIN `group` ON schedule.groupID = `group`.id
INNER JOIN program ON schedule.programID = program.ID
WHERE schedule.scheduleID ='$scheduleID'";
$result = mysql_query($sql) or die(mysql_error());
$rows = mysql_fetch_array($result);
 
 
//----check class at saturday and sunday--- 
 $holiday=0;
 $max_row = 6;
 
$sqlmax = "select * from schedule_timetable WHERE schedule_timetable.scheduleID ='$scheduleID'";
$resultmax = mysql_query($sqlmax) or die(mysql_error());
while($rowmax = mysql_fetch_array($resultmax))
 { 
  if($rowmax['Day']== "Sabtu" || $rowmax['Day']== "Ahad")
  { $holiday=2; }
 }
$max_row = $max_row + $holiday;
//echo substr("09:00", 0,2);
//$time = strtotime('10:00');
//$startTime = date("H:i", strtotime('-30 minutes', $time));
//$endTime = date("H:i", strtotime('+30 minutes', $time));


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JADUAL WAKTU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 <?php //require_once('x_external_header.php'); ?>
 	<style>
body { padding-top: 20px; font-size:10px; font-family:Verdana, Geneva, sans-serif;  margin-left:10px;}
.container {
  width: 940px auto;
  margin-left: auto;
  margin-right: auto;
  *zoom: 1;
}
.page-header {
  padding-bottom: 17px;
  margin: 18px 0;
  border-bottom: 1px solid #eeeeee;
}
table {
  max-width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  margin-bottom: 18px;
  border:1px #000;
}

 th,  td {
  padding: 8px;
  line-height: 18px;
  text-align: left;
  vertical-align: top;
  border: 1px solid #CCC;
}
 th {
  font-weight: bold;
}

.tablehead td, th{
	border:0px; font-size:13px;
}
.title{
	font-size:14px;
}
.f_right{
	float:right;
	width:400px;
}
.smallhead {
	font-size:9px;
	
}
 </style>
   
 </head>
<body>
<div class="container">
<div class="page-header"><div class="f_right"><strong><?php echo $row_q01['campus_name']?></strong><br />
    <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></div>
  <hr>
  <span class="title"><strong>JADUAL WAKTU </strong><br>
  <strong>Darjah:</strong> <?php echo $rows['darjah']?> <strong>Kelas:</strong> <?php echo $rows['groupname']?> <strong>Sesi:</strong> <?php echo $rows['sesi']?></span></div>
<?php


//$colspan = $end_time - $start_time;
$hari = "";
$days = 1;
$row=1;
$td_color = '#ccc';

?>
<table  class="table table-striped table-bordered table-condensed">
<?php
//----------for <tr>----------
while($row <= $max_row)
{	
	$end = "15:00";
	//---check maximum time------
	  $sql2 = "select * FROM schedule_timetable WHERE schedule_timetable.scheduleID='$scheduleID' ORDER BY end_time 
";
	$result2 = mysql_query($sql2) or die(mysql_error());
	while($row2 = mysql_fetch_array($result2))
	 { 
	
		if($row2['end_time']>$end)
		{
			$end = $row2['end_time'];
		}
	
	 }

	$start = "08:00";
	$day_check = 0;
	
?>
<tr>
<?php
	if($row==1){
//----------for <td>----------
		while($start <= $end)
		{
		
			if($day_check==0){
			?>
			<td>#</td><?php 
			$time = strtotime($start);
			$start = date("H:i", strtotime("-30 minutes", $time));
			}else{ ?><td><div  align="center"><?php echo $start; ?></div></td><?php }?>
			<?php

		
		$time = strtotime($start);
		$start = date("H:i", strtotime("+30 minutes", $time));
		$day_check++;
		}
	}
	else{
	
	if($days == 1){ $hari = "Isnin"; } else if($days == 2){ $hari = "Selasa"; } else if($days == 3){ $hari = "Rabu"; } else if($days == 4){ $hari = "Khamis"; } else if($days == 5){ $hari = "Jumaat"; } else if($days == 6){ $hari = "Sabtu"; } else if($days == 7){ $hari = "Ahad"; }
	
		echo "<td>".$hari."</td>";
		
				while($start <= $end)
				{
				$count=0;
				$sql_db="SELECT schedule_timetable.courseID,
schedule_timetable.start_time AS start_time,
schedule_timetable.end_time AS end_time,
schedule_timetable.staffID,
schedule_timetable.room AS room,
schedule_timetable.`Day` AS `day`,
course.Name AS Coursename,
staff_info.Name AS Staffname,
`group`.`group` AS `group`
FROM schedule
INNER JOIN schedule_timetable ON schedule.scheduleID = schedule_timetable.scheduleID
INNER JOIN course ON schedule_timetable.courseID = course.CourseID
INNER JOIN staff_info ON schedule_timetable.staffID = staff_info.ID
INNER JOIN `group` ON schedule.groupID = `group`.id 
WHERE schedule.scheduleID = '$scheduleID'"; 
				
				$result_db = mysql_query($sql_db) or die(mysql_error());
				$clash = 0;
				$br = "";
			
				while($out = mysql_fetch_array($result_db))
					 { 
					    $colspan = 1;
					 	$course = $out['Coursename'];
						$lect = $out['Staffname'];
						$day = $out['day'];
						$start_time = $out['start_time'];
						$end_time = $out['end_time'];
						$group = $out['groupname'];
						$sem = $out['semester'];
						$room = $out['room'];
					 	
					
						
							if($day==$hari && ($start_time <= $start && $end_time > $start))
							{ 
							$clash++;
							if($clash>1)
							{ $br = "<br/><br/>"; }
							 	if((substr($end_time, 3,2)=="30")&&(substr($start_time, 3,2)=="30")){  $colspan = ($end_time - $start_time) *2;   }
								else if((substr($end_time, 3,2)=="00")&&(substr($start_time, 3,2)=="00")){  $colspan = ($end_time - $start_time) *2;   }
								else if((substr($start_time, 3,2)=="30")&&(substr($end_time, 3,2)=="00")&&(($end_time-$start_time)>1)){  $colspan = ($end_time - $start_time) *2-1;   }
								else if((substr($start_time, 3,2)=="00")&&(substr($end_time, 3,2)=="30")&&( ($end_time-$start_time)>0)){  $colspan = ( $end_time - $start_time) *2 + 1;  }
								
								if($colspan==1){ $hour = "+0 minutes"; }
								else if($colspan==2){ $hour = "+30 minutes"; } 
								else if($colspan==3){ $hour = "+1 hours"; } 
								else if($colspan==4){  $hour = "+1 hours +30 minutes"; } 
								else if($colspan==5){  $hour = "+2 hours"; } 
								else if($colspan==6){  $hour = "+2 hours +30 minutes"; } 
								else if($colspan==7){  $hour = "+3 hours"; } 
								else if($colspan==8){  $hour = "+3 hours +30 minutes"; } 
								$time = strtotime($start);
								$start = date("H:i", strtotime($hour, $time));
								 //echo $start.' ';
							//$start=$start+$colspan-1; 
							echo '<td colspan = "'.$colspan.'"  ><div align=center><p><color>';
						
							echo $br.'<strong>'.$course."</strong><br/>".$lect."<br> (".$room.")";
							$count=1;
							echo "</color></p></div></td>";
							} 
							
							
							
					 }
					if($count==0){ echo "<td ></td>"; }

		
				
				$day_check++;
				$time = strtotime($start);
				$start = date("H:i", strtotime("+30 minutes", $time));
				}
		
		$days++;
	}
//-----close </tr>----------	
?>
</tr>
<?php 
$row++;
}
//-----close </table>-------
?>

</table>
	
</div>
	


</body>
</html>
		
		
		