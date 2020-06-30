<?php get_header(); ?>
		<main id="main">
			<div class="gallery">
				<div class="container">
					<div class="content-404">
						<h3>Page you are looking is not found</h3>
						<p>The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you can return back to the site's homepage and see if you can find what you are looking for.</p>
						<a href="<?php echo esc_html(home_url('/')); ?>">Back to Home Page</a>
					</div>
				</div>
			</div>
		</main>
<?php get_footer(); ?>