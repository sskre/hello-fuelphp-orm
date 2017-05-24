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
<?php $comments = Input::post('comments', array()); $i = 0; ?>
<?php foreach ($comments as $key => $comment): ?>
		<div class="">
			<div class="comment-form">
				<div class="form-group author">
					<?php echo Form::label('Author', 'comments['.$i.'][author]', array('class'=>'control-label')); ?>
					<?php echo Form::input('comments['.$i.'][author]', Input::post('comments.'.$key.'.author', isset($comment->author) ? $comment->author : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Author')); ?>
				</div>
				<div class="form-group contents">
					<?php echo Form::label('Comment', 'comments['.$i.'][contents]', array('class'=>'control-label')); ?>
					<?php echo Form::input('comments['.$i.'][contents]', Input::post('comments.'.$key.'.contents', isset($comment->contents) ? $comment->contents : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Comment')); ?>
				</div>
				<div class="form-group">
					<?php echo Form::button('remove-comment-form', 'Remove comment form', ['type' => 'button', 'class' => 'btn btn-danger btn-xs']); ?>
				</div>
			</div>
		</div>
<?php $i++; ?>
<?php endforeach; ?>
		<div class="comment-form hidden" data-key="<?php echo count(Input::post('comments', array())); ?>">
			<div class="form-group author">
				<?php echo Form::label('Author', '', array('class'=>'control-label')); ?>
				<?php echo Form::input('', '', array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Author', 'disabled' => 'disabled')); ?>
			</div>
			<div class="form-group contents">
				<?php echo Form::label('Comment', '', array('class'=>'control-label')); ?>
				<?php echo Form::input('', '', array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Comment', 'disabled' => 'disabled')); ?>
			</div>
			<div class="form-group">
				<?php echo Form::button('remove-comment-form', 'Remove comment form', ['type' => 'button', 'class' => 'btn btn-danger btn-xs']); ?>
			</div>
		</div>
		<div class="form-group">
			<?php echo Form::button('add-comment-form', 'Add comment form', ['type' => 'button', 'class' => 'btn btn-defauld']); ?>
		</div>

		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>
