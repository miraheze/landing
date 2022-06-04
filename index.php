<?php
require_once __DIR__ . '/getTranslations.php';
?>

<!DOCTYPE html>
<html lang="<?php echo getLanguageCode(); ?>">
	<?php include_once __DIR__ . '/components/head.php'; ?>
	<body>
		<?php
			include_once __DIR__ . '/components/navigation.php';
			include_once __DIR__ . '/components/sitenotice.php';
		?>
		<header class="masthead">
			<div class="container position-relative">
				<div class="row justify-content-center">
					<div class="col-xl-6">
						<div class="text-center text-white">
							<h1 class="mb-2 text-uppercase">
								<?php echo getTranslation( 'welcome-text' ); ?>
							</h1>
							<h5 class="mb-3 font-weight-light">
								<?php echo getTranslation( 'description-text' ); ?>
							</h5>
						</div>
						<center>
							<div class="btn-group" role="group">
								<a class="btn btn-outline-light d-none d-md-inline-block" href="https://meta.miraheze.org/wiki/Special:CreateAccount">
									<i class="bi bi-box-arrow-in-right"></i>
									<?php echo getTranslation( 'sign-up' ); ?>
								</a>
								<a class="btn btn-outline-light" href="https://donate.miraheze.org">
									<i class="bi bi-cash-coin"></i>
									<?php echo getTranslation( 'support-us' ); ?>
								</a>
								<div class="btn-group" role="group">
									<button id="dropdown-language" type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo LOCALE_GET_DISPLAY_NAME( getLanguageCode(), getLanguageCode() ); ?>
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdown-language">
										<?php

										$i18nDirectory = array_diff( scandir( 'i18n' ), [ '.', '..', 'qqq.json' ] );
										$languageCodes = str_replace( '.json', '', $i18nDirectory );

										foreach ( $languageCodes as $languageCode ) {
											echo "<a class=\"dropdown-item\" href=\"?lang={$languageCode}\">" . LOCALE_GET_DISPLAY_NAME( $languageCode, $languageCode ) . '</a>';
										}

										?>
									</div>
								</div>
								<div class="btn-group" role="group">
									<button id="dropdown-more" type="button" class="btn btn-xl btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo getTranslation( 'more' ); ?>
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdown-more">
										<a class="dropdown-item" href="https://meta.miraheze.org/wiki/Special:WikiDiscover">
											<?php echo getTranslation( 'wikidiscover-text' ); ?>
										</a>
										<a class="dropdown-item" href="https://meta.miraheze.org/wiki/Special:RequestWiki">
											<?php echo getTranslation( 'requestwiki-text' ); ?>
										</a>
										<a class="dropdown-item" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Organisation">
											<?php echo getTranslation( 'organisation-text' ); ?> information
										</a>
										<a class="dropdown-item d-md-none" href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ">
											<?php echo getTranslation( 'faq' ); ?>
										</a>
										<a class="dropdown-item d-md-none" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center">
											<?php echo getTranslation( 'help-center' ); ?>
										</a>
									</div>
								</div>
							</div>
						</center>
					</div>
				</div>
			</div>
		</header>
		<section id="about" class="section-about bg-light text-center">
			<div id="about-slides" class="carousel carousel-dark slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#about-slides" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#about-slides" data-bs-slide-to="1" aria-label="Slide 2"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<section class="page-section text-dark" style="margin: 1em; padding-bottom: 2em;">
							<div class="container">
								<h2 class="page-section-heading text-center text-uppercase text-dark">
									<?php echo getTranslation( 'about-heading' ); ?>
								</h2>

								<div class="row">
									<div class="col-lg-12 ml-auto">
										<p class="lead">
											<?php echo getTranslation( 'about-desc' ); ?>
										</p>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="carousel-item">
						<center>
							<img src="https://static.miraheze.org/metawiki/0/03/Meta_Main_Page.png" class="d-block w-100 w-lg-50 w-md-75 mb-5" alt="Miraheze Meta's Main Page">
						</center>
					</div>
				</div>
			</div>
		</section>
		<section id="features" class="features-icons bg-light text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
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
	</body>
</html>
