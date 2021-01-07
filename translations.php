<?php

$lang = isset( $_GET['lang'] ) && $_GET['lang'] ? $_GET['lang'] : 'en';

function translate( $key ) {
	global $lang, $translations;

	if ( isset( $translations[$key][$lang] ) && $translations[$key][$lang] ) {
		return $translations[$key][$lang];
	} else {
		return $translations[$key]['en'];
	}
}
?>
