<?php  

	add_theme_support( 'post-thumbnails' );
	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' ); 
	add_theme_support( 'wc-product-gallery-lightbox' ); 
	 add_theme_support( 'wc-product-gallery-slider' ); 
	add_image_size( 'custom-size', 100, 100, true );


	//convert svg
	function add_file_types_to_uploads($file_types){
		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );
		return $file_types;
	}
	add_action('upload_mimes', 'add_file_types_to_uploads');

	//add menu
	add_theme_support('menus');
	function register_my_menus() {
		$args = array( 
			'main-menu' => __( 'Main Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
		);
		register_nav_menus( $args );
		}
	add_action( 'init', 'register_my_menus' ); 

	//hook class active li in menu
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
	function special_nav_class ($classes, $item) {
	    if (in_array('current-menu-item', $classes) ){
	        $classes[] = 'active ';
	    }
	    return $classes;
	}

	//add wigets
    function php_text($text) {
	 	if (strpos($text, '<' . '?') !== false) {
	    ob_start();
	    eval('?' . '>' . $text);
	    $text = ob_get_contents();
	    ob_end_clean();
	 }
	 return $text;
	 }
	add_filter('widget_text', 'php_text', 99);


	if (function_exists('register_sidebar')) {
	    register_sidebar(array(
	        'name' => 'Phương thức đổi trả',
	        'id'   => 'Phuong-thuc-doi-tra',
	        'description'   => 'This is a widgetized area.',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4>',
	        'after_title'   => '</h4>'
	    ));
	}
	if (function_exists('register_sidebar')) {
	    register_sidebar(array(
	        'name' => 'Giao hàng trên toàn quốc',
	        'id'   => 'giao-hang-tren-toan-quoc',
	        'description'   => 'This is a widgetized area.',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4>',
	        'after_title'   => '</h4>'
	    ));
	}
	if (function_exists('register_sidebar')) {
	    register_sidebar(array(
	        'name' => 'Hỗ trợ trực tuyến',
	        'id'   => 'Ho-tro-truc-tuyen',
	        'description'   => 'This is a widgetized area.',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4>',
	        'after_title'   => '</h4>'
	    ));
	}
	if (function_exists('register_sidebar')) {
	    register_sidebar(array(
	        'name' => 'Social',
	        'id'   => 'social',
	        'description'   => 'This is a widgetized area.',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4>',
	        'after_title'   => '</h4>'
	    ));
	}
	if (function_exists('register_sidebar')) {
	    register_sidebar(array(
	        'name' => 'Contact Info',
	        'id'   => 'contact-info',
	        'description'   => 'This is a widgetized area.',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4>',
	        'after_title'   => '</h4>'
	    ));
	}

	//create post type services
	function  create_posttype()
	{
		$args = array(
	      'label' => 'Slide',//name of post type Slide
	        'public' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'slide'),
	        'query_var' => true,
	        'menu_icon' => 'dashicons-format-gallery',
	        'taxonomies' => array( 'category', 'post_tag' ,),
	        'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'trackbacks',
	            'custom-fields',
	            'comments',
	            'revisions',
	            'thumbnail',
	            'author',
	            'page-attributes',)
	        );
		register_post_type( 'slide', $args );
		$args = array(
	      'label' => 'Testimonials',//name of post type Testimonials
	        'public' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'testimonials'),
	        'query_var' => true,
	        'menu_icon' => 'dashicons-format-quote',
	        'taxonomies' => array( 'category', 'post_tag' ,),
	        'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'trackbacks',
	            'custom-fields',
	            'comments',
	            'revisions',
	            'thumbnail',
	            'author',
	            'page-attributes',)
	        );
		register_post_type( 'testimonials', $args );	
		$args = array(
	      'label' => 'Services',//name of post type Services
	        'public' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'services'),
	        'query_var' => true,
	        'menu_icon' => 'dashicons-list-view',
	        'taxonomies' => array( 'category', 'post_tag' ,),
	        'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'trackbacks',
	            'custom-fields',
	            'comments',
	            'revisions',
	            'thumbnail',
	            'author',
	            'page-attributes',)
	        );
		register_post_type( 'services', $args );				
	}
	add_action('init', 'create_posttype');

	//create taxonomy post type Slide
	function slide_taxonomy() {
        $labels = array(
                'name' => 'Slide Category',
                'singular' => 'Slide Category',
                'menu_name' => 'Slide Category'
        );
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
        register_taxonomy('slide-category', 'slide', $args);   
    }
    add_action( 'init', 'slide_taxonomy' );
	//create taxonomy post type Testimonials
	function testimonials_taxonomy() {
        $labels = array(
                'name' => 'Testimonials Category',
                'singular' => 'Testimonials Category',
                'menu_name' => 'Testimonials Category'
        );
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
        register_taxonomy('testimonials-category', 'testimonials', $args);   
    }
    add_action( 'init', 'testimonials_taxonomy' );
    //create taxonomy post type Services
	function services_taxonomy() {
        $labels = array(
                'name' => 'Services Category',
                'singular' => 'Services Category',
                'menu_name' => 'Services Category'
        );
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
        register_taxonomy('services-category', 'services', $args);   
    }
    add_action( 'init', 'services_taxonomy' );

	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

	/*--------------------------------------------------
	Ajax get total cart refesh
	---------------------------------------------------*/
	add_filter( 'woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment', 30, 1 );
	function header_add_to_cart_fragment( $fragments ) {
	    global $woocommerce;
	    ob_start();
	    ?>
	    <span class="aa-cart-notify"><?php echo sprintf(_n('%d ', '%d ', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
	    <?php
	    $fragments['span.aa-cart-notify'] = ob_get_clean();

	   return $fragments;
	}

	/*--------------------------------------------------
	Add mini cart
	---------------------------------------------------*/
	add_filter( 'woocommerce_add_to_cart_fragments', 'wc_mini_cart_ajax_refresh' );
	function wc_mini_cart_ajax_refresh( $fragments ){
	    global $woocommerce;
	    ob_start();
	    ?>
		<div class="aa-cartbox-summary">
			<?php if ( WC()->cart->is_empty() ) { ?>
		        No items added
		    <?php } else { ?>
			<ul>
		        <?php $cart = WC()->cart->get_cart();
		        foreach ($cart as $cart_item_key => $item) {
		        $_product = $item['data']->post;
		        $price = $item['data']->price;
		        if($_SESSION['carts'][$item['product_id']]['option'] == 1) 
		          $price = get_post_meta($item['product_id'] , '_price', true);
		        ?>
		        <li>
		        	<div class="aa-cartbox-info">
                        <h4><?php $name = $_product->post_title; if(!empty($_SESSION['carts'][$item['product_id']]['option-name'])){
		            $name .= "-".$_SESSION['carts'][$item['product_id']]['option-name'];
		          }?><?php echo $name; ?></h4>
                        <p><?php echo $item['quantity'] ?> x <?php echo "$".$price; ?></p>
                    </div>
		            <div  class="btn-remove"><a href="<?php echo esc_url( WC()->cart->get_remove_url( $cart_item_key ) ); ?>" class="item_remove aa-remove-product"><span class="fa fa-times">X</span></a></div>
		        </li>
		        <?php } ?>
		    </ul>
		    <div class="cart-mini-bottom">
				<div class="item-cart">
					<p class="name">Sub Total</p>
					<p><?php echo WC()->cart->get_cart_subtotal(); ?></p>
				</div>
		    </div> 
		    <div class="checkout-mini">
		        <div class="button-cart">
		            <a href="<?php echo WC_Cart::get_cart_url(); ?>">View Cart</a>
		        </div>
		         <div class="button-cart">
		            <a href="<?php echo WC_Cart::get_checkout_url(); ?>">Check out</a>
		        </div>
		      </div> 
		  	<?php } ?>
		</div>
		<?php
		$fragments['div.aa-cartbox-summary'] = ob_get_clean(); 
		return $fragments;
	}

