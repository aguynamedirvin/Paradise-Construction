<!-- Free Estimate Announcement -->
<section id="free-estimate">
	<div class="wrap">
		<div class="alignleft">
			<h2><?php echo $site->free_estimate() ?></h2>
            <p>If you call today you’ll get a FREE estimate of your home that compares the now to the wow – valued at $60!</p>
		</div>

		<a href="<?php echo page('contact')->url() . '/status:free-estimate' ?>" class="btn btn-dark alignright hide-sm"><?php echo l::get('free_estimate_btn') ?></a>
		<button class="btn btn-dark aligncenter hide-md"><a href="tel:<?php echo $site->phone() ?>">Click to call</a></button>
	</div>
</section>