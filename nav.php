<nav id="nav">
    <div class="wrap">
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
        </ul>
    </div>
</nav>

<header class="small-splash">

    <div class="wrap">
        <h2><?php wp_title("",true); ?></h2>
    </div>

</header>