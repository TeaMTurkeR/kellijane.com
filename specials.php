<?php
/*
Template Name: Specials
*/
?>

<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/nav.php'); ?>


	<?php 
		query_posts('cat=7&post_type=post&posts_per_page=1'); 
		if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	?>

	<section id="specials" class="wrap content-section">

		<div class="col-block">
			<p class="lead"><?php the_title(); ?></p>
		</div>
		<div class="col-6">
            <a href="<?php $key="current_special_link"; echo get_post_meta($post->ID, $key, true); ?>">
                <?php the_post_thumbnail(); ?>  
            </a>    
		</div>
		<div class="col-6">
			<p><?php the_content(); ?></p>
			<p><a href="<?php $key="current_special_link"; echo get_post_meta($post->ID, $key, true); ?>">More information</a></p>
		</div>
		
		<?php endwhile; endif; ?>	

	</section>


<?php get_footer(); ?>
