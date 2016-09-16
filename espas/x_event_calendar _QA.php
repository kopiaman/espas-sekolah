<?php
/*
 * Calendar events viewer
 * - made use of activecalendar class from http://www.micronetwork.de/activecalendar/
 * - made use of overlib js from http://www.bosrup.com/web/overlib/
 *
 * Author: Zon Hisham Z.Abidin <zonhisham@gmail.com>
 * Date written:  30/4/2013
 * Date modified: 2/5/2013
 *      - add filtering by event type
 *      
 *
 *
**/


require_once("x_config.php");
require_once("x_event_activecalendar.php");

$info = namelogo();
$_GET['css'] = "x_event_antique.css";
$category  = $_GET['category'];
if (strlen($category) == 0) $category = 'default';

$myurl   = $_SERVER['PHP_SELF']."?category=".urlencode($category);
$yearID  = false; // init false to display current year
$monthID = false; // init false to display current month
$dayID   = false; // init false to display current day
$cal     = new activeCalendar($yearID,$monthID,$dayID);

extract($_GET); // get the new values (if any) of $yearID,$monthID,$dayID
$cal  = new activeCalendar($yearID,$monthID,$dayID);
$prev = "<img src=\"x_event_prev.png\" border=\"0\" alt=\"&lt;&lt;\" />"; // prev button
$next = "<img src=\"x_event_next.png\" border=\"0\" alt=\"&gt;&gt;\" />"; // next button
$cal->enableYearNav($myurl,$prev,$next); // enables navigation controls

?>
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>MATA Calendar Events</title>
<link rel="stylesheet" type="text/css" href="<?php print @$_GET['css'] ?>" />
<script type="text/javascript" src="x_event_overlib_mini.js"></script>
<script language="JavaScript">
  function autoSubmit() {
    var formObject = document.forms['catform'];
    formObject.submit();
  }
</script>
</head>
<body>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>

<?php
if ($category == 'default') {
  $sql = "select title, category, content, year(date_start) as yearstart, day(date_start) as daystart, month(date_start) as monthstart, year(date_end) as yearend, day(date_end) as dayend, month(date_end) as monthend from calendar ";
}
else {
  $sql = "select title, category, content, year(date_start) as yearstart, day(date_start) as daystart, month(date_start) as monthstart, year(date_end) as yearend, day(date_end) as dayend, month(date_end) as monthend from calendar where category='$category'";
}
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_array($result)) {
  $title      = $row['title'];
  $cat        = $row['category'];
  $content    = $row['content'];
  $daystart   = $row['daystart'];
  $monthstart = $row['monthstart'];
  $yearstart  = $row['yearstart'];
  $dayend     = $row['dayend'];
  $monthend   = $row['monthend'];
  $yearend    = $row['yearend'];

  //this will be fed to setEvent method
  $overdiv    = "\"javascript:void(0);\" onmouseover=\"return overlib('$content', CAPTION, '$title');\" onmouseout=\"return nd();\"";

  //switch CSS class (color) according to event type
  switch ($cat) {
    case "Exam (Private)":
      $eventcss = "private_exam";
      break;
    case "Exam (MOE)":
      $eventcss = "moe_exam";
      break;
  }

  /*
   * to cater for events which spans over several months
   *
   */
  if ($monthend > $monthstart) {
    for ($m=$monthstart; $m<=$monthend; $m++) {
      if ($m == $monthstart) {
        $lastday_curr_month = date('t', mktime(0, 0, 0, $m, 1, $yearstart));
        for ($x=$daystart;$x<=$lastday_curr_month;$x++) {
          $cal->setEvent($yearstart,$monthstart,$x,$eventcss);
        }
      }
      elseif ($m > $monthstart and $m < $monthend) {
        $lastday_curr_month = date('t', mktime(0, 0, 0, $m, 1, $yearstart));
        for ($x=1;$x<=$lastday_curr_month;$x++) {
          $cal->setEvent($yearstart,$m,$x,$eventcss);
        }
      }
      elseif ($m == $monthend) {
        for ($x=1;$x<=$dayend;$x++) {
          $cal->setEvent($yearstart,$m,$x,$eventcss);
        }
      }
    }
  }
  else {
    for ($x=$daystart;$x<=$dayend;$x++) {
      $overdiv = "\"javascript:void(0);\" onmouseover=\"return overlib('$content', CAPTION, '$title');\" onmouseout=\"return nd();\"";
      $cal->setEvent($yearstart,$monthstart,$x,$eventcss,$overdiv);
    }
  }
}

?>
<center>
<table class="year">
  <tr bgcolor="#ffffff">
    <td cellspacing=0 cellpadding=0><?php print "<img src=images/".$info['logo'].">" ?></td>
    <td cellspacing=0 cellpadding=0 class=yearname><?php print $info['campusname']."<br/>QA Event Calendar" ?></td>
  </tr>

  <tr>
    <td valign=top>
      <table width=100% class=year>
        <tr>
          <td colspan=3 align=left>
            <form name="catform">
              <label>Filter events by: </label>
              <select name="category" onChange="autoSubmit();" >
                <option value="">Select</option>
                <option value="default">All Events</option>
                <option value="Exam (MOE)">Exam (MOE)</option>
                <option value="Exam (Private)">Exam (Private)</option>
              </select>
            </form>
          </td>
        </tr>

        <tr>
          <td colspan=3 align=left><hr></td>
        </tr>

        <tr>
          <td colspan=3>&nbsp;</td>
        </tr>

        <tr>
          <td class=yearname colspan=3>LEGEND</td>
        </tr>

        <tr>
          <td style="width:4px height:4px" class=today></td>
          <td style="width:4px height:4px"></td>
          <td align=left>Today's date</td>
        </tr>

        <tr>
          <td style="width:4px height:4px" class=private_exam></td>
          <td style="width:4px height:4px"></td>
          <td align=left>Exam (Private)</td>
        </tr>

        <tr>
          <td style="width:4px height:4px" class=moe_exam></td>
          <td style="width:4px height:4px"></td>
          <td align=left>Exam (MOE)</td>
        </tr>
      </table>

      <br/>
      <br/>

      <table width=100% class=year>
        <?php
          $sql = "select title,DATE_FORMAT(date_start,'%d %b %Y') as datestart from calendar WHERE  `category` LIKE  '%exam%' order by date_start";
          $result = mysql_query($sql) or die(mysql_error());
          while($row = mysql_fetch_array($result)) {
        ?>
        <tr>
          <td align=left><?php print $row['datestart'] ?></td>
          <td>&nbsp;</td>
          <td align=left><?php print $row['title'] ?></td>
        </tr>
        <?php
          }
        ?>
      </table>
    </td>
    <td valign=top>
      <?php print $cal->showYear(); ?>
    </td>
  </tr>
</table>
</center>
</body>
</html>
