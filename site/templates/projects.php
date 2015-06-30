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
					<?php if($image = $project->image($project->after())): ?>
					<img src="<?php echo thumb($image, array('width' => 400, 'height' => 280, 'crop' => true, 'quality' => 75))->url() ?>" alt="<?php echo $project->title()->html() ?>" >
					<?php endif ?>
					<button class="btn btn-line aligncenter"><?php echo l::get('view_project_btn') ?></button>
				</a>
			</div>
			<?php endforeach ?>

		</div>

			


		

		<?php if($projects->pagination()->hasPages()): /*** pagination ***/ ?>
		<ul class="pages-nav">
			<?php if($pagination->hasPrevPage()): ?>
			<li><a class="prev" href="<?php echo $pagination->prevPageUrl() ?>">&larr; <?php echo l::get('previous') ?></a></li>
			<?php endif ?>

			<?php foreach($pagination->range(10) as $page): ?>
			<li><a<?php if($pagination->page() == $page) echo ' class="active"' ?> href="<?php echo $pagination->pageURL($page) ?>"><?php echo $page ?></a></li>      
			<?php endforeach ?>

			<?php if($pagination->hasNextPage()): ?>
			<li><a class="next" href="<?php echo $pagination->nextPageURL() ?>"><?php echo l::get('next') ?> &rarr;</a></li>
			<?php endif ?>
		</ul>
		<?php endif ?>
		

	</div>

<?php snippet('footer') ?>