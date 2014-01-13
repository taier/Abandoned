<h2><?php echo __("ACTION_VIEW_COMMENT_LABEL")?></h2>
<?php echo Form::open(); ?>
<fieldset>

    <div class="clearfix">
	<div class="input" >
	    <?php echo Form::textarea('comment', 
			Input::post('comment', 
			    isset($comment) ? $comment->comment : ''), array('placeholder' => __("ACTION_VIEW_COMMENT_PLACEHOLDER"))); ?>
	</div>
    </div>
</fieldset>	
<div class="actions">
    <?php echo Form::submit('submit', __("ACTION_VIEW_ADD"), array('class' => 'btn btn-primary')); ?>

</div>
<?php echo Form::close() ?>
