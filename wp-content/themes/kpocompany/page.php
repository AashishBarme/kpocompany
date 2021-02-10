<?php 
get_header(); 
		// Start the loop.
		while ( have_posts() ) : the_post(); 
		get_template_part('template-parts/content','page'); 
		endwhile;
		wp_reset_postdata();

get_footer(); ?>