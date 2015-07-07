<?php

/**
 * This script obfuscates an email adress to protect
 * it from spam bots.
 * 
 * @param 	Takes in the email adress
 */
function emailencode($emailaddress){
	
	$email = $emailaddress;                
	$length = strlen($email);    
	$obfuscatedEmail = ''; 
	
	for ($i = 0; $i < $length; $i++){                
		$obfuscatedEmail .= "&#" . ord($email[$i]) . ";";
	}

	return $obfuscatedEmail;
}

?>