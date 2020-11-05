<?php /* Template Name: News & Events */ get_header(); ?>
<div class="bannr" style="background-image: url('<?php the_field('banenr_imagebanenrimahe'); ?>');">
	<div class="container">
		<h2><?php the_title(); ?></h2>
	</div>
</div>
<div class="newsAndEventsPage">
	<div class="container">
		<h2 class="headingis">Upcoming events</h2>
		<div class="row">
			<?php  $args = array( 'post_type' => 'post', 'posts_per_page' => -1, );
			$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-md-4">
					<a href="<?php the_field('externelLink'); ?>">
						<div class="imageContainerStatesPost">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<div class="contentImagesCOntainerPost">
							<span><?php echo get_the_date(); ?></span>
							<h4><?php the_title(); ?></h4>
							<div class="locaitonInner">
								<i class="fa fa-map-marker"></i><span><?php the_field('location'); ?></span>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>		
		</div>
	</div>
</div>
<?php get_footer(); ?>