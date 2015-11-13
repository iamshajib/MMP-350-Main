<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to viking_comment() which is
 * located in the inc/template-tags.php file.
 *
 * @package viking
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>
	<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title"><?php comments_number(); ?></h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="navigation-comment" role="navigation">
			<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'viking' ); ?></h2>
			<?php previous_comments_link( __( '<div class="nav-previous">Older Comments</div>', 'viking' ) ); ?>
			<?php next_comments_link( __( '<div class="nav-next">Newer Comments</div>', 'viking' ) ); ?>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use viking_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define viking_comment() and that will be used instead.
				 * See viking_comment() in inc/template-tags.php for more.
				 */
				wp_list_comments( array( 'callback' => 'viking_comment' ) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation-comment" role="navigation">
			<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'viking' ); ?></h2>
			<?php previous_comments_link( __( '<div class="nav-previous">Older Comments</div>', 'viking' ) ); ?>
			<?php next_comments_link( __( '<div class="nav-next">Newer Comments</div>', 'viking' ) ); ?>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
