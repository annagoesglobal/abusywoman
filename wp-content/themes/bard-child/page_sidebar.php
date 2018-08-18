<?php
/**
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: Page With Sidebar
 *
 * @package WordPress
 * @subpackage A Busy Woman
 * @since A Busy Woman 1.0
 */

get_header('all'); ?>

<div class="main-content clear-fix<?php echo esc_attr(bard_options( 'general_content_width' )) === 'boxed' ? ' boxed-wrapper': ''; ?>" data-sidebar-sticky="<?php echo esc_attr( bard_options( 'general_sidebar_sticky' )  ); ?>">

	<?php

	// Sidebar Left
	get_template_part( 'templates/sidebars/sidebar', 'left' );

	?>

	<!-- Main Container -->
	<div class="main-container">

		<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php

			if ( have_posts() ) :

			// Loop Start
			while ( have_posts() ) : the_post();

				if ( has_post_thumbnail() ) {
					echo '<div class="post-media">';
						the_post_thumbnail('bard-full-thumbnail');
					echo '</div>';
				}

				if ( get_the_title() !== '' ) {
					echo '<header class="post-header">';
						echo '<h1 class="page-title">'. get_the_title() .'</h1>';
					echo '</header>';
				}

				echo '<div class="post-content">';
					the_content('');

					// Post Pagination
					$defaults = array(
						'before' => '<p class="single-pagination">'. esc_html__( 'Pages:', 'bard' ),
						'after' => '</p>'
					);

					wp_link_pages( $defaults );
				echo '</div>';

			endwhile; // Loop End

			endif;

			?>

		</article>

		<?php get_template_part( 'templates/single/comments', 'area' ); ?>

	</div><!-- .main-container -->

	<?php

	// Sidebar Right
	get_template_part( 'templates/sidebars/sidebar', 'right' );

	?>

</div><!-- .page-content -->

<?php get_footer(); ?>
