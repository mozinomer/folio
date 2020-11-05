<?php /* Template Name: Gallery */ get_header(); ?>
<div class="bannr" style="background-image: url('<?php the_field('banenr_imagebanenrimahe'); ?>');">
	<div class="container">
		<h2><?php the_title(); ?></h2>
	</div>
</div>
<div class="mainContainerGallery">
	<div class="container">
		<h2>Designs available at these fine galleries</h2>
		<div class="row">
			<?php  $args = array( 'post_type' => 'gallery', 'posts_per_page' => -1, );
			$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-md-4">
					<div class="imageContainerStates">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						<?php the_field('asd'); ?>
					</div>
					<div class="contentImagesCOntainerGallery">
						<h4><?php the_title(); ?></h4>
						<ul>
							<li><i class="fa fa-map-marker"></i><span><?php the_field('addresss') ?></span></li>
							<li><i class="fa fa-phone"></i><span><?php the_field('phones') ?></span></li>
							<li><i class="fa fa-"></i><span><?php the_field('website') ?></span></li>
						</ul>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>		
		</div>
	</div>
</div>
<?php get_footer(); ?>