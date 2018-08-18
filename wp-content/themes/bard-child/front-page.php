<?php get_header(); ?>
		<div class="main-content" role="main">
			<div class="page-body">
			<?php while ( have_posts() ) : the_post();
			$featured_image = get_field('featured_image');
	    $size = "medium";
			$callout = get_field('callout');
			$subheader = get_field('subheader');
			$section_1_image = get_field('section_1_image');
			$section_header_one = get_field('section_header_one');
			$philosophy = get_field('philosophy');
			$section_2_image = get_field('section_2_image');
			$section_header_two = get_field('section_header_two');
			$bullet_1 = get_field('section_2_bullet_1');
			$bullet_2 = get_field('section_2_bullet_2');
			$bullet_3 = get_field('section_2_bullet_3');
			$section_header_three = get_field('section_header_3');
	  	?>
		<div class="intro-div">
			<figure id="featured-image">
					<?php if($featured_image){
					 echo wp_get_attachment_image( $featured_image, $size );
					 } ?>
			</figure>
		<div id="featured-quote">
				<h4 id="homepage-callout"><?php if($callout){
		    echo $callout;
		  } ?></h4>
	  </div>
		<div id="support-text">
				<p><?php if($subheader){
		    echo $subheader;
		  } ?></p>
	  </div>
		<a class="button" href="<?php echo site_url('/contact-us/') ?>">Get More Information</a>
	</div>
	<div class="about-us-block">
	<div id="philosophy">
		<figure class="home-icon icon-right"><?php if($section_1_image){
		 echo wp_get_attachment_image( $section_1_image, $size );
		 } ?>
	 </figure>
		<div class="section-text left-text">
		<h4 class="section-title"><?php if($section_header_one){
			echo $section_header_one;
		} ?></h4>
			<p><?php if($philosophy){
			echo $philosophy;
		} ?></p>
	</div>
	</div>
	<div id="expertise">
		<figure class="home-icon icon-left">
		<?php if($section_2_image){
		 echo wp_get_attachment_image( $section_2_image, $size );
		 } ?>
	 </figure>
		<div class="section-text right-text">
		<h4 class="section-title"><?php if($section_header_two){
			echo $section_header_two;
		} ?></h4>
		 <ul id="expertise-list">
			 <li><?php if($bullet_1){
 			echo $bullet_1;
 		} ?></li>
		   <li><?php if($bullet_2){
	    echo $bullet_2;
    } ?></li>
		  <li><?php if($bullet_3){
	    echo $bullet_3;
    } ?></li>
	</ul>
  </div>
	</div>
</div>
<h4 class="section-title"><?php if($section_header_three){
	echo $section_header_three;
} ?></h4>
	<?php echo do_shortcode('[testimonial_rotator id="293"]'); ?>
	<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
	</div><!--.page-body -->
	</div><!-- .main-content -->

<?php get_footer(); ?>
