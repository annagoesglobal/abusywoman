<?php
/**
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: History Page
 *
 * @package WordPress
 * @subpackage A Busy Woman
 * @since A Busy Woman 1.0
 */

get_header('all'); ?>

<div id="primary" class="site-content">
	<div class="main-content history" role="main">
		<div class="page-body">
		<?php while ( have_posts() ) : the_post();
		$history_featured_image = get_field('history_featured_image');
		$size = 'medium';
		?>
		<h2><span class="title-prefix">A Busy Woman </span><?php the_title(); ?></h2>
		<figure id="history-featured-image">
				<?php if($history_featured_image){
				 echo wp_get_attachment_image( $history_featured_image, $size );
				 } ?>
		</figure>
		<div class="history-text">
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	  </div>
		</div><!--.page-body -->
	</div><!-- .main-content -->


</div><!-- #primary -->

<?php get_footer(); ?>
