<?php 
	/*

		Template Name: Liên Hệ Template

	*/ 
?>
<?php get_header(); ?>
		<div class="contact_page_area fix">
			<div class="container">					
				<div class="row">
					<div class="contact_frm_area text-left col-lg-6 col-md-12 col-xs-12">
					<?php echo do_shortcode( '[contact-form-7 id="10" title="Form liên hệ"]' ); ?>
					</div>					
					<div class="contact_info col-lg-6 col-md-12 col-xs-12">
						<?php dynamic_sidebar( 'contact-info' ); ?>
					</div>
				</div>
			</div>
		
							
			<div class="fix">
				<div id="contact_map_area">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.1987734376657!2d109.17897201412839!3d12.234816433927783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31705d8f3840a9bd%3A0xa3bf38b5ea7f156b!2zMzQyIEzDqiBI4buTbmcgUGhvbmcsIFBoxrDhu5tjIEhvw6AsIFRow6BuaCBwaOG7kSBOaGEgVHJhbmcsIEtow6FuaCBIw7JhIDY1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1593530692284!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>	
				
		</div>
<?php get_footer(); ?>