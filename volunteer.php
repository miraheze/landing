<?php require_once __DIR__ . '/getTranslations.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo getLanguageCode(); ?>" prefix="og: http://ogp.me/ns#">
	<?php include_once __DIR__ . '/components/head.php'; ?>
	<body class="bg-white">
		<?php
			include_once __DIR__ . '/components/navigation.php';
			include_once __DIR__ . '/components/sitenotice.php';
			include_once __DIR__ . '/components/header.php';
		?>
		<section id="software-engineer" class="section-software-engineer text-center mt-5">
			<div class="container">
				<h3 class="page-section-heading text-uppercase">
					Software Engineer (Developer) (MediaWiki)
				</h3>

				<p class="lead mb-0">
					Miraheze is looking for Software Engineers to join our MediaWiki Team to develop code to improve the user experience of Miraheze users, build tools that allow communities to grow, and tools that support our valuable volunteers in managing a dynamic and active global community.
				</p>

				<p class="lead mb-0">
					The role would initially involve a trial period without shell access (since developer tasks can be done on GitHub) but the role and access may be granted at a later time depending on how things evolve.
				</p>

				<h4>What will I be responsible for?</h4>
				<ul>
					<li>Building tools to support volunteers, allow communities to grow, and improve the user experience on the platform.</li>
					<li>Maintain existing software we deploy, and support upstream in maintaining software that our users find important to them.</li>
					<li>Build quality assurance and continuous integration pipelines to support high quality software being deployed to our servers.</li>
					<li>Write performant code which utilises modern caching techniques.</li>
				</ul>

				<h4>What experience are you looking for?</h4>
				<p>
					We are looking in particular for anyone who has experience in, and can demonstrate working extensively with:
				</p>
				<ul>
					<li>PHP</li>
					<li>MediaWiki</li>
					<li>JavaScript</li>
					<li>CSS</li>
				</ul>
				<p>
					Knowledge of how CreateWiki, ManageWiki, WikiDiscover, Acme-SSL work would also be helpful for some of the tasks, but can be learned as you go.
				</p>

				<h4>What are some important tasks that I'd work on during the initial phase?</h4>
				<ul>
					<li>https://phabricator.miraheze.org/T9153 - Allow users to pre-select some basic settings for their wiki from the wiki request form</li>
					<li>https://phabricator.miraheze.org/T9154 - Warn wiki requesters if their request is likely to be declined due to issues</li>
					<li>https://phabricator.miraheze.org/T10304 - Fully automate ImportDump after ensuring security</li>
					<li>https://phabricator.miraheze.org/T7582 - Create automated system for managing SSL requests</li>
					<li>https://phabricator.miraheze.org/T9541 - Allow content to be reported from wiki pages</li>
					<li>https://phabricator.miraheze.org/T8791 - Create tags in ManageWiki/WikiDiscover</li>
				</ul>

				<p>
					How can I apply?<br>
					Please contact a member of the MediaWiki Team to discuss your experiences who will advise you further. Join IRC on Libera.Chat - #miraheze-sre, Discord or email reception123(at)miraheze.org
				</p>
			</div>
		</section>

		<?php include_once __DIR__ . '/components/footer.php'; ?>
		<!-- <script>
			var _paq = window._paq = window._paq || [];
			_paq.push(['disableCookies']);
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			( function() {
				var u = 'https://matomo.miraheze.org/';
				_paq.push(['setTrackerUrl', u+'matomo.php']);
				_paq.push(['setDocumentTitle', 'Landing - Volunteer']);
				_paq.push(['setSiteId', 4657]);
				_paq.push(['addTracker', u + 'matomo.php', 8590]);
				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
				g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
			} )();
		</script>
		<noscript><p><img src="https://matomo.miraheze.org/matomo.php?idsite=4657&amp;rec=1&amp;action_name=Landing_Volunteer" style="border: 0;" alt="Matomo" /></p></noscript> -->
	</body>
</html>
