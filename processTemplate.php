<?php /* Template Name: The Process */ get_header(); ?>
<div class="bannr" style="background-image: url('<?php the_field('banenr_imagebanenrimahe'); ?>');">
	<div class="container">
		<h2><?php the_title(); ?></h2>
	</div>
</div>
<div class="containerprocess">
	<div class="container">
	<div class="aboutContent">
		<h2><?php the_field('headingPro'); ?></h2>
		<p><?php the_field('contentPro'); ?></p>
	</div>
	</div>
	<div class="containerimagethree">
	<?php if( have_rows('three_images_section') ): while( have_rows('three_images_section') ) : the_row();?>
		<div class="imageContainerthreeBox">
			<img src="<?php the_sub_field('imagePro1') ?>">
		</div>
	<?php endwhile; endif; ?>
	</div>
	<div class="container">
	<p class="undertimahree">
		<?php the_field('content_under_imagePro'); ?>
	</p>
	<div class="containerVideos">
		<h2><?php the_field('headingPro2'); ?></h2>
		<p><?php the_field('contentPro2'); ?></p>
		<div class="row">
			<div class="col-md-6">
				<a data-fancybox="" href="<?php the_field('video_1_linkPro1'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/16.png" class="playICons">
			        <img src="<?php the_field('video_1_imagePro1'); ?>">
		      	</a>
			</div>
			<div class="col-md-6">
				<a data-fancybox="" href="<?php the_field('video_1_linkPro2'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/16.png" class="playICons">
			        <img src="<?php the_field('video_1_imagePro2'); ?>">
		      	</a>
			</div>
		</div>
		<p><?php the_field('content_after_videosPro'); ?></p>
	</div>
	</div>
</div>
<?php get_footer(); ?>