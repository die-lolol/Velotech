<?php
/**
 * Playlist Options
 *
 * @package Signify_Tune
 */

/**
 * Add sticky_playlist options to theme options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function signify_sticky_playlist( $wp_customize ) {
	$wp_customize->add_section( 'signify_sticky_playlist', array(
			'title' => esc_html__( 'Sticky Playlist', 'signify-tune' ),
			'panel' => 'signify_theme_options',
		)
	);

	signify_register_option( $wp_customize, array(
			'name'              => 'signify_sticky_playlist_visibility',
			'default'           => 'disabled',
			'sanitize_callback' => 'signify_sanitize_select',
			'choices'           => signify_section_visibility_options(),
			'label'             => esc_html__( 'Enable on', 'signify-tune' ),
			'section'           => 'signify_sticky_playlist',
			'type'              => 'select',
		)
	);

	signify_register_option( $wp_customize, array(
			'name'              => 'signify_sticky_playlist',
			'default'           => '0',
			'sanitize_callback' => 'signify_sanitize_post',
			'active_callback'   => 'signify_is_sticky_playlist_active',
			'label'             => esc_html__( 'Page', 'signify-tune' ),
			'section'           => 'signify_sticky_playlist',
			'type'              => 'dropdown-pages',
		)
	);
}
add_action( 'customize_register', 'signify_sticky_playlist', 12 );

/** Active Callback Functions **/
if ( ! function_exists( 'signify_is_sticky_playlist_active' ) ) :
	/**
	* Return true if sticky_playlist is active
	*
	* @since 1.0.0
	*/
	function signify_is_sticky_playlist_active( $control ) {
		$enable = $control->manager->get_setting( 'signify_sticky_playlist_visibility' )->value();

		return signify_check_section( $enable );
	}
endif;
