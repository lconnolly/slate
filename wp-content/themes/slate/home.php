<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MyFreeConcert
 * @since MyFreeConcert 1.0
 */

get_header(); ?>

<div class="container">

    <div class="col--main">
        <main class="main" role="main">

            <?php while ( have_posts() ) : the_post() ?>
                <article class="post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>

        </main>
    </div><!-- col-main -->

    <div class="col--aside">
        <?php get_sidebar(); ?>
    </div><!-- .col-aside -->

</div><!-- container -->

<?php get_footer(); ?>
