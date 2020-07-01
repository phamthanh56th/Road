<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>79 Road Shop</title>
    <link rel="icon" type="image/png" href="<?php echo bloginfo('template_directory');?>/img/favicon/79road.ico"/>
    <!-- <link rel="icon" type="image/png" href="https://example.com/favicon.png"/> -->
    <title><?php wp_title(); ?></title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800" rel="stylesheet">  -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">  
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/animate.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/meanmenu.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/venobox.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/fonts/fontawesome-pro/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/bootstrap.min.css" />  
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/responsive.css?v=<?php echo time(); ?>" /> 
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/customsize.css?v=<?php echo time(); ?>" />
</head>
<?php wp_head(); ?>
    <body <?php echo body_class( '' ); ?>>
    
        <!--  Preloader  -->
        <!-- <div class="preloader">
            <div class="status-mes">
                <div class="bigSqr">
                    <div class="square first"></div>
                    <div class="square second"></div>
                    <div class="square third"></div>
                    <div class="square fourth"></div>
                </div>
                <div class="text_loading text-center">loading</div>
            </div>
        </div> -->
        
        <!--  Start Header  -->
        <header id="header_area">
            <div class="header_top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 d-md-block d-none">
                            <div class="hdr_tp_left">
                                <!-- <div class="call_area">
                                    <span class="single_con_add"><i class="fa fa-phone"></i> +0123456789</span>
                                    <span class="single_con_add"><i class="fa fa-envelope"></i> example@gmail.com</span>
                                </div> -->
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-md-6 col-12">
                            <ul class="hdr_tp_right text-md-right text-center">
                                <!-- <li class="account_area"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="fa fa-lock"></i> My Account</a></li>
                                <li class="lan_area"><a href="#"><i class="fa fa-language "></i> Language <i class="fa fa-caret-down"></i></a>
                                    <ul class="csub-menu">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Portuguese</a></li>
                                    </ul>
                                </li>
                                <li class="currency_area"><a href="#"><i class="fa fa-gg "></i> $USD <i class="fa fa-caret-down"></i></a>
                                    <ul class="csub-menu">
                                        <li><a href="#">€Euro</a></li>
                                        <li><a href="#">৳BDT</a></li>       
                                    </ul>                               
                                </li> -->
                                <li class="pr-1"><i class="fab fa-facebook-f" aria-hidden="true"></i></li>
                                <li class="pr-1"><i class="fab fa-instagram" aria-hidden="true"></i></li>
                                <li class="pr-1"><i class="fab fa-youtube" aria-hidden="true"></i></li>
                                <li class="ml-3"><i class="fa fa-phone"></i>&nbsp&nbsp +0123456789</li>
                                <li><i class="fa fa-envelope"></i>&nbsp&nbsp example@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!--  HEADER START  -->
            
            <div class="header_btm_area">
                <div class="container-fluid">
                    <div class="row">      
                        <div class="col-xs-12 col-sm-12 col-md-12 d-md-block d-none text-left">
                            <a class="logo" href="<?php echo esc_url(home_url('')); ?>"> <img alt="" src="<?php echo bloginfo('template_directory');?>/img/logo-79road.png"></a> 
                            <div class="menu_wrap text-right">
                                <div class="main-menu">
                                    <nav>
                                        <?php
                                            $args = array(
                                                'theme_location' => 'main-menu',
                                                'container' => '',
                                                'menu_id' => '',
                                                'menu_class' => 'nav navbar-nav',
                                            );
                                            wp_nav_menu( $args );
                                        ?>    
                                    </nav>
                                </div> <!--  End Main Menu -->    
                                <div class="right_menu">
                                    <ul class="nav justify-content-end">
                                        <li>
                                            <div class="search_icon">
                                                <i class="fa fa-search search_btn" aria-hidden="true"></i>
                                                <div class="search-box">
                                                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                        <div class="input-group">
                                                            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control"  placeholder="enter keyword"/>              
                                                            <button type="submit" id="searchsubmit" class="btn btn-default"><i class="fa fa-search"></i></button>     
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </li>    
                                        <!-- <li class="cart">
                                             <?php //woocommerce_mini_cart();  ?>
                                        </li>  -->                                    
                                        <!-- <li>
                                            <div class="cart_menu_area">
                                                <div class="cart_icon">
                                                    <a href="#"><i class="fa fa-shopping-bag " aria-hidden="true"></i></a>
                                                    <span class="cart_number">2</span>
                                                </div>
                                                
                                                <div class="mini-cart-wrapper">
                                                    <div class="mc-pro-list fix">
                                                        <div class="mc-sin-pro fix">
                                                            <a href="#" class="mc-pro-image float-left"><img src="<?php //echo bloginfo('template_directory');?>/img/mini-cart/1.jpg" alt="" /></a>
                                                            <div class="mc-pro-details fix">
                                                                <a href="#">This is Product Name</a>
                                                                <span>1x$25.00</span>
                                                                <a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="mc-sin-pro fix">
                                                            <a href="#" class="mc-pro-image float-left"><img src="<?php //echo bloginfo('template_directory');?>/img/mini-cart/2.jpg" alt="" /></a>
                                                            <div class="mc-pro-details fix">/
                                                                <a href="#">This is Product Name</a>
                                                                <span>1x$25.00</span>
                                                                <a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mc-subtotal fix">
                                                        <h4>Subtotal <span>$50.00</span></h4>
                                                    </div>
                                                    <div class="mc-button">
                                                        <a href="#" class="checkout_btn">checkout</a>
                                                    </div>
                                                </div>                                          
                                            </div>  
                                            
                                        </li> -->
                                    </ul>
                                </div>     
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 d-md-none d-block text-center pt-md-0 pt-3">
                            <a class="logo" href="<?php echo esc_url(home_url('')); ?>"> <img alt="" src="<?php echo bloginfo('template_directory');?>/img/logo-79road.png"></a> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 d-md-none d-block text-right">
                            <div class="menu_wrap text-right">                  
                                <div class="mobile-menu text-right ">
                                    <nav>
                                        <?php
                                            $args = array(
                                                'theme_location' => 'main-menu',
                                                'container' => '',
                                                'menu_id' => '',
                                                'menu_class' => '',
                                            );
                                            wp_nav_menu( $args );
                                        ?>
                                    </nav>
                                </div> <!--  End mobile-menu -->
                                
                                <div class="right_menu">
                                    <ul class="nav justify-content-end">
                                        <li>
                                            <div class="search_icon">
                                                <i class="fa fa-search search_btn" aria-hidden="true"></i>
                                                <div class="search-box">
                                                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                        <div class="input-group">
                                                            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control"  placeholder="enter keyword"/>              
                                                            <button type="submit" id="searchsubmit" class="btn btn-default"><i class="fa fa-search"></i></button>     
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </li>
                                        <!-- <li class="cart">
                                             <?php //woocommerce_mini_cart();  ?>
                                        </li>   -->                                      
                                        <!-- <li>
                                            <div class="cart_menu_area">
                                                <div class="cart_icon">
                                                    <a href="#"><i class="fa fa-shopping-bag " aria-hidden="true"></i></a>
                                                    <span class="cart_number">2</span>
                                                </div>
                                                
                                                <div class="mini-cart-wrapper">
                                                    <div class="mc-pro-list fix">
                                                        <div class="mc-sin-pro fix">
                                                            <a href="#" class="mc-pro-image float-left"><img src="<?php //echo bloginfo('template_directory');?>/img/mini-cart/1.jpg" alt="" /></a>
                                                            <div class="mc-pro-details fix">
                                                                <a href="#">This is Product Name</a>
                                                                <span>1x$25.00</span>
                                                                <a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="mc-sin-pro fix">
                                                            <a href="#" class="mc-pro-image float-left"><img src="<?php //echo bloginfo('template_directory');?>/img/mini-cart/2.jpg" alt="" /></a>
                                                            <div class="mc-pro-details fix">
                                                                <a href="#">This is Product Name</a>
                                                                <span>1x$25.00</span>
                                                                <a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mc-subtotal fix">
                                                        <h4>Subtotal <span>$50.00</span></h4>
                                                    </div>
                                                    <div class="mc-button">
                                                        <a href="#" class="checkout_btn">checkout</a>
                                                    </div>
                                                </div>                                          
                                            </div>  
                                            
                                        </li> -->
                                    </ul>
                                </div>                          
                            </div>
                        </div>                                   
                    </div>
                </div>
            </div>
        </header>
        <!--  End Header  -->