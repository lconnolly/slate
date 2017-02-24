<?php
/*
** Styles & Scripts
*/


// Enqueueing LESS File in Development
function slate_enqueue_less_styles($tag, $handle) {
    global $wp_styles;

    $match_pattern = '/\.less$/U';
    if ( preg_match( $match_pattern, $wp_styles->registered[$handle]->src ) ) {
        $handle = $wp_styles->registered[$handle]->handle;
        $media = $wp_styles->registered[$handle]->args;
        $href = $wp_styles->registered[$handle]->src . '?ver=' . $wp_styles->registered[$handle]->ver;
        $rel = isset($wp_styles->registered[$handle]->extra['alt']) && $wp_styles->registered[$handle]->extra['alt'] ? 'alternate stylesheet' : 'stylesheet';
        $title = isset($wp_styles->registered[$handle]->extra['title']) ? "title='" . esc_attr( $wp_styles->registered[$handle]->extra['title'] ) . "'" : '';

        $tag = "<link rel='stylesheet' id='$handle' $title href='$href' type='text/less' media='$media'>";
    }
    return $tag;
}

add_filter( 'style_loader_tag', 'slate_enqueue_less_styles', 5, 2);


// Enqueue Global Styles / Scripts
function slate_enqueue_base() {

    if( WP_ENV == 'dev' ) {
        // Client-side LESS.js in Development
        $stylesheet_path = get_stylesheet_directory() . '/static/style/screen.less';
        $stylesheet_uri = get_stylesheet_directory_uri() . '/static/style/screen.less';

        wp_enqueue_script( 'slate-less',
            get_stylesheet_directory_uri() . '/static/script/vendor/less.min.js',
            false,
            '1.0'
        );

    } else {
        // Otherwise, flat / minified CSS
        $stylesheet_path = get_stylesheet_directory() . '/static/style/screen.css';
        $stylesheet_uri = get_stylesheet_directory_uri() . '/static/style/screen.css';
    }

    // Enqueue Style
    if( file_exists( $stylesheet_path ) ) {
        wp_enqueue_style( 'slate-style',
            $stylesheet_uri,
            false,
            filemtime( $stylesheet_path ),
            'all'
        );
    }

    // Global Scripts
    wp_enqueue_script( 'slate-jquery',
        get_template_directory_uri() . '/static/script/vendor/jquery.min.js',
        false,
        '1.0',
        'all'
    );

    wp_enqueue_script( 'slate-global',
        get_template_directory_uri() . '/static/script/global.js',
        false,
        '1.0',
        'all'
    );

}

add_action( 'wp_enqueue_scripts', 'slate_enqueue_base', 10 );


// LESS Environment Variable
function slate_add_less_var() {
    if( WP_ENV == 'dev' ) { ?>
        <!-- LESS.JS Development -->
        <script type="text/javascript">var less=less||{};less.env='development';</script>
    <?php }
}

add_action( 'wp_head', 'slate_add_less_var', 10 );
