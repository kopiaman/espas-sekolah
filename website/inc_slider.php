<style>
#container {margin:0 auto;position:relative;text-align:left;width:100%; height:150px;background:#fff;margin-bottom:2em;
}	
/* Numeric Navigation */
ol {margin:1em 0;padding:0;height:28px;	}
ol li{margin:0 10px 0 0; padding:0;float:left;list-style:none;height:28px;line-height:28px;}
ol li a{float:left;height:28px;line-height:28px;border:1px solid #ccc;background:#DAF3F8;color:#555;padding:0 10px;text-decoration:none;}
ol li.current a{background:#5DC9E1;color:#fff;}
ol li a:focus, .prevBtn a:focus, .nextBtn a:focus{outline:none;}
.graphic, .prevBtn, .nextBtn{margin:0;padding:0;display:block;overflow:hidden;text-indent:-8000px;}
.prevBtn, .nextBtn {display:block;width:30px;height:77px;position:absolute;left:-30px;top:71px;z-index:1000;background:url(images/btn_prev.gif) no-repeat 0 0;cursor:pointer;}	
.nextBtn{left:950px;}														
.nextBtn {background:url(images/btn_next.gif) no-repeat 0 0;}	
pre {white-space: pre-wrap; white-space: -moz-pre-wrap; white-space: pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word; }
</style>
  <script type="text/javascript" src="js/jquery.sudoSlider.min.js"></script> 
  <script type="text/javascript">
		$(document).ready(function(){	
		    var sudoSlider = $("#slider").sudoSlider({
				auto:true,
				prevNext:true,
				autoheight:false
		   });
		});
	</script> 
  <!-- Overview page begins ======================================================================= -->
  <div class="sixteen columns"> 
    <!-- SLIDER -->
    <div id="container">
      <div style="position:relative;">
        <div id="slider">
          <ul>
            <?php do{ 
		 
		  	$image_name2=$row_slider['picture'];$array2=json_decode($image_name2);	
			$names=$array2[0]->name;$sliderpic="<img src='../espas/$names'  align='right'/>";  
			$headline=$row_slider['headline']; $slink=$row_slider['slink'];
		  ?>
            <li style="width:950px;"><?php echo $sliderpic ;?>
              <h2><?php echo $headline; ?><?php if($slink){ echo "<a href='p_news_detail.php?nid=$slink' style='font-size:12px;background:purple;color:white; padding:5px 10px'> MORE</a>"; }?></h2>
            </li>
            <?php }while($row_slider=mysql_fetch_assoc($query_slider)); ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- SLIDER END--> 
    <br class="clear" />
  </div>