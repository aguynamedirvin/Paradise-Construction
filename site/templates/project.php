<?php snippet('header') ?>

	<div id="project-page" class="page wrap">

		<div class="before-after twentytwenty-container" style="max-width: 775px">
			<img src="<?php echo $page->image($page->before())->url() ?>" alt="Before">
			<img src="<?php echo $page->image($page->after())->url() ?>" alt="After">
		</div>

	</div>

<?php snippet('footer') ?>