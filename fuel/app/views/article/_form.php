<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('title', Input::post('title', isset($article) ? $article->title : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Contents', 'contents', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('contents', Input::post('contents', isset($article) ? $article->contents : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Contents')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>