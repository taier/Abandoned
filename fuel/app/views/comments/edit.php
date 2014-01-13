
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listing page</title>
	<!--<//?php echo Asset::css('bootstrap.css'); ?>-->
	<style>
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
		#main{
		    width:1000px;
		    margin:auto;
		    box-shadow: 0px 0px 20px black;
		    background-color: #A9A9A9;
		}
		article {
		    background-color:#A9A9A9;
		    padding:15px;
		}
		h1{
		    font-size: 20px;
		    font-weight: bold;
		    color:#ffffff;
		    margin-left: 10px;
		}
		h2{
		    font-size: 18px;
		    font-weight: bold;
		    color:#000000;
		}
		h4{
			text-align: right;
			margin-right: 10px;
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
		}
	</style>
</head>
<body>
	<section id="main">
		<header>
			<ddiv id="logo"><img src="http://i39.tinypic.com/2ml0ed.png"></div>
		</header>
		<article>
			<h2><?php echo "Edit Comment"?></h2>
			<?php echo Form::open(); ?>
				    <?php echo Form::textarea('new_comment', 
						Input::post('new_comment', 
						    isset($new_comment) ? $new_comment : ''), array('placeholder' => $old_comment)); ?>
			    <br><br>
			<div class="actions">
			    <?php echo Form::submit('submit', "Submit", array('class' => 'btn btn-primary')); ?>
			</div>
			<?php echo Form::close() ?>
		</article>
	</section>
</body>
</html>