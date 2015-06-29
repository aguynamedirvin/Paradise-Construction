<?php

$form = new contactform(array(
	'to'       => 'John <john@mail.com>',
	'from'     => 'Contact Form <contact@yourdomain.com>',
	'subject'  => 'New contact form request',
	'goto'     => $page->url() . '/status:thank-you'
));

?>
<section id="contactform">

	<?php if(param('status') == 'thank-you'): ?>

	<h1>Thank you very much for your request</h1>
	<p class="contactform-text">We will get in contact as soon as possible</p>
	
	<?php else: ?>

	<h1>Get in contact</h1>

	<?php if($form->isError('send')): ?>
	<div class="contactform-alert">The email could not be sent. Please try again later.</div>
	<?php elseif($form->isError()): ?>
	<div class="contactform-alert">The form could not be submitted. Please fill in all fields correctly.</div>
	<?php endif ?>
	
	<form class="contact-form" action="#contactform" method="post">

		<div class="input pull-left">
			<input type="text" name="name" placeholder="Name<?php if($form->isRequired('name')) echo '*' ?>" value="<?php echo $form->htmlValue('name') ?>">
			<input type="text" name="email" placeholder="Email<?php if($form->isRequired('email')) echo '*' ?>" value="<?php echo $form->htmlValue('email') ?>">
			<input type="text" name="phone" placeholder="Phone Number<?php if($form->isRequired('email')) echo '*' ?>" value="<?php echo $form->htmlValue('phone') ?>">
		</div>

		<div class="message pull-right">
			<textarea name="text" placeholder="Message<?php if($form->isRequired('text')) echo '*' ?>"><?php echo $form->htmlValue('text') ?></textarea>
		</div>

		<input type="submit" name="submit" class="btn pull-right" value="<?php echo l::get('send_message_btn') ?>">


		<!-- <fieldset>
		
			<?php if($form->isError('send')): ?>
			<div class="contactform-alert">The email could not be sent. Please try again later.</div>
			<?php elseif($form->isError()): ?>
			<div class="contactform-alert">The form could not be submitted. Please fill in all fields correctly.</div>
			<?php endif ?>
			
			<div class="contactform-field<?php if($form->isError('name')) echo ' error' ?>">
				<label class="contactform-label" for="contactform-name">Name <?php if($form->isRequired('name')) echo '*' ?> <?php if($form->isError('name')): ?><small>Please enter a name</small><?php endif ?></label>
				<input class="contactform-input" type="text" id="contactform-name" name="name" value="<?php echo $form->htmlValue('name') ?>" />
			</div>
			
			<div class="contactform-field<?php if($form->isError('email')) echo ' error' ?>">
				<label class="contactform-label" for="contactform-email">Email adresse <?php if($form->isRequired('email')) echo '*' ?> <?php if($form->isError('email')): ?><small>Please enter a valid email address</small><?php endif ?></label>
				<input class="contactform-input" type="text" id="contactform-email" name="email" value="<?php echo $form->htmlValue('email') ?>" />
			</div>
			
			<div class="contactform-field<?php if($form->isError('text')) echo ' error' ?>">
				<label class="contactform-label" for="contactform-text">Text <?php if($form->isRequired('text')) echo '*' ?> <?php if($form->isError('text')): ?><small>Please enter your text</small><?php endif ?></label>
				<textarea class="contactform-input" name="text" id="contactform-text"><?php echo $form->htmlValue('text') ?></textarea>
			</div>
			
			<p class="contactform-help">All fields with * are required</p>
				
			<input class="contactform-button" type="submit" name="submit" value="Send" />
		
		</fieldset> -->
	</form>
	
	<?php endif ?>

</section>