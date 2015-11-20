<?php 

/**
 * This page has a controller: controllers/projects.php
 */

snippet('header') ?>

	<main class="main" id="projects" role="main">
		
		<h1 class="title"><?php echo $page->title()->html() ?></h1>

		<?php if ($page->summary()->isNotEmpty()): ?>
		<p class="summary"><?php echo $page->summary()->html() ?></p>
		<?php endif ?>


		<ul class="pages-nav" id="category">
			<li <?php if (!param('category')) echo ' class="active"' ?>><a href="<?php echo page('projects')->url() ?>/#projects">All</a></li>
			<?php foreach ($cats as $cat): ?>
			<li <?php if (param('category') == urlencode($cat)) echo ' class="active"' ?>>
				<a href="<?php echo $page->url() . '/category:' . urlencode($cat) ?>/#projects">
					<?php echo $cat ?>
				</a>
			</li>
			<?php endforeach ?>
		</ul>


		<div class="projects">

			<?php 
				$count = 0;
				foreach ($projects as $project): 
					if ($project->hasImages()):
						$count++;

			?>

				<div class="project__thumb<?php ecco($count % 3 == 0, ' last') ?>">
					<a href="<?php echo $project->url() ?>" title="<?php echo $project->title()->html() ?>">
						<?php 

							if ($project->image( $project->featured() )) {
								$image = $project->image( $project->featured() );
							} else {
								$image = $project->image();
							}

						?>
						<img src="<?php echo $image->crop(400, 280, 75)->url() ?>" alt="<?php echo $project->title()->html() ?>">
						<button class="btn btn-line aligncenter"><?php echo l::get('view_project_btn') ?></button>
					</a>
				</div>

			<?php endif; endforeach ?>

		</div>

		</div>


		<?php if($projects->pagination()->hasPages()): /*** pagination ***/ ?>
		<ul class="pages-nav">
			<?php if($pagination->hasPrevPage()): ?>
			<li><a class="prev" href="<?php echo $pagination->prevPageUrl() ?>">&larr; <?php echo l::get('previous') ?></a></li>
			<?php endif ?>

			<?php foreach($pagination->range(10) as $page): ?>
			<li><a <?php if($pagination->page() == $page) echo ' class="active"' ?> href="<?php echo $pagination->pageURL($page) ?>"><?php echo $page ?></a></li>      
			<?php endforeach ?>

			<?php if($pagination->hasNextPage()): ?>
			<li><a class="next" href="<?php echo $pagination->nextPageURL() ?>"><?php echo l::get('next') ?> &rarr;</a></li>
			<?php endif ?>
		</ul>
		<?php endif ?>
		

	</main>

<?php snippet('footer') ?>