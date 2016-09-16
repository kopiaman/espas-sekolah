<section id="tabsArea">
<div class="container">
<div class="row">
  <div class="col-md-12 text-center">
    <h1>Conference List</h1>
    <h2>Local & International Seminar</h2>
  </div>
<div class="col-sm-3">
<?php
$sql_con="SELECT cid,cname,sDate,eDate,cTime,venue,address,city,country,audienceType,eduField,maxPeople,ticketPrice,
currency,mainSpeaker,highlight,summary,note,photo,cstatus FROM conference ";
$query_con=mysql_query($sql_con,$conn);
$row_con=mysql_fetch_array($query_con); 

$sql_con1="SELECT cid,cname,sDate,eDate,cTime,venue,address,city,country,audienceType,eduField,maxPeople,ticketPrice,
currency,mainSpeaker,highlight,summary,note,photo,cstatus FROM conference ";
$query_con1=mysql_query($sql_con1,$conn);
$row_con1=mysql_fetch_array($query_con1); 

?>
    <ul class="nav nav-tabs">
      <?php 
	  $i=1;
	  do{  
	  
	  $city=$row_con['city'];
	  $country=$row_con['country'];
	  $cid=$row_con['cid'];
	  
	  //set the first content is active
	  if($i==1){ $active='class="active"'; }else if($i!=1){ $active='';};
	  ?>
      <li <?php echo $active?> ><a href="#tab<?php echo $cid ?>" data-toggle="tab"><?php echo '<b>'.$row_con['cname'].'</b><br>'.$city.','.$country.' | ' . $row_con['sDate']; ?></a></li>
      <?php
	  $i++;
	   }while($row_con=mysql_fetch_array($query_con)) ;?>
    </ul>
  </div>
  <div class="col-sm-9">
    <div class="tab-content">
      <?php $y=1; do{ 
		 $cid1=$row_con1['cid'];
		 
		 //set the first content is active
		 if($y==1){ $active="active"; }else if($y!=1){ $active='';};
	  ?>
      <div class="tab-pane <?php echo $active ?>" id="tab<?php echo $cid1; ?>">
        <div class="row">
          <?php //photo of conference place 
							
			 $image_name=$row_con1['photo'];
			 $filesarray=json_decode($image_name);
		     $filenames=$filesarray[0]->name;
			 $thumbs=$filesarray[0]->thumbnail;


								?>
          <div class="col-md-6"> <img src="../output/<?php echo $filenames ?>" alt="" class="img-responsive"> </div>
          <?php //info of conference ?>
          <div class="col-md-6">
            <h3><?php echo $row_con1['cname']; ?></h3>
            
            <blockquote><?php echo $row_con1['highlight']; ?></blockquote>
            <p><?php echo $row_con1['summary'] ; ?></p>
            <h4>OTHERS INFO HERE</h4>
              <a href="#" class="btn">Detail </a> <a href="#" class="btn">Register </a>
          </div>
        </div>
      </div>
      <?php $y++; }while($row_con1=mysql_fetch_array($query_con1)); ?>
    </div>
  </div>
</div>
</section>