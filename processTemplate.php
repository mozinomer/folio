<?php /* Template Name: The Process */ get_header(); ?>
<div class="pageBanner" style="background-image: url('<?php the_field('banenrimahe'); ?>');">
	<div class="container">
		<h2><?php the_title(); ?></h2>
	</div>
</div>
<div class="container">
	<div class="aboutContent">
		<h2><?php the_field(''); ?></h2>
	</div>
</div>
<?php get_footer(); ?>