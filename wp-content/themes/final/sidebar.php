<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package final
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

		<aside>

			<form action="#" id="searchform" method="get">
				<div>
					<label for="s" class="screen-reader-text">Search for:</label>
					<input type=search results=5 placeholder=Search... id=s name=s>

					<input type="submit" value="Search" id="searchsubmit" class="screen-reader-text">
				</div>
			</form>

			<nav>
				<ul id="main-nav">
					<li class="home"><a href="https://wpmmp.bmcc.cuny.edu/~mshajib/home/">Home</a></li>
					<li class="about"><a href="https://wpmmp.bmcc.cuny.edu/~mshajib/about/">About</a></li>
					<li class="contact"><a href="https://wpmmp.bmcc.cuny.edu/~mshajib/category/">Save Green</a></li>
					<li class="store"><a href="#">Contact Us</a></li>
					<li class="blog"><a href="#">Our Blog <em></em></a></li>
				</ul>
			</nav>

			<div class="widget latest-post">

				<h4>Latest Post</h4>

				<?php query_posts("post_per_page=1"); the_post();?>

				<div class="sidebar-post">
					<p class="date"><?php the_date(); ?></p>
					<h5><a href="<?php the_permalink(); ?>"></a> <?php the_title();?> </h5>
					<p><?php the_excerpt(); ?></p>
				</div>

			</div> <!-- END Latest Posts -->

			<div class="widget industry-news">

				<h4>Best Comments</h4>

				<div class="sidebar-post">
					<p class="date">Dec 17, 2015</p>
					<h5>Trees are for life</h5>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
				</div>

				<div class="sidebar-post">
					<p class="date">Dec 20, 2015</p>
					<h5>I love save the green</h5>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
				</div>

			</div> <!-- END Industry News -->

		</aside>
