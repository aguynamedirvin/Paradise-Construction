<?php snippet('header') ?>

	<main class="main" role="main">

	<?php if(param('status') == 'thank-you'): ?>

		<div class="aligncenter">
			<h1>We will be in touch soon.</h1>
			<p>Thank you for contacting us. We will get back to you as soon as possible.</p>
		</div>

	<?php else: ?>
		
		<h1 class="title"><?php e(param('status') == 'free-estimate', 'Get A Free Estimate', $page->title()) ?></h1>
		
		<?php if ($page->summary()->isNotEmpty()): ?>
		<p class="summary"><?php echo $page->summary()->html() ?></p>
		<?php endif ?>

		<?php if($alert): ?>
		<div class="alert">
			<ul>
				<?php foreach($alert as $message): ?>
				<li><?php echo html($message) ?></li>
				<?php endforeach ?>
			</ul>
		</div>
		<?php endif ?>


		<div class="contact">
			

			<!-- Contact Form -->
			<div  class="contact-form">
			<form method="POST">

				<input type="text" name="name" placeholder="<?php echo l::get('name') ?>*" value="<?php echo $data['name'] ?>">
				<input type="text" name="email" placeholder="<?php echo l::get('email') ?>*" value="<?php echo $data['email'] ?>">
				<input type="text" name="phone" placeholder="<?php echo l::get('phone') ?>*" value="<?php echo $data['phone'] ?>">

				<input class="hidden" type="url" name="url" placeholder="Do not fill this in">
				
				<textarea name="text" placeholder="<?php echo l::get('message') ?>*"><?php echo $data['text'] ?></textarea>

				<input type="submit" name="submit" class="btn pull-right" value="<?php echo l::get('send_message_btn') ?>">
			
			</form>
			</div>

			<!-- Contact Info -->
			<div class="contact-info">
				<div class="contact-info__container">
					<i class="contact-info__icon fa fa-envelope"></i>
					<div class="contact-info__details">
						<h3><?php echo l::get('email') ?></h3>
						<p><?php echo encode("" . $site->email() . "") ?></p>
					</div>
				</div>
				<div class="contact-info__container">
					<i class="contact-info__icon fa fa-phone"></i>
					<div class="contact-info__details">
						<h3><?php echo l::get('phone') ?></h3>
						<p><?php echo $site->phone() ?></p>
					</div>
				</div>
				<div class="contact-info__container">
					<i class="contact-info__icon fa fa-clock-o"></i>
					<div class="contact-info__details">
						<h3><?php echo l::get('working_hours') ?></h3>
						<p>
						<?php 
							
							foreach($site->work_hours()->toStructure() as $time) {

								// Create times
								$opening_hours = date_create($time->open_hours());
								$closing_hours = date_create($time->closing_hours());

								// Format times
								$opening_hours = date_format($opening_hours, 'g:i A');
								$closing_hours = date_format($closing_hours, 'g:i A');

								// Display times
								echo $time->day() . ': ' . $opening_hours . ' &#8212; ' . $closing_hours . '<br/>';

							}

						?>
						<p>

					</div>
				</div>
			</div>

		</div>


	<?php endif ?>

	</main>

<?php snippet('footer') ?>