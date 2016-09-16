<?php 
$sql_news= "SELECT nid,title,content,ndate,category,pic FROM w_news WHERE nstatus='On' AND category!='Profil' ORDER BY ndate DESC LIMIT 0,6 ";
$query_news=mysql_query($sql_news,$conn);
$row_news=mysql_fetch_assoc($query_news);?>
<section id="newsArea">
<div class="container"> 
            <div class="row">
                <div class="col-md-12 text-center">

                 <h1>Berita Lain</h1>

                    <span class="border">                    
                    	<i class=" fa fa-key"></i>
                    </span>

<div class="flexslider carousel" id="about-slider">
                <ul class="slides">
                 <?php do{  $title1=$row_news['title']; $nid1=$row_news['nid']; $ndate1=$row_news['ndate']; $content_full=$row_news['content'];  ?>
                    <li>
                        <div class="slice">
                           
                            <h3 > <?php echo date("d-M", strtotime($ndate1))?> | <a href="newspage.php?nid=<?php echo $nid1 ?>" id="<?php echo $nid1 ;?>" target="_new"><?php echo $title1; ?></a></h3>
    
                            <p align="justify" ><?php echo $trim_content=trim_text($row_news['content'],150) ;?> </p>
                       <?php
         
          //  echo modalbox('news'.$nid1,$title1,$content_full); ?>
          
           <style>
    $('<?php echo $nid ?>').bPopup({
            contentContainer:'.content',
            loadUrl: 'index2.html' 
        });
</style>	
                        </div>
                    </li>      
                     <?php }while($row_news=mysql_fetch_assoc($query_news)) ?>
               
                </ul>
               
            </div>      
                </div>
          </div> 
 </div>
	
 </section>