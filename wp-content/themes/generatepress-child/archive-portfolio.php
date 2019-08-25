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

			if ( have_posts() && is_post_type_archive()) :

				/**
				 * generate_archive_title hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_archive_title - 10
				 */
				?>
				<div class="archive_portfolio_visual portfolio_visual" style="background-image: url('<?php echo get_field('archive_visual', 72) ?>')">
				  <h1><?php echo get_field('archive_title', 72) ?></h1>
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
				global $post;
$terms = wp_get_post_terms( $post->ID, 'album');
					?>
					<div class="card_post">
						<div class="card_post_preview">
							<a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
							<div class="card_post_preview_overlay">
    						<div class="card_post_preview_overlay_text">Scopri di più</div>
  						</div></a>
						</div>
						<p class="card_post_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br><span class="card_post_category"><i>

							<?php

							if ( $terms != null ){
								foreach( $terms as $term ) {
								$term_link = get_term_link( $term, 'categoria' );

									echo '<a href="' . $term_link . '">' . $term->name . ' </a> ';

								 // Print the name and URL

								// Get rid of the other data stored in the object, since it's not needed
								unset($term); } } ?></i></span></p>
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
