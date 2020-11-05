<?php
/*
 Template Name: News archive Template
 */

get_header(); ?>
<?php  while ( have_posts() ) : the_post(); 
	$queried_object = get_queried_object(); 
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id;  
	$ImageCat = get_field('imageCat', $taxonomy . '_' . $term_id); ?>

<div class="bannr" style="background-image: url('<?php echo $ImageCat; ?>');">
	<div class="container">
		<h2><?php echo $queried_object->name; ?></h2>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3 productaWrappers">
	        <div class="imagecontainerProductWrapper">
	            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	        </div>
	        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
	    </div>  
	</div>
</div>
<?php endwhile;
?>

<?php get_footer(); ?>
