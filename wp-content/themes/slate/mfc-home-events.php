<?php
/**
 * Template Name: MFC Events - Newest
 *
 * @package WordPress
 * @subpackage MFC
 * @since MFC 1.0
 */

$args = array(
    'post_type' => array(TribeEvents::POSTTYPE),
    'post_status' => 'publish',
    'posts_per_page' => 12,
    // supress tribe filters to sort by post date
    'suppress_filters' => true,
    'orderby' => 'date',
    'order' => 'DESC',
    'eventDisplay' => 'custom',
    'tax_query'=> array(
        array(
            'taxonomy' => 'city',
            'field' => 'slug',
            'terms' => 'new-york'
        )
    )
);

$get_posts = null;
$get_posts = new WP_Query();
$get_posts->query( $args );

get_header(); ?>

<div class="container">

    <div class="col--main">
        <main class="main" role="main">

            <?php do_action( 'tribe_events_before_template' ); ?>

            <!-- Events List Nav -->
            <nav class="nav-events-list">
                <?php wp_nav_menu(  array( 'events-list' => 'events-list' ) ); ?>
            </nav>

            <!-- Events List -->
            <?php
                if( $get_posts->have_posts() ) : while( $get_posts->have_posts() ) : $get_posts->the_post();
                        get_template_part( 'template-parts/events/events-list-loop' );
                    endwhile;
                else :
                        echo '<h2>Sorry, no posts to display</h2>';
                endif;
              wp_reset_postdata();
            ?>

        </main>
    </div>

    <div class="col--aside">
        <?php get_sidebar(); ?>
    </div><!-- .col-aside -->

</div>

<?php get_footer(); ?>
