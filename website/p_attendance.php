<?php include_once('inc_head.php') ?>
  <!-- Work page begins ======================================================================= -->
<?php


$sql_att= "
SELECT
student_course.StudentID,
student_course.CourseID,
student_absent.reason,
coalesce(sum(student_absent.reason='ABS' OR student_ab`sent.reason='L'), 0) AS abs_count,
SUM(TIME_FORMAT(TIMEDIFF(t_facilities_timetable.end_time,t_facilities_timetable.start_time) ,'%H')) AS abs_hour,
program_course.total_hour,
100-(SUM(TIME_FORMAT(TIMEDIFF(t_facilities_timetable.end_time,t_facilities_timetable.start_time) ,'%H')) / program_course.total_hour*100) AS att_percent,
student_absent.program,
student_absent.batch,
student_absent.`class`
FROM student_absent
INNER JOIN t_facilities_timetable ON student_absent.courseID = t_facilities_timetable.courseID AND student_absent.dates = t_facilities_timetable.`date` AND student_absent.program = t_facilities_timetable.program AND student_absent.batch = t_facilities_timetable.batch AND student_absent.`class` = t_facilities_timetable.`class`
INNER JOIN program_course ON student_absent.program = program_course.ProgramID AND student_absent.batch = program_course.BatchID AND student_absent.courseID = program_course.CourseID
RIGHT OUTER JOIN student_course ON student_course.StudentID = student_absent.StudentID AND student_course.CourseID = student_absent.courseID
WHERE student_absent.StudentID=$userid
";
$query_att=mysql_query($sql_att,$conn);
$row_att=mysql_fetch_assoc($query_att);

?>
<div class="sixteen columns">

 <br class="clear" />
</div>

<?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>