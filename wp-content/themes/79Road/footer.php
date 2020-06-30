        <footer class="footer_area">
            <div class="footer-main">
                <div class="container">
                    <div class="row">               
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="single_ftr">
                                <img class="mb-4" src="<?php echo bloginfo('template_directory');?>/img/logo-79road.png">
                                <ul>
                                    <li><i class="fa fa-home" aria-hidden="true"></i>&nbsp&nbsp 342 Lê Hồng Phong Nha Trang</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp&nbsp (+123) 685 78</li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp&nbsp 79roadshop.vn@gmail.com</li>
                                </ul>
                            </div>
                        </div> <!--  End Col -->
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="single_ftr">
                                <h4 class="sf_title">Information</h4>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div> <!--  End Col -->
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="single_ftr">
                                <h4 class="sf_title">Services</h4>
                                <ul>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div> <!--  End Col -->    
                        
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="single_ftr">
                                <h4 class="sf_title">Newsletter</h4>
                                <div class="newsletter_form">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
                                    <form method="post" class="form-inline">                
                                        <input name="EMAIL" id="email" placeholder="Enter Your Email" class="form-control" type="email">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div> <!--  End Col -->
                        
                    </div>
                </div>
        
            
                <div class="ftr_btm_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="ftr_social_icon">
                                    <?php dynamic_sidebar( 'social' ); ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <p class="copyright_text text-center">&copy; 2020 All Rights Road 79 Shop</p>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="payment_mthd_icon text-right">
                                    <ul>
                                        <li><i class="fab fa-paypal"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--  FOOTER END  -->

        <script src="<?php echo bloginfo('template_directory');?>/js/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/jquery.meanmenu.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/jquery.mixitup.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/jquery.counterup.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/waypoints.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/wow.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/venobox.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/simplePlayer.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/main.js"></script>
    </body>
</html>
<?php wp_footer(); ?>