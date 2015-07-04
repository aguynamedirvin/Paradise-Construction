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

			<?php projects() ?>

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