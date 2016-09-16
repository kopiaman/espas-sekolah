<?php
//select class
$sql_0 = "SELECT
student_info.StudentID,
`group`.`group` AS classname
FROM student_info
INNER JOIN `group` ON `group`.id = student_info.`Class`
WHERE student_info.StudentID='$studentID'";
$q_0 = mysql_query($sql_0);
$row0=mysql_fetch_array($q_0);


//select STUDENT INFO
$sql_02 = "SELECT * FROM student_info WHERE StudentID='$studentID'";
$q_02 = mysql_query($sql_02);
$row=mysql_fetch_array($q_02);


//select extracurruicular
$sql_sc3="SELECT
student_info.StudentID,
student_extracurricular.Activity AS ex_activity,
student_extracurricular.Achievement AS ex_ach,
student_extracurricular.Start_Date AS ex_start,
student_extracurricular.End_Date AS ex_end,
student_extracurricular.`Level` AS ex_level
FROM student_info
INNER JOIN student_extracurricular ON student_info.StudentID = student_extracurricular.StudentID
WHERE student_info.StudentID ='$studentID'";
$q_sc3 = mysql_query($sql_sc3);
$row_3=mysql_fetch_array($q_sc3);

//select discipline
$sql_sc4="SELECT
student_info.StudentID,
student_discipline.Activity AS dis_activity,
student_discipline.`Level` AS dis_level,
student_discipline.Date_Committed AS dis_date,
student_discipline.Action_Taken AS dis_action,
student_discipline.`Comment` AS dis_comment
FROM student_info
INNER JOIN student_discipline ON student_info.StudentID = student_discipline.StudentID
WHERE student_info.StudentID ='$studentID'";
$q_sc4 = mysql_query($sql_sc4);
$row_4=mysql_fetch_array($q_sc4);



//select hostel
$sql_sc7="SELECT
student_info.StudentID,
student_hostel.HostelID As hostel,
student_hostel.Room_No AS room,
student_hostel.CheckInDate AS date_in,
student_hostel.CheckOutDate AS date_out,
student_hostel.Items AS item
FROM student_info
INNER JOIN student_hostel ON student_info.StudentID = student_hostel.StudentID
WHERE student_info.StudentID ='$studentID'";
$q_sc7 = mysql_query($sql_sc7);
$row_7=mysql_fetch_array($q_sc7);

/*-----------START OF ATTENDACE QUERY -------------------*/


//select attendance

$sql_sc8="SELECT
student_attendance.amonth AS amonth, student_attendance.ayear AS ayear,
coalesce(sum(student_attendance.`1`=1), 0)  +
coalesce(sum(student_attendance.`2`=1), 0)  +
coalesce(sum(student_attendance.`3`=1), 0)  +
coalesce(sum(student_attendance.`4`=1), 0)  +
coalesce(sum(student_attendance.`5`=1), 0)  +
coalesce(sum(student_attendance.`6`=1), 0)  +
coalesce(sum(student_attendance.`7`=1), 0)  +
coalesce(sum(student_attendance.`8`=1), 0)  +
coalesce(sum(student_attendance.`9`=1), 0)  +
coalesce(sum(student_attendance.`10`=1), 0) +
coalesce(sum(student_attendance.`11`=1), 0) +
coalesce(sum(student_attendance.`12`=1), 0) +
coalesce(sum(student_attendance.`13`=1), 0) +
coalesce(sum(student_attendance.`14`=1), 0) +
coalesce(sum(student_attendance.`15`=1), 0) +
coalesce(sum(student_attendance.`16`=1), 0) +
coalesce(sum(student_attendance.`17`=1), 0) +
coalesce(sum(student_attendance.`18`=1), 0) +
coalesce(sum(student_attendance.`19`=1), 0) +
coalesce(sum(student_attendance.`20`=1), 0) +
coalesce(sum(student_attendance.`21`=1), 0) +
coalesce(sum(student_attendance.`22`=1), 0) +
coalesce(sum(student_attendance.`23`=1), 0) +
coalesce(sum(student_attendance.`24`=1), 0) +
coalesce(sum(student_attendance.`25`=1), 0) +
coalesce(sum(student_attendance.`26`=1), 0) +
coalesce(sum(student_attendance.`27`=1), 0) +
coalesce(sum(student_attendance.`28`=1), 0) +
coalesce(sum(student_attendance.`29`=1), 0) +
coalesce(sum(student_attendance.`30`=1), 0) +
coalesce(sum(student_attendance.`31`=1), 0) AS absent
FROM student_attendance 
WHERE student_attendance.StudentID ='$studentID' 
GROUP BY student_attendance.ayear,student_attendance.amonth ";
$q_sc8= mysql_query($sql_sc8);
$row_8=mysql_fetch_array($q_sc8);

/*-------------END OF ATTENDANCE QUERY -------------*/
//select billing

$sql_sc9="
SELECT
student_billing.amount AS Bill,
student_billing.amount-student_billing.balance AS Paid,
student_billing.balance AS Outstanding,
student_billing.bill_no,
student_billing.bill_date,
student_billing.sstatus,
student_billing.remarks,
bill_item.bname AS item_name
FROM student_billing
INNER JOIN student_info ON student_billing.studentID = student_info.StudentID
INNER JOIN bill_item ON student_billing.itemid = bill_item.itemid
WHERE student_info.StudentID='$studentID'";
$q_sc9= mysql_query($sql_sc9);
$row_9=mysql_fetch_array($q_sc9);

?>