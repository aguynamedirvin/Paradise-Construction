<?php 

snippet('header') 

/**
 * This page has a controller: controllers/projects.php
 */

?>

	<div id="projects-page" class="page wrap">
		
		<h1 class="title"><?php echo $page->title()->html() ?></h1>

		<?php 

		// fetch the basic set of pages
		$projects = $page->children()->visible();

		// fetch all categories
		$cats = $projects->pluck('category', ',', true);

		// Apply pagination
		$projects   = $projects->paginate(9);
		$pagination = $projects->pagination();
		
		?>

		<ul class="pages-nav">
			<li <?php if (!param('category')) echo ' class="active"' ?>><a href="<?php echo page('projects')->url() ?>">All</a></li>
			<?php foreach ($cats as $cat): ?>
			<li <?php if (param('category') == $cat) echo ' class="active"' ?>>
				<a href="<?php echo $page->url() . '/category:' . $cat ?>">
					<?php echo $cat ?>
				</a>
			</li>
			<?php endforeach ?>
		</ul>


		<div class="gallery">
			
			<?php 

				if($cat = param('category')) {
					projects(array('filterBy' => array('by' => 'category', 'tag' => $cat, 'separator' => ',')));
				} else {
					projects();
				}

			?>

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