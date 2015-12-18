<?php
/**
 * The template for displaying product pages.
 *
 * This is the template that displays product pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mid350
 */

get_header(); ?>
<?php get_sidebar(); ?>

	<div id="main-content">

			<p id="intro">Trees play a very important role in our surroundings. Trees provide us with fresh air to breathe, shade in summers, food, and other benefits without which we cannot even think of living. As pollution and cutting of trees increases day by day, the ecological balance should be maintained.</p>

			<blockquote id="main-quote">We are able to do the work we do because of the quality of these widgets. <cite>- Frank James, Tick Tock Corp</cite></blockquote>

			<h2>Works to do</h2>

			<ul id="featured-widgets">
				<li>
					<h3>Eco Friendly</h3>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					<div class="image-and-button">
						<img src="https://wpmmp.bmcc.cuny.edu/~mshajib/wp-content/themes/final/images/Hpic1.png" alt="" />
						<a href="#" class="button">View Save</a>
					</div>
				</li>
				<li>
					<h3>Energy Saving</h3>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					<div class="image-and-button">
						<img src="https://wpmmp.bmcc.cuny.edu/~mshajib/wp-content/themes/final/images/Hpic2.png" alt="" />
						<a href="#" class="button">View Save</a>
					</div>
				</li>
			</ul>

			<br />

			<h2>Special Save<em> of the</em> Week</h2>

			<div class="coupon">

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
				<!-- Plant two trees, get the $50 gift card free! -->
			</div>

		</div> <!-- end of main -->



<?php get_footer(); ?>
