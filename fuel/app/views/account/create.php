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
echo Form::fieldset_open(null, "Enter your data");
?>
</div>
<label for="usermail">E-mail (works as username)</label>
<input type="text" name="usermail" id="usermail" />
<br>
<label for="password">Password</label>
<input type="password" name="password" id="password" />
<br>
<label for="password_rep"> Once again</label>
<input type="password" name="password_rep" id="password_rep" />
<br>
<div id="register">
<input type="Submit" value="Register" class="btn btn-default" /> or <?php echo Html::anchor("welcome/index", "Return"); ?>
</div>
<br>
<?php
echo Form::fieldset_close();
echo Form::close();

