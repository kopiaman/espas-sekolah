<?php include_once('inc_head.php') ?>
<!--script for zoom in --> 
<script src="js/jquery.lighter.js" type="text/javascript"></script>
<link href="css/jquery.lighter.css" rel="stylesheet" type="text/css" />
<!--script for zoom in end--> 
<!-- query page begins = -->
<?php
$userid=$_SESSION['MM_Userid'];

	//list of fav by userid
	$sql_fav_list= "SELECT to_sell.sellid,to_sell.title,to_sell.model,
	to_sell.brandid,to_sell.price,to_sell.`type`,to_sell.userid,user_fav.favid
	FROM user_fav
	INNER JOIN to_sell ON user_fav.sellid = to_sell.sellid
	WHERE user_fav.userid=$userid";
	$query_fav_list=mysql_query($sql_fav_list,$conn);
	


		//remove shortlist
	  if ((isset($_GET['removefav'])) &&($_GET['removefav']=="true")){
	  $sql_removefav= "DELETE FROM user_fav WHERE userid=$userid AND favid=$_GET[favid]" ;
	  mysql_query($sql_removefav,$conn);
	  header("Location: p_shortlist.php");
}
?>
<!-- query page ends = -->	
<div class="sixteen columns">

	<!-- shortlist page begins ======================================================================= -->
    <!-- shortlist page area -->
  			<?php  if($userid){ ?>
			<?php $s=0; while($row_fav_list=mysql_fetch_array($query_fav_list)){
			$s++; 
			$favid=$row_fav_list['favid'];
			$sellid=$row_fav_list['sellid'];
			
				//select photo
  			$sql_photo= "SELECT pid,userid,sellid,filename FROM photo WHERE sellid=$sellid";
			$query_photo=mysql_query($sql_photo,$conn);
			$row_photo=mysql_fetch_assoc($query_photo);
				$thumbs=$row_photo['filename'];
			 ?>
            <div class="product_list_shortlist">
            <?php
			echo "<h5>".$s." -".$row_fav_list['title']." <span style='color: blue'>RM".$row_fav_list['price']."</span></h5> "; 
         	
			echo $value="<a href='uploadify/medium/$thumbs' data-lighter>";
			echo "<img src='uploadify/smed/$thumbs' /></a>  "; 
        	
			echo "<br><a href='p_market_detail.php?sellid=$sellid' target='_blank' class='button'>DETAIL</a>";
			echo "<a href='?removefav=true&favid=$favid'  class='button'>REMOVE</a>";
			 ?>
			</div>
   			<?php  }?>
     		 
    <h2><a href="p_compare.php" style="text-decoration:none">COMPARE!</a></h2>
    
    <?php }else{
		echo " You have to register to shortlist your item ";
		}?>
<!-- shortlist page end ======================================================================= -->

</div>	
  <?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>