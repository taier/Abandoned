<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listing page</title>
	<?php echo Asset::css('bootstrap.css'); ?>
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
		div.input{
			margin-left: 10px;
		}
		label{
			margin: 5px 0px 5px 0px;
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
		</header>
		<article>
		<div class = "title">
			<h2> Creation Page </h2>
		</div>
		<div class="input">
			<label> Title </label>
		<?php echo Form::open();
	     echo Form::input('title', 
			Input::post('title', 
			    isset($title) ? $place->title : '')); ?>
		 </br><label> Description </label> </br>
		<?php
	     echo Form::textarea('description', 
			Input::post('description', 
			    isset($description) ? $place->description : '')); ?>

		 </br><label> What to take </label> </br>
		<?php
	     echo Form::input('wtt', 
			Input::post('wtt', 
			    isset($wtt) ? $place->wtt : '')); ?>

		</br><label> Address </label> </br>
		<?php
	     echo Form::input('address', 
			Input::post('address', 
			    isset($address) ? $place->address : '')); ?>

		</br><label> Category </label> </br>
		<?php
	    echo Form::select("category", Input::post("category"), $categories);
	    ?>

	</br><label> Photo URL </label> </br>
		<?php
	     echo Form::input('photo_URL', 
			Input::post('photo_URL', 
			    isset($photo_URL) ? $place->photo_URL : '')); ?>
		</br></br>
		<div class="actions">
    <?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-default')); ?>
		</div>
	</br>
	<?php echo Form::close() ?>
	</article>
	</section>
	<footer>
        <p>&copy; University of Latvia, 2014.</p>
        <p>Helen Shorohova, js11265</p>
        <p>Dana Orbitane, do12022</p>
    </footer>
</body>
</html>
