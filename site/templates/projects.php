<?php 


snippet('header') 

/**
 * This page has a controller: controllers/projects.php
 */

?>

	<div id="projects-page" class="page wrap">
		
		<h1 class="title"><?php echo $page->title()->html() ?></h1>

		<ul class="pages-nav">
			<li><a href="<?php echo $page->url() ?>">All</a></li>
			<?php foreach($tags as $tag): ?>
			<li>
				<a href="<?php echo $page->url() . '/tag:' . $tag ?>">
					<?php echo html($tag) ?>
				</a>
			</li>
			<?php endforeach ?>
		</ul>

		<div class="gallery">
	
			<?php foreach($projects as $project): ?>
			<div class="project">
				<a href="<?php echo $project->url() ?>">
					<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
					<img src="<?php echo thumb($image, array('width' => 400, 'height' => 280, 'quality' => 80))->url() ?>" alt="<?php echo $project->title()->html() ?>" >
					<?php endif ?>
					<button class="btn btn-line aligncenter"><?php echo l::get('view_project_btn') ?></button>
				</a>
			</div>
			<?php endforeach ?>

		</div>

		<?php if($projects->pagination()->hasPages()): /*** pagination ***/ ?>
		<ul class="pages-nav">
			<?php if($pagination->hasPrevPage()): ?>
			<li><a class="prev" href="<?php echo $pagination->prevPageUrl() ?>">&larr; newer projects</a></li>
			<?php endif ?>

			<?php if($pagination->hasNextPage()): ?>
			<li><a class="next" href="<?php echo $pagination->nextPageURL() ?>">older projects &rarr;</a></li>
			<?php endif ?>
		</ul>
		<?php endif ?>
		

	</div>

<?php snippet('footer') ?>