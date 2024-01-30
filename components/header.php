<header class="masthead">
	<div class="container position-relative">
		<div class="row justify-content-center">
			<div class="col-xl-6">
				<div class="text-center text-light">
					<h1 class="mb-2 text-uppercase">
						<?php echo getTranslation( 'welcome-text' ); ?>
					</h1>
					<h2 class="h5 mb-3 fw-normal">
						<?php
							if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ) {
								echo getTranslation( 'description-donate' );
							} else {
								echo getTranslation( 'description-text' );
							}
						?>
					</h2>
					<div class="btn-group" role="group">
						<a class="btn btn-outline-light d-none d-md-inline-block" href="https://meta.miraheze.org/wiki/Special:CreateAccount" title="<?php echo getTranslation( 'sign-up' ); ?>">
							<i class="bi bi-box-arrow-in-right"></i>
							<?php echo getTranslation( 'sign-up' ); ?>
						</a>

						<?php if ( $_SERVER['SCRIPT_NAME'] !== '/index.php' ): ?>
							<a class="btn btn-outline-light" href="https://miraheze.org" title="<?php echo getTranslation( 'home' ); ?>">
								<i class="bi bi-house"></i>
								<?php echo getTranslation( 'home' ); ?>
							</a>
						<?php endif; ?>

						<?php if ( $_SERVER['SCRIPT_NAME'] !== '/donate.php' ): ?>
							<a class="btn btn-outline-light" href="https://donate.miraheze.org" title="<?php echo getTranslation( 'support-us' ); ?>">
								<i class="bi bi-cash-coin"></i>
								<?php echo getTranslation( 'support-us' ); ?>
							</a>
						<?php endif; ?>

						<div class="btn-group" role="group">
							<button id="dropdown-language" type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="bi bi-translate"></i>
								<?php echo LOCALE_GET_DISPLAY_NAME( getLanguageCode(), getLanguageCode() ); ?>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdown-language">
								<?php

								$i18nDirectory = array_diff( scandir( 'i18n' ), [ '.', '..', 'qqq.json' ] );
								$languageCodes = str_replace( '.json', '', $i18nDirectory );

								foreach ( $languageCodes as $languageCode ) {
									$displayName = LOCALE_GET_DISPLAY_NAME( $languageCode, $languageCode );

									if ( $languageCode === 'en' ) {
										echo "<a class=\"dropdown-item\" href=\"/\" title=\"{$displayName}\">" . $displayName . '</a>';
										continue;
									}

									echo "<a class=\"dropdown-item\" href=\"/{$languageCode}\" title=\"{$displayName}\">" . $displayName . '</a>';
								}

								?>
							</div>
						</div>
						<div class="btn-group" role="group">
							<button id="dropdown-more" type="button" class="btn btn-xl btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo getTranslation( 'more' ); ?>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdown-more">
								<a class="dropdown-item" href="https://meta.miraheze.org/wiki/Special:WikiDiscover" title="<?php echo getTranslation( 'wikidiscover-text' ); ?>">
									<?php echo getTranslation( 'wikidiscover-text' ); ?>
								</a>
								<a class="dropdown-item" href="https://meta.miraheze.org/wiki/Special:RequestWiki" title="<?php echo getTranslation( 'requestwiki-text' ); ?>">
									<?php echo getTranslation( 'requestwiki-text' ); ?>
								</a>
								<a class="dropdown-item" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Organisation" title="<?php echo getTranslation( 'organisation-text' ); ?>">
									<?php echo getTranslation( 'organisation-text' ); ?>
								</a>
								<a class="dropdown-item" href="https://blog.miraheze.org" title="<?php echo getTranslation( 'blog-text' ); ?>">
									<?php echo getTranslation( 'blog-text' ); ?>
								</a>
								<a class="dropdown-item" href="https://status.miraheze.wiki" title="<?php echo getTranslation( 'status-text' ); ?>">
									<?php echo getTranslation( 'status-text' ); ?>
								</a>
								<a class="dropdown-item d-md-none" href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ" title="<?php echo getTranslation( 'faq' ); ?>">
									<?php echo getTranslation( 'faq' ); ?>
								</a>
								<a class="dropdown-item d-md-none" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center" title="<?php echo getTranslation( 'help-center' ); ?>">
									<?php echo getTranslation( 'help-center' ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<header>
	<div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0">Miraheze</h1>
                <!-- <img src="https://static.wikitide.net/commonswiki/2/2c/WikiTide_wordmark.png" width="135" alt="Miraheze"> -->
		    </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze:About" class="nav-item nav-link" title="<?php echo getTranslation( 'faq' ); ?>">
						<?php echo getTranslation( 'faq' ); ?>
					</a>
                    <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Donate" class="nav-item nav-link" title="<?php echo getTranslation( 'donate' ); ?>">
						<?php echo getTranslation( 'donate' ); ?>
					</a>
                    <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ" class="nav-item nav-link">FAQ</a>
                    <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center" class="nav-item nav-link">Contact us</a>
                </div>
                <a href="https://meta.miraheze.org/wiki/Special:UserLogin" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Sign in</a>
                <a href="https://meta.miraheze.org/wiki/Special:RequestWiki" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Start a wiki</a>
            </div>
        </nav>

        <div class="container-xxl bg-primary hero-header">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-end">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="text-white mb-4 animated slideInDown">Ad-free wiki hosting, powered by expert MediaWiki volunteers</h1>
                        <p class="text-white pb-3 animated slideInDown">Focus on what you love and let us take care of the technical details. Join Miraheze and make your wiki today, powered by a non-profit whose mission is to serve you!</p>
                        <a href="https://meta.miraheze.org/wiki/Special:RequestWiki" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Start a wiki</a>
                        <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Donate" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Donate to Miraheze</a>
                    </div>

                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="img-fluid animated zoomIn" src="https://miraheze.org/img/hero.png" alt="Join Miraheze!">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>