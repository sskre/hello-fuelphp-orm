<h2>Viewing <span class='muted'>#<?php echo $comment->id; ?></span></h2>

<p>
	<strong>Author:</strong>
	<?php echo $comment->author; ?></p>
<p>
	<strong>Contents:</strong>
	<?php echo $comment->contents; ?></p>

<?php echo Html::anchor('comment/edit/'.$comment->id, 'Edit'); ?> |
<?php echo Html::anchor('comment', 'Back'); ?>