<?php include_once('inc_head.php') ?>
  <?php 

$sql_news_ak= "SELECT nid,title,content,ndate,category,pic FROM w_news WHERE nstatus='On' AND category='Aktiviti Sekolah' ORDER BY ndate DESC LIMIT 0,1 ";
$query_news_ak=mysql_query($sql_news_ak,$conn);
$row_news_ak=mysql_fetch_assoc($query_news_ak);

$sql_news= "SELECT nid,title,content,ndate,category,pic FROM w_news WHERE nstatus='On' AND category='Umum' ORDER BY ndate DESC LIMIT 0,1 ";
$query_news=mysql_query($sql_news,$conn);
$row_news=mysql_fetch_assoc($query_news);

$sql_news_a= "SELECT nid,title,content,ndate,category,pic FROM w_news WHERE nstatus='On' AND category='Pengumuman' ORDER BY ndate DESC LIMIT 0,1 ";
$query_news_a=mysql_query($sql_news_a,$conn);
$row_news_a=mysql_fetch_assoc($query_news_a);

$sql_slider= "SELECT slid,headline,picture,slink FROM w_slider WHERE sstatus='On' ORDER BY slid DESC LIMIT 0,5 ";
$query_slider=mysql_query($sql_slider,$conn);
$row_slider=mysql_fetch_assoc($query_slider);
?>
  <style>
h2{ padding:10px; }
h3{ background-color:#093; width:100%; padding:8px; color:#FC0;}
</style>
  <?php include('inc_slider.php') ?>
  <!-- Section page 2 ========================================================================= -->
  <div class="sixteen columns">
    <div class="six columns alpha">
      <h3>Aktiviti</h3>
 
        <?php do{   $title2=$row_news_ak['title']; $nid=$row_news_ak['nid'];
$ndate2=$row_news_ak['ndate']; ?>
        <span style="text-decoration:underline; font-weight:bold"> <a href="p_news_detail.php?nid=<?php echo $nid?>"><?php echo date("d-m-Y", strtotime($ndate2)).' | '.$title2?></a></span><br>
        <?php
echo $trim_content2=trim_text($row_news_ak['content'],150) ;
}while($row_news_ak=mysql_fetch_assoc($query_news_ak));?>
    
    </div>
    <div class="five columns ">
      <h3>Berita Terkini</h3>
      
        <?php do{   $title1=$row_news['title']; $nid1=$row_news['nid'];
$ndate1=$row_news['ndate']; ?>
        <span style="text-decoration:underline; font-weight:bold"> <a href="p_news_detail.php?nid=<?php echo $nid1?>"><?php echo date("d-m-Y", strtotime($ndate1)).' | '.$title1?></a></span><br>
        <?php
echo $trim_content=trim_text($row_news['content'],150) ;
}while($row_news=mysql_fetch_assoc($query_news));?>
      
    </div>
    <div class="five columns omega">
      <h3>Pengumuman</h3> 
      <?php do{  ; $ndate=$row_news_a['ndate'];  ?>
        <span style="text-decoration:underline; font-weight:bold"> <a href="p_news_detail.php?nid=<?php echo $row_news_a['nid']?>"><?php echo date("d-m-Y", strtotime($ndate)).' |  '.$row_news_a['title']?></a></span><br>
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