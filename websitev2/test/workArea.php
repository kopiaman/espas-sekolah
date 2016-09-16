<section id="workArea" class="text-center">

    	<div class="container">   

            <div class="row">
                <div class="col-md-12">
                
                    <h1>Galeri</h1>

                    <span class="border">
                    	<i class="fa fa-btc"></i>
                    </span>
                    
 <?php 
$sql_gal= "SELECT wig,sub_cat FROM w_gallery_sub ORDER BY wig  ";
$query_gal=mysql_query($sql_gal,$conn);
$row_gal=mysql_fetch_assoc($query_gal);
?>

                    <ul class="list-unstyled controls">
                    <li class="filter" data-filter="all">Show All</li>
                        <?php 
						do{ 
						$sub_cat=$row_gal['sub_cat'] ;
						 $wig=$row_gal['wig'] ;
						
						?>
                        <li class="filter" data-filter=".<?php echo $sub_cat; ?>"><?php echo $sub_cat ;?></li>
                <?php   
				}while($row_gal=mysql_fetch_assoc($query_gal)) ;?>
                    </ul>
                                        
                </div>
            </div>

			<ul id="Grid">
<?php 		
$sql_pic= "SELECT w_gallery_sub.sub_cat,w_pic.wig,w_pic.files,w_pic.caption FROM w_gallery_sub INNER JOIN w_pic ON w_pic.wig = w_gallery_sub.wig  ";
$query_pic=mysql_query($sql_pic,$conn);
$row_pic=mysql_fetch_assoc($query_pic);
?>
<?php 
			do{ 
	
    $image_name=$row_pic['files'];
	$filesarray=json_decode($image_name);
	$full=$filesarray[0]->name;
	$thumbs=$filesarray[0]->thumbnail;

			?>
				<li class="mix <?php echo $row_pic['sub_cat']; ?> col-sm-4">
                	<a href="../espas/<?php echo  $full;?>" data-rel="prettyPhoto"><img alt="" src="../espas/<?php echo $thumbs;?>" class="img-responsive img-thumbnail"></a>
                    <a class="link" data-rel="prettyPhoto" href="../espas/<?php echo  $full;?>"><span><?php echo $row_pic['caption']; ?></span></a>
                </li>
				<?php }while($row_pic=mysql_fetch_assoc($query_pic)); ?>
			</ul>

        </div>
</section>