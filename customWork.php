<?php /* Template Name: Custom Work */ get_header(); ?>
<div class="bannr" style="background-image: url('<?php the_field('banenr_imagebanenrimahe'); ?>');">
	<div class="container">
		<h2><?php the_title(); ?></h2>
	</div>
</div>
<div class="customWorksi">
	<div class="container">
		<div class="latestWorkAndMoreWorks">
			<h2>Latest Work</h2>
			<div class="row">
			<?php  $args = array( 'post_type' => 'customworks', 'posts_per_page' => 4, );
			    $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
			    <div class="col-md-3 imglist">
				  <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="images">
				    <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
				  </a>
			    </div>
			    <?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="latestWorkAndMoreWorks">
			<h2>More from Us</h2>
			<div class="row">
			<?php  $args = array( 'post_type' => 'customworks', 'posts_per_page' => -1, );
			    $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
			    <div class="col-md-3 imglist">
				  <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox="images">
				    <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
				  </a>
			    </div>
			    <?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>