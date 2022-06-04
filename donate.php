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
		<section class="page-section" style="padding: 10rem 0;">
			<div class="container">
				<h1 class="text-center text-uppercase mb-0">
					<?php echo( getTranslation( 'donate' ) ); ?>
				</h1>
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<form name="donate" id="donateForm" novalidate="novalidate">
							<div class="control-group">
								<div class="form-group floating-label-form-group controls mb-0 pb-2">
									<label><?php echo getTranslation( 'donate-amount' ); ?></label>
									<input class="form-control" id="amountInput" type="number" placeholder="<?php echo getTranslation( 'donate-amount' ); ?>" oninput="_amountInput(this)">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<br>
							<div class="form-group">
								<a id="donationHref" class="btn btn-primary btn-xl" href="https://paypal.me/mirahezelimited">
										<?php echo getTranslation( 'donate' ); ?>
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
	</body>
</html>
