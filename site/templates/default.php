<?php snippet('header') ?>

	<main class="main" role="main">

		<h1 class="title"><?php echo $page->title()->html() ?></h1>

		<?php echo $page->text()->kirbytext() ?>

	</main>

<?php snippet('footer') ?>