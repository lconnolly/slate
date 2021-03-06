<?php

// Update images in posts to use HTML5 <figure> element
function html5_figure_caption( $output, $attr, $content ) {

    // We're not worried abut captions in feeds, so just return the output here.
    if ( is_feed() ) { return $output; }

    // Set up the default arguments.
    $defaults = array(
        'id' => '',
        'align' => 'alignnone',
        'width' => '',
        'caption' => ''
    );

    // Merge the defaults with user input.
    $attr = shortcode_atts( $defaults, $attr );

    // If the width is less than 1, return the content wrapped between the [caption] tags.
    if ( 1 > $attr['width'] ) { return $content; }

    // Set up the attributes for the caption <figure>.
    $attributes = ( !empty( $attr['id'] ) ? ' id="' . esc_attr( $attr['id'] ) . '"' : '' );
    $attributes .= ' class="wp-caption ' . esc_attr( $attr['align'] ) . '"';

    //$attributes .= ' style="width: ' . esc_attr( $attr['width'] ) . 'px"';
    // Open the caption <figure>.
    $output = '<figure' . $attributes . '>';

    // Allow shortcodes for the content the caption was created for.
    $output .= do_shortcode( $content );

    // Append the caption text.
    if ( $attr['caption'] !== '' ) :
        $output .= '<figcaption class="wp-caption-text">' . $attr['caption'] . '</figcaption>';
    endif;

    // Close the caption </figure>.
    $output .= '</figure>';

    // Return the formatted, clean figure & figcaption.
    return $output;
}

add_filter( 'img_caption_shortcode', 'html5_figure_caption', 10, 3 );
