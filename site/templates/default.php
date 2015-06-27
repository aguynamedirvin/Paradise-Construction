<?php snippet('header') ?>

	<div class="page wrap">

		<h1 class="title"><?php echo $page->title()->html() ?></h1>

		<?php echo $page->text()->kirbytext() ?>

	</div>

<?php snippet('footer') ?>