<?php snippet('header') ?>

	<div id="project-page" class="page wrap">

		<div class="project-info">
			<ul>
				<li><b>Date:</b> <?php echo $page->date('m/Y', 'date') ?></li>
				<?php if (!$page->location()->isEmpty()): ?>
				<li><b>Location:</b> <?php echo $page->location() ?></li>
				<?php endif ?>
				<li><b>Category:</b> <a href=""><?php echo $page->tags() ?></a></li>
				<?php if (!$page->text()->isEmpty()): ?>
				<li><b>Summary:</b> <?php echo $page->text() ?></li>
				<?php endif ?>
			</ul>
		</div>

		<?php 

			$thumb_settings = array('width' => 780, 'height' => 550, 'crop' => true, 'upscale' => true);

		?>

		<div class="project-pictures">
			<div class="before-after twentytwenty-container">
				<img src="<?php echo thumb($page->image($page->before()), $thumb_settings)->url() ?>" alt="Before">
				<img src="<?php echo thumb($page->image($page->after()), $thumb_settings)->url() ?>" alt="After">
			</div>
		</div>

	</div>

<?php snippet('footer') ?>