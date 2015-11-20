<?php snippet('header') ?>

	<main class="main" role="main">


		<div class="project-container">

			<div class="project__slider">
				<div class="project__slides">
					<?php foreach($page->images() as $image): ?>
					<div class="project__slide">
						<img src="<?php echo $image->url() ?>">
					</div>
					<?php endforeach ?>
				</div>

				<div class="project__slider-nav hide-sm">
					<?php foreach($page->images() as $image): ?>
					<div class="project__slider-thumb">
						<img src="<?php echo $image->crop(250, 175)->url() ?>">
					</div>
					<?php endforeach ?>
				</div>
			</div>


			<div class="project-info">
				<ul>
					<li><b><?php echo l::get('date') ?>:</b> <?php echo $page->date('m/Y', 'date') ?></li>
					<?php if ($page->location()->isNotEmpty()): ?>
					<li><b><?php echo l::get('location') ?>:</b> <?php echo $page->location() ?></li>
					<?php endif ?>
					<li><b><?php echo l::get('category') ?>:</b> 
						<?php foreach($page->category()->split() as $category): ?>
							<a href="<?php echo page('projects')->url() . '/category:' . urlencode($category) ?>"><?php echo $category ?></a>
						<?php endforeach ?>
					</li>
					<?php if ($page->description()->isNotEmpty()): ?>
					<li><b><?php echo l::get('description') ?>:</b> <?php echo $page->description() ?></li>
					<?php endif ?>
				</ul>
			</div>

		</div>


		<div class="project-showcase">
			<div class="other-projects hide-sm">
				<h3>Other Projects</h3>
				
				<?php projects(array('limit' => 4, 'columns' => 4, 'shuffle' => true)) ?>
					
			</div>
		</div>

	</main>

<?php snippet('footer') ?>