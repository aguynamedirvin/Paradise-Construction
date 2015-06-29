<?php snippet('header') ?>

	<div id="project-page" class="page wrap">

		<div class="project-info">
			<ul>
				<li>Date: <?php echo $page->date('m/Y', 'date') ?></li>
				<?php if (!$page->location()->isEmpty()): ?>
				<li>Location: <?php echo $page->location() ?></li>
				<?php endif ?>
				<li>Category: <a href=""><?php echo $page->tags() ?></a></li>
				<?php if (!$page->text()->isEmpty()): ?>
				<li>Summary: <?php echo $page->text() ?></li>
				<?php endif ?>
			</ul>
		</div>

		<div class="project-pictures">
			<div class="before-after twentytwenty-container" style="max-width: 775px">
				<img src="<?php echo $page->image($page->before())->url() ?>" alt="Before">
				<img src="<?php echo $page->image($page->after())->url() ?>" alt="After">
			</div>
		</div>

	</div>

<?php snippet('footer') ?>