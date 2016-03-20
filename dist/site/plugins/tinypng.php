<?php

/**
 *
 * This plugin uses the TinyPNG api to compress
 * images. 
 *
 * To use just copy & paste your key in the
 * $key variable.
 *
 */


/*

kirby()->hook('panel.file.upload', function($page) {

	$path = kirby()->roots()->content();

	$key	= '3JNa_eSdyKvlAkEzcFvDPbE3k03HfTzx';
	$input	= $page->dir() . '/' . $page->filename();
	$output	= $page->dir() . '/' . $page->name() . '-min' . '.' . $page->extension();

	tinypng_compress($key, $input, $input);

});

function tinypng_compress($key, $input, $output) {
	$url = "https://api.tinify.com/shrink";
	$options = array(
		"http" => array(
			"method" => "POST",
			"header" => array(
				"Content-type: image/png",
				"Authorization: Basic " . base64_encode("api:$key")
			),
			"content" => file_get_contents($input)
		),
		"ssl" => array(
			"cafile" => __DIR__ . "/cacert.pem",
			"verify_peer" => true
		)
	);

	$result = fopen($url, "r", false, stream_context_create($options));
	if ($result) {
		// Compression was successful, retrieve output from Location header.
		foreach ($http_response_header as $header) {
			if (strtolower(substr($header, 0, 10)) === "location: ") {
				file_put_contents($output, fopen(substr($header, 10), "rb", false));
			}
		}
	} else {
		// Something went wrong!
		print("Compression failed");
	}

}*/

?>