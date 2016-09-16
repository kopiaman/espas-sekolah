<?php include_once('inc_head.php') ?>
<?php  $userid=$_SESSION['MM_Userid'];  $sellid=$_GET['sellid']; 	$_SESSION['MM_sellid']=$sellid;
 	
	$sql_pid1= "SELECT COUNT(pid) AS max FROM photo WHERE sellid=$sellid AND userid=$userid";
	$query_pid1=mysql_query($sql_pid1,$conn);
	$row_pid1=mysql_fetch_array($query_pid1);
	$max_photo=$row_pid1['max'];

	$upload_limit=5-$max_photo;
  ?>
<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'buttonText' : 'ATTACH PHOTO...',
				'fileSizeLimit' : '1500KB',
				'auto'     : false,
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : 'uploadify/uploadify.swf',
				'uploader' : 'uploadify/uploadify_edit.php',
				'cancelImg' : 'uploadify/cancel.png',
				'removeCompleted' : false,
				'uploadLimit' : '<?php echo $upload_limit ?>'
				
				
			});
		});
</script>
<script src="uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify/uploadify.css">

	<!-- Work page begins ======================================================================= -->
<?php 
  
	

   //view all photo
  	$sql_photo= "SELECT pid,userid,sellid,filename FROM photo WHERE userid=$userid AND sellid=$sellid ";
	$query_photo=mysql_query($sql_photo,$conn);
	$row_photo=mysql_fetch_assoc($query_photo);
	
	if (isset($_POST['pid'])) {
     $pid_str = implode(",", $_POST['pid']);// converts $_POST interests into a string
	
//	$sql_del= "DELETE FROM photo WHERE pid IN ($pid)";
//	$query_del=mysql_query($sql_del,$conn);
	
	$sql_pid= "SELECT filename FROM photo WHERE pid IN ($pid_str) ";
	$query_pid=mysql_query($sql_pid,$conn);
	$row_pid=mysql_fetch_array($query_pid); 

	//delete file to delete
		do{
			$filename=$row_pid['filename'];
            unlink("uploadify/medium/$filename");unlink("uploadify/smed/$filename");unlink("uploadify/small/$filename");			
        }while ($row_pid=mysql_fetch_array($query_pid));
        $sql_del= "DELETE FROM photo WHERE pid IN ($pid_str)";
		$query_del=mysql_query($sql_del,$conn);
		header("Location: p_postad2_edit.php?sellid=$sellid");
    
	}else{}
   ?>
<div class="sixteen columns">
<?php  echo '<h3>EDIT AD -PHOTO (STEP 2 / 2 )</h3>';?>
<form action="p_postad2_edit.php?sellid=<?php echo $sellid ?>" method="post" id="formtest">
     <?php do{ $thumbs=$row_photo['filename'];?> <p style="border:solid thin; padding:5px;">
     <img src="<?php echo 'uploadify/small/'.$thumbs ?>"  class="left" style="vertical-align:middle">
      <input type="checkbox" name="pid[]" value="<?php echo $row_photo['pid'] ?>" /><?php echo $row_photo['filename'] ?></p>
	
<?php }while($row_photo=mysql_fetch_assoc($query_photo)) ?>
<input name="delete" type="submit" id="delete" value="DELETE SELECTED">
</form>
<?php if($max_photo<5){ ?>
   <label>PHOTO(Max 5 files)</label>
    <input type="file" name="file_upload" id="file_upload"  multiple="true"/>
	<a href="javascript:$('#file_upload').uploadify('upload','*')" class="button">UPLOAD FILES</a> <p></p>
  <?php }else{}; ?>

      <a href="p_myads.php" class="button">DONE! BACK TO MYADS</a>
      <a href="p_postad.php" class="button">POST ANOTHER AD</a>
</div>
 <?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>