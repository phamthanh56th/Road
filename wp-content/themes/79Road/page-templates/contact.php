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
						<h3>Get in Touch</h3>
						<form action="#">
							<div class="form-row">
								<div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="Name*" /></div>
								<div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="Email*" /></div>
							</div>

							<div class="form-group">
								<input type="text" class="form-control" placeholder="Subject" />
							</div>
				
							<div class="form-group">
								<textarea name="message" class="form-control" placeholder="Message"></textarea>
							</div>
							
							<div class="input-area submit-area"><button class="btn border-btn" type="submit" >Send Message</button></div>
							
						</form>		
					</div>	
				
					<div class="contact_info col-lg-6 col-md-12 col-xs-12">
						<h3>Contact Info</h3>
						<p class="subtitle">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</p>
						<div class="single_info">
							<div class="con_icon"><i class="fa fa-map-marker"></i></div>
							<p>1660 Travis Street <br />Miramar, FL 33025 </p>
						</div>
						<div class="single_info">
							<div class="con_icon"><i class="fa fa-phone"></i></div>
							<p>Phone : +772-607-0042</p>
							<p>Fax : +772-607-0042</p>
						</div>
						<div class="single_info">
							<div class="con_icon"><i class="fa fa-envelope"></i></div>
							<a href="#">RachelSOntiveros@rhyta.com </a> <br />
							<a href="#">RachelSOntiveros@rhyta.com </a>
						</div>
						
					</div>
				</div>
			</div>
		
							
			<div class="fix">
				<div id="contact_map_area"></div>
			</div>	
				
		</div>
<?php get_footer(); ?>