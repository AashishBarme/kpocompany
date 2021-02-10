    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <?php if(is_active_sidebar('footer-widget-1')):
                                     dynamic_sidebar('footer-widget-1');
                                 endif; ?>
                        </div>
                        <div class="col-xl-4 col-md-4 col-lg-4">
                           <?php if(is_active_sidebar('footer-widget-2')):
                                    dynamic_sidebar('footer-widget-2');
                                endif;
                                ?>
                        </div>
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <?php if(is_active_sidebar('footer-widget-3')):
                                    dynamic_sidebar('footer-widget-3');
                                endif;
                                ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
<?php wp_footer(); ?>
        </footer>
</body>

</html>