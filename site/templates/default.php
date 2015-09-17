<?php snippet('header') ?>

	<main class="main" role="main">

		<h1 class="title"><?php echo $page->title()->html() ?></h1>

        <?php if ($page->summary()->isNotEmpty()): ?>
        <p class="summary"><?php echo $page->summary()->html() ?></p>
        <?php endif ?>

		<?php echo $page->text()->kirbytext() ?>

	</main>

<?php snippet('footer') ?>