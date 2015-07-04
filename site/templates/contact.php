<?php snippet('header') ?>

	<main id="contact-page" class="main wrap page" role="main">

		<h1 class="title"><?php echo $page->title()->html() ?></h1>

		<form method="POST" class="contact-form">

			<div class="input pull-left">
				<input type="text" name="name" placeholder="Name*">
				<input type="text" name="email" placeholder="Email*">
				<input type="text" name="phone" placeholder="Phone Number*">
			</div>

			<div class="message pull-right">
				<textarea name="text" placeholder="Message*"></textarea>
			</div>

			<input type="submit" name="submit" class="btn pull-right" value="Send message">
		</form>

 
		<?php if($alert): ?>
		<div class="alert">
		<ul>
		<?php foreach($alert as $message): ?>
		<li><?php echo html($message) ?></li>
		<?php endforeach ?>
		</ul>
		</div>
		<?php endif ?>

	</main>

<?php snippet('footer') ?>