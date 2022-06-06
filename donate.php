<?php require_once __DIR__ . '/getTranslations.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo getLanguageCode(); ?>">
	<?php include_once __DIR__ . '/components/head.php'; ?>
	<body class="bg-white">
		<?php
			include_once __DIR__ . '/components/navigation.php';
			include_once __DIR__ . '/components/sitenotice.php';
			include_once __DIR__ . '/components/header.php';
		?>
		<section id="donate" class="section-donate my-5">
			<div class="container">
				<h2 class="page-section-heading text-center text-uppercase">
					<?php echo getTranslation( 'donate-heading' ); ?>
				</h2>
				<form class="pb-5 col-lg-8 mx-auto" id="donateForm" name="donate">
					<div class="input-group">
						<input class="form-control form-control-lg" id="amountInput" type="number" placeholder="<?php echo getTranslation( 'donate-amount' ); ?>" oninput="_amountInput(this)" />
							<a id="donationHref" class="btn btn-primary btn-lg" href="https://paypal.me/mirahezelimited">
								<?php echo getTranslation( 'donate-heading' ); ?>
							</a>
					</div>
					<p class="col-form-label-sm py-0"><?php echo getTranslation( 'donate-note' ); ?></p>
				</form>
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
		<noscript><p><img src="https://matomo.miraheze.org/matomo.php?idsite=4657&amp;rec=1&amp;action_name=Landing_Donate" style="border: 0;" alt="" /></p></noscript>
	</body>
</html>
