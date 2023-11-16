<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package Signify_Tune
 */

$number        = get_theme_mod( 'signify_team_number', 4 );
$post_list     = array();
$no_of_post    = 0;

$args = array(
	'post_type'           => 'post',
	'ignore_sticky_posts' => 1, // ignore sticky posts.
);

// Get valid number of posts.
$args['post_type'] = 'page';

for ( $i = 1; $i <= $number; $i++ ) {
	$signify_post_id = '';

	$signify_post_id = get_theme_mod( 'signify_team_page_' . $i );

	if ( $signify_post_id && '' !== $signify_post_id ) {
		$post_list = array_merge( $post_list, array( $signify_post_id ) );

		$no_of_post++;
	}
}

$args['post__in'] = $post_list;
$args['orderby']  = 'post__in';

if ( ! $no_of_post ) {
	return;
}

$args['posts_per_page'] = $no_of_post;

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) :
	
	$loop->the_post();

	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="hentry-inner">
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( array( 960, 1440 ) );
					}
					else {
					?>
					<img src="<?php echo esc_url( trailingslashit( get_template_directory_uri() ) . 'images/no-thumb-960x1440.jpg' ); ?>'" class="wp-post-image" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
					<?php
					} ?>
				</a>
			</div>

			<div class="entry-container">
				<header class="entry-header">
					<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h2>' ); ?>
				</header>

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
				
			</div><!-- .entry-container -->
		</div> <!-- .hentry-inner -->
	</article> <!-- .article -->
<?php
endwhile;

wp_reset_postdata();
