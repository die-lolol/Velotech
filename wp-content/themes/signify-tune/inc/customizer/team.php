<?php
/**
 * Team options
 *
 * @package Signify_Tune
 */

/**
 * Add team content options to theme options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function signify_team_options( $wp_customize ) {

	$wp_customize->add_section( 'signify_team', array(
			'title' => esc_html__( 'Team', 'signify-tune' ),
			'panel' => 'signify_theme_options',
		)
	);

	// Add color scheme setting and control.
	signify_register_option( $wp_customize, array(
			'name'              => 'signify_team_option',
			'default'           => 'disabled',
			'sanitize_callback' => 'signify_sanitize_select',
			'choices'           => signify_section_visibility_options(),
			'label'             => esc_html__( 'Enable on', 'signify-tune' ),
			'section'           => 'signify_team',
			'type'              => 'select',
		)
	);

	signify_register_option( $wp_customize, array(
			'name'              => 'signify_team_title',
			'sanitize_callback' => 'wp_kses_post',
			'active_callback'   => 'signify_is_team_active',
			'label'             => esc_html__( 'Section Title', 'signify-tune' ),
			'section'           => 'signify_team',
			'type'              => 'text',
		)
	);

	signify_register_option( $wp_customize, array(
			'name'              => 'signify_team_description',
			'sanitize_callback' => 'wp_kses_post',
			'active_callback'   => 'signify_is_team_active',
			'label'             => esc_html__( 'Section Description', 'signify-tune' ),
			'section'           => 'signify_team',
			'type'              => 'textarea',
		)
	);

	signify_register_option( $wp_customize, array(
			'name'              => 'signify_team_number',
			'default'           => 4,
			'sanitize_callback' => 'signify_sanitize_number_range',
			'active_callback'   => 'signify_is_team_active',
			'description'       => esc_html__( 'Save and refresh the page if No. of Items is changed', 'signify-tune' ),
			'input_attrs'       => array(
				'style' => 'width: 100px;',
				'min'   => 0,
			),
			'label'             => esc_html__( 'No of Items', 'signify-tune' ),
			'section'           => 'signify_team',
			'type'              => 'number',
			'transport'         => 'postMessage',
		)
	);

	$number = get_theme_mod( 'signify_team_number', 4 );

	//loop for team post content
	for ( $i = 1; $i <= $number ; $i++ ) {
		signify_register_option( $wp_customize, array(
				'name'              => 'signify_team_page_' . $i,
				'sanitize_callback' => 'signify_sanitize_post',
				'active_callback'   => 'signify_is_team_active',
				'label'             => esc_html__( 'Team Page', 'signify-tune' ) . ' ' . $i ,
				'section'           => 'signify_team',
				'type'              => 'dropdown-pages',
			)
		);
	} // End for().
}
add_action( 'customize_register', 'signify_team_options', 10 );

/** Active Callback Functions **/
if ( ! function_exists( 'signify_is_team_active' ) ) :
	/**
	* Return true if team content is active
	*
	* @since 1.0.0
	*/
	function signify_is_team_active( $control ) {
		$enable = $control->manager->get_setting( 'signify_team_option' )->value();

		//return true only if previewed page on customizer matches the type of content option selected
		return ( signify_check_section( $enable ) );
	}
endif;
