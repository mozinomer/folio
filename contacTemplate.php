<?php /* Template Name: The Contact Us */ get_header(); ?>
<div class="bannr" style="background-image: url('<?php the_field('banenr_imagebanenrimahe'); ?>');">
	<div class="container">
		<h2><?php the_title(); ?></h2>
	</div>
</div>
<div class="contactUS">
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
	</div>
	<div class="minContainer">
		<?php echo do_shortcode('[contact-form-7 id="129" title="Contact form 1"]'); ?>
	</div>
</div>
<?php get_footer(); ?>