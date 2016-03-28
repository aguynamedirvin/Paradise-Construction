<!doctype html>
<html class="no-js" lang="<?php echo $site->language()->code() ?>">
	<head>

		<!-- Force IE to use the latest rendering engine -->
		<meta http-equiv="x-ua-compatible" content="IE=edge">

		<meta charset="utf-8">

		<?php if($page->isHomePage()): ?>
		<title><?php echo $site->title()->html() ?> &#124; El Paso TX Roofing, Landscaping</title>
		<?php else: ?>
		<title><?php echo $page->title()->html() ?> &#8212; <?php echo $site->title()->html() ?></title>
		<?php endif ?>


		<?php if($page->seo_summary()->isNotEmpty()): ?>
		<meta name="description" content="<?php echo $page->seo_summary()->html(); ?>" />
		<?php else: ?>
		<meta name="description" content="<?php echo $site->seo_summary()->html(); ?>" />
		<?php endif ?>

		<meta name="keywords" content="<?php echo $site->keywords()->html(); ?>" />

		<!-- OG -->
		<meta property="og:image" content="<?php echo $site->url() . '/assets/images/small_logo.png' ?>" />


		<!-- Mobile specific metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<!-- Stylesheets -->
		<?php echo css('assets/css/main.css') ?>


		<!--[if lte IE 8]>
		<script src="<?php echo $site->url() ?>/assets/js/svg4everybody.ie.min.js"></script>
		<![endif]-->

		<!-- Modernizer -->
		<?php echo js('assets/js/vendor/modernizr.min.js') ?>
		<script>
			Modernizr.load([
				{
					// If Media Queries not supported
					test: Modernizr.mq('only all'),
					nope: '<?php echo $site->url() ?>/assets/js/polyfills/respond.min.js'
				},
				{
					// If SVGs not supported
					test: Modernizr.svg,
					nope: ['<?php echo $site->url() ?>/assets/js/polyfills/svg4everybody.min.js', 'ielt8!<?php echo $site->url() ?>/assets/js/polyfills/svg4everybody.ie.min.js']
				},

			]);
		</script>

		<script type="application/ld+json">
		{
			"@context" : "http://schema.org",
			"@type" : "LocalBusiness",
			"name" : "<?php echo $site->title()->html() ?>",
			"logo" : "<?php echo $site->url() . '/assets/images/small_logo.png' ?>",
			"telephone" : "+1 <?php echo $site->phone() ?>",
			"email" : "<?php echo $site->email() ?>",
			"url" : "<?php echo $site->url() ?>",
			"address" : {
				"@type" : "PostalAddress",
				"addressLocality" : "<?php echo $site->city() ?>",
				"addressRegion" : "<?php echo $site->state() ?>",
				"addressCountry" : "US",
				"postalCode" : "<?php echo $site->postal_code() ?>"
			},
			"contactPoint" : {
				"@type" : "ContactPoint",
				"telephone" : "+1 <?php echo $site->phone() ?>",
				"contactType" : "customer service",
				"contactOption" : "TollFree",
				"areaServed" : "US",
				"availableLanguage": ["English", "Spanish"]
			},
			"sameAs" : [
				"<?php echo $site->facebook() ?>",
				"<?php echo $site->google_plus() ?>"
			]
		}
		</script>


	</head>
	<body>

		<!--[if lt IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Header -->
		<div id="header" class="header<?php ecco($page->isHomePage(), ' header-transparent') ?>">
			<div class="wrap">

				<!-- Logo -->
				<a href="<?php echo $site->language->url() ?>" class="logo" alt="<?php echo $site->title()->html() ?>"></a>

				<!-- Main Navigation Menu -->
				<?php snippet('nav') ?>

			</div>
		</div>

		<main <?php ecco(!$page->isHomePage(), 'class="pad"')?>>

		<?php if (param('status') != 'free-estimate' & !$page->isHomePage()): ?>
			<?php snippet('free_estimate') ?>
		<?php endif ?>
