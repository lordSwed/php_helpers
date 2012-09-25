<?php

/**
 * Formaging string (phone number, ZIP, ... )
 * @param string $string
 * @param mumber $type
 * @param string $delim
 */
function simpleFormatString($string, $type = 3222, $delim = " ") {
	$return = '';
	$string = str_replace($delim, '', $string);
	$length = strlen($string);
	$active = substr($type, 0, 1);
	$type = substr($type, 1);
	
	for ($i = 1; $i <= $length; $i++) {
		$return .= substr($string, 0, 1);
		$string = substr($string, 1);
		
		if ($i == $active) {
			$return .= $delim;
			$active = substr($type, 0, 1) + $active;
			$type = substr($type, 1);
		}
	}

	return $return;
}

