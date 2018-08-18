<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
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
		<?php endwhile; // end of the loop. ?>
<section class="featured-work">
	<div class="site-content">
		<ul class="history-featured-work">
		<?php query_posts('post_parent=11&post_type=page&order=ASC'); ?>
		<?php while ( have_posts() ) : the_post();
			$history_featured_image = get_field("history_featured_image");
			$size = "medium";
		?>
			<li class="individual-featured-work">
				<figure>
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($history_featured_image, $size); ?></a>
				</figure>
				<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
			</li>
		 <?php endwhile; ?>
		 <?php wp_reset_query(); ?>
	 </ul>
	</div>
</section>
</div><!--.page-body -->
</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>
