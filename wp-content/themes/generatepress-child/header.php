<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121976279-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
gtag('config', 'UA-121976279-1', { 'anonymize_ip': true });
</script>

</head>

<body <?php generate_body_schema();?> <?php body_class(); ?>>
	<nav itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope" id="site-navigation" <?php generate_navigation_class(); ?>>
		<div <?php generate_inside_navigation_class(); ?>>
			<?php
			/**
			 * generate_inside_navigation hook.
			 *
			 * @since 0.1
			 *
			 * @hooked generate_navigation_search - 10
			 * @hooked generate_mobile_menu_search_icon - 10
			 */
			do_action( 'generate_inside_navigation' );

			?>
<a href="<?php echo site_url(); ?>"><span id="logo-menu"><?php include_once 'svg/logo-gieffe-orizzontale.svg'; ?></span></a>
			<a class="hamburger-shell">
				<div class="hamb top"></div>
					<div class="hamb middle"></div>
				<div class="menu-name">MENU</div>


				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container' => 'div',
						'container_class' => 'main-nav',
						'container_id' => 'primary-menu',
						'menu_class' => '',
						'fallback_cb' => 'generate_menu_fallback',
						'items_wrap' => '<ul id="menu">%3$s</ul>',
					)
				);
				?>

			</a>
		</div><!-- .inside-navigation -->
	</nav><!-- #site-navigation -->

	<div id="page" class="">
		<div id="content" class="site-content">
			<?php
			/**
			 * generate_inside_container hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_inside_container' );
