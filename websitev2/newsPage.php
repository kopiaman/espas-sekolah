<!DOCTYPE html>
<html lang="en">
<?php include_once('head.php') ?>
<body role="document">
<?php  
$nid=$_GET['nid'];
$sql_news= "SELECT nid,content,title,pic,attach FROM w_news WHERE nid=$nid";
$query_news=mysql_query($sql_news,$conn);
$news=mysql_fetch_array($query_news);
?>   
<section id="aboutArea">
<div class="container">  
 <div class="row">
      <div class="col-md-12 text-center">
   <h1><?php echo $news['title'] ;?></h1>
  <span class="border"> <i class=" fa fa-key"></i> </span>
      </div>
     <div class="col-sm-8"><?php echo $news['content'] ;?> </div>
     
     <div class="col-sm-4">
     <?php 
//---------------------GALLERY NEWS SECTION------------------	 
$picNews=$news['pic'];
	
//display all picture JSON
$result = json_decode($picNews);

if($picNews){
	echo '<br><h2> GAMBAR</h2>';
foreach($result as $key => $value) {
if($value) { ?>

   <a href="<?php echo '../espas/'.$value->name ?>" data-rel="prettyPhoto"><img alt="" src="../espas/<?php echo $value->thumbnail?>" class="img-responsive img-thumbnail" style="float:left; margin-left:10px;"></a>
      
	   
 <?php    
    }  //tutup if value
} //tutup foreach
}//if ada gambar

//---------------------GALLERY NEWS SECTION END------------------	

?> </div><!--gambar -->
     
 </div> <!-- row end -->
   
  <div class="col-md-12 text-center">
  
    <?php 
//---------------------ATTACHMENT NEWS SECTION------------------	 
$attachNews=$news['attach'];
	
//display all picture JSON
$resultAttach = json_decode($attachNews);

if($attachNews){
	echo '<br><h2> ATTACHMENT</h2>';
foreach($resultAttach as $key => $value) {
if($value) { ?>

   <ol> - <a target="_blank" href="<?php echo '../espas/'.$value->name ?>"><?php echo $value->usrName ?></a> </ol>
      
	   
 <?php    
    }  //tutup if value
} //tutup foreach
}//if ada gambar

//---------------------GALLERY NEWS SECTION END------------------	

?>
  </div>
 
</div> <!--container end -->
</section>
<!-- start footer area --><?php include('footerArea.php'); ?>  <!-- end footer area -->
</body>
</html>