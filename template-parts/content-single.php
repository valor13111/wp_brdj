<?php
/**
 * Template part for displaying single posts.
 *
 * @package 8Medi Lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="page-header">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if (has_post_thumbnail()): ?>
		<figure>
			<?php the_post_thumbnail('full');?>
		</figure>
		<?php endif; ?>
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eightmedi-lite' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<!-- Got rid of the next/prev buttons, and tags/categories -->
		
	</article><!-- #post-## -->
