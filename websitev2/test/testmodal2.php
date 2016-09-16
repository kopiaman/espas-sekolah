<!DOCTYPE html>
<html lang="en">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="image/favicon.ico">
    <title>KAFA IBNU SINA- Menerangi Dunia</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    
<body>
<script>
var frameSrc = "http://malaysia.com";

$('#openBtn').click(function(){
    $('#myModal').on('show', function () {

        $('iframe').attr("src",frameSrc);
      
	});
    $('#myModal').modal({show:true})
});
</script>

<a href="#" class="btn" id="openBtn">Open modal</a>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Dialog</h3>
	</div>
	<div class="modal-body">
      <iframe src="" style="zoom:0.60" width="99.6%" height="250" frameborder="0"></iframe>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal">OK</button>
	</div>
</div>
        <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
</body>
</html>