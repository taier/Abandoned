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
		    text-align: center;
		    font-size: 18px;
		    font-weight: bold;
		    color:#000000;
		    margin-left: 20px; 
		}
		h3{
		    font-size: 16px;
		    font-weight: bold;
		    color:#000000;
		    margin-left: 20px; 
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
	<section id="main">
		<header>
			<div id="logo"><img src="http://i39.tinypic.com/2ml0ed.png"></div>
			<h4><?php echo Html::anchor("account/logout", "Log Out"); ?></h4>
			<?php if (Auth::has_access("place.create")) : ?>
   			<h4><?php echo Html::anchor("creation/index", "Create Place") ?> </h4>
 			<?php endif; ?>
		</header>
	<article>
		<?php foreach($titles as $key=>$category): ?>
		<div class = "title">
			<h2> <?php echo $category->category_name?> </h2>
			<center><img src =<?php echo $category->photo_url ?> alt = "Cool image"></center>
		</div>
		<div class ="places">
			<h3>List of <?php echo $category->category_name ?>s</h3>
			<?php foreach($places as $key=>$place): 
			  if($place->category == $category->category_name)  { ?>
			<ul>
				<li> <a href= <?php echo Uri::create('description/index/'.$place->id); ?>> <?php echo $place->title?></a> </li>
			</ul>	
			<?php  } endforeach; ?>
		</div>
		<?php endforeach; ?>

	</article>
	<footer>
        <p>&copy; University of Latvia, 2014.</p>
        <p>Helen Shorohova, js11265</p>
        <p>Dana Orbitane, do12022</p>
    </footer>
    </section>
</body>
</html>
