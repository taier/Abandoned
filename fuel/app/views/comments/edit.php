<h2><?php echo "Edit Comment"?></h2>
<?php echo Form::open(); ?>
<fieldset>

    <div class="clearfix">
	<div class="input" >
	    <?php echo Form::textarea('new_comment', 
			Input::post('new_comment', 
			    isset($new_comment) ? $new_comment : ''), array('placeholder' => $old_comment)); ?>
	</div>
    </div>
</fieldset>	
<div class="actions">
    <?php echo Form::submit('submit', "Submit", array('class' => 'btn btn-primary')); ?>

</div>
<?php echo Form::close() ?>
