<?php require_once __DIR__ . '/getTranslations.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo getLanguageCode(); ?>">
	<?php include_once __DIR__ . '/components/head.php'; ?>
	<body>
		<?php
			include_once __DIR__ . '/components/navigation.php';
			include_once __DIR__ . '/components/sitenotice.php';
			include_once __DIR__ . '/components/header.php';
		?>
		<section id="about" class="section-about bg-light text-center">
			<div class="container">
				<h2 class="page-section-heading text-uppercase">
					<?php echo getTranslation( 'about-heading' ); ?>
				</h2>

				<img src="https://static.miraheze.org/metawiki/0/03/Meta_Main_Page.png" class="w-100 w-lg-50 w-md-75" alt="Miraheze Meta's Main Page" />
				<p class="lead mb-0">
					<?php echo getTranslation( 'about-desc' ); ?>
				</p>
			</div>
		</section>
		<section id="features" class="section-features features-icons bg-light text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="page-section-heading text-uppercase">
							<?php echo getTranslation( 'features-heading' ); ?>
						</h2>
					</div>
					<div class="col-lg-4">
						<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
							<div class="features-icons-icon d-flex"><i class="bi-hdd-stack m-auto text-primary"></i></div>
							<h3><?php echo getTranslation( 'features-mediawiki' ); ?></h3>
							<p class="lead mb-0">
								<?php echo getTranslation( 'features-mediawiki-desc' ); ?>
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
							<div class="features-icons-icon d-flex"><i class="bi-cash-coin m-auto text-primary"></i></div>
							<h3><?php echo getTranslation( 'features-not-for-profit-text' ); ?></h3>
							<p class="lead mb-0">
								<?php echo getTranslation( 'features-not-for-profit-desc' ); ?>
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="features-icons-item mx-auto mb-0 mb-lg-3">
							<div class="features-icons-icon d-flex"><i class="bi-people m-auto text-primary"></i></div>
							<h3><?php echo getTranslation( 'features-community-text' ); ?></h3>
							<p class="lead mb-0">
								<?php echo getTranslation( 'features-community-desc' ); ?>
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="features-icons-item mx-auto mb-0 mb-lg-3">
							<div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
							<h3><?php echo getTranslation( 'features-responsive-text' ); ?></h3>
							<p class="lead mb-0">
								<?php echo getTranslation( 'features-responsive-desc' ); ?>
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="features-icons-item mx-auto mb-0 mb-lg-3">
							<div class="features-icons-icon d-flex"><i class="bi-gear m-auto text-primary"></i></div>
							<h3><?php echo getTranslation( 'features-extensions-text' ); ?></h3>
							<p class="lead mb-0">
								<?php echo getTranslation( 'features-extensions-desc' ); ?>
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="features-icons-item mx-auto mb-0 mb-lg-3">
							<div class="features-icons-icon d-flex"><i class="bi-chevron-double-right m-auto text-primary"></i></div>
							<p class="lead mb-0">
								<?php echo getTranslation( 'features-more-desc' ); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include_once __DIR__ . '/components/footer.php'; ?>
		<script>
			var _paq = window._paq = window._paq || [];
			_paq.push(['disableCookies']);
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			(function() {
				var u = 'https://matomo.miraheze.org/';
				_paq.push(['setTrackerUrl', u+'matomo.php']);
				_paq.push(['setDocumentTitle', 'Landing - Home']);
				_paq.push(['setSiteId', 4657]);
				_paq.push(['addTracker', u + 'matomo.php', 8590]);
				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
				g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
			})();
		</script>
		<noscript><p><img src="https://matomo.miraheze.org/matomo.php?idsite=4657&amp;rec=1&amp;action_name=Landing_Home" style="border:0;" alt="" /></p></noscript>
	</body>
</html>
