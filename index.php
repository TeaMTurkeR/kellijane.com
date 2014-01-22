<?php get_header(); ?>

	<header id="splash">
        <nav class="wrap">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path( 'specials' ) ) ?>">Specials</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path( 'gallery' ) ) ?>">Gallery</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>">Services</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>">Contact</a></li>
            </ul>
            <ul>
                <li><a href="http://www.pinterest.com/kellijanephila/">Pinterest</a></li>
				<li><a href="https://www.facebook.com/KellijaneHome">Facebook</a></li>
                <li><a href="https://twitter.com/kellijanephila">Twitter</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>/#mailinglist">Mailing List</a></li>
            </ul>
        </nav>
        <div class="aspect-ratio">

            <section class="wrap">
                <h1><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Kellijane Logo"></h1>
                <p>unmatched style + quality<br>for bed, bath + table</p>
            </section>
            
        </div>
    </header>

	<section class="wrap content-section">
        <div class="col-4">
            <h2>About Us</h2>
            <p class="lead">Kellijane carries a wide variety of the finest bed, bath, and table linens as well as unique decorative accessories.</p>
            <p>Our specialty is combining pieces from different lines to create a personalized space in any room. With products at a multitude of price points and styles, this also helps us to meet almost anyone's budget needs and vision.</p>
            <p>Kellijane has received several Philadelphia Magazine “Best of Philly” Awards - most recently for Best Hi-End Linens in 2011.</p>
        </div>
        <div class="col-8">
            <img src="<?php bloginfo('template_url'); ?>/images/storefront.jpg" alt="">
        </div>
    </section>

    <section class="wrap content-section">
        <div class="col-4">
            <img src="<?php bloginfo('template_url'); ?>/images/interior.jpg" alt="">
        </div>
        <div class="col-4">
            <h3>Kelly Monk <small>Co-Owner</small></h3>
            <p>After buying her own home, Kelly Monk was hard-pressed to find a boutique that met both her expectations and her eclectic style. Capitalizing on her past retail experience in both Philadelphia and New York, she decided to fill the void herself. Setting out to assemble an unrivaled assortment of bed, bath, and table linens, Kelly co-founded Kellijane in 1999.</p>
        </div>
        <div class="col-4">
            <h3>Pamela Diaconis <small>Co-Owner</small></h3>
            <p>A previous Kellijane customer and a life-long textile enthusiast, Pamela Diaconis become a partner in Kellijane in 2006. After nearly 30 years in the home furnishings business in the fields of marketing, importing, and retail she was eager to be able to surround herself with such luxurious fabrics.</p>
        </div>
    </section>

    <section id="call-to-action" class="wrap content-section">
        
        <div class="col-block">
            <a href="<?php echo get_permalink( get_page_by_path( 'gallery' ) ) ?>">View Our Products!</a>
        </div>

    </section> 

<?php get_footer(); ?>
