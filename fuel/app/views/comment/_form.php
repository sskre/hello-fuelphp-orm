<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Author', 'author', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('author', Input::post('author', isset($comment) ? $comment->author : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Author')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Contents', 'contents', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('contents', Input::post('contents', isset($comment) ? $comment->contents : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Contents')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>