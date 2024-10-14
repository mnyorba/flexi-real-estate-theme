<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="row">
		<?php
		if ( has_post_thumbnail() ) :
			?>

			<div class="col-12 col-lg-4">
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			</div>

			<div class="col-12 col-lg-8">
		<?php else : ?>

			<div class="col-12">
		<?php endif; ?>

			<div class="entry-content">

				<?php
				the_content();
				understrap_link_pages();
				?>

			</div><!-- .entry-content -->

			<footer class="entry-footer">

				<?php understrap_entry_footer(); ?>

			</footer><!-- .entry-footer -->

		</div>

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
