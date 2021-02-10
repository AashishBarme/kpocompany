<div class="col-xl-12 col-md-12">
    <div class="single_service text-center">
    	<div class="icon">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
    	</div>
        <h3><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_content(),20,'...'); ?></p>
        <a href="<?php the_permalink(); ?>" class="boxed-btn3-text">Learn More</a>
    </div>
</div>

