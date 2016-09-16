<?php
/*
 * Exam Eligibility
 *
 * Author: Zon Hisham Z.Abidin <zonhisham@gmail.com>
 * Date written:  23/4/2013
 * Date modified: 
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
    <title>Examination Eligibility</title>
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
      $header = common_slip_header(0,0,0,"EXAMINATION ELIGIBILITY","","");
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

      if ($preview || $generate) {
        $sql = "select student_info.name as studentname,
                       student_info.icno,
                       student_info.matricno,
                       student_info.dipid,
                       student_info.batchid,
                       `group`.`group` as class,
                       program.name as programname
                       from student_info
                       inner join `group` on `group`.id=student_info.class
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
            $pid         = $row['dipid'];
            $batch       = $row['batchid'];
            $class       = $row['class'];
            $matnum      = $row['matricno'];
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
          <th align=left>Batch </th><td><?php echo ': '.$batch ?></td>
        </tr>
        <tr>
          <th align=left>Class </th><td><?php echo ': '.$class ?></td>
        </tr>
        <tr>
          <th align=left>Programme </th><td><?php echo ': '.$programname ?></td>
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
          <th><div align=center>CREDIT HOURS</div></td>
        </tr>

      <?php 
          $sqlout = "select course.name,
                            course.code,
                            course.credit
                            from course 
                            inner join student_course on course.courseid=student_course.courseid 
                            where student_course.studentid=$studentid
                            and student_course.semester=$semester
                            and student_course.programid=$pid";
  
          $resultout  = mysql_query($sqlout) or die(mysql_error());

          while($rows = mysql_fetch_array($resultout)) { 
      ?>
        <tr>
          <td><div align="left"><?php echo $rows['code']; ?></div></td>
          <td><?php echo $rows['name']; ?></td>
          <td><div align="center"><?php echo $rows['credit']; ?></div></td>
        </tr>
      <?php
          } //while
      ?>
      </table>
  
      <br/>
      <br/>
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
