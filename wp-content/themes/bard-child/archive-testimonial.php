<?php
/**
 * The template for displaying Testimonials archive
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
			<h2><span class="title-prefix">A Busy Woman </span><?php echo str_replace('Archives: ','',get_the_archive_title()); ?></h2>
		<section class="testimonials">
			<div class="site-content">
				<ul class="testimonials">
				<?php query_posts('post_type=testimonial'); ?>
				<?php while ( have_posts() ) : the_post();
				?>
					<li class="individual-testimonial">
						<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
						<?php the_content(); ?>
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
