<?php
/*
 * This is the child theme for Signify theme.
 */

/**
 * Enqueue default CSS styles
 */
function signify_tune_enqueue_styles() {
	// Include parent theme CSS.
    wp_enqueue_style( 'signify-style', get_template_directory_uri() . '/style.css', null, date( 'Ymd-Gis', filemtime( get_template_directory() . '/style.css' ) ) );
   
    // Include child theme CSS.
    wp_enqueue_style( 'signify-tune-style', get_stylesheet_directory_uri() . '/style.css', array( 'signify-style' ), date( 'Ymd-Gis', filemtime( get_stylesheet_directory() . '/style.css' ) ) );
	
	// Load rtl css.
	if ( is_rtl() ) {
		wp_enqueue_style( 'signify-rtl', get_template_directory_uri() . '/rtl.css', array( 'signify-style' ), filemtime( get_stylesheet_directory() . '/rtl.css' ) );
	}

	// Enqueue child block styles after parent block style.
	wp_enqueue_style( 'signify-tune-block-style', get_stylesheet_directory_uri() . '/assets/css/child-blocks.css', array( 'signify-block-style' ), date( 'Ymd-Gis', filemtime( get_stylesheet_directory() . '/assets/css/child-blocks.css' ) ) );
}
add_action( 'wp_enqueue_scripts', 'signify_tune_enqueue_styles' );

/**
 * Add child theme editor styles
 */
function signify_tune_editor_style() {
	add_editor_style( array(
			'assets/css/child-editor-style.css',
			signify_fonts_url(),
			get_theme_file_uri( 'assets/css/font-awesome/css/font-awesome.css' ),
		)
	);
}
add_action( 'after_setup_theme', 'signify_tune_editor_style', 11 );

/**
 * Enqueue editor styles for Gutenberg
 */
function signify_tune_block_editor_styles() {
	// Enqueue child block editor style after parent editor block css.
	wp_enqueue_style( 'signify-tune-block-editor-style', get_stylesheet_directory_uri() . '/assets/css/child-editor-blocks.css', array( 'signify-block-editor-style' ), date( 'Ymd-Gis', filemtime( get_stylesheet_directory() . '/assets/css/child-editor-blocks.css' ) ) );
}
add_action( 'enqueue_block_editor_assets', 'signify_tune_block_editor_styles', 11 );

/**
 * Loads the child theme textdomain and update notifier.
 */
function signify_tune_setup() {
    load_child_theme_textdomain( 'signify-tune', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'signify_tune_setup', 11 );

/**
 * Change default background color
 */
function signify_tune_background_default_color( $args ) {
    $args['default-color'] = '#ffffff';

    return $args;
}
add_filter( 'signify_custom_background_args', 'signify_tune_background_default_color' );

/**
 * Change default header text color
 */
function signify_tune_header_default_color( $args ) {
	$args['default-text-color'] = '#000000';
	$args['default-image']      =  get_theme_file_uri( 'assets/images/header-image.jpg' );

	return $args;
}
add_filter( 'signify_custom_header_args', 'signify_tune_header_default_color' );

/**
 * Remove color-scheme-default and add color-scheme-tune to body class
 *
 * @since 1.0.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function signify_tune_body_classes( $classes ) {

	$sticky_playlist = get_theme_mod( 'signify_sticky_playlist_visibility' , 'disabled' );

	if( 'disabled' !== $sticky_playlist ) {
		$classes[] = 'sticky-playlist-enabled';
	}
		// Added color scheme to body class.
	$classes[] = 'color-scheme-music';

	$classes['color-scheme'] = 'color-scheme-tune';

	$classes['header-layout'] = 'header-style-two';

	$classes['absolute-header'] = 'transparent-header-color-scheme';

	return $classes;
}
add_filter( 'body_class', 'signify_tune_body_classes', 100 );

/**
 * Add layout option to featured content
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function signify_tune_featured_content_layout( $wp_customize ) {
	signify_register_option( $wp_customize, array(
			'name'              => 'signify_featured_content_layout',
			'default'           => 'layout-three',
			'sanitize_callback' => 'signify_sanitize_select',
			'active_callback'   => 'signify_is_featured_content_active',
			'choices'           => array(
				'layout-one'   => esc_html__( '1 column', 'signify-tune' ),
				'layout-two'   => esc_html__( '2 columns', 'signify-tune' ),
				'layout-three' => esc_html__( '3 columns', 'signify-tune' ),
				'layout-four'  => esc_html__( '4 columns', 'signify-tune' ),
			),
			'label'             => esc_html__( 'Select Layout', 'signify-tune' ),
			'section'           => 'signify_featured_content',
			'type'              => 'select',
		)
	);
}
add_action( 'customize_register', 'signify_tune_featured_content_layout', 11 );

/**
 * Add an HTML class to MediaElement.js container elements to aid styling.
 *
 * Extends the core _wpmejsSettings object to add a new feature via the
 * MediaElement.js plugin API.
 */
function signify_mejs_add_container_class() {
	if ( ! wp_script_is( 'mediaelement', 'done' ) ) {
		return;
	}
	?>
	<script>
	(function() {
		var settings = window._wpmejsSettings || {};

		settings.features = settings.features || mejs.MepDefaults.features;

		settings.features.push( 'signify_class' );

		MediaElementPlayer.prototype.buildsignify_class = function(player, controls, layers, media) {
			if ( ! player.isVideo ) {
				var container = player.container[0] || player.container;

				container.style.height = '';
				container.style.width = '';
				player.options.setDimensions = false;
			}

			if ( jQuery( '#' + player.id ).parents('#sticky-playlist-section').length ) {
				player.container.addClass( 'signify-mejs-container signify-mejs-sticky-playlist-container' );

				jQuery( '#' + player.id ).parent().children('.wp-playlist-tracks').addClass('displaynone');

				var volume_slider = controls[0].children[5];

				if ( jQuery( '#' + player.id ).parent().children('.wp-playlist-tracks').length > 0) {
					var playlist_button =
					jQuery('<div class="mejs-button mejs-playlist-button mejs-toggle-playlist">' +
						'<button type="button" aria-controls="mep_0" title="Toggle Playlist"></button>' +
					'</div>')

					// append it to the toolbar
					.appendTo( jQuery( '#' + player.id ) )

					// add a click toggle event
					.on( 'click',function() {
						jQuery( '#' + player.id ).parent().children('.wp-playlist-tracks').slideToggle();
						jQuery( this ).toggleClass('is-open')
					});

					var play_button = controls[0].children[0];

					// Add next button after volume slider
					var next_button =
					jQuery('<div class="mejs-button mejs-next-button mejs-next">' +
						'<button type="button" aria-controls="' + player.id
						+ '" title="Next Track"></button>' +
					'</div>')

					// insert after volume slider
					.insertAfter(play_button)

					// add a click toggle event
					.on( 'click',function() {
						jQuery( '#' + player.id ).parent().find( '.wp-playlist-next').trigger('click');
					});

					// Add prev button after volume slider
					var previous_button =
					jQuery('<div class="mejs-button mejs-previous-button mejs-previous">' +
						'<button type="button" aria-controls="' + player.id
						+ '" title="Previous Track"></button>' +
					'</div>')

					// insert after volume slider
					.insertBefore( play_button )

					// add a click toggle event
					.on( 'click',function() {
						jQuery( '#' + player.id ).parent().find( '.wp-playlist-prev').trigger('click');
					});
				}
			} else {
				player.container.addClass( 'signify-mejs-container' );
				if ( jQuery( '#' + player.id ).parent().children('.wp-playlist-tracks').length > 0) {
					var play_button = controls[0].children[0];

					// Add next button after volume slider
					var next_button =
					jQuery('<div class="mejs-button mejs-next-button mejs-next">' +
						'<button type="button" aria-controls="' + player.id
						+ '" title="Next Track"></button>' +
					'</div>')

					// insert after volume slider
					.insertAfter(play_button)

					// add a click toggle event
					.on( 'click',function() {
						jQuery( '#' + player.id ).parent().find( '.wp-playlist-next').trigger('click');
					});

					// Add prev button after volume slider
					var previous_button =
					jQuery('<div class="mejs-button mejs-previous-button mejs-previous">' +
						'<button type="button" aria-controls="' + player.id
						+ '" title="Previous Track"></button>' +
					'</div>')

					// insert after volume slider
					.insertBefore( play_button )

					// add a click toggle event
					.on( 'click',function() {
						jQuery( '#' + player.id ).parent().find( '.wp-playlist-prev').trigger('click');
					});
				}
			}
		}
	})();
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'signify_mejs_add_container_class' );

function signify_sections( $selector = 'header' ) {
	get_template_part( 'template-parts/header/header-media' );
	get_template_part( 'template-parts/slider/display-slider' );
	get_template_part( 'template-parts/playlist/content-playlist' );
	get_template_part( 'template-parts/service/display-service' );
	get_template_part( 'template-parts/hero-content/content-hero' );
	get_template_part( 'template-parts/portfolio/display-portfolio' );
	get_template_part( 'template-parts/testimonial/display-testimonial' );
	get_template_part( 'template-parts/team/display-team' );
	get_template_part( 'template-parts/featured-content/display-featured' );	
}

/**
 * Register Google fonts Poppin for BusinessFociu
 *
 * @since 1.0.0
 *
 * @return string Google fonts URL for the theme.
 */
function signify_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Open+Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'signify-tune' ) ) {
		$fonts[] = 'Open Sans:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Lato, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'signify-tune' ) ) {
		$fonts[] = 'Poppins:300,400,600,700,900';
	}

	$query_args = array(
		'family' => urlencode( implode( '|', $fonts ) ),
		'subset' => urlencode( $subsets ),
	);

	if ( $fonts ) {
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	$fonts_url = wptt_get_webfont_url( $fonts_url );

	return esc_url_raw( $fonts_url );
}

/**
 * Include Playlist
 */
require get_stylesheet_directory() . '/inc/customizer/playlist.php';

/**
 * Include Sticky Playlist
 */
require get_stylesheet_directory() . '/inc/customizer/sticky-playlist.php';

/**
 * Include Team
 */
require get_stylesheet_directory() . '/inc/customizer/team.php';
