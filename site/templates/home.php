<?php snippet('header') ?>


	<!-- Slider -->
	<div id="main-slider">
		<div class="slide-container">
			
			<div class="slide" style="background-image: url(<?php echo $site->url() . '/assets/images/palms.png' ?>)">
				<div class="slide-content wrap">
					<div class="slide-meta">
						<div class="big-logo">
							<img src="<?php echo $site->url() . '/assets/images/logo.png' ?>" alt="<?php echo $site->title()->html() ?> Logo">
						</div>
						<p class="summary"><?php echo $page->introduction()->html() ?></p>
						<a class="btn btn-big btn-large btn-line" role="button" href="<?php echo page('projects')->url() ?>">
							<?php echo l::get('view_projects_btn') ?>
						</a>
					</div>
				</div>
			</div>

			<?php foreach(page('slides')->slides()->toStructure() as $slide): ?>
			<div class="slide" style="background-image: url(<?php echo page('slides')->image($slide->background())->crop(1440, 650, 80)->url() ?>);">
				<div class="slide-content wrap">
					<div class="slide-meta">
						<?php if ($slide->display_title()->isTrue()): ?>
						<h2 class="title"><?php echo $slide->title()->html() ?></h2>
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
				<h1 class="title"><?php echo l::get('home_why_us_title') ?></h1>
			</div>

			<div class="section__content">
				<ul>
					<?php foreach($page->why_us()->toStructure() as $service): ?>
					<li class="service">
						<h3 class="service__title big"><?php echo $service->title()->html() ?></h3>
						<p class="service__summary"><?php echo $service->description() ?></p>
					</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
	</section>
	


	<!-- Projects Gallery -->
	<section id="projects-showcase" class="section">
		
		<div class="section__meta">
			<h1 class="title"><?php echo l::get('home_projects_title') ?></h1>
		</div>

		<div class="section__content">

			<div class="featured-projects">
				<?php projects(array('shuffle' => true)) ?>
			</div>

			<div class="aligncenter">
				<a href="<?php echo page('projects')->url() ?>" class="btn btn-line"><?php echo l::get('view_all_projects') ?></a>
			</div>
		</div>
		
	</section>



	<!-- Our services -->
	<section id="our-services" class="section">
		<div class="wrap">
			<div class="section__meta">
				<h1 class="title"><?php echo l::get('home_services_title') ?></h1>
			</div>

			<div class="section__content">
				
				<?php snippet('services') ?>
				
				<div class="aligncenter">
					<a class="btn" href="<?php echo page('services')->url() ?>"><?php echo l::get('view_all_services') ?></a>
				</div>
			</div>
		</div>
	</section>



	<!-- Client quotes -->
	<section id="client-quotes" class="section">
		<div class="wrap">
			<div class="section__meta">
				<h1 class="title "><?php echo l::get('home_quotes_title') ?></h1>
			</div>

			<div class="section__content">
				<div class="quote-slider">
					<?php foreach(page('testimonials')->testimonials()->toStructure() as $client): ?>
					<div class="client-quote">
						<blockquote class="quote">&#8220;<?php echo $client->quote() ?>&#8221;</blockquote>
						<div class="client-name"><?php echo $client->client() ?></div>
					</div>
					<?php endforeach ?>
				</div>
			</div>

		</div>
	</section>


<?php snippet('footer') ?>