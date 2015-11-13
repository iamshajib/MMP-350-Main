<?php
/**
 * The Template for displaying all single posts.
 *
 * @package viking
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php while ( have_posts() ) : the_post(); 
			get_template_part( 'content', 'single' ); 

			viking_post_nav(); 
			
			// If comments are open, load up the comment template
			if ( comments_open() )
					comments_template();
			
			endwhile;	// end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>