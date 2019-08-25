<?php
/**
 * The template for displaying Archive pages.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */

			if ( have_posts()) :

				/**
				 * generate_archive_title hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_archive_title - 10
				 */
				 $cat = get_the_category();
				?>
				<div class="archive_portfolio_visual portfolio_visual" style="background-image: url('<?php echo get_field('archive_visual', 72) ?>')">
				  <h1><?php echo $cat[0]->cat_name ?></h1>
				</div>
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
				<div class="portfolio_content portfolio_container">

				  <?php if(get_field('portfolio_description', 72)) {?>
				    <p><?php echo get_field('portfolio_description', 72)  ?></p>
				    <span class="portfolio_content_separator"></span>
				  <?php } ?>
				</div>
				<div class="portfolio_content portfolio_container archive_container">
				<?php
				while ( have_posts() ) : the_post();

					?>
					<div class="card_post">
						<div class="card_post_preview">
							<a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
							<div class="card_post_preview_overlay">
    						<div class="card_post_preview_overlay_text">Scopri di più</div>
  						</div></a>
						</div>
						<p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
					</div>
					<?php

				endwhile;

				generate_content_nav( 'nav-below' );

			else :

				get_template_part( 'no-results', 'archive' );

			endif;

			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>

	<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );
echo '</div>';
get_footer();
