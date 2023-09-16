<?php if ( $shouldEnableSiteNotice ): ?>
	<section class="sitenotice">
		<div class="card">
			<div class="row g-0">
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">
							<?php echo getTranslation( 'fundraiser-sitenotice-title' ); ?>
						</h5>
						<p class="card-text">
							<?php echo getTranslation( 'fundraising-sitenotice' ); ?>
						</p>
						<a href="https://miraheze.wiki/fundraiser" class="btn btn-primary" title="<?php echo getTranslation( 'fundraising-sitenotice-button-text' ); ?>">
							<?php echo getTranslation( 'fundraising-sitenotice-button-text' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
