<?php include_once('inc_head.php') ?>
 <script type="text/javascript">
$(function() {
	$('#coderad').realperson();
});
</script> 
<script src="js/validation_ad.js"></script>
  <style>
#error {color:red;font-size:10px;display:none;}
.needsfilled {background:red;color:white;}
</style>
<?php

$sellid=$_GET['sellid'];$date = date('Y-m-d H:i:s'); $userid=$_SESSION['MM_Userid'];

if(!$userid){
	header("Location: p_user_reglog.php");
}else{};
$sql_edit= "SELECT sellid,userid,adcompany,adlevel,title,model,brandid,price,`type`,`condition`,deal,warranty,description,date_submit,
date_approve,`status`,sstate,offer FROM to_sell WHERE userid=$userid AND sellid=$sellid";
$query_edit=mysql_query($sql_edit,$conn);
$row=mysql_fetch_assoc($query_edit);

if($userid!=$row['userid'] && $sellid!=$row['sellid']){
	header("Location: p_user_reglog.php");
}else{};

//select brand
$brandvalue=$row['brandid'];
$sql_brand= "SELECT field AS brand, value AS value FROM set_field WHERE catid=1 AND field!='$brandvalue'";
$query_brand=mysql_query($sql_brand,$conn);
$row_brand=mysql_fetch_assoc($query_brand);

//select type
$typevalue=$row['type'];
$sql_type= "SELECT field AS typename, value AS value FROM set_field WHERE catid=2 AND value!='$typevalue'";
$query_type=mysql_query($sql_type,$conn);
$row_type=mysql_fetch_assoc($query_type);

$sql_type_set= "SELECT field AS typename FROM set_field WHERE value='$typevalue'";
$query_type_set=mysql_query($sql_type_set,$conn);
$row_type_set=mysql_fetch_assoc($query_type_set);

//select state
$sql_state= "SELECT field AS `state` FROM set_field WHERE catid=8 ";
$query_state=mysql_query($sql_state,$conn);
$row_state=mysql_fetch_assoc($query_state);

//select warranty
$sql_warranty= "SELECT field AS warranty FROM set_field WHERE catid=4 ";
$query_warranty=mysql_query($sql_warranty,$conn);
$row_warranty=mysql_fetch_assoc($query_warranty);

//select deal
$dealvalue=$row['deal'];
$sql_deal= "SELECT field AS dealname, value AS value FROM set_field WHERE catid=3 AND value!='$dealvalue'";
$query_deal=mysql_query($sql_deal,$conn);
$row_deal=mysql_fetch_assoc($query_deal);

$sql_deal_set= "SELECT field AS dealname FROM set_field WHERE value='$dealvalue'";
$query_deal_set=mysql_query($sql_deal_set,$conn);
$row_deal_set=mysql_fetch_assoc($query_deal_set);

//select offer
$offervalue=$row['offer'];
$sql_offer= "SELECT field AS offer,value FROM set_field WHERE catid=10 AND value!='$offervalue'";
$query_offer=mysql_query($sql_offer,$conn);
$row_offer=mysql_fetch_assoc($query_offer);

$sql_offer_set= "SELECT field AS offername FROM set_field WHERE value='$offervalue'";
$query_offer_set=mysql_query($sql_offer_set,$conn);
$row_offer_set=mysql_fetch_assoc($query_offer_set);

if (rpHash($_POST['coderad']) == $_POST['coderadHash']) {		
	
	$title=mysql_real_escape_string($_POST['f_title'],$conn);$model=mysql_real_escape_string($_POST['f_model'],$conn);
	$brand=mysql_real_escape_string($_POST['f_brand'],$conn);$price=mysql_real_escape_string($_POST['f_price'],$conn);
	$type=mysql_real_escape_string($_POST['f_type'],$conn);$condition=mysql_real_escape_string($_POST['f_condition'],$conn);
	$deal=mysql_real_escape_string($_POST['f_deal'],$conn);$warranty=mysql_real_escape_string($_POST['f_warranty'],$conn);
	$desc=mysql_real_escape_string($_POST['f_desc'],$conn);$state=mysql_real_escape_string($_POST['f_state'],$conn);
	$offer=$_POST['f_offer'];
	
	$sql_up= "UPDATE to_sell SET title='$title',model='$model',brandid='$brand',price='$price',`type`='$type',`condition`='$condition',deal='$deal',
	warranty='$warranty',description='$desc',sstate='$state',offer='$offer'
	 WHERE userid=$userid AND sellid=$sellid";
	$query_up=mysql_query($sql_up,$conn);
	if(!$query_up){die(mysql_error());};
	
	//$alert_mod_login="<p class='accepted'>Your ad submitted. Please wait in 1~2 days for approval</p>";
	header("Location: p_postad_edit2.php?sellid=$sellid");
	
}else if($_POST['coderad']==''){$alert_mod_login="";}
else if(rpHash($_POST['coderad'])!= $_POST['coderadHash']) {$alert_mod_login="<p class='rejected'>Wrong security code</p>";};
?>
  
  <!-- Work page begins ======================================================================= -->
  <form id="form_ad" method="post">
    <div class="sixteen columns">
      <?php  echo '<h3>EDIT AD</h3>';?> 
      <?php  echo '<h4>'.$alert_mod_login.'</h4>';?>
      
      <div class="four columns alpha">
        <label>Ads Title (50 words only)</label>
        <input name="f_title" type="text" id="f_title" value="<?php echo $row['title'] ?>" size="50" />
        <label>Manufacturer</label>
        <select name="f_brand" id="f_brand">
        <option value="<?php echo $row['brandid'] ?>" ><?php echo $row['brandid'] ?></option>
          
          <?php do{ ?>
          <option value="<?php echo $row_brand['brand'] ?>"><?php echo $row_brand['brand'] ?></option>
          <?php }while($row_brand=mysql_fetch_assoc($query_brand)); ?>
        </select>
        </select>
        <label>Model</label>
        <input name="f_model" type="text" id="f_model" size="15"  value="<?php echo $row['model'] ?>">
        </input>
        <label>Price (RM)</label>
        <input name="f_price" type="text" id="f_price" size="6" value="<?php echo $row['price'] ?>" >
        </input>
      </div>
      <div class="four columns">
        <label>Type</label>
        <select name="f_type" id="f_type">
          <option value="<?php echo $row['type'] ?>" ><?php echo $row_type_set['typename'] ?></option>
         
           <?php do{ ?>
          <option value="<?php echo $row_type['value'] ?>"><?php echo $row_type['typename'] ?></option>
          <?php }while($row_type=mysql_fetch_assoc($query_type));?>
        </select>
        <label>Deal</label>
        <select name="f_deal" id="f_deal">
        <option value="<?php echo $row['deal'] ?>" ><?php echo $row_deal_set['dealname'] ?></option>
          
          <?php do{ ?>
          <option value="<?php echo $row_deal['value'] ?>"><?php echo $row_deal['dealname'] ?></option>
          <?php }while($row_deal=mysql_fetch_assoc($query_deal));?>
        </select>
        <label>Warranty</label>
        <select name="f_warranty" id="f_warranty">
        <option value="<?php echo $row['warranty'] ?>" ><?php echo $row['warranty'] ?></option>
          <option value="">Please Select</option>
          <?php do{?>
          <option value="<?php echo $row_warranty['warranty'] ?>"><?php echo $row_warranty['warranty'] ?></option>
          <?php }while($row_warranty=mysql_fetch_assoc($query_warranty)); ?>
        </select>
  
           
           <label>Offer</label>        
        <select name="f_offer" id="f_offer">
         <option value="<?php echo $row['offer'] ?>"><?php echo $row_offer_set['offername'] ?></option>
          <?php do{ ?>
          <option value="<?php echo $row_offer['value'] ?>"><?php echo $row_offer['offer'] ?></option>
            <?php }while($row_offer=mysql_fetch_assoc($query_offer)); ?>
        </select>
          
      </div>
      <div class="four columns">
        <label>Condition</label>
        <select name="f_condition" id="f_condition">
          <option value="<?php echo $row['condition'] ?>" ><?php echo $row['condition'] ?></option>
          
          <option value="New">New</option>
          <option value="Used">Used</option>
        </select>
        <label>State </label>
        <select name="f_state" id="f_state">
        <option value="<?php echo $row['sstate'] ?>" ><?php echo $row['sstate'] ?></option>
          
          <?php do{ ?>
          <option value="<?php echo $row_state['state'] ?>"><?php echo $row_state['state'] ?></option>
          <?php }while($row_state=mysql_fetch_assoc($query_state)); ?>
        </select>
        <label>Description</label>
        <textarea name="f_desc" id="f_desc"><?php echo $row['description'] ?></textarea>
      </div>
      <div class="four columns omega">
      <input type="text" id="coderad" name="coderad" placeholder="Please enter security code above">
        <input type="submit" name="c_submit" id="c_submit" value="Edit" />
        </div>
      <br class="clear" />
    </div>
  </form>
  <?php include_once('inc_footer.php') ?>
</div>
<!-- container -->
</body>
</html>