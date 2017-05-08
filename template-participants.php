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
      <div class="row">
         <div class="large-9 large-offset-1 columns">
            <?php get_template_part( 'parts/loop', 'page' ); ?>
         </div>
      </div>
      <?php endwhile; endif; ?>
      <?php $participants_query = new WP_Query(array(
         'posts_per_page'	=> -1,
         'orderby' => 'title',
         'order' => 'asc',
         'post_type' => 'documents',
         'meta_key' => 'primary_section',
         'meta_value' => 'participants',
          )); ?>
      <section class="documents">
      <div class="row">
         <?php if ( $participants_query->have_posts() ) :?>
         <div class="small-6 columns">
            <h3>Documents & Resources for Participants</h3>
            <ul class="accordion" data-accordion data-allow-all-closed="true">
               <?php while ($participants_query->have_posts()) : $participants_query->the_post(); ?>
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
            	'orderby' => 'title',
            	'order' => 'asc',
            	'post_type'		=> 'documents',
            	'meta_query'	=> array(
            		array(
            			'key'		=> 'affiliated_section',
            			'value'		=> 'participants',
            			'compare'	=> 'LIKE'
            			)
            	)
            );
            
            
            
            // query
            $related_participants_query = new WP_Query( $args );
            
            ?>
         <?php if( $related_participants_query->have_posts() ): ?>
         <div class="small-6 columns">
            <h3>Related Documents & Resources</h3>
            <ul class="accordion" data-accordion data-allow-all-closed="true">
               <?php while( $related_participants_query->have_posts() ) : $related_participants_query->the_post(); ?>
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
         </div>
         <?php endif; ?>
         <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
         </div>
      </section>
   </main>
   <!-- end #main -->
   </div> <!-- end #inner-content -->
</div>
<!-- end #content -->
<?php get_footer(); ?>