<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package viking
 */

if ( ! function_exists( 'viking_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function viking_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Posts navigation', 'viking' ); ?></h2>
		<div class="nav-links">
			<?php if ( get_next_posts_link() ) : ?>
				<span class="nav-previous"><?php next_posts_link( __( 'Older posts', 'viking' )  ); ?></span>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
				<span class="nav-next"><?php previous_posts_link( __( 'Newer posts', 'viking' ) ); ?></span>
			<?php endif; ?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;



if ( ! function_exists( 'viking_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function viking_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Post navigation', 'viking' ); ?></h2>
		<div class="nav-links">
			<?php
				previous_post_link( '<span class="nav-previous">%link</span>' );
				next_post_link( '<span class="nav-next">%link</span>' );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;


if ( ! function_exists( 'viking_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function viking_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;

	if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<div class="comment-body">
			<?php _e( 'Pingback:', 'viking' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'viking' ), '<span class="edit-link">', '</span>' ); ?>
		</div>

	<?php else : ?>

	<li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
					<?php printf( __( '%s <span class="says">says:</span>', 'viking' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author -->

				<div class="comment-metadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
						<time datetime="<?php comment_time( 'c' ); ?>">
							<?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'viking' ), get_comment_date(), get_comment_time() ); ?>
						</time>
					</a>
					<?php edit_comment_link( __( 'Edit', 'viking' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-metadata -->

				<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'viking' ); ?></p>
				<?php endif; ?>
			</footer><!-- .comment-meta -->

			<div class="comment-content">
				<?php comment_text(); ?>
			</div><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- .comment-body -->

	<?php
	endif;
}
endif; // ends check for viking_comment()


if ( ! function_exists( 'viking_breadcrumbs' ) ) {
	function viking_breadcrumbs(){
		if ( get_theme_mod( 'viking_breadcrumb' ) <> ''){
			?>
				<div class="crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home', 'viking');?></a>
				<?php
					/*pick a category to display*/
					if ( count( get_the_category() ) ) : 
						$viking_category = get_the_category(); 
							if($viking_category[0]){
								echo '<i>/</i>  ';
								echo '<a href="'.get_category_link($viking_category[0]->term_id ).'">'.$viking_category[0]->cat_name.'</a>';
							}
					endif;
					echo ' <i>/</i>';
					?>
					<?php the_title(); ?>
				</div>
			<?php
		}
	}
}


if ( ! function_exists( 'viking_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function viking_posted_on() {
	
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	printf( __( 'Posted on %3$s <span class="byline">by <span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%6$s.</a></span></span> ', 'viking' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		$time_string,
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'viking' ), get_the_author() ) ),
		get_the_author()
	);
	
	if ( count( get_the_category() ) ) : 
			printf( __( 'Category: %1s', 'viking' ), get_the_category_list(', '));
			echo '. ';
	endif; 
		if(get_the_tag_list()) {
			$viking_tags_list = get_the_tag_list( '', ', ' );
			printf( __( 'Tagged: %1$s', 'viking' ), $viking_tags_list ); 
			echo '. ';
	}
	
}
endif;
?>