<?php get_header(); 
the_post();?>
<div id="blog_page_area">
	<div class="container">
		<div class="row">					
			<div class="col-12">
				<!-- Single blog -->
				<div class="single_blog mt-5">
					<div class="row">
						<div class="col-md-4 col-12">
							<div class="single_blog_img">
								<img src="<?php the_post_thumbnail_url(''); ?>" alt="">
								<!-- <div class="blog_date text-center">
									<div class="bd_day"><?php echo get_the_date( 'd' ) ?></div>
									<div class="bd_month"><?php echo get_the_date( 'M' ) ?></div>
								</div> -->
							</div>
						</div>
						<div class="col-md-8 col-12">
							<?php if(!empty(get_the_content())): ?>
							<div class="blog_content">
								<?php echo get_the_content(); ?>
							</div>
							<?php endif; ?>	
						</div>
					</div>
				</div>		
			</div>
			<div class="col-md-12 mt-3">
			<?php
				global $post;
				//$current_post_type = get_post_type( $post );
				$args = array(
				    'order' => 'DESC',
				    'orderby' => 'ID',
				    'post_type' => 'post',
				    'posts_per_page' => 3,
				    'post__not_in' => array( $post->ID )
				);
				$rel_query = new WP_Query( $args );
				if( $rel_query->have_posts() ) : 
				?>
				<div class="recent-related mb-3">
					<h3>Bài Viết Liên Quan</h3>
				</div>
				<div class="post-related">
				    <div class="row">
					<?php
					    while ( $rel_query->have_posts() ) :
					    $rel_query->the_post(); ?>
				        <div class="col-lg-4 col-md-6 col-12">
	                        <a href="<?php echo get_the_permalink(); ?>" class="single_blog">
	                            <div class="single_blog_img">
	                                <img src="<?php the_post_thumbnail_url(''); ?>" alt="">
	                                <!-- <div class="blog_date text-center">
	                                    <div class="bd_day"><?php echo get_the_date( 'd' ) ?></div>
	                                    <div class="bd_month"><?php echo get_the_date( 'M' ) ?></div>
	                                </div> -->
	                            </div>                
	                            <div class="blog_content">  
	                                <h4 class="post_title">
	                                    <?php the_title(); ?>
	                                </h4>
	                            </div>
	                        </a>
	                    </div> 
					<?php endwhile; ?>
				    </div>
				</div>
				<?php
				endif; wp_reset_query(); ?>
			</div>
			<!-- <?php //get_sidebar(); ?> -->
		</div>					
	</div>
</div>
<?php get_footer(); ?>