<?php snippet('header') ?>

	<main class="main" role="main">

		<h1 class="title"><?php echo $page->title()->html() ?></h1>
		
		<?php if ($page->summary()->isNotEmpty()): ?>
		<p class="summary"><?php echo $page->summary()->html() ?></p>
		<?php endif ?>

		<?php 
		
			$services = $page->children(); 

		?>
		<ul class="services">
			<?php foreach ($services as $service): if( $service->text()->isNotEmpty() ): ?>
			<li>
				<?php if ( $service->icon()->isNotEmpty() ): ?>
				<div class="service__icon">
					<svg class="icon" role="img">
						<use xlink:href="<?php echo $site->url() ?>/assets/images/svg-sprite.svg#icon-<?php echo $service->icon() ?>"></use>
					</svg>
				</div>
				<?php endif ?>
				<div class="service__details">
					<h4 class="service__title"><a href="<?php echo page('projects')->url() . '/category:' . urlencode($service->title()) ?>"><?php echo $service->title() ?></a></h4>
					<p class="service__summary"><?php echo $service->text() ?></p>
				</div>
			</li>
			<?php endif; endforeach ?>
		</ul>

		<ul class="all-services">
			<?php 
				foreach ($services as $service):
					if ($service->text()->isEmpty()): ?>
			<li><a href="<?php echo page('projects')->url() . '/category:' . urlencode($service->title()) ?>"><?php echo $service->title() ?></a></li>
			<?php 
					endif;
				endforeach ?>
		</ul>

	</main>

<?php snippet('footer') ?>