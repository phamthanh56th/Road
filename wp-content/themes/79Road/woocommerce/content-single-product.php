<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product; ?>
<div class="woocomerce-detail">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				/**
				 * Hook: woocommerce_before_single_product.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 */
				?>

				<?php		
				do_action( 'woocommerce_before_single_product' );

				if ( post_password_required() ) {
					echo get_the_password_form(); // WPCS: XSS ok.
					return;
				}
				?>
			</div>
			<div class="col-12">
				<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<?php
								/**
								 * Hook: woocommerce_before_single_product_summary.
								 *
								 * @hooked woocommerce_show_product_sale_flash - 10
								 * @hooked woocommerce_show_product_images - 20
								 */
								do_action( 'woocommerce_before_single_product_summary' );
								?>
							</div>
							<div class="col-md-6">
								<div class="summary entry-summary">
									<?php
									/**
									 * Hook: woocommerce_single_product_summary.
									 *
									 * @hooked woocommerce_template_single_title - 5
									 * @hooked woocommerce_template_single_rating - 10
									 * @hooked woocommerce_template_single_price - 10
									 * @hooked woocommerce_template_single_excerpt - 20
									 * @hooked woocommerce_template_single_add_to_cart - 30
									 * @hooked woocommerce_template_single_meta - 40
									 * @hooked woocommerce_template_single_sharing - 50
									 * @hooked WC_Structured_Data::generate_product_data() - 60
									 */
									do_action( 'woocommerce_single_product_summary' );
									?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-9 col-12">
									<div>
										<?php
										/**
										* Hook: woocommerce_after_single_product_summary.
										*
										* @hooked woocommerce_output_product_data_tabs - 10
										* @hooked woocommerce_upsell_display - 15
										* @hooked woocommerce_output_related_products - 20
										*/
										do_action( 'woocommerce_after_single_product_summary' );
										?>
									</div>
									
									<div>
										<?php do_action( 'woocommerce_after_single_product' ); ?>
									</div>
								</div>
								<div class="col-md-3 col-12 product-related border-product-related">
									<div class="title-product-related wrap-box-right">
										<h3>Sản Phẩm Liên Quan</h3>
									</div>
									<div class="col-12 wrap-product-related">
										<?php  
											$id = $product->get_id();
											$taxonomy = 'product_cat';
											//$related_tag = wp_get_object_terms( $post->ID, 'product_tag', array('fields' => 'ids'));
											$related_cat_id = wp_get_object_terms( $id, 'product_cat', array('fields' => 'ids'));
											//$aa = wp_get_post_terms($id, $taxonomy,  array("fields" => "ids"));
											$args1 = array(
											'post_type' => 'product',
											'post_status' => 'publish',
											'posts_per_page' => -1,
											'orderby' => 'rand',
											'post__not_in' => array ($id),
											'tax_query' => array(
												array(
													'taxonomy'     => $taxonomy,
													'field'        => 'id',
													'terms'        =>  $related_cat_id,
													),
												),
											)
											
										?>
										<!-- <?php //print_r($related_cat_id); ?> -->
										<?php  
											$query = new WP_Query( $args1 );
											if ( $query->have_posts() ): 
										?>
										<?php while ( $query->have_posts() ) : $query->the_post(); ?>
											<?php $price = get_post_meta( get_the_ID(), '_regular_price', true);
											$pid = $post->ID;
											$product = new WC_Product( $pid ); ?>
											<a href="<?php echo get_the_permalink(); ?>" class="product-related-item">
												<div class="product-related-image">
													<img src="<?php the_post_thumbnail_url( '' ); ?>" alt=""/>
												</div>

												<div class="product-related-text">
													<p class="mb-0"><?php the_title(); ?></p>
													<span><?php echo $product->get_price_html(); ?></span>
													<!-- <?php //echo do_shortcode( '[add_to_cart id=' . $id . ']' ) ?> -->
												</div>
											</a>
										<?php endwhile; wp_reset_postdata(); endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<?php 
			global $woocommerce;
			$viewed_products = ! empty( $_COOKIE['woocommerce_recently_viewed'] ) ? (array) explode( '|', $_COOKIE['woocommerce_recently_viewed'] ) : array();
			$viewed_products = array_filter( array_map( 'absint', $viewed_products ) );
			?>
			<?php if($viewed_products) { ?>
			<?php 
			$query_args = array(
			    'posts_per_page' => 4,
			    'post_status'    => 'publish', 
			    'post_type'      => 'product', 
			    'post__in'       => $viewed_products, 
			    'orderby'        => 'rand'
			);
			$query_args['meta_query'] = array();
			$query_args['meta_query'][] = $woocommerce->query->stock_status_meta_query();
			$r = new WP_Query($query_args);
			if ( $r->have_posts() ) {
			    ?>
			    <div class="col-md-12 mt-5">
					<div class="product-related mb-4">
						<h3>Sản Phẩm Vừa Xem</h3>
					</div>
				</div>
			    <?php 
			    while ( $r->have_posts() ) { $r->the_post(); ?>
			    	<div class="col-lg-3 col-md-4 col-sm-6 col-6">
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
	                            <h4>
	                            	<a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
	                            </h4>
	                        </div>
                            <span class="price"><?php echo $product->get_price_html(); ?></span>
                            <!-- <?php //echo do_shortcode( '[add_to_cart id=' . $id . ']' ) ?> -->
                        </div>
                    </div>			        
			    <?php }
			}; 
			wp_reset_postdata();
			?>
			<?php } ?>
		</div>
	</div>
</div>
