<?php
    get_header();
?>


<section id="product_area" class="section_padding">
    <div class="container">     
        <div class="text-center">           
            <div class="product_item">
                <div class="row">   
                    <?php
                        $args_post = array(
							'post_type' => 'product',
							'posts_per_page' => -1,
							'orderby'=> 'date',
							'order' => 'ASC',
                        );
                        $query = new WP_Query( $args_post );
                        if ( $query->have_posts() ):
                        while ( $query->have_posts() ) : $query->the_post();
                        $price = get_post_meta( get_the_ID(), '_regular_price', true);
                        $pid = $post->ID;
                        $product = new WC_Product( $pid );
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="single_product">
                            <div class="product_image">
                                <img src="<?php the_post_thumbnail_url( '' ); ?>" alt=""/>
                                <!-- <div class="new_badge">New</div> -->
                                <div class="box-content">
                                    <!-- <a href="#"><i class="fa fa-heart-o"></i></a> -->
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                </div>
            </div>
        </div>
    </div>
</section>         
<?php get_footer(); ?>