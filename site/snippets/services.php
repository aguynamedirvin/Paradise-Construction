<?php 

$services = page('services')->children();

?>
<ul class="services">
	<?php foreach ($services as $service): if ( $service->featured()->isTrue() ): ?>
	<li>
		<div class="icon-container">
			<svg class="icon" role="img">
				<use xlink:href="<?php echo $site->url() ?>/assets/images/svg-sprite.svg#icon-<?php echo $service->icon() ?>"></use>
			</svg>
		</div>
		<h4 class="service-title"><?php echo $service->title() ?></h4>
		<p class="service-summary"><?php echo $service->text() ?></p>
	</li>
	<?php endif; endforeach ?>
</ul>

<ul class="all-services">
	<?php foreach ($services as $service): ?>
	<li><?php echo $service->title() ?></li>
	<?php endforeach ?>
</ul>