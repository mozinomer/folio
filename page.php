<?php 
get_header();
?>
<div class="bannr" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="container">
		<h2><?php the_title(); ?></h2>
	</div>
</div>

<?php while (have_posts()) { the_post();
?>
<div class="container">
<?php
	the_content();
} ?>

</div>


<?php
get_footer();
 ?>