<?php if ( isSiteNoticeEnabled() ): ?>
	<section class="sitenotice">
		<div class="card">
			<div class="row g-0">
				<div class="col-md-2 d-none d-md-flex justify-content-center align-items-center">
					<img src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" class="img-fluid rounded-start" alt="Miraheze Logo" />
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
