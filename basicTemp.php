<?php /* Template Name: Basic New Templaet */ get_header(); ?>
<div class="bannerContainerTem">
	<img src="<?php the_field('banner_imageTemp'); ?>">
</div>
<div class="sectionevenOdd">
	<div class="flexLayout">
		<div class="container">
			<?php if( have_rows('row_repeatedly_Temp') ): while( have_rows('row_repeatedly_Temp') ) : the_row();  ?>
			<div class="row">
				<div class="col-md-6">
					<div class="imageContainerInbox">
						<img src="<?php the_sub_field('image_Temp'); ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="contentContainerBoxNewTemaplate">
						<h2><?php the_sub_field('heading_Temp'); ?></h2>
						<?php the_sub_field('contentTemp'); ?>
						<a href="<?php the_sub_field('button_linkTemp'); ?>"><?php the_sub_field('button_textTemp'); ?></a>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>
