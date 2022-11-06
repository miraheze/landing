<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="revisit-after" content="2 days" />
	<meta name="keywords" content="miraheze, free, ad-free, ad free, wiki hosting, wiki farm, wiki farms, sign up, mediawiki, mediawiki hosting, open source, hosting, donate, not-for-profit, not for profit, notforprofit, non-profit, non profit, nonprofit" />
	<meta name="description" content="Miraheze is an ad-free and community-centric wiki hosting platform where anyone can create a free MediaWiki-powered wiki. Request your free wiki today!" />
	<meta name="twitter:description" content="Miraheze is an ad-free and community-centric wiki hosting platform where anyone can create a free MediaWiki-powered wiki. Request your free wiki today!" />
	<meta property="og:description" content="Miraheze is an ad-free and community-centric wiki hosting platform where anyone can create a free MediaWiki-powered wiki. Request your free wiki today!" />
	<meta property="og:image" content="/images/Miraheze-Logo-1200px.png" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="1200" />
	<meta property="og:image" content="/images/Miraheze-Logo-800px.png" />
	<meta property="og:image:width" content="800" />
	<meta property="og:image:height" content="800" />
	<meta property="og:image" content="/images/Miraheze-Logo-640px.png" />
	<meta property="og:image:width" content="640" />
	<meta property="og:image:height" content="640" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Miraheze" />
	<meta property="og:site_name" content="Miraheze" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Miraheze" />
	<meta name="twitter:site" content="@miraheze" />
	<meta name="twitter:image" content="https://miraheze.org/images/Miraheze-Logo-1200px.png" />
	<title><?php
		if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ) {
			echo 'Miraheze | Donate';
		} else {
			echo 'Miraheze';
		}
	?></title>
	<?php
		$hostname = 'miraheze.org';
		if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ) {
			$hostname = 'donate.miraheze.org';
		}

		echo "<link rel=\"canonical\" href=\"https://{$hostname}\" />\n";
		echo "<meta property=\"og:url\" content=\"https://{$hostname}\" />\n";
	?>
	<link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
	<link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
	<link href="css/styles.css" rel="stylesheet" />
	<script type="application/ld+json">[{"@context":"https:\/\/schema.org","@type":"WebPage","headline":"Miraheze Home Page","url":"/","thumbnailUrl":"","dateCreated":"","creator":[],"keywords":[]}]</script>
</head>
