    <?php get_template_part('template-parts/extras/breadcumb'); ?>
<!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php the_title(); ?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><?php the_category(', '); ?></li>
                        <li><?php echo get_the_date(); ?></li>
                     </ul>
                     <?php the_content(); ?>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">           
                     <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                     </ul>
                  </div>
                 <?php get_template_part('template-parts/extras/prev-next'); ?>
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
   <!--================ Blog Area end =================-->