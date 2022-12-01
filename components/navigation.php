<nav class="navbar navbar-light bg-light sticky-top">
	<div class="container">
		<?php if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ): ?>
			<a class="navbar-brand" href="#" title="<?php echo getTranslation( 'header-donate-logo-text' ); ?>">
				<img class="logo" src="https://static-new.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Miraheze Logo" style="height:3em; width:3em; padding:0.5em;" />
				<?php echo getTranslation( 'header-donate-logo-text' ); ?>
			</a>
		<?php else: ?>
			<a class="navbar-brand" href="#" title="<?php echo getTranslation( 'header-logo-text' ); ?>">
				<img class="logo" src="https://static-new.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Miraheze Logo" style="height:3em; width:3em; padding:0.5em;" />
				<?php echo getTranslation( 'header-logo-text' ); ?>
			</a>
		<?php endif; ?>	
		<div class="btn-group" role="group">
			<?php if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ): ?>
				<a class="btn btn-secondary" href="#donate" title="<?php echo getTranslation( 'donate-heading' ); ?>">
					<?php echo getTranslation( 'donate-heading' ); ?>
				</a>
			<?php else: ?>
				<a class="btn btn-secondary" href="#about" title="<?php echo getTranslation( 'about-heading' ); ?>">
					<?php echo getTranslation( 'about-heading' ); ?>
				</a>
				<a class="btn btn-secondary" href="#features" title="<?php echo getTranslation( 'features-heading' ); ?>">
					<?php echo getTranslation( 'features-heading' ); ?>
				</a>
			<?php endif; ?>
			<a class="btn btn-secondary d-none d-md-inline-block" href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ" title="<?php echo getTranslation( 'faq' ); ?>">
				<?php echo getTranslation( 'faq' ); ?>
			</a>
			<a class="btn btn-secondary d-none d-md-inline-block" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center" title="<?php echo getTranslation( 'help-center' ); ?>">
				<?php echo getTranslation( 'help-center' ); ?>
			</a>
			<a class="btn btn-primary" href="https://meta.miraheze.org/wiki/Special:CreateAccount" title="<?php echo getTranslation( 'sign-up' ); ?>">
				<?php echo getTranslation( 'sign-up' ); ?>
			</a>
		</div>
	</div>
</nav>
