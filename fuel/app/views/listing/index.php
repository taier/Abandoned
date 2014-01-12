<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listing page</title>
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
		#main{
		     width:1000px;
		     margin:auto;
		     box-shadow: 0px 0px 20px black;
		     background-color: #A9A9A9;
		 }
		
		h1{
		    font-size: 18px;
		    font-weight: bold;
		    color:#000000;
		    margin-left: 10px;
		}
		h2{
		    font-size: 16px;
		    font-weight: bold;
		    color:#000000;
		    margin-left: 20px; 
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
		footer {
		    width:1000px;
		    background-color:#c0c0c0;
		    text-align:center;
		    font-size:12px;
		    font-family: Arial;
		    border-top:3px solid #555;
		    border-top-style:double;
		    margin: auto;
		}
		footer p{
		    margin: 0;
		    padding: 5px 0px 5px 0px;
		}
	</style>
</head>
<body>


<!-- LOOK HERE!  -->
	<header>
		<div class="container">
			<div id="logo">There's gonna be a beautiful inscription</div>
		</div>
	</header>
	<div id="main"><div class="container">
		<div class = "title">
			<h2> <?php echo $title?> </h2>
		</div>
		<div class ="places">
			 <?php foreach($places as $key=>$value): ?>
			<ul>
				<li> <a href= <?php echo Uri::create('description/index/'.$value); ?>> <?php echo $value?> </a> </li>
			</ul>	
			<?php endforeach; ?>
		</div>
	</div>

	<!--<footer>
        <p>&copy; University of Latvia, 2014.</p>
        <p>Helen Shorohova, js11265</p>
        <p>Dana Orbitane, do12022</p>
    </footer>-->
    </div>
<!-- END OF LOOK HERE!  -->	
</body>
</html>
