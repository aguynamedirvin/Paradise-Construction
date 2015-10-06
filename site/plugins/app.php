<?php

/**
 * This script obfuscates any string such as email adress to protect
 * it from spam bots.
 * 
 * @param 	string
 */
function encode($string){
	             
	$length = strlen($string);    
	$obfuscatedString = ''; 
	
	for ($i = 0; $i < $length; $i++){                
		$obfuscatedString .= "&#" . ord($string[$i]) . ";";
	}

	return $obfuscatedString;
}

?>