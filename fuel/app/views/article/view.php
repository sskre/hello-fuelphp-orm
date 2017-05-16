<h2>Viewing <span class='muted'>#<?php echo $article->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $article->title; ?></p>
<p>
	<strong>Contents:</strong>
	<?php echo $article->contents; ?></p>

<?php echo Html::anchor('article/edit/'.$article->id, 'Edit'); ?> |
<?php echo Html::anchor('article', 'Back'); ?>