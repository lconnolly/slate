<?php get_header(); ?>

<div class="container">

    <div class="col--main">
        <main class="main" role="main">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <!-- Post Content -->
                <?php the_content(); ?>

                <!-- Post Share Buttons -->
                <?php
                    // get_template_part( 'template-parts/posts/post-social' ); ?>

                <!-- Edit Link -->
                <?php edit_post_link( 'Edit this Article', '<p class="edit-post-link">', '</p>' ); ?>


                <!-- Post Discussion -->
                <?php
                    // get_template_part( 'template-parts/posts/post-discussion' ); ?>

            <?php endwhile; ?>

            <?php else: ?>
                <h1><?php _e( 'Sorry, nothing to display.', 'mfc' ); ?></h1>
            <?php endif; ?>
        </main>
    </div><!-- col-main -->

    <div class="col--aside">
        <?php get_sidebar(); ?>
    </div><!-- .col-aside -->

</div><!-- container -->

<?php get_footer(); ?>
