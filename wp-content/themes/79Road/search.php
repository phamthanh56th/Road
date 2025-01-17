<?php get_header(); ?>
<div id="page_item_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-left">
                <h3 class="search-title"><?php printf( __( 'Kết Quả Tìm Kiếm: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
            </div>
        </div>
    </div>
</div>
<div class="woocomerce-detail">
	<div class="container">
        <div class="col-12 mb-5">
            <div class="search-box">
                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="input-group">
                        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control"  placeholder="Tìm kiếm"/>              
                        <button type="submit" id="searchsubmit" class="btn btn-default"><i class="fa fa-search"></i></button>     
                    </div>
                </form>
            </div>
        </div>
		<?php
		    global $query_string;
		    $query_args = explode("&", $query_string);
		    $search_query = array('post_type' => 'product',
                            'posts_per_page' => -1,
                            'orderby'=> 'date',
                            'order' => 'ASC',
                        );
		    foreach($query_args as $key => $string) {
		      $query_split = explode("=", $string);
		      $search_query[$query_split[0]] = urldecode($query_split[1]);
		    } // foreach

		    $the_query = new WP_Query($search_query);
		    if ( $the_query->have_posts() ) : 
		    ?>
		    <!-- the loop -->
		    <div class="row">
		    	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		    		<?php $price = get_post_meta( get_the_ID(), '_regular_price', true);
                    $pid = $post->ID;
                    $product = new WC_Product( $pid ); ?>
		    		<div class="col-lg-3 col-md-4 col-sm-6 col-6 <?php echo $term->slug; ?>">
                        <div class="single_product">
                            <div class="product_image">
                                <a href="<?php echo get_the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url( '' ); ?>" alt=""/>
                                </a>
                                <!-- <div class="new_badge">New</div> -->
                                <div class="box-content">
                                    <!-- <a href="#"><i class="fa fa-heart-o"></i></a>
                                    <a href="#"><i class="fa fa-cart-plus"></i></a> -->
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
                            </div>
                        </div>                        
                    </div> 
		    	<?php endwhile; ?>
		    </div>
		    <!-- end of the loop -->
		    <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <div class="col-12">
                <p><?php _e( 'Sản phẩm bạn tìm kiếm không có.' ); ?></p>
            </div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>