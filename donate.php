<?php require_once __DIR__ . '/config.php'; ?>
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
		<section id="donate" class="section-donate my-5">
			<div class="container">
				<h3 class="page-section-heading text-center text-uppercase">
					<?php echo getTranslation( 'donate-heading' ); ?>
				</h3>
				<form name="donate" id="donateForm">
					<div class="form-control-lg mb-0 pb-2 col-lg-8 mx-auto">
						<input class="form-control" id="amountInput" type="number" placeholder="<?php echo getTranslation( 'donate-amount' ); ?>" oninput="_amountInput(this)">

						<a id="donationHref" class="btn btn-primary mt-1" href="https://www.paypal.com/donate/?hosted_button_id=Q8ZN29LJVXP7L" title="<?php echo getTranslation( 'donate-heading' ); ?>">
							<?php echo getTranslation( 'donate-heading' ); ?>
						</a>
						<p class="col-form-label-sm py-0"><?php echo getTranslation( 'donate-note' ); ?></p>
					</div>
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
				_paq.push(['setSiteId', 9838]);
				_paq.push(['addTracker', u + 'matomo.php', 1]);
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
				a.setAttribute( 'href', 'https://www.paypal.com/donate/?hosted_button_id=Q8ZN29LJVXP7L' + value );
			}
		</script>
		<noscript><p><img src="https://matomo.miraheze.org/matomo.php?idsite=9838&amp;rec=1&amp;action_name=Landing_Donate" style="border: 0;" alt="Matomo" /></p></noscript>
	</body>
</html>
