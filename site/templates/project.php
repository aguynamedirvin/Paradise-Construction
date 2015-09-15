<?php 

snippet('header');

$smallThumb = array('height' => 175, 'width' => 250, 'quality' => 75, 'crop' => true);

?>

	<main class="main" role="main">


		<div class="project-container">

			<div class="project-info">
				<ul>
					<li><b><?php echo l::get('date') ?>:</b> <?php echo $page->date('m/Y', 'date') ?></li>
					<?php if ($page->location()->isNotEmpty()): ?>
					<li><b><?php echo l::get('location') ?>:</b> <?php echo $page->location() ?></li>
					<?php endif ?>
					<li><b><?php echo l::get('category') ?>:</b> <?php echo $page->category() ?></li>
					<?php if ($page->text()->isNotEmpty()): ?>
					<li><b><?php echo l::get('description') ?>:</b> <?php echo $page->text() ?></li>
					<?php endif ?>
				</ul>
			</div>


			<div class="project-slider">

				<div class="project-slides">
					<?php foreach($page->images() as $image): ?>
					<div class="project-slide">
						<img data-lazy="<?php echo $image->url() ?>">
					</div>
					<?php endforeach ?>
				</div>

				<div class="project-slider-nav">
					<?php foreach($page->images() as $image): ?>
					<div class="project-slider-thumb">
						<img src="<?php echo thumb($image, $smallThumb)->url() ?>">
					</div>
					<?php endforeach ?>
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