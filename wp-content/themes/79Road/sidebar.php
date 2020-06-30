<!-- Blog Sidebar -->
<div class="col-md-4 col-xs-12">							
	<div class="single_sidebar search_widget">
		<h3 class="sdbr_title">Tìm kiếm</h3>
		<div class="sdbr_inner">
			<form role="search" method="get" id="searchform" class="search_form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control search_input"  placeholder="Nhập tên..."/>   
				<button type="submit" class="search_button"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	
	<div class="single_sidebar category">
		<h3 class="sdbr_title">Danh Mục</h3>
		<div class="sdbr_inner">
			<ul>
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
                foreach ($tax_terms as $key => $term) { ?>
				<li><a href="<?php echo get_term_link($term->term_id, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>

	<!-- <div class="single_sidebar popular_post">
		<h3 class="sdbr_title">popular post</h3>
		<div class="sdbr_inner">
			<div class="single_popular_post fix">
				<a href="#" class="spp_img"><img src="img/sidebar/1.jpg" alt="" /></a>
				<div class="spp_text fix">
					<a href="#">Lorem Ipsum is simply 2018.</a>
					<p>Posted By John Doe</p>
				</div>
			</div>
			<div class="single_popular_post fix">
				<a href="#" class="spp_img"><img src="img/sidebar/2.jpg" alt="" /></a>
				<div class="spp_text fix">
					<a href="#">Lorem Ipsum is simply 2018.</a>
					<p>Posted By John Doe</p>
				</div>
			</div>
			<div class="single_popular_post fix">
				<a href="#" class="spp_img"><img src="img/sidebar/3.jpg" alt="" /></a>
				<div class="spp_text fix">
					<a href="#">Lorem Ipsum is simply 2018.</a>
					<p>Posted By John Doe</p>
				</div>
			</div>
		</div>
	</div>
						
	<div class="single_sidebar tags fix">
		<h3 class="sdbr_title">tags</h3>
		<div class="sdbr_inner">
			<a href="#">App</a>
			<a href="#">Fashiondary</a>
			<a href="#">Fashion Tag</a>
			<a href="#">Logo Designer</a>
			<a href="#">Populat Tees</a>
			<a href="#">Designer</a>
			<a href="#">Most Recent</a>
		</div>
	</div> -->
</div>
<!-- End Blog Sidebar -->
