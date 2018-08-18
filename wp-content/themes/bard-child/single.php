<?php get_header( 'all'); ?>

<!-- Page Content -->
<div class="main-content clear-fix<?php echo ( bard_options( 'general_single_width' ) === 'boxed'  ) ? ' boxed-wrapper': ''; ?>" data-sidebar-sticky="<?php echo esc_attr( bard_options( 'general_sidebar_sticky' )  ); ?>">

	<!-- Main Container -->
	<div class="main-container post-container">

		<?php

		// Single Post
		get_template_part( 'templates/single/post', 'content' );

		// Author Description
		if ( bard_options( 'single_page_show_author_desc' ) === true ) {
			get_template_part( 'templates/single/author', 'description' );
		}

		// Single Navigation
		get_template_part( 'templates/single/single', 'navigation' );

		// Related Posts
		bard_related_posts( esc_html__( 'You May Also Like','bard' ), bard_options( 'single_page_related_orderby' ) );

		// Comments
		get_template_part( 'templates/single/comments', 'area' );

		?>

	</div><!-- .main-container -->

</div><!-- .page-content -->

<?php get_footer(); ?>
