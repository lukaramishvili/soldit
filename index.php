<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    	<title>Sold it!</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, width=device-width">
		<!-- The soldit.js file triggers transition between both sides of the card -->
		<script type="text/javascript" language="javascript" src="jquery-2.1.0.min.js"></script>
		<script type="text/javascript" language="javascript" src="soldit.js"></script>
		<!-- The soldit.css file contains all required information to animate the card -->
		<link rel="stylesheet" href="soldit.css" media="screen"/>
</head>
<body>
	<div id="container">

	  <div style="background-color:#85d2c5; position:relative; height:250px;">

<? if(isset($_GET['img'])){ ?>
<img src='<?=$_GET['img']?>' id='taken-image'>
<? } ?>


<form method="post" action='upload.php' enctype='multipart/form-data' id='upload-img-form'>
<input type="file" capture="camera" accept="image/*" id="cameraInput" name="cameraInput" onchange="this.form.submit()">
</form>


	    <input type="text" style="background-color:white; position:absolute; left:10%; width:80%; bottom:-10px;" />
	  </div>
	  <div class="items">
<? for($i=0; $i<10; $i++){ ?>
	    <a class="item" href='product.php'>
	      <img src="item1.jpg" />
	    </a>
<? } ?>
	  </div>
	</div>
</body>
</html>
