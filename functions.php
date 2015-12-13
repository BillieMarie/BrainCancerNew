<?php
 
register_nav_menus(); 
add_theme_support('post-thumbnails'); 
the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)
add_post_type_support( 'page', 'excerpt' );
add_filter( 'wp_title','braincancer_filter_wp_title', 10, 3 );

?>