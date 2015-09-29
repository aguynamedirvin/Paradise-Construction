<?php snippet('header') ?>

	<!-- Slider -->
	<div id="main-slider">
		<div class="slide-container">
			
			<div class="slide" style="background-image: url(<?php echo $site->url() . '/assets/images/palms.png' ?>)">
				<div class="slide-content wrap">
					<div class="slide-meta">
						<div class="big-logo">
							<img src="<?php echo $site->url() . '/assets/images/logo.png' ?>" alt="<?php echo $site->title() ?> Logo">
							<!-- <svg class="icon" role="img">
								<use xlink:href="assets/images/svg-sprite.svg#icon-logo"></use>
							</svg> -->
						</div>
						<p class="summary"><?php echo $site->description() ?></p>
						<p class="summary"><b><?php echo l::get('call_us') ?>: <?php echo $site->phone() ?></b></p>
						<a class="btn btn-big btn-line hide-sm" role="button" href="<?php echo page('contact')->url() ?>">
							<?php echo l::get('contact_us') ?>
						</a>
						<a class="btn btn-big btn-line" role="button" href="<?php echo page('contact')->url() . '/status:free-estimate' ?>">
							<?php echo l::get('get_a_quote') ?>
						</a>
					</div>
				</div>
			</div>

			<?php foreach(page('slides')->children()->limit(4) as $slide): ?>
			<div class="slide" style="background-image: url(<?php echo thumb($slide->image($slide->background()), array('width' => 1440, 'height' => 650, 'crop' => true, 'upscale' => true, 'quality' => 80))->url() ?>);">
				<div class="slide-content wrap">
					<div class="slide-meta">
						<?php if ($slide->display_title()->isTrue()): ?>
						<h2 class="title"><?php echo $slide->title() ?></h2>
						<?php endif ?>

						<?php if ($slide->text()->isNotEmpty()): ?>
						<p class="summary"><?php echo $slide->text() ?></p>
						<?php endif ?>

						<?php if ($slide->button_text()->isNotEmpty() && $slide->button_link()->isNotEmpty()): ?>
						<a class="btn btn-big<?php ecco($slide->button_style() == 'btn-line', ' btn-line'); ecco($slide->button_style() == 'btn-dark', ' btn-dark')?>" role="button" href="<?php echo $slide->button_link() ?>">
							<?php echo html($slide->button_text()) ?>
						</a>
						<?php endif ?>
					</div>
				</div>
			</div>
			<?php endforeach ?>
	
		</div>
	</div>

	<?php snippet('free_estimate') ?>
		
		<!-- Why Us -->
		<section id="why-us" class="section">
			<div class="wrap">
				<div class="section__meta">
					<h2 class="title"><?php echo l::get('home_why_us_title') ?></h2>
					<p class="summary">Having the most beautiful home in your neighborhood is about more than simple aesthetics. It’s about stature and class. Paradise Construction transforms the “every day” into elegance.</p>
				</div>

				<div class="section__content">
					<ul>
						<li class="service">
							<div class="icon-container icon-round">
								<svg class="icon" role="img">
									<use xlink:href="assets/images/svg-sprite.svg#icon-decade"></use>
								</svg>
							</div>
							<h3 class="service__title big"><?php echo $page->service1_title() ?></h3>
							<p class="service__summary"><?php echo $page->service1_summary() ?></p>
						</li>
						<li class="service">
							<div class="icon-container icon-round">
								<svg class="icon" role="img">
									<use xlink:href="assets/images/svg-sprite.svg#icon-layers"></use>
								</svg>
							</div>
							<h3 class="service__title big"><?php echo $page->service2_title() ?></h3>
							<p class="service__summary"><?php echo $page->service2_summary() ?></p>
						</li>
						<li class="service last">
							<div class="icon-container icon-round">
								<svg class="icon" role="img">
									<use xlink:href="assets/images/svg-sprite.svg#icon-tools"></use>
								</svg>
							</div>
							<h3 class="service__title big"><?php echo $page->service3_title() ?></h3>
							<p class="service__summary"><?php echo $page->service3_summary() ?></p>
						</li>
					</ul>
				</div>
			</div>
		</section>


		<!-- Projects Gallery -->
		<div id="projects-showcase" class="section">
			
			<div class="section__meta">
				<h2 class="title"><?php echo l::get('home_projects_title') ?></h2>
			</div>

			<div class="section__content">

				<div class="featured-projects">
					<?php projects(array('shuffle' => true)) ?>
				</div>

				<div class="aligncenter">
					<a href="<?php echo page('projects')->url() ?>" class="btn btn-line"><?php echo l::get('view_all_projects') ?></a>
				</div>
			</div>
		</div>


		<!-- Our services -->
		<div id="our-services" class="section">
			<div class="wrap">
				<div class="section__meta">
					<h2 class="title"><?php echo l::get('home_services_title') ?></h2>
				</div>

				<div class="section__content">
					
					<?php snippet('services') ?>
					
					<div class="aligncenter">
						<a href="<?php echo page('services')->url() ?>" class="btn"><?php echo l::get('view_all_services') ?></a>
					</div>
				</div>
			</div>
		</div>



		<!-- Client quotes -->
		<div id="client-quotes" class="section">
			<div class="wrap">
				<div class="section__meta">
					<h2 class="title "><?php echo l::get('home_quotes_title') ?></h2>
				</div>

				<div class="section__content">
					<div class="quote-slider">
						<?php foreach(page('voices')->children()->limit(5) as $voice): ?>
							<div class="client-quote">
								<blockquote class="quote">&#8220;<?php echo $voice->quote() ?>&#8221;</blockquote>
								<div class="client-name"><?php echo $voice->title() ?></div>
							</div>
						<?php endforeach ?>
					</div>
				</div>

			</div>
		</div>


<?php snippet('footer') ?>