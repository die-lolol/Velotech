<?php
/**
 * The template for displaying team content
 *
 * @package Signify_Tune
 */

$enable_content = get_theme_mod( 'signify_team_option', 'disabled' );

if ( ! signify_check_section( $enable_content ) ) {
	// Bail if team content is disabled.
	return;
}

$signify_title       = get_theme_mod( 'signify_team_title' );
$signify_description = get_theme_mod( 'signify_team_description' );

if ( ! $signify_title && ! $signify_description ) {
	$classes[] = 'no-section-heading';
}

?>

<div id="team-content-section" class="team-section section text-align-center page">
	<div class="wrapper">
		<?php if ( $signify_title  || $signify_description ) : ?>
			<div class="section-heading-wrapper">

				<?php if ( $signify_title  ) : ?>
					<div class="section-title-wrapper">
						<h2 class="section-title"><?php echo wp_kses_post( $signify_title  ); ?></h2>
					</div>
				<?php endif; ?>

				<?php if ( $signify_description ) : ?>
					<div class="section-description">
						<p><?php echo wp_kses_post( $signify_description ); ?></p>
					</div><!-- .section-description-wrapper -->
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<div class="team-content-wrapper section-content-wrapper layout-four">
			<?php get_template_part( 'template-parts/team/content', 'team' ); ?>
		</div><!-- .team-wrapper -->
	</div><!-- .wrapper -->
</div><!-- #team-section -->
