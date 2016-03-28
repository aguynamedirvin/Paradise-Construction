<?php

$services = page('services')->children();

?>

<ul class="services">
	<?php foreach ($services as $service): ?>
	<?php if ($service->featured()->isTrue()): ?>
	<li>
		<div class="service__icon">
			<svg class="icon" role="img">
				<use xlink:href="<?php echo $site->url() ?>/assets/images/svg-sprite.svg#icon-<?php echo $service->icon() ?>"></use>
			</svg>
		</div>
		<div class="service__details">
			<h4 class="service__title"><?php echo $service->title()->link(page('projects')->url()) ?></h4>
			<p class="service__summary"><?php echo $service->text() ?></p>
		</div>
	</li>
	<?php endif; endforeach ?>
</ul>

<ul class="all-services">
	<?php foreach ($services as $service): ?>
	<li><?php echo $service->title()->link(page('projects')->url()) ?></li>
	<?php endforeach ?>
</ul>
