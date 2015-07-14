<?php snippet('header') ?>

	<main class="main" role="main">

	<?php if(param('status') == 'thank-you'): ?>

		<div class="aligncenter">
			<h1>We will be in touch soon.</h1>
			<p>Thank you for contacting us. We will get back to you as soon as possible.</p>
		</div>

	<?php else: ?>

		<h1 class="title"><?php echo $page->title() ?></h1>

		<?php if($alert): ?>
		<div class="alert">
			<ul>
				<?php foreach($alert as $message): ?>
				<li><?php echo html($message) ?></li>
				<?php endforeach ?>
			</ul>
		</div>
		<?php endif ?>


		<form method="POST" class="contact-form">

			<div class="input pull-left">
				<input type="text" name="name" placeholder="<?php echo l::get('name') ?>*" value="<?php echo $data['name'] ?>">
				<input type="text" name="email" placeholder="<?php echo l::get('email') ?>*" value="<?php echo $data['email'] ?>">
				<input type="text" name="phone" placeholder="<?php echo l::get('phone') ?>*" value="<?php echo $data['phone'] ?>">

				<input class="hidden" type="url" name="url" placeholder="Do not fill this in">
			</div>

			<div class="message pull-right">
				<textarea name="text" placeholder="<?php echo l::get('message') ?>*"><?php echo $data['text'] ?></textarea>
			</div>

			<input type="submit" name="submit" class="btn pull-right" value="<?php echo l::get('send_message_btn') ?>">
		</form>


	<?php endif ?>

	</main>

<?php snippet('footer') ?>