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
					<a class="hovera" href="<?php the_field('button_linkFree'); ?>">
						<span><?php the_field('button_textFree'); ?></span></a>
				</div>
			</div>
			<div class="col-md-6">
				<img src="<?php the_field('imageFree'); ?>">
			</div>
		</div>
	</div>
</div>
<div class="sectionsR">
		<?php $termchildren = get_terms('product_category');?>
            <?php foreach($termchildren as $category) { 
            $term_link = get_term_link( $category );     
        ?>
        <div class="row" id="row_TermId<?php echo $category->term_id; ?>">	
        	<div class="col-md-6">
				<img src="<?php the_field('imageCat', 'product_category_'.$category->term_id); ?>">
			</div>
			<div class="col-md-6">
				<div class="contentInnerR">
					<h2><?php echo $category->name; ?></h2>
					<p><?php echo $category->description ?></p>
					<a class="hovera" href="<?php echo $term_link; ?>">
					<span>Shop Now</a>
				</div>
			</div>
		</div>
		<?php }  ?>
</div>
<div class="processThe" style="background-image: url('<?php the_field('background_imageTP'); ?>');">
	<div class="container">
		<div class="contentInnerthp">
			<h2><?php the_field('headingTP'); ?></h2>
			<p><?php the_field('contentTP'); ?></p>
			<a class="hovera" href="<?php the_field('button_linkTP'); ?>">
				<span><?php the_field('button_textTP'); ?></span></a>
		</div>
	</div>
</div>
<?php get_footer(); ?>