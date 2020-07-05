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
								<div class="blog_date text-center">
									<div class="bd_day"><?php echo get_the_date( 'd' ) ?></div>
									<div class="bd_month"><?php echo get_the_date( 'M' ) ?></div>
								</div>
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
			<?php get_sidebar(); ?>
		</div>					
	</div>
</div>
<?php get_footer(); ?>