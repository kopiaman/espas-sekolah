<?php
/*
 * Exam Slip Generator
 * - only need to pass matric and semester number before generating exam slip
 *
 * Author: Zon Hisham Z.Abidin <zonhisham@gmail.com>
 * Date written:  13/4/2013
 * Date modified: 23/4/2013
 *      - change of field name sem to semester in student_course table
 *      - direct call from PHPRunner, so we get rid of input form
 *      - remove Preview button
 *      - set $preview to TRUE bcos we want to 'preview' when we start runnning the script
 *      - added programid clause to $sqlout
 *      - added Cancel button
 *     
 *
 */
require_once("include/dbcommon.php");
require_once("x_config.php");

$preview   = TRUE;
$studentid = $semester = $generate = NULL;
$studentid = isset($_GET["StudentID"]) ?  $_GET["StudentID"] : NULL;
$semester  = isset($_GET["Semester"]) && is_numeric($_GET["Semester"]) ? $_GET["Semester"] : NULL;
if (isset($_GET['generate']) && $_GET['generate'] ) {
  $generate = TRUE;
}
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Examination Result Slip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php require_once('x_external_header.php') ?>
    <script language="JavaScript">
      function autoSubmit() {
        var formObject = document.forms['exam_slip'];
        formObject.submit();
      }
    </script>

    <style>
      body { padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */ }
    </style>
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
  </head>

  <body>
    <div class="container">

      <?php
      $header = common_slip_header(0,0,0,"EXAMINATION RESULT SLIP","MF-03-01 Rev.1","01-Dec-10");
      print $header;

      if (!$generate) { //tak perlu nak output form
      ?>
      <div class="row">
        <div class="span12">
          <form name="exam_slip" class="well">
            <div class="row">
              <div class="span4 offset8">
                <input type=hidden name=StudentID value="<?php echo $studentid ?>">
                <input type=hidden name=Semester value="<?php echo $semester ?>">
                <input type="submit" name="generate" class="btn btn-primary" value="Generate & Print"/>
                <input type="button" name="cancel" class="btn " value="Cancel" onClick="window.close()">
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php
      }
      ?>

      <?php 
      if ($preview || $generate) {
        $sql = "select student_info.name as studentname,
                       student_info.icno,
                       student_info.matricno,
                       student_info.dipid,
                       program.name as programname
                       from student_info
                       inner join program on student_info.dipid=program.id
                       where student_info.studentid='$studentid'";

        $result = mysql_query($sql) or die(mysql_error());
        if (mysql_num_rows($result) == 0) {
          die("<font color=red>No records found</font>");
        }
        else {
          while ($row = mysql_fetch_assoc($result)) { 
            $studentname = $row['studentname'];
            $icno        = $row['icno'];
            $matnum      = $row['matricno'];
            $programid   = $row['dipid'];
            $programname = $row['programname'];
            $cat         = $row['cat'];
          }
      ?>
      <table width="80%"  border=0>
        <tr>
          <th align=left width="20%">Name </th><td><?php echo ': '.$studentname ?></td>
        </tr>
        <tr>
          <th align=left>Matrix No </th><td><?php echo ': '.$matnum ?></td>
        </tr>
        <tr>
          <th align=left>I/C No </th><td><?php echo ': '.$icno ?></td>
        </tr>
        <tr>
          <th align=left>Programme </th><td><?php echo ': '.$programname ?></td>
        </tr>
        <tr>
          <th align=left>Category </th><td><?php echo ': '.$cat ?></td>
        </tr>
        <tr>
          <th align=left>Semester No </th><td><?php echo ': '.$semester ?></td>
        </tr>
      </table>

      <br/>
      <table width="100%"  class="table table-striped table-bordered table-condensed" >
        <tr valign=middle>
          <th><div align=center>CODE</div></td>
          <th><div align=center>SUBJECT</div></td>
          <th><div align=center>MARKS %</div></td>
          <th><div align=center>GRADE</div></td>
          <th><div align=center>CREDIT HOURS</div></td>
          <th><div align=center>UNIT GRADE</div></td>
          <th><div align=center>GRADE POINT</div></td>
          <th><div align=center>STATUS</div></td>
        </tr>

      <?php 
          $sqlout = "select course.name,
                            course.code,
                            course.credit,
                            course.unit_grade,
                            student_course.final_exam,
                            student_course.exam_status,
                            student_course.exam_remark 
                            from student_course 
                            inner join course on course.courseid=student_course.courseid 
                            where student_course.studentid=$studentid
                            and student_course.semester=$semester
                            and student_course.programid=$programid";
  
          $resultout  = mysql_query($sqlout) or die(mysql_error());
          $unit_taken = mysql_num_rows($resultout);
          $unit_passed = 0;
          $unit_counted = 0;
          $grade_point = 0;

          while($rows = mysql_fetch_array($resultout)) { 
            if (grepPass($rows['exam_status'])) {
              $unit_passed++;
            }
            $unit_counted++;

            if ($rows['unit_grade'] != 0) {
              $gpoint = $rows['unit_grade']*$rows['credit'];
              $grade_point+=$gpoint;
            }

            $grade = getgrade($rows['final_exam']);
            $status_str = ($rows['exam_remark'] != NULL) ? $rows['exam_status']."; ".$rows['exam_remark'] : $rows['exam_status'];
      ?>
        <tr>
          <td><div align="left"><?php echo $rows['code']; ?></div></td>
          <td><?php echo $rows['name']; ?></td>
          <td><div align="center"><?php echo $rows['final_exam']; ?></div></td>
          <td><div align="center"><?php echo $grade; ?></div></td>
          <td><div align="center"><?php echo $rows['credit']; ?></div></td>
          <td><div align="center"><?php if ($rows['unit_grade']==0) echo '-'; else echo number_format($rows['unit_grade'],2); ?></div></td>
          <td><div align="center"><?php if ($rows['unit_grade']==0) echo '-'; else echo number_format($gpoint,2); ?></div></td>
          <td><div align="center"><?php  echo $status_str ?></div></td>
        </tr>
      <?php
          } //while
      ?>
      </table>
  
      <br/>
      <br/>
      <table width="80%" border=1>
        <tr>
          <th><div align=center>&nbsp;</div></th>
          <th><div align=center>Unit Taken</div></th>
          <th><div align=center>Unit Passed</div></th>
          <th><div align=center>Unit Counted</div></th>
          <th><div align=center>Grade Point</div></th>
          <th><div align=center>GPA</div></th>
        </tr>
        <tr>
          <td>Semester <?php echo $semester ?></td>
          <td align=center><?php echo $unit_taken ?></td>
          <td align=center><?php echo $unit_passed ?></td>
          <td align=center><?php echo $unit_counted ?></td>
          <td align=center><?php echo number_format($grade_point,2) ?></td>
          <td align=center><?php if ($unit_counted==0) echo 'error'; else echo number_format($grade_point/$unit_counted,2); ?></td>
        </tr>

        <?php
          // Compute cumulative score for ALL semesters
          $sqlout = "select course.name,
                            course.code,
                            course.credit,
                            course.unit_grade,
                            student_course.final_exam,
                            student_course.exam_status,
                            student_course.exam_remark
                            from course
                            inner join student_course on course.courseid=student_course.courseid
                            where student_course.studentid=$studentid
                            and student_course.programid=$programid";
                            //note: no clause for semester as we want to accumulate reault for ALL semesters

          $resultout  = mysql_query($sqlout) or die(mysql_error());
          $unit_taken = mysql_num_rows($resultout);
          $unit_passed = 0;
          $unit_counted = 0;
          $grade_point = 0;

          while($rows = mysql_fetch_array($resultout)) {
            if (grepPass($rows['exam_status'])) {
              $unit_passed++;
            }
            $unit_counted++;

            if ($rows['unit_grade'] != 0) {
              $gpoint = $rows['unit_grade']*$rows['credit'];
              $grade_point+=$gpoint;
            }
          }
          ?>

        <tr>
          <td>Cumulative</td>
          <td align=center><?php echo $unit_taken ?></td>
          <td align=center><?php echo $unit_passed ?></td>
          <td align=center><?php echo $unit_counted ?></td>
          <td align=center><?php echo number_format($grade_point,2) ?></td>
          <td align=center><?php if ($unit_counted==0) echo 'error'; else echo number_format($grade_point/$unit_counted,2); ?></td>
        </tr>
        <tr>
          <td>Status</td>
          <td colspan=5 align=center>PASS</td>
        </tr>
      </table>
  
      <br/><b>This is Computer Generated Document. No Signature Required</b>
  
        
      <?php 
        } //else --> mysql_num_rows($result)
        if ($generate) {
      ?>
        <script type="text/javascript">
          print();
        </script>
      <?php
        }
      } //if $preview || $generate
      ?>
  
  </div> <!-- /container -->
  
  <!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="db/js/bootstrap.min.js"></script>
  <script src="db/js/jquery.min.js"></script>
  <script src="db/js/jquery-ui.min.js"></script>
  
  </body>
  </html>
