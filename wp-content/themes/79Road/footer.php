        <footer class="footer_area">
            <div class="footer-main">
                <div class="container">
                    <div class="row">               
                        <div class="col-lg-3 col-md-5 col-12 mb-md-0 mb-4">
                            <div class="single_ftr">
                                <img class="mb-4" src="<?php echo bloginfo('template_directory');?>/img/logo-79road.png">
                                <ul>
                                    <li><i class="fa fa-home" aria-hidden="true"></i>&nbsp&nbsp 342 Lê Hồng Phong Nha Trang</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp&nbsp (+123) 685 78</li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp&nbsp 79roadshop.vn@gmail.com</li>
                                </ul>
                            </div>
                        </div> <!--  End Col -->
                        
                        <div class="col-lg-9 col-md-7 col-12">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                    <div class="single_ftr">
                                        <h4 class="sf_title">DỊCH VỤ KHÁCH HÀNG</h4>
                                        <?php
                                            $args = array(
                                                'theme_location' => 'footer-menu',
                                                'container' => '',
                                                'menu_id' => '',
                                                'menu_class' => '',
                                            );
                                            wp_nav_menu( $args );
                                        ?>
                                    </div>
                                </div> <!--  End Col -->    
                                
                                <div class="col-lg-6 col-12 mb-md-0 mb-4">
                                    <div class="single_ftr">
                                        <h4 class="sf_title">LIKE & FOLLOW TRÊN MẠNG XÃ HỘI</h4>
                                        <div class="ftr_social_icon text-left mb-4">
                                            <?php dynamic_sidebar( 'social' ); ?>
                                        </div>
                                        <div class="newsletter_form">
                                            <p class="font-weight-bold">ĐĂNG KÝ NHẬN TIN</p>
                                            <?php echo do_shortcode('[contact-form-7 id="123" title="Form liên hệ footer"]'); ?>
                                        </div>
                                    </div>
                                </div> <!--  End Col -->
                            </div>
                        </div>
                    </div>
                </div>
        
            
                <div class="ftr_btm_area">
                    <div class="container">
                        <div class="row">
                            <!-- <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-2">
                                <div class="ftr_social_icon text-lg-left text-center">
                                    <?php dynamic_sidebar( 'social' ); ?>
                                </div>
                            </div> -->
                            <div class="col-12 mb-lg-0 mb-3">
                                <p class="copyright_text text-center">&copy; 2020 All Rights Road 79 Shop</p>
                            </div>
                            
                            <!-- <div class="col-lg-4 col-md-12 col-12">
                                <div class="payment_mthd_icon text-lg-right text-center">
                                    <ul>
                                        <li><i class="fab fa-paypal"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></i></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--  FOOTER END  -->

        <script src="<?php echo bloginfo('template_directory');?>/js/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<!--         <script src="https://cdn.jsdelivr.net/gh/igorlino/elevatezoom-plus@1.2.3/src/jquery.ez-plus.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script> -->
        <script src="<?php echo bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/jquery.meanmenu.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/jquery.mixitup.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/jquery.counterup.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/waypoints.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/wow.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/venobox.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/simplePlayer.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/slick.min.js"></script>

        <script src="<?php echo bloginfo('template_directory');?>/js/main.js"></script>
    </body>
</html>
<?php wp_footer(); ?>