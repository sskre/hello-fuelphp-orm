<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>
			<?php echo Form::input('title', Input::post('title', isset($article) ? $article->title : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Title')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Contents', 'contents', array('class'=>'control-label')); ?>
			<?php echo Form::textarea('contents', Input::post('contents', isset($article) ? $article->contents : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Contents')); ?>
		</div>

		<div class="form-group">
			<?php echo Form::label('Author #1', 'author1', array('class'=>'control-label')); ?>
			<?php echo Form::input('comments[0][author]', Input::post('comments.0.author', isset($article) ? $article->comments[0]->author : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Author #1')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Comment #1', 'comment1', array('class'=>'control-label')); ?>
			<?php echo Form::input('comments[0][contents]', Input::post('comments.0.contents', isset($article) ? $article->comments[0][contents] : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Comment #1')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Author #2', 'author2', array('class'=>'control-label')); ?>
			<?php echo Form::input('comments[1][author]', Input::post('comments.1.author', isset($article) ? $article->comments[1]->author : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Author #2')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Comment #2', 'comment2', array('class'=>'control-label')); ?>
			<?php echo Form::input('comments[1][contents]', Input::post('comments.1.contents', isset($article) ? $article->comments[1]->contents : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Comment #2')); ?>
		</div>



		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>
