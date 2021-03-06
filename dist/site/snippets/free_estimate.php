<!-- Free Estimate Announcement -->
<section class="free-estimate" id="free-estimate">
	<div class="wrap">
		<div class="alignleft">
			<h2 class="free-estimate__title"><?php echo $site->free_estimate() ?></h2>
            <p class="free-estimate__summary hide-sm"><?php echo $site->free_estimate_summary() ?></p>
		</div>

		<a class="btn btn-dark alignright hide-sm" role="button" href="<?php echo page('contact')->url() . '/status:free-estimate' ?>"><?php echo l::get('free_estimate_btn') ?></a>
		<a href="tel:<?php echo formatPhone($site->phone()) ?>">
			<button class="btn btn-dark aligncenter hide-md"><?php echo l::get('click_to_call') ?></button>
		</a>
	</div>
</section>
