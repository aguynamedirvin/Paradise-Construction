<?php
error_reporting(E_ALL);
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		
		<!-- Force IE to use the latest rendering engine -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<meta charset="utf-8">

		<?php if($page->isHomePage()): ?>
		<title><?php echo ($site->title()) ?></title>
		<?php else: ?>
		<title><?php echo html($page->title()) ?> | <?php echo $site->title()->html() ?></title>
		<?php endif ?>

		
		<?php if($page->description()->isNotEmpty()): ?>
		<meta name="description" content="<?php echo html($page->description()) ?>" />
		<?php else: ?>
		<meta name="description" content="<?php echo html($site->description()) ?>" />
		<?php endif ?>
		<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />


		<!-- Mobile specific metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<!-- Stylesheets -->
		<?php echo css('assets/css/main.css') ?>

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:600|Open+Sans:400">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<?php if($page->isHomePage()): ?>
		<style type="text/css">
			@media screen and (min-width: 868px) {
				.header {
					background: transparent;
				}
				.sticky-header {
					background: #2E2E2E;
				}
			}
		</style>
		<?php endif ?>
		
		<!--[if lte IE 8]>
		<script src="build/js/svg4everybody.ie.min.js"></script>
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
					nope: ['<?php echo $site->url() ?>/assets/js/svg4everybody.min.js']
				},
			]);
		</script>

	</head>
	<body>

		<!--[if lt IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->


		<!-- Header -->
		<div id="header" class="header sticky">
			<div class="wrap">
				
				<!-- Logo -->
				<a href="<?php echo url() ?>" class="logo" alt="<?php echo $site->title()->html() ?>"></a>

				<!-- Main Navigation Menu -->
				<?php snippet('menu') ?>

			</div>
		</div>

		<?php if(!$page->isHomePage()): ?>
		<div class="pad"></div>
		<?php snippet('free_estimate') ?>
		<?php endif ?>
