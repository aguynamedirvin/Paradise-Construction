<?php snippet('header') ?>

	<main id="contact-page" class="main wrap page" role="main">

		<h1 class="title"><?php echo $page->title()->html() ?></h1>

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
				<input type="text" name="name" placeholder="<?php echo l::get('name') ?>*">
				<input type="text" name="email" placeholder="<?php echo l::get('email') ?>*">
				<input type="text" name="phone" placeholder="<?php echo l::get('phone') ?>*">
			</div>

			<div class="message pull-right">
				<textarea name="text" placeholder="<?php echo l::get('message') ?>*"></textarea>
			</div>

			<input type="submit" name="submit" class="btn pull-right" value="<?php echo l::get('send_message_btn') ?>">
		</form>

	</main>

<?php snippet('footer') ?>