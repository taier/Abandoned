<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Abandoned</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style>
		#logo{
			display: block;
			width: 179px;
			height: 100px;
			position: relative;
			top: 15px;
		}
		body{
			background-image:url("http://static.tumblr.com/aadb9f0b1df7e1f6282445638a14d628/zaamq6j/7hYmrh0dg/tumblr_static_grey-sea.jpg");
		    background-attachment:fixed;
		    background-repeat:no-repeat;
		    background-color:grey;
		    background-position:center top;
		    margin: 0; 
		    padding: 0;
		    font-family:Georgia, serif;
		    font-size:14px;
		}
		h1{
		    font-size: 18px;
		    font-weight: bold;
		    color:#000000;
		    margin-left: 10px;
		}
		a{
			color:#000000;
		}
		a:visited{
			color:#696969;
		}
		a:hover{
			color:#FFFFFF;
		}
		p{
		    text-indent:10px;
		}
	</style>
</head>
<body>
	<header>
		<div class="container">
			<div id="logo"></div>
		</div>
	</header>
	<div class="container">
		<div class="jumbotron">
			<h1>Welcome to Abandoned!</h1>
			<?php echo Html::anchor("account/simpleauth", "Please Log In"); ?>
			<h4>Or </h4>
			<?php echo Html::anchor("account/create", "Register"); ?>

			<h4>Or Enter as </h4>
			<?php echo Html::anchor("listing/index", "Guest"); ?>
		</div>	
			
	</div>
</body>
</html>
