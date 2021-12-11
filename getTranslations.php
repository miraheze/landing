<?php

function getTranslation( $key ) {
	if ( getLanguageCode() === 'qqx' ) {
		return "({$key})";
	}
	
	switch ( json_last_error() ) {
		case JSON_ERROR_NONE:
			$error = false;
			break;
		case JSON_ERROR_DEPTH:
			$error = 'The maximum stack depth has been exceeded';
			break;
		case JSON_ERROR_STATE_MISMATCH:
			$error = 'Invalid or malformed JSON';
			break;
		case JSON_ERROR_CTRL_CHAR:
			$error = 'Control character error, possibly incorrectly encoded';
			break;
		case JSON_ERROR_SYNTAX:
			$error = 'Syntax error';
			break;
		case JSON_ERROR_UTF8:
			$error = 'Malformed UTF-8 characters, possibly incorrectly encoded';
			break;
		case JSON_ERROR_UTF16:
			$error = 'Malformed UTF-16 characters, possibly incorrectly encoded';
			break;
		default:
			$error = 'There was an unknown problem with the JSON';
			break;
	}

	if ( $error ) {
		throw new Exception( $error );
	}

	return preg_replace( '/\[(.*)\|(.*)\]/i', '<a href="$1">$2</a>', nl2br( htmlspecialchars( getLocalisation()[$key] ?? getFallback()[$key] ?? getDefault()[$key] ) ) );
}

function getLanguageCode() {
	$languageCode = $_GET['lang'] ?? 'en';

	if ( $languageCode === 'qqx' ) {
		return $languageCode;
	}

	$basePath = __DIR__ . '/i18n/';
	$realBasePath = realpath( $basePath );

	$languagePath = $basePath . "{$languageCode}.json";
	$realLanguagePath = realpath( $languagePath );

	// Check for path traversal.
	// Force language to 'en' if attempt was found.
	if ( $realLanguagePath === false || strpos( $realLanguagePath, $realBasePath ) !== 0 ) {
		$languageCode = 'en';
	}

	return $languageCode;
}

function getLocalisation() {
	$lang = getLanguageCode();
	if ( file_exists( __DIR__ . "/i18n/{$lang}.json" ) && $lang !== 'qqq' ) {
		$translations = json_decode( file_get_contents( __DIR__ . "/i18n/{$lang}.json" ), true );
	} else {
		$translations = getDefault();
	}

	unset( $translations['@metadata'] );

	return $translations;
}

function getFallback() {
	$fallback = LOCALE_GET_PRIMARY_LANGUAGE( getLanguageCode() );

	if ( file_exists( __DIR__ . "/i18n/{$fallback}.json" ) ) {
		return json_decode( file_get_contents( __DIR__ . "/i18n/{$fallback}.json" ), true );
	}

	return getDefault();
}

function getDefault() {
	return json_decode( file_get_contents( __DIR__ . '/i18n/en.json' ), true );
}

?>
