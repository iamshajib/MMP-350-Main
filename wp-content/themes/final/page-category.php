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

			<div class='product-group group'>

				<h3><a href='#'>For Industry</a></h3>

				<a href="#" class="product-jump" title="">
					<img src="https://wpmmp.bmcc.cuny.edu/~mshajib/wp-content/themes/final/images/Hpic1.png"	/>
					<span class="product-title">Eco Friendly</span>
					<span class="product-code">Green-2020</span>
				</a>

				<a href="#" class="product-jump" title="">
				    <img src="https://wpmmp.bmcc.cuny.edu/~mshajib/wp-content/themes/final/images/Hpic2.1.png" />
					<span class="product-title">Energy Saver</span>
				    <span class="product-code">Green-2025</span>
				 </a>

			</div>

			<div class='product-group group'>

				<h3><a href='#'>For Citizen</a></h3>

				 <a href="#" class="product-jump" title="">
				    <img src="https://wpmmp.bmcc.cuny.edu/~mshajib/wp-content/themes/final/images/Hpic3.png" />
					<span class="product-title">Think Green</span>
				    <span class="product-code">Green-2017</span>
				 </a>

			</div>

		<h2>Web Special<em> of the</em> Week</h2>


		<script type="text/javascript">
		jQuery(document).ready(function(){
		    jQuery("button").click(function(){
		        jQuery('.coupon').load("https://wpmmp.bmcc.cuny.edu/~mshajib/wp-content/themes/final/demo_test.txt");
		    });
		});
		</script>

		<div class="coupon">
			Scratch and Win!!
		</div>

		<button>Scratch Here</button>


		</div> <!-- END main-content -->


<?php get_footer(); ?>
