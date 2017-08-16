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

			    <?php $theme_option = flagship_sub_get_global_options();   //News Query		
					$news_quantity = $theme_option['flagship_sub_news_quantity']; 
		
					$news_query = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $news_quantity)); 
				if ( $news_query->have_posts() ) : ?>

				<div class="news-feed">

					<h3><?php echo $theme_option['flagship_sub_feed_name']; ?></h3>

					<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
						
							<?php get_template_part( 'parts/loop', 'news' ); ?>
							
					<?php endwhile; ?>

					 <div class="row">
						<h5 class="black">
							<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
								View <?php echo $theme_option['flagship_sub_feed_name']; ?> Archive
							</a>
						</h5>
					</div>
				</div>
				<?php endif; ?>			    	
					
			</main> <!-- end #main -->
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>