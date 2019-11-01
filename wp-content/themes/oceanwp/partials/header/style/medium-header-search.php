<?php
/**
 * Search Form for The Medium Header Style
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Post type
$post_type = get_theme_mod( 'ocean_menu_search_source', 'any' ); ?>

<div id="medium-searchform" class="header-searchform-wrap clr">
	<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-searchform">
		<input type="search" name="s" autocomplete="off" value="" />
		<?php
		// If the headerSearchForm script is not disable
		if ( OCEAN_EXTRA_ACTIVE
			&& class_exists( 'Ocean_Extra_Scripts_Panel' )
			&& Ocean_Extra_Scripts_Panel::get_setting( 'oe_headerSearchForm_script' ) ) { ?>
			<label><?php echo esc_html_e( 'Search...', 'oceanwp' ); ?></label>
		<?php } ?>
		<button class="search-submit"><i class="icon-magnifier"></i></button>
		<div class="search-bg"></div>
		<?php if ( 'any' != $post_type ) { ?>
			<input type="hidden" name="post_type" value="<?php echo esc_attr( $post_type ); ?>">
		<?php } ?>
	</form>
</div><!-- #medium-searchform -->