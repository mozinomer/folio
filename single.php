<?php get_header(); ?>
<?php while (have_posts() ) : the_post();?>
<div class="bannr" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>') ">
	<div class="container">
		<h2><?php the_title(); ?></h2>
	</div>
</div>
<div class="contentContainerproduct">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="sliderImagesMain">
				<?php if( have_rows('slider_images') ): while( have_rows('slider_images') ) : the_row();?>
					<div class="slideInnerImages">
						<img src="<?php the_sub_field('imagesSlides'); ?>">
					</div>
				<?php endwhile; endif; ?>
				</div>
				<div class="sliderThumbanils">
				<?php if( have_rows('slider_images') ): while( have_rows('slider_images') ) : the_row();?>
					<div class="slideInnerImagesThumbnails">
						<img src="<?php the_sub_field('imagesSlides'); ?>">
					</div>
				<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="rightsideContent">
					<h2><?php the_title(); ?></h2>
					<div class="exceprt">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>