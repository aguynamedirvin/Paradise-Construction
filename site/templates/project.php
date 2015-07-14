<?php 

snippet('header');

$thumbSettings = array('width' => 780, 'height' => 550, 'crop' => true, 'upscale' => true);

?>

	<main class="main" role="main">


		<div class="project-container">

			<div class="project-info">
				<ul>
					<li><b>Date:</b> <?php echo $page->date('m/Y', 'date') ?></li>
					<?php if ($page->location()->isNotEmpty()): ?>
					<li><b>Location:</b> <?php echo $page->location() ?></li>
					<?php endif ?>
					<li><b>Category:</b> <?php echo $page->category() ?></li>
					<?php if ($page->text()->isNotEmpty()): ?>
					<li><b>Summary:</b> <?php echo $page->text() ?></li>
					<?php endif ?>
				</ul>
			</div>

			<div class="project-pictures">
				<div class="before-after twentytwenty-container">
					<img src="<?php echo thumb($page->image($page->before()), $thumbSettings)->url() ?>" alt="Before">
					<img src="<?php echo thumb($page->image($page->after()), $thumbSettings)->url() ?>" alt="After">
				</div>
			</div>

		</div>


		<div class="project-showcase">
			<div class="project-gallery hide-sm">
				<h3>Other Projects</h3>
				
				<?php projects(array('limit' => 3, 'shuffle' => true)) ?>
					
			</div>
		</div>

	</main>

<?php snippet('footer') ?>