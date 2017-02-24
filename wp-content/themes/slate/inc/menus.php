<?php
/*
** Navigation Menus
*/

// Primary Menu
function slate_register_main_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Nav' ),
            'secondary' => __( 'Secondary Nav' )
        )
    );
}

add_action( 'after_setup_theme', 'slate_register_main_menus' );
