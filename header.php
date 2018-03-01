<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package 8Medi Lite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eightmedi-lite' ); ?></a>
		<?php if(get_theme_mod('eightmedi_lite_top_header_setting','1')==1): ?>
			<div class="top-header">
				<div class="ed-container-home">
					<div class="header-callto clear">
						<div class="callto-left">
							<?php echo wp_kses_post(get_theme_mod('eightmedi_lite_callto_text',''));?>
						</div>
						<div class="callto-right">
							<div class="cta">
								<?php echo wp_kses_post(get_theme_mod('eightmedi_lite_callto_text_right',''));?>
							</div>
							<?php if(get_theme_mod('eightmedi_lite_social_icons_in_header','1')==1){ ?>
								<div class="header-social social-links">
									<?php do_action('eightmedi_lite_social_links');?>
								</div>
								<?php }?>

								<?php if(get_theme_mod('eightmedi_lite_hide_header_search')!='1'){
									?>
									<div class="header-search">
										<i class="fa fa-search"></i>
										<?php get_search_form();?>
									</div>
									<?php
								}?>
							</div>
						</div>
					</div>
				</div>
			<?php endif;?>


			




				<?php
				$no_margin = "";
				if(is_page_template( 'template-home.php' ) || is_page_template('template-boxedhome.php')){
					if(is_home() || is_front_page() || is_page_template('template-boxedhome.php')){
						$yes_slider = esc_attr(get_theme_mod('eightmedi_lite_display_slider','1'));
						if($yes_slider==1){
							$no_margin=' no-margin';
						}
					}
				}
				?>
				<div id="content" class="site-content<?php echo $no_margin;?>">
