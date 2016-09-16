<?php include_once('inc_head.php') ?>
<?php
$sql_promo= "SELECT sellid,userid,title,model,brandid,price,`type`,
`condition`,deal,warranty,description,date_submit,
date_approve,photo,adcompany,adlevel,status,sstate,offer FROM to_sell
WHERE sellid >= (SELECT FLOOR( MAX(sellid) * RAND()) FROM `to_sell` )
AND status='OK' AND adlevel='Promo' 
ORDER BY sellid LIMIT 4 ";
$query_promo=mysql_query($sql_promo,$conn);
$row_promo=mysql_fetch_assoc($query_promo);
?>
	
	<!-- Work page begins ======================================================================= -->
	<div id="work">
	
		<div id="overview" class="sixteen columns">
	    <h2>JualBeliKAMERA.my is  Malaysia's online platform for seller and buyer of anything related to camera products. </h2>
		  <h1>Its simple &amp; FREE! Its senang Style!</h1>
			<hr />
		</div>
		
		<div class="four columns" id="col1">
		<?php do{; 
		$sellid=$row_promo['sellid'] ;   $value_image=$row_promo['photo']; $filesarray=json_decode($value_image); 
  $filenames=$filesarray[0]->name; $thumbs=$filesarray[0]->thumbnail;?>
			<!-- Project begins ================================================================= -->
			<div class="project">
				
				<div class="projectThumbnail">
					<svg class="thumbnailMask"></svg>
					<div class="projectThumbnailHover">
						<h4><?php echo $row_promo['title'].'<br>PROMO!! - RM '.$row_promo['price']  ?></h4>
				
					</div>
					
					
                    <img src="<?php echo '../output/'.$filenames ?>"  width="200px" class="thumbnailImage" />
				</div>
				
				<div class="projectInfo">
                	
					<h4><?php echo $row_promo['title']; ?></h4>
                    
					<div class="projectNavCounter"></div>
					<div class="projectNav">
						<div class="projectNavEnlarge"><button class="enlargeButton" onClick="window.location.href='p_market_detail.php?sellid=<?php echo $sellid ?>'">View Detail </button></div>
						<div class="projectNavClose"><button class="closeButton">Close</button></div>
						<div class="projectNavButtons"><button class="prev"></button><button class="next"></button></div>
					</div>
					<p><?php echo $row_promo['description'] ?></p>
					<ul>
						<li><strong>Date:</strong><?php echo $row_promo['date_approve'] ?></li>
						<li><strong>Manufacturer:</strong> <?php echo $row_promo['brandid'] ?></li>
                        <li><strong>Model:</strong> <?php echo $row_promo['model'] ?></li>
                         <li><strong>Promotion Price:</strong> <?php echo $row_promo['price'] ?></li>
					</ul>
				</div>
				
			</div> <?php }while($row_promo=mysql_fetch_assoc($query_promo)) ;?>
			<!-- Project ends =================================================================== -->
			
			

		</div><!-- col1 -->
		
		<!-- Even numbered projects are dynamically moved into this second column via JS -->
		<div class="eight columns" id="col2">
		</div>
	
	</div>
	<!-- Work page ends ========================================================================= -->
	
	
<?php include_once('inc_footer.php'); ?>		
</div><!-- container -->
</body>
</html>