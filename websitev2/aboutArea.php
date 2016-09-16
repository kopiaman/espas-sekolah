<section id="aboutArea">
<div class="container">  
 <div class="row">
      <div class="col-md-12 text-center">
   <h1>Mengenai Kami</h1>
  <span class="border"> <i class=" fa fa-key"></i> </span>
    <div class="text"> 
    
    
<?php  
$sql_profil= "SELECT nid,content,attach FROM w_news WHERE nstatus='On' AND category='Profil'";
$query_profil=mysql_query($sql_profil,$conn);
$profil=mysql_fetch_array($query_profil);

$sql_profilmenu= "SELECT nid,title FROM w_news WHERE nstatus='On' AND category='Profil'";
$query_profilmenu=mysql_query($sql_profilmenu,$conn);
$menuProfil=mysql_fetch_array($query_profilmenu);
?>

<div class="col-sm-12">

    <ul class="nav nav-tabs">
      <?php  $p=1; do{ 
		//set the first content is active
		 if($p==1){ $pactive='class="active"'; }else if($p!=1){ $pactive='';};
	  ?>
      <li <?php echo $active?> ><a href="#<?php echo $menuProfil['nid'] ?>" data-toggle="tab"><?php echo $menuProfil['title'];?></a></li>
      <?php   $p++;}while($menuProfil=mysql_fetch_array($query_profilmenu)); ?>
    </ul>
    
    
    <div class="tab-content">
      <?php $p2=1; do{ $profilID=$profil['nid']; $contentProfile=$profil['content']; 
		//set the first content is active
		if($p2==1){ $p2active='active'; }else if($p2!=1){ $p2active='';};
	?>
      <div class="tab-pane <?php echo $p2active?>" id="<?php echo $profilID ?>">
        <p><?php echo $profil['content'];?></p>
         <?php 
//---------------------GALLERY NEWS SECTION------------------	 
$picNews=$profil['attach'];
	
//display all picture JSON
$result = json_decode($picNews);

if($picNews){
foreach($result as $key => $value) {
if($value) { ?>

   <a href="<?php echo '../espas/'.$value->name ?>" data-rel="prettyPhoto"><img alt="" src="../espas/<?php echo $value->thumbnail?>" class="img-responsive img-thumbnail" style="float:left; margin-left:10px;"></a>
      
	   
 <?php    
    }  //tutup if value
} //tutup foreach
}//if ada gambar

//---------------------GALLERY NEWS SECTION END------------------	
 ?> 
      </div><!-- tab pene end -->
   <?php $p2++;}while($profil=mysql_fetch_array($query_profil)); ?>
    </div><!-- tab content end -->
    
    
  </div><!--col 8 end-->
<!-- <img src="../espas/<?php //echo full($school['logo']) ?>" alt="" class="img-circle">  -->


    
    
    
    </div>
     <p><br /><br /><br /></p>
     
     
    </div></div></div>
</section>
<div class="clearfix">