<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="row">
		<?php
			if ( has_post_thumbnail() ) :
				?>

				<div class="col-12 col-lg-4">
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
					</a>
				</div>

				<div class="col-12 col-lg-8">
			<?php else : ?>

				<div class="col-12">
			<?php endif; ?>

			<div class="entry-content">

				<?php
				get_template_part( 'loop-templates/real-estate/content' );

				if( is_single() ) {
					get_template_part( 'loop-templates/real-estate/content', 'extended' );
				}

				understrap_link_pages();
				?>

			</div><!-- .entry-content -->

			<footer class="entry-footer">

				<?php understrap_entry_footer(); ?>

			</footer><!-- .entry-footer -->
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
