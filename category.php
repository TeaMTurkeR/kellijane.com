<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/nav.php'); ?>
	
	<section id="gallery" class="wrap content-section">

		<div class="col-3">
			<ul>
				<?php 
					$title = 'Other Categories';
					wp_list_categories('orderby=name&exclude=7,1&show_count=1&title_li='.$title); 
				?> 
			</ul>
		</div>

		<div class="col-9">
	        <?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post();  ?>

				<?php 
					$post_thumbnail_id = get_post_thumbnail_id();
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
				?>

				<div <?php post_class('product') ?> >
	                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
	                <div class="caption">
	                	<p><?php the_title(); ?></p>
						<a href="//www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $post_thumbnail_url; ?>&description=<?php the_title(); ?>" data-pin-do="buttonPin" data-pin-config="none"></a>	                
					</div>
	            </div>

			<?php endwhile; ?>

			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

			<?php else : ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

		</div>

	</section>

<?php get_footer(); ?>
