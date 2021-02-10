<?php get_header(); ?>


    <div class="shap_big_2 d-none d-lg-block">
        <img src="<?php echo home_url(); ?>/wp-content/themes/kpocompany/img/ilstrator/body_shap_2.png" alt="">
    </div>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="shap_img_1 d-none d-lg-block">
            <img src="<?php echo home_url(); ?>/wp-content/themes/kpocompany/img/ilstrator/body_shap_1.png" alt="">
        </div>
        <div class="poly_img">
            <img src="<?php echo home_url(); ?>/wp-content/themes/kpocompany/img/ilstrator/poly.png" alt="">
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="slider_text text-center">
                            <div class="text">
                                <h3>
                                   <?php echo kpocompany_main_page_banner()->title; ?>
                                </h3>
                            <a class="boxed-btn3" href="#service_area">Get Started</a>
                            </div>
                            <div class="ilstrator_thumb">
                                <img src="<?php echo kpocompany_main_page_banner()->image; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area  -->
    <div class="service_area" id="service_area">
        <div class="container">
            <div class="row">
                 <div class="case_active owl-carousel">
                    <?php kpocompany_home_services_section(); ?>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->

    <!-- compapy_info  -->
    <div class="compapy_info">
        <div class="container">
            <div class="row">
                <?php kpocompany_home_aboutus_section(); ?>
            </div>
        </div>
    </div>
    <!--/ compapy_info  -->


    <!-- accordion_area  -->
    <div class="accordion_area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-6 col-lg-6">
                    <div class="faq_ask">
                        <h3>Why Choose Us</h3>
                            <div id="accordion">
                                <?php kpocompany_home_faq_section(); ?>
                            </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="accordion_thumb">
                        <img src="<?php echo home_url(); ?>/wp-content/themes/kpocompany/img/banner/accordion.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--/ accordion_area  -->



<?php get_footer(); ?>