<?php
/**
 * The template used for displaying playlist
 *
 * @package Signify_Tune
 */

$enable_section = get_theme_mod( 'signify_playlist_visibility', 'disabled' );

if ( ! signify_check_section( $enable_section ) ) {
	// Bail if playlist is not enabled
	return;
}

$signify_id = get_theme_mod( 'signify_playlist' );
$args['page_id'] = absint( $signify_id );

// If $args is empty return false
if ( empty( $args ) ) {
	return;
}

// Create a new WP_Query using the argument previously created
$playlist_query = new WP_Query( $args );
if ( $playlist_query->have_posts() ) :
	while ( $playlist_query->have_posts() ) :
		$playlist_query->the_post();

		$classes[] = 'playlist-section section';
		$classes[] = 'content-align-right';
		
		?>
		<div id="playlist-section" class=" no-section-heading playlist-section section content-align-right">
			<div class="wrapper">
				<div class="section-content-wrapper playlist-content-wrapper layout-one content-align-right">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="hentry-inner">
							<?php $post_thumbnail = signify_post_thumbnail( array(720,720), 'html', false );

							if ( $post_thumbnail ) :
								echo $post_thumbnail;
								?>
								<div class="entry-container">
							<?php else : ?>
								<div class="entry-container full-width">
							<?php endif; ?>
								
								<header class="entry-header">
									<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
								</header><!-- .entry-header -->

								<div class="entry-content">
									<?php the_content(); ?>
								</div><!-- .entry-content -->

								<?php if ( get_edit_post_link() ) : ?>
									<footer class="entry-footer">
										<div class="entry-meta">
											<?php
												edit_post_link(
													sprintf(
														/* translators: %s: Name of current post */
														esc_html__( 'Edit %s', 'signify-tune' ),
														the_title( '<span class="screen-reader-text">"', '"</span>', false )
													),
													'<span class="edit-link">',
													'</span>'
												);
											?>
										</div>
									</footer><!-- .entry-footer -->
								<?php endif; ?>
							</div><!-- .entry-container -->
						</div><!-- .hentry-inner -->
					</article><!-- #post-## -->
				</div><!-- .wrapper -->
			</div><!-- .section-content -->
		</div><!-- #playlist-section -->
	<?php
	endwhile;

	wp_reset_postdata();
endif;
