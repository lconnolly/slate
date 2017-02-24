<?php
/*
 *  Author: Gestalt Interactive
 *  URL: gestalt.io
 *  A blank slate
 */


// Enable Canonical Link Tag to Head
add_action( 'wp_head', 'rel_canonical' );

// Additional Functions
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/menus.php';
require get_template_directory() . '/inc/thumbnails.php';
