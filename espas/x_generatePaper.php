<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUESTION EXAM </title>
<?php require_once('db/db.php') ?>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
<body>
<p>
  <?php 
$id = $_REQUEST['paperID'];

//select campus  setting
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_array($q_01);


//select cover config
$sql_1 = "SELECT ID,Field_Name FROM setting WHERE ID =201";
$q_1 = mysql_query($sql_1);
$row_q1=mysql_fetch_array($q_1);


//select paper 
$sql = "SELECT * FROM question_paper where paperID = '$id'";
$result_view = mysql_query($sql);
$row =mysql_fetch_array($result_view);

$courseID = $row['courseID']; 
$paper_Type = $row['paper_type']; 
$paperCover = $row['date_created'];


?>
 <?php
$sql2 = "SELECT
question.question_id,
question.courseID AS course,
question.question AS question,
question.answer AS answer,
question_select.question_id AS question_id1,
question_select.paperID,
question_select.chapter,
question_select.position,
question_select.mark AS mark,
course.Name AS coursename
FROM question
INNER JOIN question_select ON question.question_id = question_select.question_id
INNER JOIN course ON question.courseID=course.CourseID
WHERE question_select.paperID='$id'
ORDER BY question_select.position ASC
";
$result_view2 = mysql_query($sql2); 
$row2 = mysql_fetch_array($result_view2);
?>
</p>
<table width="90%" border="1" align="center" class="table_cover">
  <tr>
    <th scope="col">
      <table width="500" border="0" align="center" class="left">
        <tr>
          <th width="24%" scope="row"><img src="images/<?php echo $row_q01['logo']?>"/></th>
          <td width="5%"><br />          </td>
          <td width="71%"><strong><?php echo $row_q01['acronyim']?></strong><br />
            <strong><?php echo $row_q01['campus_name']?></strong><br />
            <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    <p>
     
    </p>
    <table width="600" border="0" align="center">
      <tr>
        <th align="center" valign="middle" scope="col"><h1><?php echo $paper_Type ?></h1></th>
      </tr>
      <tr>
        <th align="center" valign="middle" scope="col"><h2>
                    <?php echo $row2['coursename'] ?></h2></th>
      </tr>
      <tr>
        <th align="center" valign="middle">Lecture:<br />
          <br />
          _____________________________________________</th>
      </tr>
      <tr>
        <th align="center" valign="middle">Date:<br />
          <br />
          _____________________________________________</th>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="474" border="0" align="center">
      <tr>
        <th width="19%" align="left" scope="col">Name</th>
        <th width="6%" scope="col">:</th>
        <td width="75%" scope="col"><p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <th align="left">Matric No</th>
        <th>:</th>
        <td><p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <th align="left">Batch</th>
        <th>:</th>
        <td><p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <th align="left">Class</th>
        <th>:</th>
        <td><p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p></th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div style="page-break-before:always"></div>
<div class="height_divider"></div>
<p></p>

<?php
$i=1;
do{
 ?>
<span class="fontsize14">QUESTION <?php echo $i++ ?>:</span><span class="floatright"> [ <?php echo $row2['mark'] ?> MARK ]</span>
<span class="fontsize14"><br /><?php echo $row2['question'] ?></span>

<p>&nbsp; </p>

 <?php } while($row2 = mysql_fetch_array($result_view2)) ?>

<!--
<script type="text/javascript">
print();
</script>
-->
</body>
</html>