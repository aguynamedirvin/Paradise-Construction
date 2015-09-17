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
			<form method="POST" class="contact-form pull-left">

				<input type="text" name="name" placeholder="<?php echo l::get('name') ?>*" value="<?php echo $data['name'] ?>">
				<input type="text" name="email" placeholder="<?php echo l::get('email') ?>*" value="<?php echo $data['email'] ?>">
				<input type="text" name="phone" placeholder="<?php echo l::get('phone') ?>*" value="<?php echo $data['phone'] ?>">

				<input class="hidden" type="url" name="url" placeholder="Do not fill this in">
				
				<textarea name="text" placeholder="<?php echo l::get('message') ?>*"><?php echo $data['text'] ?></textarea>

				<input type="submit" name="submit" class="btn pull-right" value="<?php echo l::get('send_message_btn') ?>">
			
			</form>

			<!-- Contact Info -->
			<ul class="contact-info">
				<li>
					<i class="contact-info__icon fa fa-envelope"></i>
					<div class="contact-info__details">
						<h3><?php echo l::get('email') ?></h3>
						<p><?php echo $site->email() ?></p>
					</div>
				</li>
				<li>
					<i class="contact-info__icon fa fa-phone"></i>
					<div class="contact-info__details">
						<h3><?php echo l::get('phone') ?></h3>
						<p><?php echo $site->phone() ?></p>
					</div>
				</li>
				<li>
					<i class="contact-info__icon fa fa-clock-o"></i>
					<div class="contact-info__details">
						<h3><?php echo l::get('working-hours') ?></h3>
						<p><?php echo $site->working_hours()->kirbytext() ?><p>
					</div>
				</li>
			</ul>

		</div>


	<?php endif ?>

	</main>

<?php snippet('footer') ?>