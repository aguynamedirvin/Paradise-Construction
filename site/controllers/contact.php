<?php

return function($site, $pages, $page) {

	$alert = null;

	$data = array(
		'name'	=> '',
		'email'	=> '',
		'phone'	=> '',
		'text'	=> ''
	);

	if(get('submit')) {

		$data = array(
			'name'  => get('name'),
			'email' => get('email'),
			'phone' => get('phone'),
			'text'  => get('text')
		);

		$rules = array(
			'name'  => array('required'),
			'email' => array('required', 'email'),
			'phone' => array('required', 'num'),
			'text'  => array('required', 'min' => 3, 'max' => 3000)
		);

		$messages = array(
			'name'  => 'Enter a valid name.',
			'email' => 'Enter a valid email address.',
			'phone' => 'Enter a valid phone number.',
			'text'  => 'Please fill in the message textarea.'
		);

		// some of the data is invalid
		if($invalid = invalid($data, $rules, $messages)) {
			$alert = $invalid;

		// the data is fine, let's send the email
		} else {

			// create the body from a simple snippet
			$body  = snippet('contactmail', $data, true);

			// build the email
			$email = email(array(
				'to'      => $site->email(),
				'from'    => $site->email(),
				'subject' => 'New message from Paradise Construction',
				'replyTo' => $data['email'],
				'body'    => $body
			));

			// try to send it and redirect to the
			// thank you page if it worked
			if($email->send()) {
				go('contact/status:thank-you');
			// add the error to the alert list if it failed
			} else {
				$alert = array($email->error());
			}

		}

	}

	return compact('alert', 'data');

};