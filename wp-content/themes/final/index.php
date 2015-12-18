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
 * @package final
 */

get_header(); ?>
<?php get_sidebar(); ?>

<div id="main-content">
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
					get_template_part( 'template-parts/content', get_post_format() );

					echo '<div id="pTitle">';
					the_title();
					echo '</div>';

					the_content();
				?>

			<?php endwhile; ?>




		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		<?php rewind_posts(); ?>

        <div id="green">
            <?php
                $args = array( 'post_type' => 'green_page', 'posts_per_page' => 10 );
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
</div> <!-- end of main content	 -->


<?php get_footer(); ?>
