<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mid350
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>





			<?php the_posts_navigation(); ?>


			<!-- working with function -->
			<div id="midWorkId">
			<?php midWork(); ?>
			</div>

			<!-- adding Custom Post Types -->


			<?php rewind_posts(); ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php rewind_posts(); ?>

        <div id="apple">
            <?php

                $args = array( 'post_type' => 'apple_page', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
	                the_title();
	                echo '<div class="entry-content">';
	                the_content();
	                echo '</div>';

                endwhile;

            ?>
        </div>






		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
