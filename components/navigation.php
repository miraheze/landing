<nav class="navbar navbar-light bg-light sticky-top">
	<div class="container">
		<?php if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ): ?>
			<a class="navbar-brand" href="#" title="<?php echo getTranslation( 'header-donate-logo-text' ); ?>">
				<img class="logo" src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Miraheze Logo" style="height:3em; width:3em; padding:0.5em;" />
				<?php echo getTranslation( 'header-donate-logo-text' ); ?>
			</a>
		<?php else: ?>
			<a class="navbar-brand" href="#" title="<?php echo getTranslation( 'header-logo-text' ); ?>">
				<img class="logo" src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Miraheze Logo" style="height:3em; width:3em; padding:0.5em;" />
				<?php echo getTranslation( 'header-logo-text' ); ?>
			</a>
		<?php endif; ?>	
		<div class="btn-group" role="group">
			<?php if ( $_SERVER['SCRIPT_NAME'] === '/donate.php' ): ?>
				<a class="btn btn-secondary" href="#donate" title="<?php echo getTranslation( 'donate-heading' ); ?>">
					<?php echo getTranslation( 'donate-heading' ); ?>
				</a>
			<?php elseif ( $_SERVER['SCRIPT_NAME'] === '/index.php' ): ?>
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

<header>
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
			<?php if ( $_SERVER['SCRIPT_NAME'] === '/index.php' ): ?>
        	    <a href="/" class="nav-item nav-link active" title="<?php echo getTranslation( 'home' ); ?>">
					<?php echo getTranslation( 'home' ); ?>
				</a>
			<?php elseif ( $_SERVER['SCRIPT_NAME'] === '/index.php' ): ?>
				<a href="https://miraheze.org" class="nav-item nav-link">
					<?php echo getTranslation( 'donate-heading' ); ?>
				</a>
            <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze:About" class="nav-item nav-link" title="<?php echo getTranslation( 'about-heading' ); ?>">
				<?php echo getTranslation( 'about-heading' ); ?>
			</a>
            <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Donate" class="nav-item nav-link" title="<?php echo getTranslation( 'donate-heading' ); ?>">
				<?php echo getTranslation( 'donate-heading' ); ?>
			</a>
            <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ" class="nav-item nav-link"title="<?php echo getTranslation( 'faq' ); ?>">
				<?php echo getTranslation( 'faq' ); ?>
			</a>
            <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center" class="nav-item nav-link"title="<?php echo getTranslation( 'help-center' ); ?>">
				<?php echo getTranslation( 'help-center' ); ?>
			</a>
        </div>
        <a href="https://meta.miraheze.org/wiki/Special:UserLogin" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block"title="<?php echo getTranslation( 'sign-up' ); ?>">
				<?php echo getTranslation( 'sign-up' ); ?>
			</a>
        <a href="https://meta.miraheze.org/wiki/Special:RequestWiki" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block"title="<?php echo getTranslation( 'requestwiki-text' ); ?>">
				<?php echo getTranslation( 'requestwiki-text' ); ?>
			</a>
    </div>
</nav>