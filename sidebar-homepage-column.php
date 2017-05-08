<?php if ( is_active_sidebar( 'homepage-left-3rd', 'homepage-middle-3rd', 'homepage-right-3rd' ) ) : ?>
	<div class="row">
	
	<h3>Who We Serve</h3>
		<?php if ( is_active_sidebar( 'homepage-left-3rd' ) ) : ?>

			<div id="homepage1" class="large-4 columns" role="complementary">
				<div class="primary callout">
					<?php dynamic_sidebar( 'homepage-left-3rd' ); ?>
				</div>
			</div>


		<?php endif; ?>

		<?php if ( is_active_sidebar( 'homepage-middle-3rd' ) ) : ?>

			<div id="homepage2" class="large-4 columns" role="complementary">
				<div class="secondary callout">
					<?php dynamic_sidebar( 'homepage-middle-3rd' ); ?>
				</div>
			</div>


		<?php endif; ?>

		<?php if ( is_active_sidebar( 'homepage-right-3rd' ) ) : ?>

			<div id="homepage2" class="large-4 columns" role="complementary">
				<div class="primary callout">
					<?php dynamic_sidebar( 'homepage-right-3rd' ); ?>
				</div>
			</div>

		<?php endif; ?>

	</div>
<?php endif; ?>

<div class="row">		
	<div class="large-8 large-push-2 columns">
			<hr>
	</div>
</div>

<?php if ( is_active_sidebar( 'homepage1', 'homepage2' ) ) : ?>

	<div class="row">
		
		<h3>Handy Resources</h3>
		<?php if ( is_active_sidebar( 'homepage1' ) ) : ?>

			<div id="homepage1" class="small-6 large-4 large-offset-2 columns" role="complementary">
				<div class="primary callout">
					<?php dynamic_sidebar( 'homepage1' ); ?>
				</div>
			</div>

		<?php endif; ?>

		<?php if ( is_active_sidebar( 'homepage2' ) ) : ?>

			<div id="homepage2" class="small-6 large-4 large-pull-1 columns" role="complementary">
				<div class="primary callout">
					<?php dynamic_sidebar( 'homepage2' ); ?>
				</div>
			</div>

		<?php endif; ?>

	</div>
<?php endif; ?>