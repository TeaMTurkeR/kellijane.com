<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();

    //jQuery Insert From Google
    if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
    function my_jquery_enqueue() {
       wp_deregister_script('jquery');
       wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js", false, null);
       wp_enqueue_script('jquery');
    }

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

  // Adds the_post_thumbnail support
  add_theme_support( 'post-thumbnails' );
  the_post_thumbnail('full');

  // img unautop
  function img_unautop($pee) {
      $pee = preg_replace('/<a>\\s*?(<p .*?><img.*?><\\/p>|<img.*?>)?\\s*<\\/a>/s', '<div class="figure">$1</div>', $pee);
      return $pee;
  }
  add_filter( 'the_content', 'img_unautop', 30 );
        
?>