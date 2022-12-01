<head>
	<meta charset="utf-8" />
	<title><?php
		if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ) {
			echo 'Miraheze | Donate';
		} else {
			echo 'Miraheze';
		}
	?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="miraheze, free, ad-free, ad free, wiki hosting, free wiki hosting, wiki hosting sites, wiki farms, sign up, mediawiki, mediawiki hosting, open source, donate, not-for-profit" />
	<meta name="description" content="Miraheze is an ad-free and community-centric wiki hosting platform where anyone can create a free MediaWiki-powered wiki. Request your free wiki today!" />
	<meta name="twitter:description" content="Miraheze is an ad-free and community-centric wiki hosting platform where anyone can create a free MediaWiki-powered wiki. Request your free wiki today!" />
	<meta property="og:description" content="Miraheze is an ad-free and community-centric wiki hosting platform where anyone can create a free MediaWiki-powered wiki. Request your free wiki today!" />
	<meta property="og:image" content="https://miraheze.org/images/Miraheze-Logo-1200px.png" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="1200" />
	<meta property="og:image" content="https://miraheze.org/images/Miraheze-Logo-800px.png" />
	<meta property="og:image:width" content="800" />
	<meta property="og:image:height" content="800" />
	<meta property="og:image" content="https://miraheze.org/images/Miraheze-Logo-640px.png" />
	<meta property="og:image:width" content="640" />
	<meta property="og:image:height" content="640" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Miraheze" />
	<meta property="og:site_name" content="Miraheze" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Miraheze" />
	<meta name="twitter:site" content="@miraheze" />
	<meta name="twitter:image" content="https://miraheze.org/images/Miraheze-Logo-1200px.png" />
	<link rel="prefetch" href="https://static-new.miraheze.org/metawiki/d/d0/Miraheze-landing-header-background.jpg" />
	<?php
		$hostname = 'miraheze.org';
		if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ) {
			$hostname = 'donate.miraheze.org';
		}

		echo "<link rel=\"canonical\" href=\"https://{$hostname}\" />\n";
		echo "\t<meta property=\"og:url\" content=\"https://{$hostname}\" />\n";

		$i18nDirectory = array_diff( scandir( 'i18n' ), [ '.', '..', 'qqq.json' ] );
		$languageCodes = str_replace( '.json', '', $i18nDirectory );

		foreach ( $languageCodes as $languageCode ) {
			if ( $languageCode === 'en' ) {
				echo "\t<link rel=\"alternate\" hreflang=\"{$languageCode}\" href=\"https://{$hostname}\" />\n";
				continue;
			}

			echo "\t<link rel=\"alternate\" hreflang=\"{$languageCode}\" href=\"https://{$hostname}/{$languageCode}\" />\n";
		}

		echo "\t<link rel=\"alternate\" href=\"https://{$hostname}\" hreflang=\"x-default\" />\n";
	?>
	<link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
	<link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />
	<link rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
	<link href="/css/styles.min.css" rel="stylesheet" />
	<?php
		$headline = 'Miraheze';
		if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ) {
			$headline = 'Miraheze Donate';
		}

		echo '<script type="application/ld+json">[{"@context":"https:\/\/schema.org","@type":"WebPage","headline":"' . $headline . '","url":"/","thumbnailUrl":"","dateCreated":"","creator":[],"keywords":[]}]</script>' . "\n";
	?>
</head>
