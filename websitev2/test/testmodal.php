<!DOCTYPE html>
<html lang="en"><?php include_once('head.php') ?>
<body>
<script>
var frameSrc ="http://malaysia.com";

$('#iframeButton').click(function(){
    $('#iframe2').on('show', function () {

        $('iframe').attr("src",frameSrc);
      
	});
    $('#iframe2').modal({show:true})
});
</script>

 <li><a href="#"  data-toggle="modal" data-target="#myModal">Waris</a></li>  

 <?php
     $bodytext='tatstdygdahgjdsgaadgsajghdjsjdgsj';
     echo modalbox('testID','TITLE HERE',$bodytext,-1);
?>      <button class="demo btn btn-primary btn-large" data-toggle="modal" data-target="#testID">TEST Demo</button>
<?php	 
	 
	 $bodyform='<form class="form-signin" role="form"  method="post"  >
        <h2 class="form-signin-heading">Sila masukkan no MyKid Anak Anda</h2>
        <input type="text"  id="log_id" class="form-control" placeholder="MyKid Anak" required autofocus>

        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#nextFORM" type="submit" >Sign in</button>
		<button class="btn btn btn-primary btn-large" data-toggle="modal" data-target="#nextFORM">NEXT FORM</button>
      </form>';
     echo modalbox('formID','FORM  HERE',$bodyform,-1);
     ?> <button class="demo btn btn-primary btn-large" data-toggle="modal" data-target="#formID">FORM TEST</button>

 <?php
$nextform='ayat'.$_POST['log_id'];  
  echo modalbox('nextFORM','FORM  PROCESS',$nextform);


 $iframe= '<iframe src="index2.html" style="zoom:0.60" width="99.6%" height="500px" frameborder="0"></iframe>';
  echo modalbox('iframe2','IFRAME  HERE',$iframe,-1);
     ?> <button class="demo btn btn-primary btn-large" data-toggle="modal" data-target="#iframe2" id="iframeButton">FRAME TEST</button>

      
        <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/jquery.ui.map.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<script src="js/jquery.localscroll-1.2.7-min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script src="js/scrolld.min.js"></script>
    <script src="js/scripts.js"></script>
 
</body>
</html>