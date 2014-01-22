<?php get_header(); ?>

	<section id="single-post" class="content-block">
		<div class="row">
			<div class="four columns">
				<h3 class="subheader"><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</div>
			<div class="eight columns">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
	</section>

	<footer id="footer" class="fixed-bottom">
		<div class="row">
			<div class="twelve columns">
				<p class="left">1721 Spruce Street Philadelphia, PA 19103 | 215 790 0233</p>
				<p class="right">&copy; <?php echo date('Y'); ?> Kellijane</p>
			</div>		
		</div>
	</footer>

<?php get_footer(); ?>