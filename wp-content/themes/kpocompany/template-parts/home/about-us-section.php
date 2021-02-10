<div class="col-xl-5 col-md-5">
    <div class="man_thumb">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
    </div>
</div>
<div class="col-xl-7 col-md-7">
    <div class="company_info">
        <h3><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_content(),50, '...'); ?></p>
        <a href="<?php the_permalink(); ?>" class="boxed-btn3">Read More</a>
    </div>
</div>