<?php 
if (is_post_type_archive('product_category')) { ?>
	<img src="<?php echo get_template_directory_uri(); ?>/2.png">
<?php }
?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="logoFotor">
					<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo $image[0]; ?>"></a>
                    <p>
                    	<?php the_field('content_footer', 'options'); ?>
                    </p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="MenuContainersFooter">
					<div class="menuContainerFooters">
						<h6>
							Quick Links
						</h6>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</div>
					<div class="menuContainerFooters">
						<h6>
							Quick Links
						</h6>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<h6>
					Newsletter
				</h6>
				<p><?php the_field('news_letter_content', 'options'); ?></p>
				<div class="formContainerNewsLetter">
					<?php echo do_shortcode('[contact-form-7 id="156" title="News Letter form"]') ?>
				</div>
				<ul class="socialIconsFooter">
	                <li><a href="<?php the_field('facebook', 'options'); ?>"><i class="fa fa-facebook"></i></a></li>
	                <li><a href="<?php the_field('twitter', 'options'); ?>"><i class="fa fa-twitter"></i></a></li>
	                <li><a href="<?php the_field('instagram', 'options'); ?>"><i class="fa fa-instagram"></i></a></li>
	                <li><a href="<?php the_field('pinterest', 'options'); ?>"><i class="fa fa-pinterest"></i></a></li>
	            </ul>
			</div>
		</div>
	</div>
	<div class="copyrights">
		<div class="container">
			<p>
				<?php the_field('copyrights', 'options'); ?>
			</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
<script src="<?php echo get_template_directory_uri(); ?>/mango.js"></script>
</html>