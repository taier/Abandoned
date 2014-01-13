<?php echo Asset::css('bootstrap.css'); ?>
<style>
		label{
			margin-left: 10px;
		}
		input{
			margin-left: 10px;
		}
		#register{
			margin-left: 5px;
			font-size: 14px;
			font-weight: bold;
		}
</style>
<div id="register">
	<?php
	echo Form::open();
	echo Form::fieldset_open(null, "User data");
	?>
</div>

<label for="username">User name</label>
    <input type="text" name="username" id="username" />
    <br>
<label for="password">Password</label>
    <input type="password" name="password" id="password" />
    <br>
<input type="Submit" value="Log in" class="btn btn-default" />
<?php
echo Form::fieldset_close();
echo Form::close();
?>
<br>
<div id="register">
    <?php echo Html::anchor("account/create", "Not registered? Become a member!"); ?> or <?php echo Html::anchor("welcome/index", "Return"); ?>
</div>
