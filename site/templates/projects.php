<?php 

/**
 * This page has a controller: controllers/projects.php
 */

snippet('header') ?>
	
	<div class="content">	
	
		<h1 class="title"><?php echo $page->title()->html() ?></h1>

		<?php if ($page->text()->isNotEmpty()): ?>
		<p class="summary"><?php echo $page->text()->html() ?></p>
		<?php endif ?>


		<div class="projects-gallery">
			
			<?php foreach ($projects as $image): ?>
			<a href="<?php echo $image->url() ?>" data-lightbox="projects">
				<img src="" data-src="<?php echo $image->resize(300, null, 100)->url() ?>">
			</a>
			<?php endforeach ?>

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

	</div>

<?php snippet('footer') ?>