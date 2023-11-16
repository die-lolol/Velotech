<?php
/**
 * The template used for displaying playlist
 *
 * @package Signify_Tune
 */
?>

<?php
$enable_section = get_theme_mod( 'signify_sticky_playlist_visibility', 'disabled' );

if ( ! signify_check_section( $enable_section ) ) {
	// Bail if playlist is not enabled
	return;
}

get_template_part( 'template-parts/sticky-playlist/post-type', 'playlist' );
