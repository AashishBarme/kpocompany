<?php get_header(); 
	
	get_template_part('template-parts/extras/breadcumb'); ?>
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <?php if(have_posts()): ?>
                    <div class="blog_left_sidebar">
                    	<?php      if (have_posts())  { while (have_posts()) { the_post();  ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <a href="<?php the_permalink(); ?>">
                                <img class="card-img rounded-0" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </a>
                                <a class="blog_item_date">
                                    <h3><?php echo get_the_date('d'); ?></h3>
                                    <p><?php echo get_the_date('M'); ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <p> <?php echo wp_trim_words(get_the_content(),20,'...'); ?></p>
                                <ul class="blog-info-link">
                                    <li>
                                        <?php the_category(', '); ?>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    <?php }}  
                    wp_reset_postdata();
                    ?>
                    <?php
                    the_posts_pagination( array(
                        'aria_label'         => __( 'Posts' ),
                        'prev_text'    => __('« prev'),
                        'next_text'    => __('next »'),
                    ) );  
                    //twentynineteen_the_posts_navigation();?>
                    </div>
                <?php endif; ?>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                    	<?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<?php get_footer(); ?>