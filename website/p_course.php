<?php include_once('inc_head.php');
$wid=$_GET['wid'];
$sql_coursed= "SELECT name,intro,requirement,about,pos FROM w_course WHERE wid=$wid";
$query_coursed=mysql_query($sql_coursed,$conn);
$row_coursed=mysql_fetch_assoc($query_coursed);
 ?>
<style>
b { color:#909; font-weight:bold; }
h4 { line-height:1.5em; }
li {  color:#969; list-style:square; list-style-position:inherit; line-height:1.5em; }
</style>
	
	<!-- Work page begins ======================================================================= -->

<div class="sixteen columns">

    <h2><?php echo $row_coursed['name'] ;?></h2>
   <h4><?php echo $row_coursed['intro'] ;?></h4> <br>

<div class="eight columns alpha">
  <h3>The Programme</h3>
 <h4><?php echo $row_coursed['about'] ;?></h4>
</div>
<div class="eight columns omega">
  <h3>Requirement</h3>
 <h4><?php echo $row_coursed['requirement'] ;?></h4>
</div>
 <br class="clear" />
</div>



	
  <?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>