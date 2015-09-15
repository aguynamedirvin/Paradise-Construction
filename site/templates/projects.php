<?php 

snippet('header') 

/**
 * This page has a controller: controllers/projects.php
 */

?>

	<main class="main" id="projects" role="main">
		
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

		<div class="project-showcase">
			<div class="project-gallery">
				
				<?php 

					if($cat = param('category')) {
						projects(array('filterBy' => array('by' => 'category', 'tag' => urldecode($cat), 'separator' => ',')));
					} else {
						projects();
					}

				?>

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