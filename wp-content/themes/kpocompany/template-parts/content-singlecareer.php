    <?php get_template_part('template-parts/extras/breadcumb'); ?>
<!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 posts-list">
               <div class="single-post">
                  <div class="blog_details">
                     <?php the_content(); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
      <div class="container">
                <div class="pro_border">
                        <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="lets_projects">
                                       <h3>Please send us an email to  <a href="mailto:<?php echo kpocompany_career_single_contact_details()->mail; ?>"><?php echo kpocompany_career_single_contact_details()->mail; ?></a>  to apply for the job. We will get to you shortly.
                                        </h3>
                                    </div>
                                </div>
                               <!--  <div class="col-xl-6 col-md-6">
                                    <div class="phone_number">
                                        <h3><?php //echo kpocompany_career_single_contact_details()->number; ?></h3>
                                        <a href="mailto:<?php //echo kpocompany_career_single_contact_details()->mail; ?>"><?php// echo kpocompany_career_single_contact_details()->mail; ?></a>
                                    </div>
                                </div> -->
                            </div>
                </div>
            </div>