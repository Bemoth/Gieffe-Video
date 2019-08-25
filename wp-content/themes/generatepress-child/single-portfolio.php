<?php
/**
 * The Template for displaying all single album.
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
			do_action( 'generate_before_main_content' );

			if(have_posts()) {
        the_post();
      }?>
<div class="portfolio_visual" style="background-image: url('<?php echo the_post_thumbnail_url('full') ?>')">
  <h1><?php the_title(); ?></h1>
</div>
<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
<div class="portfolio_content portfolio_container">
    <?php the_content(); ?>
    <span class="portfolio_content_separator"></span>
</div>
<div class="portfolio_album portfolio_container">
		<?php echo do_shortcode(get_field('album_shortcode'));  ?>
</div>
<?php get_footer(); ?>
