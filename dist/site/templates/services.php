<?php snippet('header') ?>

	<div class="content">

		<h1 class="title"><?php echo $page->title()->html() ?></h1>

		<?php if ($page->text()->isNotEmpty()): ?>
		<p class="summary"><?php echo $page->text()->html() ?></p>
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
					<h2 class="service__title"><?php echo $service->title()->link(page('projects')->url()) ?></h2>
					<p class="service__summary"><?php echo $service->text() ?></p>
				</div>
			</li>
			<?php endif; endforeach ?>
		</ul>

		<ul class="all-services">
			<?php
				foreach ($services as $service):
					if ($service->text()->isEmpty()): ?>
			<li><?php echo $service->title()->link(page('projects')->url()) ?></li>
			<?php
					endif;
				endforeach ?>
		</ul>

	</div>

<?php snippet('footer') ?>
