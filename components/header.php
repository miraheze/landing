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
					</h5>
					<div class="btn-group" role="group">
						<a class="btn btn-outline-light d-none d-md-inline-block" href="https://meta.miraheze.org/wiki/Special:CreateAccount" title="<?php echo getTranslation( 'sign-up' ); ?>">
							<i class="bi bi-box-arrow-in-right"></i>
							<?php echo getTranslation( 'sign-up' ); ?>
						</a>

						<?php if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ): ?>
							<a class="btn btn-outline-light" href="https://miraheze.org" title="<?php echo getTranslation( 'home' ); ?>">
								<i class="bi bi-house"></i>
								<?php echo getTranslation( 'home' ); ?>
							</a>
						<?php else: ?>
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
