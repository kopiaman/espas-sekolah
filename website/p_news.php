<?php include_once('inc_head.php') ?>
<?php

$sql_news= "SELECT 	nid,title,content,ndate,category,nstatus FROM w_news WHERE nstatus='On' ORDER BY ndate DESC";
$query_news=mysql_query($sql_news,$conn);
$row_news=mysql_fetch_assoc($query_news);

$sql_cat= "SELECT Field_Name AS cat FROM  `setting`  WHERE  `Class` LIKE  '57'";
$query_cat=mysql_query($sql_cat,$conn);
$row_cat=mysql_fetch_assoc($query_cat);

?>
<style>
.cat{width:200px; display:inline-block; background-color:#90C;  padding:10px; margin-bottom:10px; }

</style>
	<!-- Work page begins ======================================================================= -->

<div class="sixteen columns">
<h2>Berita</h2>
<?php do{ ?>
<a href="p_news_cat.php?cat=<?php echo $row_cat['cat']?>" class="cat" style="color:#FF0"><?php echo $row_cat['cat'] ;?></a></span>
<?php }while($row_cat=mysql_fetch_assoc($query_cat)) ?>

	<?php do {  $nid=$row_news['nid'];?>
  	<h4><a href="p_news_detail.php?nid=<?php echo $nid ?>"><?php echo $row_news['title'] ?></a></h4>
    <strong>Kategori: </strong> <?php  echo $row_news['category'] .'  <strong>- Tarikh </strong>  '. date("d-m-Y", strtotime( $row_news['ndate']))?> 
 
    <p><?php echo  $trim_content=trim_text($row_news['content'],250) ?></p>
	<?php }while($row_news=mysql_fetch_assoc($query_news)) ?>
</div>
		

	
  <?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>