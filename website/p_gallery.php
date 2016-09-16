<?php include_once('inc_head.php');?>
<?php
$wcat=$_GET['wcat'];
$sql_gal= "SELECT wig,wcat,sub_cat FROM w_gallery_sub ORDER by wig DESC";
$query_gal=mysql_query($sql_gal,$conn);
$row_gal=mysql_fetch_assoc($query_gal);


//echo $value="<a href='../output/$names'  data-lighter>";
//echo "<img src='../output/$thumbs' style='padding:10px;' /></a>";



?>
  
  <div class="sixteen columns">
  <h2>GALERI ></h2>
  
  <?php  do{ $sub_cat=$row_gal['sub_cat'] ; $wig=$row_gal['wig'] ;
  
  $sql_pic= "SELECT files FROM w_pic WHERE wig=$wig";
$query_pic=mysql_query($sql_pic,$conn);
$row_pic=mysql_fetch_assoc($query_pic);
  
    $image_name=$row_pic['files'];
	$filesarray=json_decode($image_name);
	$names=$filesarray[0]->name;
	$thumbs=$filesarray[0]->thumbnail;
  
   $style="background-image:url(../espas/$names); background-position:top right;"?>
    <div class="product_list_horizontal" style="<?php echo $style ?>">
    <h3><a href="p_gallery_detail.php?wig=<?php echo $wig?>" style="background-color:#906; padding:5px; color:#FFF;"><?php echo $sub_cat ?></a></h3>
 
    </div>
    <?php  }while($row_gal=mysql_fetch_assoc($query_gal)) ?>
    <br class="clear" />
  </div>
  <hr>
  <?php include_once('inc_footer.php') ?>
</div>
<!-- container -->
</body>
</html>