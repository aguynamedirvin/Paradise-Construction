<?php snippet('header') ?>

	<div id="project-page" class="page wrap">

		<div class="before-after twentytwenty-container" style="max-width: 775px">
			<img src="<?php echo $page->url() . '/' . $page->before()->images() ?>" >
			<img src="<?php echo $page->url() . '/' . $page->after()->images() ?>" >
		</div>

	</div>

<?php snippet('footer') ?>