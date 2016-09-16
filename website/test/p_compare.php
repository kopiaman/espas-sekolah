<?php include_once('inc_head.php') ?>
<!--script for zoom in --> 
<script src="js/jquery.lighter.js" type="text/javascript"></script>
<link href="css/jquery.lighter.css" rel="stylesheet" type="text/css" />
<!--script for zoom in end--> 
<?php $item1 =$_POST["item1"];$item2 =$_POST["item2"];$item3 =$_POST["item3"]; ?>
<?php 

	//list of fav by userid
	$sql_fav_list= "SELECT to_sell.sellid,to_sell.title,to_sell.model,
	to_sell.brandid,to_sell.price,to_sell.`type`,to_sell.userid
	FROM user_fav
	INNER JOIN to_sell ON user_fav.sellid = to_sell.sellid
	WHERE user_fav.userid='$_SESSION[MM_Userid]'";
	$query_fav_list=mysql_query($sql_fav_list,$conn);
	$row_fav_list=mysql_fetch_array($query_fav_list);
		
	$query_fav_list2=mysql_query($sql_fav_list,$conn);
	$row_fav_list2=mysql_fetch_array($query_fav_list2);
	
	$query_fav_list3=mysql_query($sql_fav_list,$conn);
	$row_fav_list3=mysql_fetch_array($query_fav_list3);
	

//product list
$q_compare="SELECT
to_sell.sellid,
to_sell.title,
to_sell.model,
to_sell.brandid,
to_sell.price,
to_sell.`type`,
to_sell.userid,
`user`.username,
to_sell.adcompany,
to_sell.`condition`,
to_sell.warranty,
to_sell.deal,
to_sell.description,
to_sell.date_approve,
to_sell.photo AS photo,
to_sell.status,
to_sell.sstate,
to_sell.offer,
set_field.field AS cameratype
FROM to_sell
LEFT JOIN `user` ON to_sell.userid = `user`.userid
LEFT JOIN set_field ON to_sell.`type` = set_field.`value` ";

if($item1){
$sql_1 = "$q_compare WHERE to_sell.sellid=$item1";
$q_1 = mysql_query($sql_1,$conn);
$row_q1=mysql_fetch_array($q_1);
}else{}

if($item2){
$sql_2 = "$q_compare WHERE to_sell.sellid=$item2";
$q_2 = mysql_query($sql_2,$conn);
$row_q2=mysql_fetch_array($q_2);
}else{}

if($item3){
$sql_3 = "$q_compare WHERE to_sell.sellid=$item3";
$q_3= mysql_query($sql_3,$conn);
$row_q3=mysql_fetch_array($q_3);
}else{}

?>

<div class="sixteen columns">
<?php if(!$_SESSION['MM_Userid']){echo " You have to register and shortlist your items to make comparison "; }else{}?>
<form id="item_compare" method="post">
<div class="four columns alpha">
  <label>ITEM 1</label>
  <select name="item1" id="item1">
     <option value=""></option>
    <?php do{?>
          
      <option value="<?php echo $row_fav_list['sellid'] ?>"><?php echo $row_fav_list['title']." </br><span style='color: blue'>RM".$row_fav_list['price']."</span> " ?></option>
       <?php }while($row_fav_list=mysql_fetch_array($query_fav_list))?>
    </select>
  
</div>
<div class="four columns">
 <label>ITEM 2</label>
  <select name="item2" id="item2"><option value=""></option>
    <?php do{?>
          
      <option value="<?php echo $row_fav_list2['sellid'] ?>"><?php echo $row_fav_list2['title']." </br><span style='color: blue'>RM".$row_fav_list2['price']."</span> " ?></option>
       <?php }while($row_fav_list2=mysql_fetch_assoc($query_fav_list2))?>
    </select>
 
</div>
<div class="four columns">
  <label>ITEM 3</label>
   <select name="item3" id="item3"><option value=""></option>
    <?php do{ ?>
          
      <option value="<?php echo $row_fav_list3['sellid'] ?>"><?php echo $row_fav_list3['title']." </br><span style='color: blue'>RM".$row_fav_list3['price']."</span> " ?></option>
       <?php }while($row_fav_list3=mysql_fetch_assoc($query_fav_list3))?>
    </select>
  
</div>
<div class="four columns omega">
 
    <input type="submit" name="button" id="button" value="Compare!">
</div>
</form>
 <br class="clear" />
</div>


<div class="sixteen columns"> <!--show items comparison -->


    <div class="four columns alpha"> <?php if($item1) {?><!--item 1 detail --> 
 	    <h4><?php echo $row_q1['title'];?></h4>
  <?php 
  
	 //select photo
  	$sql_photo= "SELECT pid,userid,sellid,filename FROM photo WHERE sellid=$item1 LIMIT 0,1";
	$query_photo=mysql_query($sql_photo,$conn);
	$row_photo=mysql_fetch_assoc($query_photo);
	$thumbs=$row_photo['filename'];
	
	 echo $value="<a href='uploadify/medium/$thumbs' data-lighter>";
	 echo "<img src='uploadify/smed/$thumbs'  /></a>  ";
	
	?>
    
    
    
  	<h2>RM<?php echo $row_q1['price']; ?> </h2>
	    
    <ul>
			<li><strong>Published:</strong> <?php echo  date("d-m-Y", strtotime($row_q1['date_approve']))?></li>
			<li><strong>Owner:</strong> <?php echo $row_q1['username'] ?></li>
			<li><strong>State:</strong> <?php echo $row_q1['sstate'] ?></li>
            <li><strong>Category:</strong> <?php 
            if($row_q1['adcompany']=='P'){ 
            echo 'Personal'; }else if($row_q1['adcompany']=='C'){ echo 'Company' ; } ?></li>
			<li><strong>Brand:</strong> <?php echo $row_q1['brandid'] ?>  </li>
			<li><strong>Model: </strong><?php echo $row_q1['model'] ?></li>
			<li><strong>Type:</strong> <?php echo $row_q1['cameratype'] ?></li>
            <li><strong>Condition:</strong> <?php echo $row_q1['condition'] ?></li>
			<li><strong>Warranty:</strong> <?php echo $row_q1['warranty'] ?> </li>
			<li><strong>Deal:</strong> <?php echo $row_q1['deal'] ?></li>
			<li><strong>Offer:</strong> <?php echo $row_q1['offer'] ?> </li>
         	<li><?php echo $row_q1['description']; ?> </li>
		</ul>
	<?php }else{}?></div><!--item 1 detail end --> 
    
      <div class="four columns"> <?php if($item2) {?><!--item2 detail --> 
 	    <h4><?php echo $row_q2['title'];?></h4>
  <?php 
    $image_name=$row_q2['photo'];
	$filesarray=json_decode($image_name,true);
	$names=$filesarray[0]['name'];
	$thumbs=$filesarray[0]['thumbnail'];
	echo $value="<a href='../output/$names' target='_blank' >
	<img src='../output/$thumbs'></a>  ";?>
  	<h2>RM<?php echo $row_q2['price']; ?> </h2>
	    
    <ul>
			<li><strong>Published:</strong> <?php echo  date("d-m-Y", strtotime($row_q2['date_approve']))?></li>
			<li><strong>Owner:</strong> <?php echo $row_q2['username'] ?></li>
			<li><strong>State:</strong> <?php echo $row_q2['sstate'] ?></li>
            <li><strong>Category:</strong> <?php 
            if($row_q2['adcompany']=='P'){ 
            echo 'Personal'; }else if($row_q2['adcompany']=='C'){ echo 'Company' ; } ?></li>
			<li><strong>Brand:</strong> <?php echo $row_q2['brandid'] ?>  </li>
			<li><strong>Model: </strong><?php echo $row_q2['model'] ?></li>
			<li><strong>Type:</strong> <?php echo $row_q2['cameratype'] ?></li>
            <li><strong>Condition:</strong> <?php echo $row_q2['condition'] ?></li>
			<li><strong>Warranty:</strong> <?php echo $row_q2['warranty'] ?> </li>
			<li><strong>Deal:</strong> <?php echo $row_q2['deal'] ?></li>
			<li><strong>Offer:</strong> <?php echo $row_q2['offer'] ?> </li>
         	<li><?php echo $row_q2['description']; ?> </li>
		</ul>
	<?php }else{}?></div><!--item2 detail end --> 
    
     <div class="four columns"> <?php if($item3) {?><!--item2 detail --> 
 	    <h4><?php echo $row_q3['title'];?></h4>
  <?php 
    $image_name=$row_q3['photo'];
	$filesarray=json_decode($image_name,true);
	$names=$filesarray[0]['name'];
	$thumbs=$filesarray[0]['thumbnail'];
	echo $value="<a href='../output/$names' target='_blank' >
	<img src='../output/$thumbs'></a>  ";?>
  	<h2>RM<?php echo $row_q3['price']; ?> </h2>
	    
    <ul>
			<li><strong>Published:</strong> <?php echo  date("d-m-Y", strtotime($row_q3['date_approve']))?></li>
			<li><strong>Owner:</strong> <?php echo $row_q3['username'] ?></li>
			<li><strong>State:</strong> <?php echo $row_q3['sstate'] ?></li>
            <li><strong>Category:</strong> <?php 
            if($row_q3['adcompany']=='P'){ 
            echo 'Personal'; }else if($row_q3['adcompany']=='C'){ echo 'Company' ; } ?></li>
			<li><strong>Brand:</strong> <?php echo $row_q3['brandid'] ?>  </li>
			<li><strong>Model: </strong><?php echo $row_q3['model'] ?></li>
			<li><strong>Type:</strong> <?php echo $row_q3['cameratype'] ?></li>
            <li><strong>Condition:</strong> <?php echo $row_q3['condition'] ?></li>
			<li><strong>Warranty:</strong> <?php echo $row_q3['warranty'] ?> </li>
			<li><strong>Deal:</strong> <?php echo $row_q3['deal'] ?></li>
			<li><strong>Offer:</strong> <?php echo $row_q3['offer'] ?> </li>
         	<li><?php echo $row_q3['description']; ?> </li>
		</ul>
	<?php }else{}?></div><!--item2 detail end --> 

 <br class="clear" />
</div><!--show items comparison end-->

	
<?php include_once('inc_footer.php') ?>
</body>
</html>