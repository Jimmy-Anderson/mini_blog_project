<?php 	include_once('public_header.php') ?>
<div class="container">	
	<div class="row">
		<div class="col-md-6">
			<h1><?= $article->title?></h1><hr>
		</div>
		<div class="col-md-2">
			<span><?= date('d M Y H:i:s',strtotime($article->created_at))?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<p><?= $article->body?></p>
		</div>
	</div>
	<?php if(! is_null($article->img_path)):?>
	<div class="row">
		<div class="col-md-6">
			<img src="<?= $article->img_path ?>" alt="article image">
		</div>
	</div>
	<?php endif; ?>
</div>

<?php 	include_once('public_footer.php') ?>