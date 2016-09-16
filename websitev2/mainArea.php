<?php
$sql_slider= "SELECT slid,headline,picture,slink,`sstatus` FROM w_slider  WHERE `sstatus`='On' ";
$query_slider=mysql_query($sql_slider,$conn);
$slider=mysql_fetch_array($query_slider);
?>
  <section id="mainArea">
        <!-- start main slider -->
        <div class="flexslider" id="main-slider">
            <ul class="slides">
            <?php do{ ?>
                <li>
                    
                	<div class="bg-img" style="background-image: url(../espas/<?php echo full($slider['picture'])?>);">
                    	<div class="jumbotron">
                            <div class="container"> 
                                <h1 class="banner_header"><span style="background-color:#000; padding:5px 20px; opacity: 0.7;filter: alpha(opacity=40); "><?php echo $slider['headline'] ;?></span></h1>
                                <div class="hline"></div>
                              <!--  <p class="banner_header">Sub text here</p>
                                <p><a href="#" class="btn btn-lg">Maklumat Lanjut</a></p>-->
                            </div>
                        </div>
                    </div>
                </li>   
                <?php }while($slider=mysql_fetch_array($query_slider)) ?>         
                    
               
                         
            </ul>     
        </div>      
        <!-- end main slider -->
    </section>