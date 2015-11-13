<?php
/**
 * The template for displaying search forms in viking
 *
 * @package viking
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s"><?php _e( 'Search','viking' ); ?></label>
		<input type="search" class="search-field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;','viking' ); ?>" 
		value="<?php esc_attr_e( get_search_query() ); ?>" />
	<input type="submit" class="search-submit" value="<?php esc_attr_e( 'Search','viking' ); ?>" />
</form>
