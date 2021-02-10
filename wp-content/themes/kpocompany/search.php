<?php get_header(); ?>
    <section class="bradcam_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3 class="nobreadcumb-page-title"><?php printf( __( 'Search Results for: %s', 'bestproduct' ), '<span class="hover-hed">' . esc_html( get_search_query() ) . '</span>' ); ?></h1>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    	<?php  if (have_posts())  { while (have_posts()) { the_post();  ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?php echo get_the_date('d'); ?></h3>
                                    <p><?php echo get_the_date('M'); ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <p> <?php echo wp_trim_words(get_the_content(),20,'...'); ?></p>
                                <?php the_category(', '); ?>
                                
                            </div>
                        </article>

                         <?php }}  
                    wp_reset_postdata();
                    ?>
                    <?php
                    the_posts_pagination( array(
                        'aria_label'         => __( 'Posts' ),
                        'prev_text'          => __( '<i class="fa fa-angle-left"></i>', 'kpocompany' ),
                        'next_text'          => __( '<i class="fa fa-angle-right"></i>', 'kpocompany' ),
                    ) );  ?>
                    </div>
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