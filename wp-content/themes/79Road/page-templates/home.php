<?php 
    /*
        Template Name: Trang Chủ Template
    */ 
?>
<?php get_header(); ?>
<?php the_post(); ?> 
        <section id="slider_area" class="text-center">
            <div class="slider_active owl-carousel">
                <?php  
                    $args=array(
                        'post_type' => 'slide',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                    );
                ?>
                <?php $k =''; ?>
                <?php $my_query = new WP_Query($args); ?>
                <?php if( $my_query->have_posts() ) : ?>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php $k++; ?>   
                    <div class="single_slide" style="background-image: url(<?php the_post_thumbnail_url();?>); background-size: cover; background-position: center;">
                        <div class="container"> 
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-tablecell">
                                    <div class="slider_content <?php if($k%2 == 0) { echo "text-center slider-animated-1";} else {echo "text-center slider-animated-2";}; ?>">                        
                                        <!-- <p class="animated">Women fashion</p> -->
                                        <h1 class="animated"><?php the_title(); ?></h1>
                                        <?php if(!empty(get_the_content())): ?>
                                        <h4 class="animated"><?php the_content(); ?></h4>
                                        <?php endif; ?>
                                        <!-- <a href="#" class="btn main_btn animated">Xem thêm</a> -->
                                    </div>
                                </div>
                            </div>                      
                        </div>
                    </div>               
                <?php endwhile; wp_reset_postdata(); endif;  ?>
            </div>
        </section>
        <section class="process_area section_padding">
            <div class="container">
                <div class="row text-center">       
                    <div class="col-md-4 col-12">
                        <div class="single-process">
                            <div class="picon"><i class="fa fa-share"></i></div>
                            <div class="process_content">
                                <?php dynamic_sidebar( 'Phuong-thuc-doi-tra' ); ?>
                            </div>
                        </div>  
                    </div> 
                    <div class="col-md-4 col-12">
                        <div class="single-process">
                            <div class="picon"><i class="fa fa-plane"></i></div>
                            <div class="process_content">
                                <?php dynamic_sidebar( 'giao-hang-tren-toan-quoc' ); ?>
                            </div>
                        </div>  
                    </div>              
                    <div class="col-md-4 col-12">
                        <div class="single-process">
                            <div class="picon"><i class="fa fa-headphones "></i></div>
                            <div class="process_content">
                                <?php dynamic_sidebar( 'Ho-tro-truc-tuyen' ); ?>
                            </div>
                        </div>  
                    </div>        
                </div>
            </div>
        </section>
        <section id="promo_area" class="section_padding">
            <div class="container">
                <div class="row">
                    <?php 
                    $taxonomy = 'product_cat';
                    $term_args = array(
                        'post_type' => "product",
                        'hide_empty' => true,
                        'orderby' => 'slug',
                        'order' => 'ASC',
                        'taxonomy' => $taxonomy,
                        'parent' => 0,
                    );
                    $tax_terms = get_terms($taxonomy, $term_args);
                    foreach ($tax_terms as $key => $term) { 
                        $thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id ); ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">   
                        <a href="<?php echo get_term_link($term->term_id, $taxonomy); ?>">
                            <div class="single_promo">
                                <img src="<?php echo $image;?>" alt="">
                                <div class="box-content">
                                    <h3 class="title"><?php echo $term->name;?></h3>
                                    <!-- <span class="post">2018 Collection</span> -->
                                </div>
                            </div>
                        </a>                        
                    </div>                    
                    <?php } ?>
                </div>          
            </div>      
        </section>
        <section id="product_area" class="section_padding">
            <div class="container">     
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section_title">                     
                            <h2>Sản Phẩm <span>Yêu Thích</span></h2>
                            <div class="divider"></div>                         
                        </div>
                    </div>
                </div>            
                <div class="text-center">
                    <div class="product_filter">
                        <ul>
                            <li class=" active filter" data-filter="all">ALL</li>
                            <?php
                            $taxonomy = 'product_cat';
                            $term_args = array(
                                'post_type' => "product",
                                'hide_empty' => true,
                                'orderby' => 'slug',
                                'order' => 'ASC',
                                'taxonomy' => $taxonomy,
                                'parent' => 0,
                                // 'child_of' => 68
                                // 'pad_counts' => true
                            );
                            $tax_terms = get_terms($taxonomy, $term_args);
                            foreach ($tax_terms as $key => $term) { ?>
                            <li class="filter <?php echo $key; ?> <?php if($key==0) echo 'active'; ?>" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    
                    <div class="product_item">
                        <div class="row">   
                            <?php
                            $taxonomy = 'product_cat';
                            $term_args = array(
                                'post_type' => "product",
                                'hide_empty' => true,
                                'orderby' => 'slug',
                                'order' => 'ASC',
                                'taxonomy' => $taxonomy,
                                'parent' => 0,
                                // 'child_of' => 68
                                // 'pad_counts' => true
                            );
                            $tax_terms = get_terms($taxonomy, $term_args);
                            foreach ($tax_terms as $key => $term) { ?>
                            <?php
                                $args_post = array(
                                'post_type' => 'product',
                                'posts_per_page' => -1,
                                'orderby'=> 'date',
                                'order' => 'ASC',
                                'child_of'     => 0,
                                'parent'       => 0,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => $taxonomy,
                                        'field' => 'slug',
                                        'terms' => $term->slug,
                                        'include_children' => false
                                     )
                                  )
                                );
                                $query = new WP_Query( $args_post );
                                if ( $query->have_posts() ):
                                while ( $query->have_posts() ) : $query->the_post();
                                    $price = get_post_meta( get_the_ID(), '_regular_price', true);
                                    $pid = $post->ID;
                                    $product = new WC_Product( $pid );
                            ?>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mix <?php echo $term->slug; ?>">
                                <div class="single_product">
                                    <div class="product_image">
                                        <a href="<?php echo get_the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url( '' ); ?>" alt=""/>
                                        </a>
                                        <!-- <div class="new_badge">New</div> -->
                                        <div class="box-content">
                                            <!-- <a href="#"><i class="fa fa-heart-o"></i></a> -->
                                            <!-- <a href="#"><i class="fa fa-cart-plus"></i></a> -->
                                            <a href="<?php echo get_the_permalink(); ?>"><i class="fa fa-search"></i></a>
                                        </div>                                      
                                    </div>

                                    <div class="product_btm_text">
                                        <h4><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <!-- <div class="p_rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>                                       -->
                                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                                         <!-- <?php //echo do_shortcode( '[add_to_cart id=' . $id . ']' ) ?> -->
                                    </div>
                                </div>
                                
                            </div> <!-- End Col --> 
                            <?php endwhile; wp_reset_postdata(); endif; ?>

                           <?php } ?>
        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials" class="testimonials_area section_padding" style="background: url(<?php echo bloginfo('template_directory');?>/img/background-testimonials.jpg); background-size: cover; background-attachment: fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="testimonial-slider" class="owl-carousel">
                            <?php  
                                $args=array(
                                'post_type' => 'testimonials',
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'posts_per_page' => -1,
                                );
                            ?>
                            <?php $my_query = new WP_Query($args); ?>
                            <?php if( $my_query->have_posts() ) : ?>
                            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="testimonial"> 
                                <?php if(has_post_thumbnail('')) { ?>
                                <div class="pic">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <?php }else { ?>
                                <div class="pic">
                                    <img src="<?php echo bloginfo('template_directory');?>/img/user.png" alt="">
                                </div>
                                <?php } ?>
                                <div class="testimonial-content">
                                    <p class="description">
                                        <?php echo get_the_content(); ?>
                                    </p>
                                    <h3 class="testimonial-title"><?php the_title(); ?></h3>
                                    <!-- <small class="post"> - Themesvila</small> -->
                                </div>
                            </div>         
                            <?php endwhile; wp_reset_postdata(); endif;  ?>      
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog_area" class="section_padding">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section_title">                         
                            <h2>79 Road <span>STORIES</span></h2>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>          
                
                <div class="row">   
                    <?php  
                        $args=array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 3,
                        );
                    ?>
                    <?php $my_query = new WP_Query($args); ?>
                    <?php if( $my_query->have_posts() ) : ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single_blog">
                            <div class="single_blog_img">
                                <img src="<?php the_post_thumbnail_url(''); ?>" alt="">
                                <div class="blog_date text-center">
                                    <div class="bd_day"><?php echo get_the_date( 'd' ) ?></div>
                                    <div class="bd_month"><?php echo get_the_date( 'M' ) ?></div>
                                </div>
                            </div>                
                            <div class="blog_content">  
                                <h4 class="post_title">
                                    <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <!-- <ul class="post-bar">
                                    <li><i class="fa fa-user"></i> Admin</li>                                   
                                    <li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
                                    <li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
                                </ul>                            -->
                                <!-- <p>Đối với những người mê rong ruổi và trải nghiệm, có lẽ đôi găng ....</p> -->
                            </div>
                        </div>
                    </div>                
                    <?php endwhile; wp_reset_postdata(); endif;  ?>
                </div>
            </div>
        </section>
<?php get_footer(); ?>