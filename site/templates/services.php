<?php snippet('header') ?>

	<main class="main" role="main">

		<h1 class="title"><?php echo $page->title()->html() ?></h1>
		<?php 
		
			$services = $page->children(); 

		?>
		<ul class="services">
			<?php foreach ($services as $service): if( $service->text()->isNotEmpty() ): ?>
			<li>
				<div class="icon-container">
					<svg class="icon" role="img">
						<use xlink:href="<?php echo $site->url() ?>/assets/images/svg-sprite.svg#icon-helmet"></use>
					</svg>
				</div>
				<h4 class="service-title"><?php echo $service->title() ?></h4>
				<p class="service-summary"><?php echo $service->text() ?></p>
			</li>
			<?php endif; endforeach ?>
		</ul>

		<ul class="all-services">
		<?php foreach ($services as $service): if( $service->text()->isEmpty() ): ?>
			<li><?php echo $service->title() ?></li>
		<?php endif; endforeach ?>
		</ul>

	</main>

<?php snippet('footer') ?>