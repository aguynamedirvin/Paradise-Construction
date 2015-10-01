<!doctype html>
<html class="no-js" lang="<?php echo $site->language()->code() ?>">
	<head>
		
		<!-- Force IE to use the latest rendering engine -->
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta charset="utf-8">

		<?php if($page->isHomePage()): ?>
		<title><?php echo $site->title()->html() ?></title>
		<?php elseif(param('category')): ?>
		<title>Projects under <?php echo html(urldecode(param('category'))) ?> | <?php echo $site->title()->html() ?></title>
		<?php else: ?>
		<title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
		<?php endif ?>

		
		<?php if($page->description()->isNotEmpty()): ?>
		<meta name="description" content="<?php echo $page->description()->html(); ?>" />
		<?php else: ?>
		<meta name="description" content="<?php echo $site->description()->html(); ?>" />
		<?php endif ?>

		<meta name="keywords" content="<?php echo $site->keywords()->html(); ?>" />


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
					nope: '<?php echo $site->url() ?>/assets/js/respond.min.js'
				},
				{
					// If SVGs not supported
					test: Modernizr.svg,
					nope: ['<?php echo $site->url() ?>/assets/js/svg4everybody.min.js', 'ielt8!<?php echo $site->url() ?>/assets/js/svg4everybody.ie.min.js']
				},

			]);
		</script>

		<script type="application/ld+json">
		{
			"@context" : "http://schema.org",
			"@type" : "LocalBusiness",
			<?php if ($page->isHomePage()): ?>
			"name" : "<?php echo $site->title()->html() ?>",
			<?php else: ?>
			"name" : "<?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?>",
			<?php endif ?>
			"logo" : "<?php echo $site->url() . '/assets/images/small_logo.png' ?>",
			"telephone" : "<?php echo $site->phone() ?>",
			"email" : "<?php echo $site->email() ?>",
			"url" : "<?php echo $site->url() ?>",
			"address" : {
				"@type" : "PostalAddress",
				"streetAddress" : "<?php echo $site->address() ?>",
				"addressLocality" : "<?php echo $site->city() ?>",
				"addressRegion" : "<?php echo $site->state() ?>",
				"addressCountry" : "US",
				"postalCode" : "<?php echo $site->postal_code() ?>"
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
				<?php snippet('navbar') ?>

			</div>
		</div>

	<?php if (!$page->isHomePage()): ?>
		<div class="pad"></div>
		
		<?php if (param('status') != 'free-estimate'): ?>
			<?php snippet('free_estimate') ?>
		<?php endif ?>
	<?php endif ?>
