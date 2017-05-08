<?php get_header(); ?>
	<div id="content">
	
		<div id="inner-content" class="row">

		    <main id="main" class="small-12 columns" role="main">
				 
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="large-9 large-push-2 columns">
			    		<?php get_template_part( 'parts/loop', 'page' ); ?>
			    		<hr>
			    	</div>
			    <?php endwhile; endif; ?>

			    <section class="row" id="hp-buckets" role="complementary">
			    	<div class="small-12 columns hide-for-print"> 
						<?php get_sidebar('homepage-column'); ?>
					</div>
			    </section>	
					
			</main> <!-- end #main -->
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>