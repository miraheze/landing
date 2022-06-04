<?php
require_once __DIR__ . '/getTranslations.php';
?>

<!DOCTYPE html>
<html lang="<?php echo getLanguageCode(); ?>">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="Miraheze is an open source project that offers free MediaWiki hosting, for everyone. Request your free wiki today!" />
		<meta name="revisit-after" content="2 days" />
		<meta name="keywords" content="miraheze, free, wiki hosting, mediawiki, mediawiki hosting, open source, hosting" />
		<title><?php echo getTranslation( 'header-logo-text' ); ?></title>
		<link rel="icon" type="image/x-icon" href="https://meta.miraheze.org/favicon.ico" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
		<link href="css/styles.css" rel="stylesheet" />
	</head>
	<body>
		<nav class="navbar navbar-light bg-light sticky-top">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img class="logo" src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Logo" style="height:3em; width:3em; padding:0.5em;">
					<?php echo getTranslation( 'header-logo-text' ); ?>
				</a>

				<div class="btn-group" role="group">
					<a class="btn btn-secondary" href="#about">
						<?php echo getTranslation( 'about-heading' ); ?>
					</a>
					<a class="btn btn-secondary" href="#features">
						<?php echo getTranslation( 'features-heading' ); ?>
					</a>
					<a class="btn btn-secondary d-none d-md-inline-block" href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ">
						<?php echo getTranslation( 'faq' ); ?>
					</a>
					<a class="btn btn-secondary d-none d-md-inline-block" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center">
						<?php echo getTranslation( 'help-center' ); ?>
					</a>
					<a class="btn btn-primary" href="https://meta.miraheze.org/wiki/Special:CreateAccount">
						<?php echo getTranslation( 'sign-up' ); ?>
					</a>
				</div>
			</div>
		</nav>
		<?php if ( getSiteNotice() ): ?>
			<section class="sitenotice">
				<div class="card">
					<div class="row g-0">
						<div class="col-md-2 d-flex justify-content-center align-items-center">
							<img src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" class="img-fluid rounded-start" alt="Miraheze Logo">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">
									<?php echo getTranslation( 'fundraiser-sitenotice-title' ); ?>
								</h5>
								<p class="card-text">
									<?php echo getTranslation( 'fundraising-sitenotice' ); ?>
								</p>
								<a href="https://miraheze.wiki/Fundraiser" class="btn btn-primary">
									<?php echo getTranslation( 'fundraising-sitenotice-button-text' ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
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
		<footer id="footer" class="footer bg-dark">
			<div class="container">
				<small>
					<p style="text-align-last: center;">
						<?php echo getTranslation( 'footer-desc' ); ?>
					</p>
				</small>
				<div class="row">
					<div class="col-lg-6 h-100 text-center text-lg-start my-auto">
						<ul class="list-inline mb-2">
							<li class="list-inline-item">
								<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Content_Policy">
									<?php echo getTranslation( 'footer-content-policy' ); ?>
								</a>
							</li>
							<li class="list-inline-item">⋅</li>
							<li class="list-inline-item">
								<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Terms_of_Use">
									<?php echo getTranslation( 'footer-terms' ); ?>
								</a>
							</li>
							<li class="list-inline-item">⋅</li>
							<li class="list-inline-item">
								<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Privacy_Policy">
									<?php echo getTranslation( 'footer-privacy-policy' ); ?>
								</a>
							</li>
							<li class="list-inline-item">⋅</li>
							<li class="list-inline-item">
								<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Meta:General_disclaimer">
									<?php echo getTranslation( 'footer-disclaimers' ); ?>
								</a>
							</li>
							<li class="list-inline-item">⋅</li>
							<li class="list-inline-item">
								<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Privacy_Policy#4._Cookies">
									<?php echo getTranslation( 'footer-cookie' ); ?>
								</a>
							</li>
						</ul>
						<a class="small mb-4 mb-lg-0" href="https://translatewiki.net/wiki/Special:Translate?group=mwgithub-mirahezelanding">
							<?php echo getTranslation( 'footer-translate' ); ?>
						</a>
					</div>
					<div class="col-lg-6 h-100 text-center text-lg-end my-auto">
						<ul class="list-inline mb-0">
							<li class="list-inline-item me-4">
								<a href="https://www.facebook.com/miraheze"><i class="bi-facebook fs-3"></i></a>
							</li>
							<li class="list-inline-item me-4">
								<a href="https://twitter.com/miraheze"><i class="bi-twitter fs-3"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="https://miraheze.org/discord"><i class="bi-discord fs-3"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<div id="scroll-to-top">
			<a class="text-light" href="#">
				<i class="bi bi-chevron-up"></i>
			</a>
		</div>

		<script>
			scrollbutton = document.getElementById( 'scroll-to-top' );
			window.onscroll = function() {
				scrollFunction()
			};

			function scrollFunction() {
				if ( document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ) {
					scrollbutton.style.display = 'block';
				} else {
					scrollbutton.style.display = 'none';
				}
			}
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
