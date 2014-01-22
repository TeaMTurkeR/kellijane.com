<?php
/*
Template Name: OLDGallery
*/
?>

<?php get_header(); ?>
	
	<nav id="gallery-filter" class="top-bar">         
      <section class="top-bar-section">
            <ul class="left">
            	<li><a data-filter="*" href="javascript:void(0)">All Products</a></li>
                <li class="has-dropdown">
                 	<a data-filter=".category-bed" href="javascript:void(0)">Bed</a>
                  	<ul class="dropdown"><li class="title back js-generated" style=""><h5><a href="javascript:void(0)">Item 1</a></h5></li>
                        <li><a data-filter=".category-pillows-blankets-and-comforters" href="javascript:void(0)">Pillows, Blankets, and Comforters</a></li>
                        <li><a data-filter=".category-sheets" href="javascript:void(0)">Sheets</a></li>
                        <li><a data-filter=".category-top-of-bed" href="javascript:void(0)">Top of Bed</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                 	<a data-filter=".category-bath" href="javascript:void(0)">Bath</a>
                  	<ul class="dropdown"><li class="title back js-generated" style=""><h5><a href="javascript:void(0)">Item 1</a></h5></li>
                        <li><a data-filter=".category-bath-rugs" href="javascript:void(0)">Bath Rugs</a></li>
                        <li><a data-filter=".category-shower-curtains" href="javascript:void(0)">Shower Curtains</a></li>
                        <li><a data-filter=".category-towels" href="javascript:void(0)">Towels</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                 	<a data-filter=".category-table" href="javascript:void(0)">Table</a>
                  	<ul class="dropdown"><li class="title back js-generated" style=""><h5><a href="javascript:void(0)">Item 1</a></h5></li>
                        <li><a data-filter=".category-napkins" href="javascript:void(0)">Napkins</a></li>
                        <li><a data-filter=".category-placemats" href="javascript:void(0)">Placemats</a></li>
                        <li><a data-filter=".category-tablecloths" href="javascript:void(0)">Tablecloths</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                 	<a data-filter=".category-accessories" href="javascript:void(0)">Accessories</a>
                  	<ul class="dropdown"><li class="title back js-generated" style=""><h5><a href="javascript:void(0)">Item 1</a></h5></li>
                        <li><a data-filter=".category-decorative-pillows" href="javascript:void(0)">Decorative Pillows</a></li>
                        <li><a data-filter=".category-throws" href="javascript:void(0)">Throws</a></li>
                    </ul>
                </li>
                <li><a data-filter=".category-eco-friendly" href="javascript:void(0)">Eco-Friendly</a></li>
               <!--  <li class="has-dropdown">
                 	<a data-filter="*.category-eco-friendly" href="javascript:void(0)">Eco-Friendly</a>
                  	<ul class="dropdown"><li class="title back js-generated" style=""><h5><a href="javascript:void(0)">Item 1</a></h5></li>
                        <li><a href="javascript:void(0)">Bed</a></li>
                        <li><a href="javascript:void(0)">Bath</a></li>
                        <li><a href="javascript:void(0)">Table</a></li>
                    </ul>
                </li> -->
            </ul>
        </section>
    </nav>
	<section id="gallery">

<!--     <div class="row">
      <div class="large-12 columns"> -->

		    <?php query_posts('post_type=post&cat=-7') ?> <!-- 2 or 7 -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div style="display:none" <?php post_class('product two') ?> >
              <a data-reveal-id="product-gallery-modal" data-title="<?php the_title() ?>" href="javascript:void(0)">
                <?php the_post_thumbnail(); ?>
              </a>
            </div>

        <?php endwhile; else : ?>

            <h2>Uh Oh!</h2>
            <p>We couldn't find what you were looking for...</p>

        <?php endif; ?>

<!--       </div>
    </div> -->
	</section>

</div>


<?php get_footer(); ?>
