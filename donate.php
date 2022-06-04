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
		<section id="donate" class="section-donate bg-light" style="padding: 5rem 0;">
			<div class="container">
				<h2 class="page-section-heading text-center text-uppercase">
					<?php echo getTranslation( 'donate-heading' ); ?>
				</h2>
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<form name="donate" id="donateForm" novalidate="novalidate">
							<div class="control-group">
								<div class="form-group floating-label-form-group controls mb-0 pb-2">
									<input class="form-control" id="amountInput" type="number" placeholder="<?php echo getTranslation( 'donate-amount' ); ?>" oninput="_amountInput(this)">
								</div>
							</div>
							<br />
							<div class="form-group">
								<a id="donationHref" class="btn btn-primary btn-xl" href="https://paypal.me/mirahezelimited">
									<?php echo getTranslation( 'donate-heading' ); ?>
								</a>
								<br />
								<small>
									<?php echo getTranslation( 'donate-note' ); ?>
								</small>
							</div>
						</form>
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
			( function() {
				var u = 'https://matomo.miraheze.org/';
				_paq.push(['setTrackerUrl', u+'matomo.php']);
				_paq.push(['setDocumentTitle', 'Landing - Donate']);
				_paq.push(['setSiteId', 4657]);
				_paq.push(['addTracker', u + 'matomo.php', 8590]);
				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
				g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
			} )();

			function _amountInput( ele ) {
				var value;
				if (ele && ele.value) {
					value = '/' + ele.value + '/';
				} else {
					value = '';
				}
				var a = document.getElementById('donationHref');
				a.setAttribute( 'href', 'https://paypal.me/mirahezelimited' + value );
			}
		</script>
		<noscript><p><img src="https://matomo.miraheze.org/matomo.php?idsite=4657&amp;rec=1&amp;action_name=Landing_Donate" style="border:0;" alt="" /></p></noscript>
	</body>
</html>
