<nav class="navbar navbar-light bg-light sticky-top">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img class="logo" src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Miraheze Logo" style="height:3em; width:3em; padding:0.5em;" />
			<?php
				if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ) {
					echo getTranslation( 'header-donate-logo-text' );
				} else {
					echo getTranslation( 'header-logo-text' );
				}
			?>
		</a>

		<div class="btn-group" role="group">
			<?php if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ): ?>
				<a class="btn btn-secondary" href="#donate">
					<?php echo getTranslation( 'donate-heading' ); ?>
				</a>
			<?php else: ?>
				<a class="btn btn-secondary" href="#about">
					<?php echo getTranslation( 'about-heading' ); ?>
				</a>
				<a class="btn btn-secondary" href="#features">
					<?php echo getTranslation( 'features-heading' ); ?>
				</a>
			<?php endif; ?>
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
