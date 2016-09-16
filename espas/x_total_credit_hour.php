<?php
$cgpa =0;
$iD = $student_id[$number];

 $sqlTotal ="SELECT
student_info.StudentID,
student_course.Sem,
course.CourseID,
course.Credit,
marking.total
FROM student_info
INNER JOIN student_course ON student_info.StudentID = student_course.StudentID
INNER JOIN course ON student_course.CourseID = course.CourseID
INNER JOIN `group` ON student_info.`Class` = `group`.id
INNER JOIN program ON student_info.DipID = program.ID
INNER JOIN marking ON student_info.BranchID = marking.branchID AND program.ID = marking.programID AND `group`.id = marking.groupID AND course.CourseID = marking.courseID AND student_info.StudentID = marking.studentID
WHERE (student_info.StudentID = '$iD') AND (student_course.Sem <=$semester)
";
$rTotal = mysql_query($sqlTotal) or die(mysql_error());
$count=0;
$pointR=0;
$pointRT=0;
while($rT = mysql_fetch_array($rTotal))
{
	//$rT['total'];
	$count += $rT['Credit'];
	
	
			$sCal = "select * from grade";
			$rCal = mysql_query($sCal) or die(mysql_error());
			while($calR = mysql_fetch_array($rCal))
			{
			if($rT['total']>=$calR['Mark_Initial'] && $rT['total'] <=$calR['Mark_End']){  $pointe=$calR['Point']; }
			
			}
			$pointR = $pointe * $rT['Credit'];
			$pointRT += $pointR;
}
echo $count;
$cgpa = number_format($pointRT/$count,2);
?>