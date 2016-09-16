<?php include_once('inc_head.php') ?>
<?php
$category=$_GET['cat'];
$sql_news= "SELECT 	nid,title,content,ndate,category,nstatus FROM w_news WHERE nstatus='On' AND category='$category' ORDER BY ndate DESC";
$query_news=mysql_query($sql_news,$conn);
$row_news=mysql_fetch_assoc($query_news);


?>
	<!-- Work page begins ======================================================================= -->
<div class="sixteen columns">
<?php $category=$row_news['category']; ?>
<?php ?>
<a href="p_news.php">News</a> <img src="images/ul_li.gif" width="8" height="9"> <a href="p_news_cat.php?cat=<?php echo $category ?>"><?php echo $category ?>
<p></p></a><br class="clear" />
</div>


<div class="sixteen columns">
	<?php do {  $nid=$row_news['nid'];?>
  	<h4><a href="p_news_detail.php?nid=<?php echo $nid ?>"><?php echo $row_news['title'] ?></a></h4>
<strong>Kategori: </strong> 
<?php  echo $row_news['category'] .'  <strong>- Date </strong>  '. date("d-m-Y", strtotime( $row_news['ndate']))?> 
 
    <p><?php echo  $trim_content=trim_text($row_news['content'],250) ?></p>
	<?php }while($row_news=mysql_fetch_assoc($query_news)) ?>
</div>
		

	
  <?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>