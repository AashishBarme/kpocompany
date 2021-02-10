<?php
/*
* Template Name: Career
*/
get_header(); 
get_template_part('template-parts/extras/breadcumb'); ?>
<section class="job_listing_section">
	<div class="container">
		<div class="row">
			<?php
                    $args = array(
                            'post_type' => 'career',
                            'post_status' => 'publish'
                        );
                    $careerQuery = new WP_Query($args);
                    if($careerQuery->have_posts()): while($careerQuery->have_posts()): $careerQuery->the_post(); ?>
                    	
                    	<div class="col-md-4">
	         				<div class="card">
							  <h5 class="card-header job-type"><?php kpocompany_custom_job_type($post->ID); ?></h5>
							  <div class="card-body">
							    <h5 class="card-title"><?php the_title(); ?></h5>
							    <p class="card-text"><?php echo wp_trim_words(get_the_content(),10,'...'); ?></p>
							    <a href="<?php the_permalink(); ?>" class="btn btn-primary">View More</a>
							  </div>
							</div>
						</div>

			<?php endwhile;
					endif; 
					wp_reset_postdata();?>
		</div>
	</div>
</section>
<?php get_footer(); ?>