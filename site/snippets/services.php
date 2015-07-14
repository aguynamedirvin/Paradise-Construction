<ul class="services">
	<li>
		<div class="icon-container">
			<svg class="icon" role="img">
				<use xlink:href="<?php echo $site->url() ?>/assets/images/svg-sprite.svg#icon-helmet"></use>
			</svg>
		</div>
		<h4 class="service-title">Landscaping</h4>
		<p class="service-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quasi quae quidem voluptas molestiae mollitia.</p>
	</li>
	<li>
		<div class="icon-container">
			<svg class="icon" role="img">
				<use xlink:href="<?php echo $site->url() ?>/assets/images/svg-sprite.svg#icon-bricks"></use>
			</svg>
		</div>
		<h4 class="service-title">Rock wall</h4>
		<p class="service-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quasi quae quidem voluptas molestiae mollitia.</p>
	</li>
	<li>
		<div class="icon-container">
			<svg class="icon" role="img">
				<use xlink:href="<?php echo $site->url() ?>/assets/images/svg-sprite.svg#icon-brush"></use>
			</svg>
		</div>
		<h4 class="service-title">Textures &amp; complete paint</h4>
		<p class="service-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quasi quae quidem voluptas molestiae mollitia.</p>
	</li>
	<li>
		<div class="icon-container">
			<svg class="icon" role="img">
				<use xlink:href="<?php echo $site->url() ?>/assets/images/svg-sprite.svg#icon-home"></use>
			</svg>
		</div>
		<h4 class="service-title">New construction &amp; remodeling</h4>
		<p class="service-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quasi quae quidem voluptas molestiae mollitia.</p>
	</li>
</ul>

<ul class="all-services">
	<?php foreach (page('services')->children() as $service): ?>
	<li><?php echo $service->title() ?></li>
	<?php endforeach ?>
</ul>