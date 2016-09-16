<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title>Sudo Slider | Rich content demo</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<link rel="STYLESHEET" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.sudoSlider.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
		    var sudoSlider = $("#slider").sudoSlider({
                
				auto:true,
				prevNext:false
		   });
		});
	</script>
	</head>
	<body>
    <!-- SLIDER -->
    <div id="container">
      <h1>Sudo Slider jQuery Plugin - Rich content demo</h1>
      <div style="position:relative;">
        <div id="slider">
          <ul>
            <li style="width:696px;"><img src="images/03.jpg" alt="image description" width="283" height="187" align="right" style=" padding:10px"/>
              <h2>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explica"</h2>
            </li>
            <li><img src="images/05.jpg" alt="image description"/></li>
          </ul>
        </div>
      </div>
    </div> <!-- SLIDER END-->
</body>
</html>