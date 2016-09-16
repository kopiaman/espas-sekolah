<?php include_once('inc_head.php') ?>
<!--script for zoom in --> 
<script src="js/jquery.lighter.js" type="text/javascript"></script>
<link href="css/jquery.lighter.css" rel="stylesheet" type="text/css" />
<?php
$nid=$_GET['nid'];
$sql_news= "SELECT 	title,content,ndate,category,nstatus,pic,attach FROM w_news WHERE nid=$nid ";
$query_news=mysql_query($sql_news,$conn);
$row_news=mysql_fetch_assoc($query_news);

?>
	<!-- Work page begins ======================================================================= -->

<div class="sixteen columns">
<?php $content=$row_news['content'] ; $title=$row_news['title'];$category=$row_news['category']; $ndate=$row_news['ndate']; ?>
<?php ?>
<a href="p_news.php">Berita</a> <img src="images/ul_li.gif" width="8" height="9"> <a href="p_news_cat.php?cat=<?php echo $category ?>"><?php echo $category ?>
<p></p></a><br class="clear" />
</div>
<div class="sixteen columns">
<h4> <?php echo $title ?></h4>
 <p><strong>Tarikh</strong>: <?php echo date("d-m-Y", strtotime($ndate)) ?></p>
 <p>
<?php		
	$image_name=$row_news['pic'];
	$filesarray=json_decode($image_name);
		
//	 $names=$filesarray[0]['name'];
//	 $thumbs=$filesarray[0]['thumbnail'];	
   $i=0;
   do{
	  $names=$filesarray[$i]->name;
	 $thumbs=$filesarray[$i]->thumbnail;
	 
	 if($names){
	echo $value="<a href='../espas/$names'  data-lighter>";
	echo "<img src='../espas/$thumbs' style='padding:10px;' /></a>";
	 }else{};
	 	$i++;
   }while($i<10);

?>
 </p>
 <p> <?php echo $content ?></p>
 <br>
<?php		
	$attach=$row_news['attach'];
	$filesarray2=json_decode($attach);
	
	if($attach){
	echo "<h4>Attachment</h4>";	
	}else{};
	
   $j=0;
   do{
	  $files_name=$filesarray2[$j]->name;
	  $ori_names=$filesarray2[$j]->usrName;
	 
	 if($files_name){
	echo $value2="<a href='../espas/$files_name' target='_blank'> $ori_names </a> <br>"; 
	 }else{};
	 	$j++;
   }while($j<10);

?> 
 <br class="clear" />
</div>
		

	
  <?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>