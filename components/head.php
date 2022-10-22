<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="revisit-after" content="2 days" />
	<meta name="keywords" content="miraheze, free, ad-free, ad free, wiki hosting, wiki farm, wiki farms, sign up, mediawiki, mediawiki hosting, open source, hosting, donate, not-for-profit, not for profit, notforprofit, non-profit, non profit, nonprofit" />
	<meta name="description" content="Miraheze is a community-centric, ad free, 100% open-source, and free wiki hosting platform powered by MediaWiki, the software that powers Wikipedia." />
	<meta name="twitter:description" content="Miraheze is a community-centric, ad free, 100% open-source, and free wiki hosting platform powered by MediaWiki, the software that powers Wikipedia." />
	<meta property="og:description" content="Miraheze is a community-centric, ad free, 100% open-source, and free wiki hosting platform powered by MediaWiki, the software that powers Wikipedia." />
	<meta property="og:title" content="Miraheze" />
	<meta property="og:site_name" content="Miraheze" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Miraheze" />
	<meta name="twitter:site" content="@miraheze" />
	<title>
		<?php
			if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ) {
				echo 'Miraheze | Donate';
			} else {
				echo 'Miraheze | Free MediaWiki Hosting!';
			}
		?>
	</title>
	<?php
		$hostname = 'miraheze.org';
		if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ) {
			$hostname = 'donate.miraheze.org';
		}

		echo "<link rel=\"canonical\" href=\"https://{$hostname}\" />";
		echo "<meta property=\"og:url\" content=\"https://{$hostname}\" />";
	?>
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
	<link href="css/styles.css" rel="stylesheet" />
	<script type="application/ld+json">[{"@context":"http://schema.org","@type":"WebPage","headline":"Miraheze Home Page","url":"/","thumbnailUrl":"","dateCreated":"","creator":[],"keywords":[]}]</script>
</head>
