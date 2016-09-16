 <footer id="footerArea">
    	<div class="container text-center">             
            <div class="row">
                <div class="col-md-12">
                	
                    <ul class="list-inline list-unstyled">
                    <!--	<li><a href="#" class="fa fa-facebook"></a></li>
                    	<li><a href="#" class="fa fa-google-plus"></a></li>
                    	<li><a href="#" class="fa fa-twitter"></a></li>
                    	<li><a href="#" class="fa fa-dribbble"></a></li>
                    	<li><a href="#" class="fa fa-vimeo-square"></a></li>
                    	<li><a href="#" class="fa fa-linkedin"></a></li>
                    	<li><a href="#" class="fa fa-pinterest"></a></li>-->
                    </ul>
                    
                    <div class="copyright">&copy; <a href="http://nadwa.my">ESPAS</a>,adalah hakmilik jenama bagi kumpulan Nadwa</div>

                </div>
            </div>		
        </div>
    </footer>
    
        <!-- Bootstrap core JavaScript -->
     <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/jquery.ui.map.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<script src="js/jquery.localscroll-1.2.7-min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script src="js/scrolld.min.js"></script> 
    <script src="js/scripts.js"></script>
    <script src="js/jquery.bpopup.min.js"></script>
 <?php 		
$sql_pic_first= "SELECT sub_cat,wig FROM w_gallery_sub LIMIT 0,1  ";
$query_pic_first=mysql_query($sql_pic_first,$conn);
$row_pic_first=mysql_fetch_assoc($query_pic_first);
?>   
    <script>
    $(function(){

	$('#Grid').mixItUp({
	load: {
		filter: '.<?php echo $row_pic_first['wig']; ?>'
	}
	});
    });
	</script>
