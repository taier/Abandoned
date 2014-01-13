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
			<ddiv id="logo"><img src="http://i39.tinypic.com/2ml0ed.png"></div>
		</header>
		<article>
			<div class = "title">
				<h2> <?php echo $title?> </h2>
			</div>
			<div class ="WWT" style="display: inline">
				<h4 style="display: inline;" > Take with: </h4> <?php echo $wwt?>  
			</div>	
			<div class = "location" style="display: inline;">
				<h4 style="display: inline; margin-left:200px;"> Located at:</h4> <?php echo $location?> 
			</div> 
			<div class = "description">
				<h3> Description </h3>
				<p> <?php echo $description?> </p>
				<center><img src =<?php echo $photo_URL ?> alt = "Cool image"> </center>
			</div>
			<!--<//?php foreach ($places->comments as $comment) : ?>
	        <li>
				<div>
					<span style="font-style: italic;"><//?php echo __("ACTION_VIEW_USER_LABEL")?>: </span><//?php echo $comment->user->username; ?><br>
					<span style="font-style: italic;"><//?php echo __("ACTION_VIEW_COMMENT_CREATED")?>: </span><//?php echo $comment->created ?><br>
	                                <span style="font-weight: bold;"><//?php echo __("ACTION_VIEW_COMMENT_TEXT")?>: </span><//?php echo $comment->comment; ?>
				</div>
			<//?php if ($comment->canEdit()) : 
			echo " " . Html::anchor("comment/edit/" . $comment->id, 
					    "<i class='icon-edit'></i>");
			endif; 
			if ($comment->canDelete()) : 
		    echo " " . Html::anchor("comment/delete/" . $comment->id, 
					    "<i class='icon-remove'></i>", 
					    array("onclick" => "return confirm('Do you want to delete this agenda item?');"));
			endif;
		    ?></li>
			<?php
		    //endforeach;  //foreach agenda item
		    ?>
				<//?php if ($canAddComments) : ?>
		    <li><//?php  echo Html::anchor('comment/create/' . $places->id,
				    '<i class="icon-plus-sign"></i> '.__('ACTION_VIEW_ADD_COMMENT'));
		    ?>
		    </li>
			<?php //endif; ?>-->
		</article>
		<footer>
        <p>&copy; University of Latvia, 2014.</p>
        <p>Helen Shorohova, js11265</p>
        <p>Dana Orbitane, do12022</p>
    	</footer>
	</section>
</body>
</html>
