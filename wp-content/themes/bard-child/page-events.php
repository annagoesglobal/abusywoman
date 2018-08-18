<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.

 * @package WordPress
 * @subpackage A Busy Woman
 * @since A Busy Woman 1.0
 */

get_header('all'); ?>

<div id="primary" class="site-content">
	<div class="main-content" role="main">
		<div class="page-body">
		<?php while ( have_posts() ) : the_post(); ?>
		<h2><span class="title-prefix">A Busy Woman </span><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
			<?php echo do_shortcode("[FinalTilesGallery id='2']"); ?>
		<?php endwhile; // end of the loop. ?>
		</div><!--.page-body -->
	</div><!-- .main-content -->


</div><!-- #primary -->

<?php get_footer(); ?>
