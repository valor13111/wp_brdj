<?php
/**
 * The template for displaying all single posts.
 *
 * @package 8Medi Lite
 */

get_header(); ?>
<div class="ed-container">
	<?php
	global $post;
	$sidebar = get_post_meta($post->ID, 'eightmedi_lite_sidebar_layout', true);
	if($sidebar=='both-sidebar' || $sidebar=='left-sidebar'){
		get_sidebar('left');
	}
	?>
	<div id="primary" class="content-area <?php echo $sidebar;?>">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>				

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
	if($sidebar=='both-sidebar' || $sidebar=='right-sidebar' ){
		get_sidebar('right');
	}
	?>
</div>
<?php get_footer(); ?>
