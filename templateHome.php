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
					<a href="<?php the_sub_field('button_1_link'); ?>"><?php the_sub_field('button_1_text'); ?></a>
					<a href="<?php the_sub_field('button_2_link'); ?>"><?php the_sub_field('button_2_textbanner'); ?></a>
				</div>	
			</div>
		</div>
	</div>
<?php endwhile; endif;?>
</div>

<?php get_footer(); ?>