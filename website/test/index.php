<?php include_once('inc_head.php') ?>
  <?php 

$sql_news= "SELECT nid,title,content,ndate,category,pic FROM w_news WHERE nstatus='On' AND category='General' LIMIT 0,1";
$query_news=mysql_query($sql_news,$conn);
$row_news=mysql_fetch_assoc($query_news);

$sql_news_a= "SELECT nid,title,content,ndate,category,pic FROM w_news WHERE nstatus='On' AND category='Announcement' LIMIT 0,1";
$query_news_a=mysql_query($sql_news_a,$conn);
$row_news_a=mysql_fetch_assoc($query_news_a);

$sql_slider= "SELECT slid,headline,picture,slink FROM w_slider WHERE sstatus='On' LIMIT 0,5";
$query_slider=mysql_query($sql_slider,$conn);
$row_slider=mysql_fetch_assoc($query_slider);
?>
<style>
h3{ background-color:#939; width:100%; padding:8px; color:#FC0;}
</style>
<style>
#container {margin:0 auto;position:relative;text-align:left;width:100%;background:#fff;margin-bottom:2em;
}	
/* Numeric Navigation */
ol {margin:1em 0;padding:0;height:28px;	}
ol li{margin:0 10px 0 0; padding:0;float:left;list-style:none;height:28px;line-height:28px;}
ol li a{float:left;height:28px;line-height:28px;border:1px solid #ccc;background:#DAF3F8;color:#555;padding:0 10px;text-decoration:none;}
ol li.current a{background:#5DC9E1;color:#fff;}
ol li a:focus, .prevBtn a:focus, .nextBtn a:focus{outline:none;}
.graphic, .prevBtn, .nextBtn{margin:0;padding:0;display:block;overflow:hidden;text-indent:-8000px;}
.prevBtn, .nextBtn {display:block;width:30px;height:77px;position:absolute;left:-30px;top:71px;z-index:1000;background:url(../images/btn_prev.gif) no-repeat 0 0;cursor:pointer;}	
.nextBtn{left:696px;}														
.nextBtn {background:url(../images/btn_next.gif) no-repeat 0 0;}	
pre {white-space: pre-wrap; white-space: -moz-pre-wrap; white-space: pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word; }
</style>
  <script type="text/javascript" src="js/jquery.sudoSlider.min.js"></script> 
  <script type="text/javascript">
		$(document).ready(function(){	
		    var sudoSlider = $("#slider").sudoSlider({
				auto:true,
				prevNext:true
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
			 $names=$array2[0]->name;$sliderpic="<img src='../output/$names'  align='right' />";   $headline=$row_slider['headline'];
		  ?>
            <li style="width:900px;"><?php echo $sliderpic ;?>
              <h2><?php echo $headline; ?></h2>
            </li>
            <?php }while($row_slider=mysql_fetch_assoc($query_slider)); ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- SLIDER END--> 
    <br class="clear" />
  </div>
  <div id="work">
    <div id="overview" class="sixteen columns">
      <h2><img src="images/18121252-airplane-flying-above-tropical-sea-at-sunset.jpg" width="408" height="272" align="left" style="padding-right:10px;">Malaysian Aviation Training Academy (MATA) offers local and international certified course to become competent aviation maintenance personnel.</h2>
    </div>
  </div>
  <!-- Section page 2 ========================================================================= -->
  <div class="sixteen columns">
    <div class="six columns alpha">
      <h3>The Course</h3>
      <h4>We offer Aircraft Engineer and Aircraft Technician Course which is certified by DCA. Our course is recognised by global player in aviation industry.</h4>
    </div>
    <div class="five columns ">
      <h3>Latest News</h3>
      <p>
        <?php do{   $title=$row_news['title']; $nid=$row_news['nid'];
$ndate=$row_news['ndate']; ?>
        <span style="text-decoration:underline; font-weight:bold"> <a href="p_news_detail.php?nid=<?php echo $nid?>"><?php echo $ndate.' - '.$title?></a></span><br>
        <?php
echo $trim_content=trim_text($row_news['content'],150) ;
}while($row_news=mysql_fetch_assoc($query_news));?>
      </p>
    </div>
    <div class="five columns omega">
      <h3>Announcement</h3>
      <?php do{  ?>
        <span style="text-decoration:underline; font-weight:bold"> <a href="p_news_detail.php?nid=<?php echo $row_news_a['nid']?>"><?php echo $row_news_a['ndate'].' - '.$row_news_a['title']?></a></span><br>
        <?php
echo $trim_content2=trim_text($row_news_a['content'],150) ;
}while($row_news_a=mysql_fetch_assoc($query_news_a));?>
    </div>
    <br class="clear" />
  </div>
  
  <!-- Work page ends ========================================================================= -->
  
  <?php include_once('inc_footer.php'); ?>
</div>
<!-- container -->
</body>
</html>