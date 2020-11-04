<?php /* Template Name: Home Page */ get_header(); ?>
<div class="sldierBannerHome">
	<?php if( have_rows('banner') ): while( have_rows('banner') ) : the_row();?>
		<div class="containerSliderInner">
			<div class="sliderInnerBanner">
				<img src="<?php the_sub_field('background_image'); ?>">
				<div class="contentContainerBanner">
					<h6><?php the_sub_field('sub_headingBanenr'); ?></h6>
					<h2><?php the_sub_field('headingbanner'); ?></h2>
					<p><?php the_sub_field('contentbanner'); ?></p>
					<div class="buttonsContainerBanners">
						<a class="hovera" href="<?php the_sub_field('button_1_link'); ?>">
							<span><?php the_sub_field('button_1_text'); ?></span></a>
						<a class="hovera" href="<?php the_sub_field('button_2_link'); ?>">
							<span><?php the_sub_field('button_2_textbanner'); ?></span></a>
					</div>	
				</div>
			</div>
		</div>
	<?php endwhile; endif;?>
</div>
<div class="freeForm">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contentfreeForm">
					<h2><?php the_field('headingFree'); ?></h2>
					<p><?php the_field('contentFree'); ?></p>
					<a href="<?php the_field('button_linkFree'); ?>"><?php the_field('button_textFree'); ?></a>
				</div>
			</div>
			<div class="col-md-6">
				<img src="<?php the_field('imageFree'); ?>">
			</div>
		</div>
	</div>
</div>
<div class="sectionsR">
	<?php if( have_rows('repeated_section') ): while( have_rows('repeated_section') ) : the_row();?>
	<div class="row">
		<div class="col-md-6">
			<img src="<?php the_sub_field('imageR'); ?>">
		</div>
		<div class="col-md-6">
			<div class="contentInnerR">
				<h2><?php the_sub_field('headingR'); ?></h2>
				<p><?php the_sub_field('contentR'); ?></p>
				<a href="<?php the_sub_field('button_linkR'); ?>"><?php the_sub_field('button_textR'); ?></a>
			</div>
		</div>
	</div>
	<?php endwhile; endif;?>
</div>
<div class="processThe" style="background-image: url('<?php the_field('background_imageTP'); ?>');">
	<div class="container">
		<div class="contentInnerthp">
			<h2><?php the_field('headingTP'); ?></h2>
			<p><?php the_field('contentTP'); ?></p>
			<a href="<?php the_field('button_linkTP'); ?>"><?php the_field('button_textTP'); ?></a>
		</div>
	</div>
</div>
<?php get_footer(); ?>