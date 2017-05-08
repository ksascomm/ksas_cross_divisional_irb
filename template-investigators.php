<?php
/*
Template Name: Participants (No Sidebar)
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>

				<?php $news_query = new WP_Query(array(
									'posts_per_page'	=> -1,
									'post_type' => 'documents',
									'meta_key' => 'primary_section',
									'meta_value' => 'investigators',
									 )); ?>
		<div class="row">	
			
			<?php if ( $news_query->have_posts() ) :?>
				<div class="small-6 columns">
					<h3>Documents & Resources for Investigators</h3>
					<ul class="accordion" data-accordion data-allow-all-closed="true">	  
						<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

							<li class="accordion-item" data-accordion-item>
								<a href="#" class="accordion-title"><?php the_title();?></a>
							    <div class="accordion-content" data-tab-content>
							    	<p><?php the_content(); ?></p>
										<?php if( get_field( "document_upload") ): ?>
										    <a href="<?php the_field('document_upload'); ?>">View the Document</a>
										<?php endif; ?>
										<?php if( get_field( "resource_link") ): ?>
											 <a href="http://<?php the_field('resource_link'); ?>">Read Additional <?php the_title();?> Information</a>
										<?php endif; ?>	 
							    </div>
							</li>

					    <?php endwhile; ?>
					</ul>	
			
			</div>
			
			<?php endif; ?>
			
			<?php 

// args
$args = array(
	'posts_per_page'	=> -1,
	'post_type'		=> 'documents',
	'meta_query'	=> array(
		array(
			'key'		=> 'affiliated_section',
			'value'		=> 'members',
			'compare'	=> 'LIKE'
			)
	)
);



// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>
	<div class="small-6 columns">
		<h3>Related Documents & Resources</h3>
			<ul class="accordion" data-accordion data-allow-all-closed="true">	 
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li class="accordion-item" data-accordion-item>
				<a href="#" class="accordion-title"><?php the_title();?></a>
			    <div class="accordion-content" data-tab-content>
			    	<p><?php the_content(); ?></p>
						<?php if( get_field( "document_upload") ): ?>
						    <a target="_blank" href="<?php the_field('document_upload'); ?>">View the Document</a>
						<?php endif; ?>
						<?php if( get_field( "resource_link") ): ?>
							 <a target="_blank" href="http://<?php the_field('resource_link'); ?>">Read Additional <?php the_title();?> Information</a>
						<?php endif; ?>	 
			    </div>
			</li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

		</div>
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
