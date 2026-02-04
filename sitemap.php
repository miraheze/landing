<?php

$baseUrl = 'https://miraheze.org';
$i18nDir = __DIR__ . '/i18n';

if ( !is_dir( $i18nDir ) ) {
	fwrite( STDERR, "i18n directory not found: $i18nDir\n" );
	exit( 1 );
}

$langs = [];
foreach ( glob( $i18nDir . '/*.json' ) as $path ) {
	$lang = trim( basename( $path, '.json' ) );
	if ( $lang === '' || $lang === 'qqq' ) {
		continue;
	}

	$langs[] = $lang;
}

$langs = array_unique( $langs );
sort( $langs, SORT_STRING );

$toHreflang = static function ( string $tag ): string {
	$parts = explode( '-', $tag );
	if ( count( $parts ) === 1 ) {
		return strtolower( $parts[0] );
	}

	$out = [];
	$out[] = strtolower( array_shift( $parts ) );

	foreach ( $parts as $part ) {
		if ( preg_match( '/^[a-z]{2}$/i', $part ) || preg_match( '/^\d{3}$/', $part ) ) {
			$out[] = strtoupper( $part );
			continue;
		}

		if ( preg_match( '/^[a-z]{4}$/i', $part ) ) {
			$out[] = strtoupper( $part[0] ) . strtolower( substr( $part, 1 ) );
			continue;
		}

		$out[] = strtolower( $part );
	}

	return implode( '-', $out );
};

$esc = static fn ( string $s ): string =>
	htmlspecialchars( $s, ENT_QUOTES | ENT_XML1, 'UTF-8' );

$urls = [
	[
		'loc' => $baseUrl . '/',
		'priority' => '1.0',
		'changefreq' => 'always',
	],
];

foreach ( $langs as $lang ) {
	$urls[] = [
		'loc' => $baseUrl . '/' . rawurlencode( $lang ),
		'priority' => null,
		'changefreq' => 'weekly',
	];
}

$alternates = [
	[
		'hreflang' => 'x-default',
		'href' => $baseUrl . '/',
	],
];

foreach ( $langs as $lang ) {
	$alternates[] = [
		'hreflang' => $toHreflang( $lang ),
		'href' => $baseUrl . '/' . rawurlencode( $lang ),
	];
}

header( 'Content-Type: application/xml; charset=UTF-8' );

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">\n";

foreach ( $urls as $u ) {
	echo "\t<url>\n";
	echo "\t\t<loc>" . $esc( $u['loc'] ) . "</loc>\n";

	if ( $u['priority'] !== null ) {
		echo "\t\t<priority>" . $esc( $u['priority'] ) . "</priority>\n";
	}

	echo "\t\t<changefreq>" . $esc( $u['changefreq'] ) . "</changefreq>\n";

	foreach ( $alternates as $alt ) {
		echo "\t\t<xhtml:link rel=\"alternate\" hreflang=\""
			. $esc( $alt['hreflang'] )
			. "\" href=\""
			. $esc( $alt['href'] )
			. "\" />\n";
	}

	echo "\t</url>\n";
}

echo "</urlset>\n";
