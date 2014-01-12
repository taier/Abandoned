<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
        <title><?php
if (isset($page_title)) {
    echo $page_title;
}
if (isset($title)) {
    echo $title;
}
?></title>
	<?php
	if (isset($libs_js)) {
	    //some views may want to add extra scripts
	    echo Asset::js($libs_js);
	}
	?>

	<?php echo Asset::css('bootstrap.css'); ?>
	<?php
	if (isset($libs_css)) {
	    //some views may want to add extra stylesheets
	    echo Asset::css($libs_css);
	}
	?>
    </head>
    <body>
	<header>
	    <aside id="auth">	    
		<?php
		$auth = Auth::instance();
		$user_id = $auth->get_user_id();
		if ($user_id[1] != 0) :
		    ?>
		<div id="logged-in">
		    <h3><?php echo "You are logged in as " . $auth->get_email(); ?> </h3>
		</div>
		<div id="logout"> <p>
			<?php
			echo Html::anchor("account/logout", "Log Out");
			?> 
			</p>
    		</div> <p>
		    <?php
		else :
		   		  echo Html::anchor("account/simpleauth", "Log In");
		endif;
		?>
		</p>
	    </aside>
	</header>
	<section id="main">
	    <div class="row">
		<?php if (Session::get_flash('success')): ?>
    		<div class="alert-message success">
    		    <p>
			    <?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
    		    </p>
    		</div>
		<?php endif; ?>
		<?php if (Session::get_flash('error')): ?>
    		<div class="alert-message error">
    		    <p>
			    <?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
    		    </p>
    		</div>
		<?php endif; ?>
	    </div>

	    <article>
		<?php
		if (isset($page_content)) {
		    echo $page_content;
		};
		if (isset($content)) {
		    echo $content;
		};
		?>
	    </article>
	</section>
    </body>
</html>
