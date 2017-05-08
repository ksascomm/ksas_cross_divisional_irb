<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns first" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>

		<?php if( get_field( "document_upload") ): ?>
    <a target="_blank" href="<?php the_field('document_upload'); ?>">View the Document</a>
      <?php else: ?>
      	<p>No Document to view</p>
     <?php endif; ?>
		    					
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->


	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>