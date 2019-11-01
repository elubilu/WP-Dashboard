<?php
/**
 * Author bio template
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Only display for standard posts
if ( 'post' != get_post_type() ) {
	return;
}

// Get author data
$author			= get_the_author();
$description	= get_the_author_meta( 'description' );
$url			= esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );

// Only display if author has a description
if ( ! $description ) {
	return;
} ?>

<?php do_action( 'ocean_before_single_post_author_bio' ); ?>

<section id="author-bio" class="clr">

	<div id="author-bio-inner">

		<div class="author-bio-avatar">

			<a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Visit Author Page', 'oceanwp' ); ?>" rel="author" >
				<?php
				// Display author avatar
				echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'ocean_author_bio_avatar_size', 100 ) ); ?>
			</a>

		</div><!-- .author-bio-avatar -->

		<div class="author-bio-content clr">

			<h4 class="author-bio-title">
				<a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Visit Author Page', 'oceanwp' ); ?>">
					<?php echo esc_html( strip_tags( $author ) ); ?>
				</a>
			</h4><!-- .author-bio-title -->

			<?php
			// Outputs the author description if one exists
			if ( $description ) : ?>

				<div class="author-bio-description clr">
					<?php echo wp_kses_post( $description ); ?>
				</div><!-- author-bio-description -->

			<?php endif; ?>

		</div>

	</div><!-- #author-bio-inner -->

</section><!-- #author-bio -->

<?php do_action( 'ocean_after_single_post_author_bio' ); ?>