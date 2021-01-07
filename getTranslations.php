<?php

$lang = isset( $_GET['lang'] ) && $_GET['lang'] ? $_GET['lang'] : 'en';

$translations = json_decode( file_get_contents( __DIR__ . "/i18n/{$lang}.json" ), true );

unset( $translations['@metadata'] );

function getTranslations( $key ) {
	global $translations;

	if ( isset( $translations[$key] ) && $translations[$key] ) {
		return $translations[$key];
	} else {
		return json_decode( file_get_contents( __DIR__ . "/i18n/en.json" ), true )[$key];
	}
}
?>
